

<?php 
  $query = "SELECT * from seasoncards";
  $result = mysqli_query($baglanti, $query);
  $seasoncards = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
?>

<style>
<?php foreach($seasoncards as $seasonCard): ?>
.pfI-<?php echo $seasonCard["id"]; ?> {
    background-image: url(<?php echo $seasonCard["image"]; ?>) !important;
    transition: 1s;
}
.pfI-<?php echo $seasonCard["id"]; ?>:hover {
    background-image: url(<?php echo $seasonCard["image_hover"];?>) !important;
    transition: 1s;
}
<?php endforeach; ?>


.popularFirstInclude div div span{
    width: 15px;
    height: 15px;
    background-color: black;
    border-radius: 50%;
    border: 1px solid grey;
    margin-right: 5px;
}

</style>

<section class="seasonSection container-lg p-4 mt-5">
<div class="container">
	<div class="row">
       
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <p class="d-flex ">SEASON SALE</p>
            <button class="btn leftLst"><</button>
            <button class="btn rightLst">></button>
            <div class="MultiCarousel-inner">
             <?php foreach($seasoncards as $seasonCard): ?>
                <div class="item" >
                    
                      <div class="seasonDiv" style="height: 450px;">
                        <div class="popularSec pfI-<?php echo $seasonCard["id"]; ?>" style="height: 300px; background-position: center;background-size: cover;">
                          <div><span style="background-color: #383838;" >new</span></div>
                          <?php echo $seasonCard["sale"];  ?>
                        </div>
                        <div class="popularFirstInclude text-start ">
                          <a href=""> <?php echo $seasonCard["title"]; ?> </a>
                          <div class="d-flex mt-2">
                            <span> <?php echo $seasonCard["price"]; ?> </span>
                            <div>
                              <?php echo $seasonCard["color-1"] ?>
                              <?php echo $seasonCard["color-2"] ?>
                              <?php echo $seasonCard["color-3"] ?>
                              <?php echo $seasonCard["color-4"] ?>
                           
                            </div>
                          </div>
                        </div>
                        <div class="popularChooseVariant text-start d-flex justify-content-between mt-2 align-items-center mb-5   ">
                          <a href="">
                            <i class="bi bi-cart3"></i>
                            <span>Choose variant</span>
                          </a>
                          <div class="popularChooseVariantR">
                            <a href=""><i class="bi bi-suit-heart"></i></a>
                            <a href=""><i class="bi bi-search-heart"></i></a>
                          </div>
                        </div>
                      </div>
                    
                </div>
              <?php endforeach; ?>
            </div>
           
        </div>
	</div>
	
</div>
</section>
