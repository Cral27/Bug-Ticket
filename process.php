<?php
// $date = $_POST['date'];//date("m-d-Y");
// // echo $date;
// $arr = explode('-',$date);
// // $year = $arr[0];
// // $month = $arr[1];
// // $day = $arr[2];

// //date value checker
// if(empty($date) || !isset($date)){
//     $date_error = "Select a Join Date";
//     echo $date_error;
//     header('Location: index.php');
// }else{
//     var_dump(checkdate($arr[1],$arr[2],$arr[0]));
// }

// // $first_name = $_POST['first_name'];
// //name and last name value checker
// $name = $_POST['first_name'] . " " . $_POST['last_name'];

// if(empty($_POST['first_name']) || empty($_POST['last_name'])){
//     if(empty($_POST['first_name'])){
//         $name_err = 'missing first name value';
//         header('Location: index.php');
//     }else if(empty($_POST['last_name'])){
//         $name_err = 'missing last name value';
//         header('Location: index.php');
//     }else{
//         $name_err = 'missing name value';
//         header('Location: index.php');
//     }
// }else if(preg_match("/^([a-zA-z' ]+)$/", $name)){
//     echo 'name is valid';
// }else{
//     echo 'invalid name';
//     header('Location: index.php');
// }
// // echo $date_arr[1];

// //email checker
// if(empty($_POST['email'])){
//     $email_err = 'empty email';
//     header('Location: index.php');
// }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//     $email_err = 'Invalid Email Format';
//     echo $email_err;
//     // header('Location: index.php');
// }else{
//     echo 'good to go homie';
// }

// //title length checker
// $title = $_POST['issue_title'];
// if(empty($_POST['issue_title'])){
//     echo 'title is empty';
// }else if(isset($title['50']))
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bug Report</title>
        <style>
            main{
                width: 800px;
                max-height: 120px;
                outline: 1px solid black;
                text-align: center;
                margin: 10% auto;
                border-radius: 10px;
                background-color: lightgray;
            }
            h2{
                margin: 0;
                padding: 15px 0;
            }
        </style>
    </head>
    <body>
        <main>
            <h2>Thank you for your patience!</h2>
            <h2>Please wait a response from our IT team.</h2>
        </main>
    </body>
</html>