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
        height: 700px;
    }

    @media screen and (max-width: 600px) {
        #about{
            margin-top: -400px;
        }

        img#howtoImg{
            width: 100%;
        }
    }

    #developer{
        text-align: center;
        color: dodgerblue;
        font-size: 13px;
    }

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">
        <img src="img/headers/snm_fx_logoG-copy.png" alt="SnMFx Logo">
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
        <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
        <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
        <a href="#how" class="w3-bar-item w3-button"><i class="fa fa-list-ol"></i> HOW TO</a>
        <a href="#faq" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> FAQ</a>
        <a href="#fxtools" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> FX TOOLS</a>
        <a href="#broker" class="w3-bar-item w3-button"><i class="fa fa-briefcase"></i> BROKER</a>

        <!--<a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>-->
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
    <a href="#how" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-list-ol"></i> HOW TO</a>
    <a href="#faq" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> FAQ</a>
    <a href="#fxtools" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> FX TOOLS</a>
    <a href="#broker" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-briefcase"></i> BROKER</a>
<!--    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>-->
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">

    <img class="mySlides" src="img/slide/003.jpg" alt="Slide003" id="mySlides">
    <img class="mySlides" src="img/slide/001.jpg" alt="Slide001" id="mySlides">
    <img class="mySlides" src="img/slide/002.jpg" alt="Slide002" id="mySlides">

  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
  </div>
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
<!--    <i class="fa fa-facebook-official w3-hover-opacity"></i>-->
<!--    <i class="fa fa-instagram w3-hover-opacity"></i>-->
<!--    <i class="fa fa-snapchat w3-hover-opacity"></i>-->
<!--    <i class="fa fa-pinterest-p w3-hover-opacity"></i>-->
<!--    <i class="fa fa-twitter w3-hover-opacity"></i>-->
<!--    <i class="fa fa-linkedin w3-hover-opacity"></i>-->
  </div>
</header>

