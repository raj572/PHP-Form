<?php include("connection.php"); ?>
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
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="name">First Name</label>
                <input type="text" class="input" id="name">
            </div>
            <div class="input_field">
                <label for="name">Last Name</label>
                <input type="text" class="input" id="lname">
            </div>
            <div class="input_field">
                <label for="pass">Password</label>
                <input type="password" class="input" id="pass">
            </div>
            <div class="input_field">
                <label for="cpass">Confirm Password</label>
                <input type="password" class="input" id="cpass">
            </div>
            <div class="input_field">
                <label for="gender">Gender</label>
                <div class="custom_select">
                <select id="gender" class="selectbox">
                    <option>SELECT</option>
                    <option>MALE</option>
                    <option>FEMALE</option>
                    <option>OTHER</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" class="input" id="email">
            </div>
            <div class="input_field">
                <label for="phonenumber">Mobile Number</label>
                <input type="text" class="input" id="phonenumber">
            </div>
            <div class="input_field">
                <label for="ad">Address</label>
                <textarea id="ad" class="textarea"></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="register" class="btn">
            </div>
        </div>
    </div>

    </div>
</body>

</html>