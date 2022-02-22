<table border="5">
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Date</th>
    <th>Description</th>
    </thead>
    <tbody>
    <?php foreach ($products as $key=>$product):?>
    <tr>
        <td><?php echo $key+1 ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo $product->genre ?></td>
        <td><?php  echo $product->price ?></td>
        <td><?php echo  $product->quantity ?></td>
        <td><?php echo  $product->createDate ?></td>
        <td><?php  echo $product->description ?></td>
    </tr>
    <?php endforeach;?>

    </tbody>

</table>
