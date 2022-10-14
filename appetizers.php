<html>
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's best friend</title>
    <link rel="stylesheet" href="BreakfastCategory.css?v=<?php echo time(); ?>">
    <div class ="backgroundImage">
        <div class="navbar">
            
            <img src="navLogo.jpeg" alt="navLogo" class="navLogo">
            <h1>Appetizer Recipes</h1>
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
        <table>
        <tr>
        <th class = "label1">Recipe Image</th>
        <th class="label2">Recipe Name</th>
        <th>Serving Size</th>
        <th>Prep Time</th>
        <th class="label3">Link</th>
        <tr>

        <?php
        $conn = mysqli_connect("localhost","root","","seniorproject");
        if ( $conn-> connect_error){
            die ("Connection failed: ". $conn-> connect_error);
        }
        $sql = "SELECT RecipeName, RecipeImage ,ServingSize, PrepTime, UrlLinks from appetizers";
        $result = $conn->query($sql);
        
        
        
        if ($result-> num_rows > 0){
            while ($row = $result->fetch_assoc()){
                ?>
                 <tr>      
                 <td><img class = "recipeimg" src="<?php echo $row['RecipeImage']; ?>"/></td>
                    <td> <?php echo $row['RecipeName']; ?> </td>
                    <td> <?php echo $row['ServingSize']; ?> </td>
                    <td> <?php echo $row['PrepTime']; ?> </td>
                    <td> <a  class = 'recipelink' target = '_blank' href="<?php echo $row['UrlLinks'];?>"> View Recipe </a></td>
    
                    
                </tr>
        <?php
            }}
        ?>
        </table>
    </body>
</html>