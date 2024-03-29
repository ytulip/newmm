<?php

/* index/works.html */
class __TwigTemplate_257cf700f424c4e2470fbd6530370fbf7e3298a90c1ca705887a783a432a63e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index_new2.html", "index/works.html", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout/index_new2.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "<style>
    /*.veil ul li:nth-child(3) a{*/
        /*color:#FFD48B;*/
    /*}*/

    @media only screen and (min-width: 1200px) {
        .sandbox-content {
            padding-left: 145px;
            padding-right: 145px;
        }
    }

    #draw_list{display: none;}

    .title-animate
    {
        animation:title-animate-move .5s ease;
        -webkit-animation:title-animate-move .5s ease; /* Safari 和 Chrome */
    }

    /*.shade-opacity-animate*/
    /*{*/
        /*animation:shade-opacity-animate-move .5s ease;*/
        /*-webkit-animation:shade-opacity-animate-move .5s ease; !* Safari 和 Chrome *!*/
    /*}*/

    .work-list-style{
        margin-left:-15px;margin-right: -15px;margin-top: 30px;
    }


    .padding-lr-15-0{padding-left: 15px;padding-right: 15px;}

    @-webkit-keyframes title-animate-move {
        0%{transform:translateY(100%);}
        100%{transform:translateY(0%);}
    }

    @-webkit-keyframes shade-opacity-animate-move {
        0%{background-color:rgba(0,0,0,.2);}
        10%{background-color:rgba(0,0,0,.24);}
        20%{background-color:rgba(0,0,0,.28);}
        30%{background-color:rgba(0,0,0,.32);}
        40%{background-color:rgba(0,0,0,.36);}
        50%{background-color:rgba(0,0,0,.40);}
        60%{background-color:rgba(0,0,0,.44);}
        70%{background-color:rgba(0,0,0,.48);}
        80%{background-color:rgba(0,0,0,.52);}
        90%{background-color:rgba(0,0,0,.56);}
        100%{background-color:rgba(0,0,0,.6);}
    }

    @media only screen and (min-width: 1200px) {
        .sandbox-content {
            padding-left: 145px;
            padding-right: 145px;
        }
    }

    @media only screen and (max-width: 768px) {
        .work-space {
            padding: 0;
        }
        .work-list-style{margin-left:0;margin-right: 0;margin-top: 0;}
        .work-desc-panel h1{
            margin-top: 15px;
        }
        .padding-lr-15-0{padding-left: 0;padding-right: 0;}
    }

    .classify-rotate
    {
        transform:rotate(45deg);
        transition: all 0.2s ease;
    }

    .classify-rotate-normal
    {
        transform:rotate(0deg);
        transition: all 0.2s ease;
    }

    #draw_list.is-visible{
        display: block;
    }

    #draw_list.draw_list_m{
        position: absolute;
        z-index: 999;
        background: #ffffff;
        left:0;
        right: 0;
    }

    .img-show-panel:hover:before {
        opacity: 1;
    }

    .img-show-panel:before{
        background: rgba( 0, 0, 0, 0.5 );
        content: \"\";
        opacity: 0;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        transition: opacity .3s ease-in-out, background .3s ease-in-out;
    }

    @media only screen and (max-width: 768px) {
        .img-show-panel:hover:before {
            opacity: 0;
        }
    }

</style>
";
    }

    // line 121
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"><span style=\"line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;\">WORKS</span></div>";
    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        // line 123
        echo "<div class=\"common-padding padding-top-122-49\" style=\"margin-bottom: 100px;\">
    <div class=\"title-text2 padding-60-30\">OUR WORK</div>
<div class=\"works-menu\" style=\"margin-top: 30px;\">
    <ul class=\"works-type-new\">
        <li><a href=\"works\" class=\"classify-text a-hover\">全部</a></li>
        <li><a href=\"/works?type=2\" class=\"classify-text a-hover\">产品设计</a></li>
        <li><a href=\"/works?type=3\" class=\"classify-text a-hover\">交互与视觉设计</a></li>
        <li><a href=\"/works?type=4\" class=\"classify-text a-hover\">企业/品牌设计</a></li>
    </ul>
