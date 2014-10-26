<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World with php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
        <?php include('header.php'); ?>
        <h1>Testing out php &mdash; wow &ndash; this is now working</h1>
        <script>
            $('li:eq(0)').css('background-color', 'yellow');
        </script>
        <?php echo "My first PHP script!"; ?>
        <?php include('test.php'); ?>    
        
        <editor-fold defaultstate="collapsed" desc="getters and setters">

        some boring code you don't need to see every time here

        </editor-fold>    

    <?php include('footer.php'); ?>

</body>
</html>
