<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo site_url('movies/save/').$name; ?>">
            <div class="form-group">
               <label><b>Movie Name</b></label>
               <input type="text" name="movie_name" placeholder="enter movie name" class="form-control" required/>
			</div>
            <div class="form-group">
               <label><b>Movie Year</b></label>
                <input type="text" name="movie_year" placeholder="enter movie year" class="form-control" required />
			</div>
            <div class="form-group">
                <label>Movie Actor</label>
                <input type="text" name="movie_actor" placeholder="enter movie actor" class="form-control" required/>
			</div>
            <div class="form-group">
                <label>Movie Ratings</label>
                <input type="number" name="movie_ratings" placeholder="enter movie ratings" class="form-control" required min="1" max="5"/>
			</div>
            <div class="form-group">
				<input type="submit" name="add" value="Add movie" class="btn btn-primary"/>
				</div>
	</form>

    
</body>
</html>