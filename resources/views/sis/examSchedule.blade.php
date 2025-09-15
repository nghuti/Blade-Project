@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/exam.css') }}">
@endpush

@section('title','Exam Schedule')

@section('content')

<div class="exam-title">
        <h2>EXAM SCHEDULE</h2>
</div>

<div class="exam-box">
    <span>Exam Type</span>

    <div class="exam-input">
        <input type="text" placeholder="Final Exam">
        
        <div class="search-btn">
            <img src="{{ asset('search.png') }}" alt="">
            SEARCH
        </div>
    </div>
</div> 


<div class="actions">
    <div class="action-btns">
        <button class="duplicate"><img src="{{ asset('duplicate.png') }}" alt=""></button>
        <button class="save">     <img src="{{ asset('new.png') }}" alt=""></button>
        <button class="copy">     <img src="{{ asset('blank-page.png') }}" alt=""></button>
        <button class="new">      <img src="{{ asset('add.png') }}" alt=""></button>
        <button class="print">    <img src="{{ asset('print.png') }}" alt=""></button>
    </div>

    <div class="action-search">
        <label for="table-search">Search</label>
        <input type="text" class="search-box"></input>
    </div>
</div>

<table class="exam-table">
    <thead>
        <tr>
            <th>NO</th>
            <th>COURSE</th>
            <th>LECTURER</th>
            <th>ROOM</th>
            <th>DATE</th>
            <th>START TIME</th>
            <th>END TIME</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>EN105 - Freshman English</td>
            <td>Emmanuel Harmon </td>   
            <td>205B, 306A</td>
            <td>12/05/2025</td>
            <td>12:47 PM</td>
            <td>02:47 PM</td>
        </tr>
        <tr>
            <td>2</td>
            <td>CSE607 - Data Structures anh Agolrighms</td>
            <td>Merdith Hancock,Daphane Padilla</td>
            <td>202B, 306A</td>
            <td>10/10/2025</td>
            <td>12:47 PM</td>
            <td>02:47 PM</td>
        </tr>
        <tr>
            <td>3</td>
            <td>MAT211  - Discrete Mathemactics </td>
            <td>Merdith Hancock, Zorita Rivas</td>
            <td>201A</td>
            <td>14/10/2025</td>
            <td>12:48 PM</td>
            <td>02:48 PM</td>
        </tr>
        <tr>
            <td>4</td>
            <td>PH308  - Optical Physics</td>
            <td>Emmanuel Harmon, Zorita Rivas</td>
            <td>202B, 306A</td>
            <td>16/10/2025</td>
            <td>12:48 PM</td>
            <td>02:48 PM</td>
        </tr>
    </tbody>
</table>

<div class="page">
    <span>Showing 1 to 4 of 4 entries</span>

    <div class="page-move">
        <button class="prev-btn">previous</button>
        <span class="current-page">1</span>
        <button class="next-btn">next</button>
    </div>
</div>

@endsection