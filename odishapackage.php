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
    <h2 style="margin-top: 50px">About Odisha Packages</h2>
    <p style="margin-top: 20px; text-align: justify; margin-bottom: 0%;">Odisha, also known as Orissa, is a state of India, located on the east coast of India, by the Bay of Bengal. It is the modern name of the ancient nation of Kalinga, which was invaded by the Maurya Emperor Ashoka in 261 BC. The modern state of Odisha was established on 1 April 1936 at Kanika Palace, Cuttack, as a province in India, and consists predominantly of Odia speakers.1 April is therefore celebrated as Utkal Divas (Odisha Day). Odisha is the ninth largest state by area in India, and the eleventh largest by population. Odia is the official and most widely spoken language with 93.33% Odia speakers according to linguistic survey. Odisha has a relatively unindented coastline (about 480 km long) and lacks good ports, except for the deepwater facility at Paradip.</p>
    <p style="margin-top: 10px; text-align: justify; margin-bottom: 10%;">The narrow, level coastal strip, including the Mahanadi River delta supports the bulk of the population. The interior of the state is mountainous and sparsely populated. Deomali at 1672 m is the highest point of the state. Odisha is subject to intense cyclones. The most intense one, in October 1999, Tropical Cyclone caused severe damage and some 10256 deaths. Odisha is home to the Hirakud Dam, near Sambalpur the longest earthen dam in the world.Odisha has several popular tourist destinations. Puri, Konark & Bhubaneswar are known as Golden triangle of eastern India. Puri, with the Jagannath temple near the sea (famous for Rath Yatra or the Car Festival), and Konark, with the Sun Temple, are visited by thousands of tourists every year. The Jagannath Temple of Puri, the Konark Sun Temple, the Lingaraj Temple, Udayagiri and Khandagiri Caves, Dhauligiri of Bhubaneshwar, Ashoka's famous Rock Edict at Jaugada near Berhampur city and the Barabati Fort of Cuttack are important in the archaeological history of India.</p>
</div>

<!-- ========================================================================= -->
<!-- ==========================Cards Start================================== -->
<!-- ========================================================================= -->

<?php
$getodishapackage = "SELECT * FROM featured_odisha ORDER BY id DESC";
$getodishapackagequery = mysqli_query($con, $getodishapackage);

?>

<h2 style="margin-bottom: 50px">Book Packages Now</h2>
    <div class="row">
        <?php 
        while($res = mysqli_fetch_assoc($getodishapackagequery)){
        ?>
        <div class="col col-lg-3 col-md-6">
            <div class="card" style="width: 30rem; height: 40rem;">
                <img src="admin/<?php echo $res['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">
                        Trip Name <br>
                        Trip Details   <br>
                        Price <br>
                        Cities Covered <br>
                    </p>
                    <a href="#" class="btn btn-lg btn-primary">View Details</a>
                    <a href="featured_book.php" class="btn btn-lg btn-primary">Book Now</a>
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









