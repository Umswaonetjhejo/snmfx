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
    <h3 class="w3-center">Upgrade to Level <?= $_GET['level']; ?></h3>
    <p class="w3-large w3-center">Fill the form and submit it to receive and email with payment methods</p>

    <div class="w3-row">

        <div class="w3-third w3-container">

        </div>

        <form class="w3-third w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" action="" method="POST">

            <div class="w3-container">

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <label>
                            <input class="w3-input w3-border w3-round" name="name_first" type="text" placeholder="Username">
                        </label>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <label>
                            <input class="w3-input w3-border w3-round" name="email_address" type="text" placeholder="Email">
                        </label>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <label>
                            <input class="w3-input w3-border w3-round" name="cell_number" type="text" placeholder="Cell Number">
                        </label>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round" name="amount" type="hidden" value="<?= $_GET['level']; ?>" disabled>
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

