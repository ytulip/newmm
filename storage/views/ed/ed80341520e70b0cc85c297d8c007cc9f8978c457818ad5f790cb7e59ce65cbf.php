<?php

/* index/new_work.html */
class __TwigTemplate_4953380edd7810397da9b2703ae9d24ae28e4b06accaf0eb3771ce9fc6bf63a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index_new2.html", "index/new_work.html", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'loading_title' => array($this, 'block_loading_title'),
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

    @media only screen and (max-width: 3800px) {
        .sandbox-content {
            padding-left: 1130px;
            padding-right: 1130px;
        }
    }


    @media only screen and (max-width: 2400px) {
        .sandbox-content {
            padding-left: 650px;
            padding-right: 650px;
        }
    }


    @media only screen and (max-width: 1600px) {
        .sandbox-content {
            padding-left: 300px;
            padding-right: 300px;
        }
    }




    @media only screen and (max-width: 1200px) {
        .sandbox-content {
            padding-left: 150px;
            padding-right: 150px;
        }
    }


    @media only screen and (max-width: 768px) {
        .sandbox-content {
            padding-left: 80px;
            padding-right: 80px;
        }

        .works-list > div{
            display: inline-block;
            width: 50%;
            padding-bottom: calc( 50% * 0.79 );
            position: relative;
        }
    }


    @media only screen and (max-width: 540px) {

        .works-list > div{
            display: inline-block;
            width: 100%;
            padding-bottom: calc( 100% * 0.79 );
            position: relative;
        }

        .sandbox{
            padding-left: 5px;
            padding-right: 5px;
        }
        .sandbox-content {
            padding-left: 5px;
            padding-right: 5px;
        }
    }


    .img-show{
        width: 100%;
    }

    .work-detail p{
        font-size: 16px;
    }

    .img-show-item{
        margin-bottom: 7px;
    }

    .img-show-item img{
        width: 100%;
    }

    /*.veil ul li:nth-child(3) a{*/
    /*color:#FFD48B;*/
    /*}*/

    .works-type li:nth-child(";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ") a{
                                             color:#FFD48B;
                                         }

    h2{
        font-size: 24px;
    }

    /*.body-padding{padding-top: 0;}*/

    .img-show-panel {
        display: inline-block;
        width: 100%;
        padding-bottom: 0;
        position: relative;
    }

</style>
";
    }

    // line 113
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"><span style=\"line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;\"></span></div>";
    }

    // line 114
    public function block_loading_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " ";
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        // line 116
        echo "<!--<div id=\"white-overlay\" class=\"visible\" style=\"z-index: 10000\">-->
    <!--<div class=\"loading-bar\"></div>-->
    <!--<p id=\"white-overlay-title\" class=\"d-none  title-text work-title\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</p>-->
<!--</div>-->
<div class=\"m-padding only-p\">
    <!--<img class=\"only-m\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo "\" style=\"width: 100%;\"/>-->

    <!--<div class=\"only-p\" style=\"height: 600px;background-image: url( ";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo " );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;\">-->
    <!--<div class=\"only-p\" style=\"height: 600px;\">-->
    <!--<div style=\"height: 600px;background-image: url( ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo " );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;\"></div>-->
    <!--</div>-->
    <!--<div class=\"only-p\" style=\"height: 600px;\">-->
    <!--<div style=\"height: 600px;background-image: url( ";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo " );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;\"></div>-->
    <!--</div>-->
    <div style=\"position: fixed;left: 0;right: 0;top:0;z-index:-1;\">
        <div class=\"img-show-panel2\" style=\"position: absolute;width: 100%;padding-bottom: calc( 100% * 0.42 );\">
            <!--<div style=\"position: absolute;left: 0;right: 0;bottom: 0;top:calc( 100% * 0.79 * 0.45);background-color: #ffffff;\"></div>-->
            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo "\"/>
        </div>
    </div>

</div>

<div class=\"only-p\" style=\"padding-bottom: calc( 100% * 0.42);\">

</div>

