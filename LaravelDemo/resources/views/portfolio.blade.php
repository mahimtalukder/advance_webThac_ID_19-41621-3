<?php
use App\Http\Controllers\PagesController;
?>


@extends('layouts.app')
@section('title', 'Portfolio')
@section('content')
<script>document.getElementById("portfolioPage").className = "current";</script>
<div class="shane_tm_section" id="portfolio">
    <div class="shane_tm_portfolio">
        <div class="container">
            <div class="shane_tm_title">
                <div class="title_flex">
                    <div class="left">
                        <span>Portfolio</span>
                        <h3>Creative Portfolio</h3>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*">All</a></li>
                            @foreach ($all_portfolio as $portfolio)
                                <li><a href="#" data-filter="<?php echo '.' . $portfolio['class_name']?>"><?php echo $portfolio['course_title']?></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="shane_tm_portfolio_titles"></div>

            <div class="portfolio_list wow fadeInLeft"data-wow-duration="1.5s">
                <ul class="gallery_zoom">
                    @foreach ($all_portfolio as $portfolio)
                        <li class="<?php echo $portfolio['class_name']?>">
                            <div class="inner">
                                <div class="entry
                                    shane_tm_portfolio_animation_wrap"
                                    data-title="<?php echo $portfolio['name']?>"
                                    data-category="<?php echo $portfolio['type']?>">
                                    <a class="portfolio_popup" href="#">
                                        <img src="img/thumbs/1-1.jpg"  alt="" />
                                        <div class="main" data-img-url="<?php echo $portfolio['picture']?>"></div>
                                    </a>
                                </div>

                                <div class="mobile_title">
                                    <h3><?php echo $portfolio['name']?></h3>
                                    <span><?php echo $portfolio['type']?></span>
                                </div>

                                <div class="hidden_content">
                                    <div class="popup_details">
                                        <div class="main_details">
                                            <div class="textbox">
                                                <p><?php echo $portfolio['details1']?></p>
                                                <p><?php echo $portfolio['details2']?></p>
                                            </div>
                                            <div class="detailbox">
                                                <ul>
                                                    <li>
                                                        <span
                                                            class="first">Based on</span>
                                                        <span><?php echo $portfolio['course_title']?></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="first">Date</span> <span><?php echo $portfolio['date']?></span>
                                                    </li>
                                                    <li>
                                                        <span class="first">Download Links</span>
                                                        <span> <a target="_blank" href="<?php echo $portfolio['download_link']?>">Download</a> </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="shane_tm_section">
    <div class="shane_tm_skills">
        <div class="container">
            <div class="skills_inner">
                <div class="left wow fadeInLeft"
                    data-wow-duration="1.5s">
                    <div class="shane_tm_title">
                        <h3>I have moderator skills in developing, programming, data mining and in AI.</h3>
                    </div>
                    <div class="text">
                        <p>I am a student in the Computer Science department of American International University-Bangladesh(AIUB). 
                            I have good learning skills in CS topics. I am also an academic scholarship holder student for outstanding 
                            academic results. I want to work in the educational sector, basically in the Universities of Bangladesh, 
                            and I want to do some "work from home" jobs for increasing professional working skills for the corporate world. .</p>
                    </div>
                </div>
                <div class="right wow fadeInLeft"
                    data-wow-duration="1.5s" data-wow-delay=".2s">
                    <div class="tokyo_progress">
                        <div class="progress_inner" data-value="80">
                            <span><span class="label">Web
                                    Development</span><span
                                    class="number">80%</span></span>
                            <div class="background"><div
                                    class="bar"><div class="bar_in"></div></div></div>
                        </div>
                        <div class="progress_inner" data-value="90">
                            <span><span class="label">Data Analysis</span><span
                                    class="number">90%</span></span>
                            <div class="background"><div
                                    class="bar"><div class="bar_in"></div></div></div>
                        </div>
                        <div class="progress_inner" data-value="95">
                            <span><span class="label">Programming</span><span
                                    class="number">95%</span></span>
                            <div class="background"><div
                                    class="bar"><div class="bar_in"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection