<?php

class View extends Rippy {
	
	private $result = Array(
	
	'VIEW_title' => '',
	'VIEW_meta' => '',
	'VIEW_js' => '',
	'VIEW_link' => ''
	);
	
	
	function __construct($conf=false,$time_out=false){
		
		$this->setConfig();

	}
	/**
	* load variables : 
		-> $VIEW_title ,
		-> $VIEW_meta ,
		-> $VIEW_js ,
		-> $VIEW_link ,
		-> $VIEW_nav_menu ,
		-> $VIEW_mobile_nav_menu ,
		-> $VIEW_site_contact ,
		-> $VIEW_site_slogan ,
	*/
	public function load($path,$data=false){
		$result = $this->result;
		$theme = $this->getConfig('theme');
		if($data && is_array($data)) extract($data);
		$c = CONTNAME;

		$pages = $this->getConfig('site_pages');

		//title
		@$this->title($pages[$c]['title']);

		//meta
		@$metas = isset($pages[$c]['meta']) ? $pages[$c]['meta'] : [];
		foreach ($metas as  $m) @$this->meta($m);
		
		//link
		@$links = isset($pages[$c]['link']) ?  $pages[$c]['link'] : [];
		foreach ($links as  $l) @$this->link($l);

		unset($metas,$links);
		//menu
		@$this->nav_menu($c);

		//
		$this->result['VIEW_site_contact'] = $this->getConfig('site_contact');

		$this->result['VIEW_site_slogan'] = $this->getConfig('site_slogan');

		$result = $this->result;
		if($result && is_array($result)) extract($result);
		;
		if(!@include("./view/$theme/$path.php")) parent::$Error->s('2',$path);
	}
	private function nav_menu($active=""){
		$nav_menu = $this->getConfig('site_nav_menu');
		$nav_class = $this->getConfig('nav_class');
		$nav_class2 = $this->getConfig('mobile_nav_class');
		$out = "<ul class='$nav_class'>";
		$out2 = "<ul class='$nav_class2'>";
		$aclass = $this->getConfig('active_nav_class');
		$dir = CURRENTDIR;
		foreach ($nav_menu as $key => $menu) {
			$a = ($active != ''  && $active==$menu['name'] ) ? $aclass  : '';
			$out .= "<li class='$a'><a id='{$menu['id']}' class='{$menu['class']}' href='$dir{$menu['name']}'>{$menu['title']}</a></li>";
			$out2 .= "<li class='$a'><a href='$dir{$menu['name']}'>{$menu['title']}</a></li>";

		}
		$out .= "</ul>";
		$out2 .= "</ul>";
		$this->result['VIEW_nav_menu'] = $out;
		$this->result['VIEW_mobile_nav_menu'] = $out2;
		return $out;
	}
	public function meta($meta){
		$out_="";
		foreach($meta as $mk=>$mv)
			$out_ .= " $mk ='$mv' ";	
		$out ="<meta $out_ />";
		$this->result["VIEW_meta"] .= $out;
		return $out;
	}
	public function title($title=false){
		$this->result['VIEW_title'] = '<title>'.$title.'</title>';
		return $title;
	}
	public function link($link){
		$out_="";
		foreach($link as $lk=>$lv)
			$out_ .= " $lk ='$lv' ";	
		$out ="<link $out_ />";
		$this->result["VIEW_link"] .= $out;
		return $out;
	}
	public function js($foo){
	
		$out='';
		if(is_array($foo))
			foreach($foo as $j)
				$out .="<script src='".SITEDIR."js/$j.js' type='text/javascript'></script>";
		else
				$out .="<script src='".SITEDIR."js/$foo.js' type='text/javascript'></script>";
				
		$this->result['VIEW_js'] .= $out;
		return $out;
	}
	public function getResult(){
	
		return $this->result;
	
	}
	public function getResultString(){
	
		return $this->result['VIEW_title'].$this->result['VIEW_meta'].$this->result['VIEW_js'].$this->result['VIEW_link'];
	}
}
?>