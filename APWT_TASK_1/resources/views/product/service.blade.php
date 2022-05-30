@extends('layouts.app2')
@section('title', 'Services')
@section('PageTitle', 'Services')
@section('CurrentPage')
    <li class="active">Services Style Two</li>
@endsection
@section('content')
    <script>document.getElementById("service").className = "nav-link active";</script>
    <section class="safety-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Cybersecurity services</span>
                <h2>You can protect your organization’s cybersecurity by services us</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="assets/img/safety-icon/icon-1.png" alt="Image">
                            <a href="services-details.html">
                                <h3>Check Website Url</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="assets/img/safety-icon/icon-2.png" alt="Image">
                            <a href="services-details.html">
                                <h3>Check Emails Before Opening Them</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="assets/img/safety-icon/icon-3.png" alt="Image">
                            <a href="services-details.html">
                                <h3>Remember To Log Off</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="assets/img/safety-icon/icon-4.png" alt="Image">
                            <a href="services-details.html">
                                <h3>Choose Strong Passwords</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="assets/img/safety-icon/icon-5.png" alt="Image">
                            <a href="services-details.html">
                                <h3>Shop Safety In Trusted Websites</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="assets/img/safety-icon/icon-6.png" alt="Image">
                            <a href="services-details.html">
                                <h3>Update Your Antivirus</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>	
@endsection
