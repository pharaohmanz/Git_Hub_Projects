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

<title>easyBuy Home</title>

</head>
<body>
<script>
//Slider for main page
$(function() {
    //settings for slider
    var width = 1270;
    var animationSpeed = 500;
    var pause = 3000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);

    startSlider();


});

//Slider for Daily deals
$(function() {
    //settings for slider
    var widthmid = 250;
    var animationSpeedmid = 500;
    var pausemid = 3000;
    var currentSlidemid = 1;

    //cache DOM elements
    var $slidermid = $('#slidermid');
    var $slideContainermid = $('.slidesmid', $slidermid);
    var $slidesmid = $('.slidemid', $slidermid);

    var intervalmid;

    function startSlidermid() {
        intervalmid = setInterval(function() {
            $slideContainermid.animate({'margin-left': '-='+widthmid}, animationSpeedmid, function() {
                if (++currentSlidemid === $slidesmid.length) {
                    currentSlidemid = 1;
                    $slideContainermid.css('margin-left', 0);
                }
            });
        }, pausemid);
    }
    function pauseSlidermid() {
        clearInterval(intervalmid);
    }

    $slideContainermid
        .on('mouseenter', pauseSlidermid)
        .on('mouseleave', startSlidermid);

    startSlidermid();


});

</script>

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

    <div id="slider">
        <ul class="slides">
           <li class="slide slide1"><img class="imgWidth" src ="images/img1.jpg" title="Macbook Air" /></li>
            <li class="slide slide2"><img class="imgWidth" src ="images/img2.jpg" title="iPad Pro"></li>
            <li class="slide slide3"><img class="imgWidth" src ="images/img3.jpg" title="iPhone 6 and iPhone 6s" ></li>
            <li class="slide slide4"><img class="imgWidth" src ="images/img4.jpg" title="DELL Allienware" ></li>
            <li class="slide slide1"><img class="imgWidth" src ="images/img1.jpg" title="Macbook Air"></li>
        </ul>
    </div>
			
	<div>
		<center>
			<table>
				<tr><h2><font color="#008CBA">Daily Deals</font></h2></tr>
				<td class="example-div">
				 <div id="slidermid">
					<ul class="slidesmid">
						<li class="slidemid slidemid1"><img class="imgWidthmid" src ="images/Asus_1.png" title="Asus Laptop"></li>
						<li class="slidemid slidemid2"><img class="imgWidthmid" src ="images/windows.png" title="Nextbook Flexx 8.9 inch 2-in-1 Tablet"></li>
						<li class="slidemid slidemid3"><img class="imgWidthmid" src ="images/desktop.jpg" title="DELL Monitor"></li>
						<li class="slidemid slidemid4"><img class="imgWidthmid" src ="images/tablet.png" title="Apple iPad Pro 128GB in Silver"></li>
						<li class="slidemid slidemid1"><img class="imgWidthmid" src ="images/Asus_1.png" title="Asus Laptop"></li>
					</ul>
				</div>
				</td>
			</table>
		</center>
	</div>
	<br>
	<hr style="background:#008CBA; border:0; height:1px; width: 900px" />
			
	<div>
		<center>
		<table>
		<tr>
		<td><h2><font color="#008CBA">Electronics</font></h2></td>
		</tr>
		<tr>
		<td class="example-div">
			<div class="tooltip">
			<img src="images/HP.png" >
			<span class="tooltiptext">HP 15.6" Touch Screen Laptop Starting at $499.99  </span>
			</div>
			<br><br><br>
			<b>Laptops</b>
		</td>
			<td colspan="8"></td>
		<td class="example-div">
		<div class="tooltip">
		<img src="images/hpmonitor.png" >
		<span class="tooltiptext">HP 27xw White 27" 14ms HDMI Widescreen LED at $248.00 </span>
		</div>
		<br><br>
		<b>Desktops</b>
		</td>
			<td colspan="8"></td>
			<td class="example-div">
			<div class="tooltip">
			<img src="images/tablet.png">
			<span class="tooltiptext">Apple 12.9 inch iPad Pro-Space Gray-128GB at $1,099.99</span>
			</div>
			<br>
			<b>Tablets</b>
		</td>
			<td colspan="8"></td>
		<td class="example-div">
		<div class="tooltip">
		<img src="images/cellphone.png" >
		<span class="tooltiptext">iPhone 6s Plus - Rose Gold - 64GB at $869.99</span>
		</div>
		<br>
		<b>Cell Phones</b>
		</td>
		</tr>
		</table>
		<br>
	<hr style="background:#008CBA; border:0; height:1px; width: 900px" />
	<table>
	<tr>
	<td><font color="#008CBA"><h2>Accessories</font></h2></td>
	</tr>
		<tr>
			
			<td class="example-div">
				<div class="tooltip">
					<img src="images/tab_acc.png">
					<span class="tooltiptext">iPad Air 2 Case at $14.99</span>
				</div>
				<br><br><br>
				<b><a href="tablet.php" class="a_link">Tablets Accessories</a></b>
			</td>
			
			<td colspan="8"></td>
		<td class="example-div">
			<div class="tooltip">
			<img src="images/cell_acc.jpg">
			<span class="tooltiptext">Samsung Galaxy S6 at $12.99</span>
			</div>
			<br>
			<b><a href="cell_acc.php" class="a_link">Cell Phone Accessories</a></b>
		</td>
			<td colspan="8"></td>
		
			<td class="example-div">
			<div class="tooltip">
			<img src="images/images8H5NCVHL.jpg">
			<span class="tooltiptext">Waterproof Fabric Laptop Bag at $13.99</span>
			</div>
			<br>
			<b><a href="laptop_acc.php" class="a_link">Laptop Accessories</a></b>
		</td>
		</tr>
	
	</table>
	</center>
</div>

			
</div>
</form>
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

