<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>About Us</title>
        <link rel="shortcut icon" href="asset/images/logo.png">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
        <meta name="keywords" content="jquery, slide out,accordion, css3, fadeout, fadein, elegant, fancy, box shadow"/>
        <link rel="stylesheet" href="dist/css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background:#fff url(asset/images/pattern.png) repeat top left;
                opacity: 0.4px;
            }
            a{
                color:#444;
            }
            a:hover{
                color:#999;
            }
            .title{
                width:100%;
                height:100%;
                position:absolute;
                top:0px;
                left:0px;
                background:transparent url(asset/images/650px.jpg) no-repeat center;
                opacity: 0.3;
            }
            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }
            .reference{
                clear:both;
                top:100px;
                left:0px;
                position:absolute;
                text-align:right;
                width:400px;
                padding:20px;
                background-color:#fff;
                -moz-box-shadow:1px 3px 15px #ddd;
                -webkit-box-shadow:1px 3px 15px #ddd;
                box-shadow:1px 3px 15px #ddd;
            }
            .reference p a{
                text-transform:uppercase;
                text-shadow:1px 1px 1px #fff;
                color:#666;
                text-decoration:none;
                font-size:10px;
                /*margin-top: -100px: */
            }
            .reference p a:hover{
                color:#333;
            }

        </style>
    </head>

    <body>
        <div id="content">
            <!-- <a class="back" href="http://tympanus.net/codrops/2010/04/26/elegant-accordion-with-jquery-and-css3/"></a> -->
            <a href="home.php"><div class="title"></div></a>
            <div class="reference" style="opacity: 0.7">
                <a class="navbar-brand" href="home.php">
                <img src="asset/images/logo.png" width="50" height="50" alt="home">
                </a>
            <center><p>JSN-DEV</p></center><br><br>
               University Admission website is a website that provides information about university program, admission, as well as admission service for multiple private university in Indonesia. University admission website developed by JSN-DEV team from Politeknik Negeri Jakarta that consist of 3 members, Jihada Amalia, Nadiah Nurul Aulia, and Suci Ana Lathifah.
            </div>


            <ul class="accordion" id="accordion">
                <li class="bg1">
                    <div class="heading">Jihada</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>Jihada Amalia</h2><br>
                        <p>Currently a last year student of Informatics Engineering major in Jakarta State Polytechnic. One of her dream is to be able to contribute to the society using her area of expertise. Both back-end and front-end programmer and also as has a strong interest in designing app. A reader for almost anything, girl who passionate in english, and have a great interest in exploring new places.</p>
                    </div>
                </li>
                <li class="bg2">
                    <div class="heading">Nadiah</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>Nadiah Nurul Aulia </h2>
                        <p>IT Student of Politeknik Negeri Jakarta Mahasiswi who has interest in website development especially front end/web design development. Eager to learn new framework and technology. And able to use Joomla, Laravel, and Ckan.</p>
                    </div>

                </li>
                <li class="bg3">
                    <div class="heading">Suci</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>Suci Ana Lathifah</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur.</p>
                    </div>

                </li>
            </ul>
        </div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#accordion > li').hover(
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'480px'},500);
                        $('.heading',$this).stop(true,true).fadeOut();
                        $('.bgDescription',$this).stop(true,true).slideDown(500);
                        $('.description',$this).stop(true,true).fadeIn();
                    },
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'115px'},1000);
                        $('.heading',$this).stop(true,true).fadeIn();
                        $('.description',$this).stop(true,true).fadeOut(500);
                        $('.bgDescription',$this).stop(true,true).slideUp(700);
                    }
                );
            });
        </script>
    </body>
</html>