</div>

<div class=\"menu-m-panel\" style=\"margin-bottom: 30px;position: relative;\">
    <div class=\"in-bl-line\" style=\"margin-top: 16px;\">
        <div class=\"in-bl-line-item v-a-m\" style=\"width: 50%;\"><div class=\"classify-text\" style=\"line-height: 14px;\">";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["typeText"]) ? $context["typeText"] : null), "html", null, true);
        echo "</div></div>
        <div class=\"in-bl-line-item t-al-r v-a-m\" style=\"width: 50%\">
            <img style=\"width: 16px;\" src=\"/public/images/icon_add_nor@3x.png\" onclick=\"drawSwitch()\" id=\"switch_img\" data-type=\"0\"/>
        </div>
    </div>
    <div style=\"border-bottom: 1px solid #000000;margin-top: 16px;\"></div>

    <!--<div id=\"draw_list\" class=\"draw_list_m\">-->
        <!--<div class=\"classify-text\" style=\"margin-top: 30px;\"><a class=\"classify-text\" href=\"/works?type=2\">产品设计</a></div>-->
        <!--<div class=\"classify-text\" style=\"margin-top: 30px;\"><a class=\"classify-text\" href=\"/works?type=3\">交互与视觉设计</a></div>-->
        <!--<div class=\"classify-text\" style=\"margin-top: 30px;\"><a class=\"classify-text\" href=\"/works?type=4\">企业/品牌设计</a></div>-->
        <!--<div class=\"classify-text\" style=\"margin-top: 30px;\"><a class=\"classify-text\" href=\"/works\">全部</a></div>-->
    <!--</div>-->

    <div style=\"position: absolute;left: 0;right: 0;height: 240px;overflow: hidden;\">
        <div id=\"draw_list\" class=\"draw_list_m\">
        <div class=\"classify-text\" style=\"margin-top: 30px;line-height: 14px;\"><a class=\"classify-text\" href=\"/works?type=2\" style=\"line-height: 14px;\">产品设计</a></div>
        <div class=\"classify-text\" style=\"margin-top: 30px;line-height: 14px;\"><a class=\"classify-text\" href=\"/works?type=3\" style=\"line-height: 14px;\">交互与视觉设计</a></div>
        <div class=\"classify-text\" style=\"margin-top: 30px;line-height: 14px;\"><a class=\"classify-text\" href=\"/works?type=4\" style=\"line-height: 14px;\">企业/品牌设计</a></div>
        <div class=\"classify-text\" style=\"margin-top: 30px;margin-bottom: 30px;line-height: 14px;\"><a class=\"classify-text\" href=\"/works\" style=\"line-height: 14px;\">全部</a></div>
        </div>
    </div>

    <!--<div style=\"height: 240px;\"></div>-->
</div>
<div class=\"works-list work-list-style\">
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/1.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/2.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/3.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/4.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/1.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/2.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/3.jpg\"/></div></div></div>-->
    <!--<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"http://zhuyan.me/img/example/4.jpg\"/></div></div></div>-->
