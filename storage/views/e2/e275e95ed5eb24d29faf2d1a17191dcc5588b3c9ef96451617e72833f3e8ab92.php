<?php

/* index/contact_new.html */
class __TwigTemplate_52637b7cca8d57e39bd5905e8ac90199e2119ff20264557c4cd80ec0aabba40b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index_new2.html", "index/contact_new.html", 1);
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

    .copyright-panel{left: 0;bottom: -16.8px;}
</style>
";
    }

    // line 21
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"><span style=\"line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;\"></span></div>";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"common-padding padding-top-122-49\">
    <div class=\"title-text2 padding-60-30\">CONTACT US</div>
    <div class=\"contact-us-text padding-60-30\">186&nbsp;&nbsp;0005&nbsp;&nbsp;5717</div>
    <div class=\"\" style=\"margin-top: 30px;\"><a class=\"contact-us-text a-hover\" href=\"mailto:hello@dorrr.com\">hello@dorrr.com</a></div>


    <div class=\"title-text2 padding-120-60\">SOCIAL​</div>
    <div class=\"in-bl-line padding-60-30\">
        <div class=\"contact-us-text contact-item contact-weibo in-bl-line-item\" onclick=\"goHref('https://weibo.com/dorrr?is_hot=1')\">+ weibo</div>
        <div class=\"contact-us-text contact-item contact-dribble in-bl-line-item\" >+ dribbble</div>
        <div class=\"contact-us-text contact-item contact-instagram in-bl-line-item\" onclick=\"goHref('https://www.instagram.com/dorrr.design/')\">+ instagram</div>
    </div>

    <div class=\"in-bl-line padding-60-30\" style=\"margin-bottom: 100px;position: relative;\">
        <!--<div class=\"in-bl-line-item map-width\"><img style=\"width: 100%;\" src=\"/images/map.jpg\"/></div>-->
        <div class=\"copyright-text copyright-panel\" style=\"\">© 2018 Dorrr 版权所有</div>
    </div>
</div>
";
    }

    // line 43
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index/contact_new.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  67 => 23,  64 => 22,  58 => 21,  49 => 16,  34 => 3,  31 => 2,  11 => 1,);
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
/*     .copyright-panel{left: 0;bottom: -16.8px;}*/
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"><span style="line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;"></span></div>{% endblock %}*/
/* {% block body %}*/
/* <div class="common-padding padding-top-122-49">*/
/*     <div class="title-text2 padding-60-30">CONTACT US</div>*/
/*     <div class="contact-us-text padding-60-30">186&nbsp;&nbsp;0005&nbsp;&nbsp;5717</div>*/
/*     <div class="" style="margin-top: 30px;"><a class="contact-us-text a-hover" href="mailto:hello@dorrr.com">hello@dorrr.com</a></div>*/
/* */
/* */
/*     <div class="title-text2 padding-120-60">SOCIAL​</div>*/
/*     <div class="in-bl-line padding-60-30">*/
/*         <div class="contact-us-text contact-item contact-weibo in-bl-line-item" onclick="goHref('https://weibo.com/dorrr?is_hot=1')">+ weibo</div>*/
/*         <div class="contact-us-text contact-item contact-dribble in-bl-line-item" >+ dribbble</div>*/
/*         <div class="contact-us-text contact-item contact-instagram in-bl-line-item" onclick="goHref('https://www.instagram.com/dorrr.design/')">+ instagram</div>*/
/*     </div>*/
/* */
/*     <div class="in-bl-line padding-60-30" style="margin-bottom: 100px;position: relative;">*/
/*         <!--<div class="in-bl-line-item map-width"><img style="width: 100%;" src="/images/map.jpg"/></div>-->*/
/*         <div class="copyright-text copyright-panel" style="">© 2018 Dorrr 版权所有</div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/* {% endblock %}*/
