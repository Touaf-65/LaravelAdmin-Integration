


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Webkit | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/auth/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('assets/auth/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/auth/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('assets/auth/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/auth/vendor/remixicon/fonts/remixicon.css')}}">
      
      <link rel="stylesheet" href="{{asset('assets/auth/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css')}}">
      <link rel="stylesheet" href="{{asset('assets/auth/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css')}}">
      <link rel="stylesheet" href="{{asset('assets/auth/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css')}}">
    </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-6 bg-primary content-left">
                              <div class="p-3">
                                 <img src="../assets/images/login/mail.png" class="img-fluid" width="80" alt="">
                                 <h2 class="mt-3 mb-0 text-white">Success !</h2>
                                 <p class="cnf-mail mb-1">A email has been send to youremail@domain.com. Please check for an
                                    email from company and click
                                    on the included link to reset your password.</p>
                                 <div class="d-inline-block w-100">
                                    <a href="{{route('Sign In')}}" class="btn btn-white mt-3">Back to Login</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 content-right">
                              <img src="{{asset('assets/auth/images/login/01.png')}}" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/auth/js/backend-bundle.min.js')}}"></script>
     
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('assets/auth/js/table-treeview.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('assets/auth/js/customizer.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('assets/auth/js/chart-custom.js')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('assets/auth/js/slider.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('assets/auth/js/app.js')}}"></script>
    
    <script src="{{asset('assets/auth/vendor/moment.min.js')}}"></script>
  </body>
</html>