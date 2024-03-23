<?php include("partials/_header.php") ?>
<?php include("partials/body/_upbtn.php") ?>
<?php include("partials/body/navbar/_navbar.php") ?>

<style>
    ol li a{
        color: black;
        text-decoration: none;
        font-size: 70%;
        transition: .3s;
    }
    ol li a:hover{
        color: #01DAD5;
        transition: .3s;
       
    }
    .breadcrumb-item+.breadcrumb-item::before{
        content: var(--bs-breadcrumb-divider, ">");
        color: grey;
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
            <div class="col-8">
                <div class="col-4"></div>
                <div class="col-8"></div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</section>













<?php include("partials/body/sec6/_sec6.php") ?>
<?php include("partials/_footer.php") ?>
