


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
                                 <h2 class="mb-2 text-white">Sign Up</h2>
                                 <p>Create your Webkit account.</p>
                                 <form>
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="text" placeholder=" ">
                                             <label>Full Name</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="text" placeholder=" ">
                                             <label>Last Name</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="email" placeholder=" ">
                                             <label>Email</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="text" placeholder=" ">
                                             <label>Phone No.</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" ">
                                             <label>Password</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" ">
                                             <label>Confirm Password</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label text-white" for="customCheck1">I agree with the terms of use</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-white">Sign Up</button>
                                    <p class="mt-3">
                                       Already have an Account <a href="{{route('Sign In')}}" class="text-white text-underline">Sign In</a>
                                    </p>
                                 </form>
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