<?php
    include('connection.php');
    include('funtions.php');

 

    if(isset($_GET['edit_game'])) {
        $game_id = $_GET['edit_game'];

        $get_game = "SELECT * FROM `game` WHERE gameID=$game_id";
        $result_query=mysqli_query($con, $get_game);
        $row=mysqli_fetch_assoc($result_query);
        $game_title     =  $row['gameName'];
        $game_desc      =  $row['gameDesciption'];
        $game_keyword   =  $row['gameKeyword'];
        $game_genre     =  $row['categoryID'];
        $game_image     =  $row['gamePicture'];
        $game_price     =  $row['gamePrice'];
        $game_id        =  $row['gameID'];

        $get_genre="SELECT * FROM `category` WHERE categoryID=$game_genre";
                $result_genre=mysqli_query($con, $get_genre);
                while($row=mysqli_fetch_assoc($result_genre)) {
                    $genre_name = $row['categoryName'];
                }
}
?>


<h3 class="text-center mb-5">ADD GAMES</h3>

<form action="" method="POST" class="mb-2" enctype="multipart/form-data">

    <h3>ADD GAMES</h3>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_title" class="form-label">Game Title</label>
        <input type="text" id="game_title" class="form-control" required="required" placeholder="Enter Game Title"
            name="game_title" aria-label="gamename" aria-describedby="addon-wrapping" autocomplete="off">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_desc" class="form-label">Game Description</label>
        <input type="text" id="game_desc" class="form-control" placeholder="Enter Game Description" name="game_desc"
            aria-label="gamedesc" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_keyword" class="form-label">Game Keyword</label>
        <input type="text" id="game_keyword" class="form-control" placeholder="Enter Game Keyword" name="game_keyword"
            aria-label="gamekey" aria-describedby="addon-wrapping">
    </div>

    <div class="form-outline w-50 mb-4 mt-4 m-auto">
        <label for="game_genre" class="form-label">Game Genre</label>
        <select name="game_genre" id="game_genre" class="form-select">
            <option value="">Select Genre</option>
            <?php 
                $select_all ="SELECT * FROM `category`";
                $result_cate = mysqli_query($con, $select_all);
                while($row_cate=mysqli_fetch_assoc($result_cate)) {

                    $category_name = $row_cate['categoryName'];
                    $category_id = $row_cate['categoryID'];

                    echo "<option value='$category_id'>$category_name</option>";

                }
                ?>
        </select>

        <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_image" class="form-label">Upload Image</label>
            <input type="file" id="game_image" class="form-control" name="game_image" aria-label="gamedesc"
                aria-describedby="addon-wrapping">
        </div>

        <div class="form-outline w-50 mb-4 mt-4 m-auto">
            <label for="game_price" class="form-label">Game Price</label>
            <input type="text" id="game_price" class="form-control" placeholder="Enter Game Price" name="game_price"
                aria-label="gamedesc" aria-describedby="addon-wrapping">
        </div>

        <div class="input w-90 mb-2">
            <div class="input-group flex-nowrap">
                <input type="submit" class="btn btn-dark p-2 my-3 border-0" value="Submit" name="submit-game"
                    aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
</form>

<?php 

addGames();
?>