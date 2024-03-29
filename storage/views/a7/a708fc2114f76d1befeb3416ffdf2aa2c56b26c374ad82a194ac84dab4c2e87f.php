<?php

/* editworks.html */
class __TwigTemplate_5502a198fb981b659223e737576d6e17abef89a1f4c17682c9d0b752e3d2f0a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout/index.html", "editworks.html", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'pageTitle' => array($this, 'block_pageTitle'),
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
    .veil ul li:nth-child(3) a{
        color:#FFD48B;
    }
    .works-type li:nth-child(";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ") a{  color:#FFD48B;  }

    .img-wrapper{
        position: absolute;
        top:6px;
        right: 36px;
        bottom: 6px;
        left: 6px;
    }

    .img-editor-wrapper{
        position: absolute;
        top:6px;
        right: 6px;
        font-size: 24px;
        width: 30px;
        line-height: 30px;
        text-align: center;
    }

    .img-editor-wrapper > div{
        border: 1px solid #dadada;
    }

    .img-editor-wrapper a{
        line-height: 30px;
    }

    .img-editor-wrapper a:hover{
        font-size: 30px;
    }

    /*.drop-active{*/
        /*border: 2px solid #c9302c;*/
    /*}*/

    .drop-target{
        opacity: .2;
    }

</style>
";
    }

    // line 49
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div style=\"text-align: center;\"><span style=\"line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;\">WORKS</span></div>";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "<div class=\"sandbox-content\">
    <div class=\"works-menu\">
        <ul class=\"works-type\">
            <li><a href=\"editworks\">全部</a></li>
            <li><a href=\"/editworks?type=2\">UI</a></li>
            <li><a href=\"/editworks?type=3\">手绘</a></li>
            <li><a href=\"/editworks?type=4\">动画</a></li>
            <li><a href=\"/editworks?type=5\">摄影</a></li>
        </ul>
    </div>
    <div class=\"works-list\">
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

    // line 74
    public function block_script($context, array $blocks = array())
    {
        // line 75
        echo "<script src=\"/public/assets/js/imgLiquid.js\"></script>
<script src=\"/public/js/interact.js\"></script>
<script>
    function getQueryString(name) {
        var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }

    function editWork(obj){

    }

    //重排作品
    function reOrderShow(){
        if(!\$('#reload-show').length) {
            \$('body').append('<div id=\"reload-show\" style=\"position: fixed;top: 0;right: 0;left: 0;padding: 30px;background-color: #ffc;z-index: 999\"><p style=\"text-align: center\">检测到您已改变作品顺序，是否保存？<button type=\"button\" class=\"btn btn-info\" style=\"margin-left: 12px;\" id=\"reorder-yes\">是</button><button style=\"margin-left: 12px\" type=\"button\" class=\"btn btn-info\" onclick=\"location.reload()\">否</button></p></div>');
        }
    }

    //reOrderShow();

    function closeWork(obj){
        console.log(obj);
        var id = \$(obj).attr('data-id');
        var r=confirm(\"你确定要删除吗？\");
        if (r==true)
        {
            \$.ajax({
                url:'/deletework',
                type:'post',
                dataType:'json',
                data:{id:id},
                success:function(data){
                    if(data.status){
                        location.reload();
                    }
                },
                error:function(){

                }
            });
        }
    }


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
                        listItem += '<div class=\"work-list-item response-width'+val.width_type+'\"><div class=\"img-wrapper\" data-title=\"'+val.title+'\" data-abstract=\"'+val.abstract+'\" data-id='+val.id+'><div class=\"img-data\" data-id=\"'+val.id+'\" img-data=\"'+val.face_img+'\"/></div><div class=\"img-editor-wrapper\"><div><a href=\"/editorwork?id='+val.id+'\"><i class=\"fa fa-edit\"></i></a></div><div><a onclick=\"javascript:closeWork(this);\" data-id=\"'+val.id+'\"><i class=\"fa fa-close\"></i></a></div></div></div>';
                    });
