<h2> view smth. </h2>
<table>
  <tr>
    <th>id</th>
    <th>company name</th>
    <th>product</th>
  </tr>
  		 <!-- for $invoice['Product'] arrays each element as $p -->
  <tr>
    <td><?php echo $invoice['Invoice']['id']; ?></td>
    <td><?php echo $invoice['Company']['name']; ?></td>
    <?php foreach ($invoice['Product'] as $p): ?>
    <td><?php echo $p['name']; ?></td>
  	<?php endforeach;?>
  </tr>
</table>