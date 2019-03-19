@extends ('layout.app')

@section('title')
  Home page
@stop

@section('title')
    Home page

@stop

@section ('content')

        <header>
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-sm-between">
                        <div class="logo">
                            <a  href="{{route('welcome')}}"><h5 class="title-logo">Papayabot</h5></a>
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
                            Send money easily & safely
                        </h1>
                        <h5 class="subtitle">
                            Don’t worry about managing private keys or security. Make payments for free inside Telegram until you need send crypto to external wallets.
                        </h5>
                    </div>
                </div>
                <div class="row mt-100" >
                 <div class="col-md-4 deff-content">
                     <div class="icons">
                         <img src="/images/icons/secure.svg" alt="">
                     </div>
                 <div>
                     <h3 class="title black">
                         Secure
                     </h3>
                     <h5 class="subtitle description">
                         Transactions are based on blockchain technology. We use Bitgo multisignature wallets to maintain the highest level of security.
                     </h5>
                 </div>
                 </div>
                 <div class="col-md-4 deff-content">
                     <div class="icons">
                         <img src="/images/icons/platform.svg" alt="">
                     </div>
                  <div>
                      <h3 class="title black">
                          Cross - platform
                      </h3>
                      <h5 class="subtitle description">
                          Compatible with Android, iOS, macOS, Linux, Windows and web-client for your browser.
                      </h5>
                  </div>
                 </div>
                 <div class="col-md-4 deff-content">
                     <div class="icons ">
                         <img src="/images/icons/chat.svg" alt="">
                     </div>
                  <div>
                      <h3 class="title black">
                          Multi languages
                      </h3>
                      <h5 class="subtitle description">
                          Supporting over 12 languages translated by our community
                      </h5>
                  </div>
                 </div>
                </div>
            </div>
        </section>

        <section class="custom">
            <div class="container ">
                <div class="row custom-content">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="header-title">
                            <a class="btn btn-papayabot-green" href="">  <div class="subtitle">JOIN COMMUNITY</div></a>

                            <h1 class="title black">
                                Use Papayabot to tip friends in your groups and in the community.
                            </h1>
                            <div class="subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </div>

                        </div>
                        <div class="text-xs-center">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-bg m-auto"></div>
                    </div>
                </div>

                </div>
        </section>

        <section class="standard" >
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bitmap-two-bg"></div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="header-title">
                            <a class="btn btn-papayabot-purple" href="">  <div class="subtitle">EASY PAYMENTS</div></a>

                            <h1 class="title black">
                                Send to any phone number, Telegram username or crypto address
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

        <section class="custom revers">
            <div class="container ">
                <div class="row custom-content">
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

        <section class="standard" style="margin-bottom: 100px">
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

        <section class="monitoring ">
            <div class="container ">
                <div class="row">
                    <h1 class="title text-center">Join our global community to make
                        <span>fast</span>, <span>free</span> and <span>secure</span> transactions.</h1>
                </div>
                <div class="row mt-5">
                    <div style="width: 100%;" class="m-auto p-1">
                        <svg class="monitoring-bg" style="width: 100%; height: 100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="748" height="419" viewBox="0 0 748 419">
                            <defs>
                                <linearGradient id="a" x1="53.767%" x2="53.318%" y1="45.031%" y2="57.929%">
                                    <stop offset="0%" stop-color="#FFC892" stop-opacity=".15"/>
                                    <stop offset="100%" stop-color="#CCDEFF" stop-opacity="0"/>
                                </linearGradient>
                                <path id="c" d="M.116 224.187c18.97 0 25.26 17.613 39.418 17.613 14.157 0 14.551-51.859 31.4-52.034 16.847-.175 13.338 20.608 34.047 20.608 20.71 0 10.853-51.443 35.943-51.443 25.09 0 15.465 40.834 36.87 40.834 21.404 0 15.623-35.83 34.774-35.83 19.15 0 14.081-56.323 29.778-56.323s23.571 23.577 41.039 23.577c17.467 0 17.467 75.808 32.45 75.808 14.983 0 15.448-30.586 32.107-30.62 16.659-.032 12.477 8.976 32.811 8.976 20.335 0 22.991-82.568 41.392-82.568 18.4 0 16.283 64.693 37.966 61.15 21.684-3.544 15.516-17.014 33.71-17.014 18.194 0 10.758-40.121 30.809-36.121 20.05 4 32.99-55.994 45.331-69 12.342-13.006 17.902-8.975 44.301-8.975 17.6 0 36.444-10.008 56.534-30.025"/>
                                <filter id="b" width="115.6%" height="143.9%" x="-7.8%" y="-17%" filterUnits="objectBoundingBox">
                                    <feMorphology in="SourceAlpha" operator="dilate" radius="1.2" result="shadowSpreadOuter1"/>
                                    <feOffset dy="12" in="shadowSpreadOuter1" result="shadowOffsetOuter1"/>
                                    <feMorphology in="SourceAlpha" radius="1.2" result="shadowInner"/>
                                    <feOffset dy="12" in="shadowInner" result="shadowInner"/>
                                    <feComposite in="shadowOffsetOuter1" in2="shadowInner" operator="out" result="shadowOffsetOuter1"/>
                                    <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="15"/>
                                    <feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0.111944025 0 0 0 0 0.118264562 0 0 0 0 0.150669643 0 0 0 0.0952219203 0"/>
                                </filter>
                                <path id="e" d="M621 170v201.2"/>
                                <filter id="d" width="250%" height="102.1%" x="-75%" y="-1.2%" filterUnits="objectBoundingBox">
                                    <feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="1.5"/>
                                    <feOffset dy="1" in="shadowBlurInner1" result="shadowOffsetInner1"/>
                                    <feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"/>
                                    <feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                                </filter>
                                <path id="g" d="M295 235v137.2"/>
                                <filter id="f" width="250%" height="103%" x="-75%" y="-1.8%" filterUnits="objectBoundingBox">
                                    <feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="1.5"/>
                                    <feOffset dy="1" in="shadowBlurInner1" result="shadowOffsetInner1"/>
                                    <feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"/>
                                    <feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                                </filter>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <text fill="#FFF" font-family="Gerbera-Bold, Gerbera" font-size="16" font-weight="bold" transform="translate(0 59)">
                                    <tspan x="0" y="17">Number of users</tspan>
                                </text>
                                <text fill="#FFF" font-family="Avenir-Book, Avenir" font-size="12" letter-spacing=".171" transform="translate(9.773 357.6)">
                                    <tspan x="1.582" y="12">50K</tspan>
                                </text>
                                <path fill="#E1E1ED" d="M44.33 369.6h682.792v1.2H44.33z" opacity=".221"/>
                                <text fill="#FFF" font-family="Avenir-Book, Avenir" font-size="12" letter-spacing=".171" transform="translate(9.773 279.6)">
                                    <tspan x="-5.262" y="12">100K</tspan>
                                </text>
                                <path fill="#E1E1ED" d="M44.33 291.6h682.792v1.2H44.33z" opacity=".221"/>
                                <text fill="#FFF" font-family="Avenir-Book, Avenir" font-size="12" letter-spacing=".171" transform="translate(8.914 201.6)">
                                    <tspan x="-5.262" y="12">500K</tspan>
                                </text>
                                <path fill="#E1E1ED" d="M43.471 213.6h682.792v1.2H43.471z" opacity=".221"/>
                                <text fill="#FFF" font-family="Avenir-Book, Avenir" font-size="12" letter-spacing=".171" transform="translate(9.773 124)">
                                    <tspan x="-10.374" y="12">1MLN</tspan>
                                </text>
                                <path fill="#E1E1ED" d="M44.33 136h682.792v1.2H44.33z" opacity=".221"/>
                                <path fill="url(#a)" d="M.172 225.96c18.257 0 25.347 17.682 39.554 17.682 14.206 0 14.602-52.063 31.508-52.24 16.907-.175 13.385 20.69 34.166 20.69s13.164-52.059 37.124-52.059 13.053 39.66 34.532 39.66c21.478 0 17.086-34.224 36.303-34.224 19.218 0 14.13-56.545 29.882-56.545 15.751 0 23.653 23.67 41.181 23.67s17.528 76.108 32.563 76.108c15.035 0 11.174-30.74 32.218-30.74 21.044 0 23.764 17.524 38.915 6.708 15.152-10.816 17.08-80.593 35.545-80.593 18.465 0 15.987 64.321 37.746 60.763 21.758-3.557 15.921-16.825 34.178-16.825 18.257 0 11.134-35.853 31.539-35.853s36.324-60.59 46.785-69.604c10.461-9.014 15.645-8.713 42.135-8.713s28.941-7.812 57.13-30.045v268H.172v-45.84z" opacity=".749" transform="translate(53.38 115.2)"/>
                                <g transform="translate(56.128 116)">
                                    <g stroke-linecap="round" stroke-linejoin="round">
                                        <use fill="#000" filter="url(#b)" xlink:href="#c"/>
                                        <use stroke="#FDC06E" stroke-width="2.4" xlink:href="#c"/>
                                    </g>
                                    <ellipse cx="670.049" cy="3.3" fill="#FFF" rx="2.146" ry="2.5"/>
                                </g>
                                <text fill="#FFF" font-family="Gerbera-Medium, Gerbera" font-size="12" font-weight="400" letter-spacing=".171" transform="translate(0 59)">
                                    <tspan x="307.646" y="353.6">2016</tspan>
                                </text>
                                <text fill="#FFF" font-family="Gerbera-Medium, Gerbera" font-size="12" font-weight="400" letter-spacing=".171" transform="translate(0 59)">
                                    <tspan x="42.393" y="353.6">2014</tspan>
                                </text>
                                <text fill="#FFF" font-family="Gerbera-Medium, Gerbera" font-size="12" font-weight="400" letter-spacing=".171" transform="translate(0 59)">
                                    <tspan x="440.702" y="353.6">2017</tspan>
                                </text>
                                <text fill="#FFF" font-family="Gerbera-Medium, Gerbera" font-size="12" font-weight="400" letter-spacing=".171" transform="translate(0 59)">
                                    <tspan x="174.59" y="353.6">2015</tspan>
                                </text>
                                <text fill="#FFF" font-family="Gerbera-Medium, Gerbera" font-size="12" font-weight="400" letter-spacing=".171" transform="translate(0 59)">
                                    <tspan x="573" y="354">2018</tspan>
                                </text>
                                <text fill="#FFF" font-family="Gerbera-Medium, Gerbera" font-size="12" font-weight="400" letter-spacing=".171" transform="translate(0 59)">
                                    <tspan x="706" y="354">2020</tspan>
                                </text>
                                <g transform="translate(546)">
                                    <rect width="160" height="108" fill="#2C137B" rx="8"/>
                                    <path stroke="#FDC06E" stroke-linecap="round" stroke-width="1.6" d="M138 81.967l-4-4.167-4 4.167m8 5.833l-4-4.167-4 4.167"/>
                                    <text fill="#FFF" font-family="Gerbera-Bold, Gerbera" font-size="14" font-weight="bold" letter-spacing=".2" transform="translate(21 16)">
                                        <tspan x="0" y="37.8">Active users</tspan>
                                    </text>
                                    <text fill="#7F7AF0" font-family="Gerbera-Bold, Gerbera" font-size="12" font-weight="bold" letter-spacing=".171" transform="translate(21 16)">
                                        <tspan x="0" y="13">15.12.2018</tspan>
                                    </text>
                                    <text fill="#FDC06E" font-family="Gerbera-Bold, Gerbera" font-size="20" font-weight="bold" letter-spacing=".286" transform="translate(21 16)">
                                        <tspan x="0" y="72.8">930K</tspan>
                                    </text>
                                </g>
                                <g transform="translate(222 69)">
                                    <rect width="152" height="108" fill="#2C137B" rx="8"/>
                                    <path stroke="#FDC06E" stroke-linecap="round" stroke-width="1.6" d="M135 81.167L131 77l-4 4.167M135 87l-4-4.167L127 87"/>
                                    <text fill="#FFF" font-family="Gerbera-Bold, Gerbera" font-size="14" font-weight="bold" letter-spacing=".2" transform="translate(18 16.2)">
                                        <tspan x="0" y="37.8">Active users</tspan>
                                    </text>
                                    <text fill="#7F7AF0" font-family="Gerbera-Bold, Gerbera" font-size="12" font-weight="bold" letter-spacing=".171" transform="translate(18 16.2)">
                                        <tspan x="0" y="13">15.10.2016</tspan>
                                    </text>
                                    <text fill="#FDC06E" font-family="Gerbera-Bold, Gerbera" font-size="20" font-weight="bold" letter-spacing=".286" transform="translate(18 16.2)">
                                        <tspan x="0" y="72.8">480K</tspan>
                                    </text>
                                </g>
                                <g stroke-dasharray="4,10" stroke-linecap="square" stroke-linejoin="round">
                                    <use fill="#000" filter="url(#d)" xlink:href="#e"/>
                                    <use stroke="#D6A075" xlink:href="#e"/>
                                </g>
                                <circle cx="621" cy="163" r="7" fill="#FDC06E" stroke="#FFF" stroke-width="4"/>
                                <g stroke-dasharray="4,10" stroke-linecap="square" stroke-linejoin="round">
                                    <use fill="#000" filter="url(#f)" xlink:href="#g"/>
                                    <use stroke="#D6A075" xlink:href="#g"/>
                                </g>
                                <circle cx="295" cy="227" r="7" fill="#FDC06E" stroke="#FFF" stroke-width="4"/>
                            </g>
                        </svg>
                        <svg  class="monitoring-bg-mob" style="width: 100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="338.248" height="400.6" viewBox="0 0 338.248 400.6">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_1725" data-name="Rectangle 1725" width="305" height="388" transform="translate(-24.73 -101)" fill="#fff" stroke="#707070" stroke-width="1"/>
                                </clipPath>
                                <linearGradient id="linear-gradient" x1="0.538" y1="0.45" x2="0.533" y2="0.579" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#ffc892" stop-opacity="0.149"/>
                                    <stop offset="1" stop-color="#ccdeff" stop-opacity="0"/>
                                </linearGradient>
                            </defs>
                            <g id="monitoring-bg" transform="translate(0.602 -15)">
                                <text id="Number_of_users" data-name="Number of users" transform="translate(0 76)" fill="#fff" font-size="16" font-family="Helvetica-Bold, Helvetica" font-weight="700"><tspan x="0" y="0">Number of users</tspan></text>
                                <text id="_50K" data-name="50K" transform="translate(11.355 369.6)" fill="#fff" font-size="12" font-family="Avenir-Book, Avenir" letter-spacing="0.014em"><tspan x="0" y="0">50K</tspan></text>
                                <text id="_100K" data-name="100K" transform="translate(4.511 291.6)" fill="#fff" font-size="12" font-family="Avenir-Book, Avenir" letter-spacing="0.014em"><tspan x="0" y="0">100K</tspan></text>
                                <text id="_500K" data-name="500K" transform="translate(3.652 213.6)" fill="#fff" font-size="12" font-family="Avenir-Book, Avenir" letter-spacing="0.014em"><tspan x="0" y="0">500K</tspan></text>
                                <text id="_1MLN" data-name="1MLN" transform="translate(-0.601 136)" fill="#fff" font-size="12" font-family="Avenir-Book, Avenir" letter-spacing="0.014em"><tspan x="0" y="0">1MLN</tspan></text>
                                <g id="Group_5130" data-name="Group 5130" transform="translate(56.128 116)">
                                    <g id="Group_5129" data-name="Group 5129">
                                        <g id="Mask_Group_1" data-name="Mask Group 1" clip-path="url(#clip-path)">
                                            <path id="Path_25745" data-name="Path 25745" d="M.116,224.187c18.97,0,25.26,17.613,39.418,17.613s14.551-51.859,31.4-52.034,13.338,20.608,34.047,20.608,10.853-51.443,35.943-51.443,15.465,40.834,36.87,40.834,15.623-35.83,34.774-35.83S234.314,45.644,250.011,45.644s15.906,85.545,33.374,85.545S300.852,207,315.835,207s15.448-30.586,32.107-30.62,12.477,8.976,32.811,8.976,22.991-82.568,41.392-82.568,16.283,64.693,37.966,61.15,15.516-17.014,33.71-17.014S504.579,106.8,524.63,110.8s32.99-55.994,45.331-69,17.9-8.975,44.3-8.975q26.4,0,56.534-30.025" fill="none" stroke="#fdc06e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4"/>
                                            <path id="Path_25752" data-name="Path 25752" d="M.172,225.96c18.257,0,25.347,17.682,39.554,17.682s14.6-52.063,31.508-52.24,13.385,20.69,34.166,20.69,13.164-52.059,37.124-52.059,13.053,39.66,34.532,39.66,17.086-34.224,36.3-34.224S237.186,49.043,252.938,49.043s13.957,83.551,31.484,83.551S301.95,208.7,316.985,208.7s11.174-30.74,32.218-30.74,23.764,17.524,38.915,6.708,17.08-80.593,35.545-80.593S439.65,168.4,461.409,164.84s15.921-16.825,34.178-16.825,11.134-35.853,31.539-35.853,36.324-60.59,46.785-69.6,15.645-8.713,42.135-8.713,28.941-7.812,57.13-30.045v268H.172V225.96Z" transform="translate(-2.747 -0.8)" fill-rule="evenodd" opacity="0.749" fill="url(#linear-gradient)"/>
                                            <path id="Path_25753" data-name="Path 25753" d="M44.33,369.6H727.122v1.2H44.33Z" transform="translate(-56.128 -116)" fill="#e1e1ed" fill-rule="evenodd" opacity="0.221"/>
                                            <path id="Path_25754" data-name="Path 25754" d="M44.33,291.6H727.122v1.2H44.33Z" transform="translate(-56.128 -116)" fill="#e1e1ed" fill-rule="evenodd" opacity="0.221"/>
                                            <path id="Path_25755" data-name="Path 25755" d="M43.471,213.6H726.263v1.2H43.471Z" transform="translate(-56.128 -116)" fill="#e1e1ed" fill-rule="evenodd" opacity="0.221"/>
                                            <path id="Path_25756" data-name="Path 25756" d="M44.33,136H727.122v1.2H44.33Z" transform="translate(-56.128 -116)" fill="#e1e1ed" fill-rule="evenodd" opacity="0.221"/>
                                        </g>
                                    </g>
                                </g>
                                <text id="_2020" data-name="2020" transform="translate(309.646 412.6)" fill="#fff" font-size="12" font-family="Helvetica" letter-spacing="0.014em"><tspan x="0" y="0">2020</tspan></text>
                                <text id="_2018" data-name="2018" transform="translate(44.393 412.6)" fill="#fff" font-size="12" font-family="Helvetica" letter-spacing="0.014em"><tspan x="0" y="0">2018</tspan></text>
                                <text id="_2019" data-name="2019" transform="translate(183.59 412.6)" fill="#fff" font-size="12" font-family="Helvetica" letter-spacing="0.014em"><tspan x="0" y="0">2019</tspan></text>
                                <g id="Group_5132" data-name="Group 5132" transform="translate(121 125)">
                                    <rect id="Rectangle_1724" data-name="Rectangle 1724" width="152" height="108" rx="8" fill="#2c137b"/>
                                    <path id="Path_25747" data-name="Path 25747" d="M135,81.167,131,77l-4,4.167M135,87l-4-4.167L127,87" fill="none" stroke="#fdc06e" stroke-linecap="round" stroke-width="1.6" fill-rule="evenodd"/>
                                    <text id="Active_users" data-name="Active users" transform="translate(18 54)" fill="#fff" font-size="14" font-family="Helvetica-Bold, Helvetica" font-weight="700" letter-spacing="0.014em"><tspan x="0" y="0">Active users</tspan></text>
                                    <text id="_15.10.2016" data-name="15.10.2016" transform="translate(18 29.2)" fill="#7f7af0" font-size="12" font-family="Helvetica-Bold, Helvetica" font-weight="700" letter-spacing="0.014em"><tspan x="0" y="0">15.10.2016</tspan></text>
                                    <text id="_480K" data-name="480K" transform="translate(18 89)" fill="#fdc06e" font-size="20" font-family="Helvetica-Bold, Helvetica" font-weight="700" letter-spacing="0.014em"><tspan x="0" y="0">480K</tspan></text>
                                </g>
                                <g id="Group_5134" data-name="Group 5134" transform="translate(-98 43)">
                                    <path id="Path_25750" data-name="Path 25750" d="M295,235v93.2" transform="translate(0)"/>
                                    <path id="Path_25751" data-name="Path 25751" stroke="#d6a075" d="M295,235v93.2" fill="none" transform="translate(0)" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" stroke-dasharray="4 10"/>
                                </g>
                                <circle id="Ellipse_1278" data-name="Ellipse 1278" cx="7" cy="7" r="7" transform="translate(190 268)" fill="#fdc06e" stroke="#fff" stroke-width="4"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="transfer">
            <div class="container">
                <div  class="row justify-content-center transfer-setting" >
                    <div class="col-md-8 d-flex box">
                        <div class="transfer-param">
                            <div class="icons member-icon"></div>

                            <h5 class="subtitle ">
                                Customers
                            </h5>
                            <h3 class="title ">
                                100K+
                            </h3>
                        </div>
                        <div class="transfer-param">
                            <div class="icons time-icon"></div>

                            <h5 class="subtitle ">
                                Transactions
                            </h5>
                            <h3 class="title ">
                                300K+
                            </h3>
                        </div>
                        <div class="transfer-param">
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

@endsection



