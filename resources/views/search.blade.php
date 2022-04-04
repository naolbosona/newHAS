<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

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
                            <li class="scroll-to-section"><a href="{{('/home')}}">HOME</a></li>
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
                            <li class="scroll-to-section"><a href="{{('/sellhousehome')}}">Sellhouses</a></li>
                            <li class="scroll-to-section"><a href="{{('/renthousehome')}}">Renthouses</a></li>
                            <li class="scroll-to-section"><a href="{{('/rentlandhome')}}">Landlords</a></li>
                            <li class="scroll-to-section"><a href="{{url('/tobeouragent')}}">To be our agents</a></li> 
                      
                            
                             
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        <li>

                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                               <li> @auth
                                <x-app-layout>
   
                                </x-app-layout>
                                
                                @else
                                   <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
            
                                    @if (Route::has('register'))
                                       <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
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
    <!-- ***** Header Area End ***** -->

   <!-- ***** Menu Area Starts ***** -->
<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-lg-3">
                <div   class="section-heading">

                    <div style="position: relative;  right:-60px ">     
                        <h1>FOR</h1>
    
    <form action="/action_page.php">
      <input type="checkbox" id="vehicle1" name="" value="">
      <label for="vehicle1"> sell</label><br>
      <input type="checkbox" id="vehicle2" name="" value="">
      <label for="vehicle2"> rent</label><br>
      <input type="checkbox" id="vehicle3" name="" value="">
      <label for="vehicle3">land</label><br>
       
      
                        </div>


                    <div style="position: relative;  right:-60px ">     
                    <h1>TITLE</h1>

<form action="/action_page.php">
  <input type="checkbox" id="vehicle1" name="" value="">
  <label for="vehicle1"> Apartama</label><br>
  <input type="checkbox" id="vehicle2" name="" value="">
  <label for="vehicle2"> Villa</label><br>
  <input type="checkbox" id="vehicle3" name="" value="">
  <label for="vehicle3"> Condominium</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="">
  <label for="vehicle3"> Hotel</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3">Any</label><br>
</form>
                    </div>

<div style="position: relative;  right:-60px ">
<h1>price</h1>

<form action="/action_page.php">
  <input type="checkbox" id="vehicle1" name="" value="">
  <label for="vehicle1"> <=10000 Birr</label><br>
  <input type="checkbox" id="vehicle2" name="" value="">
  <label for="vehicle2">10000-100,000 Birr</label><br>
  <input type="checkbox" id="vehicle3" name="" value="">
  <label for="vehicle3"> 100,000-1Million birr</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="">
  <label for="vehicle3"> 1Million-10Million Birr</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3">>10M Birr</label><br>

