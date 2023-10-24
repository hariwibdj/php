<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Ganjil</th>
            <th>Genap</th>
        </tr>
            <?php
            $no=1;
            while($no<=10){
            ?>
            <tr>
            <!-- <?php
            if(($no % 2) == 0){
                ?>
                <td><?=$no;?></td>
            }
            else
            {
                ?>
                <td><?=$no;?></td>
            <?php
            }
            ?> -->
        <tr>            
        </tr>
        <?php
        $no++;
            }
        ?>
    </table>    
</body>
</html>