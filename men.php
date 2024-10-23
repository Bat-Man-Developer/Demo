<?php
// men.php
include 'header.php';

$men_services = [
    ['name' => 'Men\'s Haircut', 'price' => 30],
    ['name' => 'Beard Trim', 'price' => 20],
    ['name' => 'Hair Color', 'price' => 50],
    ['name' => 'Scalp Treatment', 'price' => 40],
    ['name' => 'Hot Towel Shave', 'price' => 35],
];
?>

<h1>Men's Hair Services</h1>

<table>
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($men_services as $service): ?>
        <tr>
            <td><?php echo $service['name']; ?></td>
            <td>$<?php echo $service['price']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include 'footer.php';
?>