<div class=\"only-m common-padding padding-top-122-49\">
    <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo "\" style=\"width: 100%;margin-top: 16px;\"/>
</div>

<div class=\"common-padding padding-60-30\" style=\"background-color: #ffffff;\">

    <div class=\"in-bl-line easy-l\">
        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <div class=\"font-h1\">";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
            <div class=\"font-h2\" style=\"margin-top: 16px;\">";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["abstract"]) ? $context["abstract"] : null), "html", null, true);
        echo "</div>
        </div>
        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <div class=\"font-p\">";
        // line 155
        echo nl2br(twig_escape_filter($this->env, (isset($context["describe"]) ? $context["describe"] : null), "html", null, true));
        echo "</div>
        </div>
    </div>

    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineItems"]) ? $context["lineItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 160
            echo "    <div class=\"in-bl-line easy-l\">
        ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["line"]);
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 162
                echo "        ";
                if (($this->getAttribute($context["item"], "type", array(), "array") == 1)) {
                    // line 163
                    echo "        <div class=\"in-bl-line-item response-free-width";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "width_type", array(), "array"), "html", null, true);
                    echo " v-a-t\">
            <div class=\"img-show-panel\">
                <img src=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array(), "array"), "html", null, true);
                    echo "\" style=\"width:100%;\"/>
            </div>
        </div>
        ";
                }
                // line 169
                echo "
        ";
                // line 170
                if (($this->getAttribute($context["item"], "type", array(), "array") == 2)) {
                    // line 171
                    echo "        <div class=\"in-bl-line-item response-free-width";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "width_type", array(), "array"), "html", null, true);
                    echo " v-a-t\">
            <p class=\"font-p p-t-30-0 ";
                    // line 172
                    if (($context["key"] == 0)) {
                        echo " p-r-30-0 ";
                    }
                    echo " ";
                    if (($context["key"] == 1)) {
                        echo " p-l-30-0 ";
                    }
                    echo "\">";
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array(), "array"), "html", null, true));
                    echo "</p>
        </div>
        ";
                }
                // line 175
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "


    <div class=\"opr-line easy-l ov-hid\" style=\"margin-bottom: 30px;margin-top: 60px;\">
        ";
        // line 182
        if ((isset($context["prev"]) ? $context["prev"] : null)) {
            // line 183
            echo "        <a href=\"/work?id=";
            echo twig_escape_filter($this->env, (isset($context["prev"]) ? $context["prev"] : null), "html", null, true);
            echo "\" class=\"a-hover\">上一项目</a>
        ";
        }
        // line 185
        echo "        ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 186
            echo "        <a style=\"float: right;\" href=\"/work?id=";
            echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
            echo "\" class=\"a-hover\">下一项目</a>
        ";
        }
        // line 188
        echo "    </div>
