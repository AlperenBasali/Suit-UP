


<?php 


  $query = "SELECT * from cards";
  $result = mysqli_query($baglanti, $query);

  $cards = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($baglanti);
  





?>




<style>
.popularFirst{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_1_270x341_crop_top.jpg?v=1553073344);
    transition: 1s;
    /* position: relative; */
}
.popularFirst:hover{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_2_270x341_crop_top.jpg?v=1553073344);
    transition: 1s;
}
.popularSec{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/crewneck_sicoca_silk_blend_sweater_1_270x341_crop_top.jpg?v=1553073338);
    transition: 1s;
    /* position: relative; */
}
.popularSec:hover{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/crewneck_sicoca_silk_blend_sweater_2_270x341_crop_top.jpg?v=1553073338);
    transition: 1s;
}
.popularThird{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/illusion_yoke_lace_sheath_dress_1_270x341_crop_top.jpg?v=1553073332);
    transition: 1s;
}
.popularThird:hover{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/illusion_yoke_lace_sheath_dress_2_270x341_crop_top.jpg?v=1553073332);
    transition: 1s;
}
.popularFourth{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/josefina_boyfriend_jeans_bright_light_broken_twill_1_270x341_crop_top.jpg?v=1553073326);
    transition: 1s;
}
.popularFourth:hover{
    background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/josefina_boyfriend_jeans_bright_light_broken_twill_2_270x341_crop_top.jpg?v=1553073326);
    transition: 1s;
}
</style>




<section class="popularProducts mt-5">
  <div class="container-lg bg-white text-center  ">
    <p>POPULAR PRODUCTS</p>
    <div class="row justify-content-evenly container-fluid   ">

      <div class="col-2 d-none d-lg-block">

        <div class="popularFirst">
          <div><span>new</span></div>
        </div>
        <div class="popularFirstInclude text-start ">
          <a href=""><?php echo $cards[0]['title'] ?></a>
          <div class="d-flex mt-2">
            <span><?php echo $cards[0]["price"] ?></span>
            <div>
              <span></span>
              <span></span>
              <span></span>
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
<!-- a -->
      <div class="col-12 col-lg-2 d-flex d-lg-none mb-4 ">
        <div class="popularFirst">
          <div><span>new</span></div>
        </div>
        <div class="popularBox ms-2">
        <div class="popularFirstInclude text-start w-100  " style="height: auto;">
          <a class="" href=""><?php echo $cards[0]['title'] ?></a>
          <p class="d-none d-sm-block ">You have made the right choice And it is good for you because as we all know people change their ...</p>
          <div class="d-block mt-2">
            <span><?php echo $cards[0]['price'] ?></span>
            <div class="mt-2 ms-2" style="justify-content: start;">
              <span></span>
              <span></span>
              <span></span>
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
          </div>
        </div>
      </div>
      </div>
    <!-- a -->
      <div class="col-2 d-none d-lg-block">
        <div class="popularSec">
          <div><span>new</span></div>
          <div><span>sale</span></div>
        </div>
        <div class="popularFirstInclude text-start ">
          <a href=""><?php echo $cards[1]['title'] ?></a>
          <div class="d-flex mt-2">
            <span><?php echo $cards[1]["price"] ?></span>
            <div>
              <span style="background-color: blue;"></span>
              
            </div>
          </div>
        </div>
        <div class="popularChooseVariant text-start d-flex justify-content-between mt-2 align-items-center   ">
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
      <!-- b -->
      <div class="col-12 col-lg-2 d-flex d-lg-none mb-4 ">
        <div class="popularSec">
          <div><span>new</span></div>
          <div><span>sale</span></div>
        </div>
        <div class="popularBox ms-2">
        <div class="popularFirstInclude text-start w-100  " style="height: auto;">
          <a class="" href=""><?php echo $cards[1]['title'] ?></a>
          <p class="d-none d-sm-block ">We can propose you a list of gift ideas It will suit you best of all. Because we all live in the ...</p>
          <div class="d-block mt-2">
            <span><?php echo $cards[1]["price"] ?></span>
            <div class="mt-2 ms-2" style="justify-content: start;">
              <span style="background-color: blue;"></span>
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
          </div>
        </div>
      </div>
      </div>
      <!-- b -->

     
      <div class="col-2 d-none d-lg-block">
        <div class="popularThird">
          <div><span>new</span></div>
          <div><span>sale</span></div>
        </div>
        <div class="popularFirstInclude text-start ">
          <a href=""><?php echo $cards[2]['title'] ?></a><br>
          <div class="d-flex mt-2">
            <span><?php echo $cards[2]['price'] ?></span>
            <div>
              <span style="background-color: red;"></span>
              <span style="background-color: wheat;"></span>
              
            </div>
          </div>
        </div>
        <div class="popularChooseVariant text-start d-flex justify-content-between mt-2 align-items-center   ">
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
<!-- c -->
<div class="col-12 col-lg-2 d-flex d-lg-none mb-4 ">
  <div class="popularThird">
    <div><span>new</span></div>
    <div><span>sale</span></div>
  </div>
  <div class="popularBox ms-2">
  <div class="popularFirstInclude text-start w-100  " style="height: auto;">
    <a class="" href=""><?php echo $cards[2]['title'] ?></a>
    <p class="d-none d-sm-block ">Here you can find garments of all sizes, colors, styles and fabrics And that is why we are offeri...</p>
    <div class="d-block mt-2">
      <span><?php echo $cards[2]['price'] ?>.00</span>
      <div class="mt-2 ms-2" style="justify-content: start;">
        <span style="background-color: red;"></span>
        <span style="background-color: wheat;"></span>
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
    </div>
  </div>
