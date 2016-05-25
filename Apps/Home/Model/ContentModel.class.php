<?php
namespace Home\Model;
use Think\Model;

class ContentModel extends Model {


	/**
	 * 根据栏目ID，获取指定数量的新闻列表
	 *
	 * @param $id
	 * @param $amount  记录条数
	 * @return $newsList
	 */
	public function getContent($id,$amount) {
		if($id == null)
			$newsList = $this->where("status = 1")->order('addtime desc,sort')->limit($amount)->select();
		else
			$newsList = $this->where("status = 1 and classid = $id")->order('addtime desc,sort')->limit($amount)->select();
		for($i = 0;$i<count($newsList);$i++){
			$Contentdata = D("ContentData");
			$newsid = $newsList[$i]['id'];
			$newsList[$i]['content'] = $Contentdata->where("id = $newsid")->getField("Content");
			//判断当前文章是否为关联文章
			$newsid = $newsList[$i]['id'];
			$sort = $newsList[$i]['sort'];
			if(isset($newsList [$i] ['relateid'])){
				$relateid = $newsList [$i] ['relateid'];
				$newsList[$i] = $this->find($relateid);
				$newsList[$i]['id'] = $newsid;
				$newsList[$i]['sort'] = $sort;
			}
			$newsList[$i]['addtime'] = date("Y-m-d",$newsList[$i]['addtime']);
			$newsList [$i] ['url'] = $this->getUrl ( $newsList [$i] ['id'], $id );
		}
		return $newsList;
	}
	
	/**
	 * 获取内容链接
	 *
	 * @param unknown $content_id
	 * @param unknown $template_id
	 * @return string
	 */
	public function getUrl($content_id, $class_id) {
		
		$Class = D ("Class");
		$class = $Class->find ( $class_id );
		$template_id = $class ['content_template'];
		$Template = D ("Template");
		$template = $Template->where ( "id = $template_id" )->find ();
		$url = __ROOT__ . "/" . $template ['url'] . "/" . $content_id;
		$url = str_replace ( "//", "/", $url );
		return $url;
	}


	//获取指定数量的有缩略图的新闻
	public function getImgNews($amount){
		$condition['thumb'] = array('neq','');
		$condition['status'] = 1;
		$imgNews = $this->where($condition)->order('addtime desc')->limit($amount)->select();
		return $imgNews;
	}
     /**
     * 通过classID查找文章
     */
    public function getContentByClassID($classID){
       
        $res = $this->where(['classid'=>$classID])
                    ->join('__CONTENT_DATA__ as cdata on __CONTENT__.id = cdata.id')
                    ->order('uptime desc')
                    ->select();
        /*echo $this->getLastSql();
        die;*/
        if(isset($res))
            return Ftime($res,'uptime');
        else
            return false;
    }
    /**
     * 通过id查找文章及信息
     */
     public function getContentByID($id){
       
        $res = $this->where("cdata.id = $id")
                    ->join(' __CONTENT_DATA__ as cdata on cdata.id = __CONTENT__.id')
                    ->order('uptime desc')
                    ->find();//查询的结果为一维数组
        if(isset($res))
            return Ftime($res,'uptime');
        else
            return false;
    }
}