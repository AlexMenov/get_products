<?php
$articul = $_GET['art'];
$response = file_get_contents("https://api.forum-auto.ru/v2/listGoods?login=493358_stroyzar&pass=sAVDkrEbqd&art=$articul");
$response = json_decode($response, true);
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<table class="product-table">
    <thead>
    <tr>
        <td>gid</td>
        <td>brand</td>
        <td>art</td>
        <td>name</td>
        <td>d_deliv</td>
        <td>h_deliv</td>
        <td>kr</td>
        <td>num</td>
        <td>price</td>
        <td>whse</td>
        <td>is_returnable</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($response as $item): ?>
        <tr>
            <td><?= $item['gid'] ?></td>
            <td><?= $item['brand'] ?></td>
            <td><?= $item['art'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['d_deliv'] ?></td>
            <td><?= $item['h_deliv'] ?></td>
            <td><?= $item['kr'] ?></td>
            <td><?= $item['num'] ?></td>
            <td><?= $item['price'] ?></td>
            <td><?= $item['whse'] ?></td>
            <td><?= $item['is_returnable'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>