<?php 

$host="localhost";
$user="root";
$password="";
$db="users";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user_list where User='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
	if(mysql_num_rows($result)==1)
	{		
		header('Location: welcome.html');
		exit();

    }
    else{
	echo '<script type="text/javascript">';
	echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
	echo '</script>';
		exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form-v8 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v8">
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="images/form-v8.jpg" alt="form">
            </div>
            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Admin</button>
                    </div>
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-in')">Non-Admin</button>
                    </div>
                </div>
                <form class="form-detail" action="#" method="post">
                    <div class="tabcontent" id="sign-up">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="username" id="full_name" class="input-text" required>
                                <span class="label">Username</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password" id="password" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Sign In">
                        </div>
                    </div>
                </form>
                <form class="form-detail" action="#" method="post">
                    <div class="tabcontent" id="sign-in">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="full_name_1" id="full_name_1" class="input-text" required>
                                <span class="label">Roll Number</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Sign In">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>