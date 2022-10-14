

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's best friend</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    
    <div class ="backgroundImage">
        <div class="navbar">
            
            <img src="navLogo.jpeg" alt="navLogo" class="navLogo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutMe.php">About</a></li>
                <li><a href="allcategories.php">Categories</a></li>
                <li><a href="recipes.php"> All Recipes</a></li>
                <li><a href="contact.php">Contact</a></li>
               
            </ul>
 
        </div> 
    </div>
</head>
<body>
    
       <div class="search">
            <h1>Find a Recipe</h1>
            <form action = "search.php" method = "POST">
            <input class="searchBar" name = "search"  type="text" placeholder="Search..">
            </input>
            <div>
                <button type="submit" name="submit-search"><span></span>Search</button>
            </div>
            </form>
            <br>

           
            

            <p><b>Search By Category</b></p>
            <div class="ingredients">
                <ul>
                    <li><a href="BreakfastCategory.php">Breakfast</a></li>
                    <li><a href="lunch.php">Lunch</a></li>
                    <li><a href="DinnerCategory.php">Dinner</a></li>
                </ul>
            </div>
       </div>
</body>
</html>