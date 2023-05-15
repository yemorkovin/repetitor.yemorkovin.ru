<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <title>Репетитор по информатике и программированию</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/resources/img/favicon.png">
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/resources/css/magnific-popup.css">
    <link rel="stylesheet" href="/resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="/resources/css/themify-icons.css">
    <link rel="stylesheet" href="/resources/css/nice-select.css">
    <link rel="stylesheet" href="/resources/css/flaticon.css">
    <link rel="stylesheet" href="/resources/css/gijgo.css">
    <link rel="stylesheet" href="/resources/css/animate.css">
    <link rel="stylesheet" href="/resources/css/slicknav.css">
    <link rel="stylesheet" href="/resources/css/style.css">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(93118193, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/93118193" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<style>
    .btn-block {
    margin: 100px auto;
    width: 80%;
    text-align: center;
}
/* сами кнопы демо */

.btn {
    display: inline-block;
    margin: 5px;
    padding: 0.5rem 1rem;
    outline: 0px none;
    border: medium none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: #26A69A;
    background-clip: padding-box;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: .8em;
    font-weight: 300;
    cursor: pointer;
    -webkit-transition: 0.2s ease-out;
    -moz-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    transition: 0.2s ease-out;
}
.btn:hover {
    background-color: #2bbbad;
    color: #f5f5f5;
}
/* Стили модального окна и содержания 
-------------------------------------------------------------------------------*/

/* слой затемнения */

.dm-overlay {
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.65);
    display: none;
    overflow: auto;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
/* активируем модальное окно */

.dm-overlay:target {
    display: block;
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
}
/* блочная таблица */

.dm-table {
    
    display: table;
    width: 100%;
    height: 100%;
}
/* ячейка блочной таблицы */

.dm-cell {
    display: table-cell;
    padding: 0 1em;
    vertical-align: middle;
    text-align: center;
}
/* модальный блок */

.dm-modal {
    display: inline-block;
    padding: 20px;
    max-width: 50em;
    background: #607d8b;
    -webkit-box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    color: #fff;
    text-align: left;
}
/* изображения в модальном окне */

.dm-modal img {
    width: 100%;
    height: auto;
}
/* миниатюры изображений */

.pl-left,
.pl-right {
    width: 25%;
    height: auto;
}
/* миниатюра справа */

.pl-right {
    float: right;
    margin: 5px 0 5px 15px;
}
/* миниатюра слева */

.pl-left {
    float: left;
    margin: 5px 15px 5px 0;
}
/* встраиваемое видео в модальном окне */

.video {
    position: relative;
    overflow: hidden;
    padding-bottom: 56.25%;
    height: 0;
}
.video iframe,
.video object,
.video embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
/* рисуем кнопарь закрытия */

.close {
    z-index: 9999;
    float: right;
    width: 30px;
    height: 30px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    line-height: 26px;
    cursor: pointer;
}
.close:after {
    display: block;
    border: 2px solid #cfd8dc;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    content: 'X';
    -webkit-transition: all 0.6s;
    -moz-transition: all 0.6s;
    transition: all 0.6s;
    -webkit-transform: scale(0.85);
    -moz-transform: scale(0.85);
    -ms-transform: scale(0.85);
    transform: scale(0.85);
}
/* кнопка закрытия при наведении */

.close:hover:after {
    border-color: #fff;
    color: #fff;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
/* варианты фонвой заливки модального блока */

.green {
    background: #388e3c!important;
}
.cyan {
    background: #0097a7!important;
}
.teal {
    background: #00796b!important;
}
/* движуха при появлении блоков с содержанием */

@-moz-keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1
    }
}
@-webkit-keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1
    }
}
@keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1
    }
}

