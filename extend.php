<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1>การสืบทอดคุณสมบัติ</h1>
        <?php
        require './parentClass.php';

        class Seafood extends Product{
            
        }
        
        $sea1 = new Seafood();
        $sea1->vioceMessage();
        ?>
    </body>
</html>
