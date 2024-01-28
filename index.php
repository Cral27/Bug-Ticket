<?php
//checks date
session_start();

if(!isset($_SESSION['date'])){
    $_SESSION['date'] = '';
}
if(!isset($_SESSION['name'])){
    $_SESSION['name'] = '';
}
if(!isset($_SESSION['email'])){
    $_SESSION['email'] = '';
}
if(!isset($_SESSION['issue_title'])){
    $_SESSION['issue_title'] = '';
}
if(!isset($_SESSION['details'])){
    $_SESSION['details'] = '';
}
// if(!isset($_SESSION['counter'])){
//     $_SESSION['counter'] = '';
// }


if(isset($_POST['submit'])){
    // $_SESSION['counter'] = $_SESSION['counter'] + 1;
    $_SESSION['date'] = '';
    $_SESSION['name'] = '';
    $_SESSION['email'] = '';
    $_SESSION['issue_title'] = '';
    $_SESSION['details'] = '';

    $date = $_POST['date'];
    $arr = explode('-',$date);
    
    if(empty($date) || !isset($date)){
        $_SESSION['date'] = "Select a Join Date";
        header('Location: index.php');
    }else{
        var_dump(checkdate($arr[1],$arr[2],$arr[0]));
        $_SESSION['date'] = '';
    }
    
    //checks name
    $name = $_POST['first_name'] . " " . $_POST['last_name'];
    
    if(empty($_POST['first_name']) || empty($_POST['last_name'])){
        if(empty($_POST['first_name'])){
            $_SESSION['name'] = 'Missing First Name';
            header('Location: index.php');
        }else if(empty($_POST['last_name'])){
            $_SESSION['name'] = 'Missing Last Name';
            header('Location: index.php');
        }else{
            $_SESSION['name'] = 'Missing First and Last Name';
            header('Location: index.php');
        }
    }else if(preg_match("/^([a-zA-z' ]+)$/", $name)){
        $_SESSION['name'] = '';
        header('Location: process.php');
    }else{
        $_SESSION['name'] = 'Invalid Name';
        header('Location: index.php');
    }
    
    //checks email
    if(empty($_POST['email'])){
        $_SESSION['email'] = 'Email is Empty';
        header('Location: index.php');
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['email'] = 'Invalid Email Format';
        header('Location: index.php');
    }else{
        $_SESSION['email'] = '';
        header('Location: process.php');
    }

    if(empty($_POST['issue_title'])){
        $_SESSION['issue_title'] = 'Please Fill out the Title';
        header('Location: index.php');
    }else{
        $_SESSION['issue_title'] = '';
        echo "<h2> </h2>";
    }

    if(empty($_POST['details'])){
        $_SESSION['details'] = 'Please Fill out the Details Box';
        header('Location: index.php');
    }else{
        $_SESSION['details'] = '';
    }
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bug Report</title>
        <style>
            form{
                outline: 1px solid red;
                width: 275px;
                height: 420px;
                padding: 2% 3%;
                margin: 4% auto;
                border-radius: 4%;
            }
            h1{
                text-align: center;
                margin-top: 0;
            }
            label{
                display: block;
                margin: 2% 0;
            }
            input{
                margin-left: 6%;
            }
            #first_name{
                margin-left: 6.7%;
            }
            #last_name{
                margin-left: 7.4%;
            }
            #email{
                margin-left: 19%;
            }
            #issue_title{
                margin-left: 8.8%;
            }
            textarea{
                overflow: hidden;
            }
            div{
                text-align: center;
                margin-top: 4%;
            }
            div input{
                padding: 1% 3%;
                background-color: lightgray;
            }

        </style>
    </head>
    <body>
        <h2 style='text-align: center'><?= $_SESSION['date'] . "\n"?></h2>
        <h2 style='text-align: center'><?= $_SESSION['name'] . "\n"?></h2>
        <h2 style='text-align: center'><?= $_SESSION['email'] . "\n"?></h2>
        <h2 style='text-align: center'><?= $_SESSION['issue_title'] . "\n"?></h2>
        <h2 style='text-align: center'><?= $_SESSION['details'] . "\n"?></h2>

        <form action="" method='post'>
            <h1>Bug Report</h1>
            <label>Date Today:<input type="date" name='date'></label>    
            <label>First Name:<input type="input" name='first_name' id='first_name'></label>            
            <label>Last Name:<input type="input" name='last_name' id='last_name'></label>          
            <label>Email:<input type="input" name='email' id='email'></label>            
            <label>Issue Title:<input type="input" name='issue_title' id='issue_title' maxlength="50"></label>           
            <label>Issue Details:</label>
            <textarea name="details" id="" cols="36" rows="10" maxlength='250'></textarea>
            <div>
            <input type="submit" value='Submit' name='submit'>
            </div>
        </form>
    </body>
</html>