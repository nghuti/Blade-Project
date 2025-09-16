@extends('layout')

@section('title', 'Academic')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/academic.css') }}">
@endpush
@section('content')

<div class="banner">
        <img src="{{ asset('landscape.jpg')}}" alt="">
    <div class="banner-text">
           <h2>ACADEMIC</h2>
    </div>
</div>

<div class="programme-nav">
    <div class="nav-row1">
        <div class="nav-item"><span>1</span> Programme Overview</div>
        <div class="nav-item"><span>2</span> Course Schedule</div>
        <div class="nav-item"><span>3</span> Exam Schedule</div>
    </div>

    <div class="nav-row2">
        <div class="nav-item"><span>4</span> Grades & Transcript</div>
        <div class="nav-item"><span>5</span> Attendance Tracker</div>
    </div>
</div>

<div class="left-ribbon"></div>

<div class="program-all">
            
    <di class="program-box">
        <div class="program-header">
        <img src="{{ asset('education.png')}}" alt="">
        <h2>Programme Overview</h2>
        </div>

        <div class="program-content">
            <div class="info-box">
                <div class="info-logo">
                    <img src="{{ asset('education.png')}}" alt="">
                </div>
                <div class="detail">
                    <span>Your Programme</span>
                    <p>Bachelor of Business Administration</p>
                </div>
            </div>

            <div class="info-row">
                <div class="infor-box">
                    <div class="info-logo">
                         <img src="{{ asset('calendar.png')}}" alt="">
                    </div>
                     <div class="detail">
                        <span>Start Date</span>
                        <p>September 01, 2025</p>
                     </div>
                </div>

                <div class="infor-box">
                     <div class="detail">
                        <span>Expected Graduation</span>
                        <p>June 30, 2029</p>
                     </div>
                </div>
            </div>


            <div class="info-row">
                <div class="infor-box">
                    <div class="info-logo">
                     <img src="{{ asset('credit-card.png')}}" alt="">
                    </div>
                    <div class="detail">
                        <span>Total Credit Requirement</span>
                        <p>September 01, 2025</p>
                    </div>
                </div>

                <div class="infor-box">
                    <div class="detail">
                        <span>Credits Completed</span>
                        <p>36 Credits (as of Jun 2025)</p>
                    </div>

                </div>
            </div>

            <div class="info-box status">
                <div class="info-logo">
                   <img src="{{ asset('checked.png')}}" alt="">                     
                </div>
                <div class="detail">
                    <span>Status</span>
                    <small>You have accessOpen access</small>
                    <p>On Track</p>
                    <p>Next Semester Registration Opens: August 01, 2025</p>
                    <button class="academic-btn">View Academic Plan</button>
                </div>
                </div>

        </div>
    </di>

</div>



<div class="right-ribbon"></div>
@endsection