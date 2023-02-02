<?php

$answer1 = $_POST['rate1'];
$answer2 = $_POST['rate2'];
$answer3 = $_POST['rate3'];

$answer1 = (int)$answer1;
$answer2 = (int)$answer2;
$answer3 = (int)$answer3;

?>

<script>
    var rates1 = "<?php echo $answer1; ?>"; 
    var rates2 = "<?php echo $answer2; ?>"; 
    var rates3 = "<?php echo $answer3; ?>"; 
</script>

<py-script>
    from js import rates1, rates2, rates3
</py-script>

<py-config>
    packages = ["numpy", "pandas", "seaborn", 'scikit-learn']
</py-config>

<py-script>
    import numpy as np
    import pandas as pd
    import seaborn
    import io

    from sklearn.linear_model import LogisticRegression
    from sklearn.model_selection import train_test_split, GridSearchCV
    from sklearn.tree import DecisionTreeClassifier

    from pyodide.http import open_url
      
    url = (
        "https://raw.githubusercontent.com/CJQuides/MyThesisss/main/rates.csv"
    )

    df = pd.read_csv(open_url(url))

    import warnings

    import contextlib

    with contextlib.redirect_stdout(None):
        print("Hello Road 0")

        episodes = np.array([10, 12, 16])

        print(episodes)

        print(df)

        print("Hello Road 1")

        X = df.drop('result', axis=1)
        y = df['result']
            
        X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 42)
            
        print(X_test)

        print("Hello Road 2")

        params = {'max_leaf_nodes':list(range(2,100)), 'min_samples_split':[1,2,3,4,5,6,7,8,9]}

        gridCV = GridSearchCV(DecisionTreeClassifier(random_state = 42), params, verbose = 2,cv = 3)

        print("Hello Road 3")

        with warnings.catch_warnings(record=True):
            gridCV.fit(X_train, y_train)

        print("Hello Road 4")

        gridCV.best_params_

        y_pred = gridCV.predict(X_test)

        print(y_pred)

        print("Hello Road 5")

        nd = pd.DataFrame({'rate1':[rates1],'rate2':[rates2],'rate3':[rates3]})
                    
        print(nd)

        print("Hello Road 6")

        My_pred = gridCV.predict(nd)
  
    print(nd)
    
    print(My_pred[0])

    predictions1 = My_pred[0]
    
    print("Hello Road 7")

</py-script>

<script>
    /* window.onload = function(){
        trys = pyscript.runtime.globals.get('predictions1');
        document.getElementById("predJs").style.display = "none";
        document.getElementById("predJs").value = trys;
        document.getElementById("rate1Js").style.display = "none";
        document.getElementById("rate2Js").style.display = "none";
        document.getElementById("rate3Js").style.display = "none";
        var button = document.getElementById('clickButton');
        button.form.submit();
    } */
    function dolang() {
        trys = pyscript.runtime.globals.get('predictions1');
        document.getElementById("predJs").style.display = "none";
        document.getElementById("predJs").value = trys;
        document.getElementById("rate1Js").style.display = "none";
        document.getElementById("rate2Js").style.display = "none";
        document.getElementById("rate3Js").style.display = "none";
    }
    setTimeout(dolang,10000);
</script>

<form action="form.php" method="post">
    <input id="predJs" type="text" placeholder="Enter Data" name="sendPred" value="<script>document.writeln(trys)</script>">
    <input id="rate1Js" type="text" placeholder="Enter Data" name="sendRate1" value="<?php echo $answer1; ?>">
    <input id="rate2Js" type="text" placeholder="Enter Data" name="sendRate2" value="<?php echo $answer2; ?>">
    <input id="rate3Js" type="text" placeholder="Enter Data" name="sendRate3" value="<?php echo $answer3; ?>">
    <input type="submit" value="Submit" id="clickButton">
</form> 

<!-- MANGGAGALING DITO IPAPASA KO SA result.php -->

<!-- 
<script>
    /* 
    alert("trys"); */
    var trysLang = "Tryng";

    function doThis() {
        var trys = pyscript.runtime.globals.get('predictions1');
        alert(trys);
    }
    
    setTimeout(doThis,10000);
</script>

<?php $preds = "<script>document.writeln(trys)</script>"; ?>
    
<button onclick="dothis()">click</button> -->


<!-- 
<script>
    
    alert("trys");

    function dolang() {
        trys = pyscript.runtime.globals.get('predictions1');
    }

    function dothis() {
        dolang();
        alert(trys);
    }

    setTimeout(dolang,10000);
</script>
    
<button onclick="dothis()">click</button> -->