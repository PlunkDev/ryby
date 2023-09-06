<?php
$servername = "localhost";
$database = "wedkowanie";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    print("Działam");
  }


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami!</h2>
    </div>
    <div id="lewy">
        <img src="ryba2.jpg" alt="Szczupak">
    </div>
    <div id="prawy">
        <h3> „Ryby spokojnego żeru (białe)</h3>
            <?php
            $query = 'SELECT * FROM ryby';

            if ($result = $conn->query($query)) {
            
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $nazwa = $row["nazwa"];
                    $wystepowanie = $row["wystepowanie"];
          
                    echo "<p>".$id.". ".$nazwa.", występuje w: ".$wystepowanie."</p>";
                }
            
                mysqli_close($conn);
            }
            ?>
        <ol>
            <li><a href="https://wedkuje.pl">Odwiedź także</a></li>
            <li><a href="http://www.pzw.org.pl/">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    <div id="stopka">
        <p>PESEL: 00000000000</p>
    </div>
</body>
</html>