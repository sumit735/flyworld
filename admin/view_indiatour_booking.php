<?php include "admin_header.php"; ?>
<?php include "../db.php"; ?>

<div class="spacer-bottom"></div>
<div class="spacer-bottom"></div>

<div class="container">

<?php 

    $indiatourbooking = "SELECT * FROM `featured_india`";
    $indiatourbookingquery = mysqli_query($con, $indiatourbooking);

?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php 

    while($res = mysqli_fetch_assoc($indiatourbookingquery)) {

?>
    <tr>
      <th scope="row"><?php echo $res['id'] ?></th>
      <td><?php echo $res['name'] ?></td>
      <td><?php echo $res['details'] ?></td>
      <td><?php echo $res['image'] ?></td>
      <td><?php echo $res['price'] ?></td>
      
    </tr>
    <?php 
    
    }
    
    ?>
    
  </tbody>
</table>

</div>

<?php include "admin_footer.php"; ?>