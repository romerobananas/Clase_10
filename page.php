<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/romerobananas/Clase_10/master/top-10.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">Top 10: Aves más veloces del mundo
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?>
    <div class="col-sm-4 col-md-3 py-3">
    <h3 class="border-top pt-5">Vel: <?php print($csv[$t]['velocidad'])?></h3>
    
    <figure style="height:160px; overflow:hidden;">
    
    <img style="margin-top:-6px" src="
    <?php if ($csv[$t]['img'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['img']);
    };?>"
     

    class="img-fluid">
    </figure>

      <figure style="height:70px; overflow:hidden;">
    
    <img src="
    <?php if ($csv[$t]['img'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['Img 2']);
    };?>"
     

    class="img-fluid">
    </figure>

    <?php if ($csv[$t]['ave'] == NULL){
        print '<h5><a href="'.($csv[$t]['url']).'">'.($csv[$t]['velocidad']).'</a></h5>';
    } else {
        print '<h5><a href="'.($csv[$t]['url']).'">'.($csv[$t]['ave']).'</a></h5>';
    }?>
     <h6 class="text-small pt-1"> <?php print($csv[$t]['n2'])?></h6>
     

    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>