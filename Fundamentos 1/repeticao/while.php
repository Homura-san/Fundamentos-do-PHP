<!DOCTYPE html>
<html>
    <body>
        <p>Olá!</p>
    <?php 
        $count = 0;

        while ($count <= 4) {
            echo "
            <div>
                <p>$count</p>
            </div>";
            $count++;
        }
    ?>
    </body>
</html>



