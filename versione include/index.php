<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LC</title>
    <!-- includiamo vue e axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="icon" href="data:,">
    <?php include "data.php";?>
</head>

<body> 

    <!-- istanza vue -->
    <div id="nav"> <img src="img/iconmonstr-spotify-1.svg"> </div>

    <div id="app">

    <!-- container dischi -->
    <div class="container"> 

        <?php 
            for ($i=0; $i < count($database); $i++) { 
                $album = $database[$i];
                
                ?>  <!-- album -->
                    <div class="box">
                        <img src="<?php echo $album['poster'];?>">
                        <?php echo $album['title'];?> <br>
                        <?php echo $album['author'];?> <br>
                        <?php echo $album['year'];?> <br>                       
                    </div>
                <?php 
            }
        ?>

    </div>



</div>
            

<script src="script.js"></script>

</body>
</html>
    

    