</div>
";
    }

    // line 191
    public function block_script($context, array $blocks = array())
    {
        // line 192
        echo "<script src=\"/public/assets/js/imgLiquid.js\"></script>
<script>

    //    \$(function(){
    //        videojs('v-h-mp4',{
    //            fluid: true,
    //            controls:true,
    //        });
    //    });

    // \$(function(){
    //
    //     console.log(document.referrer);
    //     console.log(performance.navigation.type);
    //
    //     if ( (document.referrer !== '') && (performance.navigation.type != 1)) {
    //         \$('#white-overlay-title').removeClass('d-none');
    //         \$('.loading-bar').addClass('show');
    //     } else {
    //         \$('#white-overlay').removeClass('visible');
    //     }
    // });

    // \$('.loading-bar').one('webkitTransitionEnd', function(){
    //     \$('#white-overlay').removeClass('visible');
    // });

    \$(\".img-show-panel2\").imgLiquid();


    function getQueryString(name) {
        var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }

    \$('#white-overlay-title').click(function () {
//        \$('.loading-bar').addClass('show');
    });


    /*加载works*/
//    \$(window).scroll(function(){
//        var heightTop = document.documentElement.scrollTop || document.body.scrollTop;
//        console.log(heightTop);
//    })

    \$(document).ready(function(){
        var fixNav = function() {
            var Height = \$(\".header-wrapper\").outerHeight(true);
//            console.log('header-wrapper'  + Height);
//            console.log(\$('.header-wrapper').height());
//            var Height = \$(\".header-wrapper\").offset().top;
//            console.log('header-wrapper'  + Height);
            var top = \$(window).scrollTop();
//            console.log('toTop'  + top);
            if(top > Height){
                return;
                if(\$('.header-wrapper').attr('is-hide') == 1){
                    return;
                }
                \$('.header-wrapper').removeClass('do-visible');
                \$('.header-wrapper').attr('is-hide',1);
                \$('.header-wrapper').addClass('no-visible');
//                \$(\".header-wrapper\").hide();
            }else{
                return;
                if( \$('.header-wrapper').attr('is-hide') == 2 )
                {
                    return;
                }
                \$('.header-wrapper').removeClass('no-visible');
                \$('.header-wrapper').attr('is-hide',2);
                \$('.header-wrapper').addClass('do-visible');
//                \$(\".header-wrapper\").show();
            }
//                \$(\".left\").css({\"position\":\"relative\",\"top\":\"0\"});
        }

        \$(window).scroll(function(){
            fixNav();
        })
    });




</script>
";
    }

    public function getTemplateName()
    {
        return "index/new_work.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 192,  336 => 191,  330 => 188,  324 => 186,  321 => 185,  315 => 183,  313 => 182,  307 => 178,  300 => 176,  294 => 175,  280 => 172,  275 => 171,  273 => 170,  270 => 169,  263 => 165,  257 => 163,  254 => 162,  250 => 161,  247 => 160,  243 => 159,  236 => 155,  230 => 152,  226 => 151,  216 => 144,  202 => 133,  194 => 128,  188 => 125,  183 => 123,  178 => 121,  172 => 118,  168 => 116,  165 => 115,  157 => 114,  151 => 113,  128 => 94,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/index_new2.html" %}*/
/* {% block style%}*/
/* <style>*/
/* */
/*     @media only screen and (max-width: 3800px) {*/
/*         .sandbox-content {*/
/*             padding-left: 1130px;*/
/*             padding-right: 1130px;*/
/*         }*/
/*     }*/
/* */
/* */
/*     @media only screen and (max-width: 2400px) {*/
/*         .sandbox-content {*/
/*             padding-left: 650px;*/
/*             padding-right: 650px;*/
/*         }*/
/*     }*/
/* */
/* */
/*     @media only screen and (max-width: 1600px) {*/
/*         .sandbox-content {*/
/*             padding-left: 300px;*/
/*             padding-right: 300px;*/
/*         }*/
/*     }*/
/* */
/* */
/* */
/* */
/*     @media only screen and (max-width: 1200px) {*/
/*         .sandbox-content {*/
/*             padding-left: 150px;*/
/*             padding-right: 150px;*/
/*         }*/
/*     }*/
/* */
/* */
/*     @media only screen and (max-width: 768px) {*/
/*         .sandbox-content {*/
/*             padding-left: 80px;*/
/*             padding-right: 80px;*/
/*         }*/
/* */
/*         .works-list > div{*/
/*             display: inline-block;*/
/*             width: 50%;*/
/*             padding-bottom: calc( 50% * 0.79 );*/
/*             position: relative;*/
/*         }*/
/*     }*/
/* */
/* */
/*     @media only screen and (max-width: 540px) {*/
/* */
/*         .works-list > div{*/
/*             display: inline-block;*/
/*             width: 100%;*/
/*             padding-bottom: calc( 100% * 0.79 );*/
/*             position: relative;*/
/*         }*/
/* */
/*         .sandbox{*/
/*             padding-left: 5px;*/
/*             padding-right: 5px;*/
/*         }*/
/*         .sandbox-content {*/
/*             padding-left: 5px;*/
/*             padding-right: 5px;*/
/*         }*/
/*     }*/
/* */
/* */
/*     .img-show{*/
/*         width: 100%;*/
/*     }*/
/* */
/*     .work-detail p{*/
/*         font-size: 16px;*/
/*     }*/
/* */
/*     .img-show-item{*/
/*         margin-bottom: 7px;*/
/*     }*/
/* */
/*     .img-show-item img{*/
/*         width: 100%;*/
/*     }*/
/* */
/*     /*.veil ul li:nth-child(3) a{*//* */
/*     /*color:#FFD48B;*//* */
/*     /*}*//* */
/* */
/*     .works-type li:nth-child({{ type }}) a{*/
/*                                              color:#FFD48B;*/
/*                                          }*/
/* */
/*     h2{*/
/*         font-size: 24px;*/
/*     }*/
/* */
/*     /*.body-padding{padding-top: 0;}*//* */
/* */
/*     .img-show-panel {*/
/*         display: inline-block;*/
/*         width: 100%;*/
/*         padding-bottom: 0;*/
/*         position: relative;*/
/*     }*/
/* */
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"><span style="line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;"></span></div>{% endblock %}*/
/* {% block loading_title %} {{ title }} {% endblock %}*/
/* {% block body %}*/
/* <!--<div id="white-overlay" class="visible" style="z-index: 10000">-->*/
/*     <!--<div class="loading-bar"></div>-->*/
/*     <!--<p id="white-overlay-title" class="d-none  title-text work-title">{{ title }}</p>-->*/
/* <!--</div>-->*/
/* <div class="m-padding only-p">*/
/*     <!--<img class="only-m" src="{{ banner_img }}" style="width: 100%;"/>-->*/
/* */
/*     <!--<div class="only-p" style="height: 600px;background-image: url( {{ banner_img }} );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;">-->*/
/*     <!--<div class="only-p" style="height: 600px;">-->*/
/*     <!--<div style="height: 600px;background-image: url( {{ banner_img }} );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;"></div>-->*/
/*     <!--</div>-->*/
/*     <!--<div class="only-p" style="height: 600px;">-->*/
/*     <!--<div style="height: 600px;background-image: url( {{ banner_img }} );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;"></div>-->*/
/*     <!--</div>-->*/
/*     <div style="position: fixed;left: 0;right: 0;top:0;z-index:-1;">*/
/*         <div class="img-show-panel2" style="position: absolute;width: 100%;padding-bottom: calc( 100% * 0.42 );">*/
/*             <!--<div style="position: absolute;left: 0;right: 0;bottom: 0;top:calc( 100% * 0.79 * 0.45);background-color: #ffffff;"></div>-->*/
/*             <img src="{{ banner_img }}"/>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <div class="only-p" style="padding-bottom: calc( 100% * 0.42);">*/
/* */
/* </div>*/
/* */
/* <div class="only-m common-padding padding-top-122-49">*/
/*     <img src="{{ banner_img }}" style="width: 100%;margin-top: 16px;"/>*/
/* </div>*/
/* */
/* <div class="common-padding padding-60-30" style="background-color: #ffffff;">*/
/* */
/*     <div class="in-bl-line easy-l">*/
/*         <div class="in-bl-line-item response-free-width2 v-a-t">*/
/*             <div class="font-h1">{{ title }}</div>*/
/*             <div class="font-h2" style="margin-top: 16px;">{{ abstract }}</div>*/
/*         </div>*/
/*         <div class="in-bl-line-item response-free-width2 v-a-t">*/
/*             <div class="font-p">{{ describe | nl2br }}</div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% for line in lineItems %}*/
/*     <div class="in-bl-line easy-l">*/
/*         {% for key,item in line %}*/
/*         {% if item['type'] == 1 %}*/
/*         <div class="in-bl-line-item response-free-width{{item['width_type']}} v-a-t">*/
/*             <div class="img-show-panel">*/
/*                 <img src="{{item['content']}}" style="width:100%;"/>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if item['type'] == 2 %}*/
/*         <div class="in-bl-line-item response-free-width{{item['width_type']}} v-a-t">*/
/*             <p class="font-p p-t-30-0 {% if key == 0 %} p-r-30-0 {% endif %} {% if key == 1 %} p-l-30-0 {% endif %}">{{ item['content'] | nl2br }}</p>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     {% endfor %}*/
/* */
/* */
/* */
/*     <div class="opr-line easy-l ov-hid" style="margin-bottom: 30px;margin-top: 60px;">*/
/*         {% if prev %}*/
/*         <a href="/work?id={{ prev }}" class="a-hover">上一项目</a>*/
/*         {% endif %}*/
/*         {% if next %}*/
/*         <a style="float: right;" href="/work?id={{ next }}" class="a-hover">下一项目</a>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block script %}*/
/* <script src="/public/assets/js/imgLiquid.js"></script>*/
/* <script>*/
/* */
/*     //    $(function(){*/
/*     //        videojs('v-h-mp4',{*/
/*     //            fluid: true,*/
/*     //            controls:true,*/
/*     //        });*/
/*     //    });*/
/* */
/*     // $(function(){*/
/*     //*/
/*     //     console.log(document.referrer);*/
/*     //     console.log(performance.navigation.type);*/
/*     //*/
/*     //     if ( (document.referrer !== '') && (performance.navigation.type != 1)) {*/
/*     //         $('#white-overlay-title').removeClass('d-none');*/
/*     //         $('.loading-bar').addClass('show');*/
/*     //     } else {*/
/*     //         $('#white-overlay').removeClass('visible');*/
/*     //     }*/
/*     // });*/
/* */
/*     // $('.loading-bar').one('webkitTransitionEnd', function(){*/
/*     //     $('#white-overlay').removeClass('visible');*/
/*     // });*/
/* */
/*     $(".img-show-panel2").imgLiquid();*/
/* */
/* */
/*     function getQueryString(name) {*/
/*         var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");*/
/*         var r = window.location.search.substr(1).match(reg);*/
/*         if (r != null) return unescape(r[2]); return null;*/
/*     }*/
/* */
/*     $('#white-overlay-title').click(function () {*/
/* //        $('.loading-bar').addClass('show');*/
/*     });*/
/* */
/* */
/*     /*加载works*//* */
/* //    $(window).scroll(function(){*/
/* //        var heightTop = document.documentElement.scrollTop || document.body.scrollTop;*/
/* //        console.log(heightTop);*/
/* //    })*/
/* */
/*     $(document).ready(function(){*/
/*         var fixNav = function() {*/
/*             var Height = $(".header-wrapper").outerHeight(true);*/
/* //            console.log('header-wrapper'  + Height);*/
/* //            console.log($('.header-wrapper').height());*/
/* //            var Height = $(".header-wrapper").offset().top;*/
/* //            console.log('header-wrapper'  + Height);*/
/*             var top = $(window).scrollTop();*/
/* //            console.log('toTop'  + top);*/
/*             if(top > Height){*/
/*                 return;*/
/*                 if($('.header-wrapper').attr('is-hide') == 1){*/
/*                     return;*/
/*                 }*/
/*                 $('.header-wrapper').removeClass('do-visible');*/
/*                 $('.header-wrapper').attr('is-hide',1);*/
/*                 $('.header-wrapper').addClass('no-visible');*/
/* //                $(".header-wrapper").hide();*/
/*             }else{*/
/*                 return;*/
/*                 if( $('.header-wrapper').attr('is-hide') == 2 )*/
/*                 {*/
/*                     return;*/
/*                 }*/
/*                 $('.header-wrapper').removeClass('no-visible');*/
/*                 $('.header-wrapper').attr('is-hide',2);*/
/*                 $('.header-wrapper').addClass('do-visible');*/
/* //                $(".header-wrapper").show();*/
/*             }*/
/* //                $(".left").css({"position":"relative","top":"0"});*/
/*         }*/
/* */
/*         $(window).scroll(function(){*/
/*             fixNav();*/
/*         })*/
/*     });*/
/* */
/* */
/* */
/* */
/* </script>*/
/* {% endblock %}*/
