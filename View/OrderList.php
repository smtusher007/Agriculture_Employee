<?php

	include('../Controller/Header.php');
	require_once('../Model/orderModel.php');
	$result = Orderlist();
	$count = mysqli_num_rows($result);
?>
<html>
<head>
	<title>Order List</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/" target="_blank">google |</a>
				<a href="https://www.facebook.com/sm.tusher.avoid/" target="_blank">facebook |</a>
				<a href="https://twitter.com/?lang=en" target="_blank">twitter |</a>
				<a href="https://www.yahoo.com/" target="_blank">yahoo |</a>
				<a href="https://www.linkedin.com/in/s-m-tusher-mustakim-20522718b/" target="_blank">linkdin</a>

			</td>
			<td width="80%" colspan="2">
				<h1 align="center"><font face="Garamond" color="blue">Order List</font></h1>
				<h4 align="right">
					<a href="Home.php">Home || </a>
					<a href="Logout.php">Logout</a>
				</h4>				
			</td>
		</tr>
		<tr height="600px">
			<td  rowspan="3">
				<h3>
				<a href="Profile.php">Profile</a><br>
				<a href="CustomerInfo.php">Customer Information</a><br>
				<a href="Sellers.php">Seller's Information</a><br>
				<a href="Contact.php">Contact</a><br>
				<a href="OrderList.php">Order List</a><br>
				<a href="ListedItems.php">Listed Items</a><br>
				<a href="Transaction.php">Transaction</a><br>
				<a href="ManageOrder.php">Manage Order</a><br>
				<a href="PaymentInfo.php">Payment Info</a><br>
				<a href="Report.php">Send Report</a><br>
				<a href="History.php">History</a><br>
				<a href="UpdateInfo.php">Information</a><br>
				<a href="News.php">News</a>
			</h3>
			</td>
			
			<td>
				<h3 align="center">List some Order:<br>
					<script type="text/javascript">
					function validate()
					{
 						let CuName = document.getElementById( "CuName" );
 						let SeName = document.getElementById("SeName");
 						let Item = document.getElementById("Item");
 						let Quantity = document.getElementById("Quantity");
 						let Price = document.getElementById("Price");
 						if( CuName.value == "" || SeName.value=="" || Item.value=="" ||Quantity.value=="" ||Price.value=="")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" onsubmit="return validate();" action="../Controller/order.php">
					Customer Name:
					<input type="text" id="CuName" name="CuName" placeholder="Type Full Name"><br>
					Seller Name:
					<input type="text" id="SeName" name="SeName" placeholder="Type Full Name"><br>
					Order Item:
					<input type="text" id="Item" name="Item" placeholder="Type Item"><br>
					Quantity:
					<input type="text" id="QuQuantityantity" name="Quantity" placeholder="Type ordered Quantity"><br>
					Price:
					<input type="text" id="Price" name="Price" placeholder="Type price"><br>
					<input type="submit" name="submit" value="Enter"></h3>

				</form>
				<table border="1" align="center">
						<tr>
							<th>ORDER ID</th>
							<th>Customer Name</th>
							<th>Seller Name</th>
							<th>Ordered Item</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['id']?></td>
							<td><?=$data['customerName']?></td>
							<td><?=$data['sellerName']?></td>
							<td><?=$data['orderedItem']?></td>
							<td><?=$data['quantity']?></td>
							<td><?=$data['price']?></td>
							<td>
								<a href="../Controller/editOrder.php?id=<?=$data['id']?>">Edit</a>
								<a href="../Controller/deleteOrder.php?id=<?=$data['id']?>">Delete</a>
							</td>
						</tr>
<?php } ?>
				</table>
				
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		function ajax(){
	let CuName = document.getElementById('CuName').value;
	let SeName = document.getElementById('SeName').value;
	let Item = document.getElementById('Item').value;
	let Quantity = document.getElementById('Quantity').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/order.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('CuName='+CuName);
	xhttp.send('SeName='+SeName);
	xhttp.send('Item='+Item);
	xhttp.send('Quantity='+Quantity);
	
}
	</script>

</body>
</html>