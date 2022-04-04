<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HAS agent</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="Admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
        <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        
              </div>
        
              
              <ul class="nav">
        
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                  </li>
                
                 
                  <li class="nav-item menu-items">
                    <a class="nav-link" href={{url('/agentrenthouse')}}>
                      <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                      </span>
                      <span class="menu-title">Rent Houses</span>
                    </a>
                  </li>
                  <li class="nav-item menu-items">
                    <a class="nav-link" href={{url('/agentsellhouse')}}>
                      <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                      </span>
                      <span class="menu-title">Sell House</span>
                    </a>
                  </li>
                      <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/agentlandlorddata')}}">
                      <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                      </span>
                      <span class="menu-title">land lord</span>
                    </a>
                  </li>
                  
                  <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/agentadminchat')}}">
                      <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                      </span>
                      <span class="menu-title">chat with admin</span>
                    </a>
                  </li>
                         
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/agentcustomerchat')}}">
                  <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                  </span>
                  <span class="menu-title">chat with customer</span>
                </a>
              </li>
            
      
                
                
              </div> 

   <div style="position: relative;  top:60px right:-60px">
       <form action="{{url('/uploadrenthouse')}}" method="post" enctype="multipart/form-data">
           @csrf
        <div>

           <label>title</label>
           <input style="color: black" type="text" name="title" required>
        </div>
        <div>
           <label>price</label>
           <input style="color: black" type="text" name="price" required>
        </div>
        <div>
           <label>location</label>
           <input style="color: black"  type="text" name="location" required>
        </div>
        <div>
            <label>state</label>
           <input style="color: black"  type="text" name="state" required>
        </div>
        <div>
           <label>housetype</label>
           <input style="color: black" type="text" name="housetype" required>
        </div>
        <div>
           <label>no_of_rooms</label>
           <input style="color: black" type="text" name="no_of_rooms" required>
        </div>
        <div>
           <label>no_of_bedroom</label>
           <input style="color: black" type="text" name="no_of_bedroom" required>
        </div>
        <div>
           <label>no_of_kitchen</label>
           <input style="color: black" type="text" name="no_of_kitchen" required>
        </div>
        <div>
           <label>phone-number</label>
           <input style="color: black" type="text" name="phone_number" required>
        </div>
        <div>
           <label>commission_fee</label>
           <input style="color: black" type="text" name="commission_fee" required>
        </div>
        <div>
           <label>image</label>
           <input style="color: black" type="file" name="image" required>
        </div>
        <div>
           <label>description</label>
           <input style="color: black" type="text" name="description" required>
        </div>
        <div>
           <label>size_of_house</label>
           <input style="color: black" type="text" name="size_of_house" required>
           </div>
           <div>
               <input style="color: white" type="submit" value="save">
           </div>
         
       </form>
  <div>
    <table>
        <tr>
           <th style="padding: 10px">TITLE</th>
           <th style="padding: 10px">PRICE</th>
           <th style="padding: 10px">LOCATION</th>
           <th style="padding: 10px">STATE</th>
           <th style="padding: 10px">HOUSETYPE</th>
           <th style="padding: 10px">PHONE-NUMBER</th>
           <th style="padding: 10px">COMMISSION-FEE</th>
           <th style="padding: 10px">SIZE-OF-LAND</th>
           <th style="padding: 40px">IMAGE</th>
           <th style="padding: 10px">ACTION 1</th>
           <th style="padding: 10px">ACTION 2</th>
        </tr>
        @foreach ($dataland as $dataland )
           
        
        <tr align="center">
        <td>{{$dataland->title}}</td>
        <td>{{$dataland->price}}</td>
        <td>{{$dataland->location}}</td>
        <td>{{$dataland->state}}</td>
        <td>{{$dataland->housetype}}</td>
        <td>{{$dataland->phone_number}}</td>
        <td>{{$dataland->commission_fee}}</td>
        <td>{{$dataland->size_of_land}}</td>
        <td><img style="height: 130px; width:120px" src="/landimage/{{$dataland->image}}"></td>
        <td><a href="">delete</a></td>
        <td><a href="">update</a></td>
     </tr>
        @endforeach
     </table>
     

  </div>



   </div>
    </div>
          
   <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>