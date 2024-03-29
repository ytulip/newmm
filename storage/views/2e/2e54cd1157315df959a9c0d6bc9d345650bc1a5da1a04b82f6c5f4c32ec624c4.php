<?php

/* _layout/index_new2.html */
class __TwigTemplate_4b890d639caacb2d3444956f769cb1055468c3830008f574746359ce0761937f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'loading_title' => array($this, 'block_loading_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>DORRR</title>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement(\"script\");
            hm.src = \"https://hm.baidu.com/hm.js?3bc3fd956a80e2f2f363551db82e0413\";
            var s = document.getElementsByTagName(\"script\")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('versionfile')->getCallable(), array("/public/assets/css/bootstrap.css"));
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('versionfile')->getCallable(), array("/public/assets/css/font-awesome.css"));
        echo "
    ";
        // line 19
        echo call_user_func_array($this->env->getFunction('versionfile')->getCallable(), array("/public/css/work.css"));
        echo "
    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('versionfile')->getCallable(), array("/public/css/animate.css"));
        echo "

    <style>
        a{text-decoration: none !important;}
    </style>
    <style>
        body{
            font-family: \"微软雅黑\", serif;
        }
        .sandbox{padding: 25px;}
        .sandbox-header{display: flex;}
        .sandbox-header > div{
            flex: 1;
            height: 34px;
        }

        .logo-wrapper{text-align: left}
        .menu-wrapper{text-align: right}
        .sandbox-header a{overflow: hidden;display: inline-block;height: 100%;}
        .sandbox-header img{height: 100%;}

        .sandbox-section{text-align: center;padding: 27px 0;}
        .work-panel{
            width: auto;
            margin: 0 auto;
            display: inline-block;
        }

        .one-item{
            display: inline-block;
            width: auto;
        }

        .one-item > div{
            display: inline-block;
        }

        .one-item-right{margin-left: 40px;}
        .one-item ::after{word-wrap: break-word;}
        .one-horizontal{
            margin-top: 17px;
        }

        .one-horizontal > div{
            display: inline-block;
            margin-left: 20px;
        }

        .one-horizontal{
            vertical-align: middle;
        }

        .one-horizontal label{
            font-family: PingFangSC-Regular;
            font-size: 14px;
            color: #333333;
            line-height: 14px;
            margin-bottom: 0;
            font-weight: normal;
        }

        .one-horizontal select{

        }

        .one-horizontal input,.one-horizontal textarea,.one-horizontal select{
            background: #FFFFFF;
            border: 1px solid #979797;
            border-radius: 2px;
            padding: 6px;
        }

        .one-horizontal select{
            width: 140px;
        }

        .one-horizontal input,.one-horizontal textarea{
            width: 460px;
        }

        #upload:hover{
            background: #FFD4D4 !important;
        }

        .veil a{
            /*font-family: FZLTXHB--B51-0;*/
            /*font-size: 27px;*/
            /*color: #000000;*/
        }

        .menu-list li{
            /*margin-bottom: 12px;*/
            line-height: 86px;
        }

        .sandbox-header span{
            font-family: \"Arial\", sans-serif,微软雅黑;
            font-size: 26px;
            color: #ffffff;
        }

        @media only screen and (max-width: 540px) {
            .sandbox-header span{
                font-size: 20px;
            }
        }

        .body-padding{padding-top: 0;}

        .hamburger{
            /*opacity: 0;*/
        }

        .hamburger .line{
            width: 30px;
            height: 4px;
            background-color: #000;
            display: block;
            margin: 5px auto;
            -webkit-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .hamburger .line:nth-child(1)
        {
            margin-top: 2px;
        }

        .hamburger .line:nth-child(3)
        {
            margin-bottom: 2px;
        }

        .hamburger:hover{
            cursor: pointer;
        }

        #hamburger-1.is-active .line:nth-child(2){
            opacity: 0;
        }

        #hamburger-1.is-active .line:nth-child(1){
            -webkit-transform: translateY(9px) rotate(45deg);
            -ms-transform: translateY(9px) rotate(45deg);
            -o-transform: translateY(9px) rotate(45deg);
            transform: translateY(9px) rotate(45deg);
        }

        #hamburger-1.is-active .line:nth-child(3){
            -webkit-transform: translateY(-9px) rotate(-45deg);
            -ms-transform: translateY(-9px) rotate(-45deg);
            -o-transform: translateY(-9px) rotate(-45deg);
            transform: translateY(-9px) rotate(-45deg);
        }

        .no-visible{
            transition: all 0.5s ease-in-out 0s;
            -webkit-transform: translateY(-100%);
        }

        .do-visible{
            transition: all 0.5s ease-in-out 0s;
            -webkit-transform: translateY(0%);
        }

        /*.hamburger .line:nth-child(1){margin-top: 0;}*/
        /*.hamburger .line:nth-child(3){margin-bottom: 0;}*/


        @media only screen and (max-width: 768px) {
            .hamburger .line{
                width: 22px;
                height: 3px;
                background-color: #000;
                display: block;
                margin: 3px auto;
                -webkit-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .hamburger:hover{
                cursor: pointer;
            }

            #hamburger-1.is-active .line:nth-child(2){
                opacity: 0;
            }

            #hamburger-1.is-active .line:nth-child(1){
                -webkit-transform: translateY(7px) rotate(45deg);
                -ms-transform: translateY(7px) rotate(45deg);
                -o-transform: translateY(7px) rotate(45deg);
                transform: translateY(7px) rotate(45deg);
            }

            #hamburger-1.is-active .line:nth-child(3){
                -webkit-transform: translateY(-5px) rotate(-45deg);
                -ms-transform: translateY(-5px) rotate(-45deg);
                -o-transform: translateY(-5px) rotate(-45deg);
                transform: translateY(-5px) rotate(-45deg);
            }
        }

        #logo-home-back{display: inline-block;position: relative;}

        #logo-home-back:hover:after{
             /*display: none;*/
             content: \" \";
             position: absolute;
             right: 0;
             left: 0;
             border-bottom: 3px solid #000000;
             bottom: -15px;
         }

        @media only screen and (max-width: 768px){
            #logo-home-back:hover:after{
                display: none;
            }
        }


        div#white-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 50;
            background-color: #fff;
            visibility: hidden;
            opacity: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            transition: all 1.5s ease 0s
        }

        div#white-overlay.visible {
            visibility: visible;
            opacity: 1;
            transition: all 1.5s ease 0s
        }

        p#white-overlay-title {
            color: #2a2a2a;
            width: 100%;
            margin: 0;
            text-align: center;
            line-height: 1
        }

        div#white-home-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 500;
            background-color: #fff;
            visibility: hidden;
            opacity: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            -o-transition: 1.5s;
            -ms-transition: 1.5s;
            -moz-transition: 1.5s;
            -webkit-transition: 1.5s
        }

        div#white-home-overlay.visible {
            visibility: visible;
            opacity: 1;
            -o-transition: 1.5s;
            -ms-transition: 1.5s;
            -moz-transition: 1.5s;
            -webkit-transition: 1.5s
        }

        div#white-home-overlay-title {
            width: 300px;
            height: 164.4px;
            background-image: url(../images/svgs/logo-large-black.svg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center
        }

        .loading-bar{
            position: absolute;
            left:0;
            right: 0;
            top:0;
            border-bottom: 4px solid #000000;
            transform: translateX(-100%);
        }

        .loading-bar.show{
            position: absolute;
            left:0;
            right: 0;
            top:0;
            border-bottom: 4px solid #000000;
            transform: translateX(0%);
            transition: all 1s ease;
        }

        .white-overlay-title{
            color:#000;
        }

    </style>
    ";
        // line 343
        $this->displayBlock('style', $context, $blocks);
        // line 344
        echo "</head>
