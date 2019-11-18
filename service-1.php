<?php include "header.php"; ?>

<html>
 <body>
  <section class="content-area">
    <div class="container">
        <div class="row">
            <!-- /.col-12 -->
            <div class="col-xl-9">
                ><!-- /.alert -->
                <div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->
                <!-- /.flt-dtls-box -->
                <!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
                    <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6>
                    <br>
                    <br>
                    <form action="#" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-6 rt-mb-30 ">
                                <label for="fst-name">First Name</label>
                                <input type="text" class="form-control" id="fst-name"
                                    placeholder="Enter Your First Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Last Name</label>
                                <input type="text" class="form-control" id="lst-name"
                                    placeholder="Enter Your Last Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="select-1"></label>
                                <select id="select-1">
                                    <option value="1" disabled selected>Select or enter the first character</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Bahamas</option>
                                    <option value="4">Bermuda</option>
                                    <option value="5">Canada</option>
                                    <option value="6">Caribbean</option>
                                    <option value="7">Europe</option>
                                    <option value="8">Hawaii</option>
                                </select>
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Date</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2s" value="option2">
                                            <label class="form-check-label" for="inlineRadio2s">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2ss" value="option2">
                                            <label class="form-check-label" for="inlineRadio2ss">Male</label>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="st-date">date</label>
                                        <input type="text" class="form-control rt-date-picker" placeholder="date"
                                            id="st-date">
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="select-2">ID</label>
                                <select id="select-2">
                                    <option value="1">Passport</option>
                                    <option value="2">NID</option>
                                    <option value="3">NTO</option>

                                </select>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">ID Number</label>
                                <input type="text" placeholder="ID Number" class="form-control">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <p class="f-size-14">Please ensure the ID is valid for at least 6 months
                                    after the date of departure.</p>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h6 class="text-333 rt-semiblod">Contact Details</h6> <br>
                    <form action="#" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-6 rt-mb-30">
                                <label for="contact-name">Contact name</label>
                                <input type="text" placeholder="Contact name" id="contact-name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="mbl-name">Mobile phone</label>
                                <input type="tel" placeholder="Enter Your Number" id="mbl-name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <label for="eml-name">Email</label>
                                <input type="tel" placeholder="Enter Your Email" id="eml-name">
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
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





<!-- 
    !============= Footer Area Start ===========!
 -->




<!-- ==================Start Js Link===================== -->


<!-- ==================End Js Link===================== -->







 <?php include "footer.php"; ?>






