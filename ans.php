<html>

    <header>
        
        <link  rel="stylesheet" href="./ans.css">
  
        <title>חדר בריחה</title>

    </header>
    <body >
	<img src='./images/a1.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
	<div name="loud" id="loud" class="loader"></div>
	<?php 
    if (array_key_exists("pass",$_POST))
		if(0 == strcmp($_POST["pass"] , "55tk"))
			echo("<script src=\".\\script.js\"></script><script>win()</script>");
        ?>
		<script>location.replace("./index.html");</script>
    </body>
</html>
