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


</style>
<body>

<div class="w3-container w3-dark-grey" style="padding:50px 16px" id="pricing">
    <h3 class="w3-center">Make a payment</h3>
    <p class="w3-large w3-center">Choose payment method</p>

    <div class="w3-row-padding">

        <form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" action="https://sandbox.payfast.co.za/eng/process" method="POST">

            <div class="w3-twothird w3-container">

                <table class="w3-table w3-striped w3-bordered">
                    <tr>
                        <td>
                            <input class="w3-radio" type="radio" name="gender" value="male" checked>
                            <label>
                                <img class="w3-image" src="img/payment/PayFast-logo.png" alt="PayFast Logo" style="max-height: 29px; max-width: 109px;">
                            </label>
                        </td>
                    </tr>
                    <tr>
<!--                        <td>Eve</td>-->
                    </tr>
                    <tr>
<!--                        <td>Adam</td>-->
                    </tr>
                </table>
            </div>

            <div class="w3-third w3-container">

                <input type="hidden" name="merchant_id" value="11780648">
                <input type="hidden" name="merchant_key" value="jl0auukku1z9k">
                <input type="hidden" name="return_url" value="https://www.yoursite.com/return">
                <input type="hidden" name="cancel_url" value="https://www.yoursite.com/cancel">
                <input type="hidden" name="notify_url" value="https://www.yoursite.com/notify">

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="w3-xxlarge fa fa-user"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="name_first" type="text" value="Musa">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="w3-xxlarge fa fa-user"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="name_last" type="text" value="Skosana">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="w3-xxlarge fa fa-envelope-o"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="email_address" type="text" value="umswaonetjhejo@gmail.com">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="w3-xxlarge fa fa-mobile-alt"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="cell_number" type="text" value="0820726997">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="w3-xxlarge fa fa-dollar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="amount" type="text" value="10">
                    </div>
                </div>

                <input type="hidden" name="m_payment_id" value="01AB">
                <input type="hidden" name="item_name" value="Test Item">
                <input type="hidden" name="item_description" value="A test product">
                <input type="hidden" name="custom_int1" value="2">
                <input type="hidden" name="custom_str1" value="Extra order information">

                <input type="hidden" name="email_confirmation" value="1">
                <input type="hidden" name="confirmation_address" value="umswaonetjhejo@gmail.com">

                <!-- Optional -->
                <input type="hidden" name="payment_method" value="cc">
                <input type="hidden" name="setup" value='{ "split_payment" : {
                    "merchant_id":10000105,
                    "percentage":10,
                    "min":100,
                    "max":100000}}' >

                <input type="hidden" name="signature" value="f103e22c0418655fb03991538c51bfd5">

                <div class="w3-row w3-section w3-center">
                    <input type="submit" class="w3-btn w3-blue" value="Confirm Payment" name="submit">
                </div>

            </div>

        </form>

    </div>
</div>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    // Construct variables
    $cartTotal = $_POST['amount'];// This amount needs to be sourced from your application

    $data = array(
        // Merchant details
        'merchant_id' => $_POST['merchant_id'],
        'merchant_key' => $_POST['merchant_key'],
        'return_url' => $_POST['return_url'],
        'cancel_url' => $_POST['cancel_url'],
        'notify_url' => $_POST['notify_url'],

        // Buyer details
        'name_first' => $_POST['name_first'],
        'name_last'  => $_POST['name_last'],
        'email_address'=> $_POST['email_address'],

        // Transaction details
        'm_payment_id' => $_POST['m_payment_id'], //Unique payment ID to pass through to notify_url

        // Amount needs to be in ZAR
        // If multicurrency system its conversion has to be done before building this array
        'amount' => number_format( sprintf( "%.2f", $cartTotal ), 2, '.', '' ),
        'item_name' => $_POST['item_name'],
        'item_description' => $_POST['item_description'],
        'custom_int1' => $_POST['custom_int1'], //custom integer to be passed through
        'custom_str1' => $_POST['custom_str1']
    );

    // Create parameter string
    $pfOutput = '';

    foreach( $data as $key => $val )
    {
        if(!empty($val))
        {
            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
        }
    }

    // Remove last ampersand
    $getString = substr( $pfOutput, 0, -1 );

    //Uncomment the next line and add a passphrase if there is one set on the account
    $passPhrase = '/MusBon/9590/19';

    if( isset( $passPhrase ) )
    {
        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
    }

    $data['signature'] = md5( $getString );
}

?>