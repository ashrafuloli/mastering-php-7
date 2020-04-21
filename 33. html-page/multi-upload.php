<?php
    include_once "functions.php";
    
    $allowedTypes = [
        'image/png',
        'image/jpg',
        'image/jpeg',
        'image/gif',
    ];

    if($_FILES['photo']){
        $totalFiles = count($_FILES['photo']['name']);
        for ($i=0; $i < $totalFiles ; $i++) { 
            if (in_array($_FILES['photo']['type'][$i], $allowedTypes) !== false && $_FILES['photo']['size'][$i] < 5 * 1024 * 1024) {
                move_uploaded_file($_FILES['photo']['tmp_name'][$i],"uploads/".$_FILES['photo']['name'][$i]);
            }
        }
        
    }
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
                <h2>File Upload</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Dignissimos nobis doloremque id ducimus? Earum, hic animi! 
                    Molestias consectetur aliquam tempora?
                </p>
                <pre>
                        <?php
                            print_r($_POST);
                            print_r($_FILES);
                        ?>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <!-- Http Verb (GET, POST, PATCH, DELETE) -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    <div>
                        <label for="photo">Photo</label>
                        <input type="file" name="photo[]" id="photo"> <br>
                        <input type="file" name="photo[]" id="photo"> <br>
                        <input type="file" name="photo[]" id="photo"> <br>
                        <input type="file" name="photo[]" id="photo">
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