<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link rel = "stylesheet" href = "style.css">

    <title>Document</title>
</head>
<body>
    
    <form name="form" action="index1.php" method="post">
        <div class="rate1">
            <button id="clear1" onclick="clearRadioButton1()">—</button>
            <input type="radio" id="star1.5" name="rate1" value="5" required/>
            <label for="star1.5" title="text">5 stars</label>
            <input type="radio" id="star1.4" name="rate1" value="4" />
            <label for="star1.4" title="text">4 stars</label>
            <input type="radio" id="star1.3" name="rate1" value="3" />
            <label for="star1.3" title="text">3 stars</label>
            <input type="radio" id="star1.2" name="rate1" value="2" />
            <label for="star1.2" title="text">2 stars</label>
            <input type="radio" id="star1.1" name="rate1" value="1" />
            <label for="star1.1" title="text">1 star</label>
            <span class="invalid-feedback" id="err1" style="display:none"><?php echo "Please Select"?></span>
        </div>

        <div class="rate2">
            <button id="clear2" onclick="clearRadioButton2()">—</button>
            <input type="radio" id="star2.5" name="rate2" value="5" required/>
            <label for="star2.5" title="text">5 stars</label>
            <input type="radio" id="star2.4" name="rate2" value="4" />
            <label for="star2.4" title="text">4 stars</label>
            <input type="radio" id="star2.3" name="rate2" value="3" />
            <label for="star2.3" title="text">3 stars</label>
            <input type="radio" id="star2.2" name="rate2" value="2" />
            <label for="star2.2" title="text">2 stars</label>
            <input type="radio" id="star2.1" name="rate2" value="1" />
            <label for="star2.1" title="text">1 star</label>
            <span class="invalid-feedback" id="err2" style="display:none"><?php echo "Please Select"?></span>
        </div>

        <div class="rate3">
            <button id="clear3" onclick="clearRadioButton3()">—</button>
            <input type="radio" id="star3.5" name="rate3" value="5" required/>
            <label for="star3.5" title="text">5 stars</label>
            <input type="radio" id="star3.4" name="rate3" value="4" />
            <label for="star3.4" title="text">4 stars</label>
            <input type="radio" id="star3.3" name="rate3" value="3" />
            <label for="star3.3" title="text">3 stars</label>
            <input type="radio" id="star3.2" name="rate3" value="2" />
            <label for="star3.2" title="text">2 stars</label>
            <input type="radio" id="star3.1" name="rate3" value="1" />
            <label for="star3.1" title="text">1 star</label>
            <span class="invalid-feedback" id="err3" style="display:none"><?php echo "Please Select"?></span>
        </div>

        <br><br><br>
        <div style="display:none" id="formButtons">
            <input type="submit" id="submitButton" class="btn btn-success" value="Submit">
            <button type="button" onclick="closeBtn()" style="border-radius: 25px; padding: 0 25px;">Click Me</button>
            <!-- <a href="index.php" id="cancelButton" class="btn btn-danger ml-2">Cancel</a> -->
        </div>
        
    </form>
    
    <button id="submitButton" onclick="checker()">Click Me</button>
    
    <script>

        function checker() {
            var allChecker = "No";
            var errors1 = document.getElementById("err1");
            var errors2 = document.getElementById("err2");
            var errors3 = document.getElementById("err3");
            var checkRadio1 = document.querySelector('input[name="rate1"]:checked');
            var checkRadio2 = document.querySelector('input[name="rate2"]:checked');
            var checkRadio3 = document.querySelector('input[name="rate3"]:checked');

            if(checkRadio1 == null) {
                errors1.style.display = "block";
                errors1.innerHTML = "No one selected";
                allChecker = "No";
            } else {
                errors1.style.display = "none";
                allChecker = "Yes";
            }
            
            if(checkRadio2 == null) {
                errors2.style.display = "block";
                errors2.innerHTML = "No one selected";
                allChecker = "No";
            } else {
                errors2.style.display = "none";
                allChecker = "Yes";
            }
            
            if(checkRadio3 == null) {
                errors3.style.display = "block";
                errors3.innerHTML = "No one selected";
                allChecker = "No";
            } else {
                errors3.style.display = "none";
                allChecker = "Yes";
            }

            if(allChecker == "Yes"){
                document.getElementById("formButtons").style.display = "block";
            } else {
                document.getElementById("formButtons").style.display = "none";
            }
        }

        function closeBtn(){
            document.getElementById("formButtons").style.display = "none";
        }

        function clearRadioButton1(){
            var ele = document.querySelectorAll("input[name=rate1]");
            for(var i=0;i<ele.length;i++){
                ele[i].checked = false;
            }
        }

        function clearRadioButton2(){
            var ele = document.querySelectorAll("input[name=rate2]");
            for(var i=0;i<ele.length;i++){
                ele[i].checked = false;
            }
        }

        function clearRadioButton3(){
            var ele = document.querySelectorAll("input[name=rate3]");
            for(var i=0;i<ele.length;i++){
                ele[i].checked = false;
            }
        }

    </script>

</body>
<!-- 
    document.querySelector('#button').disabled = true; 
-->
    <?php include 'result.php'; ?>
</html>