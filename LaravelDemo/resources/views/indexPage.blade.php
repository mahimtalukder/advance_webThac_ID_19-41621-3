<?php
use App\Http\Controllers\PagesController;
?>

@extends('layouts.app')
@section('content')
<script>document.getElementById("homePage").className = "current";</script>
<div class="shane_tm_hero" id="home" data-style="three">
    <div class="background">
            <div class="image" data-img-url="{{ URL::asset('img/slider/my_pic.jpg')}}"></div>
    </div>

    <div class="container">
        <div class="content">
            <div class="name_wrap" ><h3 ><span >MD MAHIM</span> TALUKDER</h3></div>
            <div class="job_wrap"><span class="job">Data Analyst<span
                        class="overlay_effect"></span></span></div>
        </div>
    </div>
</div>
@endsection
