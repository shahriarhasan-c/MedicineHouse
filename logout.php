<?php


session_start();
if( 
           isset($_SESSION['csrf_token'])
           && !empty($_SESSION['csrf_token'])
   
){
	unset($_SESSION['csrf_token']);
	session_destroy();
	
	 header("Location: index.html");
	
}
else{
	
	 header("Location:index.html");
	}
?>