//                    for(var item  in data.data){
//                        console.log(item);
//                        listItem += '<div><div class=\"img-wrapper\"><div class=\"img-data\" img-data=\"'+item.face_img+'\"/></div></div></div>';
//                    }
                    \$('.works-list').append(listItem);


                    \$('.img-data').each(function(){
                        var src = \$(this).attr('img-data');
                        var id = \$(this).attr('data-id');
                        \$(this).replaceWith('<a href=\"/work?id=\"'+id+'><img class=\"work-item\" src=\"'+src+'\"/></a>');
                    });

                    \$(\".img-wrapper\").imgLiquid();



                    \$('.work-list-item')
                    interact('.work-list-item')
                            .draggable({
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
//                                    console.log(123);
                                    var target = event.target;
                                    target.style = '';
                                    target.removeAttribute('data-x');
                                    target.removeAttribute('data-y');
                                }
                            }).dropzone({
                                // only accept elements matching this CSS selector
                                accept: '.work-list-item',
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
                                    outerHTML = outerHTML.replace(new RegExp('<div class=\"work-list-item\"[^>]+>'),'<div class=\"work-list-item\">');
                                    console.log(outerHTML);
                                    dropzoneElement.insertAdjacentHTML('beforeBegin',outerHTML);
//                                    console.log(draggableElement);
                                    \$(draggableElement).remove();
                                    reOrderShow();
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
                            });
                }
            },
            error:function(){
            }
        });
    }



    \$(function(){
        \$('body').on('click','#reorder-yes',function(){
            var ids = [];
            \$('.work-list-item').each(function(){
                var id = \$(this).find('.img-wrapper').attr('data-id');
                ids.push(id);
            });
            \$.ajax({
                url:'/reorderworks',
                data:{ids:ids.join(',')},
                dataType:'json',
                success:function(data){
                    location.reload();
                }
            });
        });

//        \$('.img-data').each(function(){
//            var src = \$(this).attr('img-data');
//            \$(this).replaceWith('<img class=\"work-item\" src=\"'+src+'\"/>');
//        });
//
//        \$(\".img-wrapper\").imgLiquid();

        \$('body').on('mouseover','.img-wrapper',function(){
            if(\$(this).find('.work-item-shade').length){
                return;
            }else{
                \$(this).append('<div class=\"work-item-shade\" style=\"position:absolute;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;opacity: .6;\"><a style=\"display: table;height: 100%;width: 100%;\" href=\"javascript:void(0)\" data-href=\"/work?id='+\$(this).attr('data-id')+'\"><div style=\"display: table-cell;vertical-align: middle\"><h3>'+\$(this).attr('data-title')+'</h3><p>'+\$(this).attr('data-abstract')+'</p></div></a></div>');
                return;
            }
        });


        \$('body').on('mouseleave','.img-wrapper',function(){
//            console.log(4);
            \$(this).find('.work-item-shade').remove();
        });

        refreshWork();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "editworks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 75,  120 => 74,  95 => 51,  92 => 50,  86 => 49,  40 => 7,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "_layout/index.html" %}*/
/* {% block style%}*/
/* <style>*/
/*     .veil ul li:nth-child(3) a{*/
/*         color:#FFD48B;*/
/*     }*/
/*     .works-type li:nth-child({{ type }}) a{  color:#FFD48B;  }*/
/* */
/*     .img-wrapper{*/
/*         position: absolute;*/
/*         top:6px;*/
/*         right: 36px;*/
/*         bottom: 6px;*/
/*         left: 6px;*/
/*     }*/
/* */
/*     .img-editor-wrapper{*/
/*         position: absolute;*/
/*         top:6px;*/
/*         right: 6px;*/
/*         font-size: 24px;*/
/*         width: 30px;*/
/*         line-height: 30px;*/
/*         text-align: center;*/
/*     }*/
/* */
/*     .img-editor-wrapper > div{*/
/*         border: 1px solid #dadada;*/
/*     }*/
/* */
/*     .img-editor-wrapper a{*/
/*         line-height: 30px;*/
/*     }*/
/* */
/*     .img-editor-wrapper a:hover{*/
/*         font-size: 30px;*/
/*     }*/
/* */
/*     /*.drop-active{*//* */
/*         /*border: 2px solid #c9302c;*//* */
/*     /*}*//* */
/* */
/*     .drop-target{*/
/*         opacity: .2;*/
/*     }*/
/* */
/* </style>*/
/* {% endblock %}*/
/* {% block pageTitle %}<div style="text-align: center;"><span style="line-height: 34px;font-size: 26px;font-family: FZLTXHB--B51-0;color: #333333;">WORKS</span></div>{% endblock %}*/
/* {% block body %}*/
/* <div class="sandbox-content">*/
/*     <div class="works-menu">*/
/*         <ul class="works-type">*/
/*             <li><a href="editworks">全部</a></li>*/
/*             <li><a href="/editworks?type=2">UI</a></li>*/
/*             <li><a href="/editworks?type=3">手绘</a></li>*/
/*             <li><a href="/editworks?type=4">动画</a></li>*/
/*             <li><a href="/editworks?type=5">摄影</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <div class="works-list">*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/1.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/2.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/3.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/4.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/1.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/2.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/3.jpg"/></div></div></div>-->*/
/*         <!--<div><div class="img-wrapper"><div class="img-data" img-data="http://zhuyan.me/img/example/4.jpg"/></div></div></div>-->*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block script %}*/
/* <script src="/public/assets/js/imgLiquid.js"></script>*/
/* <script src="/public/js/interact.js"></script>*/
/* <script>*/
/*     function getQueryString(name) {*/
/*         var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");*/
/*         var r = window.location.search.substr(1).match(reg);*/
/*         if (r != null) return unescape(r[2]); return null;*/
/*     }*/
/* */
/*     function editWork(obj){*/
/* */
/*     }*/
/* */
/*     //重排作品*/
/*     function reOrderShow(){*/
/*         if(!$('#reload-show').length) {*/
/*             $('body').append('<div id="reload-show" style="position: fixed;top: 0;right: 0;left: 0;padding: 30px;background-color: #ffc;z-index: 999"><p style="text-align: center">检测到您已改变作品顺序，是否保存？<button type="button" class="btn btn-info" style="margin-left: 12px;" id="reorder-yes">是</button><button style="margin-left: 12px" type="button" class="btn btn-info" onclick="location.reload()">否</button></p></div>');*/
/*         }*/
/*     }*/
/* */
/*     //reOrderShow();*/
/* */
/*     function closeWork(obj){*/
/*         console.log(obj);*/
/*         var id = $(obj).attr('data-id');*/
/*         var r=confirm("你确定要删除吗？");*/
/*         if (r==true)*/
/*         {*/
/*             $.ajax({*/
/*                 url:'/deletework',*/
/*                 type:'post',*/
/*                 dataType:'json',*/
/*                 data:{id:id},*/
/*                 success:function(data){*/
/*                     if(data.status){*/
/*                         location.reload();*/
/*                     }*/
/*                 },*/
/*                 error:function(){*/
/* */
/*                 }*/
/*             });*/
/*         }*/
/*     }*/
/* */
/* */
/*     function dragMoveListener (event) {*/
/*         var target = event.target,*/
/*         // keep the dragged position in the data-x/data-y attributes*/
/*                 x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,*/
/*                 y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;*/
/* */
/*         // translate the element*/
/* //        target.style.zIndex = '99px';*/
/*         target.style.webkitTransform =*/
/*                 target.style.transform =*/
/*                         'translate(' + x + 'px, ' + y + 'px)';*/
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
/*                         listItem += '<div class="work-list-item response-width'+val.width_type+'"><div class="img-wrapper" data-title="'+val.title+'" data-abstract="'+val.abstract+'" data-id='+val.id+'><div class="img-data" data-id="'+val.id+'" img-data="'+val.face_img+'"/></div><div class="img-editor-wrapper"><div><a href="/editorwork?id='+val.id+'"><i class="fa fa-edit"></i></a></div><div><a onclick="javascript:closeWork(this);" data-id="'+val.id+'"><i class="fa fa-close"></i></a></div></div></div>';*/
/*                     });*/
/* //                    for(var item  in data.data){*/
/* //                        console.log(item);*/
/* //                        listItem += '<div><div class="img-wrapper"><div class="img-data" img-data="'+item.face_img+'"/></div></div></div>';*/
/* //                    }*/
/*                     $('.works-list').append(listItem);*/
/* */
/* */
/*                     $('.img-data').each(function(){*/
/*                         var src = $(this).attr('img-data');*/
/*                         var id = $(this).attr('data-id');*/
/*                         $(this).replaceWith('<a href="/work?id="'+id+'><img class="work-item" src="'+src+'"/></a>');*/
/*                     });*/
/* */
/*                     $(".img-wrapper").imgLiquid();*/
/* */
/* */
/* */
/*                     $('.work-list-item')*/
/*                     interact('.work-list-item')*/
/*                             .draggable({*/
/*                                 // enable inertial throwing*/
/*                                 inertia: true,*/
/*                                 // keep the element within the area of it's parent*/
/*                                 restrict: {*/
/*                                     restriction: "parent",*/
/*                                     endOnly: true,*/
/*                                     elementRect: { top: 0, left: 0, bottom: 1, right: 1 }*/
/*                                 },*/
/*                                 // enable autoScroll*/
/*                                 autoScroll: true,*/
/* */
/*                                 // call this function on every dragmove event*/
/*                                 onmove: dragMoveListener,*/
/*                                 // call this function on every dragend event*/
/*                                 onend: function (event) {*/
/* //                                    console.log(123);*/
/*                                     var target = event.target;*/
/*                                     target.style = '';*/
/*                                     target.removeAttribute('data-x');*/
/*                                     target.removeAttribute('data-y');*/
/*                                 }*/
/*                             }).dropzone({*/
/*                                 // only accept elements matching this CSS selector*/
/*                                 accept: '.work-list-item',*/
/*                                 // Require a 75% element overlap for a drop to be possible*/
/*                                 overlap: 0.75,*/
/* */
/*                                 // listen for drop related events:*/
/* */
/*                                 ondropactivate: function (event) {*/
/*                                     // add active dropzone feedback*/
/*                                     event.target.classList.add('drop-active');*/
/*                                 },*/
/*                                 ondragenter: function (event) {*/
/*                                     var draggableElement = event.relatedTarget,*/
/*                                             dropzoneElement = event.target;*/
/* */
/*                                     /***/
/*                                      * duang*/
/*                                      *//* */
/*                                     dropzoneElement.classList.add('drop-target');*/
/* */
/*                                     // feedback the possibility of a drop*/
/*                                     //dropzoneElement.classList.add('drop-target');*/
/*                                     //draggableElement.classList.add('can-drop');*/
/*                                     //draggableElement.textContent = 'Dragged in';*/
/*                                 },*/
/*                                 ondragleave: function (event) {*/
/*                                     // remove the drop feedback style*/
/*                                     event.target.classList.remove('drop-target');*/
/*                                     event.relatedTarget.classList.remove('can-drop');*/
/*                                     //event.relatedTarget.textContent = 'Dragged out';*/
/*                                 },*/
/*                                 ondrop: function (event) {*/
/*                                     var draggableElement = event.relatedTarget,*/
/*                                             dropzoneElement = event.target;*/
/* */
/* */
/* //                                    draggableElement.style = '';*/
/*                                     draggableElement.removeAttribute('data-x');*/
/*                                     draggableElement.removeAttribute('data-y');*/
/* */
/*                                     var outerHTML = draggableElement.outerHTML;*/
/*                                     //用这则替换掉work-list-item的style*/
/*                                     outerHTML = outerHTML.replace(new RegExp('<div class="work-list-item"[^>]+>'),'<div class="work-list-item">');*/
/*                                     console.log(outerHTML);*/
/*                                     dropzoneElement.insertAdjacentHTML('beforeBegin',outerHTML);*/
/* //                                    console.log(draggableElement);*/
/*                                     $(draggableElement).remove();*/
/*                                     reOrderShow();*/
/*                                     //放置位置*/
/*                                     //console.log('add');*/
/* //                                    var tmpObj = document.createElement('<div>');*/
/*                                     //tmpObj.style = '';*/
/*                                     //dropzoneElement.insertAdjacentHTML('beforeBegin',tmpObj.outerHTML);*/
/* //                                    dropzoneElement.insertBefore(draggableElement);*/
/* //*/
/* //                                    console.log(draggableElement);*/
/* */
/*                                     //event.relatedTarget.textContent = 'Dropped';*/
/*                                 },*/
/*                                 ondropdeactivate: function (event) {*/
/*                                     // remove active dropzone feedback*/
/*                                     event.target.classList.remove('drop-active');*/
/*                                     event.target.classList.remove('drop-target');*/
/*                                 }*/
/*                             });*/
/*                 }*/
/*             },*/
/*             error:function(){*/
/*             }*/
/*         });*/
/*     }*/
/* */
/* */
/* */
/*     $(function(){*/
/*         $('body').on('click','#reorder-yes',function(){*/
/*             var ids = [];*/
/*             $('.work-list-item').each(function(){*/
/*                 var id = $(this).find('.img-wrapper').attr('data-id');*/
/*                 ids.push(id);*/
/*             });*/
/*             $.ajax({*/
/*                 url:'/reorderworks',*/
/*                 data:{ids:ids.join(',')},*/
/*                 dataType:'json',*/
/*                 success:function(data){*/
/*                     location.reload();*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/* //        $('.img-data').each(function(){*/
/* //            var src = $(this).attr('img-data');*/
/* //            $(this).replaceWith('<img class="work-item" src="'+src+'"/>');*/
/* //        });*/
/* //*/
/* //        $(".img-wrapper").imgLiquid();*/
/* */
/*         $('body').on('mouseover','.img-wrapper',function(){*/
/*             if($(this).find('.work-item-shade').length){*/
/*                 return;*/
/*             }else{*/
/*                 $(this).append('<div class="work-item-shade" style="position:absolute;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;opacity: .6;"><a style="display: table;height: 100%;width: 100%;" href="javascript:void(0)" data-href="/work?id='+$(this).attr('data-id')+'"><div style="display: table-cell;vertical-align: middle"><h3>'+$(this).attr('data-title')+'</h3><p>'+$(this).attr('data-abstract')+'</p></div></a></div>');*/
/*                 return;*/
/*             }*/
/*         });*/
/* */
/* */
/*         $('body').on('mouseleave','.img-wrapper',function(){*/
/* //            console.log(4);*/
/*             $(this).find('.work-item-shade').remove();*/
/*         });*/
/* */
/*         refreshWork();*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
