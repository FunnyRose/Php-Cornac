
<?php
$spectacles = include 'tableau.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="elephant.css">
    <title>Dans la peau d'un Cornac</title>
</head>
<body>

<?php
include "header.php";
?>

<hr/>
<table>
    <tr>
        <th>heure</th>
        <th>titre_spectacle</th>
        <th>artiste</th>
        <th>image_url</th>
    </tr>
<?php foreach($spectacles as $spectacle):?>
    <tr>
        <td><?php echo $spectacle['heure']; ?></td>
        <td><?php echo $spectacle['titre_spectacle']; ?></td>
        <td><?php echo $spectacle['artiste']; ?></td>
        <td><img src="<?php echo $spectacle['image_url']; ?>"/></td>
    </tr>
<?php endforeach; ?>
</table>

<?php
include "footer.php";
?>

</body>
</html>


