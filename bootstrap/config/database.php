<?php	
	$page_id=$_GET["page_id"];
	
	function get_page($dbf,$page_id){
		$query="select * from pages where page_id=$page_id";
		$result = mysqli_query ($dbf,$query);
		$pages = mysqli_fetch_assoc($result);
			if ($page_id == $pages['page_id']) {
				return $pages;
			}
			else {
				return $pages=;
			}
		
	}

?>