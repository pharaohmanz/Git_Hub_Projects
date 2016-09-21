<!DOCTYPE html>

<html leng="en">



<head>



<title>simplePoll</title>



<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>



<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>



<body>



<div class="container">



<!-- NAVBAR CODE -->

	<nav class="navbar navbar">

	  <div class="container-fluid">

		<div class="navbar-header">

		  <a class="navbar-brand" href="#">simplePoll</a>

		</div>

		<ul class="nav navbar-nav">

		  <li class="active"><a href="index.php">Home</a></li>

		  <li><a href="localPoll.php">Local Poll</a></li> 

		</ul>

		<ul class="nav navbar-nav navbar-right">

                <?php 
                require_once("./include/membersite_config.php");
                if($fgmembersite->CheckLogin()) {
                        if($fgmembersite->isUserAdmin() == 1)
                        {
                                echo "<li><a href='adminDash.php'><span class='glyphicon glyphicon-user'></span>Dashboard</a></li>";
                        }
                        else
                        {
                                echo "<li><a href='dash.php'><span class='glyphicon glyphicon-user'></span>Dashboard</a></li>";
                        }
                        echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Logout</a></li>";
                } else {
                        echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span>Sign Up</a></li>";
                        echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Login</a></li>";
                }
                 ?>


		</ul>

	  </div>

	</nav>

<!-- END NAVBAR CODE -->



<!-- HEADER CODE -->

	<div class="page-header">

		<div class="row">

			<div class="col-md-4"></div>

			<div class="col-md-4">

				<a href="index.php"><img class="img-responsive" src=".\media\simpleLogo.png"></a>

				</div>

			<div class="col-md-4"></div>

		</div>

	</div>

<!-- END HEADER CODE-->

	

<!-- POLL FILTER SECTION -->



<!-- HOW IT WORKS: -->

<!-- WHENEVER ANY FILTER IS APPLIED, IMMEDIATELY REFRESH AND DISPLAY RESULTS -->

<!-- DISPLAY ERROR MESSAGE IF ANY ERROR COMES FROM THE SERVER-->

<!-- BOOTSTRAP ERROR MESSAGE CODE SOURCE: http://www.w3schools.com/bootstrap/bootstrap_alerts.asp -->



<nav class="navbar navbar">



		<div class="navbar-header">

			<a class="navbar-brand" href="#"><strong>Filter</strong></a>

		</div>

		<ul class="nav navbar-nav">

			<li class="dropdown">

				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Party

				<span class="caret"></span></a>

				<ul class="dropdown-menu">

					<li><a href="#">Democratic National Committee</a></li>

					<li><a href="#">Republican National Committee</a></li>

				</ul>

			</li>

			<li class="dropdown">

				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Region

				<span class="caret"></span></a>

				<ul class="dropdown-menu">

					<li><a href="#">North East</a></li>

					<li><a href="#">South East</a></li>

					<li><a href="#">Midwest</a></li> 

					<li><a href="#">West Coast</a></li>

				</ul>

			</li>

			<li>

				<form class="form-inline">

					<div class="form-group">

						<div class="navbar-header">

							<a class="navbar-brand" href="#"><strong>State</strong></a>

						</div>

						<select class="form-control" id="state">

							<option>Alabama</option>

							<option>Alaska</option>

							<option>Arizona</option>

							<option>Arkansas</option>

							<option>California</option>

							<option>Colorado</option>

							<option>Connecticut</option>

							<option>Delaware</option>

							<option>Florida</option>

							<option>Georgia</option>

							<option>Hawaii</option>

							<option>Idaho</option>

							<option>Illinois</option>

							<option>Indiana</option>

							<option>Iowa</option>

							<option>Kansas</option>

							<option>Kentucky</option>

							<option>Louisiana</option>

							<option>Maine</option>

							<option>Maryland</option>

							<option>Massachusetts</option>

							<option>Michigan</option>

							<option>Minnesota</option>

							<option>Mississippi</option>

							<option>Missouri</option>

							<option>Montana</option>

							<option>Nebraska</option>

							<option>Nevada</option>

							<option>New Hampshire</option>

							<option>New Jersey</option>

							<option>New Mexico</option>

							<option>New York</option>

							<option>North Carolina</option>

							<option>North Dakota</option>

							<option>Ohio</option>

							<option>Oklahoma</option>

							<option>Oregon</option>

							<option>Pennsylvania</option>

							<option>Rhode Island</option>

							<option>South Carolina</option>

							<option>South Dekota</option>

							<option>Tennessee</option>

							<option>Texas</option>

							<option>Utah</option>

							<option>Vermont</option>

							<option>Virginia</option>

							<option>Washington</option>

							<option>West Virginia</option>

							<option>Wisconsin</option>

							<option>Wyoming</option>

						</select>

					</div>

				</form>

			</li>

		</ul>

		

	

