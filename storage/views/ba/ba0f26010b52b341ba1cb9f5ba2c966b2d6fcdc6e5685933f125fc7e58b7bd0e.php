<?php

/* index/work.html */
class __TwigTemplate_de5089ccff8615f4a6f655013d237392247c9999607dac3a3a30b19f6ce314ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index_new.html", "index/work.html", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout/index_new.html";
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

    .veil ul li:nth-child(3) a{
        color:#FFD48B;
    }

    .works-type li:nth-child(";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ") a{
        color:#FFD48B;
    }

    h2{
        font-size: 24px;
    }

</style>
";
    }

    // line 104
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"><span style=\"line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;\"></span></div>";
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        // line 106
        echo "
<div class=\"m-padding\">
    <img class=\"only-m\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo "\" style=\"width: 100%;\"/>

    <!--<div class=\"only-p\" style=\"height: 600px;background-image: url( ";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo " );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;\">-->
    <!--<div class=\"only-p\" style=\"height: 600px;\">-->
        <!--<div style=\"height: 600px;background-image: url( ";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo " );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;\"></div>-->
    <!--</div>-->
    <!--<div class=\"only-p\" style=\"height: 600px;\">-->
        <!--<div style=\"height: 600px;background-image: url( ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo " );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;\"></div>-->
    <!--</div>-->
    <div class=\"only-p\" style=\"position: fixed;top:122px;left: 0;right: 0;z-index:-1;\">
        <div class=\"img-show-panel\" style=\"position: absolute;width: 100%;padding-bottom: calc( 100% * 0.79 );\">
            <div style=\"position: absolute;left: 0;right: 0;bottom: 0;top:calc( 100% * 0.79 * 0.45);background-color: #ffffff;\"></div>
            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo "\"/>
        </div>
    </div>

</div>

<div class=\"only-p\" style=\"padding-bottom: calc( 100% * 0.79 * 0.45);\">

</div>

<div class=\"common-padding padding-60-30\" style=\"background-color: #ffffff;\">

    <div class=\"in-bl-line easy-l\">
        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <div class=\"font-h1\">";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
            <div class=\"font-h2\" style=\"margin-top: 16px;\">";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["abstract"]) ? $context["abstract"] : null), "html", null, true);
        echo "</div>
        </div>
        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <div class=\"font-p\">";
        // line 138
        echo nl2br(twig_escape_filter($this->env, (isset($context["describe"]) ? $context["describe"] : null), "html", null, true));
        echo "</div>
        </div>
    </div>

    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineItems"]) ? $context["lineItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 143
            echo "        <div class=\"in-bl-line easy-l\">
            ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["line"]);
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 145
                echo "                ";
                if (($this->getAttribute($context["item"], "type", array(), "array") == 1)) {
                    // line 146
                    echo "                    <div class=\"in-bl-line-item response-free-width";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "width_type", array(), "array"), "html", null, true);
                    echo " v-a-t\">
                        <div class=\"img-show-panel\">
                            <img src=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array(), "array"), "html", null, true);
                    echo "\" style=\"width:100%;\"/>
                        </div>
                    </div>
                ";
                }
                // line 152
                echo "
                ";
                // line 153
                if (($this->getAttribute($context["item"], "type", array(), "array") == 2)) {
                    // line 154
                    echo "                    <div class=\"in-bl-line-item response-free-width";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "width_type", array(), "array"), "html", null, true);
                    echo " v-a-t\">
                        <p class=\"font-p p-t-30-0 ";
                    // line 155
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
                // line 158
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "


    <div class=\"opr-line easy-l ov-hid\" style=\"margin-bottom: 100px;\">
        ";
        // line 165
        if ((isset($context["prev"]) ? $context["prev"] : null)) {
            // line 166
            echo "            <a href=\"/work?id=";
            echo twig_escape_filter($this->env, (isset($context["prev"]) ? $context["prev"] : null), "html", null, true);
            echo "\">上一项目</a>
        ";
        }
        // line 168
        echo "        ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 169
            echo "            <a style=\"float: right;\" href=\"/work?id=";
            echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
            echo "\">下一项目</a>
        ";
        }
        // line 171
        echo "    </div>
