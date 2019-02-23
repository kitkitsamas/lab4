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
                <a class="nav-link" href="datafilecsv.csv" download="">Download<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="tableview.php">Tableview<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<table class= "table">
        <thead>
            <tbody>
                <?php
                    $file = fopen("datafile.csv","r");
                    while (($data = fgetcsv($file, 0, ",")) !== FALSE){
                        echo "<tr>";
                        echo "<td>".$data[0]."</td>";
                        echo "<td>".$data[1]."</td>";
                        echo "<tr>";
                    }
                    fclose($file);
                ?>
            </tbody>
        </thead>
    </table>
    <?php
        $file = fopen("datafile.csv","r");
        $total =0;
        while (($data = fgetcsv($file, 0, ",")) !== FALSE){
            $total += intval($data[1]);
        }
        fclose($file);
        echo "Total is :". $total;
    ?>


</body>
</html>