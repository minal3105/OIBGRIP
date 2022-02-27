<?php
include "connection.php";
$sql1="select * from todo";
$result1=mysqli_query($con,$sql1);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    
    
    <style>
        #section1
        {
            padding-top:100px;
            background-image:url("3.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            height:100%;
        }
        input{
            width:100%;
        }
        textarea{
            width:100%;
            border:2px solid black;
        }
        .btn{
   
            text-align:center;
            padding-bottom:5px;
        }

        td,th{
            padding:15px 100px 2px 5px;
            margin:40px;
            border:1px solid black;
            text-align:center;
        }
        table{
            text-align:center;
            border:1px solid black;
    
        }
        .title{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-shadow:10px 10px whitesmoke;
            
        }

</style>
</head>
<body>
<h1 class="text-center title">To-Do-App</h1>
    <section id="section1">
        <header>
        
                
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row row-style">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form action="db.php" method="post">
                                            
                                            <input type="text"class="input-lg"name="first"placeholder="title"required>
                                            <br>
                                            <br>
                                            <textarea name="second" id="unique" cols="35" rows="10"placeholder="Description"required></textarea>
                                            <button class="btn btn-block btn-success"name="s1">Save</button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <?php
                        if(mysqli_num_rows($result1)>0)?>
                        
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                                <?php
                                $i=1;
                                while($row=mysqli_fetch_array($result1))
                                {
                                ?>
                                <tr>
                                    <td> <?php echo $i; ?> </td>
                                    <td><?php echo $row["title"];?></td>
                                    <td><?php echo $row["description"];?></td>
                                    <!-- <form method="post"action="db2.php">
                                        <td><Button class="btn btn-danger"name="btn">DELETE</button></td>
                                    </form> -->

                                    <td class="delete"> 
                                        <a href="db2.php?del_task=<?php echo $row['id'] ?>"><Button class="btn btn-danger"name="btn">DELETE</button></a> 
                                    </td> 

                                </tr>
                               
                                <?php
                                $i++;
                                }
                                ?>
                            </table>
                        
                    </div>
                </div>
            </div>
        </header>
    </section>

</body>
</html>