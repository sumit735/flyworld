<?php include "admin_header.php"; ?>
<?php include "../db.php"; ?>

<?php 
$msg = "";
  if(isset($_POST['add'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $details = mysqli_real_escape_string($con, $_POST['details']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $image = $_FILES['image']['name'];
  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO `featured_odisha` (`name`, `details`, `image`, `price`) VALUES ('$name', '$details', '$target', '$price')";
  	// execute query
  	$res = mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		if($res) {
            $msg = "<h2 style='color: green;'>Added Successfully<h2>";
        }
  	}else{
  		$msg = "<h2 style='color: red;'>Failed to add tour</h2>";
  	}

  }

?>


<html>
 <body>
 <div class="spacer-bottom"></div>
  <section class="content-area">
    <div class="container">
        <div class="row">
            <!-- /.col-12 -->
            <div class="col-xl-9">
                <!-- /.alert -->
                <div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->
                <!-- /.flt-dtls-box -->
                <!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <?php 

                    if($msg != "") {
                        echo $msg;
                    }

                    ?>
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Feature Odisha Tour</h4>
                    <!-- <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6> -->
                    <br>
                    <br>
                    <form action="#" method="post" enctype="multipart/form-data" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-6 rt-mb-30 ">
                                <label for="fst-name">Tour Name:</label>
                                <input type="text" name="name" required class="form-control" id="fst-name"
                                    placeholder="Enter Your Tour Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Tour Details:</label>
                                <input type="text" name="details" required class="form-control" id="lst-name"
                                    placeholder="Enter Tour Details ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="mob">Tour Image</label>
                                <input type="file" name="image" required class="form-control">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">Tour Price:</label>
                                <input type="number" name="price" required name="altnum" placeholder="Enter tour Price" class="form-control">
                            </div><!-- /.col-md-6 -->
                           
                <!-- /.flight-list-box -->
                <button type="submit" name="add" class="rt-btn rt-gradient rt-Bshadow-2 rt-rounded rt-sm text-uppercase">Submit</button>
            </div><!-- /.col-lg-9 -->
            <!-- /.col-lg-3 -->
</form>
        </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
    
 </body>
</html>


 <?php include "admin_footer.php"; ?>






