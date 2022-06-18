<?php 
    include_once "./templates/generation.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
     <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>МЯСО</title>
</head>
<body>
<header>
    
        <?php 
        generation_head_menu($mysqli);
    ?>
 
    <div class="container">
        <?php 
            generation_posts_index($mysqli);
        ?>
    </div>
