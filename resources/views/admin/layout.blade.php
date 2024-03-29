<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrative Panel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminAsset/plugins/fontawesome-free/css/all.min.css')}}">
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('adminAsset/plugins/summernote/summernote.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminAsset/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAsset/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('adminAsset/plugins/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('adminAsset/css/custom.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Right navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <div class="navbar-nav pl-2">
            <!-- <ol class="breadcrumb p-0 m-0 bg-white">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
        </div>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                    <img src="{{asset('adminAsset/img/avatar5.png')}}" class='img-circle elevation-2' width="40" height="40" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                    <h4 class="h4 mb-0"><strong>{{Auth::guard('admin')->user()->name}}</strong></h4>
                    <div class="mb-3">{{Auth::guard('admin')->user()->email}}</div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-user-cog mr-2"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-lock mr-2"></i> Change Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('logout')}}" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
   @include('admin.sidebar')
    <!-- Content Wrapper. Contains page content -->
         @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <strong>Copyright &copy; 2014-2023 himrooz All rights reserved.</strong>
    </footer>

</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('adminAsset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminAsset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminAsset/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{asset('adminAsset/plugins/dropzone/dropzone.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('adminAsset/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminAsset/js/demo.js')}}"></script>



<script>
    document.getElementById('productTag').addEventListener('keydown', function (event) {
        // Check if the pressed key is a space bar
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevents the space from being entered into the input field

            // Get the value from productTag
            var tagValue = document.getElementById('productTag').value.trim();

            // Check if the value is not empty
            if (tagValue !== '') {
                // Create the HTML code to append
                var htmlCode = `
                    <div class="mb-3" style="width: max-content;">
                        <label for="barcode" style="background-color: #dadada; border-radius: 5px; padding: 5px 10px">${tagValue}</label>
                        <input type="text" name="all_product_tags[]" value="${tagValue}" id="barcode" class="form-control" placeholder="" hidden>
                        <i class="fa-solid fa-xmark" onclick="removeTag(this)"></i>
                    </div>
                `;

                // Append the HTML code to the displayProductTag container
                document.getElementById('displayProductTag').insertAdjacentHTML('beforeend', htmlCode);

                // Clear the productTag input field
                document.getElementById('productTag').value = '';
            }
        }
    });
    function removeTag(xMarkIcon) {
        var parentDiv = xMarkIcon.parentElement;
        parentDiv.remove();
    }
</script>


@yield('customJs')
</body>
</html>
