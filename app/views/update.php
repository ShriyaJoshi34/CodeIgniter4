<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    .center {
        margin: auto;
        margin-top: 50px;
        width: 50%;
        border: 3px solid #73AD21;
        padding: 10px;
    }
    
    </style>
</head>
<body >
<?php echo view('header'); ?>
<div class="container">
        <div class = "jumbotron">

            <div class="center" style="background-color:white">
                <div class="card-body" align="center">
                    <?php echo "Movie Ratings updated successfully.";?><br><br>
                    <a href ="<?php echo site_url('list/').$name; ?>">Back</a>
                </div>
                </div></div></div>
</body>
</html>


