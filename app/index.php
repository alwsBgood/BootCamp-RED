<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<script>
 dataLayer = [];
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHTZRB');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8">

    <title>ВootCamp RED</title>

    <meta name="description" content="Регистрируйтесь на BootCamp RED — спасайте жизнь. Образовательная компания «СОЛЬ» сотрудничает с украинским благотворительным фондом «Таблеточки»">
    <meta name="keywords" content="">

    <meta property="og:description" content="Регистрируйтесь на BootCamp RED — спасайте жизнь. Образовательная компания «СОЛЬ» сотрудничает с украинским благотворительным фондом «Таблеточки»"" />

    <meta property="og:image" content="http://allinsol.com/bootcampred/img/og.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:site_name" content="BootCamp RED"/>
    <meta property="og:title" content="ВootCamp RED" />
    <meta property="og:url" content=""/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#a71c2a">




    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{height:100%;margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}a,button,input,textarea{text-decoration:none;outline:0;border:0;-webkit-transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease;transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease}a:focus,button:focus,input:focus,textarea:focus{outline:0}input,textarea{-webkit-box-sizing:border-box;box-sizing:border-box}textarea{resize:none}button:hover,a:hover{cursor:pointer}</style>

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

    <!-- FONTS+HEADER -->
    <style>@font-face{font-family:"Roboto";font-style:normal;font-weight:400;src:url(fonts/Roboto.woff2) format("woff2"),url(fonts/Roboto.woff) format("woff")}@font-face{font-family:"Roboto-Black";font-style:normal;font-weight:400;src:url(fonts/Roboto-Black.woff2) format("woff2"),url(fonts/Roboto-Black.woff) format("woff")}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(a){"use strict";function b(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function c(b,c){return a.localStorage&&localStorage[b+"_content"]&&localStorage[b+"_file"]===c}function d(b,d){if(a.localStorage&&a.XMLHttpRequest)c(b,d)?f(localStorage[b+"_content"]):e(b,d);else{var h=g.createElement("link");h.href=d,h.id=b,h.rel="stylesheet",h.type="text/css",g.getElementsByTagName("head")[0].appendChild(h),g.cookie=b}}function e(a,b){var c=new XMLHttpRequest;c.open("GET",b,!0),c.onreadystatechange=function(){4===c.readyState&&200===c.status&&(f(c.responseText),localStorage[a+"_content"]=c.responseText,localStorage[a+"_file"]=b)},c.send()}function f(a){var b=g.createElement("style");b.setAttribute("type","text/css"),g.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=a:b.innerHTML=a}var g=a.document;a.loadCSS=function(a,b,c){var d,e=g.createElement("link");if(b)d=b;else{var f;f=g.querySelectorAll?g.querySelectorAll("style,link[rel=stylesheet],script"):(g.body||g.getElementsByTagName("head")[0]).childNodes,d=f[f.length-1]}var h=g.styleSheets;e.rel="stylesheet",e.href=a,e.media="only x",d.parentNode.insertBefore(e,b?d:d.nextSibling);var i=function(a){for(var b=e.href,c=h.length;c--;)if(h[c].href===b)return a();setTimeout(function(){i(a)})};return e.onloadcssdefined=i,i(function(){e.media=c||"all"}),e},a.loadLocalStorageCSS=function(e,f){c(e,f)||g.cookie.indexOf(e)>-1?d(e,f):b(a,"load",function(){d(e,f)})}}(this);</script>

<!--     <link rel="stylesheet" href="css/fonts.css"> -->
    <link rel="stylesheet" href="css/header.css">
    <!-- Load CSS Start -->
    <script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/main.css">
    </noscript>

</head>
<body data-img="img/land.jpg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHTZRB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="bar-long"></div>
<div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>


<div id="sec_01">
    <div class="wrap"></div>
    <div class="container">
        <div class="col-12 tc">
            <a target="_blank" href="http://allinsol.com/bootcamp/"><img src="img/logo_top.png" alt="Соль" class="logo"></a>
            <h1 class="text--title">ВootCamp <span>RED</span></h1>
            <p class="text_white">Special edition</p>
            <p class="afterheader title text--title">Регистрируйтесь на BootCamp RED — <br> спасайте жизнь</p>
            <a target="_blank" href="http://allinsol.com/bootcamp/" class="text_sm">Подробнее о BootCamp</a>
        </div>
    </div>
    <img src="img/bl1-img3-png.png" alt="Ручка" class="mobile sec_img-1">
    <img src="img/bl1-img1-png.png" alt="Блокнот" class="mobile sec_img-2">
</div>


<div id="sec_02">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <img src="img/line.png" alt="Разделитеь" class="line">
                <p class="text--title title text--red">Образовательная компания «СОЛЬ» <br> сотрудничает с украинским благотворительным <br> фондом «Таблеточки»</p>
                <img src="img/line.png" alt="Разделитеь" class="line">
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <p class="text">«Таблеточки» защищают интересы детей с онкологическими <br>заболеваниями. Фонд оплачивает операции, которые проводятся  <br> не в Украине, ремонтирует онкогематологические отделения больниц, <br> развивает волонтерское и донорское движение. За пять лет работы <br> фонда, помощь получили более 6000 детей. </p>
            </div>
            <div class="col-5">
                <img src="img/bl2-img1-png.png" alt="Благотворительный фонд Таблеточки" class="sec_img">
            </div>
        </div>
    </div>
</div>

<div id="sec_03">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <img src="img/line.png" alt="Разделитеь" class="line">
                <p class="text--title title text--red">С продажи каждого интенсива BootCamp RED <br> мы перечисляем часть средств в «Таблеточки»</p>
                <img src="img/line.png" alt="Разделитеь" class="line">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <img src="img/bl3-img1-png.png" alt="Благотворительный фонд Таблеточки" class="sec_img">
            </div>
            <div class="col-7">
                <p class="text">Каждый участник BootCamp RED Special Edition <br> получит красную папку с нужными для интенсива бумагами <br> и красную чашку для воды, как символ помощи детям. <br> Программа BootCamp RED ничем не отличается от наполнения предыдущих BootCamp.</p>
            </div>
        </div>
    </div>
</div>

<div id="sec_04">
    <div class="container">
        <div class="row">
            <div class="col-6 col-offset-1">
                <p class="text--title title text--red">Регистрируйтесь на BootCamp RED</p>
                <p class="text">Ваша покупка может помочь приобрести <br> оборудование для больниц,оплатить операцию <br> или купить лекарства для детей. </p>
                <a target="_blank" href="http://allinsol.com/bootcamp/" class="text_sm">Подробнее о BootCamp</a>
            </div>
            <div class="col-5">
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">

                    <!-- Hidden DB Fields -->

                    <input type="hidden" id="registrationType" name="registrationType" value="default_registration">
                    <input type="hidden" id="orderType" name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- Zoho -->
                    <input type="hidden" name="product_id" value="2167809000001919115">
                    <input type="hidden" name="product_name" value="Bootcamp RED">
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="BootCamp RED">
                    <input type="hidden" name="admin_email" value="manager.meetup@gmail.com">
                    <input type="hidden" name="form_type" value="Заявка BootCamp RED">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="name" required=""  placeholder="Ваше имя " />
                        <span class="bar"></span>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1805884529" required="">
                        <span class="bar"></span>
                    </span>

            <!--         <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="email" class="form-control">
                        <span class="bar"></span>
                    </span>
 -->


                    <button type="submit" class="btn" name="send"><span>Я ИДУ НА BOOTCAMP RED</span></button>

                    <div class="clear"></div>

                </form>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="politics">
                    <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                    <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                    <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                </div>
            </div>
            <div class="col-2">
                <a class="logo_rezart" target="_blank" href="http://rezart.com.ua/"><img src="img/logo-rezart.png" alt="" ></a>
                <a class="footer-fire" target="_blank" href="http://willcatchfire.com/"></a>
            </div>
        </div>
    </div>
</footer>


<div class="hidden">
    <div class="md-modal md-effect-1" id="modal_callback">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="colored">Заказ обратного звонка</h2>
            </div>
            <div>
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                    <!-- Hidden DB Fields -->

                    <input type="hidden" id="registrationType" name="registrationType" value="default_registration">
                    <input type="hidden" id="orderType" name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- Zoho -->
                <!--     <input type="hidden" name="product_id" value="1212">
                    <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;"> -->
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="CompanyName">
                    <input type="hidden" name="admin_email" value="manager.meetup@gmail.com">
                    <input type="hidden" name="goal" value="conversion_1">
                    <input type="hidden" name="form_type" value="firstForm ">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="name" required=""  placeholder="Ваше имя " />
                        <span class="bar"></span>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="phone" required="">
                        <span class="bar"></span>
                    <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
                    </span>


                    <button type="submit" class="btn" name="send" data-text="Перезвоните мне">Перезвоните мне</button>

                    <!-- Просто любое дополнительное поле -->
                    <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                    <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                    <input type="hidden" class="pacet" name="form_pacet" value="">
                    <!-- GET RESPONCE INPUTS -->
                    <input type="hidden" name="start_day" value="0"/>
                    <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                    <input type="hidden" name="campaign_token" value=""/>
                    <!-- GET RESPONCE INPUTS -->
                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>


    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content tl">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в &laquo;Согласии с рассылкой&raquo;</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content tl">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с &laquo;Отказом от ответственности&raquo; и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content tl">
                <p>Заполняя форму на нашем сайте &mdash; вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <h2>Ваше сообщение успешно отправлено.</h2>
                <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
            </div>
        </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
  </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Load Scripts Start -->
    <script>var scr = {"scripts":[
        {"src" : "http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU", "async" : false},
        {"src" : "js/libs.js", "async" : false},
        {"src" : "js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
    <!-- Load Scripts End -->

</body>
</html>
