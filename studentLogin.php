<?php
require_once "config.php";

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $userSrCode = $_POST['srcode'];
    $userPassword = $_POST['pword'];  

    function verifyUser() {
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $userSrCode = $GLOBALS['userSrCode'];
        $userPassword = $GLOBALS['userPassword'];
        
        $sqluser = "SELECT srcode FROM studentsinfotbl WHERE srcode='$userSrCode'";
        $sqluserpass = "SELECT password FROM studentsinfotbl WHERE srcode='$userSrCode'";

        $result1 = mysqli_query($link, $sqluser);
        $result2 = mysqli_query($link, $sqluserpass);

        $row1 = mysqli_fetch_assoc($result1);
        $row2 = mysqli_fetch_assoc($result2);

        if(($row1 == NULL)){
            echo "<script> alert('User does not exist'); </script>";
        } else {
            if($row2['password'] == $userPassword){
                $_SESSION["sesSrcode"] = $userSrCode;
                header("location: chooseProf.php");
            } else {
                echo "<script> alert('Srcode and Pass does not match'); </script>";
            }
        }

    } verifyUser();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <div class="center">
        <div id="loginFields">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="srcode">SR CODE:</label>
                <input type="text" id="sr-code" name="srcode" required> 
                
                <label for="pword">PASSWORD:</label>
                <input type="text" id="pass-word" name="pword" required>

                <input type="submit" id="loginBtn" class="btn btn-success" value="Login">
            </form> 
        </div>
    </div>

    <script>
        var studbtn = document.getElementById("studentBtn");
        var adBtn = document.getElementById("adminBtn");
        var logBtn = document.getElementById("loginBtn");
        var fields = document.getElementById("loginFields");

        function student(){
            studbtn.style.display = "none";
            adBtn.style.display = "none";
            logBtn.style.display = "block";
            fields.style.display = "block";
        }
    </script>
</body>
</html>