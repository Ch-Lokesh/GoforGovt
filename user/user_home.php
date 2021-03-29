<!DOCTYPE html>
<html>
<?php session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">
    <link rel="stylesheet" type="text/css" href="../styles/articles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<?php
function get_articles()
{
    global $con;

    $get_articles = "SELECT * FROM articles LIMIT 2";
    $run_articles = mysqli_query($con, $get_articles);

    while ($row_posts = mysqli_fetch_array($run_articles)) {

        $content = $row_posts['content'];
        if (strlen($content) > 300)
            $content = substr($content, 0, 300);
        $header = $row_posts['header'];
        $creator = $row_posts['creator_id'];
        $time = $row_posts['time'];

        $select_creator = "SELECT * FROM users where user_id='$creator'";
        $run_creator = mysqli_query($con, $select_creator);
        $row = mysqli_fetch_array($run_creator);
        $first_name = $row['first_name'];


        echo "
        <div class='container-fluid'>
            <div class='article'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <center><h2>$header</h2></center>
                    </div>
                </div>
                <div class='row content'>
                    <div class='col-sm-2'>
                    </div>
                    <div class='col-sm-8'>
                        $content
                    </div>  
                    <div class='col-sm-2'>
                    </div>
                </div>
                <div class='row time'>
                    <div class='col-sm-4'></div>
                    <div class='col-sm-4'><strong>Created by</strong>  $first_name</div>
                    <div class='col-sm-1'></div>
                    <div class='col-sm-4'><strong>Created at</strong>  $time </div>
                </div>
                
            </div>
            </br></br>
        </div>
        </br>
        ";
    }
}
?>

<body>
    <?php include("user_header.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <center>
                    <h2><strong>Articles</strong></h2>
                </center>

                <?php echo get_articles(5) ?>
            </div>
        </div>
    </div>
</body>

</html>