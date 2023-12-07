<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color: #d071f9;
            }
            table{
                background-color: aliceblue;
            }
        </style>
    </head>

<?php
include "connection.php";
$query = "select * from form_table";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total != 0)
{
    ?>
    <h2 align="center"><mark> Displaying all records </mark></h2>
    <table border="1" cellspacing="7" align="center">
    <tr>
        <th width="5%">ID</th>
        <th width="7%">First Name</th>
        <th width="7%">Last Name</th>
        <th width="5%">Gender</th>
        <th width="23%">Address</th>
        <th width="10%">Phone</th>
        <th width="25%">Email</th>
        <th width="15%">Operations</th>
    </tr>
    
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['address']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['email']."</td>

            <td><a href='update_design.php?id=$result[id]'>Update</a></td>
        </tr>";
    }
    
}
else
{
    echo "No records found";
}

?>
</table>
</html>