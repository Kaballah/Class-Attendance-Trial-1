<?php 
    include('../../Multi_Edit/header.php');
    session_start();

    if(isset($_POST['save']))
    { 
        $member_id = $_POST['member_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $middlename = $_POST['middlename'];
        $address = $_POST['address'];
        $checklistSQL = $connect->query("SELECT * FROM email ");

        while($cdata = $checklistSQL->fetch_assoc()) {
            $email = $cdata['email']; 
            $answer = $_POST['answer'];
            $remarks = $_POST['remarks'];
            $insertSQL = $connect->query("INSERT INTO member (email, answer, remarks) VALUES ('$email', '$answer', '$remarks') ");
        }
   }
?>
<body>
<div class="container">
<br>
<br>
<form action="edit.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
		<div class="alert alert-success">
			<h2 style="text-align:center; font-family:cursive;">Java Programming Student's Data</h2>
		</div>
		<thead>
			<tr>
				<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">FirstName</th>
				<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">LastName</th>
				<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">MiddleName</th>
				<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Address</th>
				<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Email</th>
				<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Answer</th>
                <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Remark</th>
                
			</tr>
		</thead>
		<tbody>
		<?php 
			$query = mysqli_query($dbhandle, "SELECT * FROM member")or die(mysql_error());
			while($row = mysqli_fetch_assoc($query)){
			    $id = $row['member_id'];

                $checklistSQL = mysqli_query($dbhandle, "SELECT * FROM member")or die(mysql_error());
                while($cdata = $checklistSQL -> fetch_assoc()) {
                    
                    $email = $cdata['email']; 
		?>

            <tr>
                <td>
                    <?php echo $row['member_id'] ?>
                </td>
                <td>
                    <?php echo $row['firstname'] ?>
                </td>
                <td>
                    <?php echo $row['lastname'] ?>
                </td>
                <td>
                    <?php echo $row['middlename'] ?>
                </td>
                <td>
                    <?php echo $row['address'] ?>
                </td>
                <td>
                    <?php echo $email ?>
                </td>
                <td>
                    <input type="checkbox" name="answer" value="yes" 
                        <?php if(isset ($_POST['yes'])){ echo "Yes";  } ?> 
                    /> Present
                </td>
                <td>
                    <input type="checkbox" name="answer" value="no" <?php if(isset($_POST['no'])) { echo "No"; } ?> /> Absent
                </td>
                <td>
                    <input type="text" name="remarks" class="remarks" placeholder"Remarks"/>
                </td>

		<?php  
	} 
}
	?>						 
		</tbody>
	</table>
	<br />				
	<button class="btn btn-success pull-right" style="font-family:cursive;" name="submit_mult" type="submit">
		Update Data
	</button>
</form>



</div>
</body>
</html>