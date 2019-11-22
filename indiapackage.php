<?php include "header.php"; ?>
<?php include "db.php";?>


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
      <img class="d-block w-100 drk" src="assets/images/slider/taj.jpeg" style="height: 100vh;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 drk" src="assets/images/slider/kerala.jpg" style="height: 100vh;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 drk" src="assets/images/slider/Meghalaya.jpg" style="height: 100vh;" alt="Third slide">
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
    <h2 style="margin-top: 50px">About India Packages</h2>
    <p style="margin-top: 20px; text-align: justify; margin-bottom: 10%;">The land which has undoubtedly its own way of life; the land that showcases the scintillating part of natural beauty, majestic culture, ancient heritage and grand wildlife; India invites all for a tremendous classical tour at its variant location for various purposes and for different reasons for celebration.

Tour My India takes the privilege to make you get acquainted with the glorified treasures of this amazing ancient country. The country which is full of differences and with the most alluring tour operating services we are ready to assist you to recognize and respect those differences and versatility in a grand and royal manner. For booking accommodation, transportation and guidance our dedicated members will always stand by you to bring the most impressive Tour My India Travel Services.

From Northern Himalayas to Southern beaches, Eastern jungles to Western deserts, India is flourished with so many cultural and geographical diversities, a perfect reason for India tourism. There is simply no other words that catch the true enigma of this land where great legends still holds its power and impression, the grand architectural structures are the true reflector of history and the life of the spirit can be sacredly glimpsed at different temples and pilgrimage sites at its every corner.

Royal Rajasthan, lying at the west end part is the most blissful state where colorful attires and vibrant cultures are its true enigma. The land of the Rajputs showcases many forts and palaces and sustained museums drawing people to experience impressive travel to India. The city palace in Jaipur and Udaipur are the true pride of royal Rajputana kingdom, Lake Palace in Udaipur at Jag Niwas Island reflects the true sanctity of pure white marble structure. The Chittorgarh Fort symbolizes the valorous tradition of Rajputs. The Amber Fort is the true emblem of both Rajputana and Mughal architectural marvels. Besides, the world famous Pushkar Fair brings huge amount of camel and cattle trade with ancient Hindu practices.

India is also framed with many spiritual and holy regions right from the sacred Himalayan valleys to the oceanic temples of South. Badrinath, Haridwar, Rishikesh, Varanasi, Dwarka at North-east region; Puri, Somnath, Mahabalipuram, Hoysla, Meenakshi Temple, Tirupati Balaji Temple, Konark (Sun) Temple and Rameshwaram Temple in South India are the sacred destination to attain spirituality.

The history of India is engraved deeply and incessantly at its ancient paintings, rock carved structures and sculptures at different ancient caves and monuments. The Ajanta, Ellora and Elephanta in Maharashtra, Hoysala Architecture and temple in Karnataka and ancient Mahabalipuram in Tamil Nadu are the perfect examples for historical connections in India

India Tourism also brings a fantastic opportunity of backwater tour in its vast, eloquent beaches. The magnanimous beaches of Kerala, Goa, Maharashtra and Tamil Nadu soak ever moods along with the tranquility of the nature. Kovalam, Baga, Marine Drive, Calangute, Juhu Beach, Dona Paula Beach are some of the magnificent sea-sides that brings tremendous enjoyable options for the party freaks and the romantic honeymooners along with some relaxing Ayurvedic Treatment Centers and Spa therapies.

But above all these fantastic features, the most royal experience one can have with India tourism is its grand wildlife tour at different dense jungles and sanctuaries. For the welfare of the endangered species and balancing the eco-system, India is designed with more than 500 sanctuaries and bio-reserve. India proudly holds tremendous counts of wild species in the respective zones for great wilderness. The names of Ranthambore, Corbett and Kanha are most popular for tiger tours, where on the other hand Kaziranga in Assam is the perfect home for great Indian Rhinos along with Sasan Gir in Gujarat to bring the majestic Asiatic Lions. In addition to this, India is a perfect paradise for the bird watchers and for the enthusiastic ornithologists who can easily visit Bharatpur Bird Sanctuary in Rajasthan, Chilka Lake Bird Sanctuary in Odisha, Thattekad Bird Sanctuary in Kerala and more for much fun and excitements.

India is definitely the land of dreams and fantasy and people visiting this incredible land wish to come again and again and experience the true glory of the nation.</p>
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









