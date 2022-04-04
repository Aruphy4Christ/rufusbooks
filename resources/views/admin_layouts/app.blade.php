<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 13:01:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Employee Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset ('admin_assets/css/my-task.style.min.css')}}">
</head>
<body>
    
        @include('admin_layouts.header')
    

        <!-- Body: Body -->
    @yield('content')

    <footer>
        @include('admin_layouts.footer')
    </footer>


</body>
</html> 