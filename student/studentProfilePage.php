<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accomodation Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/website_icon.png" />
    <link rel="stylesheet" type="text/css" href="../generalStyle1.css?<?=time()?>" />
    <script src="../actions.js?<?= time()?>"></script>

    <script src="https://kit.fontawesome.com/6bed2e30fa.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<!-- default set as admin -->
<body>

    <?php
        include "backendSelectStudent.php";
        include "../backendPermission.php";
        pageStudent();
    ?>

    <div class="top-nav">
        <img src="../img/website_icon.png" style="float:left">

        <a href = "../backendLogout.php" style="float:right;margin:5px ;">Log out</a>
        
        <a href="#">
            <img src="../img/anonymous.jpg" style="float:right;" class="profile-pic" alt="profile" id="curr-user-profile-pic">
        </a>
    </div>

    <div class="container" style="background-color: rgb(204, 234, 244);">

        <div id="side-nav-container" class="side-nav">
            <a href="index.php"><i class="fa-solid fa-house"></i> Dashboard </a>
            <a class = "current" href="studentProfilePage.php"><i class="fa-solid fa-id-card"></i> Profile </a>
            <!-- <a href="collegeStudent.php"><i class="fa-solid fa-building-columns"></i> College</a> -->
            <a href="studentApplication.php"><i class="fa-solid fa-user-tie"></i> Application</a>
        </div>

        <div class="main-body">
            <div class="sub-top-nav">
                <h2>Dashboard</h2>
                <div>
                    <a href="studentMainPage.html" >Dashboard</a> /
                    <a href="studentProfilePage.html" style="color: darkblue;"><b>Profile</b></a>
                </div>
                
            </div>

            <div class="page-info">
                <div class="left">
                    <img src="../img/anonymous.jpg" alt="profile picture" class="profile-page">
                    <p id="userid" style="font-size: 30px;"><?php getStudentName() ?></p>
                    <span id="role" style="color:blue;font-weight:bold;"><?php getRole(); ?></span>
                </div>
        
                <!-- use php to fill in based on id and role-->
                <div class="right">
                    <label style="font-size: 20px;"><b>Profile Account</b></label>
                    <form id="profile" name='profile' method="POST" action="backendUpdateStudent.php" onsubmit="return validateProfile()">

                        <input type='hidden' name='do' value='studentSaveProfile'>

                        <?php loadStudentProfile(); ?>
                      
                        <input type='submit' value='Save' class='blueSubmit'>
                    
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>
</html>