<?php
// women.php
include 'header.php';

$women_services = [
    ['name' => 'Women\'s Haircut', 'price' => 50],
    ['name' => 'Color and Highlights', 'price' => 100],
    ['name' => 'Blowout', 'price' => 35],
    ['name' => 'Updo', 'price' => 75],
    ['name' => 'Keratin Treatment', 'price' => 150],
];
?>

<h1>Women's Hair Services</h1>

<table>
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($women_services as $service): ?>
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