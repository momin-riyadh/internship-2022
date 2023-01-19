<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>table</title>
</head>
<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Password</th>
    </tr>

    <?php
    $conn = mysqli_connect("localhost","root","","test");
    if($conn->connect_error){
      die("Connection Failed:".$conn->conect_error);
    }

    $sql = "SELECT id, name, password from test";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["password"]."</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 results";
    }

    $conn->close();
    ?>
  </table>
</body>
</html>
