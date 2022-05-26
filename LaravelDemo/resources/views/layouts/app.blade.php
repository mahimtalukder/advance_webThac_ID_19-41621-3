<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Name of your web site">
        <meta name="author" content="Marketify">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1">
        <title>Mahim | Home</title>

        <link
            href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/plugins.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/colors.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
        
    </head>
    <body>

        <div id="preloader">
            <div class="loader_line"></div>
        </div>

        <div class="shane_tm_all_wrap" data-magic-cursor="show" data-color="crimson">
            <div class="shane_tm_topbar">
                <div class="topbar_inner">
                    <div class="logo">
                        <a href="#"><img src="{{ URL::asset('img/logo/new/mt.png') }}" alt="pic not found" /></a>
                    </div>
                    <div class="menu">
                        <ul class="anchor_nav">
                            <li id='homePage'><a href="{{URL::asset('/')}}">Home</a></li>
                            <li id='aboutPage'><a href="{{URL::asset('/aboutMe')}}">About</a></li>
                            <li id='portfolioPage'><a href="#portfolio">Portfolio</a></li>
                            <li id='contactPage'><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

         @yield('content')

        
        <div class="shane_tm_section">
            <div class="shane_tm_copyright">
                <div class="container">
                    <div class="inner">
                        <p>&copy; <?php echo date("Y"); ?> by <a
                                href="https://www.facebook.com/mahim.talukder.75/"
                                target="_blank">MT</a>. All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/init.js"></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&amp;callback=initMap"></script>
    </body>

    
</html>