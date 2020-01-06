<?php
/**
 * Created by PhpStorm.
 * User: mskosana
 * Date: 2019-09-02
 * Time: 12:58 PM
 */

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["name_first"]))
    {
        $_SESSION['nameErr'] = "Username is required";
    }
    else
    {
        $username = test_input($_POST["name_first"]);

    }

    if(empty($_POST["email_address"]))
    {
        $_SESSION['emailErr'] = "Email is required";
    }
    else
    {
        $email = test_input($_POST["email_address"]);

        // check if e-mail address is well-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['emailErr'] = "Invalid email format";
        }
    }

    if(empty($_POST["cell_number"]))
    {
        $_SESSION['cellphoneErr'] = "Cellphone number is required";
    }
    else
    {
        $cellphone = test_input($_POST["cell_number"]);

        // check if cellphone is valid
        if(!filter_var($cellphone, FILTER_VALIDATE_INT))
        {
            $_SESSION['$cellphoneErr'] = "Cellphone number must be numeric";
        }
    }

    $referral = test_input($_POST["refferal"]);

    $level = test_input($_POST['level']);

    $amount = test_input($_POST['amount']);

    $_SESSION['username'] = $_POST["name_first"];
    $_SESSION['email'] = $_POST["email_address"];
    $_SESSION['cellphone'] = $_POST["cell_number"];
    $_SESSION['refferal'] = $_POST["refferal"];
    $_SESSION['level'] = $_POST['level'];
    $_SESSION['amount'] = $_POST['amount'];

    exit;

    if(!$_SESSION['nameErr'] && !$_SESSION['emailErr'] && !$_SESSION['cellphoneErr'])
    {
        if(!$nameErr && !$emailErr && !$cellphoneErr)
        {
            $databaseConnect = database_connect();

            if($databaseConnect['msg_type'] === "danger")
            {
                echo $databaseConnect['msg'];
            }
            else
            {
                $todaysDate = date("Y/m/d");

                $sendEmail = send_email($email, $cellphone, $level);

                echo $level;

                if($sendEmail['msg_type'] === "success")
                {
                    $storeData = store_subscriber($username, $email, $cellphone, $referral, $level, $todaysDate);

                }

            }
        }
    }
    else
    {
        header('Location: checkout.php');
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function send_email($email, $cellphone, $level)
{

    $to = "$email";
    $subject = "HTML email";

    $message = "<html lang='en'>
                    <head>
                        <title>$level Payment</title>
                    </head>
                    <body>
                    
                        <h2>Payment Methods</h2>
                        
                        <p>Choose one of the payments bellow:</p>
                        
                        <h3><b>Luno</b></h3>
                        <p><b>Step 1:</b> Login to Luno. If you don't have the account you can <a href='https://www.luno.com/en/login'>Sign In</a></p>
                        <p><b>Step 2:</b> Deposit money into your Luno account</p>
                        <p><b>Step 3:</b> Sent the amount of the Level you want to join to this SnMFx bitcoin address : 3E1HGeBBeJSqbFx2Jt1GdYzVAdvLcZH8ss</p>
                        <p><b>Step 4:</b> After sending the amount successfully, take a screenshot of the success message</p>
                        <p><b>Step 5:</b> Sent the screenshot, the Level (".$level.") you want to join, your email address (".$email.") and your cellphone number (".$cellphone.") to https://t.me/SnMfx on telegram</p>
                        <p><b>Step 6:</b> Our support team will verify the payment and add you on the correct channel if verified successfully.</p>

                        <h3><b>Neteller</b></h3>
                        <p><b>Step 1:</b> Login to Neteller. If you don't have the account you can <a href='https://member.neteller.com/lightSignup?lang=en&btag=a_38334b_1908c_'>Sign In</a></p>
                        <p><b>Step 2:</b> Deposit money into your Neteller account</p>
                        <p><b>Step 3:</b> Sent the amount of the Level you want to join to this SnMFx email address : billing@snmfx.co.za</p>
                        <p><b>Step 4:</b> After sending the amount successfully, take a screenshot of the success message</p>
                        <p><b>Step 5:</b> Sent the screenshot, the Level (".$level.") you want to join, your email address (".$email.") and your cellphone number (".$cellphone.") to https://t.me/SnMfx on telegram</p>
                        <p><b>Step 6:</b> Our support team will verify the payment and add you on the correct channel if verified successfully.</p>
                        
                        <p><b>Regards</b></p>
                        <p>SnMFx Billing Department</p>
                                                
                    </body>
                </html>";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <billing@snmfx.co.za>' . "\r\n";
    $headers .= 'Cc: support@snmfx.co.za' . "\r\n";

    if(mail($to,$subject,$message,$headers))
    {
        $msg =  array("msg"=>"Email sent to $to. Check the email for payment processes.", "msg_type"=>"success");

    }
    else
    {
        $msg =  array("msg"=>"Failed to sent email. Please make sure the email you provided is valid.", "msg_type"=>"danger");
    }

    return $msg;
}

function database_connect()
{

    $servername = "localhost";
    $username = "snmfx";
    $password = "snmfx@MusBon@9590";
    $dbName = "snmfx";

    $conn = new mysqli($servername, $username, $password, $dbName);

    if($conn)
    {

        $conectionMsg = array("msg" => "Connected successfully", "msg_type" => "success", "conn" => $conn);

    }
    else
    {
        $conectionMsg = array("msg"=>"Connection failed: " . $e->getMessage(), "msg_type"=>"danger");
    }

    return $conectionMsg;

}

function store_subscriber($databaseConnection, $username, $email, $cellphone, $referral, $level, $todaysDate)
{

    $query = "INSERT INTO subscribers(sub_username, sub_email, sub_cell_number, sub_refferal, sub_level, sub_created_date )
             VALUES(?, ?, ?, ?, ?, ? )";

    $stmt = $databaseConnection->prepare($query);
    $stmt->bind_param($username, $email, $cellphone, $referral, $level, $todaysDate);
    $stmt->execute();
    $stmt->close();

    $databaseConnection->close();

}