<?php 

    @include '../CRUD/config.php';

     $select = mysqli_query($conn, "SELECT * FROM products");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Sticks N Sushi | Menu</title>
</head>
<body> 
    <section id="menu-top">
        
        <div class="menu-top-div">
        <a href="../redirect.php"><button>Terug</button></a>
            <div class="menu-top-border"></div>
        </div>
        <div class="menu-box">
            
            <section id="items-list">
            <div class="item">
            <table class="product-display-table">
                        <?php while($row = mysqli_fetch_assoc($select)){  ?>
                        <tr>
                            <td><img class="img-food" src="../CRUD/uploaded_img/<?php echo $row['image']; ?>" height="200" alt=""></td>
                            <p class="product_naam"><?php echo $row['name']; ?></p>
                            <p class="product_prijs">€<?php echo $row['price']; ?>.00</p>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            </section>
        </div>
    </section>
</body>
</html>