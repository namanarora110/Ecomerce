

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.size
{
  width: 400px;
  height: 550px
}
.a
{
  margin: 25px 10px 15px 35px;
  font-size: 24px;
  background-color: #FC3385;
  box-shadow: 2px 1px 2px blue;
  color:white;
  box-sizing: 
}
.b
{ margin: 25px 10px 15px 35px;
  
  font-size: 24px;
  background-color: #FFF5FB;
  box-shadow: 2px 1px 2px grey;
  color:black;
  box-sizing: 
}
.size
{
  width: 130px;
  height: 130px
}
</style>
</head>
<body>
<?php 
if (isset($_COOKIE['u_username']))
  {
    $auser=$_COOKIE['a'];
  
include 'nav_all.php';
//include 'corousel.php';
// echo "<br><a href=clearcart.php>Clear cart</a>";
// echo "<br><a href=clear_wishlist.php>Clear wishlist</a>";
include 'connection.php';      { 
 
  $p_cat_id=$_GET['p_cat_id'];
        $query="select * from product where p_cat_id=$p_cat_id ";
        $result=$conn->query($query);
       // $p_cat_id=$row['p_cat_id'];
                  $query1="select * from p_category where p_cat_id='$p_cat_id'";
                  $result1=$conn->query($query1);
                  $row1=$result1->fetch_assoc();
                  $p_cat_name=$row1['p_cat_name'];
          
        echo ' <ul class="breadcrumb"> 
    <li><a href="index.php">Home</a></li> 
    <li><a href="">category</a></li> 
    <li class="active">'.$p_cat_name.'</li> 
             
  </ul> ';
        echo "<div class=container>";
        // $s_id=$_GET['s_id'];
        // $query2="select * from sub_category where p_cat_id='$p_cat_id'";
        // $result2=$conn->query($query2);
        
        $query2="select * from sub_category where p_cat_id='$p_cat_id'";
        $result2=$conn->query($query2);
         
        while ( $row2=$result2->fetch_assoc()) 
        {
       $s_cat_name=$row2['s_cat_name'];
         $s_cat_id=$row2['s_id'];
       
        // echo $s_cat_name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
         

        
         
         echo "<a href='s_id_category.php?s_id=".$row2['s_id']."&p_cat_id=".$row1['p_cat_id']."'><img class='size' src='images/".$row2['s_images']."' /></a>";
               echo $s_cat_id.'&nbsp;&nbsp;';

        echo $s_cat_name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
        echo "<br><br><br><br>";
       

        // while($row=$result->fetch_assoc())
        // { 
        //           $p_cat_id=$row['p_cat_id'];
        //           $query1="select * from p_category where p_cat_id='$p_cat_id'";
        //           $result1=$conn->query($query1);
        //           $row1=$result1->fetch_assoc();
        //           $p_cat_name=$row1['p_cat_name'];
          
        //   echo "<div class= col-sm-3><a href='product_detail.php?p_id=".$row['p_id']."'><img class='size' src='images/".$row['p_image']."' /><br><br><br>";
        //   // echo '<br>'.'name:'.$row['p_name'];
          // echo '<br>'.'category name:'.$row1['p_cat_name'];
          // echo '<br>'.'price:'.$row['p_price'];
          // echo '<br>'.'id:'.$row['p_id'];
          //  echo "<br><a href='cart.php?p_id=".'cart_'.$row['p_id']."'>Add To Cart</a> ";
          //  echo "<br><a href='wishlist.php?p_id=".'wishlist_'.$row['p_id']."'>Add To Wishlist</a><br> ";

       // echo "<br><br><br></a></div>";
       //}     
     }

}

else{ 
include 'nav_logout.php';
//include 'corousel.php';
echo "<br><a href=clearcart.php>Clear cart</a>";
echo "<br><a href=clear_wishlist.php>Clear wishlist</a>";
include 'connection.php';      { 
 
  $p_cat_id=$_GET['p_cat_id'];
        $query="select * from product where p_cat_id=$p_cat_id ";
        $result=$conn->query($query);
       // $p_cat_id=$row['p_cat_id'];
                  $query1="select * from p_category where p_cat_id='$p_cat_id'";
                  $result1=$conn->query($query1);
                  $row1=$result1->fetch_assoc();
                  $p_cat_name=$row1['p_cat_name'];
          
        echo ' <ul class="breadcrumb"> 
    <li><a href="index.php">Home</a></li> 
    <li><a href="">category</a></li> 
    <li class="active">'.$p_cat_name.'</li> 
             
  </ul> ';
        echo "<div class=container>";

        while($row=$result->fetch_assoc())
        { 
          $p_cat_id=$row['p_cat_id'];
                  $query1="select * from p_category where p_cat_id='$p_cat_id'";
                  $result1=$conn->query($query1);
                  $row1=$result1->fetch_assoc();
                  $p_cat_name=$row1['p_cat_name'];
          
          echo "<div class= col-sm-3><a href='product_detail.php?p_id=".$row['p_id']."'><img class='size' src='images/".$row['p_image']."' /><br><br><br>";
          // echo '<br>'.'name:'.$row['p_name'];
          // echo '<br>'.'category name:'.$row1['p_cat_name'];
          // echo '<br>'.'price:'.$row['p_price'];
          // echo '<br>'.'id:'.$row['p_id'];
          //  echo "<br><a href='cart.php?p_id=".'cart_'.$row['p_id']."'>Add To Cart</a> ";
          //  echo "<br><a href='wishlist.php?p_id=".'wishlist_'.$row['p_id']."'>Add To Wishlist</a><br> ";

        echo "<br></div>";
       }     
     }

}
?>
 

  
<div class="modal fade" id="form" role="dialog"> 
    <div class="modal-dialog">     
      <!-- Modal content--> 
      <div class="modal-content"> 
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          <h4 class="modal-title">Fill the form</h4> 
        </div> 
        <div class="modal-body"> 
  
  <h1 align="center">User Login</h1>
  <div id="container" >
   <?php if (isset($_POST['submit']) )
{
  $u_username=$_POST['u_username'];
  $u_password=$_POST['u_password'];
  $conn=new mysqli("localhost","root","","ecom");
  if ($conn->connect_error) 
  {
   die("connection error");
  } 
  else
      {
        $query="select * from users where u_username like '$u_username' and u_password like '$u_password'";
        $result=$conn->query($query);
        if ($result->num_rows>0 ) 
        {
    
          while ($row=$result->fetch_assoc()) {
          $a=$row['u_name'];
          $_SESSION['a']=$a;
          $_SESSION['u_username']=$u_username;
          header("location:../index.php");
        }
        }
          else
          {
            $error="Wrong Password";
          }
      }
} ?>
    <form method="post" action="users/ui_login.php">
       <div class="input-group"> 
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
      User Username <br><input type="text" class="form-control" name="u_username">
       </div> 
        <div class="input-group"> 
       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
      Password  <br> <input type="password" class="form-control" name="u_password">
      </div>
        
        <span>
          <?php if (isset($error)) 
            {
              echo "Wrong Password/Username";
            }
          ?>
        </span>
        <div class="input-group"> 
      
      <input type="submit" name="submit"  class="form-control" value="Login">
      
      
        <a href="../users/new_user.php">/Create Account</a>
      </div>

       </div> 
        <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
        </div> 
      </div>       
    </div> 
  </div>   
</div>

</body>
</html>
