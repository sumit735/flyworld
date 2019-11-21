<?php include "header.php"; ?>
<?php include "db.php"; ?>

<style>

    .drk::after {
        content: '';
        display: block;
        position: absolute;
        top:0;
        bottom:0;
        left:0;
        right:0;
        background: #000;
        opacity: 0.3;
    }

</style>
<section class="rt-banner-area">
    <div class="single-rt-banner rt-banner-height1">
        <div class="container">
            <div class="row">
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 drk" src="assets/images/slider/oslider1.jpg" style="height: 100vh;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 drk" src="assets/images/slider/oslider2.jpg" style="height: 100vh;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 drk" src="assets/images/slider/oslider3.jpg" style="height: 100vh;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ========================================================================= -->
<!-- ==========================Carousel Ends================================== -->
<!-- ========================================================================= -->
<div class="container">
    <h2 style="margin-top: 50px">About International Packages</h2>
    <p style="margin-top: 20px; text-align: justify; margin-bottom: 10%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ad eos omnis earum. Impedit aliquam nemo obcaecati, sed, numquam quasi odit dignissimos laboriosam eaque suscipit cumque fugit possimus animi praesentium, blanditiis rem eos. Reprehenderit fuga tempora quisquam quae quos a dolor laborum saepe. Modi odio similique sunt laudantium commodi ipsam ullam qui facere, autem, optio voluptatem fuga animi inventore sit porro minus enim eum, temporibus blanditiis ipsa neque asperiores? Ducimus, veritatis? Adipisci dolore architecto nostrum veniam, deserunt amet quod ex vel veritatis inventore a quaerat impedit, dolorum iusto consequatur esse provident officia, in vero voluptatibus voluptatem optio aliquid. Repellendus accusamus tenetur asperiores assumenda aperiam sint cumque, beatae et minus hic enim? Itaque nihil illo nisi eaque aliquam in accusantium iste, possimus officia incidunt, porro modi dolorum qui sed quam odit est corrupti ipsam molestias. Blanditiis non libero ipsam labore nam laudantium dignissimos soluta corporis accusamus, incidunt totam deleniti laborum aliquam vel corrupti doloremque eius consequatur cumque quia sapiente! Ullam distinctio libero et molestias doloremque quibusdam quod dolore praesentium architecto ipsa at fugit natus a sit voluptas labore dolorum, facere blanditiis recusandae. Nesciunt, porro repellat blanditiis sit maxime natus veritatis quae id unde inventore. Iure tempore iusto incidunt et sunt, a aliquam ea corrupti deserunt necessitatibus repudiandae at maiores, error quae ipsam cum molestias non asperiores sint adipisci porro atque reprehenderit? Cum pariatur non at sed hic. Libero reprehenderit itaque animi, provident ducimus ad dignissimos sequi unde fugiat tenetur labore, distinctio, natus cupiditate quisquam vero. Nesciunt, dolore ipsa laudantium magni similique ducimus! Inventore aliquid minus praesentium! Aliquam necessitatibus nemo atque earum perferendis animi nisi quo error facilis. Odit, laboriosam cum nam deserunt ratione vitae accusamus et! Ea, nostrum recusandae voluptate necessitatibus provident animi quis, at iste officiis aut, assumenda modi. Rerum similique atque perspiciatis nam cumque veritatis enim adipisci iusto vero?</p>
</div>

<!-- ========================================================================= -->
<!-- ==========================Cards Start================================== -->
<!-- ========================================================================= -->

<?php
$getindiapackage = "SELECT * FROM featured_india ORDER BY id DESC";
$getindiapackagequery = mysqli_query($con, $getindiapackage);

?>

<h2 style="margin-bottom: 50px">Book Packages Now</h2>
    <div class="row">
        <?php 
        while($res = mysqli_fetch_assoc($getindiapackagequery)){
        ?>
        <div class="col col-lg-3 col-md-6">
            <div class="card" style="width: 30rem; height: 40rem;">
                <img src="admin/<?php echo $res['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        trip name <br>
                        trip details   <br>
                        price <br>
                        cities covered <br>
                    </p>
                    <a href="#" class="btn btn-lg btn-primary">View Details</a>
                    <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
        <!-- <div class="col col-lg-3 col-md-6">
            <div class="card" style="width: 30rem; height: 40rem;">
                <img src="assets/images/cities/bbsr.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        trip name <br>
                        trip details   <br>
                        price <br>
                        cities covered <br>
                    </p>
                    <a href="#" class="btn btn-lg btn-primary">View Details</a>
                    <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                </div>
            </div>
        </div> -->
        
    </div>

<?php include "footer.php"; ?>









