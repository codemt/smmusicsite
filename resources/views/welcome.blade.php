<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>SMMusic </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Styles CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/sonorama.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/isotope.css">
        <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">

        <!--  Color Picker & Styles -->
        <link href="css/color-picker.css" rel="stylesheet">
        <link rel="stylesheet" href="css/color/light.css">
        <link rel="stylesheet" href="css/color/green.css">
        <link rel="stylesheet" href="css/color/yellow.css">
        <link rel="stylesheet" href="css/color/turquoise.css">
        <link rel="stylesheet" href="css/color/red.css">
        <link rel="stylesheet" href="css/color/orange.css">
        <link rel="stylesheet" href="css/color/purple.css">
        <link rel="stylesheet" href="css/color/blue.css">
        <link rel="stylesheet" href="css/color/black.css">

        <!-- Scripts JS -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="mask">
            <div class="loader">
              <img src="img/icons/loading.gif" alt='loading'>
            </div>
        </div>

        {{-- <div class="color-picker">
        	<div class="picker-btn"></div>
        	<div class="pickerTitle">Style Switcher</div>
            <div class="pwrapper">
                <div class="pickersubTitle">Layout Selector</div>
                <div class="light-version"><img title="" alt='img' src="img/icons/light.jpg"></div>
                <div class="dark-version"><img title="" alt='img' src="img/icons/dark.jpg"></div>
                <div class="pickersubTitle"> Color scheme </div>
                <div class="picker-blue"></div>
                <div class="picker-black"></div>
                <div class="picker-green"></div>
                <div class="picker-yellow"></div>
                <div class="picker-red"></div>
                <div class="picker-purple"></div>
                <div class="picker-turquoise"></div>
                <div class="picker-orange"></div>
                <div class="clear nopick"></div>
            </div>
        </div> --}}

        <div class="full-wrapper header">
        	<div class="main-logo">
            	<a class="symbol" href="#"><div class="navbar-brand"><ul><li></li><li></li><li></li></ul></div>SMMusic<span>.</span></a>
            </div>

            <nav class="main-menu">
            	<ul>
                	<li class="current"><a href="#anchor0">Home</a></li>
                    {{-- <li><a href="#anchor01">Last News</a></li> --}}
                    {{-- <li><a href="#anchor03">Discography</a></li>  --}}
                    <li><a href="#anchor04">Gallery</a></li>
                    <li><a href="#anchor02">Biography</a></li> 
                    <li><a href="#anchor05">Contact</a></li>
                    <li><a href="#anchor03">Social</a></li>
                </ul>
            </nav>

            <nav id="nav2" role="navigation">
                <a class="jump-menu" title="Show navigation">Show navigation</a>
                <ul>
                        <li class="current"><a href="#anchor0">Home</a></li>
                        {{-- <li><a href="#anchor01">Last News</a></li> --}}
                        {{-- <li><a href="#anchor03">Discography</a></li>  --}}
                        <li><a href="#anchor04">Gallery</a></li>
                        <li><a href="#anchor02">Biography</a></li> 
                        <li><a href="#anchor05">Contact</a></li>
                        <li><a href="#anchor03">Social</a></li>
                </ul>
            </nav>
        </div>

        <div id="anchor0"></div>
        <section id="slides-1"> <!-- Slider -->
            <div class="overlay"></div>
            <div class="slides-container">
                <img src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836342/ss2.jpg" alt='img'>
                <img src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836692/ss14.jpg" alt='img'>
                <img src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836128/mt4.jpg" alt='img'>
        	</div>
        	<nav class="slides-navigation">
            	<a href="#" class="next"></a>
            	<a href="#" class="prev"></a>
        	</nav>
        </section> <!-- end Slider -->

        <div class="main-title">
            <div class="title-container">
                <div class="welcome logo">
                    <div class="top-spacer one"></div>
                    <div class="top-spacer two"></div>
                    <img src="img/slider/smmusic4.png" alt='img' />
                    <div class="spacer-box"></div>
                    <ul>
                        
                        <li class="t-current"><span>SMMusic</span> SMMusic is a Vision , to Give a Platform to Talented and Skilled Artists across india to publish there Songs and Promote thier Art. We are a Music Studio Trying to Create Opportunities for Young and Upcoming Artists to showcase<span>Their Songs to the World</span></li>
                        {{-- <li class="">One Label , <span> Many Artists</span></li> --}}
                        <li class=""><span>SMMusic</span> SMMusic is a Vision , to Give a Platform to Talented and Skilled Artists across india to publish there Songs and Promote thier Art. We are a Music Studio Trying to Create Opportunities for Young and Upcoming Artists to showcase<span>Their Songs to the World</span></li>
                    </ul>
                </div>
            </div>
        </div>

    	<div class="full-wrapper">
            <div class="player-container"> <!-- Audio Player -->
                <div class="audio-player">
                    <audio preload="none" src="audio/mp3/Daft_Punk_Giorgio_by_Moroder_Stellar_Dreams_Remix.mp3"></audio>
                    <ol class="home-playlist">
                        <li class="playing"><a href="#" data-track="Mithilesh | Tere Bin Jeena Nahi | Original Song" data-src="audio/mp3/tere-bin-jeena-nahi-mix1-v1.mp3">tere bin jeena nahi</a></li>
                        <li><a href="#" data-track="Baatein Ye Kabhi Na | Shaily & Mithilesh " data-src="audio/mp3/baatein-ye-kabhi-na-v5-mix5.mp3">Baatein Ye Kabhi Na</a></li>
                        <li><a href="#" data-track="Shallow | Shaily & Mithilesh " data-src="audio/mp3/shallow-v3-mix3.mp3">Shallow </a></li>
                    </ol>
                </div>
            </div> <!-- end Audio Player -->
        </div>

        <div id="anchor01"></div>
        {{-- <div class="main-wrapper">
            <section class="section"><!-- Last News -->
                <h1>Last News</h1>
                <div class="spacer"></div>
                <div class="last-news-wrapper">
                    <div class="last-news-container">
                        <div class="news-nav">
                            <div class="last-news-next"></div>
                            <div class="last-news-prev"></div>
                        </div>
                        <div class="news-box">
                            <ul>
                                <li class="start"></li>
                                <li id="news-01.html" class="last-news"> <!-- Type One Thumb on Top -->
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-05.jpg" alt='img' />
                                    </div>
                                    <div class="news-info">
                                        <h1>New Remix</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                </li><!-- end Type One -->
                                <li id="news-02.html" class="last-news"> <!-- Type Two Thumb on Bottom -->
                                    <div class="news-info">
                                        <h1>New Photo</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-03.jpg" alt='img' />
                                    </div>
                                </li><!-- end Type Two -->
                                <li id="news-03.html" class="last-news"> <!-- Type One Thumb on Top -->
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-06.jpg" alt='img' />
                                    </div>
                                    <div class="news-info">
                                        <h1>New Remix</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                </li><!-- end Type One -->
                                <li id="news-04.html" class="last-news"> <!-- Type Two Thumb on Bottom -->
                                    <div class="news-info">
                                        <h1>New Photo</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-07.jpg" alt='img' />
                                    </div>
                                </li><!-- end Type Two -->

                                <li id="news-05.html" class="last-news"> <!-- Type One Thumb on Top -->
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-01.jpg" alt='img' />
                                    </div>
                                    <div class="news-info">
                                        <h1>New Remix</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                </li><!-- end Type One -->
                                <li id="news-06.html" class="last-news"> <!-- Type Two Thumb on Bottom -->
                                    <div class="news-info">
                                        <h1>New Photo</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-02.jpg" alt='img' />
                                    </div>
                                </li><!-- end Type Two -->
                                <li id="news-07.html" class="last-news"> <!-- Type One Thumb on Top -->
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-03.jpg" alt='img' />
                                    </div>
                                    <div class="news-info">
                                        <h1>New Remix</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                </li><!-- end Type One -->
                                <li id="news-08.html" class="last-news"> <!-- Type Two Thumb on Bottom -->
                                    <div class="news-info">
                                        <h1>New Photo</h1>
                                        <p>Amazing photo called neon blue available on my gallery</p>
                                        <div class="news-date">2013.08.10</div>
                                    </div>
                                    <div class="news-thumb">
                                        <img src="img/news/thumb-news-04.jpg" alt='img' />
                                    </div>
                                </li><!-- end Type Two -->
                                <li class="end"></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section><!-- end Last News -->

            <div class="clear"></div>
            <div id="news-show"></div>
            <section class="news-window">
                <div class="news-content"></div><!-- AJAX Dinamic Content -->
            </section>

        </div><!-- end Main Wrapper --> --}}

        {{-- <div id="anchor02"></div> --}}
        {{-- <section id="dates" class="full-wrapper parallax-wrapper dates"> <!-- Tour Dates -->
        	<div class="parallax" data-velocity="-.3" data-fit="0">
            	<div class="front-content dates">
                    <h1>Tour Dates</h1>
                    <div class="spacer"></div>
                    <div class="dates-wrapper">
                    	<ul>
                        	<li> <!-- List #2 --> <!-- max 5 Date Info elements per li -->
                            	<div class="date-box"> <!-- Date Info 1 -->
                                	<div class="info date">
                                        <div class="day">23</div>
                                        <div class="month">Jan</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Los Angeles, CA</div>
                                        <div class="place"><div class="ico"></div>Monarch Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>07:00 pm - 08:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 1 -->

                                <div class="date-box"> <!-- Date Info 2 -->
                                	<div class="info date">
                                        <div class="day">29</div>
                                        <div class="month">Jan</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Boston, MA</div>
                                        <div class="place"><div class="ico"></div>
                                        Sugar night Club</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>
                                    	09:00 pm -10:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 2 -->

                                <div class="date-box"> <!-- Date Info 3 -->
                                	<div class="info date">
                                        <div class="day">09</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Philadelphia, MA</div>
                                        <div class="place"><div class="ico"></div>The Fonda Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>11:00 pm - 12:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 3 -->

                                <div class="date-box"> <!-- Date Info 4 -->
                                	<div class="info date">
                                        <div class="day">12</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Washington, DC</div>
                                        <div class="place"><div class="ico"></div>Webster Hall</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>07:00 pm - 08:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 4 -->

                                <div class="date-box"> <!-- Date Info 5 -->
                                	<div class="info date">
                                        <div class="day">16</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">New York, NY</div>
                                        <div class="place"><div class="ico"></div>Howard Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>09:00 pm - 10:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 5 -->
                            </li>

                        	<li> <!-- List #1 --> <!-- max 5 Date Info elements per li -->
                            	<div class="date-box"> <!-- Date Info 1 -->
                                	<div class="info date">
                                        <div class="day">23</div>
                                        <div class="month">Jan</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Los Angeles, CA</div>
                                        <div class="place"><div class="ico"></div>Monarch Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>07:00 pm - 08:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 1 -->

                                <div class="date-box"> <!-- Date Info 2 -->
                                	<div class="info date">
                                        <div class="day">29</div>
                                        <div class="month">Jan</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Boston, MA</div>
                                        <div class="place"><div class="ico"></div>
                                        Sugar night Club</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>
                                    	09:00 pm -10:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 2 -->

                                <div class="date-box"> <!-- Date Info 3 -->
                                	<div class="info date">
                                        <div class="day">09</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Philadelphia, MA</div>
                                        <div class="place"><div class="ico"></div>The Fonda Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>11:00 pm - 12:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 3 -->

                                <div class="date-box"> <!-- Date Info 4 -->
                                	<div class="info date">
                                        <div class="day">12</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Washington, DC</div>
                                        <div class="place"><div class="ico"></div>Webster Hall</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>07:00 pm - 08:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 4 -->

                                <div class="date-box"> <!-- Date Info 5 -->
                                	<div class="info date">
                                        <div class="day">16</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">New York, NY</div>
                                        <div class="place"><div class="ico"></div>Howard Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>09:00 pm - 10:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 5 -->
                            </li>
                        	<li> <!-- List #3 --> <!-- max 5 Date Info elements per li -->
                            	<div class="date-box"> <!-- Date Info 1 -->
                                	<div class="info date">
                                        <div class="day">23</div>
                                        <div class="month">Jan</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Los Angeles, CA</div>
                                        <div class="place"><div class="ico"></div>Monarch Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>07:00 pm - 08:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 1 -->

                                <div class="date-box"> <!-- Date Info 2 -->
                                	<div class="info date">
                                        <div class="day">29</div>
                                        <div class="month">Jan</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Boston, MA</div>
                                        <div class="place"><div class="ico"></div>
                                        Sugar night Club</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>
                                    	09:00 pm -10:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 2 -->

                                <div class="date-box"> <!-- Date Info 3 -->
                                	<div class="info date">
                                        <div class="day">09</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Philadelphia, MA</div>
                                        <div class="place"><div class="ico"></div>The Fonda Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>11:00 pm - 12:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 3 -->

                                <div class="date-box"> <!-- Date Info 4 -->
                                	<div class="info date">
                                        <div class="day">12</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">Washington, DC</div>
                                        <div class="place"><div class="ico"></div>Webster Hall</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>07:00 pm - 08:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 4 -->

                                <div class="date-box"> <!-- Date Info 5 -->
                                	<div class="info date">
                                        <div class="day">16</div>
                                        <div class="month">Feb</div>
                                        <div class="year">2014</div>
                                    </div>
                                    <div class="info">
                                    	<div class="city">New York, NY</div>
                                        <div class="place"><div class="ico"></div>Howard Theater</div>
                                    </div>
                                    <div class="info">
                                    	<div class="time"><div class="ico"></div>09:00 pm - 10:00 am</div>
                                        <div class="buy"><div class="ico"></div><a href="#">Buy Tickets</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end Date Info 5 -->
                            </li>                        </ul>
                    </div>
                    <div class="controller">
                    	<ul class="dots">
                        </ul>
                    </div>
                    <div class="dates-nav">
                        <div class="next"></div>
                        <div class="prev"></div>
                    </div>
                </div>
                <div class="square-bg"></div>
                <div class="overlay"></div>
            </div>
        </section><!-- end Tour Dates --> --}}
        <div class="clear"></div>

        {{-- <div id="anchor03"></div> --}}
        {{-- <div class="main-wrapper">
            {{-- <section id="discography" class="section"><!-- Discography -->
                <h1>Discography</h1>
                <div class="spacer"></div>
                <div class="disc-container">
                	<ul>

                    	<li><!-- Disc #1 -->
                        	<div class="disc-img open-disc" id="disc-01.html">
                            	<img src="img/discography/thumb-01.jpg" alt='img' />
                                <div class="overlay"></div>
                            </div>
                            <div class="disc-info">
                            	<h2>Aurora LP</h2>
                                <p>The amazing album <br/>"Aurora LP" is now available</p>
                                <p><a href="#">Buy Album</a></p>
                            </div>
                        </li><!-- end Disc #1 -->

                        <li><!-- Disc #2 -->
                        	<div class="disc-img open-disc" id="disc-02.html">
                            	<img src="img/discography/thumb-02.jpg" alt='img' />
                                <div class="overlay"></div>
                            </div>
                            <div class="disc-info">
                            	<h2>J COLE</h2>
                                <p>The amazing album <br/>"J Cole" is now available</p>
                                <p><a href="#">Buy Album</a></p>
                            </div>
                        </li><!-- end Disc #2 -->

                        <li><!-- Disc #3 -->
                        	<div class="disc-img open-disc" id="disc-03.html">
                            	<img src="img/discography/thumb-03.jpg" alt='img' />
                                <div class="overlay"></div>
                            </div>
                            <div class="disc-info">
                            	<h2>Black Skinhead</h2>
                                <p>The amazing album <br/>"Black Skinhead" is now available</p>
                                <p><a href="#">Buy Album</a></p>
                            </div>
                        </li><!-- end Disc #3 -->

                    </ul>
                </div>
            </section><!-- end Discography --> --}}
            {{-- <div class="clear"></div>
            <div id="project-show"></div>
            <section class="project-window">
                <div class="project-content"></div><!-- AJAX Dinamic Content -->
            </section>

        </div> --}} 

        {{-- <section id="quotes" class="full-wrapper parallax-wrapper quotes"> <!-- Twitter Quotes -->
        	<div class="parallax" data-velocity="-.3" data-fit="0">
                <div class="twitter-quotes"></div>
                <div id="myTweet"></div>
                <div class="overlay"></div>
            </div>
        </section><!-- end Twitter Quotes --> --}}
        <div class="clear"></div>

        <div id="anchor04"></div>
        <section class="full-wrapper portfolio"> <!-- Gallery Portfolio -->
            <h1>Gallery</h1>
            <div class="spacer"></div>

            <div id="portfolio">

                <div class="section portfoliocontent">
                    <section id="i-portfolio" class="clear">

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836316/ss1.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836316/ss1.jpg"> <!-- Set your gallery Group Name in rel="" field, ex: rel="group-one" -->
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="img/gallery/thumb-02.jpg" alt='img' />
                            <a href="https://www.youtube.com/watch?v=IvXd-Rk9QKo" rel="" class="fancybox-media">
                                <div>
                                    <span class="p-category video"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836337/ss3.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836337/ss3.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="img/gallery/thumb-04.jpg" alt='img' />
                            <a href="https://www.youtube.com/watch?v=SI0cl-3g7Jc" class="fancybox-media" rel="">
                                <div>
                                    <span class="p-category video"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836413/ss9.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836413/ss9.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836431/ss10.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836431/ss10.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="img/gallery/thumb-10.jpg" alt='img' />
                            <a href="https://www.youtube.com/watch?v=Wcee_fcpJng" rel="" class="fancybox-media">
                                <div>
                                    <span class="p-category video"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="img/gallery/thumb-10.jpg" alt='img' />
                            <a href="https://www.youtube.com/watch?v=t_4hBnAxJ90" class="fancybox-media" rel="">
                                <div>
                                    <span class="p-category video"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836210/mt7.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836210/mt7.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>
                        
                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1555950266/sm2.png" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836279/mt11.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836237/mt8.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836237/mt8.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                        <div class="ch-grid element">
                            <img class="ch-item" src="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836692/ss14.jpg" alt='img' />
                            <a class="fancybox img-lightbox" rel="" href="https://res.cloudinary.com/dazzqcenn/image/upload/v1554836692/ss14.jpg">
                                <div>
                                    <span class="p-category photo"></span>
                                </div>
                            </a>
                        </div>

                    </section>
                </div>
            </div>

        </section><!-- end Gallery Portfolio -->
        <div class="clear"></div>
        <div id="anchor02"></div>
        <section id="about-us" class="full-wrapper parallax-wrapper about-us">
            <div class="parallax" data-velocity="-.3" data-fit="0">
                <h1>Biography</h1>
                <div class="spacer"></div>
                <div class="sec-content"><p>As an artist or band, you’re going to be repeatedly forced to explain yourself. And if you are incapable of communicating  in words   who you are, what you sound like and why someone should care, you’re not going to go very far. In short, you’re going to need to write a bio.</p></div>

            </div>
        </section>
        <div class="clear"></div>

        <section class="full-wrapper parallax-wrapper contact"> <!-- Contact -->
        	<div class="parallax" data-velocity="-.3" data-fit="0">
            	<div id="anchor05"></div>
                <div class="front-content contact">
                    <h1>Contact Us</h1>
                    <div class="spacer"></div>

                    <form method="post" id="contact" class="peThemeContactForm form" action="mail.php">
                        <div id="personal" class="bay form-horizontal">
                            <div class="control-group">
                                <div class="controls name">
                                	<h2>Name</h2>
                                    <input class="required span9" type="text" name="author" data-fieldid="0" id="name">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls email">
                                	<h2>Email</h2>
                                    <input class="required span9" type="email" name="email" data-fieldid="1" id="email">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="control-group">
                                <div class="controls message">
                                	<h2>Message</h2>
                                    <textarea name="message" rows="12" class="required span9" data-fieldid="2" id="comments"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls send-btn">
                                    <button type="submit" class="contour-btn red buttoncontact">Send Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="notifications">
                            <div id="contactFormSent" class="formSent alert alert-success">
                                <strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</div>
                            <div id="contactFormError" class="formError alert alert-error">
                                <strong>Oops, An error has ocurred!</strong> See the marked fields above to fix the errors.</div>
                        </div>
                    </form>

                </div>
                <div class="square-bg"></div>
                <div class="overlay"></div>
            </div>
        </section><!-- end Contact -->
        <div class="clear"></div>
        <div id="anchor03"></div> 
        <section class="social-footer">
            <h1>Social Networks</h1>
            <div class="spacer"></div>
            <div class="footer-container">
                <a class="social-ico s-facebook" href="google.com" target="_blank"></a>
                <a class="social-ico s-youtube" href="google.com" target="_blank"></a>
                <a class="social-ico s-plus" href="google.com" target="_blank"></a>
                <a class="social-ico s-twitter" href="google.com" target="_blank" ></a>
                <a class="social-ico s-soundcloud" href="google.com" target="_blank"></a>
            </div>
            <div class="clear"></div>
        </section>

		<!-- Scripts JS -->
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>-->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/superslides-0.6.2/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.isotope.min.js"></script>
	  <script type="text/javascript" src="js/player/audio.js"></script> <!-- Audio Player -->
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script src="js/news.js"></script>
        <script src="js/discography.js"></script>
        <script src="js/tweets.js"></script>
        <script src="js/jquery.scrolly.js"></script>
        <script src="js/fancybox/jquery.fancybox.js"></script>
        <script src="js/fancybox/helpers/jquery.fancybox-media.js"></script>
        <script src="js/color-picker.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/sonorama.js"></script>



    </body>
</html>
