<?php include("connection.php");

$id = $_GET['id'];

$query = "select * from form_table where id = '$id'";
$data = mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Update Student Details
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="name">First Name</label>
                    <input type="text" value="<?php echo $result['fname']; ?>" name="fname" class="input" id="name" required>
                </div>
                <div class="input_field">
                    <label for="name">Last Name</label>
                    <input type="text" name="lname" class="input" id="lname" required value="<?php echo $result['lname']; ?>">
                </div>
                <div class="input_field">
                    <label for="pass">Password</label>
                    <input type="password" name="password" class="input" id="pass" value="<?php echo $result['password']; ?>" required>
                </div>
                <div class="input_field">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" class="input" name="cpassword" value="<?php echo $result['cpassword']; ?>" id="cpass" required>
                </div>
                <div class="input_field">
                    <label for="gender">Gender</label>
                    <div class="custom_select">
                        <select name="gender" required >
                            <option value="">SELECT</option>
                            <option value="male">MALE</option>
                            <option value="female">FEMALE</option>
                            <option value="other">OTHER</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="input" value="<?php echo $result['email']; ?>" id="email" required>
                </div>
                <div class="input_field">
                    <label for="phonenumber">Mobile Number</label>
                    <input type="text" name="phone" class="input" value="<?php echo $result['phone']; ?>" id="phonenumber" required>
                </div>
                <div class="input_field">
                    <label for="ad">Address</label>
                    <textarea id="ad" name="address" class="textarea" required><?php echo $result['address']; ?></textarea>
                </div>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>
                <div class="input_field">
                    <input type="submit" value="register" name="register" class="btn">
                </div>
            </div>
    </div>
    </form>

    </div>
</body>

</html>

<?php
if ($_POST['register']) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];

        $query = "INSERT INTO form_table (fname, lname, password, cpassword, gender, phone, address, email) VALUES ('$fname', '$lname', '$password', '$cpassword', '$gender','$phone', '$address', '$email')";

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Data Inserted into Database";
        } else {
            echo "Failed : ";
        }
}
?>