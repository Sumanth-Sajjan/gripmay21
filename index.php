<?php

?>

<html>

<head>
    <title> Basic Banking System Project </title>
    <link rel="shortcut icon" href="images/cm.png">

    <link rel="stylesheet" href="index_button.css">
    <style>
        button {
            background-color: #8cbed6;
        }

        body {
            text-align: center;
        }

        body {
            background-image: url("images/2311977.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .section {
            box-sizing: border-box;
        }


        .column {
            float: left;
            width: 30%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>

<body>

    <div id="header">
        <br>
        <h2 style=" font-family:serif; font-size: 55px;color:#0000ff;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Banking System </h2>
    </div>
    <div id="section">
        <div class="row">
            <div class="column" style="background : transparent;">
              <br>
              <br>
               <img src="images/icon-5359553__340.png" length="150px" width="150px" height="150px">
               <br><br>
                <a href="getdetail.php">
                    <button class="primary_btn" id="button " type="button" href="getdetail.php">View users</button>
                </a>
            </div>
            <div class="column" style="background: transparent;">
              <br>
              <br>
               <img src="images/filename%20(1).jpg" length ="150px" width="150px" height="150px">
               <br>
               <br><br>
                <a href="transfer.php">
                    <button class="primary_btn" id="button" type="button">Credit Transfer</button>
                </a>

            </div>
            <div class="column" style="background :transparent;">
               <br>
               <br>
               <img src="images/transaction-list--v6.png" length ="150px" width="150px" height="150px">
               <br>
               <br>
               <br>
                <a href="transaction.php">
                    <button class="primary_btn" id="button" type="button">All Transaction</button>
                </a>
            </div>
        </div>

    </div>
    <div id="footer">
        <br>
        <p style=" font-family:serif; font-size: 40px;color:#0000ff; color:Black; font-style:italic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> "   It’s our business to know your business. "</strong></p>
    </div>

</body>

</html>
