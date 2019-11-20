<?php include "header.php"; 
include "db.php";
$destination = "";
$city = "";
$from = "";
$arrival = "";



?>

<?php 

    if(isset($_POST['submit'])) {
        extract($_POST);


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


                    ?>
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
                    <!-- <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6> -->
                    <br>
                    <br>
                    <form action="pickupbook.php" method="post" class="rt-form rt-line-form flight-lable">
                        <?php 

                            if(isset($_POST['finalSubmit'])) {
                                    
                             extract($_POST);

                             echo $firstname;
                             echo $lastname;
                             echo $num;
                             echo $altnum;
                             echo $from;
                             echo $city;
                             echo $arrival;
                             echo $destination;
                             echo $passenger;
                             echo $checkin1;
                             echo $fullname;
                             echo $cemail;


                            }
                        
                        ?>
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





