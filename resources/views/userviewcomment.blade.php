
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
                  <a class="nav-link" href={{url('/renthouse')}}>
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Rent Houses</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href={{url('/housesell')}}>
                    <span class="menu-icon">
                      <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Sell House</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="{{url('/viewcomment')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">comment</span>
                  </a>
                </li>
                
              </div> 

   <div style="position:relative;  top:70px;  right:-150px;">
       <table bgcolor="grey" border="1px">

        <tr>
            <th style="padding:30px">name</th>
            <th style="padding:30px">email</th>
            <th style="padding:30px">phone</th>
            <th style="padding:30px">message</th>
        </tr>
        @foreach ($data as $data)

<tr align="center">
        <td style="padding:30px">{{$data->name}}</td>
        <td style="padding:30px">{{$data->email}}</td>
        <td style="padding:30px">{{$data->phone}}</td>
        <td style="padding:30px">{{$data->message}}</td>
</tr>
@endforeach
</table>
   </div>
      </div>
          
   @include("admin.adminscript")
  </body>
</html>