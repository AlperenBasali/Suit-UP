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
/* productInfo */
.productDetails{
    font-size: 60%;line-height:1;
}
.productDetails p{
    margin-bottom: .5rem;
    font-weight: 500;
}
.productDetails p a{
    color: black;
}
.productColors span{
    width: 15px;
    height: 15px;
    background-color: rgb(102, 100, 100);
    border-radius: 50%;
    border: 1px solid grey;
    margin-left: 10px;
    cursor: pointer;
    outline-offset: 1px;
}
.productColors span:nth-child(2){  
    outline: 1px solid #6fcfb8;
    outline-offset: 1px;
}
.productColors span:focus,.productColors span:active{
    outline: 1px solid #6fcfb8;
    
}
.productNumber{
    display: flex;
    align-items: flex-end;
    margin-left: 8px;
    color: grey;
}
.productNumber button{
    border: 1px solid grey;
    width: 20px;
    height: 20px;
    font-size: 100%;
    font-weight: 900;
    transition: .5s;
    background-color:#F9FAFC ;
}
.productNumber button:hover{
    color: #6fcfb8;
    transition: .5s;
}
.productNumber input{
    width: 20px;
    height: 20px;
    border: 1px solid grey;
    text-align: center;
}
.productButton button{
    background-color: #6fcfb8;
    color: white;
    border-radius: 0;
    font-weight: 600;
    padding: .6rem 1rem;
}
.productButton button:hover{
    background-color: #333;
    color: white;
}
.productButton a{
    margin: auto 0 auto 20px;
    text-decoration: none;
    
}

.productButton a:hover span,
.productButton a:hover .bi-heart-fill::before {
    color: #6fcfb8;
    transition: .5s;
}
.productButton a span{
    color: black;
    transition: .5s;
}
.bi-heart-fill::before{
    transition: .5s;
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
            <div class="col-4">
                <div class="productInfoBox">
                    <div class="productHeader mb-3">
                        <h1 style="font-size: 90%;word-spacing: 3px;">CLASSIC FIT THREE-PIECE CHECK SUIT</h1>
                    </div>
                    <div class="productDetails">
                        <p>Availability: <span style="color: green;">98 items</span></p>
                        <p>SKU: —</p>
                        <p>Barcode:</p>
                        <p>Collections: <a href="">Men’s clothing</a>, <a href="">Teens clothing</a></p>
                        <p>Product type: <span>Ethnic</span></p>
                        <p>Vendor: <span>SuitUP</span></p>
                        <div class="productColors d-flex mt-4 ">
                            <p style="color: grey;">Color:</p>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="productPrice d-flex mt-3 ">
                            <p style="font-size:190%;font-weight:700 " >$140.00</p>
                            <div class="productNumber">
                                <p>Quantity: <button>-</button> <input type="text" placeholder="1" disabled> <button>+</button> </p>
                        
                            </div>
                        </div>
                        <div class="productButton d-flex  mt-3">
                        <button type="button" class="btn btn-light">ADD TO CART</button>
                        <a href=""><i class="bi bi-heart-fill text-black"></i><span>Add to the wishlist</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>













<?php include("partials/body/sec6/_sec6.php") ?>
<?php include("partials/_footer.php") ?>
<script>

   // Tüm productColors sınıfındaki spanları seç
let colorBoxes = document.querySelectorAll(".productColors span");

// Her bir span için event listener ekle
colorBoxes.forEach(colorBox => {
    colorBox.addEventListener("click", function() {
        // Tüm spanlardan outline'ları kaldır
        colorBoxes.forEach(box => {
            box.style.outline = "none";
        });

        // Tıklanan spana outline ekle
        this.style.outline = "1px solid #6fcfb8";
    });
});
// let productWishlistBtn = document.querySelector("")


</script>
