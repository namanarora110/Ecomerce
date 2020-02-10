
<?php
$cookiename=$_GET['cookiename'];
	$value=$_GET['value'];
	
	if ($_COOKIE[$cookiename]=1) 
	{$cart=$_COOKIE['wishlist'];
		 
		 setcookie('wishlist',$cart-$value,time()+24*60*60);
		setcookie($cookiename,$_COOKIE[$cookiename],time()-24*60*60);} 
if (isset($_GET['p_id']) )
{
  if(isset($_COOKIE['cart']))
  {
  	$cart=$_COOKIE['cart'];
  	setcookie('cart',$cart+1,time()+24*60*60);
  	
  }	
  else
  {
  	setcookie('cart',1,time()+24*60*60);
  }


if (!empty($_GET['p_id']))
	 {
		if (isset($_COOKIE[$_GET['p_id']])) 
		{
		  $v=$_COOKIE[$_GET['p_id']];
		  setcookie($_GET['p_id'],$v+1,time()+24*60*60);
	
			
		
		}
		else
		{
			setcookie($_GET['p_id'],1,time()+24*60*60);
		}
	 }
	 
}	 
header('location:open_cart.php');

 ?>