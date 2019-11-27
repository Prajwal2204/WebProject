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
    $balance = 0;


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

    else if($password != $password_confirm){
            header("Location:/web_tech/register.html?error=PasswordsDontMatch"
            ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
            exit(); 
    }
    else{
        $sql_search_username = "SELECT username FROM table_test_balance WHERE username=?";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt,$sql_search_username)){
            echo "SQL ERROR!";
        }
        else{
            mysqli_stmt_bind_param($stmt,"s" ,$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location:/web_tech/register.html?error=UsernameTaken"
                    ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
            exit(); 
            }
            else{
                $sql_insert = "INSERT INTO table_test_balance (username,email,pwd,ph_num,AGE,gender,home_add,balance) VALUES (?,?,?,?,?,?,?,?)";
                $statement = mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($statement,$sql_insert)){
                    echo "DATABASE ENTRY ERROR !";
                    exit();
                }   
                else{
                    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($statement,"sssiissi" ,$username,$email,$password,$ph_num,$age,$gender,$address,$balance);
                    mysqli_stmt_execute($statement);
                    mysqli_stmt_store_result($statment);
                    header("Location:/web_tech/login.html?signup=SUCCESS");
                    exit(); 
                }                            

            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($statement);
    mysqli_close($connect);

}

else{
    echo "<h1 align = 'center'>STOP SNEAKING INTO THE BANK!</h1>";
}

?>
