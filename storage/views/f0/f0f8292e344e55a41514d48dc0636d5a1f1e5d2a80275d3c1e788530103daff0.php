<?php

/* _layout/bkend.html */
class __TwigTemplate_9d47a46c6406c8ccac84afd7c2473db15ee51f39511ac0e93516b30f61495123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <title>Bootstrap 101 Template</title>
    <link rel=\"stylesheet\" href=\"/public/assets/css/bootstrap.css\"/>
    <link href=\"/public/assets/css/font-awesome.css\" rel=\"stylesheet\" />
    <link href=\"/public/css/animate.css\" rel=\"stylesheet\" />
    <style>
        a{text-decoration: none !important;}
    </style>
</head>
<body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "</body>
<script src=\"/public/assets/js/jquery-1.11.1.js\"></script>
<script>
    var closeMenu = false;
    function menuBack(){
        closeMenu = true;
        \$('.veil').addClass('fadeOutLeft');
    }
    \$('#menu-open').click(function(){
        var innerHtml = `<div class=\"veil\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;opacity:.4;\"> <div class=\"cell\" style=\"width:100%;height:100%;display:table;\">
        <div class=\"card\" style=\"display:table-cell;text-align:center;    vertical-align: middle;\">
        <ul class=\"menu-list\" style=\"list-style:none;padding:0;font-size:24px;\">
        <li><a href=\"/index.html\">作品列表</a></li>
        <li><a href=\"/work.html\">添加作品</a></li>
        <li><a href=\"javascript:menuBack();\"><i class=\"fa fa-angle-double-left\"></i></a></li>
        </ul>
        </div>
        </div>
        </div>`;
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
        // line 47
        $this->displayBlock('script', $context, $blocks);
        // line 49
        echo "</html>";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout/bkend.html";
    }

    public function getDebugInfo()
    {
        return array (  83 => 47,  78 => 16,  74 => 49,  72 => 47,  40 => 17,  38 => 16,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-CN">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Bootstrap 101 Template</title>*/
/*     <link rel="stylesheet" href="/public/assets/css/bootstrap.css"/>*/
/*     <link href="/public/assets/css/font-awesome.css" rel="stylesheet" />*/
/*     <link href="/public/css/animate.css" rel="stylesheet" />*/
/*     <style>*/
/*         a{text-decoration: none !important;}*/
/*     </style>*/
/* </head>*/
/* <body>*/
/*     {% block body %}{% endblock %}*/
/* </body>*/
/* <script src="/public/assets/js/jquery-1.11.1.js"></script>*/
/* <script>*/
/*     var closeMenu = false;*/
/*     function menuBack(){*/
/*         closeMenu = true;*/
/*         $('.veil').addClass('fadeOutLeft');*/
/*     }*/
/*     $('#menu-open').click(function(){*/
/*         var innerHtml = `<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;opacity:.4;"> <div class="cell" style="width:100%;height:100%;display:table;">*/
/*         <div class="card" style="display:table-cell;text-align:center;    vertical-align: middle;">*/
/*         <ul class="menu-list" style="list-style:none;padding:0;font-size:24px;">*/
/*         <li><a href="/index.html">作品列表</a></li>*/
/*         <li><a href="/work.html">添加作品</a></li>*/
/*         <li><a href="javascript:menuBack();"><i class="fa fa-angle-double-left"></i></a></li>*/
/*         </ul>*/
/*         </div>*/
/*         </div>*/
/*         </div>`;*/
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