input[type="text"],input[type="password"], input[type="tel"], input[type="email"]{
	width: 96%;
    height: 50px;
    background: transparent;
    border: 1px solid #D4D4C8;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0 17px;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    margin: 15px 5px;
    outline: 0;
    outline-offset: 0;
    color: #fff;
}
.form_main{
	width: 350px;
	color: #fff;
}
input[type='submit']{
	margin: 23px 0 0;
    padding-top: 0;
    padding-bottom: 0;
    height: 40px;
    background-color: #BA1735; 
    align-items: center;
    justify-content: center;
    color: #fff;
 	width: 96%;
 	cursor: pointer;
 	font-weight: bolder;
 	border: none;
 	margin: 5px;
 	font-size: 18px;
}

input:focus {
	
    border-bottom: 2px solid #BA1735;
}
</style>
</head>
<body>
   
    <header>
        <div class="header-area " >
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span><a href="mailto:admin@yemorkovin.ru">admin@yemorkovin.ru</a></span></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="/resources/img/logo.png" width="320px" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block" >
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#main">Главная</a></li>
                                                <li><a href="#about" >О <span style="text-transform: lowercase">репетиторе</span></a></li>
                                                <li><a href="#courses">Курсы</a></li>
												<li><a href="#prices">Стоимость</a></li>
                                                <li><a href="#otzivi">Отзывы</a></li>
                                                <li><a href="{{ url('calandar') }}">Расписание</a></li>
                                                @if (Auth::check())

                                                   <li><a href="{{ url('admin') }}">Админ панель</a></li> 
                                                <li><a href="{{ url('logout') }}">Выход</a></li>
                                                

                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="dm-overlay" id="win1">
        <div class="dm-table">
            <div class="dm-cell">
                <div class="dm-modal" style="color: #fff">
                    <a href="#close" class="close"></a>
                    <?php
                        if(isset($_GET['suc'])){
                            if($_GET['suc'] == 1){
                                echo "<h2 style='color: #fff'>Спасибо за оставленную заявку! Репетитор с Вами свяжется в ближайщее время!</h2>";
                            }
                        }else{
                    ?>
                    <form action="server.php" method="post" class="form_main">
			<div>
				<input type="text" name="name" id="name" placeholder="Ваше имя" required>
			</div>
			<div>
				<input type="text" name="tel" id="tel" placeholder="Ваш телефон" required>
			</div>
			<div>
				<input type="email" name="email" id="email" placeholder="Email" required>
			</div>
			<div>
				<input type="submit" name="sub" id="btn" />
			</div>
		</form>
		<?php 
                        }
		?>
                </div>
            </div>
        </div>
    </div>
    <script src="/resources/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/resources/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/resources/js/popper.min.js"></script>
    <script src="/resources/js/bootstrap.min.js"></script>
    <script src="/resources/js/owl.carousel.min.js"></script>
    <script src="/resources/js/isotope.pkgd.min.js"></script>
    <script src="/resources/js/ajax-form.js"></script>
    <script src="/resources/js/waypoints.min.js"></script>
    <script src="/resources/js/jquery.counterup.min.js"></script>
    <script src="/resources/js/imagesloaded.pkgd.min.js"></script>
    <script src="/resources/js/scrollIt.js"></script>
    <script src="/resources/js/jquery.scrollUp.min.js"></script>
    <script src="/resources/js/wow.min.js"></script>
    <script src="/resources/js/nice-select.min.js"></script>
    <script src="/resources/js/jquery.slicknav.min.js"></script>
    <script src="/resources/js/jquery.magnific-popup.min.js"></script>
    <script src="/resources/js/plugins.js"></script>
    <script src="/resources/js/gijgo.min.js"></script>
    <script src="/resources/js/contact.js"></script>
    <script src="/resources/js/jquery.ajaxchimp.min.js"></script>
    <script src="/resources/js/jquery.form.js"></script>
    <script src="/resources/js/jquery.validate.min.js"></script>
    <script src="/resources/js/mail-script.js"></script>
    <script src="/resources/js/main.js"></script>
</body>

</html>