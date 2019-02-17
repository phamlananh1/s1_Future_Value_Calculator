<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        .login{
            height:200px;width:400px;
            margin:0;
            padding: 10px;
            border:1px #CCC solid;
        }
        .login input {
            padding:5px;margin:5px;
        }
    </style>
</head>
<body>
<div class="login">
    <h2>Future Value Calculator</h2>
    <form action="index1.php" method="POST">
        <div id="data">
            <div>
                Investment Amount:
                <input type="text" name="investment" value="0"/>
            </div>
            <div>
                Yearly Interest Rate:
                <input type="text" name="rate" value="0"/>
            </div>
            <div>
                Number of Years:
                <input type="text" name="number" value="0"/>
            </div>
        </div>
        <div id="buttons">

            <input type="submit" value="Calculate"/>
        </div>
    </form>
</div>

</body>
</html>
