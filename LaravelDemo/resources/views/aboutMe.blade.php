@extends('layouts.app')
@section('content')
<script>document.getElementById("aboutPage").className = "current";</script>
<div class="shane_tm_section" id="about">
    <div class="shane_tm_about">
        <div class="container">
            <div class="about_inner">
                <div class="left wow fadeInUp"
                    data-wow-duration="1.5s">
                    <div class="image">
                        <img src="{{ URL::asset('img/thumbs/1-1.jpg')}}" alt="" />
                        <div class="main"
                            data-img-url="{{ URL::asset('img/about/aboutMe.jpg')}}"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="shane_tm_title wow fadeInUp"
                        data-wow-duration="1.5s">
                        <span>About Me</span>
                        <h3>Beginner data analyst based in Dhaka, Bangladesh</h3>
                    </div>
                    <div class="text wow fadeInUp"
                        data-wow-duration="1.5s">
                        <p>I'm a data analyst, and I'm very passionate and dedicated to my work; 
                            I have acquired the skills and knowledge necessary to make a data science 
                            project successful. I enjoy every step of discovering the information from 
                            a dataset.</p>
                    </div>
                    <div class="shane_tm_button wow fadeInUp"
                        data-wow-duration="1.5s">
                        <a href="{{ URL::asset('file/MahimCV.pdf')}}" download>Download
                            CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection