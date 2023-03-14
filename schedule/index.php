<!DOCTYPE html>
<html>
<head>

</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Form</title>
</head>
<body>

<?php include '../Header.php'; ?>

    <form method="" action="action.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Event Code</label>
    <input name="code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter 4 or 5 char code.">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Choose Level</label>
    <select name="level" multiple class="form-control" id="exampleFormControlSelect2">
      <option>qual</option>
      <option>playoff</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Team Number</label>
    <input name="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Team Number.">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    <script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>


</body>
</html>
