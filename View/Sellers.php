<?php

	include_once('../Controller/Header.php');
?>
<html>
<head>
	<title>Sellers</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/">google |</a>
				<a href="https://www.facebook.com/sm.tusher.avoid/">facebook |</a>
				<a href="https://twitter.com/?lang=en">twitter |</a>
				<a href="https://www.yahoo.com/">yahoo |</a>
				<a href="https://www.linkedin.com/in/s-m-tusher-mustakim-20522718b/">linkdin</a>

			</td>
			<td width="80%" colspan="2">
				<h1 align="center"><font face="Garamond" color="blue">Sellers</font></h1>
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
				<h3>Add Seller:</h3>
				<form method="post" action="../Controller/seller.php">
					Name:
					<input type="text" name="SsName" placeholder="Type Full Name">
					NID:
					<input type="text" name="SsId" placeholder="Type NID Number">
					Email:
					<input type="email" name="SsEmail" placeholder="Type valid email">
					PhoneNo:
					<input type="text" name="SsPhone" placeholder="Type PhoneNo">
					Address:
					<input type="text" name="SsAddress" placeholder="Type Adress">
					<input type="submit" name="submit" value="Submit">

				</form>
			</td>
		</tr>
	</table>

</body>
</html>