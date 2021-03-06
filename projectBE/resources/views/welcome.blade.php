<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css"> <!--  Connect the css file-->
<!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->

        <!-- carousel-->
<!--
        <link rel="stylesheet" href="libs/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="libs/assets/owl.theme.default.min.css">
-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

        <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap">
    </script>
        <title>Final Project</title>
    </head>
    <body onload="load()">
        <header class="header" id="header">
            <img id="Logo" src="/img/logo.svg" onclick="window.location.reload()" alt="Logo" width="145px" height="32px">
            <div style="display: flex;">
                <a href="/" style="margin-top: 32px">English</a>
                <a href="/ru" style="margin-top: 32px">Russian</a>
            </div>
            <!-- <a href="/kz">??azakh</a> -->

            <div class="header__links" id="header_links">
                <a data-scroll="#intro" id="Home">{{ __("HOME")}}</a>
                <a data-scroll="#intro__content" id="Movies">{{ __("MOVIES")}}</a>
                <a data-scroll="#intro__content2" id="Serials">{{ __("NEWS")}}</a>
                <a data-scroll="#trailers" id="About">{{ __("TRAILERS")}}</a>
                <a id="Feedback" href="/feedback" style="color: #000 !important; text-decoration: none">{{__("FEEDBACK")}}</a>
                <a href="/image-upload">{{__("IMAGE UPLOADS")}}</a>
            </div>
            <button class="burger" type="button" id="linksToggle">
                <span class="burger__item" style="color: black;">Menu</span>
            </button>
        </header>

        <div class="intro" id="intro">
            <div id="block">
                @if(Session::has('Success'))
                <div class="alert alert-success">
                    {{ Session::get('Success')}}
                </div>
                @endif
            </div>
            <div class="intro__inner">
                <div class="container">
                    <img src="https://images6.fanpop.com/image/photos/40300000/Sir-Tommy-screencap-peaky-blinders-40327101-960-640.jpg" id="demo" alt="" width="80%">
                    <div class="text" >
                        <div class="titles" onmouseover="changeOpacity(this)" onmouseout="changeOpacity1(this)">
                            {{ __("TV Serials")}}
                        </div>
                        <h1 style="padding-top: 20px">{{ __("Peaky Blinders Season 2 Episode 5 ??? Breaking Point")}}</h1>
                        <a href="" class="btn1" onclick="notReady()">
                            {{ __("Read Review")}}
                        </a>
                    </div>
                    <div class="images">
                        <img src="https://sun9-68.userapi.com/b7yPlDnmE0a2JFC-Df0IuRoB3jnFIrgBxUIsCA/e0shH00-DoU.jpg" alt="" width="100%" style="min-height: 280px">
                        <div class="text1">
                            <div class="titles" onmouseover="changeOpacity(this)" onmouseout="changeOpacity1(this)">
                                {{ __("Drama")}}
                            </div>
                            <h4 class="h4">{{ __("Family Drama In the Green Field Focuses on the Struggles of Personal Loss")}}</h4>
                        </div>
                        <img src="https://clairemariefoundation.org/wp-content/uploads/2020/05/B3D015BD-B781-4CF3-AC0B-27E88B0610BF.jpeg" alt="" width="100%" style="min-height: 280px">
                        <div class="text2">
                            <div class="titles" onmouseover="changeOpacity(this)" onmouseout="changeOpacity1(this)">
                                {{ __("News")}}
                            </div>
                            <h4 class="h4">{{ __("The Most Anticipated Movie Releases of 2020")}}</h4>
                        </div>
                        <img src="https://pragyata.com/wp-content/uploads/2020/08/The-Unity-of-India.jpg" alt="" width="100%" style="min-height: 280px">
                        <div class="text3">
                            <div class="titles" onmouseover="changeOpacity(this)" onmouseout="changeOpacity1(this)">
                                {{ __("Fantasy")}}
                            </div>
                            <h4 class="h4">{{ __("Is Anthony Caravelho's D??a de los Muertos Worth Watching?")}}</h4>
                        </div>
                    </div>
               </div>
            </div>
        </div>

        <div class="intro__content" id="intro__content">
            <p class="paragraph">{{ __("Movies")}}</p>

            <div class="intro__slider autoplay">
                <img class="slider__images" src="https://i.pinimg.com/736x/7e/59/1b/7e591bc1783b92bd57359ea9972124e7.jpg" alt="Black Panther Poster" width="25%" >

                <img class="slider__images" src="https://www.joblo.com/assets/images/oldsite/posters/images/full/Deadpool-poster-8_thumb.jpg" alt="Deadpool Poster" width="25%">

                <img class="slider__images" src="https://images-na.ssl-images-amazon.com/images/I/91g0FjAsuVL._AC_SY679_.jpg" alt="Aquaman Poster" width="25%">

                <img class="slider__images" src="https://i.pinimg.com/originals/ac/43/ca/ac43ca8345fe59f889e4e4ef5dcf650d.png" alt="Logan Poster" width="25%">

                <img class="slider__images" src="https://images-na.ssl-images-amazon.com/images/I/61IkOeRQdlL._AC_SY741_.jpg" alt="Venom Poster" width="25%">

                <img class="slider__images" src="https://images-na.ssl-images-amazon.com/images/I/51J4w08ROJL._AC_.jpg" alt="Wonder Woman Poster" width="25%">

                <img class="slider__images" src="https://images-na.ssl-images-amazon.com/images/I/51UL0SttePL._AC_.jpg" alt="Spider-man Far from home Poster" width="25%">

            </div>

        </div>

        <div class="intro__content2" id="intro__content2">
            <p id="LatestNews">{{ __("Latest News")}}</p>
            <!-- <div class="intro__content2_inner">
                <div class="inner_block">
                    <div class="intro__content2_inner_text">
                        <h4 id="LatestNewsText">{{ __("Hometown Season 3 Shooting Has Begun, and We Took a Look Behind the Scenes")}}</h4>
                        <div class="date">
                        {{ __("November 18, 2020")}}
                        </div>
                    </div>
                    <div class="content2_text">
                        Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat officia deserunt.
                    </div>
                </div>
                <img class="content_img" src="https://demo.yootheme.com/joomla/templates/yootheme/cache/news-post-hometown-season-3-shooting-has-begun-intro-31092d11.webp" alt="" width="28%">
            </div> -->

            <div class="intro__content2_inner">
               <div class="inner_block">
                    <div class="intro__content2_inner_text">
                        <h4 id="LatestNewsText">{{ __("Joker Deepfake Video Replaces Joaquin Phoenix With Jim Carrey")}}</h4>
                        <div class="date">
                        {{ __("November 17, 2020")}}
                        </div>
                    </div>
                    <div class="content2_text">
                        {{ __("Joker deepfake video replaces Joaquin Phoenix with Jim Carrey. With over a billion grossed at the box office, Todd Phillips??? Joker became the most unlikely blockbuster of 2019. A lot of the credit for the movie???s success of course goes to Phoenix, who won an Oscar for his chilling portrayal of mentally ill wannabe-comic-turned-killer Arthur Fleck.")}}
                    </div>
                </div>
                <img class="content_img" src="https://static0.srcdn.com/wordpress/wp-content/uploads/2020/11/Jim-Carrey-As-Joker-Deepfake.jpg?q=50&fit=crop&w=960&h=500" alt="" width="28%">
            </div>

            <div class="intro__content2_inner">
               <div class="inner_block">
                    <div class="intro__content2_inner_text">
                        <h4 id="LatestNewsText">Captain America: Sam's Forgotten PTSD Story Is Why He's The Best New Cap</h4>
                        <div class="date">
                        November 16, 2020
                        </div>
                    </div>
                    <div class="content2_text">
                        One of the biggest creative decisions at the center of Marvel's Phase 4 is Sam Wilson's (Anthony Mackie) transition to the role of Captain America, and one of the character's earliest stories proves why it's a perfect choice. Steve Rogers (Chris Evans) legacy is one that carries a lot of weight in the MCU.
                    </div>
                </div>
                <img class="content_img" src="https://static3.srcdn.com/wordpress/wp-content/uploads/2020/11/Captain-America-Ryan-Meinerding-Anthony-Mackie-Sam-Wilson.jpg?q=50&fit=crop&w=960&h=500" alt="" width="28%">
            </div>

           <!--  <div class="intro__content2_inner">
               <div class="inner_block">
                    <div class="intro__content2_inner_text">
                        <h4 id="LatestNewsText">Home Alone Director Thinks Reboot Is A Waste Of Time</h4>
                        <div class="date">
                        November 15, 2020
                        </div>
                    </div>
                    <div class="content2_text">
                        Home Alone???at least that's the opinion of the director of the iconic original film, Chris Columbus. The streamer announced its Home Alone reboot last year, with news that the story would center on a new kid named Max played by Archie Yates and also feature comedy stars Ellie Kemper and Rob Delaney.
                    </div>
                </div>
                <img class="content_img" src="https://static0.srcdn.com/wordpress/wp-content/uploads/2020/10/Home-Alone.jpg?q=50&fit=crop&w=960&h=500" alt="" width="28%">
            </div>

            <div class="intro__content2_inner">
               <div class="inner_block">
                    <div class="<intro__conte></intro__conte>nt2_inner_text">
                        <h4 id="LatestNewsText">Marvel: RDJ Puts On The Infinity Gauntlet Again For Charity</h4>
                        <div class="date">
                        November 14, 2020
                        </div>
                    </div>
                    <div class="content2_text">
                        After Avengers: Endgame, Robert Downey Jr. puts on the Infinity Gauntlet again, this time for charity. The actor's time playing Iron Man in the MCU ended in 2019 when the superhero wielded the power of all six Infinity Stones to defeat Thanos; the move also resulted in his death.
                    </div>
                </div>
                <img class="content_img" src="https://static3.srcdn.com/wordpress/wp-content/uploads/2019/09/Avengers-Endgame-Tony-Stark-snap.jpg?q=50&fit=crop&w=960&h=500" alt="" width="28%">
            </div>

            <div class="intro__content2_inner">
               <div class="inner_block">
                    <div class="intro__content2_inner_text">
                        <h4 id="LatestNewsText">Zack Snyder???s Justice League Has A Robin Easter Egg</h4>
                        <div class="date">
                        November 13, 2020
                        </div>
                    </div>
                    <div class="content2_text">
                        Zack Snyder's Justice League features an Easter egg about the DCEU's Robin. Director Zack Snyder helmed the majority of the DCEU's early installments, in which he laid the groundwork for many more stories to come. Snyder's Justice League was poised to offer the payoff for previously established plots while also moving the DCEU forward even further.
                    </div>
                </div>
                <img class="content_img" src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/11/Justice-League-Snyder-Cut-Robin-Easter-egg.jpg?q=50&fit=crop&w=960&h=500" alt="" width="28%">
            </div> -->
        </div>

        <div class="trailers" id="trailers">
            <div class="trailers__inner">
                <p id="Trailers">New Trailers</p>
                <div class="trailers__content center">
                    <iframe height="300" src="https://www.youtube.com/embed/yGAktL45XNQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <iframe height="300" src="https://www.youtube.com/embed/xjDjIWPwcPU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <iframe height="300" src="https://www.youtube.com/embed/3Y9XeruN5RY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <iframe height="300" src="https://www.youtube.com/embed/N6AxRCP3e4s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <iframe height="300" src="https://www.youtube.com/embed/kP9TfCWaQT4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <iframe height="300" src="https://www.youtube.com/embed/CL0yUbSS5Eg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section_text">
                <div class="section_title">
                    News
                </div>
                <div class="section_text1">
                The Last Sunrise Is Breaking Box Office Records This Weekend ... Again
                </div>
                <a href="#" class="btn1 btn1--white" onclick="notReady()">Read More</a>
            </div>
            <div class="section_content">
                <img src="https://www.fussiletvakfi.org/wp-content/uploads/2019/05/fkm-4-1.jpg" width="100%" alt="">
            </div>
        </div>

        <!-- <div class="episodes">
            <p class="paragraph" id="episode">Latest Episodes</p>
            <div class="episodes_inner">
                <div class="episodes_item">
                    <img src="https://cdn130.picsart.com/312538783002201.jpg" alt="" width="180px">
                   <div class="episode_text">
                        <div class="episode_title">
                        The Night Watch Season 3 Episode 4 ??? In the Dark
                        </div>
                        <div class="episode_subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo...
                        </div>
                   </div>
                </div>

                <div class="episodes_item">
                    <img src="https://get.wallhere.com/photo/women-Emma-Watson-actress-brown-eyes-brunette-simple-background-red-background-Looking-into-the-distance-1195776.jpg" alt="" width="180px">
                   <div class="episode_text">
                        <div class="episode_title">
                        The Night Watch Season 3 Episode 4 ??? In the Dark
                        </div>
                        <div class="episode_subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo...
                        </div>
                   </div>
                </div>

                <div class="episodes_item">
                    <img src="https://www.platinumpropertiesnyc.com/app/uploads/2018/04/shutterstock_604874207.jpg" alt="" width="180px">
                   <div class="episode_text">
                        <div class="episode_title">
                        The Night Watch Season 3 Episode 4 ??? In the Dark
                        </div>
                        <div class="episode_subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo...
                        </div>
                   </div>
                </div>

                <div class="episodes_item">
                    <img src="https://4.404content.com/1/BC/E1/1012203803752793416/fullsize.jpg" alt="" width="180px">
                   <div class="episode_text">
                        <div class="episode_title">
                        The Night Watch Season 3 Episode 4 ??? In the Dark
                        </div>
                        <div class="episode_subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo...
                        </div>
                   </div>
                </div>
            </div>
        </div>
 -->
        <div class="footer">
            <div class="footer__intro">
                <div class="footer__title">
                    <p style="font-size: 20px">Subscribe to Our Newsletter</p>
                    <div class="footer__inner">
                        <input class="email" type="email" name="email" placeholder="Email address">
                        <a href="/send-mail">
                        <i class="far fa-envelope" onclick="checker(this)"></i>
                        </a>
                    </div>
                    <div id="checker"></div>
                </div>
                <div class="footer_link">
                    <div class="footer__links">
                        <p class="links">Movies</p>
                        <a class="links" href="#">Action</a>
                        <a class="links" href="#">Drama</a>
                        <a class="links" href="#">Science Fiction</a>
                        <a class="links" href="#">Fansaty</a>
                        <a class="links" href="#">Horror</a>
                    </div>
                    <div class="footer__links">
                        <p class="links">TV Shows</p>
                        <a class="links" href="#">The Night Watch</a>
                        <a class="links" href="#">Hometown</a>
                        <a class="links" href="#">Nerds</a>
                        <a class="links" href="#">The Good Girls</a>
                        <a class="links" href="#">Keat's Crew</a>
                        <a class="links" href="#">Corona</a>
                    </div>
                    <div class="footer__links">
                        <p class="links">Framerate</p>
                        <a class="links" href="#">About</a>
                        <a class="links" href="#">Terms of Use</a>
                        <a class="links" href="#">Nerds</a>
                    </div>
                </div>
            </div>

            <!-- <script>
            function initMap() {
                var pos = { lat: 43.238949 , lng: 76.889709 };
                var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 11,
                center: pos
                });

                var icon = {
                    url: "https://simpleicon.com/wp-content/uploads/film.png",
                    scaledSize: new google.maps.Size(25, 25)
                }

                var marker = new google.maps.Marker({
                    position: {lat: 43.22668808574535, lng: 76.86324278049757},
                    map: map,
                    icon: icon
                });

                var marker1 = new google.maps.Marker({
                    position: {lat: 43.201972628278625, lng: 76.892519063133},
                    map: map,
                    icon: icon
                });

                var marker2 = new google.maps.Marker({
                    position: {lat: 43.21831444913332, lng: 76.92810508370661},
                    map: map,
                    icon: icon
                });

                var marker3 = new google.maps.Marker({
                    position: {lat: 43.2323098106797, lng: 76.87926132456842},
                    map: map,
                    icon: icon
                });

                var polyCoor = [
                    { lat: 43.20051427819559, lng: 76.86908295969155 },
                    { lat: 43.20358109396473, lng: 76.88542092999585 },
                    { lat: 43.195453695140706, lng: 76.88766477141102 },
                    { lat: 43.19555593329557, lng: 76.87672604451203 },
                    { lat: 43.20041204834826, lng: 76.86936343986847 },
                ];

                var poly = new google.maps.Polygon({
                    paths: polyCoor,
                    strokeColor: "#111",
                    strokeWeight: 2,
                    fillColor: "#a2a2a2",
                    fillOpacity: 0.3,
                });
                poly.setMap(map);

                var content = "Moskva Metropoliten!";
                var content1 = "Mega Almaty";
                var content2 = "Esentai Mall";
                var content3 = "ADK";

                placeDesc(marker, content);
                placeDesc(marker1, content1);
                placeDesc(marker2, content2);
                placeDesc(marker3, content3);

                function placeDesc(marker, message) {
                    var infowindow = new google.maps.InfoWindow({
                    content: message
                  });
                  marker.addListener('click', function() {
                    event.preventDefault();
                    infowindow.open(marker.get("map"), marker);
                    });
                }
            }

            </script> -->

        <!-- <div class="location">
            <div id="map"></div>
        </div> -->

            <hr>
            <div class="end">
                <h5>?? 2020 Framerate. Powered by <span>Zhuandyk Sultan</span></h5>
            </div>
        </div>
        <script>
        setTimeout(function(){
            document.getElementById('block').style.display = 'none';
        }, 3000);
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
        <script src="/js/script.js"></script> <!-- Connect the javascript file -->
    </body>
</html>
