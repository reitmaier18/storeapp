<div class="card" id="card">
    <div class="card-body">
        <h4 class="card-title"><?=$data['title']?></h4>
        <hr>
        <h5 class="card-subtitle mb-2 text-muted"><?=$data['subtitle']?></h5>
        <br>
        <?php
        if (isset($data['warning'])) {
            echo $data['warning'];
        }else{
        ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Current amount</th>
                    <th>Previous amount</th>
                    <th>Base</th>
                    <th>Tax</th> 
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = 0;
                foreach ($data['result'] as $key => $value) 
                {
                    if($value->id!=$id)
                    {
                        echo "<tr>";
                        echo "<td>$value->current_amount</td>";
                        echo "<td>$value->previous_amount</td>";
                        echo "<td>$value->base</td>";
                        echo "<td>$value->tax</td>";
                        echo "<td>$value->total</td>";
                        echo "</tr>";
                        $id = $value->id;
                    }
                    
                    
                }
                ?>
            </tbody>
        </table>
        <?php } ?>
  </div>
</div>