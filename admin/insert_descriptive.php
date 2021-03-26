<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Descriptive Question</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/insert_descriptive.css">
</head>



<body>

    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <h2>Create New Descriptive Question</h2>

            <div class="form-group row">
                <label for="firstName" class="col-sm-4 control-label">Question</label>
                <div class="col-sm-8">
                    <input type="text" id="question" name="des_question" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Answer" class="col-sm-4 control-label">Answer</label>
                <div class="col-sm-8">
                    <textarea type="text" id="answer" name="des_answer" class="form-control" rows='4' cols='50' required></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="labels" style="margin-left:10px;">Please Select Labels</label>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 tag" id="Geography">
                            <div class="box">Geography</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Maths">
                            <div class="box">Maths</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Physics">
                            <div class="box">Physics</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="History">
                            <div class="box">History</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 tag" id="English">
                            <div class="box">English</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Economy">
                            <div class="box">Economy</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Culture">
                            <div class="box">Culture</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Current Affairs">
                            <div class="box">Current Affairs</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 tag" id="General Science">
                            <div class="box">General Science</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Literature">
                            <div class="box">Literature</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="PrevYearQuestion">
                            <div class="box">PrevYearQuestion</div>
                        </div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-2 tag" id="Reasoning">
                            <div class="box">Reasoning</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 tag" id="Aptitude">
                            <div class="box">Aptitude</div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>

            <?php include("tags.php"); ?>

            <center><button type="submit" class="btn btn-primary btn-block" name="sub_des_answer">Save Question & Answer</button></center>
        </form>
    </div>


</body>

<?php
include("../config/configure.php");

if (isset($_POST['sub_des_answer'])) {

    $question = htmlentities(mysqli_real_escape_string($con, $_POST['des_question']));
    $answer = htmlentities(mysqli_real_escape_string($con, $_POST['des_answer']));
    $creator_email =  $_SESSION['email'];

    $creator_select = "SELECT * from users where email='$creator_email' and user_type='admin'";
    $query = mysqli_query($con, $creator_select);
    $row = mysqli_fetch_array($query);
    $val = $row['user_id'];

    $insert_des = "INSERT INTO descq (question, answer, creator_id) VALUES ('$question', '$answer', '$val')";
    $query = mysqli_query($con, $insert_des);
    if ($query) {
        echo "<script>alert('Question added')</script>";
    } else {
        echo "<script>alert('Something wrong! try again')</script>";
    }

    $select = "SELECT MAX(q_id) from descq";
    $query = mysqli_query($con, $select);
    $row = mysqli_fetch_array($query);
    $q_id = $row[0];

    if ($Geography) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Geography')";
        $query = mysqli_query($con, $insert);
    }
    if ($Maths) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Maths')";
        $query = mysqli_query($con, $insert);
    }
    if ($Physics) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Physics')";
        $query = mysqli_query($con, $insert);
    }
    if ($History) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'History')";
        $query = mysqli_query($con, $insert);
    }
    if ($English) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'English')";
        $query = mysqli_query($con, $insert);
    }
    if ($Economy) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Economy')";
        $query = mysqli_query($con, $insert);
    }
    if ($Culture) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Culture')";
        $query = mysqli_query($con, $insert);
    }
    if ($Current_Affairs) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Current_Affairs')";
        $query = mysqli_query($con, $insert);
    }
    if ($General_Science) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'General_Science')";
        $query = mysqli_query($con, $insert);
    }
    if ($Literature) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Literature')";
        $query = mysqli_query($con, $insert);
    }
    if ($PrevYearQuestion) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'PrevYearQuestion')";
        $query = mysqli_query($con, $insert);
    }
    if ($Reasoning) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Reasoning')";
        $query = mysqli_query($con, $insert);
    }
    if ($Aptitude) {
        $insert = "INSERT INTO tags (q_id, q_type, tag) VALUES ('$q_id', 'descq', 'Aptitude')";
        $query = mysqli_query($con, $insert);
    }
}

?>