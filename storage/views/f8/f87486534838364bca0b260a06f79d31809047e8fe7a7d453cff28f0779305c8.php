<?php

/* index/who.html */
class __TwigTemplate_86b74f5f378b3a4cc029aaf36cde2f0cda9caaa544bbb2a958fb5f151956701e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index_new2.html", "index/who.html", 1);
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
</style>
";
    }

    // line 19
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"><span style=\"line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;\"></span></div>";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "<div class=\"common-padding padding-top-122-49\" style=\"margin-bottom: 100px;\">
    <div class=\"title-text2 padding-60-30\">WHO WE ARE</div>
    <p class=\"font-p padding-60-30\">Dorrr是一个愿望。是基于用户寻找最恰当的设计方法，把产品设计、品牌设计、交互与视觉设计连接，不局限于单一的设计约束，多角度为企业、品牌、产品提供创新的解决方案。 我们是乐活玩家、是设计师、是程序员、是插画家、是摄影师、是完美主义的追求者。喜欢有意义的思想交换，愿意做改变社会的事情。</p>

    <img style=\"width: 100%;margin-top: 34px;\" src=\"/images/map.png\"/>


    <div class=\"in-bl-line easy-l\">
        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <p class=\"font-p-title\">产品设计</p>
            <p class=\"font-p\">公司规划、设计、生产移动端和其他产品，我们善于在数字平台创造最佳的用户体验。 整合用户调研、市场反馈、可用性测试，专业分析评估产品策略，提出有价值的，适合的解决方案。用简洁高效的方式，搭建有创意有思想的平台与体验。</p>
        </div>

        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <p class=\"font-p-title\">企业／品牌设计</p>
            <p class=\"font-p\">用艺术的概念摸索关键词，用大量的草图去做分析，借用形形色色的工具把动人惊艳的文字词汇以高度精准的视觉形式表达，创造打动人心的设计作品。建立庞大的视觉规范架构，使得每一件作品都在数字化时代里具有强大的生命力，形成企业强有力的品牌资产。</p>
        </div>
    </div>

    <div class=\"in-bl-line easy-l\">
        <div class=\"in-bl-line-item response-free-width2 v-a-t\">
            <p class=\"font-p-title\">交互与视觉设计</p>
            <p class=\"font-p\">我们是信息架构师、是用户界面设计师、是用户体验架构师。我们追求设计有价值，可用性高的产品，从定义品牌的设计思维出发，建立强大稳定的视觉系统，从产品的市场机会着手，测试每一个交互方案，评估每一个测试结果，准确找到最符合用户的使用习惯。</p>
        </div>
    </div>
</div>
";
    }

    // line 49
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index/who.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 49,  65 => 21,  62 => 20,  56 => 19,  49 => 16,  34 => 3,  31 => 2,  11 => 1,);
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
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"><span style="line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;"></span></div>{% endblock %}*/
/* {% block body %}*/
/* <div class="common-padding padding-top-122-49" style="margin-bottom: 100px;">*/
/*     <div class="title-text2 padding-60-30">WHO WE ARE</div>*/
/*     <p class="font-p padding-60-30">Dorrr是一个愿望。是基于用户寻找最恰当的设计方法，把产品设计、品牌设计、交互与视觉设计连接，不局限于单一的设计约束，多角度为企业、品牌、产品提供创新的解决方案。 我们是乐活玩家、是设计师、是程序员、是插画家、是摄影师、是完美主义的追求者。喜欢有意义的思想交换，愿意做改变社会的事情。</p>*/
/* */
/*     <img style="width: 100%;margin-top: 34px;" src="/images/map.png"/>*/
/* */
/* */
/*     <div class="in-bl-line easy-l">*/
/*         <div class="in-bl-line-item response-free-width2 v-a-t">*/
/*             <p class="font-p-title">产品设计</p>*/
/*             <p class="font-p">公司规划、设计、生产移动端和其他产品，我们善于在数字平台创造最佳的用户体验。 整合用户调研、市场反馈、可用性测试，专业分析评估产品策略，提出有价值的，适合的解决方案。用简洁高效的方式，搭建有创意有思想的平台与体验。</p>*/
/*         </div>*/
/* */
/*         <div class="in-bl-line-item response-free-width2 v-a-t">*/
/*             <p class="font-p-title">企业／品牌设计</p>*/
/*             <p class="font-p">用艺术的概念摸索关键词，用大量的草图去做分析，借用形形色色的工具把动人惊艳的文字词汇以高度精准的视觉形式表达，创造打动人心的设计作品。建立庞大的视觉规范架构，使得每一件作品都在数字化时代里具有强大的生命力，形成企业强有力的品牌资产。</p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="in-bl-line easy-l">*/
/*         <div class="in-bl-line-item response-free-width2 v-a-t">*/
/*             <p class="font-p-title">交互与视觉设计</p>*/
/*             <p class="font-p">我们是信息架构师、是用户界面设计师、是用户体验架构师。我们追求设计有价值，可用性高的产品，从定义品牌的设计思维出发，建立强大稳定的视觉系统，从产品的市场机会着手，测试每一个交互方案，评估每一个测试结果，准确找到最符合用户的使用习惯。</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/* {% endblock %}*/
