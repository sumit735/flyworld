<?php include "header.php"; 
include "db.php";
$destination = "";
$city = "";
$from = "";
$arrival = "";
$result = ""



?>

<?php 

    if(isset($_POST['submit'])) {
        extract($_POST);


    }

    

?>
<?php 

if(isset($_POST['finalSubmit'])) {

$firstname =  mysqli_real_escape_string($con, $_POST['firstname']);
$lastname =  mysqli_real_escape_string($con, $_POST['lastname']);
$num =  mysqli_real_escape_string($con, $_POST['num']);
$altnum =  mysqli_real_escape_string($con, $_POST['altnum']);
$from =  mysqli_real_escape_string($con, $_POST['from']);
$destination =  mysqli_real_escape_string($con, $_POST['destination']);
$city =  mysqli_real_escape_string($con, $_POST['city']);
$passenger =  mysqli_real_escape_string($con, $_POST['passenger']);
$checkin1 =  mysqli_real_escape_string($con, $_POST['checkin1']);
$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
$cemail = mysqli_real_escape_string($con, $_POST['cemail']);


$register = "insert into `pickupbooking` (`first`, `last`, `mob`, `altmob`, `source`, `destination`, `city`, `passenger`, `date`, `fullname`, `emailid`) values('$firstname', '$lastname', '$num', '$altnum', '$from', '$destination', '$city', '$passenger', '$checkin1', '$fullname', '$cemail')";

$register_query = mysqli_query($con, $register);
if($register_query) {
    $result =  "<h3 style='color: green; font-size: 20px;'>Booked successfully</h3>";
    // header('location:luxurybook.php');
} else {
    $result = "<h3 style='color: red; font-size: 20px;'>Oops! Something went wrong.</h3>".mysqli_error($con);
}
}
$to = "satyaprakashn7@gmail.com";
    $msg = "You Have a new Booking";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    

    if(mail($to, "Booking", $msg, $headers)){
        echo "<script>alert('Success')</script>";
        } else{
            echo "<script>alert('Failed to MAil')</script>";
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
                     if($result != "") {
                        echo $result;
                    }


                    ?>
                    
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
                    <!-- <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6> -->
                    <br>
                    <br>
                    <form action="pickupbook.php" method="post" class="rt-form rt-line-form flight-lable">
                        
                        <div class="row">
                            <div class="col-md-6 rt-mb-30 ">
                                <label for="fst-name">First Name</label>
                                <input type="text" required class="form-control" name="firstname" id="fst-name"
                                    placeholder="Enter Your First Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Last Name</label>
                                <input type="text" required class="form-control" name="lastname" id="lst-name"
                                    placeholder="Enter Your Last Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="mob">Mobile Number</label>
                                <input type="number" required class="form-control" id="mob" name="num"
                                    placeholder="Enter Your phone Number ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">Alternate Mobile Number</label>
                                <input type="number" required name="altnum"  placeholder="Alternate Mobile Number" class="form-control">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">From</label>
                                <input type="text" value="<?php 
                                            if($from!= ""){ 
                                                echo $from; 
                                            }
                                            ?>" required name="from"  placeholder="From" class="form-control">
                            </div>
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">To</label>
                                <input type="text" value="<?php 
                                            if($destination!= ""){ 
                                                echo $destination; 
                                            }
                                            ?>" required name="destination"  placeholder="To" class="form-control">
                            </div>
                            <div class="col-lg-6 rt-mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>City Name</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="text" value="<?php 
                                            if($city != ""){ 
                                                echo $city; 
                                            }
                                            ?>" name="city"  required class="form-control" id="fst-name" placeholder="City">
                                        </div>
                                        
                                       
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div><!-- /.col-md-6 -->
                            
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">Passengers</label>
                                <input type="text" value="<?php 
                                            if($passenger!= ""){ 
                                                echo $passenger; 
                                            }
                                            ?>" required name="passenger"  placeholder="Passengers" class="form-control">
                            </div>
                            <!-- /.col-md-6 -->
                            
                            <div class="col-md-6 rt-mb-30">
                                <label for="st-date">Date</label>
                                <input type="text" value="<?php
                                if($arrival != ""){  
                                    echo $arrival; 
                                }
                                ?>"  required class="form-control rt-date-picker" name="checkin1" placeholder="date" id="st-date">
                            </div><!-- /.col-md-6 -->
                            
                        </div><!-- /.row -->
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h6 class="text-333 rt-semiblod">Your Contact Details</h6> <br>
                        <div class="row rt-form rt-line-form flight-lable">
                            <div class="col-md-6 rt-mb-30">
                                <label for="contact-name">Contact name</label>
                                <input type="text" name="fullname" required placeholder="Contact name" id="contact-name">
                            </div><!-- /.col-md-6 -->
                            
                            <div class="col-md-6">
                                <label for="eml-name">Email</label>
                                <input type="tel" name="cemail" required placeholder="Enter Your Email" id="eml-name">
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <button type="submit" name="finalSubmit" class="rt-btn rt-gradient rt-Bshadow-2 rt-rounded rt-sm text-uppercase">Submit</button>
                    </form>
                </div><!-- /.flight-list-box -->
                <!-- /.flight-list-box -->
                
            </div><!-- /.col-lg-9 -->
            <!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
    
 </body>
</html>




 <?php include "footer.php"; ?>





