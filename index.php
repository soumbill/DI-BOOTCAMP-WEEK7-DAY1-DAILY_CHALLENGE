<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily_Chalenge | W7_D1</title>
</head>
<body>
    <?php 
        class User{
            public $firstName;
            public $lastName;

            public function hello(){
                echo 'hello, '. $this -> firstName . ' ' . $this -> lastName;
            }

            public function test(){
                $user = new User();

                $user -> firstName = 'Jonnie';
                $user -> lastName = 'Roe';

                $user -> hello();
            }

        }
        //Pour afficher hello, John
        $user1 = new User();
        $user1 -> test();
    ?>
</body>
</html>