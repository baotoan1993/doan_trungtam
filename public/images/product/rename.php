<?php
  
  $dir = opendir("./");
  while (false !== ($fname = readdir( $dir ))) 
  {  	
    $info = pathinfo($fname);	
	if($info['extension'] == 'JPG') 
	{
		$oldname = $info['basename'];
		$newname = $info['filename'].".jpg";
		rename($oldname, $newname);
	}
  }
  closedir( $dir );
  echo 'Finish!<br />';
  
?>