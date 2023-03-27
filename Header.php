<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
.mainHeader {
  background-color: white;
}

</style>

</head>
<body>

<div class="mainHeader">

<nav class="navbar navbar-expand-lg navbar-light justify-content-center mx-auto justify-content-center">
  <div class="container-fluid mx-auto">
    <a class="navbar-brand" href="/">FRC Queue</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/queue"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUpJREFUSEvVlMExBEEYhb+NgAtXRIAIEIHNABHg4oqrExEQAhGsDJABVy5EQH1V/W+N3pnpLjt70FVdXTM9+97r9972iAWP0YLxmZfgELhKIs+Au1zwvATvwEoC/QBW/x3BYBZdAzvAJ/AIPAMvwGupJDUZqPK2A0iyvT6SGgJVrgGXSfkFsNkA9b3vWkeJINS/AetpPgHLGdo47e2mdTv2SwT2+gA4Sh2/B/Yb4A/Zc2xtRD4lAn+gKr12nWTgKrcAWwnQ75zT8GsIAjOy8PmrAdpbpFoCQzxvIFlXlRfrWkNguBGsypdaJEt22naUGoII1kCjLXruNBdXSW2OJ/o1SgQRbJ/nqj8GboCTEsF3R2J9fyZPoIWWwHr2nqCNoFVZhhMNm7GpZFHpLov9TpuGIgiboghTYUMRCGidZ67vIQn+dJvWZtD53Q88YEQZKpiw4wAAAABJRU5ErkJggg=="/> Queuing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/teams"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAURJREFUSEvVlf8xxUAURs+rgA5QASpABXTgqYAOUAEqQAV0gAoeHShBB8yZuZtJYrObmMlg/8nk7Y9zv2+/m7dg5rGY+Xz+NOACuAPeSy7UFJwBh8A+8Aw8AjfAEfAAfABb8cxySoBr4DSzS4DVC9wG7oHlkIohwA6wKkjfDWu0Zy1UZK0aAmjNVQFwEv6rYg84CEXftvwaYIxFr2HTBqBlvo9W4MLSJWuhF30OvAEWNDlFbvAgI6nPLxFTwabmNk40qsJM1yQFpf7ZjN6wAKPqsOm8/M4YumQrtAdy0vVaFebfoUIPN66XoaaB9AHrwFPJ01Z5goynFqXOdtrObnqiD3BTklyyKM253gQli477KtqAWnMNAVPTJRVtaOdzPbX6nIrP+LEpvK0gTY6xZmxYOgpmB/yk8uqe2h9O9YDagv8P+AJ6Qj8ZCm3B9gAAAABJRU5ErkJggg=="/> Team Lookup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/alliance"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAVVJREFUSEvFlf0xBEEQR99FgAxkgAgQgRAQgggIQQbIQAbIQAaI4IiAemrnarZvPnavXOl/9m5m5/e6e7p7F2zZFlvWZw7gArgeHLoBHqY4NwWQhPeD4DvQBbUAUfhjELybAyoBasL3g/B3JTXFiCLgFTgYBJLHSTjp1gBpX42j9CcC0uFLIApPBfjeSrcGaN1NL4L/BTwDx8Ap4O+S9SJ4AU5qd2Dez4Er4HZDgA1oJf5azLUbsc4jp3Y/j8AZMCqQ+PIusOyMgBLALn8bzu0Bn7UIXE+e1DglgCPDOTVKTylFrnlBT40oIiD3fq04evkscfIzplRnDkve1yJw3YPOlp0CIQeksv4CjGSV+9YdpD29UiBCBChmtZlOxX06g9as9z0oQewRL9Qom+KtFOWe6K0NaIfnZsfaN6ayar0I8oOKWY6az9q0HcHmAFqO/kkEGwF+ACPjRBlyBB7HAAAAAElFTkSuQmCC"/> Alliances</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/matchResults"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJhJREFUSEu9ldENgCAMRB8TOIK6iaPoZDqKo+gGbqAhkcSUaAQ8+SPQe+2RcA7xcmJ9fgd0wAg0mZMtwADMod5O4C/UmeKhzGu0d4D9PMi1Lqq3Qr8DLDDsrYuh0eQJ5IDU906eQA6QWyQHyC2SA+QWyQFyiz4HbECVqmrur9c8sb+pD5ypIBO8eP8UOIXNx+W5wfK6ETngAPa1Mhk/XZynAAAAAElFTkSuQmCC"/> Match Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/schedule"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEtjZKAxYKSx+QyELPgPdQAudYTk6W+BAwMDw3wGBgYFMoPuAQMDQyIDA8MBmH50r4MUyJNpOEwbyAxFXBbAwpRCOxBBj+4DullAKHXh8iFGqsLlg+FjAbqXSeVjZDRSDSCknqAFpCbXwRfJhIKAkDzBICJkACF5ghYM/Tigug8+MDAw8JNqKpr6h8j1CXqZA6pwFlBQJ4AMT8BX4VDoeEzt5JaaRDsEAEtJNBmkfiBdAAAAAElFTkSuQmCC"/> Schedule</a>
        </li>
        <li class="nav-item dropdown">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPRJREFUSEvNlWENwjAQhb8pAAmgAJCAA3AACpAAKCAoQAJIQAIOQAIogLxkDdC1vWVlZPfnsqx53/Xd7lbQchQt61MXMAbWgLLiAmzLnKyxDmAGHCMqc+CUIliAPnAFlENxB4aAcjAsQKp6JzgFzk0Bm9L7lAvqhc518wby/gb0IgU+gEFOD6Tb6lfkCtf3L58/50DPmofsObA0ugtQg1dlD5w1frWySJO8jzU6NmgLYJeYYB+kSV6G1kYIIPFDQ+Mru8kHWLvH4lZ2kw+osxosyNfq8AFq2shSMN5LY+LO+IBnpnhF9++AH13gLWP9cLKBrQNeWrEoGRxI2IoAAAAASUVORK5CYII="/> myQueue
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/support">Support</a>
          <a class="dropdown-item" href="/pricing">Pricing</a>
          <a class="dropdown-item" href="/about">About The Project</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/login">login</a>

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
</div>

</body>
</html>
