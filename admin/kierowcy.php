<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel VDL - Kierowcy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Panel VDL</a>
            </div>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Panel</a>
                    </li>
                    <li>
                        <a href="csv.php"><i class="fa fa-fw fa-bar-chart-o"></i> Excel</a>
                    </li>
                    <li class="active">
                        <a href="kierowcy.php"><i class="fa fa-fw fa-table"></i> Kierowcy</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kierowcy
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Panel</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Kierowcy
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Lista kierowców</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">

                              <?php
                              //save to database strip slashes
                              $servername = "localhost";
                              $username = "root";
                              $password = "monitor";
                              $dbname = "vdl";

                              // Create connection
                              $conn = new mysqli($servername, $username, $password, $dbname);

                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }

                              $sql = "SELECT * FROM form";
                              $result = $conn->query($sql);

                              ?>
                              	<table class="table table-hover"><thead>
                              	<tr><th>Id</th><th>Data zgłoszenia</th><th>Imię</th><th>Nazwisko</th><th>Nazwa firmy</th><th>Miasto</th><th>Ulica</th><th>Nr Domu</th><th>Kod Pocztowy</th><th>Telefon</th><th>Email</th><th>Wynik</th><th>Dystans</th><th>Nr. rejestracyjny</th><th>Nr. vin</th><th>Data</th><th>Ilość</th><th>Trasa</th><th>Typ autobusu</th><th>Rozmiar</th><th>Zdjęcie</th></tr>
                              </thead>
                              <tbody>
                              <?php
                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                              	echo "<tr><td>" . $row["id"]. "</td><td>" . $row["dateposted"]. "</td><td>" . $row["imie"]. "</td><td>" . $row["nazwisko"]. "</td><td>" . $row["nazwafirmy"]. "</td><td>" . $row["miasto"]. "</td><td>" .$row["ulica"]. "</td><td>"
                                .$row["nrdomu"]. "</td><td>" .$row["kodpocztowy"]. "</td><td>" . $row["telefon"]. "</td><td>" . $row["email"]. "</td><td>" . $row["wynik"]. "</td><td>" . $row["dystans"]. "</td><td>" . $row["nrrej"]. "</td><td>" . $row["nrvin"]. "</td><td>" . $row["data"]. "</td><td>" . $row["ilosc"]. "</td><td>" . $row["trasa"]. "</td><td>" . $row["typautobusu"]. "</td><td>" . $row["rozmiar"]. "</td><td><a href=\"../uploaded/".$row["plik"]."\">Zdjęcie</a></td></tr>";
                                  }
                              }
                                $conn->close();
                              ?>
                            </tbody>
                              	</table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
