<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">

    <style>
        .margin {
            padding: 10px;
            margin-top: 40px;
            margin-left: 50px;

        }

        .first {
            margin-left: 60px;
            margin-top: 40px;
        }

        .card {
            box-shadow: 10px 10px 5px grey;
        }

        .card:hover {
            box-shadow: 20px 20px 10px black;
        }
    </style>
</head>



<body>
    <div class="container-fluid">
        <div class="row center">


            <div class="card col-sm-3 text-center first" id="des">
                <div class="card-header">
                    Create Descriptive Question
                </div>
                <div class="card-body">
                    <p>Contains a question and Descriptive aswer</p>
                </div>
            </div>



            <div class="card col-sm-3 text-center margin" id="mcq">
                <div class="card-header">
                    Create Mutliple Choice Question
                </div>
                <div class="card-body">
                    <p>Contains a question Four options and answer</p>
                </div>
            </div>



            <div class="card col-sm-3 text-center margin" id="tf">
                <div class="card-header">
                    Create True/False Question
                </div>
                <div class="card-body">
                    <p>Contains a question and answer(True/False)</p>
                </div>
            </div>

            <div class="col-sm-1"></div>
        </div>
    </div>

    <script>
        document.getElementById("des").onclick = function() {
            location.href = "insert_descriptive.php"
        }
        document.getElementById("mcq").onclick = function() {
            location.href = "insert_mcq.php"
        }
        document.getElementById("tf").onclick = function() {
            location.href = "insert_tf.php"
        }
    </script>
</body>