<?php include "header.php"; 
include "db.php";

    $tourname = "";
    $result = "";
    
?>
<?php 

if(isset($_GET['odishabook'])) {
   
    $otourid = $_GET['odishabook'];

    $ogettourname = "SELECT * FROM `featured_odisha` WHERE `id` = '$otourid'";
    $ogettournamequery = mysqli_query($con, $ogettourname);
    
    $tourname = mysqli_fetch_assoc($ogettournamequery);
}
if(isset($_GET['indiabook'])) {
   
    $itourid = $_GET['indiabook'];

    $igettourname = "SELECT * FROM `featured_india` WHERE `id` = '$itourid'";
    $igettournamequery = mysqli_query($con, $igettourname);

    $tourname = mysqli_fetch_assoc($igettournamequery);

}



?>
<?php 

    if(isset($_POST['finalSubmit'])) {
        $firstname =  mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname =  mysqli_real_escape_string($con, $_POST['lastname']);
    $num =  mysqli_real_escape_string($con, $_POST['num']);
    $altnum =  mysqli_real_escape_string($con, $_POST['altnum']);
    $tour =  mysqli_real_escape_string($con, $_POST['tour']);
    $passenger =  mysqli_real_escape_string($con, $_POST['passenger']);
    $checkin1 =  mysqli_real_escape_string($con, $_POST['checkin1']);
    $checkout1 = mysqli_real_escape_string($con, $_POST['checkout1']);
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $cemail = mysqli_real_escape_string($con, $_POST['cemail']);

        
    $register = "insert into `featured_book` (`first`, `last`, `mob`, `altmob`, `tour`, `passenger`, `start`, `end`, `fullname`, `email`) values('$firstname', '$lastname', '$num', '$altnum', '$tour', '$passenger', '$checkin1', '$checkout1', '$fullname', '$cemail')";
    
    
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
                    <form action="featured_book.php" method="post" class="rt-form rt-line-form flight-lable">
                        
                        
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
                            <div class="col-lg-6 rt-mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tour Name</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="text" value="<?php 
                                            if($tourname != ""){
                                                $name = $tourname['name'];
                                                echo $tourname['name']; 
                                            }
                                            ?>" name="tour"  required class="form-control" id="fst-name" placeholder="Tour">
                                        </div>
                                        
                                    </div><!-- /.col-md-6 -->
                                    
                                    
                                </div><!-- /.row -->
                                
                            </div><!-- /.col-md-6 -->
                            
                            <div class="col-md-6 rt-mb-30">
                                <label for="select-2">Passengers</label>
                                <select name="passenger" required id="select-2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4+">4+</option>
                                </select>
                            </div><!-- /.col-md-6 -->
                            
                            

                            <div class="col-md-6 rt-mb-30">
                                <label for="st-date">Start Date</label>
                                <input type="text" autocomplete="off" required class="form-control rt-date-picker" name="checkin1" placeholder="date" id="st-date">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="en-date">End Date</label>
                                <input type="text" autocomplete="off"  required   class="form-control rt-date-picker" name="checkout1" placeholder="date" id="en-date">
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