<body>
<header class=\"header-wrapper\" style=\"position: fixed;top: 0;right: 0;left: 0;z-index:9998;background-color: #ffffff;font-size: 0;\">
    <div class=\"menu-wrapper in-bl\" style=\"vertical-align: middle;width: 50%;text-align: left;\">
        <!--<a id=\"menu-open\"><img src=\"/public/images/home_icon_Drawer@3x.png\" class=\"drawer-height\"/></a>-->
        <div class=\"menu\" style=\"float: left;\">
            <div class=\"hamburger\" id=\"hamburger-1\">
                <span class=\"line\"></span>
                <span class=\"line\"></span>
                <span class=\"line\"></span>
            </div>
        </div>
    </div>

    <div class=\"logo-wrapper in-bl\" style=\"vertical-align: middle;width: 50%;text-align: right;\"><a id=\"logo-home-back\" href=\"/home\"><img src=\"/public/images/home_icon_logo@3x.png\" class=\"logo-height\"/></a></div>
</header>

<div id=\"white-overlay\" class=\"visible\" style=\"z-index: 10000\">
    <div class=\"loading-bar\"></div>
    <p id=\"white-overlay-title\" class=\"d-none  title-text work-title\">
        ";
        // line 364
        $this->displayBlock('loading_title', $context, $blocks);
        // line 366
        echo "    </p>
</div>

<div class=\"body-padding\">
    ";
        // line 370
        $this->displayBlock('body', $context, $blocks);
        // line 372
        echo "</div>

</body>
";
        // line 375
        echo call_user_func_array($this->env->getFunction('versionfile')->getCallable(), array("/public/assets/js/jquery-1.11.1.js"));
        echo "
<script>

    \$(function(){

        console.log(document.referrer);
        console.log(performance.navigation.type);

        if ( (document.referrer !== '') && (performance.navigation.type != 1)) {
            \$('#white-overlay-title').removeClass('d-none');
            \$('.loading-bar').addClass('show');
        } else {
            \$('#white-overlay').removeClass('visible');
        }
    });

    \$('.loading-bar').one('webkitTransitionEnd', function(){
        \$('#white-overlay').removeClass('visible');
    });

    var closeMenu = false;
