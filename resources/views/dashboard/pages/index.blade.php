

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
      <link rel="stylesheet" href="{{asset('assets/auth/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css')}}">  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center">
              <a href="../backend/index.html" class="header-logo">
                  <img src="../assets/images/logo.svg" alt="logo">
                  <h3 class="logo-title light-logo">Webkit</h3>
              </a>
              <div class="iq-menu-bt-sidebar ml-0">
                  <i class="las la-bars wrapper-menu"></i>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="active">
                          <a href="{{route('Dashboard')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                              <span class="ml-4">Dashboards</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{route('Projects')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                  <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                  <rect x="6" y="14" width="12" height="8"></rect>
                              </svg>
                              <span class="ml-4">Projects</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{route('Tasks')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                              </svg>
                              <span class="ml-4">Task</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{route('Employees')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                              </svg>
                              <span class="ml-4">Employees</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{route('Desk')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                              </svg>
                              <span class="ml-4">Desk</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{route('Calendar')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>
                              </svg>
                              <span class="ml-4">Calender</span>
                          </a>
                      </li>
                      <li class=" ">
                          <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                              </svg>
                              <span class="ml-4">other page</span>                        
                              <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                              <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <li class=" ">
                                      <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                          </svg>
                                          <span class="ml-4">User Details</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="{{route('User Profile')}}">
                                                      <i class="las la-minus"></i><span>User Profile</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Add User')}}">
                                                      <i class="las la-minus"></i><span>User Add</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('User List')}}">
                                                      <i class="las la-minus"></i><span>User List</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                         <svg class="svg-icon" id="p-dash11" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                          </svg>
                                          <span class="ml-4">UI Elements</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="{{route('Avatars')}}">
                                                      <i class="las la-minus"></i><span>Avatars</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Alerts')}}">
                                                      <i class="las la-minus"></i><span>Alerts</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Badges')}}">
                                                      <i class="las la-minus"></i><span>Badges</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Breadcrumb')}}">
                                                      <i class="las la-minus"></i><span>Breadcrumb</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Buttons')}}">
                                                      <i class="las la-minus"></i><span>Buttons</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Buttons Group')}}">
                                                      <i class="las la-minus"></i><span>Buttons Group</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Box Shadow')}}">
                                                      <i class="las la-minus"></i><span>Box Shadow</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Colors')}}">
                                                      <i class="las la-minus"></i><span>Colors</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Cards')}}">
                                                      <i class="las la-minus"></i><span>Cards</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Carousel')}}">
                                                      <i class="las la-minus"></i><span>Carousel</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Grid')}}">
                                                      <i class="las la-minus"></i><span>Grid</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Helper Classes')}}">
                                                      <i class="las la-minus"></i><span>Helper classes</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Images')}}">
                                                      <i class="las la-minus"></i><span>Images</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('List Group')}}">
                                                      <i class="las la-minus"></i><span>List Group</span>
                                                  </a>
                                              </li>
                                              <li  class="">
                                                  <a href="{{route('Media')}}">
                                                      <i class="las la-minus"></i><span>Media</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Modal')}}">
                                                      <i class="las la-minus"></i><span>Modal</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Notifications')}}">
                                                      <i class="las la-minus"></i><span>Notifications</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Pagination')}}">
                                                      <i class="las la-minus"></i><span>Pagination</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Popovers')}}">
                                                      <i class="las la-minus"></i><span>Popovers</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Progressbars')}}">
                                                      <i class="las la-minus"></i><span>Progressbars</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Typography')}}">
                                                      <i class="las la-minus"></i><span>Typography</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Tabs')}}">
                                                      <i class="las la-minus"></i><span>Tabs</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Tooltips')}}">
                                                      <i class="las la-minus"></i><span>Tooltips</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Video')}}">
                                                      <i class="las la-minus"></i><span>Video</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash12" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                          </svg>
                                          <span class="ml-4">Authentication</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="{{route('Sign In')}}">
                                                      <i class="las la-minus"></i><span>Login</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Sign Up')}}">
                                                      <i class="las la-minus"></i><span>Register</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Recover Password')}}">
                                                      <i class="las la-minus"></i><span>Recover Password</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Confirm Mail')}}">
                                                      <i class="las la-minus"></i><span>Confirm Mail</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Lock Screen')}}">
                                                      <i class="las la-minus"></i><span>Lock Screen</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class="">
                                      <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash13" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                          </svg>
                                          <span class="ml-4">Forms</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="form" class="iq-submenu collapse" data-parent="#otherpage">
                                          <li class="">
                                              <a href="{{route('Layout')}}">
                                                  <i class="las la-minus"></i><span class="">Form Elements</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Checkbox')}}" class="svg-icon">
                                                 <i class="las la-minus"></i><span class="">Form Input</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Datepicker')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Validation</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('File Uploader')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Switch</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Input Group')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Checkbox</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Radio')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Radio</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Textarea')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Textarea</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Select')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Select</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Switch')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Switch</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Wizard')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Wizard</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Wizard Validate')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Wizard Validate</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="{{route('Wizard Vertical')}}" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Wizard Vertical</span>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash14" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                          </svg>
                                          <span class="ml-4">Table</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="{{route('Table Basic')}}">
                                                      <i class="las la-minus"></i><span>Basic Tables</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Table Data')}}">
                                                      <i class="las la-minus"></i><span>Data Table</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Table Tree')}}">
                                                      <i class="las la-minus"></i><span>Table Tree</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Table Editable')}}">
                                                      <i class="las la-minus"></i><span>Editable Table</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash16" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                          </svg>
                                          <span class="ml-4">Pricing</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="{{route('Pricing 1')}}">
                                                      <i class="las la-minus"></i><span>Pricing 1</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Pricing 2')}}">
                                                      <i class="las la-minus"></i><span>Pricing 2</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Pricing 3')}}">
                                                      <i class="las la-minus"></i><span>Pricing 3</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="{{route('Pricing 4')}}">
                                                      <i class="las la-minus"></i><span>Pricing 4</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class="">
                                      <a href="{{route('Timeline')}}" class="svg-icon">
                                          <svg class="svg-icon" id="p-dash016" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                                          </svg>
                                          <span class="ml-4">Timeline</span>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="{{route('Invoice')}}" class="svg-icon">
                                          <svg class="svg-icon" id="p-dash07" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                          </svg>
                                          <span class="ml-4">Invoice</span>
                                      </a>
                                  </li>
                                  <li class=" ">
                                      <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash17" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>
                                          </svg>
                                          <span class="ml-4">Error</span>
                                          <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                          <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                      </a>
                                      <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="../backend/pages-error.html">
                                                      <i class="las la-minus"></i><span>Error 404</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="../backend/pages-error-500.html">
                                                      <i class="las la-minus"></i><span>Error 500</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class="">
                                          <a href="../backend/pages-blank-page.html">
                                              <svg class="svg-icon" id="p-dash18" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>
                                              </svg>
                                              <span class="ml-4">Blank Page</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="../backend/pages-maintenance.html">
                                              <svg class="svg-icon" id="p-dash19" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                  <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                              </svg>
                                              <span class="ml-4">Maintenance</span>
                                          </a>
                                  </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
              <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                  <div class="card border-none mb-0 shadow-none">
                      <div class="card-body p-0">
                          <div class="sidebarbottom-content">
                              <h5 class="mb-3">Task Performed</h5>
                              <div id="circle-progress-6" class="sidebar-circle circle-progress circle-progress-primary mb-4" data-min-value="0" data-max-value="100" data-value="55" data-type="percent"></div>
                              <div class="custom-control custom-radio mb-1">
                                  <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input" checked="">
                                  <label class="custom-control-label" for="customRadio6">Performed task</label>
                              </div>
                              <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio7">Incomplete Task</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="pt-5 pb-2"></div>
          </div>
      </div>      
      
      <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <!-- <a href="../backend/index.html" class="header-logo">
                          <h4 class="logo-title text-uppercase">Webkit</h4>
      
                      </a> -->
                  </div>
                  <div class="navbar-breadcrumb">
                      <h5>Dashboard</h5>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-label="Toggle navigation">
                          <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li>
                                  <div class="iq-search-bar device-search">
                                      <form action="#" class="searchbox">
                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                          <input type="text" class="text search-input" placeholder="Search here...">
                                      </form>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                      <i class="ri-search-line"></i>
                                  </a>
                                  <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                              <input type="text" class="text search-input font-size-12"
                                                  placeholder="type here to search...">
                                              <a href="#" class="search-link"><i class="las la-search"></i></a>
                                          </div>
                                      </form>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon nav-item-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="feather feather-mail">
                                          <path
                                              d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                          </path>
                                          <polyline points="22,6 12,13 2,6"></polyline>
                                      </svg>
                                      <span class="bg-primary"></span>
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-0 ">
                                              <div class="cust-title p-3">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                      <h5 class="mb-0">All Messages</h5>
                                                      <a class="badge badge-primary badge-card" href="#">3</a>
                                                  </div>
                                              </div>
                                              <div class="px-3 pt-0 pb-0 sub-card">
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3 border-bottom">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="../assets/images/user/01.jpg" alt="01">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
                                                                  <h6 class="mb-0">Emma Watson</h6>
                                                                  <small class="text-dark"><b>12 : 47 pm</b></small>
                                                              </div>
                                                              <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3 border-bottom">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="../assets/images/user/02.jpg" alt="02">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
                                                                  <h6 class="mb-0">Ashlynn Franci</h6>
                                                                  <small class="text-dark"><b>11 : 30 pm</b></small>
                                                              </div>
                                                              <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="../assets/images/user/03.jpg" alt="03">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
                                                                  <h6 class="mb-0">Kianna Carder</h6>
                                                                  <small class="text-dark"><b>11 : 21 pm</b></small>
                                                              </div>
                                                              <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                              <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                  role="button">
                                                  View All
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon nav-item-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="feather feather-bell">
                                          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                          <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                      </svg>
                                      <span class="bg-primary "></span>
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-0 ">
                                              <div class="cust-title p-3">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                      <h5 class="mb-0">Notifications</h5>
                                                      <a class="badge badge-primary badge-card" href="#">3</a>
                                                  </div>
                                              </div>
                                              <div class="px-3 pt-0 pb-0 sub-card">
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3 border-bottom">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="../assets/images/user/01.jpg" alt="01">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
                                                                  <h6 class="mb-0">Emma Watson</h6>
                                                                  <small class="text-dark"><b>12 : 47 pm</b></small>
                                                              </div>
                                                              <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3 border-bottom">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="../assets/images/user/02.jpg" alt="02">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
                                                                  <h6 class="mb-0">Ashlynn Franci</h6>
                                                                  <small class="text-dark"><b>11 : 30 pm</b></small>
                                                              </div>
                                                              <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="../assets/images/user/03.jpg" alt="03">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
                                                                  <h6 class="mb-0">Kianna Carder</h6>
                                                                  <small class="text-dark"><b>11 : 21 pm</b></small>
                                                              </div>
                                                              <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                              <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                  role="button">
                                                  View All
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon dropdown caption-content">
                                  <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle" alt="user">
                                      <div class="caption ml-3">
                                          <h6 class="mb-0 line-height">Savannah Nguyen<i class="las la-angle-down ml-2"></i></h6>
                                      </div>
                                  </a>                            
                                  <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                          <a href="../app/user-profile.html">My Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                          </svg>
                                          <a href="../app/user-profile-edit.html">Edit Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                          <a href="../app/user-account-setting.html">Account Settings</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                          </svg>
                                          <a href="../app/user-privacy-setting.html">Privacy Settings</a>
                                      </li>
                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                          <a href="../backend/auth-sign-in.html">Logout</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>      
      
      <div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Investment</h5>
                            <span class="badge badge-primary">Monthly</span>
                        </div>
                        <h3>$<span class="counter">35000</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-primary">65%</span>
                        </div>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Sales</h5>
                            <span class="badge badge-warning">Anual</span>
                        </div>
                        <h3>$<span class="counter">25100</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-warning">35%</span>
                        </div>
                        <div class="iq-progress-bar bg-warning-light mt-2">
                            <span class="bg-warning iq-progress progress-1" data-percent="35"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Cost</h5>
                            <span class="badge badge-success">Today</span>
                        </div>
                        <h3>$<span class="counter">33000</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-success">85%</span>
                        </div>
                        <div class="iq-progress-bar bg-success-light mt-2">
                            <span class="bg-success iq-progress progress-1" data-percent="85"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Profit</h5>
                            <span class="badge badge-info">Weekly</span>
                        </div>
                        <h3>$<span class="counter">2500</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-info">55%</span>
                        </div>
                        <div class="iq-progress-bar bg-info-light mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="55"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body p-0">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Overview Progress</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 mb-0">
                                    <li class="mb-1">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">UX / UI Design</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="iq-progress-bar bg-secondary-light">
                                                        <span class="bg-secondary iq-progress progress-1" data-percent="65"></span>
                                                    </div>
                                                    <span class="ml-3">65%</span>
                                                </div>                                                                
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/07.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex align-items-center justify-content-between row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Development</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="iq-progress-bar bg-primary-light">
                                                        <span class="bg-primary iq-progress progress-1" data-percent="59"></span>
                                                    </div>
                                                    <span class="ml-3">59%</span>
                                                </div>                                                                
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/08.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/09.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/04.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Testing</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="iq-progress-bar bg-warning-light">
                                                        <span class="bg-warning iq-progress progress-1" data-percent="78"></span>
                                                    </div>
                                                    <span class="ml-3">78%</span>
                                                </div>                                                                
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/01.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/02.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/03.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-21" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Cloud Service Theme</h5>
                                                            <p class="mb-0">Exclusively for cloud-based/ Startup theme.</p>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a class="btn btn-white text-primary link-shadow mt-2">High</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-22" class="circle-progress-01 circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Automotive WordPress</h5>
                                                            <p class="mb-0">Dealership-based business WordPress theme.</p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/07.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/02.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/04.jpg" alt="">
                                                    </a>                                                
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/08.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a class="btn btn-white text-secondary link-shadow mt-2">Medium</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-23" class="circle-progress-01 circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Online Education</h5>
                                                            <p class="mb-0">Remote students and teachers dashboard.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/01.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/02.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/03.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a class="btn btn-white text-warning link-shadow mt-2">Low</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-24" class="circle-progress-01 circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Blog/Magazine Theme</h5>
                                                            <p class="mb-0">Launch visually appealing Blog theme.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/07.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a class="btn btn-white text-success  link-shadow mt-2">High</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card border-bottom pb-2 shadow-none">
                            <div class="card-body text-center inln-date flet-datepickr">
                                <input type="text" id="inline-date" class="date-input basicFlatpickr d-none" readonly="readonly">
                            </div>
                        </div>
                        <div class="card card-list">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-secondary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">Direct Development</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-list">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-primary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">action point assigned</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-list">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-warning mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">Private Notes</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-list mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-success mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">Support Request</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-transparent mb-0">
                    <div class="card-header d-flex align-items-center justify-content-between p-0 pb-3">
                        <div class="header-title">
                            <h4 class="card-title">Current Projects</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div id="top-project-slick-arrow" class="slick-aerrow-block">
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-unstyled row top-projects mb-0">
                            <li class="col-lg-4">                                    
                                <div class="card">
                                    <div class="card-body"> 
                                        <h5 class="mb-3">Hotel Management App UI Kit</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                        <div class="iq-progress-bar bg-secondary-light mb-4">
                                            <span class="bg-secondary iq-progress progress-1" data-percent="65" style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/01.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/02.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-secondary-light">Design</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body"> 
                                        <h5 class="mb-3">General Improvement in pages</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                        <div class="iq-progress-bar bg-info-light mb-4">
                                            <span class="bg-info iq-progress progress-1" data-percent="65" style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/05.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/06.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/07.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/08.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-info-light">Testing</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body"> 
                                        <h5 class="mb-3">Product list view changes</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                        <div class="iq-progress-bar bg-success-light mb-4">
                                            <span class="bg-success iq-progress progress-1" data-percent="65" style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/05.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/06.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-success-light">SEO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body"> 
                                        <h5 class="mb-3">Add Multiple theme options</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                        <div class="iq-progress-bar bg-warning-light mb-4">
                                            <span class="bg-warning iq-progress progress-1" data-percent="65" style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/01.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/02.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-warning-light">Development</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body"> 
                                        <h5 class="mb-3">Admin Panel Customization</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                        <div class="iq-progress-bar bg-primary-light mb-4">
                                            <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/01.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/02.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-primary-light">Content</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->
    <div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Project</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Project Name*</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Project Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Categories *</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Category</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText004" class="h5">Due Dates*</label>
                                <input type="date" class="form-control" id="exampleInputText004" value="">
                            </div>                        
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText07" class="h5">Assign Members*</label>
                                <input type="text" class="form-control" id="exampleInputText07">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText02" class="h5">Task Name</label>
                                <input type="text" class="form-control" id="exampleInputText02" placeholder="Enter task Name">
                                <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Assigned to</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Memebers</option>
                                    <option>Kianna Septimus</option>
                                    <option>Jaxson Herwitz</option>
                                    <option>Ryan Schleifer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="exampleInputText05" class="h5">Due Dates*</label>
                                <input type="date" class="form-control" id="exampleInputText05" value="">
                            </div>                        
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Category</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Design</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText040" class="h5">Description</label>
                                <textarea class="form-control" id="exampleInputText040" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText005" class="h5">Checklist</label>
                                <input type="text" class="form-control" id="exampleInputText005" placeholder="Add List">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <label for="exampleInputText01" class="h5">Attachments</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile003">
                                    <label class="custom-file-label" for="inputGroupFile003">Upload media</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-user-modal">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle02">New User</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3 custom-file-small">
                                <label for="exampleInputText01" class="h5">Upload Profile Picture</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputText2" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText04" class="h5">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputText04" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText006" class="h5">Email</label>
                                <input type="text" class="form-control" id="exampleInputText006" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Type</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Type</option>
                                    <option>Trainee</option>
                                    <option>Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Role</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Role</option>
                                    <option>Designer</option>
                                    <option>Developer</option>
                                    <option>Manager</option>
                                    <option>BDE</option>
                                    <option>SEO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-create-modal">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle03">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText03" class="h5">Task Name</label>
                                <input type="text" class="form-control" id="exampleInputText03" placeholder="Enter task Name">
                                <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Assigned to</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Memebers</option>
                                    <option>Kianna Septimus</option>
                                    <option>Jaxson Herwitz</option>
                                    <option>Ryan Schleifer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Project Name</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Enter your project Name</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Dashboard Templates</option>
                                    <option>Wordpress Themes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText40" class="h5">Description</label>
                                <textarea class="form-control" id="exampleInputText40" rows="2" placeholder="Textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText8" class="h5">Checklist</label>
                                <input type="text" class="form-control" id="exampleInputText8" placeholder="Add List">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <label for="exampleInputText01" class="h5">Attachments</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Upload media</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">Webkit</a>.
                </div>
            </div>
        </div>
    </footer>
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