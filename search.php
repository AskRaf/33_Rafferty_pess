<?php
require_once "db.php"
$isBtnSearchClicked = isset( $_POST[ "btnSearch" ] );
if ( $isBtnSearchClicked == true ) {
  $carId = $_POST[ "patrolCarId" ];
  //echo "You have search car id:" . $carId;
  $sql = "SELECT * FROM `patrolcar` WHERE 'patrolcar_id' = 'QX1111A'" . $carId . "'";
  $sql = "SELECT patrolcar.patrolcar_id,patrolcar_status.patrolcar_status_desc FROM `patrolcar` INNER JOIN patrolcar_status ON patrolcar.patrolcar_status_id = patrolcar_status.patrolcar_status_id;";
  $result = $conn->query( $sql );

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Patrol Cars</title>
<link rel="stylesheet" href="css/bootstrap-4.4.1.css"



<link href="file:///C|/xampp/htdocs/33_Rafferty_wsd_labs/css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container" style="width:900px">
  <?php
  include "header.php";


  ?>
  <section class="mt-3">
    <form action="update.php" method="post">
      <div class="form-group row">
      <label for="patrolCar" class="col-sm-3 col-form-label">Patrol Car Number</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="patrolCarId" name="patrolCarId">
      </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary" name="btnSearch" id="submit">Search</button>
      </div>
      <p><br>
      </p>
      <p>&nbsp;</p>
    </form>
  </section>
  <?php
  include "footer.php";


  ?>
</div>
<script src="file:///C|/xampp/htdocs/33_Rafferty_wsd_labs/js/jquery-3.4.1.min.js"></script> 
<script src="file:///C|/xampp/htdocs/33_Rafferty_wsd_labs/js/popper.min.js"></script> 
<script src="file:///C|/xampp/htdocs/33_Rafferty_wsd_labs/js/bootstrap-4.4.1.js"></script>
</body>
</html>
