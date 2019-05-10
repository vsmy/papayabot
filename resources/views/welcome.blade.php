@extends ('layout.app')

@section('title')
    Home page
@stop

@section('title')
    Home page

@stop



@section ('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->




    <nav style="padding: 21px;" class="navbar navbar-expand-lg navbar white darken-2">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a class="navbar-brand font-bold" href="#"><img src="/images/common/logo.svg" alt=""></a>
            </div>
            <div class=" collapse navbar-collapse" id="navbarText1">
                <ul class="nv-bar navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">For institutions </a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">About</a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">FAQ</a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Press</a>
                    </li>
                    <li  class="nav-item">
                        <a  class="nav-link waves-effect waves-light" href="#">Media Kit</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link waves-effect waves-light" href="#">Contact us</a>
                    </li>
                    <li class="nav-item ">
                        <button class="btn btn-primary btn-login">Login</button>
                    </li>
                    <li class="nav-item" style="margin-left: 30px !important;">
                        <button class="btn btn-primary btn-register">Register</button>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section style="padding: 80px 0 100px 0;" class="header-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 style="margin-bottom: 32px;" class="title">The most stable global digital currency </h1>
                    <h5 class="subtitle">Pays XDR is a stablecoin 100% backed by basket of five currencies in the same way as the XDR created by the International Monetary Fund.
                    </h5>
                    <div class="row" style="margin-top: 60px">
                        <button class="btn btn-head">View white paper</button>
                        <button class="btn btn-opacity ml-3">Watch explainer video</button>
                    </div>

                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>

    </section>
    <br>

    <section class="partners">
        <div class="container">
            <h5 class="text-capitalize text-center title-sm">OUR PARTNERS </h5>
            <br>
            <div  class="row" style="justify-content: space-evenly">
                <div class="brand-partner">   <img src="/images/common/paysend-logo-copy.svg" alt=""></div>
                <div class="brand-partner">   <img src="/images/common/stellar-payment-network-logo-copy-2.svg" alt=""> </div>
                <div class="brand-partner"> <img src="/images/common/paysend-logo-copy.svg" alt=""> </div>
            </div>
            <br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="title">What is IMF's Special Drawing Right?</div>
                    <p style="margin-top: 42px" class="subtitle">The IMF was founded in 1945 with the goal to foster macroeconomic stability. The IMF created XDR to deliver stability in the international monetary system and to reduce the risk of volaility for less economically developed countries.
                        <br>    <br>
                        Until now only the central banks have access to the XDR issued by the  <b>International Monetary Fund.</b>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-end">
                    <img src="/images/common/i-01.svg" alt="">
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-end">
                    <img src="/images/common/i-02.svg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="title">What is Pays XDR?</div>
                    <p style="margin-top: 42px" class="subtitle">
                        With Pays XDR, anyone can use the XDR to move money anywhere in the world. Transactions are  <b> secure and instant.</b> By leveraging blockchain technology supported by IBM, all transactions are completely transparent and free.
                        <br>    <br>
                        It&apos;s more stable than any single currency so it opens new possibilities for trading, hedging risk, lending and beyond.
                    </p>
                </div>

            </div>
            <br><br><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="title">What is the natural quality of the XDR?</div>
                    <p style="margin-top: 42px" class="subtitle">The XDR is a natural hedge against currency volitility as its value is diversified among the five most important currencies determined by the International Monetary Fund (IMF). These are the US Dollar, the Euro, the Japanese Yen, the Chinese Yuan and British Pounds Sterling.
                        <br><br>
                        We use the <b>exact methodology</b> to determine the exchange rate of the XDR.
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-end">
                    <img src="/images/common/i-03.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br>

    <section class="char">
        <div class="container transfer">
            <h1 class="title text-center" style="color: white">XDR currency converter</h1>
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="inputState">Country</label>
                    <select id="inputState" class="form-control form-control-lg">
                        <option selected>Select country</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Name</label>
                    <input  class="form-control form-control-lg inputform" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Email</label>
                    <input  class="form-control form-control-lg inputform" id="inputPassword4" placeholder="Password">
                </div>
            </div>
        </div>
    </section>


    <section class="features">
        <div class="container">

            <h1 class="title text-center">
                Stable global money
            </h1>

            <div class="row mt-2">
                <div class="col-md-3">
                    <div class="cart-stable ">
                        <div class="cart-img d-flex justify-content-center">
                            <img src="/images/common/cart/0-1.svg" alt="">
                        </div>
                        <div class="cart-description">
                            <div class="title text-center">
                                Hold XDR
                            </div>
                            <div class="subtitle text-center">
                                to maintain value of your money
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart-stable ">
                        <div class="cart-img d-flex justify-content-center">
                            <img src="/images/common/cart/0-2.svg" alt="">
                        </div>
                        <div class="cart-description">
                            <div class="title text-center">
                                Send & Receive XDR
                            </div>
                            <div class="subtitle text-center">
                                to anyone with acccess to the internet
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart-stable ">
                        <div class="cart-img d-flex justify-content-center">
                            <img src="/images/common/cart/0-3.svg" alt="">
                        </div>
                        <div class="cart-description">
                            <div class="title text-center">
                                Spend & Accept XDR
                            </div>
                            <div class="subtitle text-center">
                                online and offline
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart-stable ">
                        <div class="cart-img d-flex justify-content-center">
                            <img src="/images/common/cart/0-4.svg" alt="">
                        </div>
                        <div class="cart-description">
                            <div class="title text-center">
                                Trade
                            </div>
                            <div class="subtitle text-center">
                                with the most stable and efficient currency pair
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="confidence">
        <div class="container">
            <div class="row">
                <div class="col-md-6" >
                    <div class="col-md-12" style="padding: 80px !important;">
                        <div class="secretTitle">Use with confidence</div>
                        <h1 style="margin-bottom: 32px; color: white" class="title">Full Transparency </h1>
                        <h5 style="color: white" class="subtitle">The XDR is a natural hedge against currency volitility as its value is diversified among the five most important currencies.
                        </h5>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: -200px;">
                  <div class="col-md-12">
                      <div  class="confirm-item mt-2">
                          <img src="/images/common/cart/1-1.svg" alt="">
                          <div class="subtitle">The total amount of XDR issued can be view on the <b>Stellar blockchain</b></div>
                      </div>
                  </div>
                    <div class="col-md-12">
                        <div  class="confirm-item mt-2">
                            <img src="/images/common/cart/1-2.svg" alt="">
                            <div class="subtitle">All of the reserves for each of the five currencies <b> backing each XDR are live</b></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div  class="confirm-item mt-2">
                            <img src="/images/common/cart/1-3.svg" alt="">
                            <div class="subtitle">Grant Thornton verifies and produces <b>monthly independent accounts&apos; reports</b> to verify the deposit balances</div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>


    <section class="about-us">
        <div class="container">
            <div class="title">
                In the press
            </div>
        </div>
        <div class="Container">
            <h3 class="Head">Featured Products <span class="Arrows"></span></h3>
            <!-- Carousel Container -->
            <div class="SlickCarousel">
                <!-- Item -->
                <div class="ProductBlock">
                    <div class="Content">
                        <div class="img-fill">
                            <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                        </div>
                        <h3>Block Title</h3>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                <div class="ProductBlock">
                    <div class="Content">
                        <div class="img-fill">
                            <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                        </div>
                        <h3>Block Title</h3>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                <div class="ProductBlock">
                    <div class="Content">
                        <div class="img-fill">
                            <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                        </div>
                        <h3>Block Title</h3>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                <div class="ProductBlock">
                    <div class="Content">
                        <div class="img-fill">
                            <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                        </div>
                        <h3>Block Title</h3>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                <div class="ProductBlock">
                    <div class="Content">
                        <div class="img-fill">
                            <img src="https://41.media.tumblr.com/4f61413965b53d9cc901e2f8241a64bd/tumblr_nh1zmuXYUM1su4a4ho1_1280.jpg">
                        </div>
                        <h3>Block Title</h3>
                    </div>
                </div>
                <!-- Item -->
            </div>
            <!-- Carousel Container -->
        </div>
    </section>

    <br><br><br><br><br>
    <br><br><br><br><br>

    <section class="contact-us">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 style="font-size: 36px;" class="title text-center font-weight-bold">Now you can use XDR just like the Central Banks
                        Register your interest today</h1>
                </div>

                <form class="mt-5">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input  class="form-control form-control-lg inputform" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input  class="form-control form-control-lg inputform" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Country</label>
                            <select id="inputState" class="form-control form-control-lg">
                                <option selected>Select country</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button style="width: 100%" type="submit" class="btn btn-contact">Request today</button>
                        </div>
                    </div>

                </form>
            </div>


        </div>

        <div class="container" style="margin-top: 90px">
            <div class="row">
                <div class="company-bat" style="    background: white;
    padding: 30px;
    width: 100%;
    border-radius: 5px;
box-shadow: 8px 14px 69px 0 rgba(102, 96, 121, 0.11);">
                    <h3 class="text-center title-sm text-capitalize">AS SEEN IN</h3>
                    <div style="    display: flex;
    padding: 50px 20px;
    justify-content: space-around;" class="company-icon">
                        <img src="/images/common/paysend-logo-copy.svg" alt="">
                        <img src="/images/common/stellar-payment-network-logo-copy-2.svg" alt="">
                        <img src="/images/common/microsoft.svg" alt="">
                        <img src="/images/common/paysend-logo-copy.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer style=" margin-top: -125px;">
        <div style="    margin-top: 90px;" class="container">
            <div class="row">
                <div class="col-md-9 d-flex justify-content-between">
                    <div class="footer-navig-itm">
                        <ul >
                            <p class="font-weight-bold">Company</p>
                            <li>For institutions</li>
                            <li>About</li>
                            <li>FAQ</li>
                            <li>Press</li>
                            <li>Media Kit</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="footer-navig-itm">
                        <ul>
                            <p class="font-weight-bold">Pays Wallet</p>
                            <li>Sign In</li>
                            <li>Register Interest</li>
                            <li>Support</li>

                        </ul>
                    </div>
                    <div class="footer-navig-itm">

                        <ul>
                            <p class="font-weight-bold">Partnership</p>
                            <li>Become a partner</li>

                        </ul>
                    </div>
                    <div class="footer-navig-itm">
                        <ul>
                            <p class="font-weight-bold">Documentation</p>
                            <li>Whiterpaper</li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-navig-itm logo">
                        <ul>
                            <li style="  margin: 0 0 29px 0;" class="logo-footer">
                                <img src="/images/common/logo-footer.svg" alt="">
                            </li>
                            <li>Paysend CCY
                                8 Golden Square
                                W1F 9HY London
                                United Kingdom</li>
                            <li class="mt-2">contact@paysxdr.com</li>

                        </ul>
                        <div  class="social d-flex mt-4">
                            <a href=""> Get in touch</a>
                            <a href=""> <img  src="/images/common/twitter.svg" alt=""></a>
                            <a href=""><img src="/images/common/facebook.svg" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="policy">Copyright © PAYSXDR 2019. All rights reserved.</div>
        </div>
    </footer>


    <script>
        $(document).ready(function(){
            $(".SlickCarousel").slick({
                rtl:false, // If RTL Make it true & .slick-slide{float:right;}
                autoplay:false,
                // autoplaySpeed:5000,
                speed:800, // Transition Speed
                slidesToShow:4, // Number Of Carousel
                slidesToScroll:1, // Slide To Move
                pauseOnHover:false,
                appendArrows:$(".Container .Head .Arrows"), // Class For Arrows Buttons
                prevArrow:'<span class="Slick-Prev"></span>',
                nextArrow:'<span class="Slick-Next"></span>',
                easing:"linear",
                responsive:[
                    {breakpoint:801,settings:{
                            slidesToShow:3,
                        }},
                    {breakpoint:641,settings:{
                            slidesToShow:3,
                        }},
                    {breakpoint:481,settings:{
                            slidesToShow:1,
                        }},
                ],
            })
        })
    </script>

@endsection



