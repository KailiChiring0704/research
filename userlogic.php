<?php
    include("userfunction.php");
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from user where name = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("location:WELCOME.php");
        }
        else {
            echo '<script>
                window.location.href = "users.php";
                alert("Login failed. Invalid username or password!!!")
            </script>';    
                
        }       

    }
?>
