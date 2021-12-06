<?php
    $db=new mysqli("localhost");
    $db=new mysqli("root");
    $db=new mysqli("school");
    if(!$db)
    {
    	echo "failed"

    }
    else
    {
    	echo "connected"
    }

?>   	