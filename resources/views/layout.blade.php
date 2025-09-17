<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title','Trang layout chung')</title>
 
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        @stack('styles')
    </head>

    
<body>
    <div class="sidebar" >
        <div class="logo" >
            <img src="{{ asset('logo.png') }}" alt="">
        </div>

        <a href="#">Dashboard</a>

       <div class="dropdown {{ request()->is('academic*') || request()->is('course') || request()->is('exam') ? 'active' : '' }}">
            <div class="dropdown-show">
                    <a href="/academic" 
                    class="{{ request()->is('academic') ? 'active' : '' }}" 
                    > Academic   
                        <span class="arrow"  onclick="event.preventDefault(); event.stopPropagation(); toggleDropdown(this)">
                         <img src="{{ asset('down.png') }}" alt="">
                        </span>
                    </a>
            </div>

            <div class="dropdown-content" style="{{ request()->is('course') || request()->is('exam') ? 'display:block;' : '' }}">
                <a href="/course" class="{{ request()->is('course') ? 'active' : '' }}">Course Schedule</a>
                <a href="/exam" class="{{ request()->is('exam') ? 'active' : '' }}">Exam Schedule</a>
                <a href="#">Grades & Transcript</a>
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
            @yield('content')  
        </div>
    </div>


  <script>
    function toggleDropdown(el) {
        const parent = el.closest(".dropdown");
        parent.classList.toggle("active");
    }
</script>


</body>
</html>