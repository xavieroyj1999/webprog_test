<form action="<?= base_url('/stocks/store') ?>" method="POST">
    <label for="stockName">Stock Name</label>
    <select name="stockName">
        <?php foreach ($stocks as $stock): ?>
            <option value="<?= esc($stock['code']) ?>"><?= esc($stock['code']) ?></option>
        <?php endforeach ?>
    </select>


    <label for="noShares">Number of Shares</label>
    <input type="number" name="noShares">

    <label for="items">Items: </label>
    <select name="items">
        <option value="buy">Buy</option>
        <option value="sell">Sell</option>
    </select>

    <label for="types">Types: </label>
    <select name="types">
        <option value="Recurrent Investment">Recurrent investment</option>
        <option value="Limit Investment">Limit Investment</option>
        <option value="Stop Order">Stop Order</option>
        <option value="Trailing Stop Order">Trailing Stop Order</option>
        <option value="Stop Limit Order">Stop Limit Order</option>
    </select>

    <input type="submit" value="Submit">
</form>buy