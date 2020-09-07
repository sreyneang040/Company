<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='js/lib/main.css' rel='stylesheet' />
    <link rel="shortcut icon" href="https://aeon.com.kh/wp-content/uploads/2019/12/AEONSPB-logo.png" type="image/x-icon" width="500" height="600">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Lets go</title>
</head>
<body>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src='js/lib/main.js'></script>

    <!-- edit your event -->
   
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <?= $this->renderSection('content') ?>
</body>
</html>