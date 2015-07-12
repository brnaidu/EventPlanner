<?php
ob_start();
include "secure.php";
//include "config.php";
extract($_POST);
extract($_GET);
error_reporting(0);
?>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			list($part1, $part2) = explode('.', $_POST["menu"]);
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('menu'=>$part1,'name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$part2));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
		header("Location: index.php?id=1");
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
				header("Location: index.php?id=1");
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
				header("Location: index.php?id=1");
	break;	
}
}
?>


<html>
<head>
<style >
.txt-heading{padding: 5px 10px;font-size:1.1em;font-weight:bold;color:#999;}
.btnRemoveAction{color:#D60202;border:0;padding:2px 10px;font-size:0.9em;}
#btnEmpty{background-color:#D60202;border:0;padding:1px 10px;color:#FFF; font-size:0.8em;font-weight:normal;float:right;text-decoration:none;}
.btnAddAction{background-color:#79b946;border:0;padding:3px 10px;color:#FFF;margin-left:1px;}
#shopping-cart {border-top: #79b946 2px solid;margin-bottom:30px;}
#shopping-cart .txt-heading{background-color: #D3F5B8;}
#shopping-cart table{width:100%;background-color:#F0F0F0;}
#shopping-cart table td{background-color:#FFFFFF;}
.cart-item {border-bottom: #79b946 1px dotted;padding: 10px;}
#product-grid {border-top: #F08426 2px solid;margin-bottom:30px;}
#product-grid .txt-heading{background-color: #FFD0A6;}
.product-item {	float:left;	background:#F0F0F0;	margin:15px;	padding:5px;}
.product-item div{text-align:center;	margin:10px;}
.product-price {color:#F08426;}
.product-image {height:100px;background-color:#FFF;}
</style>
</head>
<body>

    <div class="row" style="padding-left:50px; padding-top:5px">

  <div class="col-sm-3 col-md-3">
 <table><tr>
   <?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
 <td>
<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
    <div class="thumbnail">
      <img src="<?php echo $product_array[$key]["image"]; ?>" alt=""/>
      <div class="caption">
        <p align="center" style="color:#F00; font-size:15px"><div><strong><?php echo $product_array[$key]["name"]; ?></strong></div></p>
 <center>       
<select id="cmbPlans" name="menu"  >
     <option value="0"><strong>Select Plans</option></strong></option>
     <option value="Basic.180"><strong>Basic   Rs 180/-</strong></option>
     <option value="Premium.250"><strong>Premium Rs 250/-</strong></option>
</select><br/><br/>
                
<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
</form>
</center>
      </div>
    </div>
    </td>
    <?php
			}
	}
	?></tr></table>
  </div>
               
			
                
</div>

    <div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="5" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Supplier</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["menu"]; ?></strong></td>
                <td><?php echo $item["name"]; ?></td>
                <td><?php echo $item["quantity"]; ?></td>
				<td ><?php echo "Rs. ".$item["price"]; ?></td>
				<td><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "Rs. ".$item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div>


</body>
</html>  
<!--
  
  
  
  
  
  
           
           <div  class="section-content section-alter">

        <div class="container">
            <div class="row">

               <div class="row">
               <?php
				/*switch($id1)
				{
					case 2:
       						 $Suplier_query = mysqli_query($connect,"SELECT * FROM `catering`");
							 while($Suplier_query_row = mysqli_fetch_assoc($Suplier_query))
							{
								?>
 	<div class="col-md-3 col-sm-3">
						<div class="feature animated" data-animtype="fadeIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s">
							<div class="feature-image img-overlay">
								<a href="details.php?id=<?php echo $Suplier_query_row['cateringid']; ?>"><img src="images\images\c1.jpg" alt=""/></a>
								<!-- <div class="item-img-overlay">
									<div class="item_img_overlay_content">
										<a href="media/blog1.jpg" data-rel="prettyPhoto[portfolio]" title="Title goes here">
											<i class="icon-search"></i>
										</a>
										<a href="#">
											<i class="icon-link"></i>
										</a> 
									</div>
								</div> 
							</div>
            
							<div class="feature-content">
								<h3 align="center" class="h3-blog-title">
									<a href="details.php?id=<?php echo $Suplier_query_row['cateringid']; ?>"><?php echo $Suplier_query_row['cateringname']; ?></a>
								</h3>
								 
									
								
							</div>
							<div class="feature-details">
								<span><i class="icon-user"></i>Learners : 189</span>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span><i class="icon-user"></i>Instructor : 10</span>
								
							</div>
							<div align="center" class="feature-details">
								<i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i>
							</div>
             
							<div class="feature-details">
								<span style="font-size:9px"><i class="icon-inr"></i><strong style="font-size:16px">1.50</strong> for INDIA / </span>
            
								<span style="font-size:9px"><i class="icon-usd"></i><strong style="font-size:16px">1</strong> for Rest of INDIA Per Day</span>

							</div> 
						</div>
					</div>
					
					<?php
				}
				
				
				?>
        
								
		<?php						
								
       						 break;
   				 	case 3:
       						 $Suplier_query = mysqli_query($connect,"SELECT * FROM `pandit` where `eid`='$id'");
      					  	 break;
    				case 4:
        					 $Suplier_query = mysqli_query($connect,"SELECT * FROM `lighting` where `eid`='$id'");
       					     break;
    				default:
       					    echo "Your favorite color is neither red, blue, nor green!";

				}*/
?>
-->