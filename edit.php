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
        width: 60%;
        border: 3px solid #73AD21;
        padding: 10px;
    }
    
    </style>
</head>
<body >
<?php echo view('header'); ?>
<div class="card" >
<div class="card-body" >

    <form align="center" method="post" action="<?php echo site_url('movies/update/'.$result->movie_id.'/'.$name); ?>">
    

    <input type="hidden" name="movie_id" value="<?php echo $result->movie_id; ?>"/>

    <div class="center" style="background-color:white">
    <h1><label><b>Edit Movie Ratings <b></label><br></h1>
    
    <input type="number" name="movie_ratings" placeholder="rating" class="form-control" required min="1" max="5"  value="<?php echo $result->movie_ratings; ?>"/><br><br>
    <div class="form-group">
    <input type="submit" name="update" value="Update" class="btn btn-info"/><br>
    </div></div></div>
</form>
</body>
</html>
