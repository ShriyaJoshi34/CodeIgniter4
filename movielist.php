<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Movies List</h1>

    <?php if(!empty($users)):?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Movie Name</th>
                <th>Movie Year</th>
                <th>Movie Actor</th>
                <th>Movie Ratings</th>
            </tr>
            <?php 
            $sno=1;
            foreach($users as $user):?>
            <tr>
                <td><?= $sno++;?></td>
                <td><?= $user->movie_name;?></td>
                <td><?= $user->movie_year;?></td>
                <td><?= $user->movie_actor;?></td>
                <td><?= $user->movie_ratings;?></td>

            </tr>
            <?php endforeach;?>
        </table>
        <?php else:?>
        <h1>No records</h1>
        <?php endif;?>

    <?php echo base_url();?>

</body>
</html>