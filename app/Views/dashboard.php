<h1>Stocks changes</h1>
<table>
  <tr>
    <th>Code</th>
    <th>Stock</th>
    <th>Previous Close</th>
    <th>Price</th>
    <th>Change</th>
  </tr>

  <?php foreach ($stocks as $stock): ?>
    <tr>
        <td><?= esc($stock['code']) ?></td>
        <td><?= esc($stock['stock']) ?></td>
        <td><?= esc($stock['previous_close']) ?></td>
        <td><?= esc($stock['price']) ?></td>
        <td><?= esc($stock['change']) ?></td>
    </tr>
  <?php endforeach ?>
</table> 

<hr>


<h1>Orders</h1>
<table>
  <tr>
    <th>ID</th>
    <th>Stock Code</th>
    <th>Shares</th>
    <th>Items</th>
    <th>Types</th>
    <th>Delete</th>
  </tr>

  <?php foreach ($orders as $order): ?>
    <tr>
        <td><?= esc($order['id']) ?></td>
        <td><?= esc($order['stockName']) ?></td>
        <td><?= esc($order['noShares']) ?></td>
        <td><?= esc($order['items']) ?></td>
        <td><?= esc($order['types']) ?></td>
        <td><button onclick="deleteOrder(<?= $order['id'] ?>)">Delete</button></td>
    </tr>
  <?php endforeach ?>
</table>

<script>
function deleteOrder(id) {
    fetch("<?= base_url('/stocks/delete/') ?>" + id,  {
        method: 'DELETE',
        redirect: "follow",
    }).then(response => {
        if (response.redirected) {
            window.location.href = response.url;
        }
    });
}
</script>