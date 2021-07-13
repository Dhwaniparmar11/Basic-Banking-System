<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>
        <link rel="stylesheet" href="newcss.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/createuser.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">

        
      
    </head>
    <body>
        <?php
    include 'connect.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $amount=$_POST['amount'];
    $sql="insert into customers(name,email,amount) values('{$name}','{$email}','{$amount}')";
    $result=mysqli_query($con,$sql);
    if($result){
               echo "<script> alert('Customer created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>


        
        <div class="main">
            
            <center><h2 style="padding: 10px; margin: 15px; ">Create Customer</h2></center>
            <div class="Customer">
                
                <form id="register" class="app-form" method="post">
                    
                    <label>
                        Name:</label>
                    <br>
                    <input type="text" name="name" placeholder="Enter your full name"><br><br>
               <label>
                        Email:</label>
                    <br>
                    <input type="email" name="email" placeholder="Enter your Email"><br><br>
                      <label>
                        Amount:</label>
                    <br>
                    <input  type="number" name="amount" placeholder="Enter Amount"><br><br>
                      
                    <input  type="submit" name="submit"><br><br>
                    
             
                </form>
            </div>
        </div>   
    </body>
</html>
