<div class="card" id="card">
    <div class="card-body">
        <h4 class="card-title"><?=$data['title']?></h4>
        <hr>
        <h5 class="card-subtitle mb-2 text-muted"><?=$data['subtitle']?></h5>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($data['list'] as $key => $value) 
                    {
                        echo '<div class="col-sm-12 col-md-3">';
                        echo '<div class="card">';
                        echo '<img class="card-img-top" src="'.$value->products_photo.'" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">'.$value->product_name.'</h5>';
                        echo '<hr>';
                        //echo '<p class="card-text">'.$value->product_detail.'</p>';
                        
                        //echo '<a class="btn btn-primary" onclick="addProducts('.$value->id.')">View detail</a>';
                        echo '<a class="btn btn-primary" onclick="productDetail('.$value->id.')">View detail</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
  </div>
</div>