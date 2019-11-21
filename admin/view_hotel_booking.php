<?php include "admin_header.php"; ?>
<?php include "../db.php"; ?>

<div class="spacer-bottom"></div>
<div class="spacer-bottom"></div>

<div class="container">

<?php 

    $hotelbooking = "SELECT * FROM `hotelbooking`";
    $hotelbookingquery = mysqli_query($con, $hotelbooking);

?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Mob</th>
      <th scope="col">Alt Mob</th>
      <th scope="col">City</th>
      <th scope="col">Hotel</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      
      <th scope="col">Full Name</th>
      <th scope="col">Emailid</th>
    </tr>
  </thead>
  <tbody>
  <?php 

    while($res = mysqli_fetch_assoc($hotelbookingquery)) {

?>
    <tr>
      <th scope="row"><?php echo $res['id'] ?></th>
      <td><?php echo $res['first'] ?></td>
      <td><?php echo $res['last'] ?></td>
      <td><?php echo $res['mob'] ?></td>
      <td><?php echo $res['altmob'] ?></td>
      <td><?php echo $res['city'] ?></td>
      <td><?php echo $res['hotel'] ?></td>
      <td><?php echo $res['start'] ?></td>
      <td><?php echo $res['end'] ?></td>
      
      <td><?php echo $res['fullname'] ?></td>
      <td><?php echo $res['email'] ?></td>
    </tr>
    <?php 
    
    }
    
    ?>
    
  </tbody>
</table>

</div>

<?php include "admin_footer.php"; ?>