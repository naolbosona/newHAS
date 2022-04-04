<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HAS admin</title>
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
                  <a class="nav-link" href={{url('/userrenthouse')}}>
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Rent Houses</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href={{url('/userhousesell')}}>
                    <span class="menu-icon">
                      <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Sell House</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="{{url('/userviewcomment')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">comment</span>
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
      <th style="padding: 10px">NO-OF_ROOMS</th>
      <th style="padding: 10px">NO-OF-BEDROOMS</th>
      <th style="padding: 10px">NO-OF-KITCHEN</th>
      <th style="padding: 10px">PHONE-NUMBER</th>
      <th style="padding: 10px">COMMISSION-FEE</th>
      <th style="padding: 10px">SIZE-OF-HOUSE</th>
      <th style="padding: 40px">IMAGE</th>
      <th style="padding: 10px">ACTION 1</th>
      <th style="padding: 10px">ACTION 2</th>
   </tr>
   @foreach ($data as $data )
      
   
   <tr align="center">
   <td>{{$data->title}}</td>
   <td>{{$data->price}}</td>
   <td>{{$data->location}}</td>
   <td>{{$data->state}}</td>
   <td>{{$data->housetype}}</td>
   <td>{{$data->no_of_rooms}}</td>
   <td>{{$data->no_of_bedroom}}</td>
   <td>{{$data->no_of_kitchen}}</td>
   <td>{{$data->phone_number}}</td>
   <td>{{$data->commission_fee}}</td>
   <td>{{$data->size_of_house}}</td>
   <td><img style="height: 130px; width:120px" src="/renthouseimage/{{$data->image}}"></td>
   <td><a href="{{url('/deleterenthouse',$data->id)}}">delete</a></td>
   <td><a href="{{url('/updaterenthouse',$data->id)}}">update</a></td>
</tr>
   @endforeach
</table>


  </div>



   </div>
    </div>
          
   @include("admin.adminscript")
  </body>
</html>