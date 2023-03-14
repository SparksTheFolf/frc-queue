<!DOCTYPE html>
<html>
<head>

    <title>Alliances</title>
</head>
<body>

<?php include '../Header.php'; ?>

    <form method="" action="action.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Event Code</label>
    <input name="code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter 4 or 5 char code.">
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
