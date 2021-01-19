<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  @include('includes.header')
  @yield('pade_header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @includ('includes.top_navigation')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
   @yield('content')
  <!-- /.content-wrapper -->
  @include('includes.footer')

  
</div>
<!-- ./wrapper -->

@include('includes.script')
@yield('pade_script')
</body>
</html>
