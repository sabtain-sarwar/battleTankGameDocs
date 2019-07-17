<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Tank Battle Game</title>

    <!-- Favicon -->
    <link rel="shorcut icon" type="img/x-icon" href="img/tank.PNG">
    <link rel="icon" type="image/png" href="img/tank.PNG">

    <link rel="stylesheet" type="text/css" href="{{asset('css/front.css')}}">

    <script type="text/javascript" src="{{asset('js/front.js')}}"></script>
</head>
<body>

<header class="header-main">
    <div class="header">
        <figure class="main-logo">
            <a href="#"><img src="img/tank.PNG" alt="Logo Of Website"></a>
        </figure>
        <h1 class="header__primary-heading">Welcome To the Battle Tank Game</h1>
        <h2 class="header__secondary-heading">We are  bachelor's that loves crafting beautiful games.</h2>
        <a class="header__btn" href="{{url('/docs')}}">Documentation</a>
    </div>
</header>

<nav class="navigation-main">
    <div class="navigation">

        <!-- For Mobile Better Display -->

        <div class="close__nav">
            <button class="close__nav--btn"><i class="close__nav--icon fas fa-bars"></i></button>
        </div>

        <ul class="main-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#scenario">Game Scenario's</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li class="small-logo"><a href="#"><img src="img/tank.PNG" class="small-navi" alt="Small Navigation Icon"></a></li>
            <li><a href="#customer">Clients</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact-us">Contact</a></li>
            @if(Auth::user())
                <li><a href="{{ route('logout') }}">Logout</a></li>
            @else
                <li><a href="{{route('login')}}">Login</a></li>
            @endif
            @if(Auth::user())
                <li><a href="/admin">Admin</a></li>
            @endif
        </ul>
    </div>
</nav>

<section class="services-main section--lg--padding" id="scenario">

    <h1 class="services__primary--heading">Game Scenario's</h1>
    <h2 class="services__secondary--heading">Battle Tank consists of 3 scenarios, or missions. Each one contains a
        specific goal that you must complete in order for the mission to be successful.
    </h2>

    <div class="row">
    <div class="container-fluid">
        <div class="services">
            <div class="small-box-main">
                <div class="small-box">
                    <div class="small-box__icon-main">
                        <i class="small-box__icon fas fa-paw"></i>
                    </div>
                    <div class="small-box__text">
                        <h3>Escape Room</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>

                <div class="small-box">
                    <div class="small-box__icon-main">
                        <i class="small-box__icon fas fa-cog"></i>
                    </div>
                    <div class="small-box__text">
                        <h3>The Secret Ending - Where To Find Orbs </h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                    </div>
                </div>

                <div class="small-box">
                    <div class="small-box__icon-main">
                        <i class="small-box__icon fab fa-apple"></i>
                    </div>
                    <div class="small-box__text">
                        <h3>Battle Tank</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
            </div>
            <figure class="services__img">
                <img src="img/Featured-tank.png" class="featured-tank"  alt="Macbook-pro Image">
            </figure>
        </div>
        </div>
    </div>
</section>

<section class="featured__work--main section--lg--padding">
    <div class="row">
        <div class="featured__work">

            <figure class="featured__work--img">
                <img src="img/start-game.png" class="start-game" alt="Iphone Image">
            </figure>

            <div class="featured__work--content--main">
                <h2 class="featured__work--primary-heading">Featured Work</h2>
                <p class="featured__work--primary-pra">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</p>

                <div class="featured__work--content">

                    <div class="featured__work--box">
                        <div class="featured__work--box--icon-main animation-delay02">
                            <i class="featured__work--box--icon fas fa-magic"></i>
                        </div>
                        <div class="featured__work--box--text animation-delay02">
                            <h3> start, pause or end the game</h3>
                            <p>The user opens the main menu and then click on the start button and the game will turn on.When the
                                player click on the P button form the keyboard, the pause menu will appeard.When the player
                                click on the exit button  then the game will be terminated.
                            </p>
                        </div>
                    </div>

                    <div class="featured__work--box">
                        <div class="featured__work--box--icon-main animation-delay04">
                            <i class="featured__work--box--icon fas fa-gift"></i>
                        </div>
                        <div class="featured__work--box--text animation-delay04">
                            <h3>Third person camera view</h3>
                            <p>When the player click on the M button form the keyboard, the third person view will get enabled and
                                1st person gets disabled. 3rd person view gives us the zoom-inability.
                            </p>
                        </div>
                    </div>

                    <div class="featured__work--box">
                        <div class="featured__work--box--icon-main animation-delay06">
                            <i class="featured__work--box--icon fas fa-tachometer-alt"></i>
                        </div>
                        <div class="featured__work--box--text animation-delay06">
                            <h3> able to Grab the objects</h3>
                            <p>The player can grabs the objects by just pressing the right mouse button.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="portfolio--main section--lg--padding" id="portfolio">
    <div class="row">
        <h2 class="services__primary--heading portfolio__primary--heading" style="width: 100%">Portfolio</h2>
        <h6 class="services__secondary--heading portfolio__secondary--heading" style="width: 100%">Fresh portfolio of Game Levels that will keep you wanting more.</h6>
        <div class="portfolio">
            <ul class="portfolio__btn--ul">
                <li><a class="active" href="#">All</a></li>
            </ul>

            <div class="portfolio__detail--main">

                <div class="portfolio__detail">
                    <a href="#"><img src="img/escape-room.png"></a>
                    <h3>Escape Room</h3>
                    <p>Level 1</p>
                </div>

                <div class="portfolio__detail">
                    <a href="#"><img src="img/orbs.png"></a>
                    <h3>Finding Orbs</h3>
                    <p>Level 2</p>
                </div>

                <div class="portfolio__detail">
                    <a href="#"><img src="img/tank-1.png"></a>
                    <h3>Tank Battle</h3>
                    <p>Level 3</p>
                </div>

                <div class="portfolio__detail">
                    <a href="#"><img src="img/third-person-view.png"></a>
                    <h3>Third Person view</h3>
                    <p>Design</p>
                </div>

                <div class="portfolio__detail">
                    <a href="#"><img src="img/Game-over.png"></a>
                    <h3>game over menu</h3>
                    <p>Design</p>
                </div>

                <div class="portfolio__detail">
                    <a href="#"><img src="img/start-game.png"></a>
                    <h3>game start menu</h3>
                    <p>Design</p>
                </div>

            </div>

        </div>
    </div>
