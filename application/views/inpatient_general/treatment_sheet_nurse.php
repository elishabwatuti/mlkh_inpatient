<!--TREATMENT SHEET-->
<!--ONCE ONLY PRESCRIPTION, STAT DOSES, PRE-MED, ETC-->
<h2> I ONCE ONLY PRESCRIPTION, STAT DOSES, PRE-MED, ETC</h2>
<?php //if (isset($customer)): ?>
	<table id="treatment_sheet" border="1">
	<caption>One Time Prescription</caption>
	<thead>
		<th>Date</th>
		<th>Drug</th>
		<th>Dose</th>
		<th>Route</th>
		<th>Frequency/Duration</th>
		<th>Name</th>
		<th>Time</th>
	</thead>
	<tbody id="treatment_sheet">
		<?php //if (isset($d)): ?>
		<?php //print_r($cart); ?>
			<?php foreach ($cart as $cart_item): ?>
			<tr>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php //echo anchor("prescribe/delete/".$cart_item['insertkey']."", 'Delete'); ?></td>
			</tr>
			<?php endforeach ?>
		<?php //endif ?>
	</tbody>
</table>
<?php //endif ?>

<!--REGULAR PRESCRIPTIONS-->
<h2> II REGULAR PRESCRIPTIONS </h2>
<?php //if (isset($customer)): ?>
	<table id="treatment_sheet_2" border="1">
	<caption>Regular Prescription</caption>
	<thead>
		<th>Date</th>
		<th>Drug</th>
		<th>Dose</th>
		<th>Route</th>
		<th>Frequency/Duration</th>
		<th>Name</th>
		<th><?php echo date('d/m/y')?></th>
	</thead>
	<tbody id="treatment_sheet_2">
		<?php //if (isset($d)): ?>
		<?php //print_r($cart); ?>
			<?php foreach ($cart as $cart_item): ?>
			<tr>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php //echo anchor("prescribe/delete/".$cart_item['insertkey']."", 'Delete'); ?></td>
			</tr>
			<?php endforeach ?>
		<?php //endif ?>
	</tbody>
</table>
<?php //endif ?>