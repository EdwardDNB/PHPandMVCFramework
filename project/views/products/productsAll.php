<table>
   <thead>
      <tr>
            <th colspan="4">Products</th>
      </tr>
   </thead>

   <tbody>
      <tr>
            <td>name</td>
            <td>price</td>
				<td>quantity</td>
				<td>category</td>
      </tr>
		<?php foreach ($key as $product): ?>
			<tr> <?php foreach ($product as $params): ?>
				<td><?= $params; ?></td>
				<?php endforeach; ?>
      </tr>
	<?php endforeach; ?>
   </tbody>
</table>
