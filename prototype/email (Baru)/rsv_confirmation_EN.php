<!DOCTYPE html>
<html>
<head>
</head>

<body>

<h1>Order Confirmation</h1>
<p>Your account : <?php echo $email; ?></p>
<br/>
<p>Hi : <?php echo $nama; ?></p>
<p>We have received your order with number : <?php echo $code; ?></p>
<br/>
<p>Total Cost : <?php echo $hargatotal; ?></p>
<p>Payment :  Bank Transfer / ATM Mandiri Paris Van Java Journey Number : 118 000 750 3930</p>
<br/>
<p>You can see invoice detail below : </p>
<br/>
<table border="3">
	<tr>
	<th rowspan="2">Meal</th>
	<th colspan="2">Package</th>
	<th rowspan="2">Tour Guide</th>
	<th rowspan="2">Request</th>
	<th rowspan="2">Hotel</th>
	<th rowspan="2">Itinerary</th>
	</tr>
	<tr>
	<th>Price</th>
	<th>Destination</th>
	</tr>
	<tr>
	<td> <?php echo $meal; ?> </td>
	<td> <?php echo $price; ?> </td>
	<td> <?php echo $destination; ?> </td>
	<td> <?php echo $guide; ?></td>
	<td> <?php echo $request; ?></td>
	<td> <?php echo $hotel; ?></td>
	<td> <?php echo $itinerary; ?></td>
	</th>
	</tr>
</table>
<br/>
<p>If you already pay, you can confirm by by click the button below.</p>
<button type="button">Confirm!</button>
<br/>
<p>Thank you for your reservation. Enjoy Your Trip!</p>
<br/>
<p>With best regards</p>
<em>PVJ Tour and Travel</em>

</body>

</html>