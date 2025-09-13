<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title','Trang layout chung')</title>
 
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/course.css') }}">
    </head>
<body>
    <div class="sidebar" >
        <div class="logo" >
            <img src="{{ asset('logo.png') }}" alt="">
        </div>

        <a href="#">Dashboard</a>

        <div class="dropdown">
            <div class="dropdown-show">
                <a href="/academic">Academic  <img src="{{ asset('down.png') }}" alt=""></a>
            </div>

            <div class="dropdown-content">
                <a href="#">Course Schedule</a>
                <a href="#">Exam Schedule</a>
                <a href="#">Graes & Transcript</a>
                <a href="#">Attendance Tracker</a>
            </div>
           
        </div>
       
        <a href="">E-Library</a>
        <a href="">Financial</a>
        <a href="">Forms & Requests</a>
        <a href="">Profile & Records</a>
    </div>


    <div class="navbar" >
        <div class="title">
            SIMS Cloud - Student Information System
            <div class="subtitle">
                Department of Academic
            </div>
        </div>

        

        <div class="noti">
                <img src="{{ asset('bell.png') }}" alt="">
                 <img src="{{ asset('down.png') }}" alt="">
            </div>

            <div class="account">
                 <img src="{{ asset('user.png') }}" alt="">
                  <img src="{{ asset('down.png') }}" alt="">
            </div>
        </div>
    

    <div class="content">
        <div class="page-content">
            @yield('content')  <!-- Nội dung từ @section('content') của child -->
        </div>
    </div>


</body>
</html>