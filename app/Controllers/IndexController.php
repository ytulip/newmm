<?php
class IndexController{

    public function addwork(){
        return View::show('add_work.html',array());
    }

    public function editorwork(){
        $object = new WorkModel(IndexController::input('id'));

        $imgs = json_decode($object->imgs,true);
        $texts = json_decode($object->texts,true);
        $widthTypes = json_decode($object->width_types,true);

        $imgPro = [];

        foreach ( $imgs as $key=>$item)
        {
            $imgPro[] = (Object)['img'=>$item,'text'=>$texts[$key],'width_type'=>$widthTypes[$key],'width_type_text'=>($widthTypes[$key] == "1")?100:50];
        }

//        var_dump($imgPro);
//        exit;
        return View::show('editor_work.html',[
            'id'=>$object->id,
            'type'=>$object->type,
            'is_home'=>$object->is_home,
            'width_type'=>$object->width_type,
            'title'=>$object->title,
            'describe'=>$object->describe,
            'banner_img'=>$object->banner_img,
            'face_img'=>$object->face_img,
            'imgs'=>json_decode($object->imgs,true),
            'abstract'=>$object->abstract,
            'texts'=>json_decode($object->texts,true),
            'imgPro'=>$imgPro
        ]);
    }

    public function comment(){
        $comment = new Comment();
        $insertId = $comment->insert([
            'comment_context'=>IndexController::input('comment'),
            'work_id'=>IndexController::input('id'),
            'nickname'=>IndexController::input('nickname'),
            'u_email'=>IndexController::input('email'),
            'created_at'=>date('Y-m-d H:i:s'),
            'comment_level'=>IndexController::input('comment_level'),
            'replay_to'=>IndexController::input('replay_to'),
            'parent_id'=>IndexController::input('parent_id')
        ]);
        $object = new Comment($insertId);
        $item = $object->_model_object;
        $item->created_at = \MM\Kits::timeDescribe($item->created_at);
        $item->replay_info = json_encode(['parent_id'=>$item->parent_id?$item->parent_id:$item->id,'replay_to'=>$item->nickname]);
        $item->avatar = \MM\Kits::getAvatar($item->u_email);
        $item->child = [];
        echo json_encode(['status'=>true,'data'=>$item]);
        exit;
    }

    public function commentlist(){
        $lists = DB::select('select * from comment where work_id = ' . IndexController::input('id'));
        foreach($lists as $key=>$val){
            $lists[$key]->created_at = \MM\Kits::timeDescribe($val->created_at);
            $lists[$key]->replay_info = json_encode(['parent_id'=>$val->parent_id?$val->parent_id:$val->id,'replay_to'=>$val->nickname]);
            $lists[$key]->avatar = \MM\Kits::getAvatar($val->u_email);
        }
        $commentList = [];
        foreach ($lists as $item){
            if($item->comment_level == '1'){
                $item->child = [];
                $commentList[] = $item;
            }
        }



        foreach($lists as $item){
            if($item->comment_level == '1'){
                continue;
            }

            $ind = \MM\Kits::secondaryKeyIndex($commentList,'id',$item->parent_id);
            if($ind != -1){
                $commentList[$ind]->child[] = $item;
            }
        }

        echo json_encode(['status'=>true,'data'=>$commentList]);
        exit;
    }

    public function deletework(){
        $object = new WorkModel(IndexController::input('id'));
        $object->delete();
        echo json_encode(['status'=>true]);
        exit;
    }

    public function home(){
        return View::show('index/home.html',array(
            'type'=>IndexController::input('type',1)
        ));
    }

    public function share(){
        $object = new TreeHole(IndexController::input('id'));
        return View::show('share.html',[
            'article'=>$object->context,
            'id'=>$object->id,
            'view_num'=>$object->view_num
        ]);
    }

    public function praise(){
        $object = new TreeHole(IndexController::input('id'));
        $object->update(['view_num'=>$object->view_num + 1]);
        exit;
    }



