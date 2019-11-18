<?php include "admin_header.php"; ?>

<?php 

  

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

                    // print_r($_POST);

                    ?>
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Feature India Tour</h4>
                    <!-- <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6> -->
                    <br>
                    <br>
                    <form action="book.php" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-6 rt-mb-30 ">
                                <label for="fst-name">Tour Name:</label>
                                <input type="text" required class="form-control" id="fst-name"
                                    placeholder="Enter Your Tour Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Tour Details:</label>
                                <input type="text" required class="form-control" id="lst-name"
                                    placeholder="Enter Tour Details ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="mob">Tour Image</label>
                                <input type="file" required class="form-control">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">Tour Price:</label>
                                <input type="number" required name="altnum" placeholder="Enter tour Price" class="form-control">
                            </div><!-- /.col-md-6 -->
                           
                <!-- /.flight-list-box -->
                <button type="submit" class="rt-btn rt-gradient rt-Bshadow-2 rt-rounded rt-sm text-uppercase">Submit</button>
            </div><!-- /.col-lg-9 -->
            <!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
    
 </body>
</html>


 <?php include "admin_footer.php"; ?>






