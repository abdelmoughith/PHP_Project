<?php
    $db_server = "localhost:3306";
    $db_user = "root";
    $db_pass = "12345";
    $db_name = "mclub";
    session_start();

    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
    function getSchools($conn){
        $sql = "SELECT * FROM SCHOOLS;";
        $result = mysqli_query($conn, $sql);
        $list = [];
        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $list[] = $row["name"];
            }
        }
        return $list;
    }
    function getCities($conn){
        $sql = "SELECT * FROM cities;";
        $result = mysqli_query($conn, $sql);
        $list = [];
        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $list[] = $row["city"];
            }
        }
        return $list;
    }
    function createAccount($conn, $fname, $lname, $email, $phone, $age, $school, $level, $branch, $city, $password,$cpassword){
        if (strcmp($password, $cpassword) != 0){
            return false;
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO 
        students(fname, lname, email, phone, age, school, level, branch, city, password)
        VALUES
        ('$fname', '$lname', '$email', '$phone', '$age', '$school', '$level', '$branch', '$city', '$hashed_password');";
        mysqli_query($conn, $sql);
        return true;
    }

    function connectUser($conn, $email, $password){
        $sql = "SELECT * FROM students
                WHERE email = '$email';";
        
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $hash = $row["password"];
        if (password_verify($password, $hash)){
            
            foreach ($row as $key => $value) {
                $_SESSION[$key] = $value;
            }
            header('Location: index.php');
        }
    }
    function isUserConnected() {
        return isset($_SESSION['id']);
    }
?>