<!-- About Section -->
<div class="w3-container" id="about">

  <h3 class="w3-center">ABOUT SNMFX</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-threequarter">
        <p><span style="font-size: 14pt;"><span style="color: #000000;"><span style="color: #0a5fa1;"><b id="lg">SnMFx</b></span></span><span style="color: #000000;"> is not a broker (forex or binary) but a platform that provides free trading signals, and some tools required for trading. We strive to give traders information about the market and provide trading signals to both experienced and inexperienced traders. Our team of analyst give their best to provide signals that are less risky. </span></span><br /><br /><span style="font-size: 14pt; color: #000000;">At <span style="color: #0a5fa1;"><b id="lg">SnMFx </b></span> Winning is our number one priority.</span></p>
        <p><span style="font-size: 12pt;"><span style="color: #ff0000;"><strong> </strong></span></span></p>
    </div>
    <div class="w3-quarter">
        <div class="w3-panel w3-red">
            <p>NOTE: We edge everyone not to jump into trading on Live account. Start trading on your Demo account for two weeks or more and as soon as you have gained trust to our signals you can start trading on your Live account.</p>
        </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:50px 16px" id="pricing">
    <h3>PRICING</h3>
    <p class="w3-large">Choose a pricing plan that fits your needs.</p>

    <div class="w3-row-padding" style="margin-top:64px">

        <div class="w3-quarter w3-section">
          <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-flat-turquoise w3-xlarge w3-padding-32">Level 1</li>
            <li class="w3-padding-16">
                <h2 class="w3-wide">Free</h2>
                <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-padding-16">Signal 1-5 a day</li>
            <li class="w3-padding-16">NASDAQ : None</li>
            <li class="w3-padding-16">Issued 24/7</li>
            <li class="w3-light-grey w3-padding-24">
                <a class="w3-button w3-flat-turquoise w3-round" href="https://t.me/joinchat/AAAAAEcOPmdEy_mM68DIlw" target="_blank">
                    <i class="fa fa-paper-plane w3-hover-opacity"></i> Join Channel
                </a>
            </li>
          </ul>
        </div>

        <div class="w3-quarter" aria-disabled="true">
          <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-red w3-xlarge w3-padding-48">Level 2</li>
              <li class="w3-padding-16">
                  <h2 class="w3-wide">$ 10</h2>
                  <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-padding-16">Signal 5-10 a day</li>
              <li class="w3-padding-16">NASDAQ : 1 a day</li>
              <li class="w3-padding-16">Issued 24/7</li>
              <li class="w3-light-grey w3-padding-24">
                  <a href="payment.php" class="w3-button w3-red w3-round" disabled>
                      <i class="fa fa-paper-plane w3-hover-opacity"></i> Join Channel
                  </a>
              </li>
          </ul>
        </div>

        <div class="w3-quarter w3-section">
          <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-flat-turquoise w3-xlarge w3-padding-32">Level 3</li>
              <li class="w3-padding-16">
                  <h2 class="w3-wide">$ 30</h2>
                  <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-padding-16">Signal 10 and above a day</li>
              <li class="w3-padding-16">Stocks : 3 a day</li>
              <li class="w3-padding-16">Issued 24/7</li>
              <li class="w3-light-grey w3-padding-24">
                  <button class="w3-button w3-flat-turquoise w3-round" disabled>
                      <i class="fa fa-paper-plane w3-hover-opacity"></i> Join Channel
                  </button>
              </li>
          </ul>
        </div>

        <div class="w3-quarter">
          <ul class="w3-ul w3-white w3-hover-shadow">
              <li class="w3-red w3-xlarge w3-padding-48">Level 4</li>
              <li class="w3-padding-16">
                  <h2 class="w3-wide">$ 50</h2>
                  <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-padding-16">Signal : Unlimited a day</li>
              <li class="w3-padding-16">Stocks : Unlimited a day</li>
              <li class="w3-padding-16">Issued 24/7</li>
              <li class="w3-light-grey w3-padding-24">
                  <button class="w3-button w3-red w3-round" disabled>
                      <i class="fa fa-paper-plane w3-hover-opacity"></i> Join Channel
                  </button>
              </li>
          </ul>
        </div>

    </div>
</div>

