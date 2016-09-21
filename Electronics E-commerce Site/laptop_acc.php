<?php
 ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.js"></script> 
<link rel="stylesheet" type="text/css" href="style.css" >
<script src="menu.js" type="text/javascript"></script>

<title>easyBuy Laptop Accessories</title>

</head>
<body>

<?php
session_start();

$username="";
$username = $_SESSION['username'];

if(empty($username))
{
	$username ="USER";
}

?>

<form>
<div class="container">
    <div class="header">
 	<nav id='cssmenu'>
	<label class="msg-heading"><a href="Homepage.php" class="link-heading" title="Go To easyBuy Home page">easyBuy</a></label>
	<ul>
   		<li><a href='Homepage.php'><span>Home</span></a></li>
   		<li class='has-sub'><a href='#'><span>Products</span></a>
      			<ul>
         			<li class='has-sub'><a href='#'><span>Monitors</span></a>
            			<ul>
               			<li><a href='#'><span>Apple</span></a></li>
			    	<li><a href='#'><span>Lenovo</span></a></li>
				<li><a href='#'><span>HP</span></a></li>
               			<li class='last'><a href='#'><span>Dell</span></a></li>
            			</ul>
         			</li>
         			<li class='has-sub'><a href='#'><span>Laptops</span></a>
            			<ul>
               			<li><a href='#'><span>Apple</span></a></li>
			   	<li><a href='#'><span>Asus</span></a></li>
			    	<li><a href='#'><span>Lenovo</span></a></li>
				<li><a href='#'><span>HP</span></a></li>
				<li><a href='#'><span>DELL</span></a></li>
               			<li class='last'><a href='#'><span>Samsung</span></a></li>
            			</ul>
         			</li>
		  		<li class='has-sub'><a href='#'><span>Tablets</span></a>
            			<ul>
               			<li><a href='#'><span>Apple</span></a></li>
			   	<li><a href='#'><span>Asus</span></a></li>
			    	<li><a href='#'><span>Lenovo</span></a></li>
               			<li class='last'><a href='#'><span>Samsung</span></a></li>
            			</ul>
         			</li>
		  		<li class='has-sub'><a href='#'><span>Cell Phones</span></a>
            			<ul>
               			<li><a href='#'><span>Apple</span></a></li>
               			<li class='last'><a href='#'><span>Samsung</span></a></li>
            			</ul>
         			</li>
		  		<li class='has-sub'><a href='#'><span>Accessories</span></a>
            			<ul>
               				<li><a href='#'><span>Tablet</span></a></li>
			   		<li><a href='#'><span>Laptop</span></a></li>
               				<li class='last'><a href='#'><span>Cell Phone</span></a></li>
            			</ul>
         			</li>
      			</ul>
   		</li>
 
   		<li style="float:right;"><a href='#'><span><img src="images/shopping_cart.png" title="Cart" title="Cart">Cart</span></a></li>
   		<li class='has-sub' style="float:right;"><a href='#'><span><img src="images/icon-user.png">Hello <?php echo $username;?></span></a>
            		<ul>
               			<li><a href='login.php'><span>SignIn</span></a></li>
               			<li class='last'><a href='csuadd.php'><span>New User</span></a></li>
				<?php
					if( $username !== "USER")
					echo "<li><a href='signout.php'><span>SignOut</span></a></li>";
				?>
            		</ul>
         	</li>
	
	</ul>
	</nav>
	<center>
			<input style="float:center;" class="tb5" type="text" name="search" id="search" placeholder="Search" title="SEARCH">
			<INPUT TYPE = "Submit" Value = "Go"><br><br>
			</center>
				<script type="text/javascript">
				$(function(){					/*Append search icon*/
				$('#search').click(function(){
				$('#inputs').append('<input type="text" value="">');
				});
				});
				</script>
    </div>			
</div>
</form>

<br>
	<div>
	<center>
	<table>
		<tr>
		<td><font color="#008CBA"><h2>Laptop Accessories</font></h2></td>
		</tr>
		<table>
		<tr>
			<td>
			<b>Waterproof Fabric Laptop Bag</b><br>
			<img src="images/images8H5NCVHL.jpg" width="100" height="100">Price: $13.99<br>
			<input type="button" value="Add to Cart">
			</td>
		<td colspan="50"></td>
			<td>
			<b>Laptop shoulder Bag for 15.5 Inch Laptop</b><br>
			<img src="images/bag_2.jpg" width="100" height="100">Price: $15.00<br>
			<input type="button" value="Add to Cart">
			</td>
		</tr>
		</table>
		<hr style="background:#008CBA; border:0; height:1px; width: 900px" />
		<table>
		<tr>
			<td>
			<b>Laptop shoulder Bag for 15 Inch Laptop</b><br>
			<img src="images/bag_1.jpg" width="100" height="100">Price: $25.00<br>
			<input type="button" value="Add to Cart">
			</td>
		<td colspan="50"></td>
			<td>
			<b>Laptop shoulder Bag for 13 Inch Laptop</b><br>
			<img src="images/bag_3.jpg" width="100" height="100">Price: $13.99<br>
			<input type="button" value="Add to Cart">
			</td>
		</tr>
		</table>
		 <hr style="background:#008CBA; border:0; height:1px; width: 900px" />

		<table>
		<tr>
			<td>
			<b>Laptop Sleeve 13 Inch</b><br>
			<img src="images/sleeve_1.png" width="100" height="100">Price: $20.00<br>
			<input type="button" value="Add to Cart">
			</td>
		<td colspan="50"></td>
			<td>
			<b>Laptop Sleeve 13 Inch</b><br>
			<img src="images/sleeve_2.jpg" width="100" height="100">Price: $15.99<br>
			<input type="button" value="Add to Cart">
			</td>
		</tr>
		
		</table>
	</table>
	</center>
</div>

<br>
<footer class="footer_bg">
<div class="copy_span">
<center>
<table>
<tr>
	<th>Customer Service</th>
	<th  colspan="50"></th>
	<th>My Account</th>
	<th  colspan="50"></th>
	<th>Website Information</th>

</tr>
<tr>
	<td><a href="feedback.html" class="foot_link" target="_blank"> Customer FeedBack</a></td>
	<td colspan="50"></td>
	<td><a href="login.php" class="foot_link">Login/Register</a></td>
	<td colspan="50"></td>
	<td><a href="about.php" class="foot_link">About easyBuy</a></td>
</tr>

<tr>
	<td><a href="#" class="foot_link">Help</a></td>
	<td colspan="50"></td>
	<td><a href="#" class="foot_link">Account Settings</a></td>
</tr>

<tr>
	<td><a href="privacystmt.php" class="foot_link">Privacy & Policy</a></td>
	<td colspan="50"></td>
	<td><a href="notification.php" class="foot_link">easyBuy Notifications</a></td>

</tr>


</table>
</center>
<hr>
<center>copyright &copy 2016 easyBuy.com All Rights Reserved </center>
</div>
</footer>
</body>
</html>
