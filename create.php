<?php
include("config_connection.php");
if (isUserConnected()){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MClub Login</title>
    <style>
        .mbody {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200%;
        }
        header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
        margin: 0;
    }
    
    </style>
    <link rel="stylesheet" href="loginandcreate.css">
    </style>
</head>
<body>
<header>
        <h1>MClub</h1>
    </header>
    <div class="mbody">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Create account</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="Fisrt Name*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" class="form-control" placeholder="Last Name*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="Phone*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age*" value="" />
                        </div>

                        <div class="form-group">
                        <select class="form-control" name="school" aria-label="Default select example">
                        <option selected>School*</option>
                        <?php
                        $res = getSchools($conn);
                        
                        foreach ($res as $school){
                            echo '<option value="'.$school.'">'.$school.'</option>';
                        }
                        ?>
                        </select>
                        </div>

                        <div class="form-group">
                            <input type="number" name="schooll" class="form-control" placeholder="School level*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="schoolb" class="form-control" placeholder="School branch" value="" />
                        </div>
                        <div class="form-group">

                        <select class="form-control" name="schoolc" aria-label="Default select example">
                        <option selected>School City*</option>
                        <?php
                        $res = getCities($conn);
                        
                        foreach ($res as $city){
                            echo '<option value="'.$city.'">'.$city.'</option>';
                        }
                        ?>
                        </select>

                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="cpassword" class="form-control" placeholder="Comfirm Password*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnSubmit" value="Create" />
                        </div>
                        <div class="form-group">
                            <p>Have an account already?</p>
                            <a href="/Project/login.php" class="ForgetPwd">log in now</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Welcome</h3>
                    <div style="color:#fff;">
                        <p>
                        The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: “Client”, “You” and “Your” refers to you, the person accessing this website and accepting the Company’s terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves, or either the Client or ourselves.
                        </p><br><p>
                        All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services/products, in accordance with and subject to, prevailing law of . . .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
</html>
<?php
    if (isset($_POST["submit"])){
        include("Controller.php");

        $fname = (string)$_POST["fname"];
        $lname = (string)$_POST["lname"];
        $email = (string)$_POST["email"];
        $phone = (int)$_POST["phone"];
        $age = (int)$_POST["age"];
        $school = (string)$_POST["school"];
        $schooll = (int)$_POST["schooll"];
        $schoolb = (string)$_POST["schoolb"];
        $schoolc = (string)$_POST["schoolc"];
        $password = (string)$_POST["password"];
        $cpassword = (string)$_POST["cpassword"];
        /*
        createAccount($conn,
        $fname,
        $lname,
        $email,
        $phone,
        $age,
        $school,
        $schooll,
        $schoolb,
        $schoolc,
        $password,
        $cpassword
        );
        */
        require_once 'Student.php';
        require_once 'Controller.php';
        $student = new Student(
            (string)$_POST["fname"],
            (string)$_POST["lname"],
            (string)$_POST["email"],
            (int)$_POST["phone"],
            (int)$_POST["age"],
            (string)$_POST["school"],
            (int)$_POST["schooll"],
            (string)$_POST["schoolb"],
            (string)$_POST["schoolc"],
            (string)$_POST["password"]
        );
        $controller = new Controller();
        $controller->createStudent($student);


    }
    
?>