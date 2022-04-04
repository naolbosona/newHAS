<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
     
                <div class="section-heading">
                    <h6>Our RENTLAND</h6>
                    <h2>Our selection rentland with quality taste</h2>
                </div>
           
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                    @foreach ($dataland as $dataland )
                        
                    <div class="item">
                    <div  style=" background-image:url('/landimage/{{$dataland->image}}');"class='card'>
                        <div class="price"><h6>{{$dataland->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$dataland->title}}</h1>
                          <p class='description'>{{$dataland->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make comment<i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->