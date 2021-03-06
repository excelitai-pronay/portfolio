<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{ asset ('backend/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('backend/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{ asset ('backend/assets/css/config/material/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset ('backend/assets/css/config/material/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{ asset ('backend/assets/css/config/material/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ asset ('backend/assets/css/config/material/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{ asset ('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        @yield('css')

    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Topbar Start ========== -->
                @include('admin.body.admin_header')

            <!-- ========== end Topbar ========== -->

            <!-- ========== Left Sidebar Start ========== -->
                @include('admin.body.admin_sidebar')  

            <!-- ==========  Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @yield('admin')

                <!-- Footer Start -->

                @include('admin.body.admin_footer')
               
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset ('backend/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{ asset ('backend/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{ asset ('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{ asset ('backend/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset ('backend/assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{ asset ('backend/assets/js/app.min.js')}}"></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {

                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
                default:
                break;
                }

            @endif
        </script>

        @yield('script')
        
    </body>
</html>