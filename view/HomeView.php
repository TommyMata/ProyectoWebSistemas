<?php
require_once 'public/header.php';
?>

<div class="container bootstrap snipets contenedor">
   <h1 class="text-center text-muted">El viaje comienza hoy...</h1>
   <div class="row flow-offset-1">
<?php
if ($var != null):
  foreach($var as $item):
?>
    <div class="col-xs-6 col-md-4">
      <div class="product tumbnail thumbnail-3"><a href="#"><img src="<?php echo $item['img']; ?>"  width="300" height="250" alt=""></a>
        <div class="caption">
          <h5><a style="color:black;"href="#"><?php echo $item['nombre']; ?></a></h5>
          <p class="card-text"><?php echo $item['desc']; ?></p>
          <p class="card-text"><?php echo 'Capacidad: ' . $item['capacidad']; ?></p>
          <span class="price"><?php echo '₡' . $item['precio']; ?></span>
        </div>
      </div>
    </div>
<?php
  endforeach;
endif;
?>
   </div>
 </div>

<?php
require_once 'public/footer.php';
?>