<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    
    <style>
           .table-box{
                margin: 50px auto
            }
            .table-row{
                display: table;
                width: 100%;
                margin: 10px auto;
                background: transparent;
                padding : 12px 0;
                color: #555;
                font-size: 13px;
                box-shadow: 0 1px 4px 0 rgba(0,0,50,0.3);
                
            }
            .table-cell{
                display: table-cell;
                width: 10%;
                text-align: center;
                padding: 4px 0;
                border-right: 1px solid #d6d4d4;
                vertical-align: middle;
                
                
            }
        </style>
</head>

<body style="background: fixed;">


	<div class="container">
            <center><h2 >Transaction History</h2></center>
        
       <br>
       <table> <thead>  <div class="table-box">
            <div class="table-row">
                <div class="table-cell">
                    <b> Id</b></div>
                
                
                <div class="table-cell">
                    <b>Sender</b></div>
                <div class="table-cell">
                    <b>Receiver</b></div>
                
            <div class="table-cell">
                    <b>Amount</b></div>
                <div class="table-cell">
                    <b>Date Time</b></div></div>
       </div></thead>
            
        <tbody>
        <?php

            include 'connect.php';

            $sql ="select * from transaction";

            $query =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <div class="table-row">
                <div class="table-cell"> <?php echo $rows['sno']; ?></div>
                <div class="table-cell"><?php echo $rows['sender']; ?></div>
                <div class="table-cell"><?php echo $rows['receiver']; ?></div>
                <div class="table-cell"><?php echo $rows['amount']; ?> </div>
                <div class="table-cell"><?php echo $rows['datetime']; ?> </div></div>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>

</body>
</html>