<?php 

    include_once(__DIR__ . '/classes/Item.php');
    include_once(__DIR__ . '/classes/Service.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $product = new Product('988271', 'Shoes', '33.23');
        $tshirt = new Tshirt('98291', 'TshirtUnicolor', '15.22', 'M', 'blue');
        $tshirt1 = new Tshirt('98991', 'TshirtUnicolor', '11.33', 'L', 'blue');
        $tshirt2= new Tshirt('98091', 'TshirtUnicolor', '13.22', 'L', 'red');
        $tshirt3 = new Tshirt('18491', 'TshirtUnicolor', '5.76', 'XS', 'green');
        $tshirt4 = new Tshirt('98391', 'TshirtUnicolor', '14.21', 'XLL', 'yellow');
        //__construct($id, $name, $price, $description, $startDate, $endDate)
        $rentCar = new Service('273723', 'RentCar', '100p/w' , 'Get a wonderful experience with our cars....', '24.01.2021', '31.12.2021');
        $mathCourse = new Service('273723', 'Math Basics Course', '180.00' , 'Course Description', '20.01.2021', '06.06.2021');
    ?>

    <h1>SERVICES</h1>
    <hr>
    <h3><?php echo $rentCar->get_name() ?></h3>
    <p><b>Service ID: </b><?php echo $rentCar->get_id() ?></p>
    <p><b>Service PRICE: </b><?php echo $rentCar->get_price() ?></p>
    <p><b>Service DESCRIPTION: </b><?php echo $rentCar->get_description() ?></p>
    <p><b>Valid From: </b><?php echo $rentCar->get_startDate() ?> <b>to: </b><?php echo $rentCar->get_endDate() ?></p>

    <h3><?php echo $mathCourse->get_name() ?></h3>
    <p><b>Service ID: </b><?php echo $mathCourse->get_id() ?></p>
    <p><b>Service PRICE: </b><?php echo $mathCourse->get_price() ?></p>
    <p><b>Service DESCRIPTION: </b><?php echo $mathCourse->get_description() ?></p>
    <p><b>Valid From: </b><?php echo $mathCourse->get_startDate() ?> <b>to: </b><?php echo $mathCourse->get_endDate() ?></p>

    <h1>THIRTS</h1>
    <h3><?php echo $tshirt->get_name() ?></h3>
    <p><b>ID: </b><?php echo $tshirt->get_id() ?></p>
    <p><b>PRICE: </b><?php echo $tshirt->get_price() ?></p>
    <p><b>SIZE: </b><?php echo $tshirt->get_size() ?></p>
    <p><b>COLOR: </b><?php echo $tshirt->get_color() ?></p>
    <h3><?php echo $tshirt1->get_name() ?></h3>
    <p><b>ID: </b><?php echo $tshirt1->get_id() ?></p>
    <p><b>PRICE: </b><?php echo $tshirt1->get_price() ?></p>
    <p><b>SIZE: </b><?php echo $tshirt1->get_size() ?></p>
    <p><b>COLOR: </b><?php echo $tshirt1->get_color() ?></p>
    <h3><?php echo $tshirt2->get_name() ?></h3>
    <p><b>ID: </b><?php echo $tshirt2->get_id() ?></p>
    <p><b>PRICE: </b><?php echo $tshirt2->get_price() ?></p>
    <p><b>SIZE: </b><?php echo $tshirt2->get_size() ?></p>
    <p><b>COLOR: </b><?php echo $tshirt2->get_color() ?></p>
    <h3><?php echo $tshirt3->get_name() ?></h3>
    <p><b>ID: </b><?php echo $tshirt3->get_id() ?></p>
    <p><b>PRICE: </b><?php echo $tshirt3->get_price() ?></p>
    <p><b>SIZE: </b><?php echo $tshirt3->get_size() ?></p>
    <p><b>COLOR: </b><?php echo $tshirt3->get_color() ?></p>
    <h3><?php echo $tshirt4->get_name() ?></h3>
    <p><b>ID: </b><?php echo $tshirt4->get_id() ?></p>
    <p><b>PRICE: </b><?php echo $tshirt4->get_price() ?></p>
    <p><b>SIZE: </b><?php echo $tshirt4->get_size() ?></p>
    <p><b>COLOR: </b><?php echo $tshirt4->get_color() ?></p>
    
    
</body>
</html>