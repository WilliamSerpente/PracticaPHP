<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD TEST</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <h2>TORNEO DRAGON BALL Z </h2>
    <div class="container mb-5">
    <h3>Participantes:</h3>
    <a class="btn btn-primary" href="" role="button">Agregar Guerrero</a>
    <br>
    <table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Planeta</th>
            <th>Poder</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dbz";

        $connection = new mysqli($servername, $username, $password, $database);
        
        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        $sql = "SELECT * FROM guerreros";
        $result = $connection->query($sql);

        if (!$result){
            die("Invalid query: " . $connection->error);
        }

        while($row = $result->fetch_assoc()){
            echo "
            <tr class='warning'>
            <td>$row[id]</td>
            <td>$row[nombre]</td>
            <td>$row[telefono]</td>
            <td>$row[planeta]</td>
            <td>$row[poder]</td>
            <td>
                <a class='btn btn-primary btn-md' href='?id=$row[id]' >Editar</a>
                <a class='btn btn-danger btn-md' href='?id=$row[id]' >Elimnar</a>
            </td>
 
        </tr>
            ";
        }

        ?>
       
    </tbody>
    </div>
    <table>

    </table>

</body>
</html>
