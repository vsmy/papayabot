<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
        <header class="about">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-sm-between">
                        <div class="logo">
                            <h5 class="title-logo">Papayabot</h5>
                        </div>
                        <div class="header-title">
                            <h1 class="title black">
                                About us
                            </h1>
                            <div class="subtitle">
                                We help the people make
                                fast, free and secure transactions.
                            </div>
                        </div>
                        <div class="text-xs-center">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-bg"></div>
                    </div>
                </div>
            </div>
        </header>

        {{--<section>--}}
            {{--<div class="container">--}}
                {{--<div class="row align-items-center" >--}}
                    {{--<div class="col-md-6">--}}
                        {{--<h1 class="title black">--}}
                            {{--Send money easily & safely--}}
                        {{--</h1>--}}
                        {{--<h5 class="subtitle">--}}
                            {{--Don’t worry about managing private keys or security. Make payments for free inside Telegram until you need send crypto to external wallets.--}}
                        {{--</h5>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row mt-100" >--}}
                 {{--<div class="col-md-4">--}}
                     {{--<div class="icons secure-icon"></div>--}}
                     {{--<h3 class="title black">--}}
                         {{--Secure--}}
                     {{--</h3>--}}
                     {{--<h5 class="subtitle description">--}}
                         {{--Transactions are based on blockchain technology. We use Bitgo multisignature wallets to maintain the highest level of security.--}}
                     {{--</h5>--}}
                 {{--</div>--}}
                 {{--<div class="col-md-4">--}}
                     {{--<div class="icons platform-icon"></div>--}}
                     {{--<h3 class="title black">--}}
                         {{--Cross - platform--}}
                     {{--</h3>--}}
                     {{--<h5 class="subtitle description">--}}
                         {{--Compatible with Android, iOS, macOS, Linux, Windows and web-client for your browser.--}}
                     {{--</h5>--}}
                 {{--</div>--}}
                 {{--<div class="col-md-4">--}}
                     {{--<div class="icons chat-icon"></div>--}}
                     {{--<h3 class="title black">--}}
                         {{--Multi languages--}}
                     {{--</h3>--}}
                     {{--<h5 class="subtitle description">--}}
                         {{--Supporting over 12 languages translated by our community--}}
                     {{--</h5>--}}
                 {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        {{--<section class="custom">--}}
            {{--<div class="container ">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6 d-flex flex-column justify-content-center">--}}
                        {{--<div class="header-title">--}}
                            {{--<a class="btn btn-papayabot-green" href="">  <div class="subtitle">JOIN COMMUNITY</div></a>--}}

                            {{--<h1 class="title black">--}}
                                {{--Use Papayabot to tip friends in your groups and in the community.--}}
                            {{--</h1>--}}
                            {{--<div class="subtitle">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="text-xs-center">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="custom-bg m-auto"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
        {{--</section>--}}

        <section class="standard" >
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mobile-about"></div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="header-title">
                            <h1 class="title black">
                                Our mission
                            </h1>
                            <div class="subtitle">
                                Don’t worry about managing private keys or security. Make payments for free inside Telegram until you need send crypto to external wallets. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>

                        </div>
                        <div class="text-xs-center">
                            <h3 class="title black">
                                Our partners
                            </h3>
                         <div class="mt-5">
                             <img class="ml-0" src="/images/icons/about/stellar.svg" alt="">
                             <img class="ml-5" src="/images/icons/about/paysend.svg" alt="">
                             <img class="ml-5" src="/images/icons/about/bitgo.png" alt="">
                         </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="custom revers">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="header-title">
                            <a class="btn btn-papayabot-purple-black" href="">  <div class="subtitle">STAY UPDATED</div></a>

                            <h1 class="title black">
                                Receive notifications when
                                you receive payments
                            </h1>
                            <div class="subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </div>

                        </div>
                        <div class="text-xs-center">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-two-bg m-auto"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="standard" >
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bitmap-bg "></div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="header-title">
                            <a class="btn btn-papayabot-yellow" href="">  <div class="subtitle">TRACK TRANSACTIONS</div></a>

                            <h1 class="title black">
                                Receive airdrops of new coins
                                and track your portfolio.
                                All in one place.
                            </h1>
                            <div class="subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </div>

                        </div>
                        <div class="text-xs-center">
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="monitoring">
            <div class="container ">
                <div class="row">
                    <h1 class="title text-center">Join our global community to make
                        <span>fast</span>, <span>free</span> and <span>secure</span> transactions.</h1>
                </div>
                <div class="row mt-5">
                    <div class="monitoring-bg">

                    </div>
                </div>
            </div>
        </section>
        <section class="transfer">
            <div class="container">
                <div style=" margin-top: -185px;" class="row justify-content-center transfer-setting" >
                  <div class="col-md-8 d-flex box">
                      <div class="col-md-4 d-flex justify-content-center">
                       <div>
                           <div class="icons member-icon"></div>

                           <h5 class="subtitle ">
                               Customers
                           </h5>
                           <h3 class="title ">
                               100K+
                           </h3>
                       </div>
                      </div>
                      <div class="col-md-4 d-flex justify-content-center">
                        <div>
                            <div class="icons time-icon"></div>

                            <h5 class="subtitle ">
                                Transactions
                            </h5>
                            <h3 class="title ">
                                300K+
                            </h3>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex justify-content-center">
                      <div>
                          <div class="icons money-icon"></div>

                          <h5 class="subtitle ">
                              Total value
                          </h5>
                          <h3 class="title ">
                              $10B+
                          </h3>
                      </div>
                      </div>

                  </div>
                </div>
            </div>
            <div class="container" style="margin-top: 140px;">
                <div class="row justify-content-center">
                    <h1 style="width: 678px;" class="title text-center">Start receiving & transfer money
                        with Papayabot!</h1>

                </div>
                <div class="row justify-content-center mt-5">
                    <button class="btn btn-papayabot-blue">Start now</button>
                </div>
            </div>
        </section>




        <br><br><br>
        @include('layout.footer')
    </body>
</html>
