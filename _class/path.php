<?php 
	
   class path {


   	public static function path_include($files,$lang='fr'){

         global $user;
   		include("_includes/$lang/$files.php");
   	}

	public static function add_base(){

		echo '<base href="'.URL.'">';
	}

	
	public static function assets($link){

		return URL.$link;
	}


   	public static function path_view($page,$lang='fr'){

         global $user;
   		include("_views/$lang/$page.view.php");
   	}


   	public static function path_url($page,$lang='fr'){

   		return "_views/$lang/$page.view.php";
   	}

  }
        