</nav>



<!-- END POLL FILTER SECTION -->		

	

<!-- POLL DISPLAY SECTION -->



<div class="row">

	<div class="col-md-12"><h2>Current Local Poll Results:</h2></div>

</div>



<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-5">

<div id="qp_all660255" style="width:100%;"><link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><STYLE>#qp_main660255 .qp_btna:hover input {background:#00355F!important} #qp_all660255 {max-width:792px; margin:0 auto;}</STYLE><div id="qp_main660255" fp='7f574fE0-27' results=0 style="border-radius:0px;margin:0 auto;padding:0.8em;background-color:#FFF;font-family: 'Open Sans', sans-serif, Arial;color:#000;border: 1px solid #DBD9D9;max-width:792px"><div style="font-size:1.2em;background-color:#00355F;color:#FFF;font-family:'Open Sans', sans-serif, Arial"><div style="padding:0.8em;line-height:1.3em">Who are you going to vote for?</div></div><form id="qp_form660255" action="//www.poll-maker.com/results660255x7f574fE0-27" method="post" target="_blank" style="display:inline;margin:0px;padding:0px"><div style="padding:0px"><input type=hidden name="qp_d660255" value="42480.4012615721-42480.401249548"><div style="display:block;color:#6B6B6B;font-family: 'Open Sans', sans-serif, Arial;font-size:1.1em;line-height:1.5;padding:13px 8px 11px;margin:10px 0px;clear:both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display:block;padding-left:30px;cursor:inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px" name="qp_v660255" type="radio" value="1" />Donald Trump</span></div><div style="display:block;color:#6B6B6B;font-family: 'Open Sans', sans-serif, Arial;font-size:1.1em;line-height:1.5;padding:13px 8px 11px;margin:10px 0px;clear:both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display:block;padding-left:30px;cursor:inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px" name="qp_v660255" type="radio" value="2" />Hillary Clinton</span></div><div style="display:block;color:#6B6B6B;font-family: 'Open Sans', sans-serif, Arial;font-size:1.1em;line-height:1.5;padding:13px 8px 11px;margin:10px 0px;clear:both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display:block;padding-left:30px;cursor:inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px" name="qp_v660255" type="radio" value="3" />Ted Cruz</span></div><div style="display:block;color:#6B6B6B;font-family: 'Open Sans', sans-serif, Arial;font-size:1.1em;line-height:1.5;padding:13px 8px 11px;margin:10px 0px;clear:both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display:block;padding-left:30px;cursor:inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px" name="qp_v660255" type="radio" value="4" />Bernie Sander</span></div></div><div style="padding-left:0px;min-height:40px;clear:both"><a style="float:left;width:50%;max-width:140px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;padding-right:5px;text-decoration:none" class="qp_btna" href="#"><input name="qp_b660255" style="width:100%;height:40px;background-color:#0B79D3;font-family: 'Open Sans', sans-serif, Arial;font-size:16px;color:#FFF;cursor:pointer;cursor:hand;border:0px;-webkit-appearance:none;border-radius:0px" type="submit" btype="v" value="Vote" /></a><a style="float:left;width:50%;max-width:140px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;padding-left:5px;text-decoration:none" class="qp_btna" href="#"><input name="qp_b660255" style="width:100%;height:40px;background-color:#0B79D3;font-family: 'Open Sans', sans-serif, Arial;font-size:16px;color:#FFF;cursor:pointer;cursor:hand;border:0px;-webkit-appearance:none;border-radius:0px" type="submit" btype="r" value="Results" /></a></div><a id="qp_a660255" style="float:right;font-family:Arial;font-size:10px;color:rgb(0,0,0);text-decoration:none" href="http://www.poll-maker.com/QuizMaker">made here</a></form><div style="display:none"><div id="qp_rp660255" style="font-size:14px;width:5ex;text-align:right;overflow:hidden;position:absolute;right:5px;height:1.5em;line-height:1.5em"></div><div id="qp_rv660255" style="font-size:14px;line-height:1.5em;width:0%;text-align:right;color:#FFF;box-sizing:border-box;padding-right:3px"></div><div id="qp_rb660255" style="font-size:14px;line-height:1.5em;color:#FFFFFF;display:block;padding-right:10px 5px"></div><div id="qp_rva660255" style="background:#006FB9;border-color:#006FB9"></div><div id="qp_rvb660255" style="background:#163463;border-color:#163463"></div><div id="qp_rvc660255" style="background:#5BCFFC;border-color:#1481AB"></div></div></div></div><script src="//scripts.poll-maker.com/3012/scpolls.js" language="javascript"></script>



	</div>

	<div class="col-md-4"></div>

</div>



<!-- END POLL DISPLAY SECTION -->	

	

</div>

</body>



</html>