</div>
</div>
";
    }

    // line 174
    public function block_script($context, array $blocks = array())
    {
        // line 175
        echo "<script src=\"/public/assets/js/imgLiquid.js\"></script>
<script>
    function getQueryString(name) {
        var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }

    function drawSwitch()
    {
        if( \$('#switch_img').attr('data-type') == 1)
        {
//            \$('#draw_list').hide();
            \$('.draw_list_m').removeClass('animated fadeIn');
            \$('.draw_list_m').addClass('animated fadeOutUp');

            \$('#switch_img').attr('data-type',0);
            \$('#switch_img').removeClass('classify-rotate');
            \$('#switch_img').addClass('classify-rotate-normal');
//            \$('#switch_img').attr('src','/public/images/icon_add_nor@3x.png');
        } else
        {
//            \$('#draw_list').show();
//            \$('#draw_list').addClass('is-visible animated fadeInDown');
            \$('.draw_list_m').removeClass('animated fadeOutUp');
            \$('.draw_list_m').addClass('is-visible animated fadeInDown');



            \$('#switch_img').attr('data-type',1);
            \$('#switch_img').removeClass('classify-rotate-normal');
            \$('#switch_img').addClass('classify-rotate');
//            \$('#switch_img').attr('src','/public/images/home_icon_off@3x.png');
        }
    }


    \$.createCache = function( requestFunction ) {
        var cache = {};
        return function( key, callback ) {
            if ( !cache[ key ] ) {
                cache[ key ] = \$.Deferred(function( defer ) {
                    requestFunction( defer, key );
                }).promise();
            }
            return cache[ key ].done( callback );
        };
    }

    \$.loadImage = \$.createCache(function( defer, url ) {
        var image = new Image();
        function cleanUp() {
            image.onload = image.onerror = null;
        }
        defer.then( cleanUp, cleanUp );
        image.onload = function() {
            defer.resolve( url );
        };
        image.onerror = defer.reject;
        image.src = url;
    });


    /*加载works*/
    function refreshWork(){
        \$.ajax({
            url:'/worklist',
            data:{type:getQueryString('type')},
            dataType:'json',
            success:function(data){
                if(data.status){
                    var listItem = '';
                    console.log(data.data);
                    \$.each(data.data,function(key,val){
                        listItem += '<div class=\"response-free-width'+val.width_type+' work-space\" onclick=\"goHref(\\'/work?id='+val.id+'\\')\"><div class=\"img-show-panel\" data-title=\"'+val.title+'\" data-abstract=\"'+val.abstract+'\" data-id='+val.id+'><a href=\"/work?id='+val.id+'\"><img class=\"work-item\" img-data=\"'+val.face_img+'\" src=\"'+val.face_img+'\"/></a></div></div></div><div class=\"work-desc-panel \" onclick=\"goHref(\\'/work?id='+val.id+'\\')\" class=\"padding-lr-15-0\"><h1>'+val.title+'</h1><p>'+val.abstract+'</p></div>';
                    });
//                    for(var item  in data.data){
//                        console.log(item);
//                        listItem += '<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"'+item.face_img+'\"/></div></div></div>';
//                    }
                    \$('.works-list').append(listItem);

//                    \$('.work-item').each(function(){
//                        var self = this;
//                        \$.loadImage(\$(this).attr('img-data')).done(function(){
//                            var realImg = \$(self).attr('img-data');
//                            \$(self).attr('src',realImg);
//                            console.log(\$(self).parents('.img-wrapper'));
//                            \$(self).parents('.img-wrapper').attr('style','');
//                            \$(self).parents('.img-wrapper').imgLiquid();
//                        });
//                    });




//                    \$('.img-data').each(function(){
//                        var src = \$(this).attr('img-data');
//                        var id = \$(this).attr('data-id');
//                        \$(this).replaceWith('<a href=\"/work?id=\"'+id+'><img class=\"work-item\" src=\"'+src+'\"/></a>');
//                    });

                    \$(\".img-wrapper\").imgLiquid();
                    \$(\".img-show-panel\").imgLiquid();
//                    var afterHtml = '';
//                    var imgArr = data.data.imgs.split(',');
//                    console.log(imgArr);
//                    \$.each(imgArr,function(ind,obj){
//                        afterHtml += '<img style=\"max-width: 100%;margin-bottom:28px;\" src=\"'+obj+'\">';
//                    });
//                    \$('#work-panel').html(afterHtml);
//                    \$('#work-title').html(data.data.title);
                }
            },
            error:function(){
            }
        });
    }

    \$('body').on('mouseover','.img-show-panel',function(){
        if(\$(this).find('.work-item-shade').length){
            return;
        }else{
            \$(this).append('<div onclick=\"goHref(\\'/work?id='+\$(this).attr('data-id')+'\\')\" class=\"work-item-shade\" style=\"position:absolute;top:0;right:0;bottom:0;left:0;z-index:99;\"><div class=\"shadow-title title-animate\">'+\$(this).attr('data-title')+'</div><div class=\"shadow-desc\">'+\$(this).attr('data-abstract')+'</div></div>');
            return;
        }
    });


    \$('body').on('mouseleave','.img-show-panel',function(){
//            console.log(4);
        \$(this).find('.work-item-shade').remove();
    });

    \$(function(){
//        \$('.img-data').each(function(){
//            var src = \$(this).attr('img-data');
//            \$(this).replaceWith('<img class=\"work-item\" src=\"'+src+'\"/>');
//        });
//
//        \$(\".img-wrapper\").imgLiquid();

        refreshWork();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "index/works.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 175,  220 => 174,  179 => 136,  164 => 123,  161 => 122,  155 => 121,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/index_new2.html" %}*/
/* {% block style%}*/
/* <style>*/
/*     /*.veil ul li:nth-child(3) a{*//* */
/*         /*color:#FFD48B;*//* */
/*     /*}*//* */
/* */
/*     @media only screen and (min-width: 1200px) {*/
/*         .sandbox-content {*/
/*             padding-left: 145px;*/
/*             padding-right: 145px;*/
/*         }*/
/*     }*/
/* */
/*     #draw_list{display: none;}*/
/* */
/*     .title-animate*/
/*     {*/
/*         animation:title-animate-move .5s ease;*/
/*         -webkit-animation:title-animate-move .5s ease; /* Safari 和 Chrome *//* */
/*     }*/
/* */
/*     /*.shade-opacity-animate*//* */
/*     /*{*//* */
/*         /*animation:shade-opacity-animate-move .5s ease;*//* */
/*         /*-webkit-animation:shade-opacity-animate-move .5s ease; !* Safari 和 Chrome *!*//* */
/*     /*}*//* */
/* */
/*     .work-list-style{*/
/*         margin-left:-15px;margin-right: -15px;margin-top: 30px;*/
/*     }*/
/* */
/* */
/*     .padding-lr-15-0{padding-left: 15px;padding-right: 15px;}*/
/* */
/*     @-webkit-keyframes title-animate-move {*/
/*         0%{transform:translateY(100%);}*/
/*         100%{transform:translateY(0%);}*/
/*     }*/
/* */
/*     @-webkit-keyframes shade-opacity-animate-move {*/
/*         0%{background-color:rgba(0,0,0,.2);}*/
/*         10%{background-color:rgba(0,0,0,.24);}*/
/*         20%{background-color:rgba(0,0,0,.28);}*/
/*         30%{background-color:rgba(0,0,0,.32);}*/
/*         40%{background-color:rgba(0,0,0,.36);}*/
/*         50%{background-color:rgba(0,0,0,.40);}*/
/*         60%{background-color:rgba(0,0,0,.44);}*/
/*         70%{background-color:rgba(0,0,0,.48);}*/
/*         80%{background-color:rgba(0,0,0,.52);}*/
/*         90%{background-color:rgba(0,0,0,.56);}*/
/*         100%{background-color:rgba(0,0,0,.6);}*/
/*     }*/
/* */
/*     @media only screen and (min-width: 1200px) {*/
/*         .sandbox-content {*/
/*             padding-left: 145px;*/
/*             padding-right: 145px;*/
/*         }*/
/*     }*/
/* */
/*     @media only screen and (max-width: 768px) {*/
/*         .work-space {*/
/*             padding: 0;*/
/*         }*/
/*         .work-list-style{margin-left:0;margin-right: 0;margin-top: 0;}*/
/*         .work-desc-panel h1{*/
/*             margin-top: 15px;*/
/*         }*/
/*         .padding-lr-15-0{padding-left: 0;padding-right: 0;}*/
/*     }*/
/* */
/*     .classify-rotate*/
/*     {*/
/*         transform:rotate(45deg);*/
/*         transition: all 0.2s ease;*/
/*     }*/
/* */
/*     .classify-rotate-normal*/
/*     {*/
/*         transform:rotate(0deg);*/
/*         transition: all 0.2s ease;*/
/*     }*/
/* */
/*     #draw_list.is-visible{*/
/*         display: block;*/
/*     }*/
/* */
/*     #draw_list.draw_list_m{*/
/*         position: absolute;*/
/*         z-index: 999;*/
/*         background: #ffffff;*/
/*         left:0;*/
/*         right: 0;*/
/*     }*/
/* */
/*     .img-show-panel:hover:before {*/
/*         opacity: 1;*/
/*     }*/
/* */
/*     .img-show-panel:before{*/
/*         background: rgba( 0, 0, 0, 0.5 );*/
/*         content: "";*/
/*         opacity: 0;*/
/*         position: absolute;*/
/*         bottom: 0;*/
/*         left: 0;*/
/*         right: 0;*/
/*         top: 0;*/
/*         transition: opacity .3s ease-in-out, background .3s ease-in-out;*/
/*     }*/
/* */
/*     @media only screen and (max-width: 768px) {*/
/*         .img-show-panel:hover:before {*/
/*             opacity: 0;*/
/*         }*/
/*     }*/
/* */
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"><span style="line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;">WORKS</span></div>{% endblock %}*/
/* {% block body %}*/
/* <div class="common-padding padding-top-122-49" style="margin-bottom: 100px;">*/
/*     <div class="title-text2 padding-60-30">OUR WORK</div>*/
/* <div class="works-menu" style="margin-top: 30px;">*/
/*     <ul class="works-type-new">*/
/*         <li><a href="works" class="classify-text a-hover">全部</a></li>*/
/*         <li><a href="/works?type=2" class="classify-text a-hover">产品设计</a></li>*/
/*         <li><a href="/works?type=3" class="classify-text a-hover">交互与视觉设计</a></li>*/
/*         <li><a href="/works?type=4" class="classify-text a-hover">企业/品牌设计</a></li>*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="menu-m-panel" style="margin-bottom: 30px;position: relative;">*/
/*     <div class="in-bl-line" style="margin-top: 16px;">*/
/*         <div class="in-bl-line-item v-a-m" style="width: 50%;"><div class="classify-text" style="line-height: 14px;">{{ typeText }}</div></div>*/
/*         <div class="in-bl-line-item t-al-r v-a-m" style="width: 50%">*/
/*             <img style="width: 16px;" src="/public/images/icon_add_nor@3x.png" onclick="drawSwitch()" id="switch_img" data-type="0"/>*/
/*         </div>*/
/*     </div>*/
/*     <div style="border-bottom: 1px solid #000000;margin-top: 16px;"></div>*/
/* */
/*     <!--<div id="draw_list" class="draw_list_m">-->*/
/*         <!--<div class="classify-text" style="margin-top: 30px;"><a class="classify-text" href="/works?type=2">产品设计</a></div>-->*/
/*         <!--<div class="classify-text" style="margin-top: 30px;"><a class="classify-text" href="/works?type=3">交互与视觉设计</a></div>-->*/
/*         <!--<div class="classify-text" style="margin-top: 30px;"><a class="classify-text" href="/works?type=4">企业/品牌设计</a></div>-->*/
/*         <!--<div class="classify-text" style="margin-top: 30px;"><a class="classify-text" href="/works">全部</a></div>-->*/
/*     <!--</div>-->*/
/* */
/*     <div style="position: absolute;left: 0;right: 0;height: 240px;overflow: hidden;">*/
/*         <div id="draw_list" class="draw_list_m">*/
/*         <div class="classify-text" style="margin-top: 30px;line-height: 14px;"><a class="classify-text" href="/works?type=2" style="line-height: 14px;">产品设计</a></div>*/
/*         <div class="classify-text" style="margin-top: 30px;line-height: 14px;"><a class="classify-text" href="/works?type=3" style="line-height: 14px;">交互与视觉设计</a></div>*/
/*         <div class="classify-text" style="margin-top: 30px;line-height: 14px;"><a class="classify-text" href="/works?type=4" style="line-height: 14px;">企业/品牌设计</a></div>*/
/*         <div class="classify-text" style="margin-top: 30px;margin-bottom: 30px;line-height: 14px;"><a class="classify-text" href="/works" style="line-height: 14px;">全部</a></div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!--<div style="height: 240px;"></div>-->*/
/* </div>*/
/* <div class="works-list work-list-style">*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/1.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/2.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/3.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/4.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/1.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/2.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/3.jpg"/></div></div></div>-->*/
/*     <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/4.jpg"/></div></div></div>-->*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/* <script src="/public/assets/js/imgLiquid.js"></script>*/
/* <script>*/
/*     function getQueryString(name) {*/
/*         var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");*/
/*         var r = window.location.search.substr(1).match(reg);*/
/*         if (r != null) return unescape(r[2]); return null;*/
/*     }*/
/* */
/*     function drawSwitch()*/
/*     {*/
/*         if( $('#switch_img').attr('data-type') == 1)*/
/*         {*/
/* //            $('#draw_list').hide();*/
/*             $('.draw_list_m').removeClass('animated fadeIn');*/
/*             $('.draw_list_m').addClass('animated fadeOutUp');*/
/* */
/*             $('#switch_img').attr('data-type',0);*/
/*             $('#switch_img').removeClass('classify-rotate');*/
/*             $('#switch_img').addClass('classify-rotate-normal');*/
/* //            $('#switch_img').attr('src','/public/images/icon_add_nor@3x.png');*/
/*         } else*/
/*         {*/
/* //            $('#draw_list').show();*/
/* //            $('#draw_list').addClass('is-visible animated fadeInDown');*/
/*             $('.draw_list_m').removeClass('animated fadeOutUp');*/
/*             $('.draw_list_m').addClass('is-visible animated fadeInDown');*/
/* */
/* */
/* */
/*             $('#switch_img').attr('data-type',1);*/
/*             $('#switch_img').removeClass('classify-rotate-normal');*/
/*             $('#switch_img').addClass('classify-rotate');*/
/* //            $('#switch_img').attr('src','/public/images/home_icon_off@3x.png');*/
/*         }*/
/*     }*/
/* */
/* */
/*     $.createCache = function( requestFunction ) {*/
/*         var cache = {};*/
/*         return function( key, callback ) {*/
/*             if ( !cache[ key ] ) {*/
/*                 cache[ key ] = $.Deferred(function( defer ) {*/
/*                     requestFunction( defer, key );*/
/*                 }).promise();*/
/*             }*/
/*             return cache[ key ].done( callback );*/
/*         };*/
/*     }*/
/* */
/*     $.loadImage = $.createCache(function( defer, url ) {*/
/*         var image = new Image();*/
/*         function cleanUp() {*/
/*             image.onload = image.onerror = null;*/
/*         }*/
/*         defer.then( cleanUp, cleanUp );*/
/*         image.onload = function() {*/
/*             defer.resolve( url );*/
/*         };*/
/*         image.onerror = defer.reject;*/
/*         image.src = url;*/
/*     });*/
/* */
/* */
/*     /*加载works*//* */
/*     function refreshWork(){*/
/*         $.ajax({*/
/*             url:'/worklist',*/
/*             data:{type:getQueryString('type')},*/
/*             dataType:'json',*/
/*             success:function(data){*/
/*                 if(data.status){*/
/*                     var listItem = '';*/
/*                     console.log(data.data);*/
/*                     $.each(data.data,function(key,val){*/
/*                         listItem += '<div class="response-free-width'+val.width_type+' work-space" onclick="goHref(\'/work?id='+val.id+'\')"><div class="img-show-panel" data-title="'+val.title+'" data-abstract="'+val.abstract+'" data-id='+val.id+'><a href="/work?id='+val.id+'"><img class="work-item" img-data="'+val.face_img+'" src="'+val.face_img+'"/></a></div></div></div><div class="work-desc-panel " onclick="goHref(\'/work?id='+val.id+'\')" class="padding-lr-15-0"><h1>'+val.title+'</h1><p>'+val.abstract+'</p></div>';*/
/*                     });*/
/* //                    for(var item  in data.data){*/
/* //                        console.log(item);*/
/* //                        listItem += '<div><div class="img-wrapper"><div class="img-data" img-data="'+item.face_img+'"/></div></div></div>';*/
/* //                    }*/
/*                     $('.works-list').append(listItem);*/
/* */
/* //                    $('.work-item').each(function(){*/
/* //                        var self = this;*/
/* //                        $.loadImage($(this).attr('img-data')).done(function(){*/
/* //                            var realImg = $(self).attr('img-data');*/
/* //                            $(self).attr('src',realImg);*/
/* //                            console.log($(self).parents('.img-wrapper'));*/
/* //                            $(self).parents('.img-wrapper').attr('style','');*/
/* //                            $(self).parents('.img-wrapper').imgLiquid();*/
/* //                        });*/
/* //                    });*/
/* */
/* */
/* */
/* */
/* //                    $('.img-data').each(function(){*/
/* //                        var src = $(this).attr('img-data');*/
/* //                        var id = $(this).attr('data-id');*/
/* //                        $(this).replaceWith('<a href="/work?id="'+id+'><img class="work-item" src="'+src+'"/></a>');*/
/* //                    });*/
/* */
/*                     $(".img-wrapper").imgLiquid();*/
/*                     $(".img-show-panel").imgLiquid();*/
/* //                    var afterHtml = '';*/
/* //                    var imgArr = data.data.imgs.split(',');*/
/* //                    console.log(imgArr);*/
/* //                    $.each(imgArr,function(ind,obj){*/
/* //                        afterHtml += '<img style="max-width: 100%;margin-bottom:28px;" src="'+obj+'">';*/
/* //                    });*/
/* //                    $('#work-panel').html(afterHtml);*/
/* //                    $('#work-title').html(data.data.title);*/
/*                 }*/
/*             },*/
/*             error:function(){*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     $('body').on('mouseover','.img-show-panel',function(){*/
/*         if($(this).find('.work-item-shade').length){*/
/*             return;*/
/*         }else{*/
/*             $(this).append('<div onclick="goHref(\'/work?id='+$(this).attr('data-id')+'\')" class="work-item-shade" style="position:absolute;top:0;right:0;bottom:0;left:0;z-index:99;"><div class="shadow-title title-animate">'+$(this).attr('data-title')+'</div><div class="shadow-desc">'+$(this).attr('data-abstract')+'</div></div>');*/
/*             return;*/
/*         }*/
/*     });*/
/* */
/* */
/*     $('body').on('mouseleave','.img-show-panel',function(){*/
/* //            console.log(4);*/
/*         $(this).find('.work-item-shade').remove();*/
/*     });*/
/* */
/*     $(function(){*/
/* //        $('.img-data').each(function(){*/
/* //            var src = $(this).attr('img-data');*/
/* //            $(this).replaceWith('<img class="work-item" src="'+src+'"/>');*/
/* //        });*/
/* //*/
/* //        $(".img-wrapper").imgLiquid();*/
/* */
/*         refreshWork();*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
