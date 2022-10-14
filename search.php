<?php
    include 'header.php';
?>

   
        <div class="navbar">
        <img src="navLogo.jpeg" alt="navLogo" class="navLogo">
      
            <ul>
                <li><a class = "navlink" href="index.php">Home</a></li>
                <li><a class = "navlink" href="aboutMe.php">About</a></li>
                <li><a class = "navlink" href="allcategories.php">Categories</a></li>
                <li><a class = "navlink" href="recipes.php"> All Recipes</a></li>
                <li><a class = "navlink" href="contact.php">Contact</a></li>
            </ul>
 
        </div> 


 <form action="search.php" method="POST" class = "searchbox">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>
                   
 
 <?php

        $conn = mysqli_connect("localhost","root","","seniorproject");
        if ( $conn-> connect_error){
            die ("Connection failed: ". $conn-> connect_error);
        }
        
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn,$_POST['search']);
            $sql = "SELECT  * FROM allrecipes WHERE RecipeName LIKE '%$search%'";
            $result = $conn->query($sql);
            $queryresults = mysqli_num_rows($result);

        //    echo "There are ".$queryresults." recipes!";
        echo "<p class = 'echo'>There are $queryresults results</p>";
           
        
            if ($result-> num_rows > 0){
                while ($row = $result->fetch_assoc()){
                 
                  echo"<div >
                        <h3>".$row['RecipeName']."</h3>
                        <p>Serving Size:</p> <p>".$row['ServingSize']."</p>
                        <p>Prep Time:</p><p>".$row['PrepTime']."</p>
                        <a  class = 'recipelink' target='_new' href ='".$row['UrlLinks']."'>View Recipe</a>
                       </div>"; 
                 ?>
            

           <container class = "recipeimage">
                <tr>    
                <td><img class = "recipeimg" src="<?php echo $row['RecipeImage']; ?>"/></td>
                </tr>
                </container>
        <?php
            }}}
        ?>
