<?php 
    header('X-XXS-Protection:0'); // remove google chrome validation
    include_once "functions.php";
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
                <h2>Our First Form</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Dignissimos nobis doloremque id ducimus? Earum, hic animi! 
                    Molestias consectetur aliquam tempora?
                </p>
                <p>
                    <?php 
                        $fname = '';
                        $lname = '';
                        $chacked = '';

                        if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1 ) {
                            $chacked = 'checked';
                        }

                        print_r($_REQUEST);
                    ?>
                    <?php 
                        if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) : 
                            // $fname = htmlspecialchars($_REQUEST['fname']);
                            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        endif; 
                    ?>

                    <?php 
                        if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) : 
                            // $lname = htmlspecialchars($_REQUEST['lname']);
                            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        endif; 
                    ?>
                </p>
                <p>
                    First Name: <?php echo $fname; ?> <br>
                    Last Name: <?php echo $lname; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <!-- Http Verb (GET, POST, PATCH, DELETE) -->
                <form action="" method="POST">
                    <div>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?php echo $fname ?>">
                    </div>

                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" value="<?php echo $lname ?>">
                    </div>

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $chacked; ?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>

                    <div>
                        <label class="label">Select Some Fruits</label>
                    </div>
                    <div>
                        <input type="checkbox" name="fruits[]" id="cbf_o" value="orange" <?php isFruitChecked('orange') ?>>
                        <label for="cbf_o" class="label-inline">Orange</label> <br>

                        <input type="checkbox" name="fruits[]" id="cbf_m" value="mango" <?php isFruitChecked('mango') ?>>
                        <label for="cbf_m" class="label-inline">Mango</label> <br>

                        <input type="checkbox" name="fruits[]" id="cbf_b" value="banana" <?php isChecked('fruits','banana') ?>>
                        <label for="cbf_b" class="label-inline">Banana</label> <br>

                        <input type="checkbox" name="fruits[]" id="cbf_l" value="lemon" <?php isChecked('fruits','lemon') ?>>
                        <label for="cbf_l" class="label-inline">Lemon</label> <br>
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