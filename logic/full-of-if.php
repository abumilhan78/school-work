<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <FORM ACTION="full-of-if.php" METHOD="POST" NAME="input">
        <input type="submit" name="green" value="Green"><br>
        <input type="submit" name="blue" value="blue">
        <input type="submit" name="red" value="red">
        <input type="submit" name="grey" value="grey">
        <input type="submit" name="purple" value="purple">
        <input type="submit" name="aqua" value="aqua">
        <input type="submit" name="lavender" value="lavender">
        <input type="submit" name="gold" value="gold">
        <input type="submit" name="maroon" value="maroon">
        <input type="submit" name="black" value="black">
    </FORM>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if (isset($_POST['green'])) {
        echo '<font color ="green">You Press The Green Button</font>';
    }
    else if (isset($_POST['blue'])) {
        echo '<font color ="blue">You Press The Blue Button</font>';
    }
    else if (isset($_POST['red'])) {
        echo '<font color ="red">You Press The Red Button</font>';
    }
    else if (isset($_POST['grey'])) {
        echo '<font color ="grey">You Press The Grey Button</font>';
    }
    else if (isset($_POST['purple'])) {
        echo '<font color ="purple">You Press The Purple Button</font>';
    }
    else if (isset($_POST['aqua'])) {
        echo '<font color ="aqua">You Press The Aqua Button</font>';
    }
    else if (isset($_POST['lavender'])) {
        echo '<font color ="lavender">You Press The Lavender Button</font>';
    }
    else if (isset($_POST['gold'])) {
        echo '<font color ="gold">You Press The Gold Button</font>';
    }
    else if (isset($_POST['maroon'])) {
        echo '<font color ="maroon">You Press The Maroon Button</font>';
    }
    else if (isset($_POST['black'])) {
        echo '<font color ="black">You Press The Black Button</font>';
    }
?>