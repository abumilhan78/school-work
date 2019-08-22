<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="outputreg.php" method="post">
        Name : <input type="text" name="nama"><br>
        Address : <input type="text" name="address"><br>
        Gender : <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female<br>
        Religion : <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Nasrani</option>
                    <option value="Yahudi">Yahudi</option>
                    <option value="Budha">Budha</option>
                   </select><br>
        Email : <input type="email" name="email" ><br>
        Password : <input type="password" name="pass" ><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>