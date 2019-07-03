<?php

/* index/home_new.html */
class __TwigTemplate_905eda467cf11b6c148d04704d05f5a32999fc50e19c6bd201ff972cb55f0a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index.html", "index/home_new.html", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout/index.html";
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
    body{min-height: 100%;background-color: #ffffff;}
    .veil ul li:nth-child(1) a{
        color:#FFD48B;
    }

    /*.mm-logo{*/
        /*display: none;*/
    /*}*/

    #mm-log-pc{display: none}

    /*@media only screen and (max-width: 768px) {*/
        /*#mm-log-pc{display: none;}*/
        /*#mm-log{display: inline-block}*/
    /*}*/

    /*@media only screen and (min-width: 768px) {*/
        /*#mm-log-pc{display: none;}*/
        /*#mm-log{display: inline-block}*/
    /*}*/


    .home-content{
        position: fixed;
        left: 0;
        bottom: 0;
        right: 0;
        top:84px;
        background-color: #ffffff;
    }

    .img-content{
        width: 100%;
        height: 100%;
        padding-bottom: 36px;
        display: table;
        overflow: hidden;
    }

    /*.img-content img{*/
        /*width: 240px;*/
    /*}*/
</style>
";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "    <div class=\"home-content\">
        <div class=\"img-content\">
            <div style=\"display: table-cell;vertical-align: middle;text-align: center;\">
                <a href=\"/works\"><img src=\"/public/images/think_m.png\" class=\"mm-logo\" id=\"mm-log\"/></a>
                <a href=\"/works\"><img src=\"/public/images/thinker.png\" class=\"mm-logo\" id=\"mm-log-pc\"/></a>
            </div>
        </div>
    </div>
    <div style=\"position: fixed;bottom: 20px;right: 0;left: 0;text-align: center;\"><a target=\"_blank\" style=\"color:#5a5a5a\" href=\"http://www.miitbeian.gov.cn/\">粤ICP备16091051号-1</a></div>
";
    }

    // line 59
    public function block_script($context, array $blocks = array())
    {
        // line 60
        echo "<script>
    /*\$(function(){
       \$('body').append('<div style=\"position: fixed;top:84px;bottom:84px;right: 0;left: 0;\"><div style=\"display: table;width: 100%;height: 100%;\"><div style=\"display: table-cell;vertical-align: middle;text-align: center;\"><img src=\"/public/images/think_m.png\" class=\"mm-logo\"/></div></div></div><div style=\"position: fixed;bottom: 24px;right: 0;left: 0;text-align: center;\"><a target=\"_blank\" style=\"color:#5a5a5a\" href=\"http://www.miitbeian.gov.cn/\">粤ICP备16091051号-1</a></div>');
    });*/

//    scaleImg();

    \$(function(){
        scaleImg();
    });

    \$(window).resize(function() {
        scaleImg();
    });

    function scaleImg(){
        if(\$(window).width() <= 768){
            \$('#mm-log-pc').hide();
            \$('#mm-log').show();
            var imgContent = \$('.home-content');
            var imgContentWidth = imgContent.width();
            var imgContentHeight = imgContent.height();

            console.log('s:' + imgContentWidth + ',' + imgContentHeight);

            var point = geometric(632,958,imgContentWidth - 60,imgContentHeight - 80,10);
            \$('#mm-log').width(point[0]);
        }else{
            \$('#mm-log').hide();
            \$('#mm-log-pc').show();
            var imgContent = \$('.home-content');
            var imgContentWidth = imgContent.width();
            var imgContentHeight = imgContent.height();

            console.log('s:' + imgContentWidth + ',' + imgContentHeight);

            var point = geometric(1086,798,imgContentWidth - 120,imgContentHeight - 80,10);
            \$('#mm-log-pc').width(point[0]);
        }

    }




    function geometric(width,height,limit_width,limit_height,step){
        if((width <= limit_width) && (height <= limit_height)){
            return [width,height];
        }

        if(!(width <= limit_width)){
             var scale = limit_width / width;
             width = width * scale;
             height = height * scale;
        }

        if(!(height <= limit_height)){
            var scale = limit_height / height;
            width = width * scale;
            height = height * scale;
        }

        console.log(width + ',' + height);

        return [width,height];
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "index/home_new.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 60,  97 => 59,  84 => 49,  81 => 48,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/index.html" %}*/
/* {% block style %}*/
/* <style>*/
/*     body{min-height: 100%;background-color: #ffffff;}*/
/*     .veil ul li:nth-child(1) a{*/
/*         color:#FFD48B;*/
/*     }*/
/* */
/*     /*.mm-logo{*//* */
/*         /*display: none;*//* */
/*     /*}*//* */
/* */
/*     #mm-log-pc{display: none}*/
/* */
/*     /*@media only screen and (max-width: 768px) {*//* */
/*         /*#mm-log-pc{display: none;}*//* */
/*         /*#mm-log{display: inline-block}*//* */
/*     /*}*//* */
/* */
/*     /*@media only screen and (min-width: 768px) {*//* */
/*         /*#mm-log-pc{display: none;}*//* */
/*         /*#mm-log{display: inline-block}*//* */
/*     /*}*//* */
/* */
/* */
/*     .home-content{*/
/*         position: fixed;*/
/*         left: 0;*/
/*         bottom: 0;*/
/*         right: 0;*/
/*         top:84px;*/
/*         background-color: #ffffff;*/
/*     }*/
/* */
/*     .img-content{*/
/*         width: 100%;*/
/*         height: 100%;*/
/*         padding-bottom: 36px;*/
/*         display: table;*/
/*         overflow: hidden;*/
/*     }*/
/* */
/*     /*.img-content img{*//* */
/*         /*width: 240px;*//* */
/*     /*}*//* */
/* </style>*/
/* {% endblock %}*/
/* {% block body%}*/
/*     <div class="home-content">*/
/*         <div class="img-content">*/
/*             <div style="display: table-cell;vertical-align: middle;text-align: center;">*/
/*                 <a href="/works"><img src="/public/images/think_m.png" class="mm-logo" id="mm-log"/></a>*/
/*                 <a href="/works"><img src="/public/images/thinker.png" class="mm-logo" id="mm-log-pc"/></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div style="position: fixed;bottom: 20px;right: 0;left: 0;text-align: center;"><a target="_blank" style="color:#5a5a5a" href="http://www.miitbeian.gov.cn/">粤ICP备16091051号-1</a></div>*/
/* {% endblock%}*/
/* {% block script %}*/
/* <script>*/
/*     /*$(function(){*/
/*        $('body').append('<div style="position: fixed;top:84px;bottom:84px;right: 0;left: 0;"><div style="display: table;width: 100%;height: 100%;"><div style="display: table-cell;vertical-align: middle;text-align: center;"><img src="/public/images/think_m.png" class="mm-logo"/></div></div></div><div style="position: fixed;bottom: 24px;right: 0;left: 0;text-align: center;"><a target="_blank" style="color:#5a5a5a" href="http://www.miitbeian.gov.cn/">粤ICP备16091051号-1</a></div>');*/
/*     });*//* */
/* */
/* //    scaleImg();*/
/* */
/*     $(function(){*/
/*         scaleImg();*/
/*     });*/
/* */
/*     $(window).resize(function() {*/
/*         scaleImg();*/
/*     });*/
/* */
/*     function scaleImg(){*/
/*         if($(window).width() <= 768){*/
/*             $('#mm-log-pc').hide();*/
/*             $('#mm-log').show();*/
/*             var imgContent = $('.home-content');*/
/*             var imgContentWidth = imgContent.width();*/
/*             var imgContentHeight = imgContent.height();*/
/* */
/*             console.log('s:' + imgContentWidth + ',' + imgContentHeight);*/
/* */
/*             var point = geometric(632,958,imgContentWidth - 60,imgContentHeight - 80,10);*/
/*             $('#mm-log').width(point[0]);*/
/*         }else{*/
/*             $('#mm-log').hide();*/
/*             $('#mm-log-pc').show();*/
/*             var imgContent = $('.home-content');*/
/*             var imgContentWidth = imgContent.width();*/
/*             var imgContentHeight = imgContent.height();*/
/* */
/*             console.log('s:' + imgContentWidth + ',' + imgContentHeight);*/
/* */
/*             var point = geometric(1086,798,imgContentWidth - 120,imgContentHeight - 80,10);*/
/*             $('#mm-log-pc').width(point[0]);*/
/*         }*/
/* */
/*     }*/
/* */
/* */
/* */
/* */
/*     function geometric(width,height,limit_width,limit_height,step){*/
/*         if((width <= limit_width) && (height <= limit_height)){*/
/*             return [width,height];*/
/*         }*/
/* */
/*         if(!(width <= limit_width)){*/
/*              var scale = limit_width / width;*/
/*              width = width * scale;*/
/*              height = height * scale;*/
/*         }*/
/* */
/*         if(!(height <= limit_height)){*/
/*             var scale = limit_height / height;*/
/*             width = width * scale;*/
/*             height = height * scale;*/
/*         }*/
/* */
/*         console.log(width + ',' + height);*/
/* */
/*         return [width,height];*/
/*     }*/
/* </script>*/
/* {% endblock %}*/
