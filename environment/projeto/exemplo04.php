<!DOCTYPE html>
<html>
    <head>
       
    </head>
    <body>
        <?php
            $a = array(1,2,3);
            var_dump($a);
            echo $a[1];
           
            $hash = array("a" => array(1,2,3), "b" => 2);
            var_dump($hash);
            var_dump($hash['a'][1]);
            $hash["c"] = "eu nao acredito";
            print_r($hash);
            var_dump($hash);
        ?>
    </body>
</html>