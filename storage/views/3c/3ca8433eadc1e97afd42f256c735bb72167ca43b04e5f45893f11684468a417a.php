<?php

/* editor_work.html */
class __TwigTemplate_6327cbf7e8b77612bdf2a28b1efae686d521f4547a6e73f85a36c297767c1159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/bkend.html", "editor_work.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout/bkend.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<style>
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


    .add-work-list{font-size: 0;padding-top:7px;border: 1px solid #979797; }
    .add-work-list > div{
        display: inline-block;
        width: 50%;
        height: 230px;
        padding: 7px;
        vertical-align: top;
    }

    .work-img-box{
        width: 100%;
        height: 80%;
    }

    .work-img-opr{
        height: 20%;
        display: table;
        font-size: 16px;
        width: 100%;
    }

    .drop-target{
        opacity: .2;
    }
</style>
<div class=\"sandbox\">
    <div class=\"sandbox-header\">
        <div class=\"logo-wrapper\"><a><img src=\"/public/images/logo.png\"/></a></div>
        <div class=\"menu-wrapper\"><a id=\"menu-open\"><img src=\"/public/images/menu.png\"/></a></div>
    </div>

    <div class=\"sandbox-section\">
        <form id=\"upload-form\">
            <input name=\"id\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" type=\"hidden\"/>
            <div style=\"display: inline-block;text-align: left;\">
                <div class=\"one-horizontal\">
                    <label>作品类型</label>
                    <div>
                        <select name=\"type\">
                            <option>请选择分类</option>
                            <option value=\"2\" ";
        // line 120
        if (((isset($context["type"]) ? $context["type"] : null) == 2)) {
            echo " selected ";
        }
        echo ">产品设计</option>
                            <option value=\"3\" ";
        // line 121
        if (((isset($context["type"]) ? $context["type"] : null) == 3)) {
            echo " selected ";
        }
        echo ">交互与视觉设计</option>
                            <option value=\"4\" ";
        // line 122
        if (((isset($context["type"]) ? $context["type"] : null) == 4)) {
            echo " selected ";
        }
        echo ">企业/品牌设计</option>
                        </select>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label>是否主页</label>
                    <div>
                        <select name=\"is_home\">
                            <option value=\"0\" ";
        // line 130
        if (((isset($context["is_home"]) ? $context["is_home"] : null) == 0)) {
            echo " selected ";
        }
        echo ">否</option>
                            <option value=\"1\" ";
        // line 131
        if (((isset($context["is_home"]) ? $context["is_home"] : null) == 1)) {
            echo " selected ";
        }
        echo ">是</option>
                        </select>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label>作品宽度</label>
                    <div>
                        <select name=\"width_type\">
                            <option value=\"1\" ";
        // line 139
        if (((isset($context["width_type"]) ? $context["width_type"] : null) == 1)) {
            echo " selected ";
        }
        echo ">100%</option>
                            <option value=\"2\" ";
        // line 140
        if (((isset($context["width_type"]) ? $context["width_type"] : null) == 2)) {
            echo " selected ";
        }
        echo ">50%</option>
                        </select>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label>作品名称</label>
                    <div>
                        <input name=\"title\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label>作品小标</label>
                    <div>
                        <input name=\"abstract\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["abstract"]) ? $context["abstract"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label style=\"vertical-align: top;padding-top: 9px;\">作品介绍</label>
                    <div>
                        <textarea style=\"height: 150px;\" name=\"describe\">";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["describe"]) ? $context["describe"] : null), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label style=\"vertical-align: top;padding-top: 9px;\">作品大面</label>
                    <div>
                        <div style=\"width: 180px;height: 180px;border: 1px solid #979797;\"><a id=\"up-banner-img\" style=\"line-height: 180px;display: block;text-align: center;color: #333;height: 100%;\"><div style=\"width: 100%;height: 100%;\" class=\"img-wrapper\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["banner_img"]) ? $context["banner_img"] : null), "html", null, true);
        echo "\"/></div></a></div>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label style=\"vertical-align: top;padding-top: 9px;\">作品封面</label>
                    <div>
                        <div style=\"width: 180px;height: 180px;border: 1px solid #979797;\"><a id=\"up-face-img\" style=\"line-height: 180px;display: block;text-align: center;color: #333;height: 100%;\"><div style=\"width: 100%;height: 100%;\" class=\"img-wrapper\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["face_img"]) ? $context["face_img"] : null), "html", null, true);
        echo "\"/></div></a></div>
                    </div>
                </div>
                <div class=\"one-horizontal\">
                    <label style=\"vertical-align: top;padding-top: 9px;\">作品上传</label>
                    <div>
                        <div style=\"width: 460px;\" class=\"add-work-list\">

                            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imgPro"]) ? $context["imgPro"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imgItem"]) {
            // line 180
            echo "                            <div class=\"work-img-box-container\"><div class=\"work-img-box\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imgItem"], "img", array()), "html", null, true);
            echo "\"></div>
                                <!--<div class=\"work-img-opr\"><a onclick=\"deleteWork(this)\" style=\"display: table-cell;vertical-align: middle;text-align: right;\"><i class=\"fa fa-remove\"></i>前置文本</a></div>-->
                                <div class=\"work-img-opr\"><a onclick=\"changeWidth(this)\" style=\"display: table-cell;vertical-align: middle;text-align: right;\" data-width=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["imgItem"], "width_type", array()), "html", null, true);
            echo "\" class=\"width-opr\">宽度";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imgItem"], "width_type_text", array()), "html", null, true);
            echo "%</a><a onclick=\"openAddMember(this)\" class=\"text-opr\" style=\"display: table-cell;vertical-align: middle;text-align: right;\" data-text=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imgItem"], "text", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i>前置文本</a><a onclick=\"deleteWork(this)\" style=\"display: table-cell;vertical-align: middle;text-align: right;\"><i class=\"fa fa-remove\"></i>删除</a></div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imgItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
                            <!--<div>-->
                            <!--<div class=\"work-img-box\"><img src=\"http://zhuyan.me/img/example/1.jpg\"/></div>-->
                            <!--<div class=\"work-img-opr\">-->
                            <!--<a onclick=\"deleteWork(this)\" style=\"display: table-cell;vertical-align: middle;text-align: right;\"><i class=\"fa fa-remove\"></i>删除</a>-->
                            <!--</div>-->
                            <!--</div>-->
                            <div id=\"work-img-add\"><div style=\"width: 100%;height: 100%;border: 2px solid #FFD48B;border-radius: 2px;\"><a style=\"line-height: 213px;display: block;text-align: center;color: #333;height: 100%;font-size: 16px;\" id=\"up-work-img\">上传作品</a></div></div>
                        </div>
                    </div>
                </div>
                <div class=\"one-horizontal\" style=\"text-align: right;\">
                    <a style=\"background: #FFD48B;width: 130px;height: 30px;display: inline-block;line-height: 30px;color: #ffffff;text-align: center;text-decoration: none;border-radius: 3px;\" id=\"upload\">保存修改</a>
                </div>
            </div>
        </form>

        <form style=\"display: none;\" id=\"data-form\">
            <input type=\"hidden\" value=\"1\" name=\"type\" id=\"img-type\"/>
            <input type=\"file\" name=\"face_img\"/>
        </form>
    </div>
