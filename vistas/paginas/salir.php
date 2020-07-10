<?php 	

session_destroy();
	 echo '<script>
		  if( window.history.replaceState){
		    window.history.replaceState(null,null,window.location.href);
		  }</script>';

echo '<script>window.location="index.php?pagina=inicio";</script>';


 ?>