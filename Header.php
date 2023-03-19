<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light justify-content-center">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">FRC Queue</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link disabled" href="/queue">Queuing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/alliance">Alliances</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/matchResults">Match Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/schedule">Team Lookup</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/support">Support</a>
          <a class="dropdown-item" href="/pricing">Pricing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/about">About The Project</a>
        </div>
      </li>
      <li class="nav-item dropdown mr-auto">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
          myQueue
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/support">Support</a>
          <a class="dropdown-item" href="/pricing">Pricing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/about">About The Project</a>
        </div>
      </li>
        </ul>
    </div>
  </div>


  </nav>

<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>


</body>
</html>
