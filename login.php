<?php

if(isset($_POST['login-submit']))
{
    require "database.php";

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if(empty($username) || empty($password))
    {
        header("Location:/web_tech/login.html?error=EmptyFields"
        ."&Username=".$username."&Email=".$email);
        exit();
    }
    else
    {
        $sql_search_username = "SELECT * FROM table_test_balance WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt,$sql_search_username))
        {
            echo "SQL ERROR!";
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ss" ,$username,$password);
            mysqli_stmt_execute($stmt);
            $resultCheck = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($resultCheck))
            {
                $passwordFlag = password_verify($password , $row['pwd']);
                if($passwordFlag == False)
                {
                    header("Location:/web_tech/login.html?error=username/passwordWrong1"
                    ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
                }  
                else
                {
                    
                    session_start();
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['balance'] = $row['balance'];
                    header("Location:/web_tech/home.php");
                }
            }
            else
            {
                header("Location:/web_tech/login.html?error=username/passwordWrong2"
                    ."&Username=".$username."&Email=".$email."&Number=".$ph_num);
                exit();
            }
        }

    }

}

else
{
    echo "<h1 align = 'center'>STOP SNEAKING INTO THE BANK!</h1>";
}

?>

