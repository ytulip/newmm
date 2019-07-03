<?php

/* _layout/index.html */
class __TwigTemplate_d177cd67dc87b45a6f43a1387b27a8818a6c4afca1d4460c1e03d4ef9711b06a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'pageTitle' => array($this, 'block_pageTitle'),
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
    <title>明明同学</title>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement(\"script\");
            hm.src = \"https://hm.baidu.com/hm.js?3bc3fd956a80e2f2f363551db82e0413\";
            var s = document.getElementsByTagName(\"script\")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <link rel=\"stylesheet\" href=\"/public/assets/css/bootstrap.css\"/>
    <link href=\"/public/assets/css/font-awesome.css\" rel=\"stylesheet\" />
    <link href=\"/public/css/work.css\" rel=\"stylesheet\" />
    <link href=\"/public/css/animate.css\" rel=\"stylesheet\" />
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
            font-family: FZLTXHB--B51-0;
            font-size: 27px;
            color: #FFFFFF;
        }

        .menu-list li{
            margin-bottom: 12px;
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

    </style>
    ";
        // line 126
        $this->displayBlock('style', $context, $blocks);
        // line 127
        echo "</head>
<body>
<div class=\"sandbox\">
    <div class=\"sandbox-header\">
        <div class=\"logo-wrapper\"><a><img src=\"/public/images/logo.png\"/></a></div>
        ";
        // line 132
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 134
        echo "        <div class=\"menu-wrapper\"><a id=\"menu-open\"><img src=\"/public/images/menu.png\"/></a></div>
    </div>
    ";
        // line 136
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "</div>
</body>
<script src=\"/public/assets/js/jquery-1.11.1.js\"></script>
<script>
    var closeMenu = false;
    function menuBack(){
        closeMenu = true;
        \$('.veil').addClass('fadeOutLeft');
    }

    function openMenu()
    {
        \$('#menu-open').trigger('click');
    }


    \$('#menu-open').click(function(){
        var innerHtml = '<div class=\"veil\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000\"><div style=\"position:absolute;top:32px;right:32px\"><a href=\"javascript:menuBack();\"><img src=\"/public/images/close.png\" style=\"width:26px;height:26px\"></a></div><div class=\"cell\" style=\"width:100%;height:100%;display:table\"><div class=\"card\" style=\"display:table-cell;text-align:center;vertical-align:middle\"><ul class=\"menu-list\" style=\"list-style:none;padding:0;font-size:24px\"><li><a href=\"/works\" class=\"menu-item1\">OUR WORK</a></li><li><a href=\"/about\" class=\"menu-item2\">WHO WE ARE</a></li><li><a href=\"/contact\" class=\"menu-item3\">CONTACT US</a></li></ul></div></div></div>';
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
        \$('.veil').addClass('animated bounceInUp');
        \$('.veil').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            if(closeMenu){
                \$('.veil').remove();
            }
//            console.log('1');
        });
    });
</script>
";
        // line 177
        $this->displayBlock('script', $context, $blocks);
        // line 179
        echo "</html>";
    }

    // line 126
    public function block_style($context, array $blocks = array())
    {
    }

    // line 132
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 133
        echo "        ";
    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
    }

    // line 177
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout/index.html";
    }

    public function getDebugInfo()
    {
        return array (  232 => 177,  227 => 136,  223 => 133,  220 => 132,  215 => 126,  211 => 179,  209 => 177,  167 => 137,  165 => 136,  161 => 134,  159 => 132,  152 => 127,  150 => 126,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-CN">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>明明同学</title>*/
/*     <script>*/
/*         var _hmt = _hmt || [];*/
/*         (function() {*/
/*             var hm = document.createElement("script");*/
/*             hm.src = "https://hm.baidu.com/hm.js?3bc3fd956a80e2f2f363551db82e0413";*/
/*             var s = document.getElementsByTagName("script")[0];*/
/*             s.parentNode.insertBefore(hm, s);*/
/*         })();*/
/*     </script>*/
/*     <link rel="stylesheet" href="/public/assets/css/bootstrap.css"/>*/
/*     <link href="/public/assets/css/font-awesome.css" rel="stylesheet" />*/
/*     <link href="/public/css/work.css" rel="stylesheet" />*/
/*     <link href="/public/css/animate.css" rel="stylesheet" />*/
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
/*             font-family: FZLTXHB--B51-0;*/
/*             font-size: 27px;*/
/*             color: #FFFFFF;*/
/*         }*/
/* */
/*         .menu-list li{*/
/*             margin-bottom: 12px;*/
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
/*     </style>*/
/*     {% block style %}{% endblock %}*/
/* </head>*/
/* <body>*/
/* <div class="sandbox">*/
/*     <div class="sandbox-header">*/
/*         <div class="logo-wrapper"><a><img src="/public/images/logo.png"/></a></div>*/
/*         {% block pageTitle %}*/
/*         {% endblock %}*/
/*         <div class="menu-wrapper"><a id="menu-open"><img src="/public/images/menu.png"/></a></div>*/
/*     </div>*/
/*     {% block body %}{% endblock %}*/
/* </div>*/
/* </body>*/
/* <script src="/public/assets/js/jquery-1.11.1.js"></script>*/
/* <script>*/
/*     var closeMenu = false;*/
/*     function menuBack(){*/
/*         closeMenu = true;*/
/*         $('.veil').addClass('fadeOutLeft');*/
/*     }*/
/* */
/*     function openMenu()*/
/*     {*/
/*         $('#menu-open').trigger('click');*/
/*     }*/
/* */
/* */
/*     $('#menu-open').click(function(){*/
/*         var innerHtml = '<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000"><div style="position:absolute;top:32px;right:32px"><a href="javascript:menuBack();"><img src="/public/images/close.png" style="width:26px;height:26px"></a></div><div class="cell" style="width:100%;height:100%;display:table"><div class="card" style="display:table-cell;text-align:center;vertical-align:middle"><ul class="menu-list" style="list-style:none;padding:0;font-size:24px"><li><a href="/works" class="menu-item1">OUR WORK</a></li><li><a href="/about" class="menu-item2">WHO WE ARE</a></li><li><a href="/contact" class="menu-item3">CONTACT US</a></li></ul></div></div></div>';*/
/*         /*var innerHtml = `<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;"><div style="position:absolute;top:32px;right:32px;"><a href="javascript:menuBack();"><img src="/public/images/close.png" style="width:26px;height:26px;"/></a></div> <div class="cell" style="width:100%;height:100%;display:table;">*/
/*         <div class="card" style="display:table-cell;text-align:center;    vertical-align: middle;">*/
/*         <ul class="menu-list" style="list-style:none;padding:0;font-size:24px;">*/
/*         <li><a href="/home">HOME</a></li>*/
/*         <li><a href="/work.html">ABOUNT ME</a></li>*/
/*         <li><a href="/works">WORK</a></li>*/
/*         <li><a href="/work.html">CONTACT</a></li>*/
/*         </ul>*/
/*         </div>*/
/*         </div>*/
/*         </div>`;*//* */
/*         $('body').append(innerHtml);*/
/*         closeMenu = false;*/
/*         $('.veil').addClass('animated bounceInUp');*/
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
