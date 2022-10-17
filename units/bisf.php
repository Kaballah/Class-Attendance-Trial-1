<html>

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
        tr {
            border-bottom: 1px solid #d96459;
        }
        td {
            border-bottom: 1px solid #d96459;
        }
        table, th, td {
            border: 1px solid black;
        }

    </style>
</head>

<body>  
    <form action="" method="post" enctype="multipart/form-data">  
        <div style="width:200px;border-radius:6px;margin:0px auto">  
            <table border="1">  
                <!-- <tr>  
                    <td colspan="2">Select Technolgy:</td>  
                </tr>  
                <tr>  
                    <td>Present</td>  
                    <td><input type="checkbox" name="techno[]" value="Present"></td>  
                </tr>
                <tr>  
                    <td>Absent</td>  
                    <td><input type="checkbox" name="techno[]" value="Absent"></td>  
                </tr>
                <tr>  
                    <td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td>  
                </tr>   -->

                <!-- <tr>
                    <td><input type='checkbox' name='techno[]' value='Present'>Present</td>
                    <td><input type='checkbox' name='techno[]' value='Absent'>Absent</td>
                </tr> -->
            </table>  
        </div>  
    </form>

    <h2>
        <center>BISF 2202: Java Programming</center>
    </h2>

    <table>
        <colgroup>
            <col span="3" style="background-color: #D6EEEE">
            <col span="2" style="background-color: pink">
        </colgroup>
        <tr>
            <th>SN</th>
            <th>Registration Number</th>
            <th>Student's Name</th>
            <th>Presence</th>
            <th>Reason for Absensia</th>

            <!-- <button type="submit" value="submit" name="sub">Submit</button> -->
            <!-- <input type="submit" value="submit" name="sub"> -->
        </tr>

        <?php  
            if(isset($_POST['sub'])){

                // $host = "localhost"; 
                // $username = "root"; 
                // $word = "";
                // $db_name = "test2";
                // $tbl_name = "cbit_students";

                // $con = mysqli_connect("$host", "$username", "$word", "$db_name") or die("cannot connect");

                // $sql = "SELECT SN, RegNumber, StudentName, Presence, Reason FROM cbit_students";
                // $result = $con -> query($sql);

                // if($result -> num_rows > 0) {
                //     while($row = $result -> fetch_assoc()) {
                //         echo "<tr><td>". $row["SN"]. "<td>". $row["RegNumber"]. "<td>". $row["StudentName"]. "<td>". $row["Presence"]. 'Present' . "<br>". 'Absent' . "<td>". $row["Reason"]. "<td><tr>";
                //     }
                //     echo "</table>";
                // } else {
                //     echo "0 Results";
                // }

                $host = "localhost"; 
                $username = "root"; 
                $word = "";
                $db_name = "test2";
                $tbl_name = "cbit_students";

                $present = "<input type='checkbox' name='techno[]' value='Present'>";
                // $absent = "<input type='checkbox' name='techno[]' value='Absent'>";
                // <tr>
                //     <td><input type='checkbox' name='techno[]' value='Present'>Present</td>
                //     <td><input type='checkbox' name='techno[]' value='Absent'>Absent</td>
                // </tr>

                $con = mysqli_connect("$host", "$username", "$word", "$db_name") or die("cannot connect");

                $sql = "SELECT SN, RegNumber, StudentName, Presence, Reason FROM cbit_students";
                $result = $con -> query($sql);

                if($result -> num_rows > 0) {
                    while($row = $result -> fetch_assoc()) {
                        echo "<tr><td>". $row["SN"]. "<td>". $row["RegNumber"]. "<td>". $row["StudentName"]. "<td>". $present. 'Present' . "<br>" . "<input type=\"checkbox\" name=\"techno[]\" value=\"Absent\">". 'Absent' . "<td>". $row["Reason"]. "<td><tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 Results";
                }

                // try{
                //     $orderNo = $_SESSION['SN'];
                //     $serviceTitle=$_SESSION['RegNumber'];
                //     $price= $_SESSION['StudentName'];    
                //     $quantity= $_POST['Presence'];  
                //     $amount= $_POST['Reason'];
            
                //     for ($i = 0; $i < count($quantity); $i++){
                //         if(!empty($_POST['checkbox'][$i])) {
                //                 $statement = $db_name -> prepare("INSERT INTO cbit_students (SN, RegNumber, StudentName, Presence, Reason) VALUES (?,?,?,?,?)");
                //                 $statement -> execute(array($orderNo,$serviceTitle,$price,$quantity[$i],$amount));
                //         }
                //     }
            
                // // header("location: order_confirm_tech_step1.php");
                // }
                // catch(Exception $e) {
                //     $error_message = $e -> getMessage();
                // }
            }
            
        ?>

        <input type="submit" value="submit" name="sub" style="float: right;">

        <?php

                // $checkbox1 = $_POST["techno"];
                // $chk = "";  
                    
                // foreach($checkbox1 as $chk1) {  
                //     $chk .= $chk1.",";
                // }
                // $in_ch = mysqli_query($con, "insert into cbit_students(Presence) values ('$chk')");

                // if($in_ch == 1) {  
                //     echo '<script> alert("Inserted Successfully") </script>';  
                // } else {  
                //     echo '<script> alert("Failed To Insert") </script>';  
                // }  
            
            
        ?>

        
    </table>
      
</body>  
</html>  