<?php

/* index/home.html */
class __TwigTemplate_5db8b1b0dc8ced099b6bd307ec288851a9a6a7bd74345cf05f2ec9f7320b8f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index_new2.html", "index/home.html", 1);
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


    .works-type li:nth-child(";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ") a{  color:#FFD48B;  }

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



    /*div#white-overlay {*/
        /*position: fixed;*/
        /*top: 0;*/
        /*left: 0;*/
        /*right: 0;*/
        /*bottom: 0;*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*z-index: 50;*/
        /*background-color: #000;*/
        /*visibility: hidden;*/
        /*opacity: 0;*/
        /*display: -ms-flexbox;*/
        /*display: flex;*/
        /*-ms-flex-pack: center;*/
        /*justify-content: center;*/
        /*-ms-flex-align: center;*/
        /*align-items: center;*/
        /*transition: all 1.5s ease 0s*/
    /*}*/

    /*div#white-overlay.visible {*/
        /*visibility: visible;*/
        /*opacity: 1;*/
        /*transition: all 1.5s ease 0s*/
    /*}*/

    /*p#white-overlay-title {*/
        /*color: #2a2a2a;*/
        /*width: 100%;*/
        /*margin: 0;*/
        /*text-align: center;*/
        /*line-height: 1*/
    /*}*/

    /*div#white-home-overlay {*/
        /*position: fixed;*/
        /*top: 0;*/
        /*left: 0;*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*z-index: 500;*/
        /*background-color: #fff;*/
        /*visibility: hidden;*/
        /*opacity: 0;*/
        /*display: -ms-flexbox;*/
        /*display: flex;*/
        /*-ms-flex-pack: center;*/
        /*justify-content: center;*/
        /*-ms-flex-align: center;*/
        /*align-items: center;*/
        /*-o-transition: 1.5s;*/
        /*-ms-transition: 1.5s;*/
        /*-moz-transition: 1.5s;*/
        /*-webkit-transition: 1.5s*/
    /*}*/

    /*div#white-home-overlay.visible {*/
        /*visibility: visible;*/
        /*opacity: 1;*/
        /*-o-transition: 1.5s;*/
        /*-ms-transition: 1.5s;*/
        /*-moz-transition: 1.5s;*/
        /*-webkit-transition: 1.5s*/
    /*}*/

    /*#white-overlay-title{*/
        /*color:#fff !important;*/
    /*}*/

    /*div#white-home-overlay-title {*/
        /*width: 300px;*/
        /*height: 164.4px;*/
        /*background-image: url(../images/svgs/logo-large-black.svg);*/
        /*background-size: contain;*/
        /*background-repeat: no-repeat;*/
        /*background-position: center center;*/
    /*}*/

    /*.loading-bar{*/
        /*position: absolute;*/
        /*left:0;*/
        /*right: 0;*/
        /*top:0;*/
        /*border-bottom: 4px solid #fff;*/
        /*transform: translateX(-100%);*/
    /*}*/

    /*.loading-bar.show{*/
        /*position: absolute;*/
        /*left:0;*/
        /*right: 0;*/
        /*top:0;*/
        /*border-bottom: 4px solid #fff;*/
        /*transform: translateX(0%);*/
        /*transition: all 1s ease;*/
    /*}*/

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

    // line 152
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"></div>";
    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        // line 154
        echo "
<p class=\"sologon-text common-padding home-margin padding-top-122-49\">
    DO<br/>
    <span style=\"color:#fc1212;\">R</span>IGHT<br/>
    <span style=\"color: #0080ff;\">R</span>EFINEMENT<br/>
    <span style=\"color: #fef200;\">R</span>ATIONALIZATION
</p>


<div class=\"common-padding\">
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

    <div class=\"opr-line easy-l\" style=\"margin-bottom: 100px;\">
        <a href=\"/works\" class=\"a-hover\">更多</a>
    </div>
</div>
";
    }

    // line 181
    public function block_script($context, array $blocks = array())
    {
        // line 182
        echo "<script src=\"/public/assets/js/imgLiquid.js\"></script>
<script>



    function getQueryString(name) {
        var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
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
            data:{type:1},
            dataType:'json',
            success:function(data){
                if(data.status){
                    var listItem = '';
                    console.log(data.data);


                    \$.each(data.data,function(key,val){
                        listItem += '<div class=\"response-free-width'+val.width_type+' work-space\" onclick=\"goHref(\\'/work?id='+val.id+'\\')\"><div class=\"img-show-panel\" data-title=\"'+val.title+'\" data-abstract=\"'+val.abstract+'\" data-id='+val.id+'><a href=\"/work?id='+val.id+'\"><img class=\"work-item\" img-data=\"'+val.face_img+'\" src=\"'+val.face_img+'\"/></a></div></div></div><div class=\"work-desc-panel \" onclick=\"goHref(\\'/work?id='+val.id+'\\')\" class=\"padding-lr-15-0\"><h1>'+val.title+'</h1><p>'+val.abstract+'</p></div>';
                    });
                    \$('.works-list').append(listItem);

                    \$(\".img-wrapper\").imgLiquid();
                    \$(\".img-show-panel\").imgLiquid();
                }
            },
            error:function(){
            }
        });
    }

    function refreshWork_static(){
        (function(data){
            if(data.status){
                var listItem = '';
                console.log(data.data);


                \$.each(data.data,function(key,val){
                    listItem += '<div class=\"response-free-width'+val.width_type+' work-space\" onclick=\"goHref(\\'work'+val.id+'.html\\')\"><div class=\"img-show-panel\" data-title=\"'+val.title+'\" data-abstract=\"'+val.abstract+'\" data-id='+val.id+'><a href=\"/work?id='+val.id+'\"><img class=\"work-item\" img-data=\"'+val.face_img+'\" src=\"'+val.face_img+'\"/></a></div></div></div><div class=\"work-desc-panel \" onclick=\"goHref(\\'work'+val.id+'.html\\')\" class=\"padding-lr-15-0\"><h1>'+val.title+'</h1><p>'+val.abstract+'</p></div>';
                });
                \$('.works-list').append(listItem);

                \$(\".img-wrapper\").imgLiquid();
                \$(\".img-show-panel\").imgLiquid();
            }
        })(\"staticHoldValue1\");
    }





    \$(function(){
        \$('body').on('mouseover','.img-show-panel',function(){
            if(\$(this).find('.work-item-shade').length){
                return;
            }else{
                \$(this).append('<div onclick=\"goHref(\\'/work?id='+\$(this).attr('data-id')+'\\')\" class=\"work-item-shade\" style=\"position:absolute;top:0;right:0;bottom:0;left:0;z-index:99;\"><div class=\"shadow-title title-animate\">'+\$(this).attr('data-title')+'</div><div class=\"shadow-desc\">'+\$(this).attr('data-abstract')+'</div></div>');
                return;
            }
        });

        \$('body').on('mouseleave','.img-show-panel',function(){
            \$(this).find('.work-item-shade').remove();
        });
        refreshWork();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "index/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 182,  227 => 181,  198 => 154,  195 => 153,  189 => 152,  49 => 16,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/index_new2.html" %}*/
/* {% block style%}*/
/* <style>*/
/*     /*.veil ul li:nth-child(3) a{*//* */
/*     /*color:#FFD48B;*//* */
/*     /*}*//* */
/* */
/*     @media only screen and (min-width: 1200px) {*/
/*         .sandbox-content {*/
/*             padding-left: 145px;*/
/*             padding-right: 145px;*/
/*         }*/
/*     }*/
/* */
/* */
/*     .works-type li:nth-child({{ type }}) a{  color:#FFD48B;  }*/
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
/* */
/* */
/*     /*div#white-overlay {*//* */
/*         /*position: fixed;*//* */
/*         /*top: 0;*//* */
/*         /*left: 0;*//* */
/*         /*right: 0;*//* */
/*         /*bottom: 0;*//* */
/*         /*width: 100%;*//* */
/*         /*height: 100%;*//* */
/*         /*z-index: 50;*//* */
/*         /*background-color: #000;*//* */
/*         /*visibility: hidden;*//* */
/*         /*opacity: 0;*//* */
/*         /*display: -ms-flexbox;*//* */
/*         /*display: flex;*//* */
/*         /*-ms-flex-pack: center;*//* */
/*         /*justify-content: center;*//* */
/*         /*-ms-flex-align: center;*//* */
/*         /*align-items: center;*//* */
/*         /*transition: all 1.5s ease 0s*//* */
/*     /*}*//* */
/* */
/*     /*div#white-overlay.visible {*//* */
/*         /*visibility: visible;*//* */
/*         /*opacity: 1;*//* */
/*         /*transition: all 1.5s ease 0s*//* */
/*     /*}*//* */
/* */
/*     /*p#white-overlay-title {*//* */
/*         /*color: #2a2a2a;*//* */
/*         /*width: 100%;*//* */
/*         /*margin: 0;*//* */
/*         /*text-align: center;*//* */
/*         /*line-height: 1*//* */
/*     /*}*//* */
/* */
/*     /*div#white-home-overlay {*//* */
/*         /*position: fixed;*//* */
/*         /*top: 0;*//* */
/*         /*left: 0;*//* */
/*         /*width: 100%;*//* */
/*         /*height: 100%;*//* */
/*         /*z-index: 500;*//* */
/*         /*background-color: #fff;*//* */
/*         /*visibility: hidden;*//* */
/*         /*opacity: 0;*//* */
/*         /*display: -ms-flexbox;*//* */
/*         /*display: flex;*//* */
/*         /*-ms-flex-pack: center;*//* */
/*         /*justify-content: center;*//* */
/*         /*-ms-flex-align: center;*//* */
/*         /*align-items: center;*//* */
/*         /*-o-transition: 1.5s;*//* */
/*         /*-ms-transition: 1.5s;*//* */
/*         /*-moz-transition: 1.5s;*//* */
/*         /*-webkit-transition: 1.5s*//* */
/*     /*}*//* */
/* */
/*     /*div#white-home-overlay.visible {*//* */
/*         /*visibility: visible;*//* */
/*         /*opacity: 1;*//* */
/*         /*-o-transition: 1.5s;*//* */
/*         /*-ms-transition: 1.5s;*//* */
/*         /*-moz-transition: 1.5s;*//* */
/*         /*-webkit-transition: 1.5s*//* */
/*     /*}*//* */
/* */
/*     /*#white-overlay-title{*//* */
/*         /*color:#fff !important;*//* */
/*     /*}*//* */
/* */
/*     /*div#white-home-overlay-title {*//* */
/*         /*width: 300px;*//* */
/*         /*height: 164.4px;*//* */
/*         /*background-image: url(../images/svgs/logo-large-black.svg);*//* */
/*         /*background-size: contain;*//* */
/*         /*background-repeat: no-repeat;*//* */
/*         /*background-position: center center;*//* */
/*     /*}*//* */
/* */
/*     /*.loading-bar{*//* */
/*         /*position: absolute;*//* */
/*         /*left:0;*//* */
/*         /*right: 0;*//* */
/*         /*top:0;*//* */
/*         /*border-bottom: 4px solid #fff;*//* */
/*         /*transform: translateX(-100%);*//* */
/*     /*}*//* */
/* */
/*     /*.loading-bar.show{*//* */
/*         /*position: absolute;*//* */
/*         /*left:0;*//* */
/*         /*right: 0;*//* */
/*         /*top:0;*//* */
/*         /*border-bottom: 4px solid #fff;*//* */
/*         /*transform: translateX(0%);*//* */
/*         /*transition: all 1s ease;*//* */
/*     /*}*//* */
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
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"></div>{% endblock %}*/
/* {% block body %}*/
/* */
/* <p class="sologon-text common-padding home-margin padding-top-122-49">*/
/*     DO<br/>*/
/*     <span style="color:#fc1212;">R</span>IGHT<br/>*/
/*     <span style="color: #0080ff;">R</span>EFINEMENT<br/>*/
/*     <span style="color: #fef200;">R</span>ATIONALIZATION*/
/* </p>*/
/* */
/* */
/* <div class="common-padding">*/
/*     <div class="works-list work-list-style">*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/1.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/2.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/3.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/4.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/1.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/2.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/3.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/4.jpg"/></div></div></div>-->*/
/*     </div>*/
/* */
/*     <div class="opr-line easy-l" style="margin-bottom: 100px;">*/
/*         <a href="/works" class="a-hover">更多</a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/* <script src="/public/assets/js/imgLiquid.js"></script>*/
/* <script>*/
/* */
/* */
/* */
/*     function getQueryString(name) {*/
/*         var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");*/
/*         var r = window.location.search.substr(1).match(reg);*/
/*         if (r != null) return unescape(r[2]); return null;*/
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
/*             data:{type:1},*/
/*             dataType:'json',*/
/*             success:function(data){*/
/*                 if(data.status){*/
/*                     var listItem = '';*/
/*                     console.log(data.data);*/
/* */
/* */
/*                     $.each(data.data,function(key,val){*/
/*                         listItem += '<div class="response-free-width'+val.width_type+' work-space" onclick="goHref(\'/work?id='+val.id+'\')"><div class="img-show-panel" data-title="'+val.title+'" data-abstract="'+val.abstract+'" data-id='+val.id+'><a href="/work?id='+val.id+'"><img class="work-item" img-data="'+val.face_img+'" src="'+val.face_img+'"/></a></div></div></div><div class="work-desc-panel " onclick="goHref(\'/work?id='+val.id+'\')" class="padding-lr-15-0"><h1>'+val.title+'</h1><p>'+val.abstract+'</p></div>';*/
/*                     });*/
/*                     $('.works-list').append(listItem);*/
/* */
/*                     $(".img-wrapper").imgLiquid();*/
/*                     $(".img-show-panel").imgLiquid();*/
/*                 }*/
/*             },*/
/*             error:function(){*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     function refreshWork_static(){*/
/*         (function(data){*/
/*             if(data.status){*/
/*                 var listItem = '';*/
/*                 console.log(data.data);*/
/* */
/* */
/*                 $.each(data.data,function(key,val){*/
/*                     listItem += '<div class="response-free-width'+val.width_type+' work-space" onclick="goHref(\'work'+val.id+'.html\')"><div class="img-show-panel" data-title="'+val.title+'" data-abstract="'+val.abstract+'" data-id='+val.id+'><a href="/work?id='+val.id+'"><img class="work-item" img-data="'+val.face_img+'" src="'+val.face_img+'"/></a></div></div></div><div class="work-desc-panel " onclick="goHref(\'work'+val.id+'.html\')" class="padding-lr-15-0"><h1>'+val.title+'</h1><p>'+val.abstract+'</p></div>';*/
/*                 });*/
/*                 $('.works-list').append(listItem);*/
/* */
/*                 $(".img-wrapper").imgLiquid();*/
/*                 $(".img-show-panel").imgLiquid();*/
/*             }*/
/*         })("staticHoldValue1");*/
/*     }*/
/* */
/* */
/* */
/* */
/* */
/*     $(function(){*/
/*         $('body').on('mouseover','.img-show-panel',function(){*/
/*             if($(this).find('.work-item-shade').length){*/
/*                 return;*/
/*             }else{*/
/*                 $(this).append('<div onclick="goHref(\'/work?id='+$(this).attr('data-id')+'\')" class="work-item-shade" style="position:absolute;top:0;right:0;bottom:0;left:0;z-index:99;"><div class="shadow-title title-animate">'+$(this).attr('data-title')+'</div><div class="shadow-desc">'+$(this).attr('data-abstract')+'</div></div>');*/
/*                 return;*/
/*             }*/
/*         });*/
/* */
/*         $('body').on('mouseleave','.img-show-panel',function(){*/
/*             $(this).find('.work-item-shade').remove();*/
/*         });*/
/*         refreshWork();*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