</div>

<div style=\"position: fixed; top: 0px; bottom: 0px; left: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.6); z-index: 99;display: none;\" id=\"add_member_panel\">
    <div style=\"padding: 14px;background-color: #ffffff;border-radius: 8px;transform: translate(-50%,-50%);position: absolute;top:50%;left: 50%;width: 540px;\">
        <h4>图片前置文本</h4>
        <div class=\"one-horizontal\">
            <div>
                <textarea style=\"height: 150px;\" id=\"pre_text\"></textarea>
            </div>
        </div>
        <div>
            <button type=\"button\" class=\"btn btn-success col-gray-btn mt-32\" onclick=\"yesMask()\">确认</button>
            <button type=\"button\" class=\"btn btn-success col-gray-btn mt-32\" onclick=\"closeAddMember()\">取消</button>
        </div>
    </div>
</div>
";
    }

    // line 224
    public function block_script($context, array $blocks = array())
    {
        // line 225
        echo "<script src=\"/public/assets/js/imgLiquid.js\"></script>
<script src=\"/public/js/interact.js\"></script>
<script>

    var maskTrigger = '';

    function dragMoveListener (event) {
        var target = event.target,
            // keep the dragged position in the data-x/data-y attributes
            x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
            y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

        // translate the element
//        target.style.zIndex = '99px';
        target.style.webkitTransform =
            target.style.transform =
                'translate(' + x + 'px, ' + y + 'px)';
        target.style.zIndex = 999;

        // update the posiion attributes
        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
    }

    // this is used later in the resizing and gesture demos
    window.dragMoveListener = dragMoveListener;

    /*图片拖拽的配置*/
    var draggableParam = {
        // enable inertial throwing
        inertia: true,
        // keep the element within the area of it's parent
        restrict: {
            restriction: \"parent\",
            endOnly: true,
            elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
        },
        // enable autoScroll
        autoScroll: true,
        // call this function on every dragmove event
        onmove: dragMoveListener,
        // call this function on every dragend event
        onend: function (event) {
            var target = event.target;
            target.style = '';
            target.removeAttribute('data-x');
            target.removeAttribute('data-y');
        }
    };
    var dropzoneParam =  {
        // only accept elements matching this CSS selector
        accept: '.work-img-box-container',
        // Require a 75% element overlap for a drop to be possible
        overlap: 0.75,

        // listen for drop related events:

        ondropactivate: function (event) {
            // add active dropzone feedback
            event.target.classList.add('drop-active');
        },
        ondragenter: function (event) {
            var draggableElement = event.relatedTarget,
                dropzoneElement = event.target;

            /**
             * duang
             */
            dropzoneElement.classList.add('drop-target');

            // feedback the possibility of a drop
            //dropzoneElement.classList.add('drop-target');
            //draggableElement.classList.add('can-drop');
            //draggableElement.textContent = 'Dragged in';
        },
        ondragleave: function (event) {
            // remove the drop feedback style
            event.target.classList.remove('drop-target');
            event.relatedTarget.classList.remove('can-drop');
            //event.relatedTarget.textContent = 'Dragged out';
        },
        ondrop: function (event) {
            var draggableElement = event.relatedTarget,
                dropzoneElement = event.target;


//                                    draggableElement.style = '';
            draggableElement.removeAttribute('data-x');
            draggableElement.removeAttribute('data-y');

            var outerHTML = draggableElement.outerHTML;
            //用这则替换掉work-list-item的style
            outerHTML = outerHTML.replace(new RegExp('<div class=\"work-img-box-container\"[^>]+>'),'<div class=\"work-img-box-container\">');
            console.log(outerHTML);
            dropzoneElement.insertAdjacentHTML('beforeBegin',outerHTML);
//                                    console.log(draggableElement);
            \$(draggableElement).remove();
            //reOrderShow();
            //放置位置
            //console.log('add');
//                                    var tmpObj = document.createElement('<div>');
            //tmpObj.style = '';
            //dropzoneElement.insertAdjacentHTML('beforeBegin',tmpObj.outerHTML);
//                                    dropzoneElement.insertBefore(draggableElement);
//
//                                    console.log(draggableElement);

            //event.relatedTarget.textContent = 'Dropped';
        },
        ondropdeactivate: function (event) {
            // remove active dropzone feedback
            event.target.classList.remove('drop-active');
            event.target.classList.remove('drop-target');
        }
    };


    /*允许图片拖拽改变顺序*/
    interact('.work-img-box-container').draggable(draggableParam).dropzone(dropzoneParam);



    function deleteWork(obj){
//        console.log(\$(obj));
//        console.log(\$(obj).parent().parent());
        \$(obj).parent().parent().remove();
    }

    function editWork(obj)
    {

    }


    \$('body').on('click','#up-banner-img',function(){
        \$('#img-type').val(3);
        \$('input[name=\"face_img\"]').trigger('click');
    });

    \$('body').on('click','#up-face-img',function(){
        \$('#img-type').val(1);
        \$('input[name=\"face_img\"]').trigger('click');
    });

    \$('body').on('click','#up-work-img',function(){
        \$('#img-type').val(2);
        \$('input[name=\"face_img\"]').trigger('click');
    });

    \$(function(){
        \$('.work-img-box').imgLiquid();
//        \$('body').on('click','',function(){
//            \$(this).
//        });
    });

    /**
     * 上传图片
     */
    \$('body').on('change','input[name=\"face_img\"]',function(){
        if(this.value){
            var formData = new FormData(\$(\"#data-form\")[0]);
            \$.ajax({
                url:'/savework',
                data:formData,
                type:'post',
                contentType: false,
                processData: false,
                dataType:'json',
                success:function(data){
                    if(data.status){
                        /*
                         * 把input换掉
                         **/
                        \$('input[name=\"face_img\"]').replaceWith('<input type=\"file\" name=\"face_img\"/>');
                        if(data.type == 1){
                            \$('#up-face-img').html('<div style=\"width: 100%;height: 100%;\" class=\"img-wrapper\"><img src=\"'+data.path+'\"/></div>');
                            \$(\".img-wrapper\").imgLiquid();
                        }else if(data.type == 2){

                            \$('#work-img-add').before('<div class=\"work-img-box-container\"><div class=\"work-img-box\"><img src=\"'+data.path+'\"/></div><div class=\"work-img-opr\"><a onclick=\"changeWidth(this)\" style=\"display: table-cell;vertical-align: middle;text-align: right;\" class=\"width-opr\">宽度100%</a><a onclick=\"openAddMember(this)\" class=\"text-opr\" style=\"display: table-cell;vertical-align: middle;text-align: right;\"><i class=\"fa fa-edit\"></i>前置文本</a><a onclick=\"deleteWork(this)\" style=\"display: table-cell;vertical-align: middle;text-align: right;\"><i class=\"fa fa-remove\"></i>删除</a></div></div>');
                            \$(\".work-img-box\").imgLiquid();
                        } else {
                            \$('#up-banner-img').html('<div style=\"width: 100%;height: 100%;\" class=\"img-wrapper\"><img src=\"'+data.path+'\"/></div>');
                            \$(\".img-wrapper\").imgLiquid();
                        }


                        //\$('#img-show').attr('src',data.data.img_url);
                        /*EMASCript 6的多行字符串*/
//                        \$('input[name=\"pic\"]').remove();
//                        \$('#add-work').before('<input type=\"file\" style=\"display: none\" name=\"pic\"/>');
                    }
                }
            });
        }
    });


    /**
     * 上传作品
     */
    \$('#upload').click(function(){
        var formData = \$('#upload-form').serialize();
        console.log(formData);

        //封面图
        var face_img = \$('#up-face-img').find('img').attr('src');
        var banner_img = \$('#up-banner-img').find('img').attr('src');

        //详细图片
        var imgs = [];
        var texts = [];
        var width_types = [];

        \$('.work-img-box').find('img').each(function(){
            imgs.push(\$(this).attr('src'));
        });

        \$('.work-img-opr').find('.text-opr').each(function(){
            texts.push(\$(this).attr('data-text'));
        });

        \$('.work-img-opr').find('.width-opr').each(function(){
            width_types.push(\$(this).attr('data-width'));
        });





        console.log(face_img);
        console.log(imgs);

        var data = formData + '&face_img=' + face_img+ '&imgs=' + JSON.stringify(imgs) + '&texts=' + JSON.stringify(texts) + '&width_types=' + JSON.stringify(width_types) + '&banner_img=' + banner_img;
        console.log(data);

        \$.ajax({
            url:'/modifywork',
            type:'post',
            dataType:'json',
            data:data,
            success:function(data){
                if(data.status){
                    location.href = 'work?id=' + data.data;
                }
            },
            error:function(){

            }
        });
    });

    \$(function(){
        \$(\".img-wrapper\").imgLiquid();
        \$(\".work-img-box\").imgLiquid();
    });

    function closeAddMember()
    {
        \$('#add_member_panel').hide();
        \$('#up_member_panel').hide();
    }

    function openAddMember(obj)
    {
        \$('#pre_text').val(\$(obj).attr('data-text'));
        maskTrigger = obj;
        // \$('textarea[name=\"describe\"]').html('896');
        \$('#add_member_panel').show();
    }


    function yesMask()
    {

        // console.log(\$('textarea[name=\"describe\"]').html());
        \$(maskTrigger).attr('data-text',\$('#pre_text').val());
        closeAddMember();
    }

    function changeWidth(obj)
    {
        if ( \$(obj).attr('data-width') == 1 )
        {
            \$(obj).attr('data-width',2);
            \$(obj).text('宽度50%');
        } else {
            \$(obj).attr('data-width',1);
            \$(obj).text('宽度100%');
        }
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "editor_work.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 225,  328 => 224,  286 => 185,  273 => 182,  267 => 180,  263 => 179,  252 => 171,  243 => 165,  234 => 159,  225 => 153,  216 => 147,  204 => 140,  198 => 139,  185 => 131,  179 => 130,  166 => 122,  160 => 121,  154 => 120,  144 => 113,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/bkend.html" %}*/
/* {% block body %}*/
/* <style>*/
/*     .sandbox{padding: 25px;}*/
/*     .sandbox-header{display: flex;}*/
/*     .sandbox-header > div{*/
/*         flex: 1;*/
/*         height: 34px;*/
/*     }*/
/* */
/*     .logo-wrapper{text-align: left}*/
/*     .menu-wrapper{text-align: right}*/
/*     .sandbox-header a{overflow: hidden;display: inline-block;height: 100%;}*/
/*     .sandbox-header img{height: 100%;}*/
/* */
/*     .sandbox-section{text-align: center;padding: 27px 0;}*/
/*     .work-panel{*/
/*         width: auto;*/
/*         margin: 0 auto;*/
/*         display: inline-block;*/
/*     }*/
/* */
/*     .one-item{*/
/*         display: inline-block;*/
/*         width: auto;*/
/*     }*/
/* */
/*     .one-item > div{*/
/*         display: inline-block;*/
/*     }*/
/* */
/*     .one-item-right{margin-left: 40px;}*/
/*     .one-item ::after{word-wrap: break-word;}*/
/*     .one-horizontal{*/
/*         margin-top: 17px;*/
/*     }*/
/* */
/*     .one-horizontal > div{*/
/*         display: inline-block;*/
/*         margin-left: 20px;*/
/*     }*/
/* */
/*     .one-horizontal{*/
/*         vertical-align: middle;*/
/*     }*/
/* */
/*     .one-horizontal label{*/
/*         font-family: PingFangSC-Regular;*/
/*         font-size: 14px;*/
/*         color: #333333;*/
/*         line-height: 14px;*/
/*         margin-bottom: 0;*/
/*         font-weight: normal;*/
/*     }*/
/* */
/*     .one-horizontal select{*/
/* */
/*     }*/
/* */
/*     .one-horizontal input,.one-horizontal textarea,.one-horizontal select{*/
/*         background: #FFFFFF;*/
/*         border: 1px solid #979797;*/
/*         border-radius: 2px;*/
/*         padding: 6px;*/
/*     }*/
/* */
/*     .one-horizontal select{*/
/*         width: 140px;*/
/*     }*/
/* */
/*     .one-horizontal input,.one-horizontal textarea{*/
/*         width: 460px;*/
/*     }*/
/* */
/*     #upload:hover{*/
/*         background: #FFD4D4 !important;*/
/*     }*/
/* */
/* */
/*     .add-work-list{font-size: 0;padding-top:7px;border: 1px solid #979797; }*/
/*     .add-work-list > div{*/
/*         display: inline-block;*/
/*         width: 50%;*/
/*         height: 230px;*/
/*         padding: 7px;*/
/*         vertical-align: top;*/
/*     }*/
/* */
/*     .work-img-box{*/
/*         width: 100%;*/
/*         height: 80%;*/
/*     }*/
/* */
/*     .work-img-opr{*/
/*         height: 20%;*/
/*         display: table;*/
/*         font-size: 16px;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     .drop-target{*/
/*         opacity: .2;*/
/*     }*/
/* </style>*/
/* <div class="sandbox">*/
/*     <div class="sandbox-header">*/
/*         <div class="logo-wrapper"><a><img src="/public/images/logo.png"/></a></div>*/
/*         <div class="menu-wrapper"><a id="menu-open"><img src="/public/images/menu.png"/></a></div>*/
/*     </div>*/
/* */
/*     <div class="sandbox-section">*/
/*         <form id="upload-form">*/
/*             <input name="id" value="{{ id }}" type="hidden"/>*/
/*             <div style="display: inline-block;text-align: left;">*/
/*                 <div class="one-horizontal">*/
/*                     <label>作品类型</label>*/
/*                     <div>*/
/*                         <select name="type">*/
/*                             <option>请选择分类</option>*/
/*                             <option value="2" {% if type == 2 %} selected {% endif %}>产品设计</option>*/
/*                             <option value="3" {% if type == 3 %} selected {% endif %}>交互与视觉设计</option>*/
/*                             <option value="4" {% if type == 4 %} selected {% endif %}>企业/品牌设计</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label>是否主页</label>*/
/*                     <div>*/
/*                         <select name="is_home">*/
/*                             <option value="0" {% if is_home == 0 %} selected {% endif %}>否</option>*/
/*                             <option value="1" {% if is_home == 1 %} selected {% endif %}>是</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label>作品宽度</label>*/
/*                     <div>*/
/*                         <select name="width_type">*/
/*                             <option value="1" {% if width_type == 1 %} selected {% endif %}>100%</option>*/
/*                             <option value="2" {% if width_type == 2 %} selected {% endif %}>50%</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label>作品名称</label>*/
/*                     <div>*/
/*                         <input name="title" value="{{ title }}"/>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label>作品小标</label>*/
/*                     <div>*/
/*                         <input name="abstract" value="{{ abstract }}"/>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label style="vertical-align: top;padding-top: 9px;">作品介绍</label>*/
/*                     <div>*/
/*                         <textarea style="height: 150px;" name="describe">{{ describe }}</textarea>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label style="vertical-align: top;padding-top: 9px;">作品大面</label>*/
/*                     <div>*/
/*                         <div style="width: 180px;height: 180px;border: 1px solid #979797;"><a id="up-banner-img" style="line-height: 180px;display: block;text-align: center;color: #333;height: 100%;"><div style="width: 100%;height: 100%;" class="img-wrapper"><img src="{{ banner_img }}"/></div></a></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label style="vertical-align: top;padding-top: 9px;">作品封面</label>*/
/*                     <div>*/
/*                         <div style="width: 180px;height: 180px;border: 1px solid #979797;"><a id="up-face-img" style="line-height: 180px;display: block;text-align: center;color: #333;height: 100%;"><div style="width: 100%;height: 100%;" class="img-wrapper"><img src="{{ face_img }}"/></div></a></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal">*/
/*                     <label style="vertical-align: top;padding-top: 9px;">作品上传</label>*/
/*                     <div>*/
/*                         <div style="width: 460px;" class="add-work-list">*/
/* */
/*                             {% for imgItem in imgPro %}*/
/*                             <div class="work-img-box-container"><div class="work-img-box"><img src="{{ imgItem.img }}"></div>*/
/*                                 <!--<div class="work-img-opr"><a onclick="deleteWork(this)" style="display: table-cell;vertical-align: middle;text-align: right;"><i class="fa fa-remove"></i>前置文本</a></div>-->*/
/*                                 <div class="work-img-opr"><a onclick="changeWidth(this)" style="display: table-cell;vertical-align: middle;text-align: right;" data-width="{{imgItem.width_type}}" class="width-opr">宽度{{imgItem.width_type_text}}%</a><a onclick="openAddMember(this)" class="text-opr" style="display: table-cell;vertical-align: middle;text-align: right;" data-text="{{imgItem.text}}"><i class="fa fa-edit"></i>前置文本</a><a onclick="deleteWork(this)" style="display: table-cell;vertical-align: middle;text-align: right;"><i class="fa fa-remove"></i>删除</a></div>*/
/*                             </div>*/
/*                             {% endfor %}*/
/* */
/*                             <!--<div>-->*/
/*                             <!--<div class="work-img-box"><img src="http://zhuyan.me/img/example/1.jpg"/></div>-->*/
/*                             <!--<div class="work-img-opr">-->*/
/*                             <!--<a onclick="deleteWork(this)" style="display: table-cell;vertical-align: middle;text-align: right;"><i class="fa fa-remove"></i>删除</a>-->*/
/*                             <!--</div>-->*/
/*                             <!--</div>-->*/
/*                             <div id="work-img-add"><div style="width: 100%;height: 100%;border: 2px solid #FFD48B;border-radius: 2px;"><a style="line-height: 213px;display: block;text-align: center;color: #333;height: 100%;font-size: 16px;" id="up-work-img">上传作品</a></div></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="one-horizontal" style="text-align: right;">*/
/*                     <a style="background: #FFD48B;width: 130px;height: 30px;display: inline-block;line-height: 30px;color: #ffffff;text-align: center;text-decoration: none;border-radius: 3px;" id="upload">保存修改</a>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/* */
/*         <form style="display: none;" id="data-form">*/
/*             <input type="hidden" value="1" name="type" id="img-type"/>*/
/*             <input type="file" name="face_img"/>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* <div style="position: fixed; top: 0px; bottom: 0px; left: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.6); z-index: 99;display: none;" id="add_member_panel">*/
/*     <div style="padding: 14px;background-color: #ffffff;border-radius: 8px;transform: translate(-50%,-50%);position: absolute;top:50%;left: 50%;width: 540px;">*/
/*         <h4>图片前置文本</h4>*/
/*         <div class="one-horizontal">*/
/*             <div>*/
/*                 <textarea style="height: 150px;" id="pre_text"></textarea>*/
/*             </div>*/
/*         </div>*/
/*         <div>*/
/*             <button type="button" class="btn btn-success col-gray-btn mt-32" onclick="yesMask()">确认</button>*/
/*             <button type="button" class="btn btn-success col-gray-btn mt-32" onclick="closeAddMember()">取消</button>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block script %}*/
/* <script src="/public/assets/js/imgLiquid.js"></script>*/
/* <script src="/public/js/interact.js"></script>*/
/* <script>*/
/* */
/*     var maskTrigger = '';*/
/* */
/*     function dragMoveListener (event) {*/
/*         var target = event.target,*/
/*             // keep the dragged position in the data-x/data-y attributes*/
/*             x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,*/
/*             y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;*/
/* */
/*         // translate the element*/
/* //        target.style.zIndex = '99px';*/
/*         target.style.webkitTransform =*/
/*             target.style.transform =*/
/*                 'translate(' + x + 'px, ' + y + 'px)';*/
/*         target.style.zIndex = 999;*/
/* */
/*         // update the posiion attributes*/
/*         target.setAttribute('data-x', x);*/
/*         target.setAttribute('data-y', y);*/
/*     }*/
/* */
/*     // this is used later in the resizing and gesture demos*/
/*     window.dragMoveListener = dragMoveListener;*/
/* */
/*     /*图片拖拽的配置*//* */
/*     var draggableParam = {*/
/*         // enable inertial throwing*/
/*         inertia: true,*/
/*         // keep the element within the area of it's parent*/
/*         restrict: {*/
/*             restriction: "parent",*/
/*             endOnly: true,*/
/*             elementRect: { top: 0, left: 0, bottom: 1, right: 1 }*/
/*         },*/
/*         // enable autoScroll*/
/*         autoScroll: true,*/
/*         // call this function on every dragmove event*/
/*         onmove: dragMoveListener,*/
/*         // call this function on every dragend event*/
/*         onend: function (event) {*/
/*             var target = event.target;*/
/*             target.style = '';*/
/*             target.removeAttribute('data-x');*/
/*             target.removeAttribute('data-y');*/
/*         }*/
/*     };*/
/*     var dropzoneParam =  {*/
/*         // only accept elements matching this CSS selector*/
/*         accept: '.work-img-box-container',*/
/*         // Require a 75% element overlap for a drop to be possible*/
/*         overlap: 0.75,*/
/* */
/*         // listen for drop related events:*/
/* */
/*         ondropactivate: function (event) {*/
/*             // add active dropzone feedback*/
/*             event.target.classList.add('drop-active');*/
/*         },*/
/*         ondragenter: function (event) {*/
/*             var draggableElement = event.relatedTarget,*/
/*                 dropzoneElement = event.target;*/
/* */
/*             /***/
/*              * duang*/
/*              *//* */
/*             dropzoneElement.classList.add('drop-target');*/
/* */
/*             // feedback the possibility of a drop*/
/*             //dropzoneElement.classList.add('drop-target');*/
/*             //draggableElement.classList.add('can-drop');*/
/*             //draggableElement.textContent = 'Dragged in';*/
/*         },*/
/*         ondragleave: function (event) {*/
/*             // remove the drop feedback style*/
/*             event.target.classList.remove('drop-target');*/
/*             event.relatedTarget.classList.remove('can-drop');*/
/*             //event.relatedTarget.textContent = 'Dragged out';*/
/*         },*/
/*         ondrop: function (event) {*/
/*             var draggableElement = event.relatedTarget,*/
/*                 dropzoneElement = event.target;*/
/* */
/* */
/* //                                    draggableElement.style = '';*/
/*             draggableElement.removeAttribute('data-x');*/
/*             draggableElement.removeAttribute('data-y');*/
/* */
/*             var outerHTML = draggableElement.outerHTML;*/
/*             //用这则替换掉work-list-item的style*/
/*             outerHTML = outerHTML.replace(new RegExp('<div class="work-img-box-container"[^>]+>'),'<div class="work-img-box-container">');*/
/*             console.log(outerHTML);*/
/*             dropzoneElement.insertAdjacentHTML('beforeBegin',outerHTML);*/
/* //                                    console.log(draggableElement);*/
/*             $(draggableElement).remove();*/
/*             //reOrderShow();*/
/*             //放置位置*/
/*             //console.log('add');*/
/* //                                    var tmpObj = document.createElement('<div>');*/
/*             //tmpObj.style = '';*/
/*             //dropzoneElement.insertAdjacentHTML('beforeBegin',tmpObj.outerHTML);*/
/* //                                    dropzoneElement.insertBefore(draggableElement);*/
/* //*/
/* //                                    console.log(draggableElement);*/
/* */
/*             //event.relatedTarget.textContent = 'Dropped';*/
/*         },*/
/*         ondropdeactivate: function (event) {*/
/*             // remove active dropzone feedback*/
/*             event.target.classList.remove('drop-active');*/
/*             event.target.classList.remove('drop-target');*/
/*         }*/
/*     };*/
/* */
/* */
/*     /*允许图片拖拽改变顺序*//* */
/*     interact('.work-img-box-container').draggable(draggableParam).dropzone(dropzoneParam);*/
/* */
/* */
/* */
/*     function deleteWork(obj){*/
/* //        console.log($(obj));*/
/* //        console.log($(obj).parent().parent());*/
/*         $(obj).parent().parent().remove();*/
/*     }*/
/* */
/*     function editWork(obj)*/
/*     {*/
/* */
/*     }*/
/* */
/* */
/*     $('body').on('click','#up-banner-img',function(){*/
/*         $('#img-type').val(3);*/
/*         $('input[name="face_img"]').trigger('click');*/
/*     });*/
/* */
/*     $('body').on('click','#up-face-img',function(){*/
/*         $('#img-type').val(1);*/
/*         $('input[name="face_img"]').trigger('click');*/
/*     });*/
/* */
/*     $('body').on('click','#up-work-img',function(){*/
/*         $('#img-type').val(2);*/
/*         $('input[name="face_img"]').trigger('click');*/
/*     });*/
/* */
/*     $(function(){*/
/*         $('.work-img-box').imgLiquid();*/
/* //        $('body').on('click','',function(){*/
/* //            $(this).*/
/* //        });*/
/*     });*/
/* */
/*     /***/
/*      * 上传图片*/
/*      *//* */
/*     $('body').on('change','input[name="face_img"]',function(){*/
/*         if(this.value){*/
/*             var formData = new FormData($("#data-form")[0]);*/
/*             $.ajax({*/
/*                 url:'/savework',*/
/*                 data:formData,*/
/*                 type:'post',*/
/*                 contentType: false,*/
/*                 processData: false,*/
/*                 dataType:'json',*/
/*                 success:function(data){*/
/*                     if(data.status){*/
/*                         /**/
/*                          * 把input换掉*/
/*                          **//* */
/*                         $('input[name="face_img"]').replaceWith('<input type="file" name="face_img"/>');*/
/*                         if(data.type == 1){*/
/*                             $('#up-face-img').html('<div style="width: 100%;height: 100%;" class="img-wrapper"><img src="'+data.path+'"/></div>');*/
/*                             $(".img-wrapper").imgLiquid();*/
/*                         }else if(data.type == 2){*/
/* */
/*                             $('#work-img-add').before('<div class="work-img-box-container"><div class="work-img-box"><img src="'+data.path+'"/></div><div class="work-img-opr"><a onclick="changeWidth(this)" style="display: table-cell;vertical-align: middle;text-align: right;" class="width-opr">宽度100%</a><a onclick="openAddMember(this)" class="text-opr" style="display: table-cell;vertical-align: middle;text-align: right;"><i class="fa fa-edit"></i>前置文本</a><a onclick="deleteWork(this)" style="display: table-cell;vertical-align: middle;text-align: right;"><i class="fa fa-remove"></i>删除</a></div></div>');*/
/*                             $(".work-img-box").imgLiquid();*/
/*                         } else {*/
/*                             $('#up-banner-img').html('<div style="width: 100%;height: 100%;" class="img-wrapper"><img src="'+data.path+'"/></div>');*/
/*                             $(".img-wrapper").imgLiquid();*/
/*                         }*/
/* */
/* */
/*                         //$('#img-show').attr('src',data.data.img_url);*/
/*                         /*EMASCript 6的多行字符串*//* */
/* //                        $('input[name="pic"]').remove();*/
/* //                        $('#add-work').before('<input type="file" style="display: none" name="pic"/>');*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/*     });*/
/* */
/* */
/*     /***/
/*      * 上传作品*/
/*      *//* */
/*     $('#upload').click(function(){*/
/*         var formData = $('#upload-form').serialize();*/
/*         console.log(formData);*/
/* */
/*         //封面图*/
/*         var face_img = $('#up-face-img').find('img').attr('src');*/
/*         var banner_img = $('#up-banner-img').find('img').attr('src');*/
/* */
/*         //详细图片*/
/*         var imgs = [];*/
/*         var texts = [];*/
/*         var width_types = [];*/
/* */
/*         $('.work-img-box').find('img').each(function(){*/
/*             imgs.push($(this).attr('src'));*/
/*         });*/
/* */
/*         $('.work-img-opr').find('.text-opr').each(function(){*/
/*             texts.push($(this).attr('data-text'));*/
/*         });*/
/* */
/*         $('.work-img-opr').find('.width-opr').each(function(){*/
/*             width_types.push($(this).attr('data-width'));*/
/*         });*/
/* */
/* */
/* */
/* */
/* */
/*         console.log(face_img);*/
/*         console.log(imgs);*/
/* */
/*         var data = formData + '&face_img=' + face_img+ '&imgs=' + JSON.stringify(imgs) + '&texts=' + JSON.stringify(texts) + '&width_types=' + JSON.stringify(width_types) + '&banner_img=' + banner_img;*/
/*         console.log(data);*/
/* */
/*         $.ajax({*/
/*             url:'/modifywork',*/
/*             type:'post',*/
/*             dataType:'json',*/
/*             data:data,*/
/*             success:function(data){*/
/*                 if(data.status){*/
/*                     location.href = 'work?id=' + data.data;*/
/*                 }*/
/*             },*/
/*             error:function(){*/
/* */
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $(function(){*/
/*         $(".img-wrapper").imgLiquid();*/
/*         $(".work-img-box").imgLiquid();*/
/*     });*/
/* */
/*     function closeAddMember()*/
/*     {*/
/*         $('#add_member_panel').hide();*/
/*         $('#up_member_panel').hide();*/
/*     }*/
/* */
/*     function openAddMember(obj)*/
/*     {*/
/*         $('#pre_text').val($(obj).attr('data-text'));*/
/*         maskTrigger = obj;*/
/*         // $('textarea[name="describe"]').html('896');*/
/*         $('#add_member_panel').show();*/
/*     }*/
/* */
/* */
/*     function yesMask()*/
/*     {*/
/* */
/*         // console.log($('textarea[name="describe"]').html());*/
/*         $(maskTrigger).attr('data-text',$('#pre_text').val());*/
/*         closeAddMember();*/
/*     }*/
/* */
/*     function changeWidth(obj)*/
/*     {*/
/*         if ( $(obj).attr('data-width') == 1 )*/
/*         {*/
/*             $(obj).attr('data-width',2);*/
/*             $(obj).text('宽度50%');*/
/*         } else {*/
/*             $(obj).attr('data-width',1);*/
/*             $(obj).text('宽度100%');*/
/*         }*/
/*     }*/
/* */
/* </script>*/
/* {% endblock %}*/
