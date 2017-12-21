<html>
<head>
    <title>高鐵訂票系統</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/main.css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo --><!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">

            <ul>
                <li><a href="index1.php">首頁</a></li>
                <li><a href="search-POST.php">高鐵</a></li>
                <li><a href="aboutus.php">關於我們</a></li>
                <!--<li><a href="generic.html">登入</a></li>-->
                <!--<li><a href="generic.html">訂票紀錄</a></li>-->
                <li><a href="cutser.php">線上客服</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <header>
                    <h1>歡迎進入高鐵訂票系統</h1>
                    <p>我們專注於為您致上最真誠的服務</p>
                </header>
                <section class="tiles">
                    <article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
                        <a href="search-POST.php">
                            <h2>台灣高鐵</h2>
                        </a>
                    </article>
                    <article class="style6"></article>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="https://www.facebook.com" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                        <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                    </ul>
                </section>

            </div>
        </footer>
    </div>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
