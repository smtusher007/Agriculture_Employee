<?php

	include_once('../Controller/Header.php');
	require_once('../Model/sellerModel.php');
	$result = AllSeller();
	$count = mysqli_num_rows($result);
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
					<script type="text/javascript">
					function validate()
					{
 						let Ssname = document.getElementById( "SsName" );
 						let SsId = document.getElementById("SsId");
 						let SsEmail = document.getElementById("SsEmail");
 						let SsPhone = document.getElementById("SsPhone");
 						let SsAddress = document.getElementById("SsAddress");
 						if( Ssname.value == "" || SsId.value=="" || SsEmail.value=="" ||SsPhone.value=="" ||SsAddress.value=="")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" onsubmit="return validate();" action="../Controller/seller.php">
					Name:
					<input type="text" id="SsName" name="SsName" placeholder="Type Full Name">
					NID:
					<input type="text" id="SsId" name="SsId" placeholder="Type NID Number">
					Email:
					<input type="email" id="SsEmail" name="SsEmail" placeholder="Type valid email">
					PhoneNo:
					<input type="text"  id="SsPhone" name="SsPhone" placeholder="Type PhoneNo">
					Address:
					<input type="text" id="SsAddress" name="SsAddress" placeholder="Type Adress">
					<input type="submit" name="submit" value="Submit">

				</form>
				<table border="1" align="center">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>NID</th>
							<th>Email</th>
							<th>Phone No.</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['id']?></td>
							<td><?=$data['name']?></td>
							<td><?=$data['nid']?></td>
							<td><?=$data['email']?></td>
							<td><?=$data['phoneNo']?></td>
							<td><?=$data['address']?></td>
							<td>
								<a href="edit.php">Edit</a>
								<a href="delete.php">Delete</a>
							</td>
						</tr>
<?php } ?>
				</table>
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		function ajax(){
	let SsName = document.getElementById('SsName').value;
	let SsId = document.getElementById('SsId').value;
	let SsEmail = document.getElementById('SsEmail').value;
	let SsPhone = document.getElementById('SsPhone').value;
	let SsAddress = document.getElementById('SsAddress').value; 

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/seller.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('SsName='+SsName);
	xhttp.send('SsId='+SsId);
	xhttp.send('SsEmail='+SsEmail);
	xhttp.send('SsPhone='+SsPhone);
	xhttp.send('SsAddress='+SsAddress);
	
}
	</script>
</body>
</html>