<!-- HOW TO Section -->
<div class="w3-container w3-light-grey" style="padding:50px 16px" id="how">
    <h3  class="w3-center">HOW TO TRADE OUR SIGNALS</h3>

    <div class="w3-row-padding" style="margin-top:64px">

        <div class="w3-container">
            <button id="my-w3-btn" onclick="myFunction('h1')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top">
                <b>How to trade SnMfx signals?</b>
            </button>
            <div id="h1" class="w3-show w3-container w3-pale-green w3-leftbar w3-border-green">
                <p>SnMfx signals come in two ways, with EP(entry point) and without EP(entry point).</p>
                <p></p>

                <p>Let's start with the one without EP that will come in as (<i style="color:blue">Buy</i>/<i style="color:red">Sell</i> NOW). If you see a signal like that please note that you have less than 2 minutes to enter that trade. So, we strongly advice you to check if 2 minutes have not passed before entering. If 2 minutes have passed just wait for the next signal to be issued.</p>
                <p></p>

                <p>Now, what is EP(entry point)?
                    Entry point is the price at which an investor <i style="color:blue">Buy</i>/<i style="color:red">Sell</i> a trade. For you to successfully place with EP you'll need to use Buy stop and Sell stop
                </p>
            </div>

            <button id="my-w3-btn" onclick="myFunction('h2')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top">
                <b>Buy Stop</b>
            </button>
            <div id="h2" class="w3-container w3-pale-red w3-leftbar w3-border-red">
                <p><i style="color:blue">“Buy Stop”</i> is a buy pending order above the
                    market price. For example, the EUR/USD current price is 1.0495, and you want to buy EUR/USD if the price
                    goes higher and reaches 1.0515. Therefore, you have to set a buy stop order at 1.0515.</p>
            </div>

            <button id="my-w3-btn" onclick="myFunction('h3')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top">
                <b>Sell Stop</b>
            </button>
            <div id="h3" class="w3-show w3-container w3-pale-green w3-leftbar w3-border-green">
                <p><i style="color:red">"Sell Stop"</i> is a pending order below the market price. For example, EUR/USD’s current price is 1.0495, and you want to <i style="color:red">sell</i> EUR/USD if the price goes lower and reaches 1.0480. Therefore, you have to set a <i style="color:red">sell</i> stop order at 1.0480.</p>
            </div>

            <button id="my-w3-btn" onclick="myFunction('h4')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top">
                <b>How to place <i>Buy Stop</i> and <i>Sell Stop</i>?</b>
            </button>
            <div id="h2" class="w3-container w3-pale-red w3-leftbar w3-bottombar w3-border-red">
                <p><span style="color:red"><b>NOTE:</b> The pictures shown on this section are those of a mobile device.</span></p>
                <p></p>

                <p>
                    1. Open the chart for the currency pair that you want to place a trade.
                </p>
                <p>
                    2. Click the plus(+) sign.<br>
                    <img src="img/how_to/how_to_1.jpg" class="w3-round"  alt="how to 1" id="howtoImg"/>
                </p>
                <p>
                    3. Click on Instant Execution or Market Execution. You will see a list of options.<br>
                    <img src="img/how_to/how_to_2.jpg" class="w3-round" alt="how to 2"  title="how to 2" id="howtoImg"/>
                </p>
                <p>
                    4. Select Buy Stop or Sell Stop, depending on signal issued.<br>
                    <img src="img/how_to/how_to_3.jpg" class="w3-round" alt="how to 3" title="how to 3" id="howtoImg"/>
                </p>
                <p>
                    5. On the Price type in the EP that assigned to the signal.<br>eg AUDUSD BUY (EP 0.71187).<br>
                    <img src="img/how_to/how_to_4.jpg" class="w3-round" alt="how to 4" title="how to 4" id="howtoImg"/>
                </p>
                <p>
                    6. Click Place.
                </p>
                <p></p>
                <p>
                    <span style="color:red">Be adviced, it's rare for SnMFx to give out take profit and stop loss. You can decide to put take profit and stop loss. We do tell when to close the trades.</span>
                </p>
            </div>

        </div>

    </div>
</div>