</div>
";
    }

    // line 174
    public function block_script($context, array $blocks = array())
    {
        // line 175
        echo "<script src=\"/public/assets/js/imgLiquid.js\"></script>
<script>

//    \$(function(){
//        videojs('v-h-mp4',{
//            fluid: true,
//            controls:true,
//        });
//    });

    \$(\".img-show-panel\").imgLiquid();


    function getQueryString(name) {
        var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }


    /*加载works*/




</script>
";
    }

    public function getTemplateName()
    {
        return "index/work.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 175,  305 => 174,  299 => 171,  293 => 169,  290 => 168,  284 => 166,  282 => 165,  276 => 161,  269 => 159,  263 => 158,  249 => 155,  244 => 154,  242 => 153,  239 => 152,  232 => 148,  226 => 146,  223 => 145,  219 => 144,  216 => 143,  212 => 142,  205 => 138,  199 => 135,  195 => 134,  178 => 120,  170 => 115,  164 => 112,  159 => 110,  154 => 108,  150 => 106,  147 => 105,  141 => 104,  127 => 94,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/index_new.html" %}*/
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
/*     .veil ul li:nth-child(3) a{*/
/*         color:#FFD48B;*/
/*     }*/
/* */
/*     .works-type li:nth-child({{ type }}) a{*/
/*         color:#FFD48B;*/
/*     }*/
/* */
/*     h2{*/
/*         font-size: 24px;*/
/*     }*/
/* */
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"><span style="line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;"></span></div>{% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="m-padding">*/
/*     <img class="only-m" src="{{ banner_img }}" style="width: 100%;"/>*/
/* */
/*     <!--<div class="only-p" style="height: 600px;background-image: url( {{ banner_img }} );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;">-->*/
/*     <!--<div class="only-p" style="height: 600px;">-->*/
/*         <!--<div style="height: 600px;background-image: url( {{ banner_img }} );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;"></div>-->*/
/*     <!--</div>-->*/
/*     <!--<div class="only-p" style="height: 600px;">-->*/
/*         <!--<div style="height: 600px;background-image: url( {{ banner_img }} );background-size:auto 600px;background-repeat: no-repeat;    background-position: center center;position: fixed;top:122px;left: 0;right: 0;z-index:-1;"></div>-->*/
/*     <!--</div>-->*/
/*     <div class="only-p" style="position: fixed;top:122px;left: 0;right: 0;z-index:-1;">*/
/*         <div class="img-show-panel" style="position: absolute;width: 100%;padding-bottom: calc( 100% * 0.79 );">*/
/*             <div style="position: absolute;left: 0;right: 0;bottom: 0;top:calc( 100% * 0.79 * 0.45);background-color: #ffffff;"></div>*/
/*             <img src="{{ banner_img }}"/>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <div class="only-p" style="padding-bottom: calc( 100% * 0.79 * 0.45);">*/
/* */
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
/*         <div class="in-bl-line easy-l">*/
/*             {% for key,item in line %}*/
/*                 {% if item['type'] == 1 %}*/
/*                     <div class="in-bl-line-item response-free-width{{item['width_type']}} v-a-t">*/
/*                         <div class="img-show-panel">*/
/*                             <img src="{{item['content']}}" style="width:100%;"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if item['type'] == 2 %}*/
/*                     <div class="in-bl-line-item response-free-width{{item['width_type']}} v-a-t">*/
/*                         <p class="font-p p-t-30-0 {% if key == 0 %} p-r-30-0 {% endif %} {% if key == 1 %} p-l-30-0 {% endif %}">{{ item['content'] | nl2br }}</p>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* */
/* */
/*     <div class="opr-line easy-l ov-hid" style="margin-bottom: 100px;">*/
/*         {% if prev %}*/
/*             <a href="/work?id={{ prev }}">上一项目</a>*/
/*         {% endif %}*/
/*         {% if next %}*/
/*             <a style="float: right;" href="/work?id={{ next }}">下一项目</a>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block script %}*/
/* <script src="/public/assets/js/imgLiquid.js"></script>*/
/* <script>*/
/* */
/* //    $(function(){*/
/* //        videojs('v-h-mp4',{*/
/* //            fluid: true,*/
/* //            controls:true,*/
/* //        });*/
/* //    });*/
/* */
/*     $(".img-show-panel").imgLiquid();*/
/* */
/* */
/*     function getQueryString(name) {*/
/*         var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");*/
/*         var r = window.location.search.substr(1).match(reg);*/
/*         if (r != null) return unescape(r[2]); return null;*/
/*     }*/
/* */
/* */
/*     /*加载works*//* */
/* */
/* */
/* */
/* */
/* </script>*/
/* {% endblock %}*/
