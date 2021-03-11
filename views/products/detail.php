<div class="modal-header">
    <h5 class="modal-title">Product name: <?=$data['title'];?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body" id="modal_content">
        <center>
        <?php
        echo '<img src="'.$data['product']->products_photo.'" alt="">'
        ?>
        </center>
    <p><?=$data['product']->product_detail;?></p>
    <table class="table table-border">
    <thead class="thead-dark">
    <tr>
    <th>Price</th>
    <th><?='USD '.$data['product']->product_price?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Tax</td>
    <td><?='USD '.$data['product']->tax?></td>
    </tr>
    </tbody>
    </table>

    <div class="form-group col-md-4">
      <label for="shipping">Shipping</label>
      <select id="shipping" class="form-control">
        <option selected value="0">Choose...</option>
        <?php
        foreach ($data['shipping_list'] as $key => $value) {
            echo '<option value="'.$value->id.'">'.$value->shipping_name.' USD'.$value->shipping_price.'</option>';
        }
        ?>
      </select>
    </div>
    </div>
    <div class="modal-footer">
    <?php
    echo '<button type="button" class="btn btn-primary" onclick="addProducts('.$data['product']->id.')">Add to car</button>';
    if ($data['boolvalue']) {
        echo '<button type="button" class="btn btn-danger" onclick="quitProducts('.$data['shop_cart_id'].')">quit to car</button>';
    }
    ?>
    
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>