<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour08');

$req = mysqli_query($bdd, 'SELECT salles.nom, etages.nom FROM salles INNER JOIN etages ON salles.ide_etage = etages.id;');
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);

$req2 = mysqli_query($bdd, 'SELECT salles.nom, etages.nom FROM salles INNER JOIN etages ON salles.ide_etage = etages.id;');
$res2 = mysqli_fetch_all($req2);
$rescount = mysqli_num_rows($req2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB 01</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php foreach ($res[0] as $key => $value) {  ?>

                    <th><?php echo $key ?></th>

                <?php }
                foreach ($res[1] as $key => $value) {  ?>
                    <th><?php echo $key ?></th>
                <?php
                }  ?>
            </tr>
        </thead>
        <tbody>

            <?php for ($i = 0; $i < $rescount; $i++) {  ?>
                <tr>
                    <th><?php echo $res2[$i][0] ?></th>
                    <th><?php echo $res2[$i][1] ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>