
<!DOCTYPE html>
<html>
<head>
	<title>clear the cookie</title>
</head>
<body>
<?php 
 setcookie('wishlist',"",time()-1000);
 
		foreach ($_COOKIE as $key => $value) 
		{	
			$arr=explode("_",$key);			
			if($arr[0]=="wishlist"&&!empty($arr[1]))
			{	setcookie($key,0,time()-24*60*60);	
			}				
		}
		if(isset($_COOKIE['wishlist']))
		{	setcookie("wishlist",0,time()+24*60*60);
		}
		else
		{	setcookie("wishlist",0,time()+24*60*60);
		}
	
	#Redirect to a page
	header("location:index.php");
 ?>
</body>
</html>