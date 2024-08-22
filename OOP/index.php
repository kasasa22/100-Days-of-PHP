<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP php</title>
</head>
<body>
    <?php
   require_once 'classes/car.php';
   $car12 = new Car("Ipsum", "bluet");
   $car12->setBrand("Lorem");
   echo $car12->getBrand();
   echo $car12->setColor("black");
   echo $car12->getColor()
    ?>
</body>
</html>