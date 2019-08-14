<!DOCTYPE html>
<html lang="en">
<title>SNMFX</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        line-height: 1.8;
    }
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        /*background-image: url("img/slide/003.jpg");*/
        min-height: 100%;
    }
    .w3-bar .w3-button {
        padding: 16px;
    }
    #about{
        padding:50px 16px
    }

    img#howtoImg{
        width:350px
    }

    img#mySlides{
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 600px) {
        #about{
            margin-top: -400px;
        }

        img#howtoImg{
            width: 100%;
        }
    }

    .error {
        color: #FF0000;
    }

</style>
<body>

<?php
session_start();

// define variables and set to empty values
$nameErr = $emailErr = $cellphoneErr = "";
$username = $email = $cellphone = $refferal = "";

if(isset($_GET['level']))
{
    $_SESSION['level'] = $_GET['level'];
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["name_first"]))
    {
        $nameErr = "Username is required";
    }
    else
    {
        $name = test_input($_POST["name_first"]);

    }

    if(empty($_POST["email_address"]))
    {
        $emailErr = "Email is required";
    }
    else
    {
        $email = test_input($_POST["email_address"]);

        // check if e-mail address is well-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST["cell_number"]))
    {
        $cellphoneErr = "Cellphone number is required";
    }
    else
    {
        $cellphone = test_input($_POST["cell_number"]);

        // check if e-mail address is well-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $cellphoneErr = "Cellphone number must be numeric";
        }
    }

    $refferal = test_input($_POST["refferal"]);

    $level = test_input($_SESSION['level']);

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>

<div class="w3-container w3-dark-grey" style="padding:50px 16px" id="pricing">
    <h3 class="w3-center">Upgrade to Level <?= $_SESSION['level']; ?></h3>
    <p class="w3-large w3-center">Fill the form and submit it to receive and email with payment methods</p>

    <div class="w3-row">

        <div class="w3-third w3-container">

        </div>

        <form class="w3-third w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="w3-container">

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <label>
                            <input class="w3-input w3-border w3-round" name="name_first" type="text" placeholder="Username">
                            <span class="error"><?php echo $nameErr;?></span>
                        </label>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <label>
                            <input class="w3-input w3-border w3-round" name="email_address" type="text" placeholder="Email">
                            <span class="error"><?php echo $emailErr;?></span>
                        </label>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <label>
                            <input class="w3-input w3-border w3-round" name="cell_number" type="text" placeholder="Cell Number">
                            <span class="error"><?php echo $cellphoneErr;?></span>
                        </label>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round" name="refferal" type="text" placeholder="Refferal">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round" name="level" type="hidden" value="<?= $_SESSION['level']; ?>" disabled>
                    </div>
                </div>

                <div class="w3-row w3-section w3-center">
                    <input type="submit" class="w3-btn w3-blue w3-round" value="Submit" name="submit">
                </div>

            </div>

        </form>

        <div class="w3-third w3-container">

        </div>

    </div>
</div>

</body>
</html>
