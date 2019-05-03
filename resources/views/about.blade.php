@extends ('layout.app')

@section('title')
   About Us
@stop

@section('title')
    About Us

@stop

@section ('content')
        <header class="about">
            <div class="container ">
                <div class="row">
                    <div class="col-md-5 d-flex flex-column">
                        <div class="logo">
                            <a  href="{{route('welcome')}}"><h5 class="title-logo">Papayabot</h5></a>
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

                    </div>
                    <div class="col-md-7 d-flex align-items-center justify-content-center">
                            <svg class="about-bg-svg" style="width: 100%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="602px" height="399px" viewBox="0 0 602 399" version="1.1">
                                <!-- Generator: sketchtool 53.2 (72643) - https://sketchapp.com -->
                                <title>0EC21748-D8DF-4FA8-B1E9-8A64F0D35117</title>
                                <desc>Created with sketchtool.</desc>
                                <defs>
                                    <radialGradient cx="86.3411852%" cy="11.3417143%" fx="86.3411852%" fy="11.3417143%" r="138.556937%" gradientTransform="translate(0.863412,0.113417),scale(0.660856,1.000000),rotate(131.175804),translate(-0.863412,-0.113417)" id="radialGradient-1">
                                        <stop stop-color="#CBC3E7" offset="0%"/>
                                        <stop stop-color="#DEDCFB" offset="40.8869518%"/>
                                        <stop stop-color="#7973C6" offset="100%"/>
                                    </radialGradient>
                                    <linearGradient x1="46.1853297%" y1="-9.21335019%" x2="60.4051171%" y2="50%" id="linearGradient-2">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-3">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-4">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-5">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-6">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="68.0161263%" y1="-30.2653238%" x2="50%" y2="100%" id="linearGradient-7">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="68.0791497%" y1="-30.2653238%" x2="50%" y2="100%" id="linearGradient-8">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="68.0792267%" y1="-30.2653238%" x2="50%" y2="100%" id="linearGradient-9">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="68.0200509%" y1="-30.2653238%" x2="50%" y2="100%" id="linearGradient-10">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="68.0313111%" y1="-30.2653238%" x2="50%" y2="100%" id="linearGradient-11">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="68.0401037%" y1="-30.2653238%" x2="50%" y2="100%" id="linearGradient-12">
                                        <stop stop-color="#CFDDF3" offset="0%"/>
                                        <stop stop-color="#A1B8E3" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="203.727651%" y1="-23.0561615%" x2="-41.6938158%" y2="117.827349%" id="linearGradient-13">
                                        <stop stop-color="#D2E0F9" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#B1C6E7" stop-opacity="0.464588995" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="203.727651%" y1="-23.0561615%" x2="-41.6938158%" y2="117.827349%" id="linearGradient-14">
                                        <stop stop-color="#D2E0F9" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#B1C6E7" stop-opacity="0.464588995" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="106.29979%" y1="12.0908777%" x2="29.7308369%" y2="34.5148923%" id="linearGradient-15">
                                        <stop stop-color="#91A3FF" offset="0%"/>
                                        <stop stop-color="#1D1F9D" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="21.7390412%" y1="32.953458%" x2="59.580465%" y2="69.1607307%" id="linearGradient-16">
                                        <stop stop-color="#DD9778" offset="0%"/>
                                        <stop stop-color="#6F2121" offset="100%"/>
                                    </linearGradient>
                                    <path d="M28.9630929,26.7777162 C29.8805355,29.9473405 29.4656864,32.2348892 27.7177267,33.6404459 C25.0955983,35.7487811 22.4626357,39.3348108 19.8667739,39.6299811 C17.2710381,39.9252351 14.4605079,41.3503973 14.0053455,44.9959135 C13.785575,46.7572162 4.77788233,55.8622514 1.55974691,68.3894351 C0.74497725,71.5612378 1.73611761,76.4418108 4.53323097,83.0310703 L11.9750668,78.9297703 L22.5741901,61.7413595 C34.3455488,57.6473486 40.9815594,55.1112135 42.4815923,54.1330378 C44.7320824,52.6658162 52.0222394,46.387227 50.6166909,44.0329865 C49.2110794,41.6788297 53.7841198,26.7216649 56.4999136,23.8142838 C59.2160854,20.9069027 61.4404979,13.8221459 61.4949839,11.2063324 C61.5489659,8.59051892 62.4906595,0.759164865 55.7116626,1.00900811 C51.1921633,1.17565405 42.2759314,9.76525135 28.9630929,26.7777162 Z" id="path-17"/>
                                    <linearGradient x1="7.85957433%" y1="32.953458%" x2="64.2856043%" y2="69.1607307%" id="linearGradient-19">
                                        <stop stop-color="#DD9778" offset="0%"/>
                                        <stop stop-color="#6F2121" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="21.7892906%" y1="-6.56030944%" x2="63.662091%" y2="56.5769361%" id="linearGradient-20">
                                        <stop stop-color="#FFC19B" offset="0%"/>
                                        <stop stop-color="#DB8347" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="5.69749539%" y1="18.1105081%" x2="71.4551446%" y2="53.7081684%" id="linearGradient-21">
                                        <stop stop-color="#FFC19B" offset="0%"/>
                                        <stop stop-color="#D7905F" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="38.3761593%" y1="56.217335%" x2="31.1679871%" y2="71.2757148%" id="linearGradient-22">
                                        <stop stop-color="#070A97" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#080435" stop-opacity="0.5" offset="100%"/>
                                    </linearGradient>
                                    <path d="M91.7952074,1.18127568 C104.276091,4.0272018 112.662248,8.77058919 116.953165,15.4117568 C123.389348,25.3732955 126.614428,51.834636 126.614428,60.4175946 C126.614428,69.0005532 127.640771,90.0557928 126.614428,95.8001604 C125.588214,101.544528 120.875168,105.811663 111.121709,105.811663 C104.61936,105.811663 67.7646362,93.7031622 0.5580513,69.4859477 C9.39647087,65.1101676 13.9564117,62.0874541 14.2376172,60.4175946 C14.6594896,57.9129117 35.1692854,12.2385135 41.6558624,7.58559279 C48.1425676,2.93277838 61.6074787,0.73074955 67.0056505,0.73074955 C66.2165311,2.92438018 64.460439,4.69438018 66.9426902,7.58559279 C69.4249414,10.4769117 74.2958367,10.981973 79.1208263,8.97512252 C82.337315,7.63725766 86.5620659,5.03934414 91.7952074,1.18127568 Z" id="path-23"/>
                                    <filter x="-6.6%" y="-7.8%" width="112.7%" height="115.8%" filterUnits="objectBoundingBox" id="filter-25">
                                        <feGaussianBlur stdDeviation="6.5" in="SourceAlpha" result="shadowBlurInner1"/>
                                        <feOffset dx="-5" dy="1" in="shadowBlurInner1" result="shadowOffsetInner1"/>
                                        <feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"/>
                                        <feColorMatrix values="0 0 0 0 0.0901960784   0 0 0 0 0.254901961   0 0 0 0 0.57254902  0 0 0 0.204200634 0" type="matrix" in="shadowInnerInner1"/>
                                    </filter>
                                    <linearGradient x1="50%" y1="100%" x2="50%" y2="3.061617e-15%" id="linearGradient-26">
                                        <stop stop-color="#70B8F9" stop-opacity="0.27587183" offset="0%"/>
                                        <stop stop-color="#3D82F0" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="53.6510851%" y1="54.3672421%" x2="84.8000365%" y2="81.9563837%" id="linearGradient-27">
                                        <stop stop-color="#3D82F0" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#3D82F0" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="52.905299%" y1="54.3672421%" x2="77.6916339%" y2="81.9563837%" id="linearGradient-28">
                                        <stop stop-color="#3D82F0" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#3D82F0" offset="100%"/>
                                    </linearGradient>
                                    <radialGradient cx="24.4692993%" cy="35.88125%" fx="24.4692993%" fy="35.88125%" r="161.264728%" gradientTransform="translate(0.244693,0.358813),scale(1.000000,0.584503),rotate(72.435837),scale(1.000000,1.872876),translate(-0.244693,-0.358813)" id="radialGradient-29">
                                        <stop stop-color="#EBA66D" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="95.4435849%" gradientTransform="translate(0.199831,0.000000),scale(1.000000,0.816565),rotate(63.532509),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-30">
                                        <stop stop-color="#FFA961" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="96.9992346%" gradientTransform="translate(0.199831,0.000000),scale(0.787045,1.000000),rotate(-25.635155),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-31">
                                        <stop stop-color="#9870F9" offset="0%"/>
                                        <stop stop-color="#4521C0" offset="100%"/>
                                    </radialGradient>
                                    <linearGradient x1="92.0374716%" y1="75.6550298%" x2="50%" y2="36.3651302%" id="linearGradient-32">
                                        <stop stop-color="#363471" offset="0%"/>
                                        <stop stop-color="#1E1F48" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="103.370367%" y1="27.3792118%" x2="82.0550918%" y2="27.3792118%" id="linearGradient-33">
                                        <stop stop-color="#FF7575" stop-opacity="0.5" offset="0%"/>
                                        <stop stop-color="#000000" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <path d="M28.0600184,264.964885 C28.0600184,259.953663 22.2618081,227.130425 34.2125363,217.269124 C46.1632646,207.407824 60.9455554,221.793539 115.38821,223.973155 C116.284679,246.017564 116.284679,261.536992 115.38821,270.53144 C114.491824,279.525888 81.6062033,292.276438 28.0600184,264.964885 Z" id="path-34"/>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="110.271204%" gradientTransform="translate(0.199831,0.000000),scale(1.000000,0.685767),rotate(67.309054),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-35">
                                        <stop stop-color="#FFA961" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="83.5180796%" gradientTransform="translate(0.199831,0.000000),scale(1.000000,0.970698),rotate(59.380801),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-36">
                                        <stop stop-color="#FFA961" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <linearGradient x1="76.6413909%" y1="-4.45555881%" x2="0%" y2="99.1090932%" id="linearGradient-37">
                                        <stop stop-color="#BEFFB1" offset="0%"/>
                                        <stop stop-color="#5CDBA8" offset="53.3765996%"/>
                                        <stop stop-color="#1984AC" offset="100%"/>
                                    </linearGradient>
                                    <path d="M30.331065,129.202959 C27.5925967,127.658375 18.4267503,131.345641 18.4267503,138.802753 C13.5590485,122.215066 0.050639134,99.7629725 0.050639134,75.2252739 C6.24312248,53.834123 22.3981002,20.1102901 26.0059681,14.8174167 C28.4112757,11.2887838 40.3288817,6.34960856 61.7584115,4.27927928e-05 C66.5516201,5.24494685 72.2321965,7.86747477 78.7999535,7.86747477 C88.6514019,7.86747477 89.1691111,1.81878018 91.8008931,1.50318423 C94.4328623,1.18743649 109.342738,7.86747477 116.696791,14.9743797 C124.050845,22.0811329 131.924292,50.0327023 151.268386,71.7301892 C170.612667,93.4276761 177.551018,108.565959 187.148853,116.718475 C183.627831,119.875193 178.858019,121.713968 178.858019,129.202959 C175.384164,126.653295 156.001513,113.306881 139.573698,97.7716365 C123.14607,82.2365437 115.86052,69.3165405 113.381094,67.567632 C110.52995,65.5562581 116.974924,127.783764 116.696791,138.802753 C116.418284,149.822045 78.575538,150.450505 66.7414094,150.450505 C54.9070936,150.450505 36.6051562,146.349731 31.9074038,142.305731 C31.1331434,141.639327 33.1624969,54.1484575 31.9074038,57.8195511 C28.7231466,67.1333667 21.3281825,71.7301892 21.3281825,77.8640446 C21.3281825,92.1181244 30.348019,130.206636 30.331065,129.202959 Z" id="path-38"/>
                                    <linearGradient x1="46.6037873%" y1="107.337653%" x2="53.3962127%" y2="6.30084103%" id="linearGradient-40">
                                        <stop stop-color="#51C897" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#45B4B4" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="73.0712409%" y1="33.9339821%" x2="45.1165182%" y2="50%" id="linearGradient-41">
                                        <stop stop-color="#EAF0F7" stop-opacity="0.115545743" offset="0%"/>
                                        <stop stop-color="#D1DDED" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="135.464258%" y1="-68.7894451%" x2="4.02738848%" y2="125.947616%" id="linearGradient-42">
                                        <stop stop-color="#BEFFB1" offset="0%"/>
                                        <stop stop-color="#5CDBA8" offset="53.3765996%"/>
                                        <stop stop-color="#1984AC" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="44.7030986%" y1="-5.35883451%" x2="50%" y2="68.4120971%" id="linearGradient-43">
                                        <stop stop-color="#91A3FF" offset="0%"/>
                                        <stop stop-color="#1D1F9D" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="69.5236548%" y1="50%" x2="29.5622273%" y2="67.0221657%" id="linearGradient-44">
                                        <stop stop-color="#39378B" offset="0%"/>
                                        <stop stop-color="#121465" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="99.9653815%" y1="44.7550213%" x2="50%" y2="75.9379045%" id="linearGradient-45">
                                        <stop stop-color="#FF7575" stop-opacity="0.5" offset="0%"/>
                                        <stop stop-color="#000000" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <path d="M180.06301,140.453679 C187.692296,143.603787 193.192535,146.967765 196.56388,150.545614 C201.620745,155.912262 226.213207,197.654705 229.11274,200.125632 C232.012349,202.596727 251.967976,204.468749 254.972517,205.454879 C253.435878,207.681274 250.446241,214.555967 251.982956,220.602637 C247.240429,222.992868 236.823081,220.858709 215.514217,218.468479 C199.663011,205.193753 191.432422,184.256913 188.043132,174.261847 C184.653766,164.266866 181.993827,152.997505 180.06301,140.453679 Z" id="path-46"/>
                                    <linearGradient x1="61.2893362%" y1="50%" x2="38.1820853%" y2="67.0221657%" id="linearGradient-47">
                                        <stop stop-color="#39378B" offset="0%"/>
                                        <stop stop-color="#121465" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="78.891926%" y1="44.7550213%" x2="50%" y2="75.9379045%" id="linearGradient-48">
                                        <stop stop-color="#FF7575" stop-opacity="0.5" offset="0%"/>
                                        <stop stop-color="#000000" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <path d="M190.531587,147.612247 C196.691035,158.160181 206.192291,179.339996 208.89033,188.483291 C211.783915,198.289588 200.536023,224.112372 200.666643,230.180225 C200.775576,235.240178 195.57469,233.473361 149.374127,238.128395 C147.946285,229.206886 147.946285,218.051677 149.374127,204.662971 C151.515854,184.579606 142.788355,157.55996 145.208028,153.023027 C147.627701,148.486095 153.514186,138.838288 156.09824,138.838288 C158.682224,138.838288 184.372139,137.064416 190.531587,147.612247 Z" id="path-49"/>
                                    <linearGradient x1="98.7417728%" y1="51.8115584%" x2="0%" y2="49.1117936%" id="linearGradient-50">
                                        <stop stop-color="#5438DC" offset="0%"/>
                                        <stop stop-color="#4023B1" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="43.6748361%" x2="43.2115203%" y2="51.3009202%" id="linearGradient-51">
                                        <stop stop-color="#0041B2" offset="0%"/>
                                        <stop stop-color="#2D64D7" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="111.316383%" gradientTransform="translate(0.199831,0.000000),scale(1.000000,0.678221),rotate(67.533806),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-52">
                                        <stop stop-color="#FFA961" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <path d="M22.9357523,12.3371027 C21.7846973,17.7220703 22.7780468,21.6180243 22.7780468,27.7469514 C22.7780468,35.9388608 6.06994395,32.6056743 5.49967493,26.3956014 C4.92940591,20.1856014 5.60296428,11.8598959 3.25005087,6.2186473 C0.897137474,0.577362162 24.0868074,6.95217162 22.9357523,12.3371027 Z" id="path-53"/>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="95.3815585%" gradientTransform="translate(0.199831,0.000000),scale(1.000000,0.817228),rotate(63.513957),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-55">
                                        <stop stop-color="#FFA961" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <linearGradient x1="0%" y1="66.7981505%" x2="64.4576285%" y2="46.3406081%" id="linearGradient-56">
                                        <stop stop-color="#98C7FF" offset="0%"/>
                                        <stop stop-color="#FFFFFF" offset="100%"/>
                                    </linearGradient>
                                    <polygon id="path-57" points="0.879691622 53.8652757 7.18808202 2.62722613 93.214682 0.90085045 85.692872 50.9244306"/>
                                    <linearGradient x1="54.5314385%" y1="27.9286529%" x2="40.0809526%" y2="50%" id="linearGradient-59">
                                        <stop stop-color="#319EFF" offset="0%"/>
                                        <stop stop-color="#3A9EFF" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="68.4323294%" x2="100%" y2="37.6520672%" id="linearGradient-60">
                                        <stop stop-color="#4794D8" offset="0%"/>
                                        <stop stop-color="#3AA0FF" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="93.2768302%" gradientTransform="translate(0.199831,0.000000),scale(0.687076,1.000000),rotate(48.413878),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-61">
                                        <stop stop-color="#FFA961" offset="0%"/>
                                        <stop stop-color="#FFD6AA" offset="100%"/>
                                    </radialGradient>
                                    <linearGradient x1="68.4244669%" y1="50%" x2="30.7128803%" y2="67.0221657%" id="linearGradient-62">
                                        <stop stop-color="#39378B" offset="0%"/>
                                        <stop stop-color="#121465" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="97.1523148%" y1="44.7550213%" x2="50%" y2="75.9379045%" id="linearGradient-63">
                                        <stop stop-color="#FF7575" stop-opacity="0.5" offset="0%"/>
                                        <stop stop-color="#000000" stop-opacity="0" offset="100%"/>
                                    </linearGradient>
                                    <path d="M123.083814,180.165348 C116.429159,197.202086 121.6901,210.132913 124.611303,224.893717 C127.53259,239.654521 128.861687,242.848945 133.51727,245.850998 C138.172936,248.85305 149.589101,253.03495 193.467889,258.108092 C193.467889,254.599157 193.355988,245.882372 199.091036,238.562656 C190.982763,238.562656 162.160285,230.603844 152.250408,228.109633 C143.347049,221.278377 152.250408,210.325668 152.250408,189.776541 C152.250408,169.227606 129.738468,163.12861 123.083814,180.165348 Z" id="path-64"/>
                                    <linearGradient x1="60.5919994%" y1="2.4752427%" x2="41.6377523%" y2="62.0220602%" id="linearGradient-65">
                                        <stop stop-color="#9CC2FF" offset="0%"/>
                                        <stop stop-color="#6494F6" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="59.1705852%" x2="41.9149675%" y2="100%" id="linearGradient-66">
                                        <stop stop-color="#8AA0FF" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#3662BB" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="58.2980755%" y1="35.2593316%" x2="41.0670563%" y2="63.1418639%" id="linearGradient-67">
                                        <stop stop-color="#ED7B5E" offset="0%"/>
                                        <stop stop-color="#FFB893" offset="100%"/>
                                    </linearGradient>
                                    <path d="M149.919272,82.4039784 C156.137366,87.2176649 170.60533,88.6292541 180.453267,83.9786378 C190.301299,79.3280216 192.704408,60.2875243 180.453267,54.4292541 C175.79356,52.2011459 166.538531,53.6434811 167.822115,60.3603027 C157.103512,56.2107676 145.447949,59.844627 140.826587,62.6125405 C133.626133,66.9253405 128.013633,71.6244108 125.062543,81.5032 C122.111453,91.3817946 126.929402,101.206097 124.558247,106.236951 C122.187092,111.267611 115.201729,115.635481 118.9364,131.095243 C122.670976,146.554811 113.697044,144.081319 111.674041,153.511373 C109.650944,162.941232 116.094716,167.440454 111.674041,173.723914 C107.253272,180.007178 98.7785806,206.533924 114.651649,220.740886 C130.524621,234.948043 160.103248,245.298919 166.824683,214.715654 C173.546214,184.132389 142.0166,177.455654 151.269149,162.162076 C160.521603,146.868692 154.392312,132.689751 156.329088,128.317211 C158.711879,122.937643 156.149956,114.72867 151.624837,103.603697 C147.433752,93.2997189 153.467277,90.5487351 149.919272,82.4039784 Z" id="path-68"/>
                                    <radialGradient cx="19.9831358%" cy="0%" fx="19.9831358%" fy="0%" r="174.146493%" gradientTransform="translate(0.199831,0.000000),scale(0.407232,1.000000),rotate(-13.944330),scale(1.000000,1.872876),translate(-0.199831,-0.000000)" id="radialGradient-69">
                                        <stop stop-color="#9870F9" offset="0%"/>
                                        <stop stop-color="#4521C0" offset="100%"/>
                                    </radialGradient>
                                    <linearGradient x1="0.936972128%" y1="44.7534526%" x2="100%" y2="56.6913672%" id="linearGradient-70">
                                        <stop stop-color="#FFA661" offset="0%"/>
                                        <stop stop-color="#FFCC80" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="58.2884079%" y1="52.6042388%" x2="79.4415526%" y2="47.629234%" id="linearGradient-71">
                                        <stop stop-color="#6E7AE1" offset="0%"/>
                                        <stop stop-color="#FFFFFF" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="32.311322%" y1="70.2849171%" x2="76.3385107%" y2="32.4366071%" id="linearGradient-72">
                                        <stop stop-color="#98B5FF" offset="0%"/>
                                        <stop stop-color="#FFFFFF" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="linearGradient-73">
                                        <stop stop-color="#D9E5F6" stop-opacity="0.71263587" offset="0%"/>
                                        <stop stop-color="#B2C6EA" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="100%" y1="69.4697499%" x2="23.2289251%" y2="56.9151312%" id="linearGradient-74">
                                        <stop stop-color="#060064" offset="0%"/>
                                        <stop stop-color="#6D80FF" offset="100%"/>
                                    </linearGradient>
                                    <path d="M62.0704077,1.51822432 C64.1015143,5.08107928 65.2391179,9.07290495 65.2391179,13.2882955 C65.2391179,28.3392856 50.7356242,40.540541 32.8445441,40.540541 C14.953464,40.540541 0.449970254,28.3392856 0.449970254,13.2882955 C0.449970254,8.82753288 1.72387874,4.61706126 3.98246666,0.900408108 C18.3331676,3.1749982 46.8972137,3.02845541 62.0704077,1.51822432 Z" id="path-75"/>
                                    <linearGradient x1="77.3363047%" y1="47.0671156%" x2="40.2696226%" y2="55.7676967%" id="linearGradient-77">
                                        <stop stop-color="#031467" offset="0%"/>
                                        <stop stop-color="#26329B" offset="100%"/>
                                    </linearGradient>
                                    <path d="M30.3699552,0.450464865 C46.6458823,0.450464865 59.8400485,3.57638243 59.8400485,7.43243243 C59.8400485,11.2884824 46.6458823,14.4144 30.3699552,14.4144 C14.094028,14.4144 0.899801031,11.2884824 0.899801031,7.43243243 C0.899801031,3.57638243 14.094028,0.450464865 30.3699552,0.450464865 Z" id="path-78"/>
                                    <linearGradient x1="72.197239%" y1="-68.7894451%" x2="38.0597449%" y2="125.947616%" id="linearGradient-80">
                                        <stop stop-color="#BEFFB1" offset="0%"/>
                                        <stop stop-color="#5CDBA8" offset="53.3765996%"/>
                                        <stop stop-color="#1984AC" offset="100%"/>
                                    </linearGradient>
                                    <path d="M28.7951879,82.8828568 C27.1857927,71.7325757 22.7584818,55.6310081 9.44842104,38.2882676 C1.60788036,28.0722595 1.58229086,3.19400541 0.449965755,0.450421622 C6.60229552,2.56855946 17.6543388,8.0284973 28.7951879,23.4234324 C40.4739488,39.5615297 33.0651132,72.4734757 28.7951879,82.8828568 Z" id="path-81"/>
                                    <linearGradient x1="129.557163%" y1="-68.7894451%" x2="7.20491094%" y2="125.947616%" id="linearGradient-83">
                                        <stop stop-color="#BEFFB1" offset="0%"/>
                                        <stop stop-color="#5CDBA8" offset="53.3765996%"/>
                                        <stop stop-color="#1984AC" offset="100%"/>
                                    </linearGradient>
                                    <path d="M49.9913821,54.2379577 C45.0192814,46.2759189 36.2344709,35.4858432 20.2547669,26.7370144 C10.8416056,21.5833387 2.46866252,2.61953784 0.683361335,0.908185586 C6.08924215,0.454092793 16.3560332,0.900491892 30.0265137,8.89358018 C44.3569176,17.2724523 49.7543588,44.8634667 49.9913821,54.2379577 Z" id="path-84"/>
                                    <linearGradient x1="99.8706369%" y1="-68.7894451%" x2="23.1737751%" y2="125.947616%" id="linearGradient-86">
                                        <stop stop-color="#BEFFB1" offset="0%"/>
                                        <stop stop-color="#5CDBA8" offset="53.3765996%"/>
                                        <stop stop-color="#1984AC" offset="100%"/>
                                    </linearGradient>
                                    <path d="M1.82085698,60.2840068 C5.74122946,51.7140608 13.0928076,39.8358851 27.875606,29.0611824 C36.5836844,22.7141757 42.4654903,2.75041216 44.0218979,0.815837838 C38.5783912,1.06163514 28.4098944,2.83171622 15.8292823,12.5556689 C2.64137623,22.7490811 0.841676987,50.9189595 1.82085698,60.2840068 Z" id="path-87"/>
                                </defs>
                                <g id="FINALL" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="About-us---web" transform="translate(-679.000000, -61.000000)">
                                        <g id="Artwork" transform="translate(679.000000, 60.000000)">
                                            <path d="M409.73969,72.8627395 C471.293969,76.8622783 521.099867,106.461087 534.535448,153.255836 C553.688362,219.963122 491.678839,296.354266 396.032732,323.880309 C327.848628,343.502909 260.976982,332.994962 221.258958,301.175913 C138.42397,308.117266 67.3185167,275.932281 50.7881012,218.358614 C30.6398023,148.184246 99.1992652,66.865614 203.91968,36.7277419 C288.352263,12.4289803 370.513152,28.8199303 409.739685,72.8627391 Z" id="window" fill="url(#radialGradient-1)" style="mix-blend-mode: multiply;"/>
                                            <g id="tree" opacity="0.800000012" style="mix-blend-mode: multiply;" transform="translate(248.361062, 243.693620) scale(-1, 1) rotate(31.000000) translate(-248.361062, -243.693620) translate(210.567340, 147.747674)">
                                                <path d="M58.2949941,164.447677 C54.0351629,168.220731 37.8350501,160.674623 31.4120685,148.961681 C24.9890868,137.248739 36.9037286,133.07954 20.6977001,114.346223 C4.49167152,95.6129066 -5.90705118,88.4384418 3.9277636,57.5598771 C13.7625784,26.6813124 0.175872368,9.5204452 18.1281159,1.46439055 C36.0803595,-6.59166411 46.4189958,20.1454755 44.3597799,43.6634921 C42.3005641,67.1815086 46.5123469,72.0555523 64.0719666,69.6185305 C81.6315864,67.1815086 66.8271974,101.708046 66.8271974,109.244533 C66.8271974,116.781019 77.4747161,130.779119 75.2658639,141.310682 C73.0570117,151.842245 62.5548252,160.674623 58.2949941,164.447677 Z" id="leaves" fill="url(#linearGradient-2)"/>
                                                <path d="M48.0388963,131.615831 C48.0388963,125.831383 49.4985366,107.808524 57.4388257,96.8324958" id="branch" stroke="url(#linearGradient-3)" stroke-width="2.7" stroke-linecap="round"/>
                                                <path d="M11.4643821,97.8633876 C11.4643821,92.0789393 27.6849861,88.0179468 35.6252753,77.041919" id="branch" stroke="url(#linearGradient-4)" stroke-width="2.7" stroke-linecap="round" transform="translate(23.544829, 87.452653) scale(-1, 1) translate(-23.544829, -87.452653) "/>
                                                <path d="M67.8618914,191.540939 C67.8618914,189.079868 63.6286605,177.985763 59.5835393,165.132044 C46.916345,124.880951 26.497596,75.3160522 26.497596,40.9696063" id="branch" stroke="url(#linearGradient-5)" stroke-width="2.7" stroke-linecap="round"/>
                                            </g>
                                            <g id="plant" opacity="0.800000012" style="mix-blend-mode: multiply;" transform="translate(376.594079, 239.296565) rotate(-1.000000) translate(-376.594079, -239.296565) translate(333.851179, 169.371320)">
                                                <path d="M20.7233543,139.820171 C20.7233543,121.610471 35.9272925,65.2573 56.4496889,34.4221803" id="stem" stroke="url(#linearGradient-6)" stroke-width="2.7" stroke-linecap="round"/>
                                                <path d="M38.6629973,45.2113656 C42.1829576,40.2650221 43.9444779,34.7421348 43.9475582,28.6427034 C43.9521786,19.4935564 41.5936911,12.077901 38.6797291,12.0793734 C35.7657671,12.0808458 33.3997886,19.4988885 33.3951682,28.6480355 C33.392088,34.7474669 35.148031,40.2685769 38.6629973,45.2113656 Z" id="leaf" fill="url(#linearGradient-7)" transform="translate(38.671365, 28.645369) rotate(-30.000000) translate(-38.671365, -28.645369) "/>
                                                <path d="M68.7451984,62.1045827 C72.2655341,57.1644777 74.0255779,51.6473728 74.0253298,45.553268 C74.0249576,36.4121107 71.6603589,29.0016424 68.7438507,29.0015238 C65.8273425,29.0014052 63.4633472,36.4116812 63.4637193,45.5528385 C63.4639674,51.6469434 65.2244604,57.1641914 68.7451984,62.1045827 Z" id="leaf" fill="url(#linearGradient-8)" transform="translate(68.744525, 45.553053) rotate(88.000000) translate(-68.744525, -45.553053) "/>
                                                <path d="M58.9224147,86.1413678 C62.4430559,81.2010533 64.2034385,75.6838469 64.2035627,69.5897486 C64.2037489,60.448601 61.8396002,53.0382849 58.9230889,53.0383442 C56.0065776,53.0384036 53.6421272,60.4488159 53.641941,69.5899634 C53.6418168,75.6840618 55.4019747,81.2011966 58.9224147,86.1413678 Z" id="leaf" fill="url(#linearGradient-9)" transform="translate(58.922752, 69.589856) rotate(91.000000) translate(-58.922752, -69.589856) "/>
                                                <path d="M50.9186831,109.450788 C54.4393243,104.510473 56.1997069,98.9932669 56.199831,92.8991685 C56.2000172,83.758021 53.8358686,76.3477049 50.9193573,76.3477642 C48.002846,76.3478235 45.6383955,83.7582359 45.6382093,92.8993834 C45.6380852,98.9934818 47.3982431,104.510617 50.9186831,109.450788 Z" id="leaf" fill="url(#linearGradient-9)" transform="translate(50.919020, 92.899276) rotate(91.000000) translate(-50.919020, -92.899276) "/>
                                                <path d="M67.2118765,33.6184543 C70.7268972,28.676032 72.4827829,23.1552711 72.4795336,17.0561715 C72.4746597,7.90752204 70.1083471,0.489817185 67.1942266,0.488263967 C64.280106,0.486710749 61.9216955,7.90189734 61.9265694,17.0505468 C61.9298187,23.1496464 63.6915877,28.6722822 67.2118765,33.6184543 Z" id="leaf" fill="url(#linearGradient-10)" transform="translate(67.203050, 17.053359) rotate(33.000000) translate(-67.203050, -17.053359) "/>
                                                <path d="M25.5754818,70.6362017 C29.0965409,65.6906437 30.8588315,60.1687907 30.8623537,54.0706427 C30.8676369,44.9234208 28.5091895,37.5094972 25.594614,37.5111808 C22.6800385,37.5128645 20.3130253,44.9295179 20.3077421,54.0767398 C20.30422,60.1748878 22.0601332,65.6947084 25.5754818,70.6362017 Z" id="leaf" fill="url(#linearGradient-11)" transform="translate(25.585050, 54.073691) rotate(-41.000000) translate(-25.585050, -54.073691) "/>
                                                <path d="M15.7536384,96.127762 C19.2751474,91.1827914 21.0376759,85.6616037 21.041224,79.5641988 C21.0465461,70.4180915 18.6878423,63.0050816 15.7729116,63.0067776 C12.8579809,63.0084737 10.4906482,70.4242335 10.485326,79.5703408 C10.4817779,85.6677457 12.2378821,91.186886 15.7536384,96.127762 Z" id="leaf" fill="url(#linearGradient-12)" transform="translate(15.763277, 79.567270) rotate(-47.000000) translate(-15.763277, -79.567270) "/>
                                            </g>
                                            <g id="window-reflactions" transform="translate(213.714499, 62.612613)" opacity="0.472712054" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.6">
                                                <path d="M0.224962631,35.3603604 L45.8931932,0.373444192" id="Line" stroke="url(#linearGradient-13)"/>
                                                <path d="M0.674887892,52.9279279 L36.6956554,25.3320356" id="Line-Copy" stroke="url(#linearGradient-14)"/>
                                                <path d="M158.148729,75.4504505 L203.81696,40.4635343" id="Line-Copy-3" stroke="url(#linearGradient-13)"/>
                                                <path d="M158.598655,93.018018 L194.619422,65.4221257" id="Line-Copy-2" stroke="url(#linearGradient-14)"/>
                                            </g>
                                            <g id="guy-on-chair" transform="translate(373.437967, 117.117117)">
                                                <path d="M168.63207,74.1951126 L68.0728876,55.4054279 C38.8903176,98.2164189 25.0808839,134.320698 26.64474,163.717973 C45.0823776,171.368941 80.5775992,183.476509 133.130251,200.040822 L175.415122,86.1909797 C177.147284,81.5275225 174.775341,76.3411374 170.117373,74.6070721 C169.635006,74.4272973 169.137758,74.2895383 168.63207,74.1951126 Z" id="" fill="url(#linearGradient-15)"/>
                                                <g id="neck" transform="translate(39.143498, 53.153153)">
                                                    <mask id="mask-18" fill="white">
                                                        <use xlink:href="#path-17"/>
                                                    </mask>
                                                    <use id="" fill="url(#linearGradient-16)" xlink:href="#path-17"/>
                                                    <path d="M54.3197451,40.232746 C45.7470518,25.0011694 39.4586014,15.4741913 35.454394,11.6518116 C31.4501867,7.82943187 41.0031331,3.99166124 64.1132334,0.138499695 L54.3197451,44.5458244 L54.3197451,40.232746 Z" id="Path-3" fill="#B60808" style="mix-blend-mode: multiply;" opacity="0.358761161" mask="url(#mask-18)"/>
                                                </g>
                                                <path d="M61.0801101,26.1904829 C57.9771442,28.2824937 60.624392,36.7017514 57.2653625,41.5078811 C55.42888,44.1356216 51.5659905,45.5968252 49.782318,46.6426162 C44.73635,49.6011676 49.9216824,51.7129658 50.9644404,53.4739207 C52.0073109,55.2348757 51.1760178,59.2133045 50.3951162,62.3488396 C49.6143272,65.4843748 46.8438561,72.5498811 49.8142065,74.128645 C52.7845006,75.707409 71.0217149,82.6004036 76.2952889,80.4950378 C81.5688629,78.3896721 83.4544996,67.8430559 84.7542775,67.156991 C86.0541678,66.4708036 86.9670661,67.194973 88.1670168,67.4946018 C91.290398,68.2742739 94.1109794,66.5216505 95.61238,64.0272144 C97.3126476,61.2023351 99.730096,62.4915171 98.4230069,58.6311387 C96.4064981,52.6760541 84.7192395,29.2199748 80.0755609,27.5337586 C75.4318823,25.8474811 65.8795191,22.9546018 61.0801101,26.1904829 Z" id="" fill="url(#linearGradient-19)"/>
                                                <path d="M76.2286657,32.6351351 C64.3524799,29.6705802 58.8298062,32.3262306 54.5295136,23.0853694 C51.9895771,17.6275315 56.9350557,0.884526126 65.2635448,0.505668468 C67.3129944,9.86447207 77.2140048,10.669182 82.9510351,11.4467892 C113.754685,15.6220144 116.97797,43.8195171 107.756274,60.4287495 C104.787227,65.7759387 102.040474,69.6183063 99.5901558,72.4987351 C98.0347646,74.3275459 96.0015191,76.530573 95.31493,77.5763063 C95.0854937,77.9251604 93.0986116,82.3292252 92.7548872,82.2434414 C91.7169015,81.9844324 92.1335111,81.9320505 92.6428477,77.3735748 C93.1526472,72.815182 93.4369788,71.5885153 94.3606763,67.8792577 C94.6333674,66.7837117 99.7988905,58.368364 95.8319386,55.3214234 C93.1877009,53.2901297 89.6148714,54.5308036 85.1142438,59.043445 L82.3809829,58.0125477 C84.1869748,53.9928937 85.3279389,51.025355 85.8053303,49.1101802 C86.520756,46.2372937 88.1049177,35.599773 76.2286657,32.6351351 Z" id="" fill="url(#linearGradient-20)"/>
                                                <path d="M82.3850048,58.1498986 C81.4784054,60.1724324 78.0576236,64.8350676 74.9706864,66.5191554 C71.8832993,68.2033108 65.3805294,68.3062162 64.046501,66.38625 C62.7124726,64.4662838 56.6533291,55.7690541 51.1921813,54.4058108 C50.9180419,55.5065878 50.1698161,57.3790541 48.9475492,60.0233108 C53.1742821,61.7826351 55.6292093,63.4375338 56.3122408,64.9880068 C57.3367656,67.3137162 57.8871142,65.755473 56.8638492,66.7888851 C55.8405842,67.8222973 50.4974967,67.0278041 50.0918891,62.9947635 C48.5504901,66.2063176 46.8948102,74.8748649 47.4784982,76.855473 C48.0621413,78.8361486 51.4219132,79.7444257 54.7375924,79.9576014 C58.0532266,80.1707095 69.8667342,81.9758108 72.8753845,81.3601351 C75.8844846,80.7444595 79.7065997,81.0988851 82.2239315,73.8009459 C84.7412634,66.5029392 84.1815564,61.7747973 87.4664607,55.5590203 C90.751365,49.3432432 83.2911543,56.1273311 82.3850048,58.1498986 Z" id="" fill="url(#linearGradient-21)"/>
                                                <g id="shirt" transform="translate(0.000000, 86.486486)">
                                                    <mask id="mask-24" fill="white">
                                                        <use xlink:href="#path-23"/>
                                                    </mask>
                                                    <g id="">
                                                        <use fill="#917BFF" fill-rule="evenodd" xlink:href="#path-23"/>
                                                        <use fill="url(#linearGradient-22)" fill-rule="evenodd" xlink:href="#path-23"/>
                                                        <use fill="black" fill-opacity="1" filter="url(#filter-25)" xlink:href="#path-23"/>
                                                    </g>
                                                    <path d="M60.4312448,2.4885567 C50.095181,13.0811296 70.4851693,18.7250697 78.8109908,15.9030996 C84.3615384,14.0217863 90.2511958,9.55027195 96.4799628,2.4885567 C80.7850614,-9.20491947 70.8532164,-12.1282885 66.6844277,-6.28155042 C60.4312448,2.4885567 70.7673086,-8.10401617 60.4312448,2.4885567 Z" id="Path-6" fill="url(#linearGradient-26)" style="mix-blend-mode: multiply;" opacity="0.585435268" mask="url(#mask-24)"/>
                                                    <path d="M45.7007034,98.3247385 C53.0611061,98.3247385 100.915042,90.3910775 100.915042,83.9512336 C100.915042,79.6580044 99.685164,62.3881435 97.2254087,32.141651" id="Path-8" fill="url(#linearGradient-27)" style="mix-blend-mode: multiply;" opacity="0.546540179" mask="url(#mask-24)"/>
                                                    <path d="M-21.3399519,70.3947883 C-18.0064734,70.3947883 -2.59391584,89.9437503 11.4871549,83.3639048 C28.4974354,75.4152892 38.4025491,45.9844334 38.4025491,42.461153 C38.4025491,39.7657876 42.8685216,30.2072738 41.1678875,19.7926366 C40.4957753,15.6766396 37.4166798,9.14740587 31.9306009,0.2049355" id="Path-8-Copy" fill="url(#linearGradient-28)" style="mix-blend-mode: multiply;" opacity="0.546540179" mask="url(#mask-24)"/>
                                                </g>
                                            </g>
                                            <g id="guy-standin" transform="translate(233.961136, 0.000000)">
                                                <path d="M62.1270186,60.8642973 C63.9383102,74.6837365 64.2854694,82.7253581 63.1684962,84.9891622 C61.4930186,88.3849595 64.738159,104.359351 75.0712541,105.2855 C85.4043493,106.211588 90.8212695,101.803595 91.2274674,91.0257297 C91.6336653,80.2478649 92.28071,76.0926622 93.9494342,71.3233919 C95.6181584,66.5540608 64.5187453,46.7947432 63.1684962,50.4477095 C62.2682353,52.8830608 61.9211472,56.3552973 62.1270186,60.8642973 Z" id="" fill="url(#radialGradient-29)"/>
                                                <path d="M104.597819,29.116077 C104.597819,32.1887649 105.005436,41.7810482 104.69709,44.2117491 C104.388744,46.6425117 104.143286,50.2647423 104.420188,54.9442797 C104.69709,59.6238788 102.269776,71.1332982 99.5600162,75.3030351 C97.9421929,77.7925473 91.5297573,82.5919905 85.239723,81.9177284 C77.7830216,81.1183766 69.6297064,73.9097081 68.7575281,70.3051887 C67.1496824,63.6600716 68.4819867,57.7960396 63.8485771,54.2648955 C59.2151676,50.7337514 55.8386765,47.4538356 56.2552641,42.0024698 C56.6718517,36.5511658 61.4299301,23.5740568 63.8485771,23.0287104 C66.2672242,22.4834257 104.597819,26.0434509 104.597819,29.116077 Z" id="" fill="url(#radialGradient-30)"/>
                                                <path d="M64.7922594,25.192836 C66.9911566,28.5144216 86.2411203,44.5265838 105.535062,34.1309766 C124.828848,23.7354306 99.1636307,4.86347027 87.5254319,2.71038198 C75.8872332,0.557354955 65.8648542,1.75409369 58.8253474,11.5335351 C51.7858406,21.3130378 48.2545284,38.0737514 62.0262412,60.8108072 C62.6324363,57.202764 62.9356117,54.7982595 62.9356117,53.5974162 C57.4552593,48.5773009 56.0851712,43.8992072 58.8253474,39.5631351 C62.9356117,33.059027 64.2952697,45.811355 64.7922594,47.8599315 C66.4283167,47.8599315 67.4580233,47.5743928 67.881457,47.0031928 C66.7539092,43.7846486 66.3427738,40.8081477 66.6480508,38.0737514 C67.1058884,33.9720649 68.4588524,33.059027 64.7922594,25.192836 Z" id="" fill="url(#radialGradient-31)"/>
                                                <g id="">
                                                    <use fill="url(#linearGradient-32)" xlink:href="#path-34"/>
                                                    <use fill="url(#linearGradient-33)" xlink:href="#path-34"/>
                                                </g>
                                                <path d="M18.8319665,222.45778 C20.1155672,228.150698 24.3631848,234.232185 25.794083,235.545596 C27.2249605,236.858947 32.4307253,238.486806 33.4150331,238.170699 C34.3993409,237.854622 36.9895157,235.686991 37.106741,233.150105 C37.223987,230.613219 34.739282,229.183946 34.7221659,225.435447 C34.7050705,221.686978 28.4782615,216.249959 28.4782615,212.93373 C28.4782615,209.617532 17.5483864,216.764832 18.8319665,222.45778 Z" id="" fill="url(#radialGradient-35)"/>
                                                <path d="M178.869455,214.647155 C182.731123,219.775722 185.245352,220.673104 186.692818,222.20245 C188.140252,223.731797 191.452706,229.131123 192.682703,228.231214 C193.912762,227.331337 195.186594,225.558704 193.272524,222.20245 C191.358423,218.846261 188.459766,215.306368 189.465991,213.529832 C190.472279,211.753361 195.384039,206.502336 199.483883,205.283278 C203.583603,204.064189 204.945571,204.851586 205.354059,204.196595 C205.762609,203.541732 200.45124,202.590939 198.262703,202.345158 C196.073979,202.099376 192.972506,201.817263 188.50059,202.345158 C185.519292,202.697087 183.442578,201.456282 182.270418,198.622839 C177.428695,205.886714 176.294999,211.228121 178.869455,214.647155 Z" id="" fill="url(#radialGradient-36)"/>
                                                <g id="shirt" transform="translate(0.000000, 85.585586)">
                                                    <mask id="mask-39" fill="white">
                                                        <use xlink:href="#path-38"/>
                                                    </mask>
                                                    <use id="" fill="url(#linearGradient-37)" opacity="0.800000012" xlink:href="#path-38"/>
                                                    <path d="M27.4899759,65.0338468 L44.4443225,42.4750342 C48.631197,91.2461368 41.379675,124.078586 22.6897567,140.972382 C17.7498497,111.660114 20.5000598,96.3395687 22.6897567,83.5307602 C23.6483775,77.9232305 25.2484506,71.7575927 27.4899759,65.0338468 Z" id="Path-4" fill="url(#linearGradient-40)" style="mix-blend-mode: multiply;" opacity="0.400000006" mask="url(#mask-39)"/>
                                                    <path d="M33.5923995,146.518131 C39.921543,127.953968 68.3633522,66.8103784 80.5360341,58.0918761 C92.7087161,49.3733739 93.6256687,38.1208022 93.1671924,23.1852745 C92.7087161,8.24974673 64.2777584,-21.5072349 49.4139019,-10.2519472 C34.5500453,1.00334047 -5.24244387,21.7694111 -9.5938996,56.5908595 C-13.9453553,91.4123079 4.58631181,144.82332 12.9582522,139.543329 C21.3301926,134.263339 27.263256,165.082294 33.5923995,146.518131 Z" id="Path-5" fill="url(#linearGradient-41)" style="mix-blend-mode: multiply;" opacity="0.713058036" mask="url(#mask-39)"/>
                                                </g>
                                                <path d="M63.5614852,74.3156757 C63.5614852,77.7101014 68.7174451,87.1985135 78.6738988,86.8375 C88.6303202,86.4765541 90.6331175,86.202027 91.7645967,81.1407095 C91.7645967,88.6393243 92.1524899,90.8528041 90.3162981,95.7977027 C88.4800415,100.7425 77.0359297,103.453682 70.6173247,99.34625 C64.198655,95.2388176 60.8536838,92.7798311 61.7926418,85.2812162 C62.7315999,77.7825338 63.5614852,70.9212162 63.5614852,74.3156757 Z" id="" fill="url(#linearGradient-42)" opacity="0.800000012"/>
                                            </g>
                                            <g id="girl-and-desk" transform="translate(0.000000, 41.441441)">
                                                <path d="M71.71794,136.95116 L163.020895,114.864914 C179.906965,160.446347 187.568067,197.935682 186.004202,227.333063 C167.566524,234.983971 139.910257,244.903852 103.035276,257.092563 L65.3330209,148.670177 C63.6991111,143.971225 66.179307,138.835955 70.8726546,137.199974 C71.1502054,137.103285 71.4322591,137.020204 71.71794,136.95116 Z" id="chair" fill="url(#linearGradient-43)"/>
                                                <path d="M175.647192,121.031056 C173.692405,127.229429 180.042667,144.729759 190.131017,153.281656 C200.219436,161.833553 167.771249,160.379542 167.752202,150.844942 C167.73319,141.310342 177.601876,114.83278 175.647192,121.031056 Z" id="hair" fill="#316EEA"/>
                                                <g id="arm">
                                                    <use fill="url(#linearGradient-44)" xlink:href="#path-46"/>
                                                    <use fill="url(#linearGradient-45)" xlink:href="#path-46"/>
                                                </g>
                                                <g id="shirt">
                                                    <use fill="url(#linearGradient-47)" xlink:href="#path-49"/>
                                                    <use fill="url(#linearGradient-48)" xlink:href="#path-49"/>
                                                </g>
                                                <path d="M0,284.737962 C0,270.320097 11.4453955,256.240007 25.5511774,253.291883 L259.902792,204.31214 C274.496189,201.262104 297.717311,202.842476 311.757301,207.837973 L584.820891,304.995333 C608.237385,313.327036 607.411799,323.758209 582.970283,328.295237 L467.900828,349.655339 C443.462271,354.191817 403.50235,357.869359 378.651346,357.869359 L44.9995597,357.869359 C20.1469891,357.869359 0,337.727443 0,312.860222 L0,284.737962 Z" id="desk-top" fill="url(#linearGradient-50)"/>
                                                <polyline id="shadow" fill="url(#linearGradient-51)" opacity="0.196930804" style="mix-blend-mode: multiply;" points="200.038517 268.282761 310.179902 250.459949 393.981747 287.21925 272.660957 319.440317"/>
                                                <g id="neck" transform="translate(150.275037, 111.261261)">
                                                    <mask id="mask-54" fill="white">
                                                        <use xlink:href="#path-53"/>
                                                    </mask>
                                                    <use id="" fill="url(#radialGradient-52)" xlink:href="#path-53"/>
                                                    <path d="M-0.983976655,36.3007582 C15.8414493,22.1866441 26.1956784,15.129587 30.0787106,15.129587 C33.9617428,15.129587 23.6075137,12.7635638 -0.983976655,8.03151738 L-0.983976655,36.3007582 Z" id="Path" fill="#B60808" style="mix-blend-mode: multiply;" opacity="0.410546875" mask="url(#mask-54)"/>
                                                </g>
                                                <path d="M178.34106,80.2661225 C179.826127,84.9610414 179.659894,90.1675495 182.541395,94.6510901 C185.422799,99.1345712 189.219092,103.050393 190.227423,105.042523 C191.235852,107.034652 186.183166,108.804463 186.183166,110.585868 C186.183166,112.367333 189.550392,124.762728 187.748506,125.947279 C186.721662,128.715474 167.812064,132.552571 163.037324,129.803641 C158.828048,129.803641 152.340588,126.106393 148.3595,117.021166 C144.378412,107.935998 144.194832,85.8744577 148.3595,80.2661225 C152.524169,74.6578468 176.856042,75.5712631 178.34106,80.2661225 Z" id="face" fill="url(#radialGradient-55)"/>
                                                <g id="document" transform="translate(206.965620, 205.855856)">
                                                    <mask id="mask-58" fill="white">
                                                        <use xlink:href="#path-57"/>
                                                    </mask>
                                                    <use id="" fill="url(#linearGradient-56)" xlink:href="#path-57"/>
                                                    <polygon id="Path-2" fill="url(#linearGradient-59)" opacity="0.458035714" style="mix-blend-mode: multiply;" mask="url(#mask-58)" points="90.2478064 40.0589092 79.0490475 -0.445459808 97.0896838 -0.445459808"/>
                                                    <path d="M10.4403721,30.2295448 C10.4403721,33.4616805 18.2135051,38.152613 27.3524513,42.2589051 C32.6513123,44.6397782 31.9209323,50.1668191 34.2268832,50.1668191 C38.4155663,50.1668191 25.6388169,56.2185682 -4.10336493,68.3220665 C-5.71635375,51.9550927 -5.71635375,41.635935 -4.10336493,37.3645932 C-1.46668406,30.3824215 10.4403721,28.4543752 10.4403721,30.2295448 Z" id="Path-7" fill="url(#linearGradient-60)" opacity="0.400000006" style="mix-blend-mode: multiply;" mask="url(#mask-58)"/>
                                                </g>
                                                <path d="M200.840494,238.934635 C203.452597,238.934635 206.615683,237.551315 211.235118,236.494441 C215.854644,235.437568 218.768168,233.757725 220.186426,235.320428 C220.740668,235.930941 219.815983,237.417117 219.140171,237.822644 C218.464314,238.22814 218.106078,238.824306 214.880074,240.0185 C211.886376,241.126676 210.152884,241.64518 210.694001,242.67768 C211.235118,243.710212 216.13959,244.608734 217.710532,245.025203 C219.715157,245.556604 222.730286,246.59314 225.605398,247.076518 C228.818598,247.616748 232.36897,247.676721 232.776999,247.912545 C233.549965,248.35941 234.680294,250.040703 232.776999,250.57718 C232.3273,250.703905 229.075504,250.769333 225.120499,250.57718 C220.897069,250.371941 217.024303,249.56155 217.710532,250.57718 C217.873266,250.817955 221.767969,251.613369 226.04601,251.613369 C228.581197,251.613369 233.711781,251.929126 234.036332,251.929126 C235.209525,251.929126 235.79837,253.535185 234.734172,254.325523 C234.485848,254.510014 229.535208,255.070991 225.605398,255.215784 C221.082016,255.382428 217.078869,254.972203 217.031508,255.215784 C216.996951,255.393432 221.761544,255.993446 226.04601,255.789279 C229.512675,255.623991 231.418814,255.352441 232.066815,255.789279 C232.714907,256.226023 232.550704,257.393005 232.066815,257.918194 C231.865623,258.13655 228.733009,259.13386 225.605398,259.341306 C221.213038,259.632658 216.440736,259.123581 216.398515,259.341306 C216.2864,259.918838 224.403017,260.284793 225.605398,260.284793 C227.317321,260.284793 227.101581,262.501239 225.120499,262.970649 C222.635472,263.559468 217.49415,263.512613 215.154189,263.512613 C212.814274,263.512613 209.298138,262.970649 205.779845,261.662815 C202.261552,260.35495 197.563641,258.603468 194.585776,257.918194 C191.367528,257.177581 193.678576,246.991036 195.906834,241.646158 C198.135093,236.301279 198.228392,238.934635 200.840494,238.934635 Z" id="hand" fill="url(#radialGradient-61)"/>
                                                <g id="arm">
                                                    <use fill="url(#linearGradient-62)" xlink:href="#path-64"/>
                                                    <use fill="url(#linearGradient-63)" xlink:href="#path-64"/>
                                                </g>
                                                <g id="glasses" transform="translate(148.025411, 84.234234)">
                                                    <polygon id="" fill="#8C2D14" points="23.1723725 13.5839784 0.71228568 17.8203964 0.71228568 19.5032865 23.9719122 17.7306595"/>
                                                    <path d="M29.1517087,22.3876216 C26.5586311,22.6605045 24.1056547,19.5699099 23.6773763,15.4903063 C23.2490978,11.4106847 25.0066319,7.87708108 27.5997095,7.60421622 C30.1927872,7.33131532 32.6457635,10.4219099 33.074042,14.5015135 C33.5023204,18.5811351 31.7447864,22.1147748 29.1517087,22.3876216 Z" id="" stroke="#8C2214" stroke-width="1.8" fill-opacity="0" fill="#000000"/>
                                                    <path d="M41.6756609,15.1199833 C39.3295572,15.3668667 37.1101901,12.5706 36.722692,8.87955 C36.3352289,5.18845 37.9253575,1.99136667 40.2715081,1.74448333 C42.6176119,1.49761667 44.8369789,4.29385 45.2244419,7.98491667 C45.6119401,11.6759667 44.0217764,14.8730833 41.6756609,15.1199833 Z" id="" stroke="#8C2214" stroke-width="1.8" fill-opacity="0" fill="#000000"/>
                                                    <path d="M32.6024699,13.0773342 C32.6024699,12.0482842 35.5040703,10.030359 36.9596037,11.045991" id="" stroke="#8C3514" stroke-width="1.8"/>
                                                </g>
                                                <g id="hair">
                                                    <use fill="url(#linearGradient-65)" xlink:href="#path-68"/>
                                                    <use fill="url(#linearGradient-66)" xlink:href="#path-68"/>
                                                    <use fill="url(#linearGradient-67)" xlink:href="#path-68"/>
                                                </g>
                                                <g id="documents" transform="translate(204.715994, 277.927928)">
                                                    <path d="M0.422914448,20.2078172 L60.2900462,9.9099048 C93.3344849,30.5841428 109.528312,40.9875477 108.871638,41.1202539 C107.937485,41.3089568 41.8312307,52.8819696 37.3656703,54.0815262 C37.7836041,53.0136895 25.4661792,41.7194494 0.422914448,20.2078172 Z" id="" fill="url(#radialGradient-69)"/>
                                                    <polygon id="" fill="url(#linearGradient-70)" points="35.9669676 4.21463671 98.5300653 0 132.924112 30.0858013 54.9797624 35.4692697"/>
                                                </g>
                                                <g id="laptop" transform="translate(290.201794, 177.027027)">
                                                    <path d="M104.049954,109.618198 L160.86911,86.9672793 C162.023163,86.5071712 162.586359,85.1972793 162.126592,84.0416036 C161.888101,83.4413333 161.403176,82.9726306 160.795694,82.7546306 L88.4475826,56.7942523 L17.0769731,74.4538739 L104.049954,109.618198 Z" id="" fill="url(#linearGradient-71)"/>
                                                    <path d="M4.42686864,0.892704955 L84.5953616,26.8655743 C86.954201,27.6297095 88.7044894,29.6271216 89.1543787,32.0680721 L103.498957,109.901482 L16.627114,74.6197162 L0.960529244,4.05044595 C0.637047378,2.59335811 1.55467535,1.14962387 3.01008279,0.825716216 C3.47990914,0.721204955 3.96904629,0.74427027 4.42686864,0.892704955 Z" id="" fill="url(#linearGradient-72)"/>
                                                    <path d="M44.6425401,58.2567941 C48.7742983,60.2743275 53.1308004,60.2703941 54.9281933,56.5810275 C56.7254828,52.8916108 53.4832835,48.7157108 49.3515254,46.6981275 C45.2197672,44.6805608 41.3131669,44.6845608 39.5158361,48.3739108 C37.7184846,52.0633108 40.5107819,56.2392275 44.6425401,58.2567941 Z" id="" fill="#E2ECFF"/>
                                                </g>
                                                <g id="glasses" transform="translate(296.500747, 0.000000)">
                                                    <path d="M11.0691908,7.25716319 C11.059975,5.51687581 12.4598511,4.09795081 14.201211,4.08787478 L22.5813669,4.03938468 C24.3203498,4.0293224 25.7056071,5.43976973 25.6757435,7.1712879 L25.605748,11.2296788 C25.5757421,12.9694434 24.1400225,14.3618629 22.3991459,14.3397368 L14.2582088,14.2362677 C12.5172573,14.2141407 11.0985075,12.7932167 11.0892504,11.0451341 L11.0691908,7.25716319 Z" id="" stroke="#FFFFFF" stroke-width="2.25"/>
                                                    <path d="M34.8742274,7.21280051 C34.8551395,5.47320676 36.2471461,4.06354816 37.9955576,4.06424477 L45.0720958,4.06706424 C46.8150468,4.06775867 48.2143681,5.48616874 48.1977442,7.21676259 L48.1587807,11.272987 C48.1420777,13.0118229 46.7182389,14.3922814 44.9720298,14.3561926 L38.1068439,14.2143101 C36.363553,14.1782816 34.9349482,12.7466475 34.9157748,10.9992617 L34.8742274,7.21280051 Z" id="" stroke="#FFFFFF" stroke-width="2.25"/>
                                                    <path d="M25.6255761,8.55855856 L34.6240687,8.55855856" id="" stroke="#FFFFFF" stroke-width="1.8" fill-opacity="0" fill="#000000"/>
                                                    <polygon id="" fill="#FFFFFF" points="0.789258894 0.892410811 11.7534192 6.22432703 11.7534192 11.4453243 1.82956888 4.51300135"/>
                                                </g>
                                                <path d="M186.373409,113.898721 C186.815246,113.670858 186.676306,114.679092 186.868516,115.270857 C187.060697,115.862623 187.191567,115.955746 187.254824,116.341643 C185.422377,117.286612 182.233116,117.472963 180.097591,116.208107 C179.669898,115.954785 179.296175,115.747098 179.650595,115.398289 C180.004977,115.049455 180.446569,115.268028 180.923119,115.409205 C182.586251,115.901747 185.231556,114.487573 186.373409,113.898721 Z" id="mouth" fill="#8F2E1A"/>
                                                <g id="Plant" transform="translate(76.487294, 201.351351)">
                                                    <g id="Pot" transform="translate(17.997010, 80.630631)">
                                                        <path d="M27.4454432,34.6846811 C42.354644,34.6846811 54.4409657,37.3064523 54.4409657,40.5405405 C54.4409657,43.7746288 42.354644,46.3964 27.4454432,46.3964 C12.5362424,46.3964 0.449920762,43.7746288 0.449920762,40.5405405 C0.449920762,37.3064523 12.5362424,34.6846811 27.4454432,34.6846811 Z" id="shadow" fill="url(#linearGradient-73)" opacity="0.400000006" style="mix-blend-mode: multiply;"/>
                                                        <g id="pot" transform="translate(1.349776, 4.954955)">
                                                            <mask id="mask-76" fill="white">
                                                                <use xlink:href="#path-75"/>
                                                            </mask>
                                                            <use id="Ellipse-2" fill="url(#linearGradient-74)" xlink:href="#path-75"/>
                                                        </g>
                                                        <g id="inside" transform="translate(4.049327, 0.000000)">
                                                            <mask id="mask-79" fill="white">
                                                                <use xlink:href="#path-78"/>
                                                            </mask>
                                                            <use id="Ellipse-1" fill="url(#linearGradient-77)" xlink:href="#path-78"/>
                                                        </g>
                                                    </g>
                                                    <g id="leaves">
                                                        <g id="leaf">
                                                            <g transform="translate(21.146487, 0.000000)">
                                                                <g id="Shape-2">
                                                                    <mask id="mask-82" fill="white">
                                                                        <use xlink:href="#path-81"/>
                                                                    </mask>
                                                                    <use fill="url(#linearGradient-80)" xlink:href="#path-81"/>
                                                                    <path d="M27.8596885,77.3138954 C28.3534451,54.9395646 25.2106991,39.9173452 17.0544578,26.1216463 L27.8596885,77.3138954 Z" id="Shape-3" stroke="#489C71" stroke-width="1.35" fill-opacity="0" fill="#000000" opacity="0.5" style="mix-blend-mode: multiply;" mask="url(#mask-82)"/>
                                                                </g>
                                                            </g>
                                                            <g transform="translate(0.000000, 40.090090)">
                                                                <g id="Shape-2">
                                                                    <mask id="mask-85" fill="white">
                                                                        <use xlink:href="#path-84"/>
                                                                    </mask>
                                                                    <use fill="url(#linearGradient-83)" xlink:href="#path-84"/>
                                                                    <path d="" id="Shape-3" stroke="#489C71" stroke-width="1.35" fill-opacity="0" fill="#000000" opacity="0.5" style="mix-blend-mode: multiply;" mask="url(#mask-85)"/>
                                                                </g>
                                                            </g>
                                                            <g transform="translate(51.741405, 35.135135)">
                                                                <g id="Shape-2">
                                                                    <mask id="mask-88" fill="white">
                                                                        <use xlink:href="#path-87"/>
                                                                    </mask>
                                                                    <use fill="url(#linearGradient-86)" xlink:href="#path-87"/>
                                                                    <path d="M2.7404973,55.0148209 L22.7105532,17.9157744 C13.3755097,26.8075859 7.48430485,37.7938148 2.7404973,55.0148209 Z" id="Shape-3" stroke="#489C71" stroke-width="1.35" fill-opacity="0" fill="#000000" opacity="0.5" style="mix-blend-mode: multiply;" mask="url(#mask-88)"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                    </div>
                </div>
            </div>
        </header>

        <section class="standard mt-0 overflow-hidden" >
            <div class="container about-mob">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mobile-about ml-0" style="margin-top: -25px"></div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="header-title">
                            <h2 class="title black">
                                Our mission
                            </h2>
                            <div class="subtitle section-margin ">
                                Don’t worry about managing private keys or security. Make payments for free inside Telegram until you need send crypto to external wallets. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>

                        </div>
                        <div class="text-xs-center">
                            <div class="partners-title title black">
                                Our partners
                            </div>
                            <div class="our_partners">
                                <img src="/images/icons/about/stellar.svg" alt="">
                                <img  src="/images/icons/about/paysend.svg" alt="">
                                <img  src="/images/icons/about/bitgo.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container part-mob">
                <h3 class="partners-title-mob  text-center title black ">  Our partners</h3>
                <div class="mt-1 col-md-12  our_partners_mob ">
                    <img src="/images/icons/about/stellar.svg" alt="">
                    <img  src="/images/icons/about/paysend.svg" alt="">
                    <img  src="/images/icons/about/bitgo.svg" alt="">
                </div>
            </div>
        </section>
        <br>
        <section style="padding: 88px 0 109px 57px;" class="custom our-team">
            <div class="container ">
                <div class="row team-center">
                    <div class="col-md-12">
                        <div class="header-title">
                            <h2 class="title black">
                                Our team
                            </h2>
                            <h5 class="col-md-6 col-sm-12 subtitle p-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </h5>

                        </div>
                        <div class="text-xs-center">
                        </div>
                    </div>
                    <div class="d-flex team">
                       <div class="out_team">
                           <div class="d-flex about-team">
                               <div class="member-img m-auto">
                                   <img src="/images/common/member.png" alt="">
                               </div>
                               <div class="member-info m-auto">
                                   <h3 class="title team-title">Sergey Yusupov</h3>
                                   <h5 class="subtitle mt-3">Technology Director</h5>
                               </div>
                           </div>
                       </div>
                       <div class="out_team">
                           <div class="d-flex about-team">
                               <div class="member-img m-auto">
                                   <img src="/images/common/member.png" alt="">
                               </div>
                               <div class="member-info m-auto">
                                   <h3 class="title team-title">William Deng</h3>
                                   <h5 class="subtitle mt-3">Technology Director</h5>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>

            </div>
        </section>

        <section style="margin-top:  130px" class="press">
            <div class="container">
                <div class="row align-items-center" >
                    <div class="col-md-6">
                        <h2 class="title black">
                            Mentioned in the press
                        </h2>
                    </div>
                </div>
                <div class="row  justify-content-center press-container">
                    <div class="post-press col-sm-6 col-md-4 blogBox ">
                        <div class="post">
                            <div class="post-img">
                                <img  src="/images/common/fon.png" alt="">
                            </div>
                            <div class="post-info">
                                <div id="readmore" class="timestamp mb-1">12. 08. 2019</div>
                                <h4 class="title black">
                                    Lorem ipsum dolor sit amet
                                </h4>
                                <h5 class="subtitle description">
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="post-press col-sm-6 col-md-4 blogBox ">
                        <div class="post">
                            <div class="post-img">
                                <img src="/images/common/fon.png" alt="">
                            </div>
                            <div class="post-info">
                                <div id="readmore" class="timestamp mb-1">12. 08. 2019</div>
                                <h4 class="title black">
                                    Lorem ipsum dolor sit amet
                                </h4>
                                <h5 class="subtitle description">
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="post-press col-sm-6 col-md-4 blogBox moreBox" style="display: none">
                        <div class="post">
                            <div class="post-img">
                                <img  src="/images/common/fon.png" alt="">
                            </div>
                            <div class="post-info">
                                <div id="readmore" class="timestamp mb-1">12. 08. 2019</div>
                                <h4 class="title black">
                                    Lorem ipsum dolor sit amet
                                </h4>
                                <h5 class="subtitle description">
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="post-press col-sm-6 col-md-4 blogBox moreBox" style="display: none">
                        <div class="post">
                            <div class="post-img">
                                <img  src="/images/common/fon.png" alt="">
                            </div>
                            <div class="post-info">
                                <div id="readmore" class="timestamp mb-1">12. 08. 2019</div>
                                <h4 class="title black">
                                    Lorem ipsum dolor sit amet
                                </h4>
                                <h5 class="subtitle description">
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="post-press col-sm-6 col-md-4 blogBox moreBox" style="display: none">
                        <div class="post">
                            <div class="post-img">
                                <img  src="/images/common/fon.png" alt="">
                            </div>
                            <div class="post-info">
                                <div id="readmore" class="timestamp mb-1">12. 08. 2019</div>
                                <h4 class="title black">
                                    Lorem ipsum dolor sit amet
                                </h4>
                                <h5 class="subtitle description">
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <a id="loadMore" href=""><h3 class="title" style="font-weight: 900;font-family: inherit; color: black">See more <span class="seemore"></span></h3></a>
                </div>
            </div>
        </section>

        <section class="contact rounded-0" >

            <div class="container">
                <div class="row justify-content-center">
                    <h2  class="title text-center">Are you interested partnership?</h2>
                </div>
                <div class="row justify-content-center" style="margin-top: 60px ">
                    <button class="btn btn-papayabot">Contact us</button>
                </div>
            </div>
        </section>




        <style>
            .morecontent span {
                display: none;

            }
            .morelink {
                display: block;

            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                let showChar = 100;
                let ellipsestext = "...";
                let moretext = "Show more";
                let lesstext = "Show less";


                $('.description').each(function() {
                    let content = $(this).html();

                    if(content.length > showChar) {

                        let c = content.substr(0, showChar);
                        let h = content.substr(showChar, content.length - showChar);

                        let html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" style="cursor: pointer; color: #5438dc; font-weight: bold;" class="subtitle description  morelink">' + moretext + '</a></span>';

                        $(this).html(html);
                    }

                });

                $(".morelink").click(function(){
                    if($(this).hasClass("less")) {
                        $(this).removeClass("less");
                        $(this).html(moretext);
                    } else {
                        $(this).addClass("less");
                        $(this).html(lesstext);
                    }
                    $(this).parent().prev().toggle();
                    $(this).prev().toggle();
                    return false;
                });
            });
        </script>

        <script>
         let post = 1;
         if($(window).width() < 768) {
            post = 0;
             console.log('31231');
           }
            $( document ).ready(function () {
                $(".moreBox").slice(0, post).show();
                if ($(".blogBox:hidden").length != 0) {
                    $("#loadMore").show();
                }
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".moreBox:hidden").slice(0, 6).slideDown();
                    if ($(".moreBox:hidden").length == 0) {
                        $("#loadMore").fadeOut('slow');
                    }
                });
            });
        </script>
@endsection