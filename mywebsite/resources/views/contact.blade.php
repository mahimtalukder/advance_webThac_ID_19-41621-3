<?php
use App\Http\Controllers\PagesController;
?>

@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<script>document.getElementById("contactPage").className = "current";</script>
<script>document.getElementById("contactPageM").className = "current";</script>

<div class="shane_tm_section" id="news">
    <div class="shane_tm_news">
        <div class="container">
        </div>
    </div>
</div>

<div class="shane_tm_section" id="contact">
    <div class="shane_tm_talk">
        <div class="shape">
            <img class="svg" src="img/svg/paper.svg" alt="" />
        </div>
        <div class="background" id="talk">
            <a class="player"
                data-property="{videoURL:'https://www.youtube.com/watch?v=l6JN5M12BbE',containment:'#talk',autoPlay:true,
                loop:true, showControls:false, mute:true,
                startAt:0,opacity:1, quality:'default'}"></a>
            <div class="overlay"></div>
        </div>
        <div class="talk_inner">
            <div class="text wow fadeInUp" data-wow-duration="1.5s">
                <h3>Let's work together!</h3>
            </div>
            <div class="button wow fadeInUp"
                data-wow-duration="1.5s">
                <a href="#">Make an enquiry</a>
            </div>
        </div>
    </div>
</div>

<div class="shane_tm_contact_popup">
    <div class="popup_description_wrap">
        <div class="contact_title">
            <h3>Get in touch</h3>
        </div>
        <div class="wrapper">
            <div class="left">
                <div class="fields">
                    <form   action="https://formspree.io/f/xeqnnlbw" method="POST" class="contact_form" id="contact_form" target="_blank">
                        <div class="empty_notice"><span>Please Fill
                                Required Fields</span></div>
                        <div class="first">
                            <ul>
                                <li>
                                    <input type="text" id="Name" name="Name" placeholder="Name">
                                </li>
                                <li>
                                    <input type="email" id="email" name="email"
                                        placeholder="Email">
                                </li>
                            </ul>
                        </div>
                        <div class="last">
                            <textarea name="massage" id="massage"
                                placeholder="Message"></textarea>
                        </div>
                        
                        <button  name='button' style="background-color: #e54b4b;
                        color: #fff;
                        padding: 15px 25px;
                        text-decoration: none;
                        cursor: pointer;
                        border: none;" type="submit">Send Message</button>

                    </form>
                </div>
            </div>
            <div class="right">
                <div class="map_wrap">
                    <div class="map" id="ieatmaps"></div>
                </div>
            </div>
        </div>
        <div class="short_info">
            <ul>
                <li>
                    <div class="list_inner">
                        <i class="icon-location"></i>
                        <p>House:58, Road:05, Sector:12, Uttara, Dhaka-1230 </p>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <i class="icon-phone-1"></i>
                        <p><a href="#">+880 1731392620</a></p>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <i class="icon-share-1"></i>
                        <ul class="social">
                            <li><a href="#"><i
                                        class="icon-facebook-squared"></i></a></li>
                            <li><a href="#"><i
                                        class="icon-twitter-squared"></i></a></li>
                            <li><a href="#"><i
                                        class="icon-linkedin-squared"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/contact.js"></script>
@endsection
