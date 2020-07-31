<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <title>Mpesa Api form</title>
    <style type = "text/css" >
        .form-style {
            font: 95% Arial, Helvetica, sans-serif;
            max-width: 400px;
            margin: 10px auto;
            padding: 16px;
            background: #F7F7F7;
            
        }

        .form-style h1 {
            background: #43D1AF;
            padding: 20px 0;
            font-size: 140%;
            font-weight: 300;
            text-align: center;
            color: #fff;
            margin: -16px -16px 16px -16px;
        }

        .form-style label,

        .form-style input[type="number"],

        .form-style select {
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            background: #fff;
            margin-bottom: 4%;
            border: 1px solid #ccc;
            padding: 3%;
            color: #555;
            font: 95% Arial, Helvetica, sans-serif;
        }

        .form-style input[type="text"]:focus,

        .form-style input[type="number"]:focus,

        .form-style textarea:focus,
        .form-style select:focus {
            box-shadow: 0 0 5px #43D1AF;
            padding: 3%;
            border: 1px solid #43D1AF;
        }

        .form-style input[type="submit"],
        .form-style input[type="button"] {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 3%;
            background: #43D1AF;
            border-bottom: 2px solid #30C29E;
            border-top-style: none;
            border-right-style: none;
            border-left-style: none;
            color: #fff;
        }

        .form-style input[type="submit"]:hover,
        .form-style input[type="button"]:hover {
            background: #2EBC99;
        }

    </style>
</head>
<body>
<br><br><br>
<form action="mpesa.php" method="post" >
    <div class="form-style">
        <h1>Make Your Payment here</h1>
        <form>
            <center><label>Amount Payable for Permit Registration is <span style="color: red;">Ksh.1</span></label></center><br><br>
            <input type="number" name="phone" placeholder="Phone (07********)" required="required" title="Enter Phone number" />
            <input type="hidden" name="amount" value="1" required="required" title="Enter Amount" />
           <input type="submit" value="Send" />
        </form>
    </div>
</form><br><br><br><br>

<?php include('../footer.php'); ?>
</body>
</html>