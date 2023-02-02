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
        <button id="studentBtn" onclick="student()">Student</button>
        <button id="adminBtn" onclick="admin()">Admin</button>

        <a href="chooseProf.php" id="loginBtn" class="btn btn-success" style="display:none;">Login</a>
    </div>

    <script>
        var studbtn = document.getElementById("studentBtn");
        var adBtn = document.getElementById("adminBtn");
        var logBtn = document.getElementById("loginBtn");

        function student(){
            studbtn.style.display = "none";
            adBtn.style.display = "none";
            logBtn.style.display = "block";
        }
    </script>
</body>
</html>