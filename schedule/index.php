<!DOCTYPE html>
<html>
<head>

</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Generate Schedule</title>
    <link rel="stylesheet" href="../css/schedule-index.css">
</head>
<body>

<?php include '../Header.php'; ?>

<div class="back">
  <div class="div-center">
    <div class="content"> 
      <h3>Generate Schedule</h3>
      <hr />
      <form method="" action="action.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Event Code (Required)</label>
          <input name="code" type="text" class="form-control" id="exampleInputEmail1" placeholder="(4 or 5 char code)" required>
        </div>
        <div class="form-group">
         <label name="level" for="exampleFormControlSelect2">Choose Level (Required)</label>
    <select name="level" multiple class="form-control" id="exampleFormControlSelect2" required>
      <option>qual</option>
      <option>playoff</option>
    </select>
        </div>
                <div class="form-group">
          <label for="exampleInputEmail1">Team Number</label>
          <input name="number" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter 4 digit team number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <hr />

      </form>

    </div>


    </span>
  </div>

    <script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>


</body>
</html>
