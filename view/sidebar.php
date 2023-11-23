<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-x2ZmHbRR9Agp3Pi6bA8chsljGRq6bSSt9oUf5r5FowYXW5UJhY6OtnU5fUeVp4jqo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/sidebar.css">
</head>
<body>
  <div id="mySidebar" class="sidebar">
    <!--SIDEBAR LOGO-->
    <!--SIDEBAR CONTENT-->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a><br><br>
    <hr>
    <h2>MENU</h2>
      <a href="analytics.php"><i class="fa-solid fa-house-chimney fa-sm"></i> &nbsp;Dashboard</a>
      <a href="appform.php" ><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;Application Form</a>
    
    <!--DROPDOWN EMPLOYEE-->
     <div class="dropdown">
  <a href="#" onclick="myFunction('employeeDropdown')" class="dropbtn"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Employees</a>
  <div id="employeeDropdown" class="dropdown-content">
    <a href="#">Admin Dashboard &nbsp;<i class="fa-solid fa-user fa-sm"></i></a>
    <a href="addEmployee.php">Employee Dashboard &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
  </div>
</div>
    <div class="dropdown">
  <a href="#" onclick="myFunction('leaveDropdown')" class="dropbtn"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Leave Management</a>
  <div id="leaveDropdown" class="dropdown-content">
                <a href="leave.php"> Leave Form &nbsp;<i class="fi fi-rs-form"></i></a>
                <a  href="adminleave.php"> Admin Leave &nbsp;<i class="fi fi-rs-form"></i></a>
                <a  href="leavetrack.php">Leave Status &nbsp;<i class="fa-solid fa-chart-gantt"></i></a>
  </div>
</div>
<div class="dropdown">
            <a href="#" onclick="myFunction(event, 'lmsDropdown')" class="dropbtn"><i class="fa-solid fa-graduation-cap"></i> &nbsp;LMS</a>
            <div id="lmsDropdown" class="dropdown-content">
                <a href="traineelist.php"> Trainee List  &nbsp;<i class="fi fi-ss-book-open-reader"></i></a>
                <a href="trainees.php"> Trainers &nbsp;<i class="fi fi-sr-chalkboard-user"></i></a>
                <a href="modules.php">Modules &nbsp;<i class="fi fi-ts-book-open-cover"></i></a>
            </div>
        </div>
<div class="dropdown">
            <a href="#" onclick="myFunction('timeDropdown')" class="dropbtn"><i class="fa-solid fa-graduation-cap"></i> &nbsp;Time and Attendace</a>
            <div id="timeDropdown" class="dropdown-content">
                <a href="timesheet.php"> Time Sheet &nbsp;<i class="fi fi-ss-book-open-reader"></i></a>
                <a  href="adminleave.php"> Overtime &nbsp;<i class="fi fi-sr-chalkboard-user"></i></a>
                <a  href="shiftsch.php">Shift and Schedules &nbsp;<i class="fi fi-ts-book-open-cover"></i></a>
            </div>
        </div>
      <a href="#"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;Information</a>
      <a href="#"><i class="fa-solid fa-sack-dollar fa-sm"></i> &nbsp;Payroll</a>
      <a href="#"><i class="fa-regular fa-calendar-days fa-sm"></i> &nbsp;Schedules</a>
<hr>
          <h2>OTHERS</h2>
      <a href="#"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Account</a>
      <a href="#"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;asd</a>
      <a href="#"><i class="fa-solid fa-sack-dollar fa-sm"></i> &nbsp;asd</a>
      <a href="#"><i class="fa-regular fa-calendar-days fa-sm"></i> &nbsp;asd</a>
</div>

<div id="main">
  <!--NAV BAR-->
  <ul class="flex">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h2 class="hrms">HRMS</h2>
  </ul>
  <hr>
  
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
  

function myFunction(dropdownId) {
  document.getElementById(dropdownId).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>


</body>
</html>
