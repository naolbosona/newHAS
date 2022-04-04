<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>HOUSE AGETS SYSTEM</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/house agent system.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
        .search_container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        .search_container form {
            display: flex;
            width: 100%;
            /* align-items: center; */
            justify-content: center;
        }

        .search_container button {
            border-radius: none !important;
        }
        .search_container input {
            padding: 10px 20px;
            border: none !important;
            background: #fff;
            box-shadow: none;
            offset: none;
            outline: none;
            /* flex: 1; */
            width: 50%;
        }

    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->


                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ '/home' }}">HOME</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>


                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{ '/sellhousehome' }}">Sellhouses</a></li>
                            <li class="scroll-to-section"><a href="{{ '/renthousehome' }}">Renthouses</a></li>
                            <li class="scroll-to-section"><a href="{{ '/rentlandhome' }}">Landlords</a></li>
                            <li class="scroll-to-section"><a href="{{ '/search' }}">SEARCH</a></li>

                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section"><a href="{{ url('/tobeouragent') }}">To be our agents</a></li>
                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

                                        @auth
                                            <x-app-layout>

                                            </x-app-layout>
                                        @else
                                <li> <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth
                </div>
                @endif

                </li>

                </ul>

                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>


    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>HAS website</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 position-relative">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="/housesellimage/1648140165.jpg" alt="">

                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="/housesellimage/1648140266.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="/housesellimage/1648141911.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                    <div class="search_container">
                        <form action="/search">
                            <input type="text" placeholder="Search here...." name="q"/>
                            <button type="submit" class="btn btn-primary">Go</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ***** Main Banner Area End ***** -->


            <!-- ***** Header Area End ***** -->

            @include('housesell')

            <!-- ***** Chefs Area Starts ***** -->
            @include('houserent')
            <!-- ***** Chefs Area Ends ***** -->
            @include('landlordspost')
            <!-- ***** Chefs Area Ends ***** -->
            @include('about')


            @include('comment')





            <!-- ***** Menu Area Starts ***** -->
            <section class="section" id="offers">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 text-center">
                            <div class="section-heading">
                                <h6>house agents system</h6>


                                <h2>this week best houses</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="tabs">

                                <div class="col-lg-12">
                                    <section class='tabs-content'>
                                        <article id='tabs-1'>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">



                                                    </div>
                                                </div>

                                            </div>
                                        </article>
                                        <article id='tabs-2'>
                                            <div class="row">


                                        </article>
                                        <article id='tabs-3'>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="left-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="/housesellimage/1648140266.jpg" alt="">
                                                                    <h4>house for rent</h4>
                                                                    <p>best house for this week.</p>
                                                                    <div class="price">
                                                                        <h6>$100000</h6>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="left-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="/housesellimage/1648140362.jpg" alt="">
                                                                    <h4>house for rent</h4>
                                                                    <p>with low price but best house</p>
                                                                    <div class="price">
                                                                        <h6>$1400</h6>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="left-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="/housesellimage/1648140266.jpg" alt="">
                                                                    <h4>house for rent</h4>
                                                                    <p>best house for this week.</p>
                                                                    <div class="price">
                                                                        <h6>$100000</h6>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="left-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="/housesellimage/1648140362.jpg" alt="">
                                                                    <h4>house for rent</h4>
                                                                    <p>with low price but best house</p>
                                                                    <div class="price">
                                                                        <h6>$1400</h6>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                        </article>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Chefs Area Ends ***** -->



            <!-- ***** Footer Start ***** -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-12">
                            <div class="right-text-content">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        < <div class="col-lg-4 col-xs-12">
                            <div class="left-text-content">
                                <p>© Copyright house agent system.

                                </p>
                            </div>
                    </div>
                </div>
        </div>
        </footer>

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/isotope.js"></script>

        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>
        <script>
            $(function() {
                var selectedClass = "";
                $("p").click(function() {
                    selectedClass = $(this).attr("data-rel");
                    $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("." + selectedClass).fadeOut();
                    setTimeout(function() {
                        $("." + selectedClass).fadeIn();
                        $("#portfolio").fadeTo(50, 1);
                    }, 500);

                });
            });
        </script>
</body>

</html>
