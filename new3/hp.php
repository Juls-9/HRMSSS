<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel="stylesheet" href="path/to/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="hpcss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-x2ZmHbRR9Agp3Pi6bA8chsljGRq6bSSt9oUf5r5FowYXW5UJhY6OtnU5fUeVp4jqo" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="mySidebar" class="sidebar">
    <!--SIDEBAR LOGO-->
    <div class="logo">
    <a class="navbar-brand"><img src="hrlogo.png  " alt="logo-custom"></a>
    </div>
    
    <!--SIDEBAR CONTENT-->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-arrow-right-from-bracket fa-flip-horizontal"></i></a><br><br>
    <hr>
    <h2>MENU</h2>
      <a class="wee" data-content="dashboard.php"><i class="fa-solid fa-house-chimney fa-sm"></i> &nbsp;Dashboard</a>
      <a class="wee" data-content="appform.php"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;Application Form</a>
    <!--DROPDOWN EMPLOYEE-->
            <div class="dropdown">
          <a href="#" onclick="myFunction(event, 'employeesDropdown')" class="dropbtn"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Employees</a>
          <div id="employeesDropdown" class="dropdown-content">
            <a class="wee" data-content="index.php">Admin Dashboard &nbsp;<i class="fa-solid fa-user fa-sm"></i></a>
            <a class="wee" data-content="index.php">Employee Dashboard &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
          </div>
        </div>
        <div class="dropdown">
          <a href="#" onclick="myFunction(event, 'leaveManagementDropdown')" class="dropbtn"><i class="fi fi-rr-house-leave"></i> &nbsp;Leave Management</a>
          <div id="leaveManagementDropdown" class="dropdown-content">
            <a class="wee" data-content="leave.php"><i class="fi fi-rs-form"></i> &nbsp;Leave Form</a>
            <a class="wee" data-content="">Leave Status &nbsp;<i class="fi fi-rs-form"></i></a>
          </div>
        </div>
      <a href="#"><i class="fa-solid fa-sack-dollar fa-sm"></i> &nbsp;Payroll</a>
      
<hr>
          <h2>OTHERS</h2>
      <a ><i class="fa-solid fa-users fa-sm"></i> &nbsp;Account</a>
      <a class="wee" data-content="leaves.php"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;Leave Status</a>
      <a  class="wee" data-content="table-04\index.php" ><i class="fa-solid fa-sack-dollar fa-sm"></i> &nbsp;asd</a>
      <a href="#"><i class="fa-regular fa-calendar-days fa-sm"></i> &nbsp;asd</a>
</div>

<div id="main">
  <!--NAV BAR-->
  <ul class="flex">
    <button class="openbtn" onclick="openNav()">☰</button>
      <li style="font-size: 25px;"><i class="fa-solid fa-circle-h fa-2xl" style="color: #081935;"></i> Human Resource</li>
      <li style="margin-left:auto;"><i class="fa-solid fa-circle-user fa-2xl" style="color: #081935;"></i> Profile</li>
  </ul>
  <hr>
    <div id="page-content-wrapper">
    <div class="content">
      <!-- Content will be loaded from the clicked links using data-content attribute -->
    </div>
  </div>
  </div>
  



  <script>
$(document).ready(function () {
    $(".wee").click(function () {
        var contentToLoad = $(this).data("content");
        $("#page-content-wrapper .content").load(contentToLoad);
    });
});

function openNav() {
    document.getElementById("mySidebar").style.width = "230px";
    document.getElementById("main").style.marginLeft = "230px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function myFunction(event, dropdownId) {
    event.preventDefault(); // Prevent the link from navigating
    var dropdown = document.getElementById(dropdownId);
    var isOpen = dropdown.classList.contains("show");

    if (isOpen) {
        dropdown.classList.remove("show");
    } else {
        dropdown.classList.add("show");
    }
}



  
</script>
</body>
</html>