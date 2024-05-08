<?php

@include 'Admin/Admin_config/configEvent.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Event_Update.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="Logo_Web.ico">
    <title>Admin Event Update Show</title>
</head>

<body>

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