<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krótka strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_GET['a'])){
        $a=$_GET['a'];
        $b=$_GET['b'];
        echo "pole wynosi".$a*$b;
    } else {
     ?>
    <div class="strona">
        <div class="Welcome">
          <field>
            <legend>Obliczanie prostokąta</legend>
            <label for="a"><input type="numeric" name="a"></label>
            <label for="b"><input type="numeric" name="a"></label>
            <input type="submit"></field>
        </div>
    </div>
    <?php }?>
</body>
</html>