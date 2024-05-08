<?php

@include 'configLivePage.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/livePage.css">
    <title>Live Page</title>
</head>

<body>

    <header>
        <img class="logo" src="images/Logo_Web-removebg-preview.png" width="100px">
    </header>

    <?php

    $select = mysqli_query($conn, "SELECT * FROM livepage");

    ?>

    <div class="content">
        <div class="background">
            <img src="uploaded_img/<?php echo $row['image']; ?>">
        </div>

        <div class="live">
            <a href="live_link">
        </div>
    </div>


</body>

</html>