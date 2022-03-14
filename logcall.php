<?php
require_once "db.php";
$conn = new mysqli( DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );
$sql = "SELECT * FROM incident_type";
$result = $conn->query( $sql );
$incidentTypes = [];
while ( $row = $result->fetch_assoc() ) {
  $id = $row[ "incident_type_id" ];
  $type = $row[ "incident_type_desc" ];
  $incidentType = [ "id" => $id, "type" => $type ];
  array_push( $incidentTypes, $incidentType );
}
$conn->close();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logcall</title>
<link rel="stylesheet" href="css/bootstrap-4.4.1.css"




<link href="file:///C|/xampp/htdocs/33_Rafferty_wsd_labs/css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container" style="width:900px">			
<?php
include "header.php";


?>
<section class="mt-3">
  <form>
    <div class="form-group row">
      <label for="callerName" class="col-sm-4 col-form-label">Caller's Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="callerName" name="callerName">
      </div>
    </div>
    <div class="form-group row">
      <label for="contactNo" class="col-sm-4 col-form-label">Contact No</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="contactNo" name="contactNo">
      </div>
    </div>
    <div class="form-group row">
      <label for="LocationOfIncident" class="col-sm-4 col-form-label">Location of incident</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="LocationOfIncident" name="LocationOfIncident">
      </div>
    </div>
    <div class="form-group row">
      <label for="TypeOfIncident" class="col-sm-4 col-form-label">Type of incident</label>
      <div class="col-sm-8">
        <select id="TypeofIncident" class="form-control name="TypeOfIncident>
          <option value="">Select</option>
          <?php
          foreach ( $incidentTypes as $incidentType ) {
            echo "<option value=\"" . $incidentType[ "id" ] . "\">" . $incidentType[ "type" ] . "</option>";
          }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="DescriptionOfIncident" class="col-sm-4 col-form-label">Description of incident</label>
      <div class="col-sm-8">
        <textarea name="DescriptionOfIncident"
					class="form-control"
					rows="5"
					id="DescriptionOfIncident"
					></textarea>
      </div>
    </div>
    <div class="offset-sm-4 col-sm-8">
      <button type="submit" class="btn btn-primary" name="submit" id="submit">Process Call</button>
    </div>
    </div>
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
