<?php
if(isset($_POST['submit'])){
    $menu = $_POST['menu'];
    $price = $_POST['price'];

    $file = fopen("datafile.csv",'a');
    $add_row = "\n".$menu.",".$price;
    fwrite($file,$add_row);
    fclose($file);
}
?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Lab04</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body style="background-image: url('') ; background-position: center; background-repeat: no-repeat; background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" style="color: white">MENU</a>
    <a class="navbar-brand" href="index.php">Eat Record</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="datafile.csv" download="">Download<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="tableview.php">Tableview<span class="sr-only">(current)</span></a>
            </li>
        </ul>

        
    </div>

</nav>


    <meta charset="UTF-8">
    <title>Lab4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="head">Eat Record</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="uname1">Menu</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="menu" id="id" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="uname1">Price</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="price" id="firstname" required="">
                                    </div>
                                    <button type="submit" id="submit" name="submit" class="btn btn-success btn-lg float-right">Submit</button>
                                </form>
                                    <div class="form-group">
                                    <input type="file" name="file" id="file" class="input-large">
                                    </div>
                                    <button type="submit" id="import" name="import" class="btn btn-success btn-lg float-right" data-loading-text="Loading...">Import</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        $('#datepicker').datepicker();
    </script></div>



</body></html>