<?php


if(isset($_POST['send'])){
$error = 0;
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];

if (strlen($name)<2 || strlen($name)>20){
    echo  "<p>სახელი უნდა იყოს მინიმუმ 2  და მაქსიმუმ 20 სიმბოლო</p>";
    $error++;
};
if (strlen($surname)<3 || strlen($surname)>50){
    echo "<p>გვარი უნდა იყოს მინიმუმ 3  და მაქსიმუმ 50 სიმბოლო</p>";
    $error++;
    };
if (strlen($address)<5||strlen($address)>70){
    echo "<p>უნდა იყოს მინიმუმ 5 და მაქსიმუმ 70 სიმბოლო</p>";
    $error++;
    };

if($error == 0)
    include "action.php";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="">
    <table>
    <tr><td>სახელი</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr><td>გვარი</td>
        <td><input type="text" name="surname"></td>
    </tr>
    <tr><td>დაბადების თარიღი</td>
        <td><input type="date" name="bdate"></td>
    </tr>
    <tr><td>პირადი ნომერი</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr><td>მისამართი</td>
        <td><input type="text" name="address"></td>
    </tr>
    <tr><td>რეგისტრაციის თარიღი</td>
        <td><input type="date" name="regdate"></td>
    </tr>
    <tr><td>მობილური</td>
        <td><input type="text" name="phone"></td>
    </tr>
    <tr><td>დამატებითი ინფორმაცია</td>
        <td><input type="text" name="info"></td>
    </tr>
    <tr><td><input type="submit" name="send" value="send"></td></tr>
    
    </table>
    </form>
    
</body>
</html>