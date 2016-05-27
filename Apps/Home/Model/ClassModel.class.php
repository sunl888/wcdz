<?php
namespace Home\Model;
use Think\Model;
/**
 * 栏目模型
 * @author zhangxing
 *
 */
class ClassModel extends Model {
	/**
	 * 获取导航栏
	 *
	 * @return multitype:
	 */
	public function getNav() {
		$navList = array ();
		$where = "isshow = 1 and isnav = 1 and parentid = 0";
		$classList = $this->where ( $where )->order ( 'sort' )->select ();

		for($i = 0; $i < count ( $classList ); $i ++) {
			$navList [$i] ['nav_name'] = $classList [$i] ['classname'];
			$navList [$i] ['url'] = $this->getUrl ( $classList [$i] ['id'], $classList [$i] ['url'], $classList [$i] ['index_template'] );
			// 获取下级栏目

			$navList [$i] ['sub_nav'] = array ();
			$where = "isshow = 1 and isnav = 0 and parentid = " . $classList [$i] ['id'];
			
			$subClassList = $this->where ( $where )->order ( 'sort' )->select ();
			//p($this->getLastSql());
			for($j = 0; $j < count ( $subClassList ); $j ++) {
				$navList [$i] ['sub_nav'] [$j] ['nav_name'] = $subClassList [$j] ['classname'];
				$navList [$i] ['sub_nav'] [$j] ['url'] = $this->getUrl ( $subClassList [$j] ['id'], $subClassList [$j] ['url'], $subClassList [$j] ['index_template'] );
			}
		}
		return $navList;
	}
	/**
	 * 获取栏目链接
	 *
	 * @param unknown $class_id        	
	 * @param unknown $url        	
	 * @param unknown $template_id        	
	 * @return string
	 */
	public function getUrl($class_id, $url, $template_id) {
		$url = trim ( $url );
		if ($url != "")
			return $url;
		$Template = D ("Template");
		$template = $Template->where ( "id = $template_id" )->find ();
		return __ROOT__ . "/" . $template ['url'] . "/" . $class_id;
	}
	
	/**
	 * 获取栏目信息
	 *
	 * @param unknown $class_id        	
	 * @return multitype:
	 */
	public function getClassInfo($class_id) {
		$class = array ();
		if(!is_numeric($class_id)) return $class;
		$where = "class_id = $class_id";
		$class = $this->where ( $where )->find ();
		$class ['url'] = $this->getUrl ( $class_id, $class ['url'], $class ['index_template'] );
		return $class;
	}

	/**
	*	获得左边标题
	**/
	public function getLeftName($classid){
		$classList =$this ->where("id = $classid")->find();
	    if($classList['child'] == 1  && $classList['parentid'] == 0){//存在子栏目
	        $navigation = $this ->where("id = $classid")->getField("classname");
	    }else if($classList['parentid'] !=0){//不存在子栏目
	         $pidResult = $this->find($classid);
	         $pid = $pidResult['parentid'];
	         $contentList = $this ->where("parentid = $pid")->select();
	         //标题
	          $navigation = $this ->where("id = $pid") ->getField("classname");
	        }else{
	             //标题
	              $navigation = $this ->where("id = $classid") ->getField("classname");
	        }

        return $navigation;
	} 
	/**
	*	获得class。如果是一级栏目则默认为第一个二级栏目
	**/
	public function getClass($classid){
		$classList =$this ->where("id = $classid")->find();
	    if($classList['child'] == 1  && $classList['parentid'] == 0){//存在子栏目且是一级栏目
	        $contentList = $this ->where("parentid = $classid")->select();
	        $class = $contentList[0]['id'];//如果是一级导航，列表页默认为第一个二级导航的列表页
	    }else if($classList['parentid'] !=0){//不存在子栏目且不是一级栏目
	         
	          $class = $classid;

	         //p($navigation);die;
	         //$this ->assign("navigation",$navigation);
	        }else{ //一级栏目且没有子栏目
	              $class = $classid;

	        }

	        return $class;
	}
	/**
	*	获得左边二级导航栏
	**/
		public function getLeftList($classid){
			$contentList =array();
			$classList =$this ->where("id = $classid")->find();
		    if($classList['child'] == 1  && $classList['parentid'] == 0){//存在子栏目
		        $contentList = $this ->where("parentid = $classid")->select();

		    }else if($classList['parentid'] !=0){//不存在子栏目
		         $pidResult = $this->find($classid);
		         $pid = $pidResult['parentid'];
		         $contentList = $this ->where("parentid = $pid")->select();
		        }else{
		        }

	        return $contentList;
	} 
	
}

?>