<!-- Frequently Asked Questions Section -->
<div class="w3-container w3-dark-grey" style="padding:50px 16px" id="faq">
    <h3  class="w3-center">FREQUENTLY ASKED QUESTIONS</h3>

    <div class="w3-row-padding" style="margin-top:64px">

        <button id="my-w3-btn" onclick="myFunction('q1')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>1. What Is Forex?</b>
        </button>
        <div id="q1" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">
            <p>Forex trading, also known by the name of currency trading or FX trading, refers to buying a particular
                currency while selling another in exchange. Trading currencies always involves exchanging one currency for another.</p>
            <p></p>
            <p>The ultimate aim can vary and can be any of the below but not limited to the below:</p>
            <p>
            <ul>
                <li>Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for speculative purposes, with the goal to make a profit.</li>
                <li>Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for trading purposes;</li>
                <li>Exchanging currency A (e.g. USD) to currency B (e.g. EUR) for travelling purposes;</li>
            </ul>
            </p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q2')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>2. How Does Forex Trading Work?</b>
        </button>
        <div id="q2" class="w3-hide w3-container w3-pale-red w3-leftbar w3-rightbar w3-border-red">
            <p>Forex trading is in essence trading currencies for one another. As such, an client sells one currency
                against another at a current market rate.</p>
            <p></p>
            <p>In order to be able to trade, it is required to open an account and hold currency A and then exchange currency
                A for currency B either for a long term or a short-term trade, with the ultimate goal varying accordingly.</p>
            <p></p>
            <p>Since FX trading is performed on currency pairs (i.e. the quotation of the relative value of one currency
                unit against another currency unit), in which the first currency is the so-called base currency, while the
                second currency is called the quote currency.</p>
            <p></p>
            <p>For example, the quotation EUR/USD 1.2345 is the price of the euro expressed in US dollars, which means that
                1 euro equals 1.2345 US dollars.</p>
            <p></p>
            <p>Currency trading can be carried out 24 hours a day, from 22.00 GMT on Sunday until 22.00 GMT on Friday, with
                currencies traded among the major financial centers of London, New York, Tokyo, Zürich, Frankfurt, Paris, Sydney,
                Singapore and Hong Kong.</p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q3')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>3. What Influences Prices in Forex Trading?</b>
        </button>
        <div id="q3" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">
            <p>There is an endless number of factors that all contribute and influence the prices in forex trading (i.e. currency
                rates) daily, but it could be safe to say that there are 6 major factors which contribute the most and are more or
                less the main driving forces for forex trading price fluctuation:</p>
            <p></p>
            <p>
            <ul>
                <li>Differentials in inflation</li>
                <li>Current account deficits</li>
                <li>Public debt</li>
                <li>Differentials in interest rates</li>
                <li>Political and economic stability</li>
                <li>Terms of trade</li>
            </ul>
            </p>
            <p></p>
            <p>In order to best comprehend the above 6 factors, you will have to keep in mind that currencies are traded against
                one another. So when one falls, another one rises as the price denomination of any currency is always stated against
                another currency.</p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q4')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>4. What is Forex Trading Software?</b>
        </button>
        <div id="q4" class="w3-hide w3-container w3-pale-red w3-leftbar w3-rightbar w3-border-red">
            <p>Forex trading software is an online trading platform provided to each client, which allows them to view,
                analyze and trade currencies, or other asset classes.</p>
            <p></p>
            <p>In simple terms, each client is provided access to a trading platform (i.e. software) which is directly
                connected to the global market price feed and allows them to perform transactions without the help of a third party.</p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q5')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>5. Who are Forex Trading Market Participants?</b>
        </button>
        <div id="q5" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">
            <p>Forex trading market participants can fall in any of the following categories:</p>
            <p></p>
            <p>
            <ul>
                <li>Businesses that purchase raw materials or goods from overseas and need to exchange their local currency to the currency
                    of the country of the seller.</li>
                <li>Governments or central banks that either buy or sell currencies and try to adjust financial imbalances, or adjust
                    economic conditions.</li>
                <li>Banking institutions that exchange money to service their clients or to lend money to overseas clients.</li>
                <li>Travellers or overseas consumers who exchange money to travel overseas or purchase goods from overseas.</li>
                <li>Investors or speculators who exchange currencies, which either require a foreign currency, to perform trading in equities
                    or other asset classes from overseas or either are trading currencies with the aim of making a profit from market changes.</li>
            </ul>
            </p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q6')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>6. What is Important in Forex Trading?</b>
        </button>
        <div id="q6" class="w3-hide w3-container w3-pale-red w3-leftbar w3-rightbar w3-border-red">
            <p>As a retail foreign exchange trader, the most important factors that affect your trading is trade execution quality,
                speed and spreads. The one affects the other.</p>
            <p></p>
            <p>A spread is the difference between the bid and the ask price of a currency pair (buy or sell price), and so to make
                it even easier it is the price at which your broker or bank is willing to sell or buy your requested trade order. Spreads,
                however, only matter with the correct execution.</p>
            <p></p>
            <p>In the forex trading marketplace, when we refer to execution we mean the speed at which a foreign exchange trader can
                actually buy or sell what they see on their screen or what they are quoted as bid/ask price over the phone. A good price
                makes no sense if your bank or broker cannot fill your order fast enough to get that bid/ask price.</p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q7')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>7. What are Majors in Forex Trading?</b>
        </button>
        <div id="q7" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">
            <p>In forex trading, some currency pairs are nicknamed majors (major pairs). This category includes the most traded
                currency pairs and they always include the USD on one side.</p>
            <p></p>
            <p>Major pairs include: EUR/USD, USD/JPY, GBP/USD, USD/CHF, USD/CAD, AUD/USD, NZD/USD</p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q8')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>8. What are Minors in Forex Trading?</b>
        </button>
        <div id="q8" class="w3-hide w3-container w3-pale-red w3-leftbar w3-rightbar w3-border-red">
            <p>In forex trading, minor currency pairs or crosses are all currency pairs that do not include the USD on one side.</p>
        </div>

        <button id="my-w3-btn" onclick="myFunction('q9')" class="w3-button w3-block  w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
            <b>9. What are Exotics in Forex Trading?</b>
        </button>
        <div id="q9" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-bottombar w3-border-green">
            <p>In forex trading, exotic pairs include the less traded currency pairs that include a major currency paired with
                the currency of a smaller or emerging economy. These pairs usually have less volatility, less liquidity and do not
                present the dynamic behavior of major pairs and crosses.</p>
        </div>

    </div>
