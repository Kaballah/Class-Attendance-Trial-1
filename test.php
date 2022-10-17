<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #d96459;
            color: white;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Staff ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>School</th>
        </tr>

        <?php
            $conn = mysqli_connect("localhost", "root", "", "test2");

            if($conn -> connect_error) {
                die("Connection Failed: ". $conn -> connect_error);
            }

            $sql = "SELECT Staff_ID, FirstName, LastName, Email, School FROM lecturers";
            $result = $conn -> query($sql);

            if($result -> num_rows > 0) {
                while($row = $result -> fetch_assoc()) {
                    echo "<tr><td>". $row["Staff_ID"]. "<td><td>". $row["FirstName"]. "<td><td>". $row["LastName"]. "<td><td>". $row["Email"]. "<td><td>". $row["School"]. "<tr><td>";
                }
                echo "</table>";
            } else {
                echo "0 Results";
            }

            $conn -> close();
        ?>

    </table>
    
</body>
</html>