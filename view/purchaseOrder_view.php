<?php
/**
 * @var $orderId
 */

?>
<?php include_once "../css/header.php"; ?>

<main>
    <h1 class="text-center">
        Holywind
    </h1>
    <h3 class="text-center">
        One order
    </h3>
    <table style="border: 1px solid black">
        <tr>
            <td style="border: 1px solid black">
                orderLine id
            </td>
            <td style="border: 1px solid black">
                order id
            </td>
            <td style="border: 1px solid black">
                name
            </td>
            <td style="border: 1px solid black">
                quantity
            </td>
            <td style="border: 1px solid black">
                unique price
            </td>
            <td style="border: 1px solid black">
                total price
            </td>
        </tr>
        <?php foreach (getLines($orderId) as $line): ?>
        <tr>
            <td style="border: 1px solid black">
                <?= $line['order_id'] ?>
            </td>
            <td style="border: 1px solid black">
                <?= $line['orderline_id'] ?>
            </td>
            <td style="border: 1px solid black">
                <?= getProductName($line['product_id']) ?>
            </td>
            <td style="border: 1px solid black">
                <?= $line['quantity'] ?>
            </td>
            <td style="border: 1px solid black">
                <?= getProductPrice($line['product_id']) ?>
            </td>
            <?php endforeach ?>
            <td style="border: 1px solid black">
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
                <?= getTotalOrder($orderId) ?>
            </td>
        </tr>
    </table>
    <div>
        <a href="orders.php">
            Next
        </a>
    </div>
</main>

<?php include_once "../css/footer.php"; ?>