</div>
</div>
<!-- c -->


      <div class="col-2 d-none d-lg-block">
        <div class="popularFourth">
          <div><span>new</span></div>
          <div><span>sale</span></div>
        </div>
        <div class="popularFirstInclude text-start ">
          <a href=""><?php echo $cards[3]['title'] ?></a>
          <div class="d-flex mt-2">
            <span><del style="color: grey;"> </del> <?php echo $cards[3]["price"] ?></span>
            <div>
             
              
            </div>
          </div>
        </div>
        <div class="popularChooseVariant text-start d-flex justify-content-between mt-2 align-items-center   ">
          <a href="#">
            <i class="bi bi-ban"></i>
            <span>Unavailable</span>
          </a>
          <div class="popularChooseVariantR">
            <a href=""><i class="bi bi-suit-heart"></i></a>
            <a href=""><i class="bi bi-search-heart"></i></a>
          </div>
        </div>
      </div>
      <!-- d -->
      <div class="col-12 col-lg-2 d-flex d-lg-none mb-5">
        <div class="popularFourth">
          <div><span>new</span></div>
          <div><span>sale</span></div>
        </div>
        <div class="popularBox ms-2">
        <div class="popularFirstInclude text-start w-100  " style="height: auto;">
          <a class="" href=""><?php echo $cards[3]['title'] ?></a>
          <p class="d-none d-sm-block ">And that is why we are offering you the result of great market and technological research - our m...</p>
          <div class="d-block mt-2">
            <span><del style="color: grey;"><?php echo $cards[3]["oldPrice"] ?></del><?php echo $cards[3]["price"] ?></span>
          </div>
        </div>
        <div class="popularChooseVariant text-start d-flex justify-content-between mt-2 align-items-center   ">
          <a href="#">
            <i class="bi bi-ban"></i>
            <span>Unavailable</span>
          </a>
          <div class="popularChooseVariantR">
            <a href=""><i class="bi bi-suit-heart"></i></a>
          </div>
        </div>
      </div>
      </div>
      <!-- d -->

    </div>
  </div>
</section>