</form></div>
<div style="position: relative;  right:-60px ">
    <h1>House type</h1>
    
    <form action="/action_page.php">
      <input type="checkbox" id="vehicle1" name="" value="">
      <label for="vehicle1">Ground</label><br>
      <input type="checkbox" id="vehicle2" name="" value="">
      <label for="vehicle2">G+1</label><br>
      <input type="checkbox" id="vehicle3" name="" value="">
      <label for="vehicle3">G+2</label><br>
      <input type="checkbox" id="vehicle3" name="vehicle3" value="">
      <label for="vehicle3">G+3</label><br>
      <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
      <label for="vehicle3">G+4</label><br>
      <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
      <label for="vehicle3">Any</label><br>
    </form></div>
    <div style="position: relative;  right:-60px ">
        <h1>No of rooms</h1>
        
        <form action="/action_page.php">
          <input type="checkbox" id="vehicle1" name="" value="">
          <label for="vehicle1">1</label><br>
          <input type="checkbox" id="vehicle2" name="" value="">
          <label for="vehicle2">2</label><br>
          <input type="checkbox" id="vehicle3" name="" value="">
          <label for="vehicle3">3</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="">
          <label for="vehicle3">4</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
          <label for="vehicle3">5</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
          <label for="vehicle3">Any</label><br>
        </form></div>
        <div style="position: relative;  right:-60px ">
            <h1>No of Bedroom</h1>
            
            <form action="/action_page.php">
              <input type="checkbox" id="vehicle1" name="" value="">
              <label for="vehicle1">1</label><br>
              <input type="checkbox" id="vehicle2" name="" value="">
              <label for="vehicle2">2</label><br>
              <input type="checkbox" id="vehicle3" name="" value="">
              <label for="vehicle3">3</label><br>
              <input type="checkbox" id="vehicle3" name="vehicle3" value="">
              <label for="vehicle3">4</label><br>
              <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
              <label for="vehicle3">5</label><br>
              <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
              <label for="vehicle3">ANY</label><br>
            </form></div>

            <div style="position: relative;  right:-60px ">
                <h1>No of Kitchen</h1>
                
                <form action="/action_page.php">
                  <input type="checkbox" id="vehicle1" name="" value="">
                  <label for="vehicle1">1</label><br>
                  <input type="checkbox" id="vehicle2" name="" value="">
                  <label for="vehicle2">2</label><br>
                  <input type="checkbox" id="vehicle3" name="" value="">
                  <label for="vehicle3">3</label><br>
                  <input type="checkbox" id="vehicle3" name="vehicle3" value="">
                  <label for="vehicle3">4</label><br>
                  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                  <label for="vehicle3">5</label><br>
                  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                  <label for="vehicle3">Any</label><br>
                </form></div>


                <div style="position: relative;  right:-60px ">
                    <h1>Size of house</h1>
                    
                    <form action="/action_page.php">
                      <input type="checkbox" id="vehicle1" name="" value="">
                      <label for="vehicle1">200 m2</label><br>
                      <input type="checkbox" id="vehicle2" name="" value="">
                      <label for="vehicle2">400 m2</label><br>
                      <input type="checkbox" id="vehicle3" name="" value="">
                      <label for="vehicle3">600 m2</label><br>
                      <input type="checkbox" id="vehicle3" name="vehicle3" value="">
                      <label for="vehicle3">800 m2</label><br>
                      <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                      <label for="vehicle3">1000 m2</label><br>
                      <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                      <label for="vehicle3">Any</label><br>
                    </form></div>
        
                </div>
            </div>
        
    {{-- </div> --}}
    {{-- <div  class="menu-item-carosusel"> --}}
        <div style="position: relative;  top:60px right:-60px" class="col-lg-9 row">
            {{-- <div class="owal-menau-item owsl-carousel"> --}}

                {{-- <div class="item"> --}}
                    @foreach ($datarent as $datarent)
                        <div style=" background-image:url('/renthouseimage/{{ $datarent->image }}');" class='card col-3'>
                            <div class="price">
                                <h6>{{ $datarent->price }}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $datarent->title }}</h1>
                                <p class='description'>{{ $datarent->description }}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a
                                            href="{{ url('/renthousedetail', $datarent->id) }}">show detail<i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($data as $data)
                            <div style=" background-image:url('/housesellimage/{{ $data->image }}');" class='card col-3' >
                                <div class="price">
                                    <h6>{{ $data->price }}</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $data->title }}</h1>
                                    <p class='description'>{{ $data->description }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a
                                                href="{{ url('/sellhousedetail', $data->id) }}">show detail<i
                                                    class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach


                                            @foreach ($dataland as $dataland )
                        
                    
                    <div  style=" background-image:url('/landimage/{{$dataland->image}}');"class='card col-3'>
                        <div class="price"><h6>{{$dataland->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$dataland->title}}</h1>
                          <p class='description'>{{$dataland->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make comment<i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                
                @endforeach

                {{-- </div> --}}


            {{-- </div> --}}
        </div>
    </div>
    {{-- </div> --}}
</section>







<!-- ***** Menu Area Ends ***** -->
<!-- ***** Menu Area Ends ***** -->

   

   @include("comment")

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
                <
                <div class="col-lg-4 col-xs-12">
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
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>