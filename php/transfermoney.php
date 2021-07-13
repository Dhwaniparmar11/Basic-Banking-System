<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
     
    
       .table-box{
                margin: 10px;
                
                width: 100%;
                
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
                text-align: center;
                width: 450px;
                
                padding: 10px;
                border-right: 1px  #d6d4d4;
                vertical-align: middle;
                
                
            }  
            h3{
                padding: 20px;
            }
      
    </style>
</head>

<body style="background: fixed;">
<?php
    include "connect.php";
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($con,$sql);
?>


        <center><h3>
    Transfer Money
    </h3>
</center>
    <div class="container" style="display: flex; align-content: stretch ">
   
        <br>
            
                    <div class="table-box">
                    <table >
                       <tbody> 
                        <div class="row">
                            <div class="table-cell"><b>Id</b></div>
                            <div class="table-cell"><b>Name</b></div>
                            <div class="table-cell"><b>E-Mail</b></div>
                            <div class="table-cell"><b>Balance</b></div>
                            <div class="table-cell"> <b>Operation</b></div>
                        </div>
                       </tbody>
                                                
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                        <div class="row">
                        <div class="table-cell" ><?php echo $rows['id'] ?></div>
                        <div class="table-cell" ><?php echo $rows['name']?></div>
                        <div class="table-cell" ><?php echo $rows['email']?></div>
                        <div class="table-cell" ><?php echo $rows['amount']?></div>
                         <div class="table-cell" ><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>">
                                 <button type="button" class="btn" style="background-color : #A569BD;">Transact</button></a></div> 
                        </div>
                <?php
                    }
                ?>
            
                        
                    </table>
                    </div>
              
         </div>
         </body>
</html>