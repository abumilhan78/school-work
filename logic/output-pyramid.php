<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Jumlah Bintang : <?php $_POST['star']; ?></legend>
        <?php

            if (isset($_POST['send'])) {
                $star = $_POST['star'];
                for ($i=1; $i <= $star; $i++) {
                        
                    for ($j=$star; $j > $i; $j--) { 
                        echo "&nbsp";
                    }
                    
                    for ($k=0; $k < $i; $k++) { 
                        echo "*";
                    }
                    echo "<br>";
                }
            }
        ?>
    </fieldset>
</body>
</html>