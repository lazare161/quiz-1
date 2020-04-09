<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
    <tr><td>სახელი</td>
    <td><?=$_POST["name"]?></td>
    </tr>
    <tr><td>გვარი</td>
    <td><?=$_POST["surname"]?></td>
    </tr>
    <tr><td>დაბადების თარიღი</td>
    <td><?=$_POST["bdate"]?></td>
    </tr>
    <tr><td>პირადი ნომერი</td>
    <td><?=$_POST["id"]?></td>
    </tr>
    <tr><td>მისამართი</td>
    <td><?=$_POST["address"]?></td>
    </tr>
    <tr><td>რეგისტრაციის თარიღი</td>
    <td><?=$_POST["regdate"]?></td>
    </tr>
    <tr><td>მობილური</td>
    <td><?=$_POST["phone"]?></td>
    </tr>
    <tr><td>დამატებითი ინფორმაცია</td>
    <td><?=$_POST["info"]?></td>
    </tr>

    </table>
</body>
</html>