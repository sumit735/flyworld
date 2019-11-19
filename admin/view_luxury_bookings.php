<?php include "admin_header.php"; ?>
<?php include "../db.php"; ?>

<div class="spacer-bottom"></div>
<div class="spacer-bottom"></div>

<div class="container">

<?php 

    $luxurybooking = "SELECT * FROM `luxurybooking`";
    $luxurybookingquery = mysqli_query($con, $luxurybooking);

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
      <th scope="col">Type</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php 

    while($res = mysqli_fetch_assoc($luxurybookingquery)) {

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
      <td><?php echo $res['type'] ?></td>
      <td><?php echo $res['start'] ?></td>
      <td><?php echo $res['end'] ?></td>
      <td><?php echo $res['fullname'] ?></td>
      <td><?php echo $res['emailid'] ?></td>
    </tr>
    <?php 
    
    }
    
    ?>
    
  </tbody>
</table>

</div>

<?php include "admin_footer.php"; ?>