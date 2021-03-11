<div class="card" id="card">
    <div class="card-body">
        <h4 class="card-title"><?=$data['title']?></h4>
        <hr>
        <h5 class="card-subtitle mb-2 text-muted"><?=$data['subtitle']?></h5>
        <?php
        if (isset($data['warning'])) {
            echo $data['warning'];
        }else{
        ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Product name</th>
                    <th>Product Price</th>
                    <th>Tax</th>
                    <th>Shipping name</th>
                    <th>Shipping price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                $sum_tax = 0;
                $base = 0;
                foreach ($data['to_pay'] as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$value->product_name."</td>";
                    echo "<td>".$value->product_price."</td>";
                    echo "<td>".$value->tax."</td>";
                    echo "<td>".$value->shipping_name."</td>";
                    echo "<td>".$value->shipping_price."</td>";
                    $sum_total = ($value->product_price+$value->tax+$value->shipping_price);
                    $sum_tax = $sum_tax+$value->tax;
                    $base = $base+$value->product_price;
                    echo "<td>".$sum_total."</td>";
                    echo "</tr>";
                    $total = $total+$sum_total;
                }
                ?>
                <tr>
                <td colspan="5"><b>Total</b></td>
                <td><b><?=$total?></b></td>
                </tr>
            </tbody>
            
        </table>
        <?php } 
        echo '<input type="button" value="Pay" class="btn btn-primary" onclick="pay('.$base.','.$sum_tax.','.$total.')">';
        ?>
        
  </div>
</div>