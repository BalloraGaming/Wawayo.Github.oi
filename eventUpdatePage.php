<?php

@include 'Admin/Admin_configs/configEvent.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Logo_Web.ico">
    <link rel="stylesheet" href="css/updatePage.css">
    <title>Main Page</title>
</head>
<body background="images/BackGround.jpg">

    <header>
        <img class="logo" src="images/Logo_Web-removebg-preview.png" width="100px">
        <h2> Cebu El Viejo - Archdiocesan Shrine of San Nicolas de Tolentino Parish </h2>
    </header>

    <?php
        $select = mysqli_query($conn, "SELECT * FROM eventupdates");
        ?>
        <div class="event-display">
            <table class="event-display-table">
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <tr >
                        <td class="eventImage"><img src="uploaded_img/<?php echo $row['image']; ?>" width="50%" alt=""></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
</body>
</html>