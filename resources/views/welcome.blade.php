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
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-sm-between">
                        <div class="logo">
                            <h5 class="title-logo">Papayabot</h5>
                        </div>
                        <div class="header-title">
                            <h1 class="title black">
                                The multicurrency wallet for Telegram messenger
                            </h1>
                            <div class="subtitle">
                                Make payments for free inside <b>Telegram</b> using over <b>20 cryptos</b> such as Bitcoin or Stellar Lumens
                            </div>
                            <button class="btn btn-papayabot ">Try it now</button>
                        </div>
                        <div class="text-xs-center">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home-bg"></div>
                    </div>
                </div>
            </div>
        </header>


        <section>
            <div class="container">
                <div class="row align-items-center" >
                    <div class="col-md-6">
                        <h1 class="title black">
                       title
                        </h1>
                        <h5 class="subtitle">
                            subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                        </h5>
                    </div>
                </div>
                <div class="row align-items-center" >
                 <div class="col-md-4">
                     <div class="test_icon"></div>
                     <h3 class="title black">
                         Title
                     </h3>
                     <h5 class="subtitle">
                         subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                     </h5>
                 </div>
                 <div class="col-md-4">
                     <div class="test_icon"></div>
                     <h3 class="title black">
                         Title
                     </h3>
                     <h5 class="subtitle">
                         subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                     </h5>
                 </div>
                 <div class="col-md-4">
                     <div class="test_icon"></div>
                     <h3 class="title black">
                         Title
                     </h3>
                     <h5 class="subtitle">
                         subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                     </h5>
                 </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container mr-0">
                <div class="row align-items-center" >
                    <div class="col-md-6">
                        <h1 class="title black">
                            Title
                        </h1>
                        <h5 class="subtitle">
                            subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                        </h5>
                    </div>
                </div>
                <div class="row align-items-center" >
                    <div class="col-md-4">
                        <div class="test_icon"></div>
                        <h3 class="title black">
                            Title
                        </h3>
                        <h5 class="subtitle">
                            subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                        </h5>
                    </div>
                    <div class="col-md-4">
                        <div class="test_icon"></div>
                        <h3 class="title black">
                            Title
                        </h3>
                        <h5 class="subtitle">
                            subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                        </h5>
                    </div>
                    <div class="col-md-4">
                        <div class="test_icon"></div>
                        <h3 class="title black">
                            Title
                        </h3>
                        <h5 class="subtitle">
                            subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle subtitle  subtitle
                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
        @include('layout.footer')
    </body>
</html>