//    \$('#hamburger-1').toggle(function(){},function(){});
    \$('#hamburger-1').click(
        function () {
            if( \$(this).hasClass('is-active'))
            {
                //隐藏
                \$(this).removeClass('is-active');
                menuBack();
            } else
            {
                //显示
                \$(this).addClass('is-active');
                openMenu();

            }
        }
    );


    var currentTop = 0;
    var previousTop= 0;

    function autoHideHeader(){
        currentTop = window.pageYOffset;

        currentTop = (currentTop > 0)?currentTop:0;

        if(currentTop < 0)
        {
            alert('惯性拖拽');
        }

        currentTop = ( currentTop <= (\$(document).height() - \$(window).height()) )?currentTop:(\$(document).height() - \$(window).height());

        if(currentTop > (\$(document).height() - \$(window).height()))
        {
            alert('惯性拖拽2');
        }


        if( (previousTop - currentTop) > 0 )
        {
            console.log('上滑动');
            Show();
        } else if( (previousTop - currentTop) < 0 ){
            console.log('下滑动');
            Hide();
        } else {
//            console.log('不动');
        }
//        currentTop = \$(window).scrollTop();
//        (currentTop > 0)
//            ? Hide()
//            : Show();
        previousTop = currentTop;
    }

    setInterval(autoHideHeader, 250);

    //鍒ゆ柇涓婁笅绉诲姩锛屽苟璋冪敤
    function Hide(){
        if(\$('.header-wrapper').attr('is-hide') == 1){
            return;
        } else {
            \$('.header-wrapper').removeClass('do-visible');
            \$('.header-wrapper').attr('is-hide', 1);
            \$('.header-wrapper').addClass('no-visible');
        }
    }

    function Show(){
        if( \$('.header-wrapper').attr('is-hide') == 2 )
        {
            return;
        } else {
            \$('.header-wrapper').removeClass('no-visible');
            \$('.header-wrapper').attr('is-hide', 2);
            \$('.header-wrapper').addClass('do-visible');
        }
    }

    //    var scrollY = window.pageYOffset; // 初始值

//    \$(window).on('scroll', function(){
//
//        currentY = window.pageYOffset;
//
//        if(currentY  > scrollY) { // 向下滑动
//            scroll = currentY;
//
////            \$(element).hide()
//            console.log('下滑');
//            if(\$('.header-wrapper').attr('is-hide') == 1){
////                return;
//            } else {
//                \$('.header-wrapper').removeClass('do-visible');
//                \$('.header-wrapper').attr('is-hide', 1);
//                \$('.header-wrapper').addClass('no-visible');
//            }
//
//        } else { // 向上
//            scroll = currentY;
//
////            \$(element).show()
//            console.log('上滑动');
//            if( \$('.header-wrapper').attr('is-hide') == 2 )
//            {
////                return;
//            } else {
//                \$('.header-wrapper').removeClass('no-visible');
//                \$('.header-wrapper').attr('is-hide', 2);
//                \$('.header-wrapper').addClass('do-visible');
//            }
//
//        }
//
////        (currentY === 0) && \$(element).hide();
//
//    });
//    \$('#hamburger-1').toggle(function(){
//        //显示菜单
////        \$(this).addClass('is-active');
//    },function(){
//        //隐藏菜单
////        \$(this).removeClass('is-active');
//    });

    function menuBack(){
        closeMenu = true;
        \$('.veil').addClass('fadeOut');
    }

    function openMenu()
    {
//        \$('#menu-open').trigger('click');
        var innerHtml = '<div class=\"veil\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#ffffff\"><div style=\"position:absolute;top:0;right:0;left: 0;\"><div class=\"header-wrapper\" style=\"overflow: hidden;\">'+
            '</div></div><div class=\"cell\" style=\"width:100%;height:100%;display:table\"><div class=\"card\" style=\"display:table-cell;text-align:center;vertical-align:middle\"><ul class=\"\" style=\"list-style:none;padding:0;font-size:24px\"><li><a href=\"/works\" class=\"menu-item1 title-text menu-text\">OUR WORK</a></li><li><a href=\"/about\" class=\"menu-item2  title-text menu-text\">WHO WE ARE</a></li><li><a href=\"/contact\" class=\"menu-item3 title-text menu-text\">CONTACT US</a></li></ul></div></div></div>';


        \$('body').append(innerHtml);
        closeMenu = false;
        \$('.veil').addClass('animated fadeIn');
        \$('.veil').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            if(closeMenu){
                \$('.veil').remove();
            }
//            console.log('1');
        });
    }

    function goHref(href)
    {
        location.href = href;
    }




    \$('#menu-open').click(function(){
        var innerHtml = '<div class=\"veil\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:9999;background-color:#ffffff\"><div style=\"position:absolute;top:0;right:0;left: 0;\"><div class=\"header-wrapper\" style=\"overflow: hidden;\">'+
            '</div></div><div class=\"cell\" style=\"width:100%;height:100%;display:table\"><div class=\"card\" style=\"display:table-cell;text-align:center;vertical-align:middle\"><ul class=\"\" style=\"list-style:none;padding:0;font-size:24px\"><li><a href=\"/works\" class=\"menu-item1 title-text menu-text\">OUR WORK</a></li><li><a href=\"/about\" class=\"menu-item2  title-text menu-text\">WHO WE ARE</a></li><li><a href=\"/contact\" class=\"menu-item3 title-text menu-text\">CONTACT US</a></li></ul></div></div></div>';
        /*var innerHtml = `<div class=\"veil\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;\"><div style=\"position:absolute;top:32px;right:32px;\"><a href=\"javascript:menuBack();\"><img src=\"/public/images/close.png\" style=\"width:26px;height:26px;\"/></a></div> <div class=\"cell\" style=\"width:100%;height:100%;display:table;\">
         <div class=\"card\" style=\"display:table-cell;text-align:center;    vertical-align: middle;\">
         <ul class=\"menu-list\" style=\"list-style:none;padding:0;font-size:24px;\">
         <li><a href=\"/home\">HOME</a></li>
         <li><a href=\"/work.html\">ABOUNT ME</a></li>
         <li><a href=\"/works\">WORK</a></li>
         <li><a href=\"/work.html\">CONTACT</a></li>
         </ul>
         </div>
         </div>
         </div>`;*/
        \$('body').append(innerHtml);
        closeMenu = false;
        \$('.veil').addClass('animated fadeIn');
        \$('.veil').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            if(closeMenu){
                \$('.veil').remove();
            }
//            console.log('1');
        });
    });
