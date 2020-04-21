<?php
    include_once "functions.php";
    $fruits = ["namgo","orange","banana","apple","lemon"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/milligram.css">
    <title>Form Example</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select / Dropdown</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Dignissimos nobis doloremque id ducimus? Earum, hic animi! 
                    Molestias consectetur aliquam tempora?
                </p>
                <p>
                    <?php 
                    // $sfruits = isset($_POST['fruits']) ? $_POST['fruits'] : [];
                    // $sfruits = $_POST['fruits'] ?? [];
                    $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                    
                    if (count($sfruits) > 0) {
                        printf("You have selected %s", join(", ", $sfruits));
                    } 
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <!-- Http Verb (GET, POST, PATCH, DELETE) -->
                <form action="" method="POST">
                    <div>
                        <label for="fruits">Select Some Fruits</label>
                        <select style="height:200px" name="fruits[]" id="fruits" multiple>
                            <option value="" disabled selected>Select Some Fruits</option>
                            <?php displayOptions($fruits, $sfruits); ?>
                        </select>
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>