



}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="recipestyle.css?v=<?php echo time(); ?>">

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
<h2>All recipes:</h2>

<form action="search.php" method="POST">
    <input class="searchBar" type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"><span></span>Search</button>
</form>



<table>
        <tr>
        <th class = "label1">Recipe Image</th>
        <th>Recipe Name</th>
        <th>Serving Size</th>
        <th>Prep Time</th>
        <th>Link</th>
        <tr>
<?php
        $conn = mysqli_connect("localhost","root","","seniorproject");
        if ( $conn-> connect_error){
            die ("Connection failed: ". $conn-> connect_error);
        }
        $sql = "SELECT RecipeName, RecipeImage ,ServingSize, PrepTime, UrlLinks from allrecipes";
        $result = $conn->query($sql);
        
        
        
        if ($result-> num_rows > 0){
            while ($row = $result->fetch_assoc()){
                ?>
                 <tr>      
                    <td><img class = "recipeimg" src="<?php echo $row['RecipeImage']; ?>"/></td>
                    <td> <?php echo $row['RecipeName']; ?> </td>
                    <td> <?php echo $row['ServingSize']; ?> </td>
                    <td> <?php echo $row['PrepTime']; ?> </td>
                    <td> <a class = "recipelink" target = '_blank' href="<?php echo $row['UrlLinks'];?>"> View Recipe </a></td>
    
                    
                </tr>
        <?php
            }}
        ?>
    </table>

</body>
</html>

