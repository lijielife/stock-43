<h2> view all invoices </h2>
<?php echo $invoices[1]['Invoice']['description']; ?>
<table>
	<tr>
		<th>date</th>
		<th>description</th>
		<th>total</th>
	</tr>
		<?php foreach ($invoices as $invoice): ?> <!-- for $invoices arrays each element as $invoice -->
	<tr>
		<td><?php echo $invoice['Invoice']['date']; ?></td>
		<td><?php echo $invoice['Invoice']['description']; ?></td>
		<td><?php echo $invoice['Invoice']['total']; ?></td>
	</tr>
		<?php endforeach;?>
</table>