    public function work(){
        $object = new WorkModel(IndexController::input('id'));
        $imgs = json_decode($object->imgs,true);
        $texts = json_decode($object->texts,true);
        $widthTypes = json_decode($object->width_types,true);
        $imgsType = [];
        $items = [];
        foreach ( $imgs as $key=>$img) {
            if(strpos($img,'/server/upload') !== false) {
                $imgs[$key] = str_replace('jpg','mp4',$img);
            }
//            $imgs[$key] = str_replace('jpg','mp4',$img);
            $imgsType[] = strpos($img,'/server/upload')?0:1;
            if( $texts[$key] != '')
            {
                $items[] = ['type'=>2,'content'=>$texts[$key],'width_type'=>2,''];
            }
            $items[] = ['type'=>1,'content'=>env('IMG_HOST') . $img,'width_type'=>$widthTypes[$key]];
        }

        $lineItems = [];
        $itemTmp = [];

        foreach ( $items as $key=>$item)
        {
            if( $item['width_type'] == 1)
            {
                if( count($itemTmp) )
                {
                    $lineItems[] = $itemTmp;
                    $itemTmp = [];
                }
                $itemTmp[] = $item;
                $lineItems[] = $itemTmp;
                $itemTmp = [];
                continue;
            }

            if( count($itemTmp) == 0 )
            {
                $itemTmp[] = $item;
                continue;
            }

            if( count($itemTmp) == 1 )
            {
                $itemTmp[] = $item;
                continue;
            }

            if( count($itemTmp) == 2){
                $lineItems[] = $itemTmp;
                $itemTmp = [];
                $itemTmp[] = $item;
                continue;
            }
        }


        if( count($itemTmp) )
        {
            $lineItems[] = $itemTmp;
        }

        $workList = DB::select('select * from work order by power asc,id desc');
        $currentIndex = -1;
        foreach ( $workList as $key=>$item)
        {
            if( $item->id == $object->id )
            {
                $currentIndex = $key;
                break;
            }
        }


        return View::show('index/new_work.html',array(
            'type'=>$object->type,
            'title'=>$object->title,
            'abstract'=>$object->abstract,
            'describe'=>$object->describe,
            'imgs'=>$imgs,
            'imgs_type'=>$imgsType,
            'face_img'=>env('IMG_HOST') . $object->face_img,
            'banner_img'=>env('IMG_HOST') . $object->banner_img,
            'lineItems'=>$lineItems,
            'prev'=>isset($workList[$currentIndex - 1])?$workList[$currentIndex - 1]->id:'',
            'next'=>isset($workList[$currentIndex + 1])?$workList[$currentIndex + 1]->id:''
        ));
    }


    public function editworks(){
        return View::show('editworks.html',array(
            'type'=>IndexController::input('type',1)
        ));
    }

    /**
     * 重新排列works
     */
    public function reorderworks(){
        /**
         *
         */
        $arr = [];
        $sql = 'update work set power = case ';
        foreach(explode(',',IndexController::input('ids')) as $key=>$val){
            $sql .= " when id = $val then $key";
        }
        $sql .= ' end';
        DB::delete($sql);
        echo json_encode(['status'=>true]);
    }

    /**
     * 公众号
     */
    public function works(){
        return View::show('index/works.html',array(
            'type'=>IndexController::input('type',1),
            'typeText'=>\MM\Kits::typeText(IndexController::input('type',1))
        ));
    }

    public function workslazy(){
        return View::show('index/works_lazy.html',array(
            'type'=>IndexController::input('type',1)
        ));
    }

    public function index(){
        return View::show('index.html',array());
    }

    public function admin(){
        return View::show('new_admin.html',array());
    }

    public function savework(){
        $filename = \MM\Kits::getMillisecond() . '.' . PostImage::getExt();
        PostImage::save(index_path . '/images/work/' . $filename);
        echo json_encode(array('status'=>true,'path'=>'/images/work/' . $filename,'type'=>IndexController::input('type',1)));
        exit;
    }


