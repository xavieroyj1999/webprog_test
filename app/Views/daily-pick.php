<table>
  <tr>
    <th>Code</th>
    <th>Stock</th>
    <th>Previous Close</th>
    <th>Price</th>
    <th>Change</th>
  </tr>

  <?php foreach ($shuffleStocks as $stock): ?>
    <tr>
        <td><?= esc($stock['code']) ?></td>
        <td><?= esc($stock['stock']) ?></td>
        <td><?= esc($stock['previous_close']) ?></td>
        <td><?= esc($stock['price']) ?></td>
        <td><?= esc($stock['change']) ?></td>
    </tr>
  <?php endforeach ?>
</table> 