<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>Konfirmasi Pesanan</h1>
<p>Your account : <?php echo $email; ?></p>
<br/>
<p>Hi : <?php echo $nama; ?></p>
<p>Order Anda dengan nomor <?php echo $code; ?> telah kami terima,</p>
<br/>
<p>Total Biaya : <?php echo $hargatotal; ?></p>
<p>Pembayaran :  Transfer Bank / ATM Mandiri a/n. Paris Van Java Journey No. Rek : 118 000 750 3930</p>
<br/>
<p>Berikut detail invoice dari pesanan Anda </p>
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
<p>Jika sudah melakukan pembayaran, Anda dapat melakukan konfirmasi pembayaran dengan mengklik tombol di bawah ini.</p>
<button type="button">Konfirmasi!</button>
<br/>
<p>Terima kasih sudah menggunakan jasa kami. Selamat menikmati perjalanan Anda!</p>
<br/>
<p>With best regards</p>
<em>PVJ Tour and Travel</em>
</body>

</html>