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


    <h1>HTML Form</h1>
    <form method="" action="action.php">
        Code: <input type="text" name="code"><br>
	<p>Please select your type:</p>
  <input type="radio" id="level" name="level" value="qual">
  <label for="qual">Qualifications</label><br>
  <input type="radio" id="level" name="level" value="playoff">
  <label for="playoff">Playoffs</label><br></br>  
	number: <input type="text" name="number"><br/>      
	<br/>
        <input type="submit" value="submit" >
    </form>


    <form method="" action="action.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Event Code</label>
    <input name="code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Code">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select name="level" multiple class="form-control" id="exampleFormControlSelect2">
      <option>qual</option>
      <option>playoff</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Team Number</label>
    <input name="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Number">
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
