<?php include("partials/_header.php") ?>
<?php include("partials/body/_upbtn.php") ?>
<?php include("partials/body/navbar/_navbar.php") ?>

<style>
/* BREADCRUMB */
ol li a{color: black;text-decoration: none;font-size: 70%;transition: .3s;}
ol li a:hover{color: #01DAD5;transition: .3s;}
.breadcrumb-item+.breadcrumb-item::before{content: var(--bs-breadcrumb-divider, ">");color: grey;}
/* BREADCRUMB */
/* CAROUSEL */ 
.listYaxis {height: 500px;position: relative;}
.listYaxis li {list-style-type: none;width: 150px;height: 150px;opacity: .25;position: absolute;border-radius: 2px;background: #9C89B8;transition: transform 1s, opacity 1s; background-position: center;background-size: cover;}
.listYaxis .act {opacity: 1;transform: translateY(150px);}
.listYaxis .prev,.listYaxis .next {cursor: pointer;}
.listYaxis .prev {transform:  scale(.85);}
.listYaxis .next {transform: translateY(300px) scale(.85);}
.swipe {width: 270px;height: 200px;position: absolute;background-color: green;border-radius: 2px;top: 50%;left: 50%;transform: translate(-50%,-50%);opacity: 0;}
/* CAROUSEL */
.productBigImgBox{
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

<div aria-label="breadcrumb">
    <div class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Product</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <span style="font-size: 70%; ">Quilted Leather Jacket</span></li>
  </ol>
  </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-8 d-flex ">
                <div class="col-4">

                    <ul class="list listYaxis">
                            <!-- SIRASI KARIŞIYOR DÜZELT -->
                        <li class="act"  style=" background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_3_170x163_crop_top.jpg?v=1553073344) ; ">1</li>
                        <li class="next" style=" background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_1_170x163_crop_top.jpg?v=1553073344) ; " >2</li>
                        <li class="next" style=" background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_2_170x163_crop_top.jpg?v=1553073344) ; ">3</li>
                        <li class="next" style=" background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_4_170x163_crop_top.jpg?v=1553073344) ; ">4</li>
                        <li class="next" style=" background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_5_170x163_crop_top.jpg?v=1553073344) ; ">5</li>    
                    </ul>
                    <div class="swipe d-none "></div>

                </div>
                <div class="col-8">
                    <div class="productBigImgBox img-fluid" style=" background-image: url(//theme644-clothes-free.myshopify.com/cdn/shop/products/classic_fit_three-piece_check_suit_3_170x163_crop_top.jpg?v=1553073344) ; " ></div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</section>













<?php include("partials/body/sec6/_sec6.php") ?>
<?php include("partials/_footer.php") ?>
