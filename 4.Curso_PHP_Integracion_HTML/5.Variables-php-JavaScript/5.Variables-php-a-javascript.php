<?php
$usuarios = array (
    array(
        "id" => 0,
        "username" => "Naranja-1401"
    ),

    array(
        "id" => 1,
        "username" => "Mixel"
    ),

    array(
        "id" => 2,
        "username" => "RetaxMaster"
    )
);

$edadJuanito = 23;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Hello, world!</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <script> 
        let user = JSON.parse('<?= json_encode($usuarios) ?>') ;
        // console.log (user);

        let edadPepito = <?= $edadJuanito ?>; 
        // console.log (edadPepito);

    </script>
    
    <script src="./index.js" ></script>
    

  </body>
</html>
