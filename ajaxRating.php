<?php
require_once 'Rating_config.php';

    if($_POST['act'] == 'rate'){
    	$therate = $_POST['rate'];
    	$thepost = $_POST['post_id'];

            $Total = 0;
            
            
    	while($data = mysql_fetch_assoc($query)){
    		$Total++;
    	}

    	if($Total <= 100 ){
    		mysql_query("INSERT INTO star (id_post, rate)VALUES('$thepost', '$therate')");
    	}else{
    		mysql_query("UPDATE star SET rate= '$therate' WHERE id_post = '$thepost'");
    	}
    } 
?>