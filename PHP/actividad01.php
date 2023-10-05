<!DOCTYPE html>
<html>
    <head>
        <title>EJERCICIO 01- OPERACIONES CON PHP</title>
    </head>
    <body>
        <form method="post" action="">
            ingresar valor 1:<br> <input type="text"name="valor1"></br>
            ingresar valor 2:<br> <input type="text"name="valor2"></br>
            resultado: <br>
            <input type="submit" name = "suma" value="suma">  

        </form>
        <?php
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
        $suma=$numero1 +$numero2;
        echo"   EL RESULTADO DE LA SUMA ES:".$suma;

        ?>
    </body>
</html>