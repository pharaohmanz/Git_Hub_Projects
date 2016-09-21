<?
	function get_product_name($pid){
		$result=mysql_query("select name from product where productID=$pid");
		$row=mysql_fetch_array($result);
		return $row['productName'];
	}
	function get_price($pid){
		$result=mysql_query("select price from product where productID=$pid");
		$row=mysql_fetch_array($result);
		return $row['productPrice'];
	}
	function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productID']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productID'];
			$q=$_SESSION['cart'][$i]['quantity'];
			$price=get_price($pid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	function addtocart($pid,$q){
		if($pid<1 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(product_exists($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productID']=$pid;
			$_SESSION['cart'][$max]['quantity']=$q;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productID']=$pid;
			$_SESSION['cart'][0]['quantity']=$q;
		}
	}
	function product_exists($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productID']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>