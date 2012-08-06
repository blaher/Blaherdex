<?php include('application/views/template/top.php'); ?>
	
	<table>
		<caption>(A) Order 1</caption>
		<thead>
			<tr>
				<th>Symbol</th><td><?=$order->buy->stock?></td>
			</tr>
			<tr>
				<td></td><th>Action</th><th>Quantity</th><th>Price Type</th><th>Price</th><th>Duration</th>
			</tr>
		</thead>
		<tbody>
			<tr><td>Stock</td><td>Buy</td><td><?=$order->buy->qty?></td><td><?=$order->buy->type?></td><td><?=$order->buy->price?></td><td><?=$order->buy->duration?></td></tr>
			<tr><td></td><td></td><td></td><td></td><td><input type="checkbox" checked="checked" /></td><td>All or None</td></tr>
		</tbody>
	</table>

	<table>
		<caption>(B) Order 2</caption>
		<thead>
			<tr>
				<th>Symbol</th><td><?=$order->stop->stock?></td>
			</tr>
			<tr>
				<td></td><th>Action</th><th>Quantity</th><th>Price Type</th><th>Price</th><th>Duration</th>
			</tr>
		</thead>
		<tbody>
			<tr><td>Stock</td><td>Sell</td><td><?=$order->stop->qty?></td><td><?=$order->stop->type?></td><td><?=$order->stop->limit?></td><td><?=$order->stop->duration?></td></tr>
			<tr><td></td><td></td><td></td><td>Stop Price</td><td><?=$order->stop->price?></td><td></td></tr>
			<tr><td></td><td></td><td></td><td></td><td><input type="checkbox" /></td><td>All or None</td></tr>
		</tbody>
	</table>

	<table>
		<caption>(C) Order 3</caption>
		<thead>
			<tr>
				<th>Symbol</th><td><?=$order->limit->stock?></td>
			</tr>
			<tr>
				<td></td><th>Action</th><th>Quantity</th><th>Price Type</th><th>Price</th><th>Duration</th>
			</tr>
		</thead>
		<tbody>
			<tr><td>Stock</td><td>Sell</td><td><?=$order->limit->qty?></td><td><?=$order->limit->type?></td><td><?=$order->limit->price?></td><td><?=$order->limit->duration?></td></tr>
			<tr><td></td><td></td><td></td><td></td><td><input type="checkbox" /></td><td>All or None</td></tr>
		</tbody>
	</table>

<?php include('application/views/template/bottom.php'); ?>