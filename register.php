<?php

if(isset($_POST['login-submit'])){
    require "database.php";

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $password_confirm = $_POST['Password-confirm'];
    $email = $_POST['Email'];
    $ph_num = $_POST['Number'];
    $age = $_POST['Age'];
    $gender = $_POST['Gender'];
    $address = $_POST['Address'];

    if(empty($username) || empty($password) || empty($password_confirm) ||
       empty($email) || empty($ph_num) ||
       empty($gender)){
            header("Location:/web_tech/register.html?error=emptyfields"
                   ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
            exit();        
       }
    else if(!preg_match("/^[a-zA-Z0-9]*$/" , $username)){
            header("Location:/web_tech/register.html?error=Wrongusername"
                ."&Email=".$email."&Number=".$ph_num);
            exit();
    }

    else if($password != $password_cconfirm){
            header("Location:/web_tech/register.html?error=PasswordsDontMatch"
            ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
            exit(); 
    }
    else{
        $sql_search_username = "SELECT username FROM table_test WHERE username=?";
        $statement = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt,$sql_search_username)){
            echo "SQL ERROR!";
        }
        else{
            mysqli_stmt_bind_param($statement,"s" ,$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location:/web_tech/register.html?error=UsernameTaken"
                    ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
            exit(); 
            }
            else{
                $sql_search_username = "INSERT INTO table_test (username,email,pwd,
                                                                ph_num,AGE,gender,home_add) VALUES (?,?,?,?,?,?,?)";
            }
        }
    }
}

else{
    echo "<h1 align = 'center'>STOP SNEAKING INTO THE BANK!</h1>";
}

?>