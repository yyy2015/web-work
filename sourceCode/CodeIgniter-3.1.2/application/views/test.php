<html>
    <head>
        <title>dbTest</title>
    </head>
    <body>
    <?php
        foreach($result as $row){
            echo 'id: '.$row->id.' birthday: '.$row->username.'<br>';
        }
    ?>
    </body>
</html>