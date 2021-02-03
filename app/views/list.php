<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
 <style>

 
 </style>
</head>
<body>
<?php
     echo view('header');
     
    ?>

    <h1 style="text-align: center;">Hello  <?php echo $name;   ?></h1><br>
    <div class="container">
        <div class = "jumbotron">

            <div class="card" style="background-color:grey">
                <div class="card-body">
                <h1>Movies List</h1>

                    <table class="table table-success table-striped">
                    <tr >
                        <th>Movie ID</th>
                        <th>Movie Name</th>
                        <th>Movie Year</th>
                        <th>Movie Actor</th>
                        <th>Movie Ratings</th>
                        <th>Edit</th>


                    </tr>

                        <?php $i=1; foreach($result as $row) { ?>
                        <tr>
                            <td><?php echo $i; ?> </td>
                            <td><?php echo $row->movie_name;?> </td>
                            <td><?php echo $row->movie_year ?> </td>
                            <td><?php echo $row->movie_actor ?> </td>
                            <td><?php echo $row->movie_ratings?> </td>
                            <td><a href ="<?php echo site_url('movies/edit/').$row->movie_id.'/'.$name?>">Edit</a>
                            </td>
                            <td><?php echo "</tr>"; $i++; } ?> </td>
                </table>

                </div></div><br> <br>
                <div class="card" style="background-color:grey">
                <div class="card-body">
                
                

                    <?php 
                    echo view('add',compact("name"));
                    ?>

                </div>
                </div>
</body>
</html>