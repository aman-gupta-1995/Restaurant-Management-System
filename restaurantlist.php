<?php
session_start();
include('config.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Karls'Mat</title>
    <meta charset="UTF-8">
    <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        th{
            font-size: large;
        }
        td{
           font-size: large;
        }

        body{
            background: url("img/bg2.jpg");height: 100% ;
        }
        .jumbotron{
            background: url("img/bg3.g");
        }
    </style>

    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" />
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Karls'Mat</h1>
        <h2>Restaurant list</h2>
    </div>
    <div class="row" >
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">

            <!--<button class="btn btn-primary btn-lg ">edit</button>-->
            <table class="reference">
                <tbody>
                <tr>
                    <th style="width:30%;">Brand Picture</th>
                    <th style="width:30%;">Restaurant</th>
                    <th style="width:30%;">Description</th>
                    <th style="width:30%;">Status</th>
                    <th style="width:30%;"></th>
                </tr>
               

               <!-- <tr>

               <td>
               </td>

               </tr> -->
               <?php
               $query = "SELECT * FROM list ORDER BY id ASC";
               $result = mysqli_query($conn,$query);
               if (mysqli_num_rows($result) > 0) {
                   while ($row = mysqli_fetch_array($result)) {
                       ?>
                    <tr>
                     <form method="post" action="newmenu.php">
                    <td><img style="width: 140px;"  src="<?php echo $row["r_image"];?>" class="img-rounded"></td>
                    <td><?php echo $row["r_name"];?></td>
                    <td><?php echo $row["r_des"];?></td>
                    <td><?php echo $row["r_status"];?></td>
                    <td> 
                      <input type="submit" name="order" class="btn btn-primary"value= "Order">

                    </td>

                </tr>
                <?php
                   }
               }
?>
               <!--  <tr>
                    <td><img style="width: 140px;"  src="img/cr.jpg" class="img-rounded"></td>
                    <td>Indian food</td>
                    <td>chicken and rice </td>
                    <td>open</td>
                    <td> <label>
                        <input type="checkbox">I want this
                    </label>
                    </td>

                </tr>

                <tr>
                    <td><img style="width: 140px;"  src="img/c1.jpg" class="img-rounded"></td>
                    <td>Swedish Food</td>
                    <td>chicken and rice </td>
                    <td>open</td>
                    <td> <label>
                        <input type="checkbox">I want this
                    </label>
                    </td>

                </tr>
                <div></div>
                <tr>
                    <td><img style="width: 140px;"  src="img/cr2.jpg" class="img-rounded"></td>
                    <td>Macdonald</td>
                    <td>chicken and rice </td>
                    <td>open</td>
                    <td> <label>
                        <input type="checkbox">I want this
                    </label>
                    </td>

                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <!--<td><a href=""><button  class="btn btn-primary btn-lg " >add to shopping cart</button> </a></td>-->
<td></td>
                    <!--<td><a href=""><button  class="btn btn-primary btn-lg ">confirm</button> </a> </td>-->
                </tr> -->


                </tbody></table>
        </div>
    </div>
</div>
</body>
</html>