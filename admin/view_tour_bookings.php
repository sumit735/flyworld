<?php include "admin_header.php"; ?>
<?php include "../db.php"; ?>

<div class="spacer-bottom"></div>
<div class="spacer-bottom"></div>

<div class="container">

<?php 

    $booking = "SELECT * FROM `booking`";
    $bookingquery = mysqli_query($con, $booking);

?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Mob</th>
      <th scope="col">Alt Mob</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Passenger</th>
      
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Full Name</th>
      <th scope="col">EmailId</th>
    </tr>
  </thead>
  <tbody>
  <?php 

    while($res = mysqli_fetch_assoc($bookingquery)) {

?>
    <tr>
      <th scope="row"><?php echo $res['id'] ?></th>
      <td><?php echo $res['first'] ?></td>
      <td><?php echo $res['last'] ?></td>
      <td><?php echo $res['mob'] ?></td>
      <td><?php echo $res['altmob'] ?></td>
      <td><?php echo $res['source'] ?></td>
      <td><?php echo $res['destination'] ?></td>
      <td><?php echo $res['passenger'] ?></td>
      
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