</div>

<!-- Brokers Section -->
<div class="w3-container w3-center w3-light-grey" style="padding:50px 16px" id="broker">
    <h3>BROKERS</h3>
    <p class="w3-large">Choose a broker of your chose.</p>

    <div class="w3-row-padding" style="margin-top:64px">

        <?php
        $randomRow = array(
            array('name'=>'Exness', 'title'=>'exness', 'href'=>'https://www.exness.com/a/tgjqigjq', 'image'=>'img/brokers/exness-logo-png-2.png', 'minimum_dep'=>'5'),
            array('name'=>'Justforex', 'title'=>'justforex', 'href'=>'https://justforex.com/landing/easy-to-start-with-justforex?ref=137395', 'image'=>'img/brokers/justforex.jpg', 'minimum_dep'=>'5'),
            array('name'=>'XM', 'title'=>'xm', 'href'=>'https://www.xm.com/', 'image'=>'img/brokers/xm.jpg', 'minimum_dep'=>'5'),
            array('name'=>'Markets.com', 'title'=>'markets.com', 'href'=>'https://za.markets.com/', 'image'=>'img/brokers/markets.png', 'minimum_dep'=>'25'),
            array('name'=>'Hotforex', 'title'=>'hotforex', 'href'=>'https://my.hotforex.co.za', 'image'=>'img/brokers/hotforex.png', 'minimum_dep'=>'5'),
            array('name'=>'Tradersway', 'title'=>'tradersway', 'href'=>'https://www.tradersway.com/', 'image'=>'img/brokers/tradersway.png', 'minimum_dep'=>'10'),
            array('name'=>'Cyber-fx', 'title'=>'cyber-fx', 'href'=>'https://www.cyber-fx.com/', 'image'=>'img/brokers/cyber-fx.png', 'minimum_dep'=>'100'),
            array('name'=>'FBS', 'title'=>'fbs', 'href'=>'https://FBS.com/?ppu=1162428', 'image'=>'img/brokers/fbs.jpg', 'minimum_dep'=>'5')
        );

        $arrayNum = count($randomRow);
        ?>

        <div class="w3-responsive">
            <table class="w3-table-all w3-bordered w3-hoverable">
                <tr class="w3-red w3-large">
                    <th>BROKER</th>
                    <th class="w3-center">MINIMUM DEPOSIT $</th>
                    <th>NAME</th>
                </tr>

                <?php
                for($i = 0; $i < $arrayNum; $i++)
                {
                    ?>
                    <tr>
                        <td>
                            <a title="<?= $randomRow[$i]['title'];?>" href="<?= $randomRow[$i]['href'];?>" target="_blank" rel="noopener noreferrer">
                                <img class="w3-hover-opacity" title="<?= $randomRow[$i]['title'];?>" src="<?= $randomRow[$i]['image'];?>" alt="" width="100" height="60" />
                            </a>
                        </td>
                        <td class="w3-center">
                            <a title="<?= $randomRow[$i]['title'];?>" href="<?= $randomRow[$i]['href'];?>" target="_blank" rel="noopener noreferrer">
                                $<?= $randomRow[$i]['minimum_dep'];?>
                            </a>
                        </td>
                        <td>
                            <a title="<?= $randomRow[$i]['title'];?>" href="<?= $randomRow[$i]['href'];?>" target="_blank" rel="noopener noreferrer">
                                <?= $randomRow[$i]['name'];?>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </table>
        </div>

    </div>
</div>

<!-- FX tools Section -->
<div class="w3-container w3-dark-grey" style="padding:50px 16px" id="fxtools">
    <h3  class="w3-center">FX TOOLS</h3>

    <div class="w3-row-padding" style="margin-top:64px">

        <!--FX TOOLS-->
        <div class="w3-container">
            <button id="my-w3-btn" onclick="myFunction('t1')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
                <b>ECOMOMIC CALENDAR</b>
            </button>
            <div id="t1" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">

                <p></p>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Economic Calendar</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                        {
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "importanceFilter": "1",
                            "currencyFilter": "USD,AUD,CAD,EUR,CNY,JPY,NLG,FRF,GRD,NZD,ZAR,CHF,SEK,GBP"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->

            </div>

            <button id="my-w3-btn" onclick="myFunction('t2')" class="w3-button w3-block  w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
                <b>FOREX CROSS RATES</b>
            </button>
            <div id="t2" class="w3-hide w3-container w3-pale-red w3-leftbar w3-rightbar w3-border-red">

                <p></p>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Forex Rates</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                            "width": "100%",
                            "height": "100%",
                            "currencies": [
                            "EUR",
                            "USD",
                            "JPY",
                            "GBP",
                            "CHF",
                            "AUD",
                            "CAD",
                            "NZD",
                            "CNY",
                            "TRY",
                            "SEK",
                            "NOK",
                            "DKK",
                            "ZAR",
                            "HKD",
                            "SGD",
                            "THB",
                            "MXN",
                            "SAR",
                            "RUB",
                            "ILS"
                        ],
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

            <button id="my-w3-btn" onclick="myFunction('t3')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
                <b>CURRENCY CONVERTER</b>
            </button>
            <div id="t3" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">

                <p></p>

                <!-- Dukascopy.com Widget Widget BEGIN -->
                <script type="text/javascript">
                    DukascopyApplet = {
                        "type":"complex_converter","params":{
                            "header":false,
                            "tab":0,
                            "tabSelectorColor":"#ff0000",
                            "chartLineWidth":"1",
                            "chartCheckpoints":false,
                            "sliderAnimation":"float",
                            "tabsAnimation":"vertical",
                            "amount":"100",
                            "numberOfDays":90,
                            "currencyA":"EUR",
                            "currencyB":"USD",
                            "type":"bid",
                            "dateType":0,
                            "date":1459272852613,
                            "textColor":"#1954aa",
                            "ccTabChartColor":"#4678e6",
                            "hrCurrencyA":"EUR",
                            "hrCurrencyB1":"USD",
                            "hrCurrencyB2":"AUD",
                            "hrCurrencyB3":"CAD",
                            "hrCurrencyB4":"CHF",
                            "startType":0,
                            "startDays":"90",
                            "start":1451354400000,
                            "endType":0,
                            "end":1459133999999,
                            "frequency":"daily",
                            "currencyB1Color":"#4678e6",
                            "currencyB2Color":"#2ca563",
                            "currencyB3Color":"#cb0000",
                            "currencyB4Color":"#36aed5",
                            "tableHighlightColor":"#fffafa",
                            "liveCurrency":"EUR",
                            "liveBorderColor":"#D92626",
                            "liveHighlightColor":"#fffafa",
                            "width":"100%",
                            "height":"650"
                        }
                    };
                </script>
                <script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                <!--Dukascopy.com Widget END-->

            </div>

            <button id="my-w3-btn" onclick="myFunction('t4')" class="w3-button w3-block w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
                <b>FOREX MARKET HOURS</b>
            </button>
            <div id="t4" class="w3-hide w3-container w3-pale-red w3-leftbar w3-rightbar w3-border-red">

                <p></p>

                <!-- Dukascopy.com Widget Widget BEGIN -->
                <script type="text/javascript">
                    DukascopyApplet = {
                        "type":"fxmarkethours","params":{
                            "showHeader":false,
                            "displayMainMenu":true,
                            "displayTimezoneChange":true,
                            "displayInstrumentChange":true,
                            "displaySpreadIndicator":true,
                            "displayVolumeIndicator":true,
                            "displayVolatilityIndicator":true,
                            "displayFollowButton":true,
                            "allowTimezoneChange":true,
                            "allowInstrumentChange":true,
                            "defaultTimezone":0,
                            "showIndicator":"0",
                            "defaultFollowMode":false,
                            "worldMapColor":"red",
                            "hoursBackground":"#444f5f",
                            "hoursActiveBackground":"#7d92b0",
                            "hoursTextColor":"#ffffff",
                            "currentHourBGColor":"#f9fdff",
                            "dstHourColor":"#0cf6ff",
                            "indicatorBarColor":"#5090c6",
                            "graphPointsColor":"#ffffff",
                            "spreadTopGraphColor":"#208c1c",
                            "spreadBottomGraphColor":"#dc0e0e",
                            "volatilityGraphColor":"#146fba",
                            "availableInstruments":"AUD/USD,EUR/USD,GBP/USD,NZD/USD,USD/CAD,USD/CHF,USD/JPY,USD/NOK,USD/SEK,USD/SGD,XAG/USD,XAU/USD,AUD/CAD,AUD/CHF,AUD/JPY,AUD/NZD,CAD/CHF,CAD/JPY,CHF/JPY,EUR/AUD,EUR/CAD,EUR/CHF,EUR/DKK,EUR/GBP,EUR/HKD,EUR/JPY,EUR/NOK,EUR/NZD,EUR/SEK,GBP/AUD,GBP/CAD,GBP/CHF,GBP/JPY,GBP/NZD,NZD/CAD,NZD/CHF,NZD/JPY,AUD/SGD,CAD/HKD,CHF/SGD,EUR/PLN,EUR/SGD,EUR/TRY,HKD/JPY,SGD/JPY,USD/DKK,USD/HKD,USD/MXN,USD/PLN,USD/RUB,USD/TRY,USD/ZAR","instrument":"EUR/USD","width":"100%","height":"530"
                        }
                    };
                </script>
                <script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                <!--Dukascopy.com Widget END-->

            </div>

            <button id="my-w3-btn" onclick="myFunction('t5')" class="w3-button w3-block w3-left-align w3-green" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
                <b>PROFIT CALCULATOR</b>
            </button>
            <div id="t5" class="w3-hide w3-container w3-pale-green w3-leftbar w3-rightbar w3-border-green">

                <p></p>

                <!-- Dukascopy.com Widget Widget BEGIN -->
                <script type="text/javascript">
                    DukascopyApplet = {
                        "type":"fx_calculator","params":{
                            "header":false,
                            "tabs":false,
                            "orientation":"portrait",
                            "currency":"USD",
                            "showValues":"account",
                            "side":"ask",
                            "rollover":"advanced",
                            "islamic":false,
                            "availableInstruments":"l:",
                            "instrument":"EUR/USD",
                            "amount":"10000",
                            "lot":"mio",
                            "resultColor":"#5e5e5e",
                            "width":"100%",
                            "height":"630"
                        }
                    };
                </script>
                <script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                <!--Dukascopy.com Widget END-->

            </div>

            <button id="my-w3-btn" onclick="myFunction('t6')" class="w3-button w3-block w3-left-align w3-red" data-toggle="tooltip" data-placement="top" title="Click to Show/Hide">
                <b>MARGIN REQUIREMENTS</b>
            </button>

            <div id="t6" class="w3-hide w3-container w3-pale-red w3-leftbar w3-bottombar w3-rightbar w3-border-red">

                <p></p>

                <!-- Dukascopy.com Widget Widget BEGIN -->
                <script type="text/javascript">DukascopyApplet = {
                        "type":"overnight_policy_rollover","params":{
                            "showHeader":false,
                            "tableBorderColor":"#D92626",
                            "highlightColor":"#fffafa",
                            "rolloverPolicy":true,
                            "clientType":"regular",
                            "currency":"USD",
                            "amount":"0.1",
                            "availableInstruments":"l:",
                            "showForex":true,
                            "showCFD":true,
                            "instrumentType":"forex",
                            "width":"100%",
                            "height":"500"
                        }
                    };
                </script>
                <script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                <!--Dukascopy.com Widget END-->

            </div>

        </div>

    </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:50px 16px" id="contact">
<!--  <h3 class="w3-center">CONTACT</h3>-->
<!--  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>-->
<!--  <div class="w3-row-padding" style="margin-top:64px">-->
<!--    <div class="w3-half">-->
<!--      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>-->
<!--      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>-->
<!--      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>-->
<!--      <br>-->
<!--      <form action="/action_page.php" target="_blank">-->
<!--        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>-->
<!--        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>-->
<!--        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>-->
<!--        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>-->
<!--        <p>-->
<!--          <button class="w3-button w3-black" type="submit">-->
<!--            <i class="fa fa-paper-plane"></i> SEND MESSAGE-->
<!--          </button>-->
<!--        </p>-->
<!--      </form>-->
<!--    </div>-->
<!--    <div class="w3-half">-->
<!--       Add Google Maps -->
<!--      <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>-->
<!--    </div>-->
<!--  </div>-->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container" style="padding:50px 16px">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Quotes</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
                "symbols": [
                {
                    "title": "Nasdaq 100",
                    "proName": "INDEX:IUXX"
                },
                {
                    "title": "EUR/USD",
                    "proName": "FX_IDC:EURUSD"
                },
                {
                    "description": "USD/JPY",
                    "proName": "FX_IDC:USDJPY"
                },
                {
                    "description": "EUR/GBP",
                    "proName": "FX_IDC:EURGBP"
                },
                {
                    "description": "ZAR/JPY",
                    "proName": "FX_IDC:ZARJPY"
                },
                {
                    "description": "NZD/CHF",
                    "proName": "FX_IDC:NZDCHF"
                },
                {
                    "description": "AUDCAD",
                    "proName": "FX_IDC:AUDCAD"
                }
            ],
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
<!--    <i class="fa fa-facebook-official w3-hover-opacity"></i>-->
<!--    <i class="fa fa-instagram w3-hover-opacity"></i>-->
<!--    <i class="fa fa-snapchat w3-hover-opacity"></i>-->
<!--    <i class="fa fa-pinterest-p w3-hover-opacity"></i>-->
<!--    <i class="fa fa-twitter w3-hover-opacity"></i>-->
<!--    <i class="fa fa-linkedin w3-hover-opacity"></i>-->

      <span style="font-size: 12px;">Copyright &copy; 2018-<?= date('Y'); ?> SnMFx. All Rights Reserved.</span><br>
      <a href="#" id="developer"><i><b>Developed by SnM ICT Systems</b></i></a>

  </div>
<!--  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>-->
</footer>
 
<!-- Add Google Maps -->
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 10000);
    }

    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