</script>
";
        // line 579
        $this->displayBlock('script', $context, $blocks);
        // line 581
        echo "</html>";
    }

    // line 343
    public function block_style($context, array $blocks = array())
    {
    }

    // line 364
    public function block_loading_title($context, array $blocks = array())
    {
        // line 365
        echo "        ";
    }

    // line 370
    public function block_body($context, array $blocks = array())
    {
        // line 371
        echo "    ";
    }

    // line 579
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout/index_new2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 579,  646 => 371,  643 => 370,  639 => 365,  636 => 364,  631 => 343,  627 => 581,  625 => 579,  418 => 375,  413 => 372,  411 => 370,  405 => 366,  403 => 364,  381 => 344,  379 => 343,  53 => 20,  49 => 19,  45 => 18,  41 => 17,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-CN">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>DORRR</title>*/
/*     <script>*/
/*         var _hmt = _hmt || [];*/
/*         (function() {*/
/*             var hm = document.createElement("script");*/
/*             hm.src = "https://hm.baidu.com/hm.js?3bc3fd956a80e2f2f363551db82e0413";*/
/*             var s = document.getElementsByTagName("script")[0];*/
/*             s.parentNode.insertBefore(hm, s);*/
/*         })();*/
/*     </script>*/
/*     {{ versionfile('/public/assets/css/bootstrap.css') | raw }}*/
/*     {{ versionfile('/public/assets/css/font-awesome.css') | raw }}*/
/*     {{ versionfile('/public/css/work.css') | raw }}*/
/*     {{ versionfile('/public/css/animate.css') | raw }}*/
/* */
/*     <style>*/
/*         a{text-decoration: none !important;}*/
/*     </style>*/
/*     <style>*/
/*         body{*/
/*             font-family: "微软雅黑", serif;*/
/*         }*/
/*         .sandbox{padding: 25px;}*/
/*         .sandbox-header{display: flex;}*/
/*         .sandbox-header > div{*/
/*             flex: 1;*/
/*             height: 34px;*/
/*         }*/
/* */
/*         .logo-wrapper{text-align: left}*/
/*         .menu-wrapper{text-align: right}*/
/*         .sandbox-header a{overflow: hidden;display: inline-block;height: 100%;}*/
/*         .sandbox-header img{height: 100%;}*/
/* */
/*         .sandbox-section{text-align: center;padding: 27px 0;}*/
/*         .work-panel{*/
/*             width: auto;*/
/*             margin: 0 auto;*/
/*             display: inline-block;*/
/*         }*/
/* */
/*         .one-item{*/
/*             display: inline-block;*/
/*             width: auto;*/
/*         }*/
/* */
/*         .one-item > div{*/
/*             display: inline-block;*/
/*         }*/
/* */
/*         .one-item-right{margin-left: 40px;}*/
/*         .one-item ::after{word-wrap: break-word;}*/
/*         .one-horizontal{*/
/*             margin-top: 17px;*/
/*         }*/
/* */
/*         .one-horizontal > div{*/
/*             display: inline-block;*/
/*             margin-left: 20px;*/
/*         }*/
/* */
/*         .one-horizontal{*/
/*             vertical-align: middle;*/
/*         }*/
/* */
/*         .one-horizontal label{*/
/*             font-family: PingFangSC-Regular;*/
/*             font-size: 14px;*/
/*             color: #333333;*/
/*             line-height: 14px;*/
/*             margin-bottom: 0;*/
/*             font-weight: normal;*/
/*         }*/
/* */
/*         .one-horizontal select{*/
/* */
/*         }*/
/* */
/*         .one-horizontal input,.one-horizontal textarea,.one-horizontal select{*/
/*             background: #FFFFFF;*/
/*             border: 1px solid #979797;*/
/*             border-radius: 2px;*/
/*             padding: 6px;*/
/*         }*/
/* */
/*         .one-horizontal select{*/
/*             width: 140px;*/
/*         }*/
/* */
/*         .one-horizontal input,.one-horizontal textarea{*/
/*             width: 460px;*/
/*         }*/
/* */
/*         #upload:hover{*/
/*             background: #FFD4D4 !important;*/
/*         }*/
/* */
/*         .veil a{*/
/*             /*font-family: FZLTXHB--B51-0;*//* */
/*             /*font-size: 27px;*//* */
/*             /*color: #000000;*//* */
/*         }*/
/* */
/*         .menu-list li{*/
/*             /*margin-bottom: 12px;*//* */
/*             line-height: 86px;*/
/*         }*/
/* */
/*         .sandbox-header span{*/
/*             font-family: "Arial", sans-serif,微软雅黑;*/
/*             font-size: 26px;*/
/*             color: #ffffff;*/
/*         }*/
/* */
/*         @media only screen and (max-width: 540px) {*/
/*             .sandbox-header span{*/
/*                 font-size: 20px;*/
/*             }*/
/*         }*/
/* */
/*         .body-padding{padding-top: 0;}*/
/* */
/*         .hamburger{*/
/*             /*opacity: 0;*//* */
/*         }*/
/* */
/*         .hamburger .line{*/
/*             width: 30px;*/
/*             height: 4px;*/
/*             background-color: #000;*/
/*             display: block;*/
/*             margin: 5px auto;*/
/*             -webkit-transition: all 0.3s ease-in-out;*/
/*             -o-transition: all 0.3s ease-in-out;*/
/*             transition: all 0.3s ease-in-out;*/
/*         }*/
/* */
/*         .hamburger .line:nth-child(1)*/
/*         {*/
/*             margin-top: 2px;*/
/*         }*/
/* */
/*         .hamburger .line:nth-child(3)*/
/*         {*/
/*             margin-bottom: 2px;*/
/*         }*/
/* */
/*         .hamburger:hover{*/
/*             cursor: pointer;*/
/*         }*/
/* */
/*         #hamburger-1.is-active .line:nth-child(2){*/
/*             opacity: 0;*/
/*         }*/
/* */
/*         #hamburger-1.is-active .line:nth-child(1){*/
/*             -webkit-transform: translateY(9px) rotate(45deg);*/
/*             -ms-transform: translateY(9px) rotate(45deg);*/
/*             -o-transform: translateY(9px) rotate(45deg);*/
/*             transform: translateY(9px) rotate(45deg);*/
/*         }*/
/* */
/*         #hamburger-1.is-active .line:nth-child(3){*/
/*             -webkit-transform: translateY(-9px) rotate(-45deg);*/
/*             -ms-transform: translateY(-9px) rotate(-45deg);*/
/*             -o-transform: translateY(-9px) rotate(-45deg);*/
/*             transform: translateY(-9px) rotate(-45deg);*/
/*         }*/
/* */
/*         .no-visible{*/
/*             transition: all 0.5s ease-in-out 0s;*/
/*             -webkit-transform: translateY(-100%);*/
/*         }*/
/* */
/*         .do-visible{*/
/*             transition: all 0.5s ease-in-out 0s;*/
/*             -webkit-transform: translateY(0%);*/
/*         }*/
/* */
/*         /*.hamburger .line:nth-child(1){margin-top: 0;}*//* */
/*         /*.hamburger .line:nth-child(3){margin-bottom: 0;}*//* */
/* */
/* */
/*         @media only screen and (max-width: 768px) {*/
/*             .hamburger .line{*/
/*                 width: 22px;*/
/*                 height: 3px;*/
/*                 background-color: #000;*/
/*                 display: block;*/
/*                 margin: 3px auto;*/
/*                 -webkit-transition: all 0.3s ease-in-out;*/
/*                 -o-transition: all 0.3s ease-in-out;*/
/*                 transition: all 0.3s ease-in-out;*/
/*             }*/
/* */
/*             .hamburger:hover{*/
/*                 cursor: pointer;*/
/*             }*/
/* */
/*             #hamburger-1.is-active .line:nth-child(2){*/
/*                 opacity: 0;*/
/*             }*/
/* */
/*             #hamburger-1.is-active .line:nth-child(1){*/
/*                 -webkit-transform: translateY(7px) rotate(45deg);*/
/*                 -ms-transform: translateY(7px) rotate(45deg);*/
/*                 -o-transform: translateY(7px) rotate(45deg);*/
/*                 transform: translateY(7px) rotate(45deg);*/
/*             }*/
/* */
/*             #hamburger-1.is-active .line:nth-child(3){*/
/*                 -webkit-transform: translateY(-5px) rotate(-45deg);*/
/*                 -ms-transform: translateY(-5px) rotate(-45deg);*/
/*                 -o-transform: translateY(-5px) rotate(-45deg);*/
/*                 transform: translateY(-5px) rotate(-45deg);*/
/*             }*/
/*         }*/
/* */
/*         #logo-home-back{display: inline-block;position: relative;}*/
/* */
/*         #logo-home-back:hover:after{*/
/*              /*display: none;*//* */
/*              content: " ";*/
/*              position: absolute;*/
/*              right: 0;*/
/*              left: 0;*/
/*              border-bottom: 3px solid #000000;*/
/*              bottom: -15px;*/
/*          }*/
/* */
/*         @media only screen and (max-width: 768px){*/
/*             #logo-home-back:hover:after{*/
/*                 display: none;*/
/*             }*/
/*         }*/
/* */
/* */
/*         div#white-overlay {*/
/*             position: fixed;*/
/*             top: 0;*/
/*             left: 0;*/
/*             right: 0;*/
/*             bottom: 0;*/
/*             width: 100%;*/
/*             height: 100%;*/
/*             z-index: 50;*/
/*             background-color: #fff;*/
/*             visibility: hidden;*/
/*             opacity: 0;*/
/*             display: -ms-flexbox;*/
/*             display: flex;*/
/*             -ms-flex-pack: center;*/
/*             justify-content: center;*/
/*             -ms-flex-align: center;*/
/*             align-items: center;*/
/*             transition: all 1.5s ease 0s*/
/*         }*/
/* */
/*         div#white-overlay.visible {*/
/*             visibility: visible;*/
/*             opacity: 1;*/
/*             transition: all 1.5s ease 0s*/
/*         }*/
/* */
/*         p#white-overlay-title {*/
/*             color: #2a2a2a;*/
/*             width: 100%;*/
/*             margin: 0;*/
/*             text-align: center;*/
/*             line-height: 1*/
/*         }*/
/* */
/*         div#white-home-overlay {*/
/*             position: fixed;*/
/*             top: 0;*/
/*             left: 0;*/
/*             width: 100%;*/
/*             height: 100%;*/
/*             z-index: 500;*/
/*             background-color: #fff;*/
/*             visibility: hidden;*/
/*             opacity: 0;*/
/*             display: -ms-flexbox;*/
/*             display: flex;*/
/*             -ms-flex-pack: center;*/
/*             justify-content: center;*/
/*             -ms-flex-align: center;*/
/*             align-items: center;*/
/*             -o-transition: 1.5s;*/
/*             -ms-transition: 1.5s;*/
/*             -moz-transition: 1.5s;*/
/*             -webkit-transition: 1.5s*/
/*         }*/
/* */
/*         div#white-home-overlay.visible {*/
/*             visibility: visible;*/
/*             opacity: 1;*/
/*             -o-transition: 1.5s;*/
/*             -ms-transition: 1.5s;*/
/*             -moz-transition: 1.5s;*/
/*             -webkit-transition: 1.5s*/
/*         }*/
/* */
/*         div#white-home-overlay-title {*/
/*             width: 300px;*/
/*             height: 164.4px;*/
/*             background-image: url(../images/svgs/logo-large-black.svg);*/
/*             background-size: contain;*/
/*             background-repeat: no-repeat;*/
/*             background-position: center center*/
/*         }*/
/* */
/*         .loading-bar{*/
/*             position: absolute;*/
/*             left:0;*/
/*             right: 0;*/
/*             top:0;*/
/*             border-bottom: 4px solid #000000;*/
/*             transform: translateX(-100%);*/
/*         }*/
/* */
/*         .loading-bar.show{*/
/*             position: absolute;*/
/*             left:0;*/
/*             right: 0;*/
/*             top:0;*/
/*             border-bottom: 4px solid #000000;*/
/*             transform: translateX(0%);*/
/*             transition: all 1s ease;*/
/*         }*/
/* */
/*         .white-overlay-title{*/
/*             color:#000;*/
/*         }*/
/* */
/*     </style>*/
/*     {% block style %}{% endblock %}*/
/* </head>*/
/* <body>*/
/* <header class="header-wrapper" style="position: fixed;top: 0;right: 0;left: 0;z-index:9998;background-color: #ffffff;font-size: 0;">*/
/*     <div class="menu-wrapper in-bl" style="vertical-align: middle;width: 50%;text-align: left;">*/
/*         <!--<a id="menu-open"><img src="/public/images/home_icon_Drawer@3x.png" class="drawer-height"/></a>-->*/
/*         <div class="menu" style="float: left;">*/
/*             <div class="hamburger" id="hamburger-1">*/
/*                 <span class="line"></span>*/
/*                 <span class="line"></span>*/
/*                 <span class="line"></span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="logo-wrapper in-bl" style="vertical-align: middle;width: 50%;text-align: right;"><a id="logo-home-back" href="/home"><img src="/public/images/home_icon_logo@3x.png" class="logo-height"/></a></div>*/
/* </header>*/
/* */
/* <div id="white-overlay" class="visible" style="z-index: 10000">*/
/*     <div class="loading-bar"></div>*/
/*     <p id="white-overlay-title" class="d-none  title-text work-title">*/
/*         {% block loading_title%}*/
/*         {% endblock %}*/
/*     </p>*/
/* </div>*/
/* */
/* <div class="body-padding">*/
/*     {% block body %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* </body>*/
/* {{ versionfile('/public/assets/js/jquery-1.11.1.js') | raw }}*/
/* <script>*/
/* */
/*     $(function(){*/
/* */
/*         console.log(document.referrer);*/
/*         console.log(performance.navigation.type);*/
/* */
/*         if ( (document.referrer !== '') && (performance.navigation.type != 1)) {*/
/*             $('#white-overlay-title').removeClass('d-none');*/
/*             $('.loading-bar').addClass('show');*/
/*         } else {*/
/*             $('#white-overlay').removeClass('visible');*/
/*         }*/
/*     });*/
/* */
/*     $('.loading-bar').one('webkitTransitionEnd', function(){*/
/*         $('#white-overlay').removeClass('visible');*/
/*     });*/
/* */
/*     var closeMenu = false;*/
/* //    $('#hamburger-1').toggle(function(){},function(){});*/
/*     $('#hamburger-1').click(*/
/*         function () {*/
/*             if( $(this).hasClass('is-active'))*/
/*             {*/
/*                 //隐藏*/
/*                 $(this).removeClass('is-active');*/
/*                 menuBack();*/
/*             } else*/
/*             {*/
/*                 //显示*/
/*                 $(this).addClass('is-active');*/
/*                 openMenu();*/
/* */
/*             }*/
/*         }*/
/*     );*/
/* */
/* */
/*     var currentTop = 0;*/
/*     var previousTop= 0;*/
/* */
/*     function autoHideHeader(){*/
/*         currentTop = window.pageYOffset;*/
/* */
/*         currentTop = (currentTop > 0)?currentTop:0;*/
/* */
/*         if(currentTop < 0)*/
/*         {*/
/*             alert('惯性拖拽');*/
/*         }*/
/* */
/*         currentTop = ( currentTop <= ($(document).height() - $(window).height()) )?currentTop:($(document).height() - $(window).height());*/
/* */
/*         if(currentTop > ($(document).height() - $(window).height()))*/
/*         {*/
/*             alert('惯性拖拽2');*/
/*         }*/
/* */
/* */
/*         if( (previousTop - currentTop) > 0 )*/
/*         {*/
/*             console.log('上滑动');*/
/*             Show();*/
/*         } else if( (previousTop - currentTop) < 0 ){*/
/*             console.log('下滑动');*/
/*             Hide();*/
/*         } else {*/
/* //            console.log('不动');*/
/*         }*/
/* //        currentTop = $(window).scrollTop();*/
/* //        (currentTop > 0)*/
/* //            ? Hide()*/
/* //            : Show();*/
/*         previousTop = currentTop;*/
/*     }*/
/* */
/*     setInterval(autoHideHeader, 250);*/
/* */
/*     //鍒ゆ柇涓婁笅绉诲姩锛屽苟璋冪敤*/
/*     function Hide(){*/
/*         if($('.header-wrapper').attr('is-hide') == 1){*/
/*             return;*/
/*         } else {*/
/*             $('.header-wrapper').removeClass('do-visible');*/
/*             $('.header-wrapper').attr('is-hide', 1);*/
/*             $('.header-wrapper').addClass('no-visible');*/
/*         }*/
/*     }*/
/* */
/*     function Show(){*/
/*         if( $('.header-wrapper').attr('is-hide') == 2 )*/
/*         {*/
/*             return;*/
/*         } else {*/
/*             $('.header-wrapper').removeClass('no-visible');*/
/*             $('.header-wrapper').attr('is-hide', 2);*/
/*             $('.header-wrapper').addClass('do-visible');*/
/*         }*/
/*     }*/
/* */
/*     //    var scrollY = window.pageYOffset; // 初始值*/
/* */
/* //    $(window).on('scroll', function(){*/
/* //*/
/* //        currentY = window.pageYOffset;*/
/* //*/
/* //        if(currentY  > scrollY) { // 向下滑动*/
/* //            scroll = currentY;*/
/* //*/
/* ////            $(element).hide()*/
/* //            console.log('下滑');*/
/* //            if($('.header-wrapper').attr('is-hide') == 1){*/
/* ////                return;*/
/* //            } else {*/
/* //                $('.header-wrapper').removeClass('do-visible');*/
/* //                $('.header-wrapper').attr('is-hide', 1);*/
/* //                $('.header-wrapper').addClass('no-visible');*/
/* //            }*/
/* //*/
/* //        } else { // 向上*/
/* //            scroll = currentY;*/
/* //*/
/* ////            $(element).show()*/
/* //            console.log('上滑动');*/
/* //            if( $('.header-wrapper').attr('is-hide') == 2 )*/
/* //            {*/
/* ////                return;*/
/* //            } else {*/
/* //                $('.header-wrapper').removeClass('no-visible');*/
/* //                $('.header-wrapper').attr('is-hide', 2);*/
/* //                $('.header-wrapper').addClass('do-visible');*/
/* //            }*/
/* //*/
/* //        }*/
/* //*/
/* ////        (currentY === 0) && $(element).hide();*/
/* //*/
/* //    });*/
/* //    $('#hamburger-1').toggle(function(){*/
/* //        //显示菜单*/
/* ////        $(this).addClass('is-active');*/
/* //    },function(){*/
/* //        //隐藏菜单*/
/* ////        $(this).removeClass('is-active');*/
/* //    });*/
/* */
/*     function menuBack(){*/
/*         closeMenu = true;*/
/*         $('.veil').addClass('fadeOut');*/
/*     }*/
/* */
/*     function openMenu()*/
/*     {*/
/* //        $('#menu-open').trigger('click');*/
/*         var innerHtml = '<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#ffffff"><div style="position:absolute;top:0;right:0;left: 0;"><div class="header-wrapper" style="overflow: hidden;">'+*/
/*             '</div></div><div class="cell" style="width:100%;height:100%;display:table"><div class="card" style="display:table-cell;text-align:center;vertical-align:middle"><ul class="" style="list-style:none;padding:0;font-size:24px"><li><a href="/works" class="menu-item1 title-text menu-text">OUR WORK</a></li><li><a href="/about" class="menu-item2  title-text menu-text">WHO WE ARE</a></li><li><a href="/contact" class="menu-item3 title-text menu-text">CONTACT US</a></li></ul></div></div></div>';*/
/* */
/* */
/*         $('body').append(innerHtml);*/
/*         closeMenu = false;*/
/*         $('.veil').addClass('animated fadeIn');*/
/*         $('.veil').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){*/
/*             if(closeMenu){*/
/*                 $('.veil').remove();*/
/*             }*/
/* //            console.log('1');*/
/*         });*/
/*     }*/
/* */
/*     function goHref(href)*/
/*     {*/
/*         location.href = href;*/
/*     }*/
/* */
/* */
/* */
/* */
/*     $('#menu-open').click(function(){*/
/*         var innerHtml = '<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:9999;background-color:#ffffff"><div style="position:absolute;top:0;right:0;left: 0;"><div class="header-wrapper" style="overflow: hidden;">'+*/
/*             '</div></div><div class="cell" style="width:100%;height:100%;display:table"><div class="card" style="display:table-cell;text-align:center;vertical-align:middle"><ul class="" style="list-style:none;padding:0;font-size:24px"><li><a href="/works" class="menu-item1 title-text menu-text">OUR WORK</a></li><li><a href="/about" class="menu-item2  title-text menu-text">WHO WE ARE</a></li><li><a href="/contact" class="menu-item3 title-text menu-text">CONTACT US</a></li></ul></div></div></div>';*/
/*         /*var innerHtml = `<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;"><div style="position:absolute;top:32px;right:32px;"><a href="javascript:menuBack();"><img src="/public/images/close.png" style="width:26px;height:26px;"/></a></div> <div class="cell" style="width:100%;height:100%;display:table;">*/
/*          <div class="card" style="display:table-cell;text-align:center;    vertical-align: middle;">*/
/*          <ul class="menu-list" style="list-style:none;padding:0;font-size:24px;">*/
/*          <li><a href="/home">HOME</a></li>*/
/*          <li><a href="/work.html">ABOUNT ME</a></li>*/
/*          <li><a href="/works">WORK</a></li>*/
/*          <li><a href="/work.html">CONTACT</a></li>*/
/*          </ul>*/
/*          </div>*/
/*          </div>*/
/*          </div>`;*//* */
/*         $('body').append(innerHtml);*/
/*         closeMenu = false;*/
/*         $('.veil').addClass('animated fadeIn');*/
/*         $('.veil').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){*/
/*             if(closeMenu){*/
/*                 $('.veil').remove();*/
/*             }*/
/* //            console.log('1');*/
/*         });*/
/*     });*/
/* </script>*/
/* {% block script %}*/
/* {% endblock %}*/
/* </html>*/