    public function modifywork(){
        $object = new WorkModel(IndexController::input('id'));
        $object->update(\MM\MArray::arrayOnly($_REQUEST,['title','abstract','describe','face_img','type','imgs','is_home','width_type','texts','width_types','banner_img']));
        echo json_encode(['status'=>true,'data'=>$object->id]);
        exit;
    }

    /**
     * 将一个work存储起来
     */
    public function storagework(){
        $object = new WorkModel();
        $insertId = $object->insert(\MM\MArray::arrayOnly($_REQUEST,['title','abstract','describe','face_img','type','imgs']));
        echo json_encode(['status'=>true,'data'=>$insertId]);
        exit;
    }

    /**
     * 工作分类列表
     */
    public function worklist(){
        $type = IndexController::input('type');


        /**
         * 首页推荐
         */
        if( $type == 1)
        {
            $list = DB::select('select * from work where is_home = 1 order by power asc,id desc');
            foreach ( $list as $key=>$item )
            {
                $list[$key]->face_img = env('IMG_HOST') . $item->face_img;
            }
            echo json_encode(array('status'=>true,'data'=>$list));
            exit;
        }


        if($type){
            $list = DB::select('select * from work where type = ' . intval($type) . ' order by power asc,id desc');
        }else{
            $list = DB::select('select * from work order by power asc,id desc');
        }




        //处理face_img
        foreach ( $list as $key=>$item )
        {
            $list[$key]->face_img = env('IMG_HOST') . $item->face_img;
        }


        echo json_encode(array('status'=>true,'data'=>$list));
        exit;
//        $type = IndexController::input('type');
//        $workModel = new WorkModel();
//        if($type){
//            $workModel->where(array('type'=>$type));
//        }
//        $res = $workModel->get();
//        echo json_encode(array('status'=>true,'data'=>$res));
//        exit;
    }



    public function workdelete(){
        $id = IndexController::input('id');
        $workModel = new WorkModel();
        $workModel->where(array('id'=>$id));
        $workModel->delete();
        $workModel->save();
        echo json_encode(array('status'=>true));
        exit;
    }

    /**
     * 关于我恩
     */
    public function about(){
        return View::show('index/who.html',array());
    }

    public function contact(){
        return View::show('index/contact_new.html',array());
    }


    public function sendmail(){
//        $to      = "35715872@qq.com";
//        $from    = "35715872@qq.com";
//        $subject = "来自tianmingming.com的留言";
//        $body    = "这是测试邮件";
        $content = sprintf("<p>称呼:%s</p><p>邮箱:%s</p><p>留言:%s</p>",IndexController::input('name'),IndexController::input('email'),IndexController::input('content'));

        $mail    = new \MM\Mail();
        $mail->send($content);
        echo json_encode(['status'=>true,'data'=>'您的留言已送达，明明会及时给你回复！']);
        exit;
    }


    static public function input($index,$default=''){
        if(isset($_REQUEST[$index]) && ($_REQUEST[$index] !== '')){
            return $_REQUEST[$index];
        }else{
            return $default;
        }
    }

    public static function vedioPreview()
    {
        $vedioPath = IndexController::input('vedio_path');

        $res = DB::select(sprintf("select * from %s where %s = %s","vedio_img","vedio_path",$vedioPath));
        if( $res ) {
            echo $res[0]->img_path;
            exit;
        }


        $array = explode('.',$vedioPath);
        $imgPath = str_replace(end($array),'jpg',$vedioPath);

        $execStr = "ffmpeg -ss 00:00:10  -i ".index_path."{$vedioPath} ".index_path."{$imgPath}  -r 1 -vframes 1 -an -f mjpeg";
//        echo $execStr;
//        exit;
        $res = exec($execStr);
//        var_dump($res);
//        $object->update(\MM\MArray::arrayOnly($_REQUEST,['title','abstract','describe','face_img','type','imgs']));
        $vedioImg = new VedioImg();
        $vedioImg->insert(['vedio_path'=>$vedioPath,'img_path'=>$imgPath]);
        echo json_encode(['status'=>true,'data'=>$imgPath]);
        exit;
    }

}