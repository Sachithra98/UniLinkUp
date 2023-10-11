
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Management of Moderator</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sty.css">

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sty.css">
   <!-- <link rel ="stylesheet" href="Plugin/bootstrap.min.css">
   <link rel="stylesheet" href="css/index.css"> -->

   <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
           
            background-color: #eee;
            margin-top: 30px; 
        }

        .main-content .container h1{
            text-align: center;
            text-decoration: underline;
        }

        .main-content .back .btn{
            margin-left: 180px;

        }
        

    </style>

</head>
<body>
   
<!-- header section starts  -->

<?php
require_once"header.php";
?>
<?php
require_once"taskbar.php";
?>


<!-- header section ends -->


<div class="main-content">
    <div class="back" >
        <a href="<?=url('admin')?>" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>
<div class="container">
    <h1>User Management of Moderator</h1>
    <table class="table table-boarder">
        <thead>
            <tr>
                <th> No  </th>
                <th> Name  </th>
                <th> Email  </th>
                <th> Post  </th>
                <th> Registered Date  </th>
                <th> Action  </th>
            </tr>
        </thead>
        <tbody>
            <!-----------connect with database------------>
        <?php
        $c=1;
        $con=mysqli_connect("localhost","root","","uni_db"); 
        if ($con) {
            // echo "Connection Done";
        }else{
            echo "connection Failed";
        }      
        
        ////select query start here////
        $sel="SELECT * FROM tbl_user ";
        $query=$con->query($sel);
        while($row=$query->fetch_assoc()){

         
        ?>
            <tr><td><?php echo $c++;?> </td>
                <td><?php echo $row['Name'];?> </td>
                <td><?php echo $row['Email'];?> </td>
                <td><?php echo $row['Post'];?> </td>
                <td><?php echo $row['Reg_Date'];?> </td>
                <td>
                <a href="" class="btn btn-success">View</a>
                <a href="" class="btn btn-danger">Remove</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
</div>

<!-- footer section starts  -->

<?php include 'footer.php'; ?>

<!-- footer section ends -->

</body>
</html>