<?php
    include_once "functions.php";

    $task = 'encode';
    if (isset($_GET['task']) && $_GET['task'] != '') {
        $task = $_GET['task'];
    }

    
    $key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    if('key' == $task){
        $key_original = str_split($key);
        shuffle($key_original);
        $key = join('',$key_original);
    }elseif (isset($_POST['key']) && $_POST['key'] != '') {
        $key = $_POST['key'];
    }

    $scrambleData = '';
    if ('encode' == $task) {
        $data = $_POST['data'] ?? '';
        if($data != ''){
            $scrambleData = scrambleData($data, $key);
        }
    }

    if ('decode' == $task) {
        $data = $_POST['data'] ?? '';
        if($data != ''){
            $scrambleData = dcodeData($data, $key);
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
    <title>Data Scrambler</title>
    <style>
        body{
            margin-top: 30px;
        }
        #data,
        #result{
            width: 100%;
            height: 160px;
        }
        .hidden{
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Data Scrambler</h2>
                <p>
                    User this application to scramble your data
                </p>
                <p>
                    <a href="?task=encode">Encode</a> |
                    <a href="?task=decode">Decode</a> |
                    <a href="?task=key">Generate Key</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <!-- Http Verb (GET, POST, PATCH, DELETE) -->
                <form action="index.php<?php if('decode'== $task){echo '?task=decode';} ?>" method="POST">
                    <div>
                        <label for="key">Key</label>
                        <input type="text" name="key" id="key" <?php displayKey($key); ?>>
                    </div>

                    <div>
                        <label for="data">Data</label>
                        <textarea type="text" name="data" id="data"><?php if(isset($_POST['data'])) {echo $_POST['data'];} ?></textarea>
                    </div>

                    <div>
                        <label for="result">Result</label>
                        <textarea type="text" name="result" id="result"><?php echo $scrambleData; ?></textarea>
                    </div>

                    <div>
                        <button type="submit">Do It For Me</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>