</section>


<section class="customer--main section--lg--padding" id="customer">
    <div class="row">
        <div class="customer" style="width: 100%">
            <strong class="quote__right--main"><i class="quote__right fas fa-quote-right"></i></strong>
            <p class="customer__pra">
                It was a pleasure in playing this game.Great Game, quick actions and easy controls.
            </p>
        </div>
        <ul class="customer--detail" style="width: 100%">
            <li><a href="#"><img src="img/arslan.jpg" class="client"></a></li>
            <li><h3>Arslan Maqsood</h3></li>
            <li><span>Electrical Engineer</span></li>
        </ul>
    </div>
</section>

<section class="c-logo-part--main">
    <div class="row">
        <div class="c-logo-part" style="width: 100%">
            <ul class="c-logo-list">
                <li><a href="#"><img src="img/ue4.png" class="tools"></a></li>
                <li><a href="#"><img src="img/c++.png" class="tools"></a></li>
                <li><a href="#"><img src="img/vs.png" class="tools"></a></li>
                <li><a href="#"><img src="img/github.jpg" class="tools"></a></li>
                <li><a href="#"><img src="img/epic-games-launcher.png" class="tools"></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="team--main section--lg--padding" id="team">
    <div class="row">
        <h1 class="team__primary-heading" style="width: 100%">Team</h1>
        <h2 class="team__secondary-heading" style="width: 100%">Take a closer look into our amazing team. We won’t bite.</h2>
        <div class="team">

            <div class="team__leader--main">

                <div class="team__leader animation-delay03-team">
                    <img src="img/sabtain.jpg" alt="Team Leader Photo">
                    <h3>Sabtain Sarwar</h3>
                    <span>Team Leader</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
                    </p>
                </div>

                <div class="team__leader animation-delay06-team">
                    <img src="img/mubashir.jpg" alt="Process Manager Photo">
                    <h3>Mubashir Sajjaid</h3>
                    <span>Process Manager</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
                    </p>
                </div>

                <div class="team__leader animation-delay09-team">
                    <img src="img/jahangir.jpg" alt="Planning Manager Photo">
                    <h3>Jahangir Yasin</h3>
                    <span>Planning Manager</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="business-talking--main">
    <div class="row">
        <div class="business-talking" style="width: 100%">
            <h1 class="business__talking--heading">Play and Enjoy the Game.</h1>
        </div>
    </div>
</section>

<section class="contact-main section--lg--padding" id="contact-us">
    <div class="row">
        <div class="contact" style="width: 100%">

            <div class="contact--info">

                <div class="contact--info--box " style="justify-content: center">
                    <h3><i class="fas fa-map-marker-alt"></i> Address:</h3>
                    <span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>

                <div class="contact--info--box" style="justify-content: center; margin-left:-10rem">
                    <h3><i class="fas fa-phone"></i> Phone:</h3>
                    <span>1-800-BOO-YAHH</span>
                </div>

                <div class="contact--info--box" style="justify-content: center; margin-left:-6rem">
                    <h3><i class="fas fa-pen"></i> Email:</h3>
                    <span>hello@example.com</span>
                </div>

                <div class="contact--info--box" style="justify-content: center">
                    <h3><i class="far fa-clock"></i> Hours:</h3>
                    <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>

                <ul class="contact__social--links">
                    <li><a class="twitter" href="#"><i class="contact__social-icon fab fa-twitter"></i></a></li>
                    <li><a class="facebook" href="#"><i class="contact__social-icon fab fa-facebook-f"></i></a></li>
                    <li><a class="pinterest" href="#"><i class="contact__social-icon fab fa-pinterest"></i></a></li>
                    <li><a class="google" href="#"><i class="contact__social-icon fab fa-google-plus-g"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="contact__social-icon fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer class="footer-main">
    <div class="row">
        <div class="footer" style="width: 100%">
            <div class="footer-logo">
                <img src="img/tank.PNG" alt="Footer Logo">
            </div>
            <span class="copyright">&copy; All Rights Reserved</span>
            <div class="credits">
                <p><a href="#">Battle Tank</a> by <a href="#">our Team Members</a>, 2019</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>