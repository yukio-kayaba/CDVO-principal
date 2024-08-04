<?php
    $valor = "";
    if(isset($_GET['vista'])){
        $aux = $_GET['vista'];
        if($aux == ""){
            $valor = "";
        }else{

            $valor = " || $aux";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDVO<?php echo $valor; ?></title>
    <link rel="stylesheet" href="./view/css/bulma.min.css">
    <link rel="stylesheet" href="./view/css/estylos_navbar.css">