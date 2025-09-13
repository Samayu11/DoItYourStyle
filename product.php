<?php
    include 'service/database.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quando&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/breakpoint.css">
</head>
<body>
    <?php
        include 'layout/navbar.html';
    ?>

    <div class="search-section" id="search-section">
        <form  class="search-box">
            <input class="search-bar" id="search-bar" name="search-bar" placeholder="seek your style" >
            <button type="submit" class="search-submit" name="search-submit" id="search-submit"><i class="bi bi-search" style="color:white;"></i></button>
        </form>

        <div class="submenu-product">
            <ul class="submenu" style="list-style-type:none;">
                <li>
                    <a href="" class="link-submenu">Top</a>
                </li>
                <li>
                    <a href="" class="link-submenu">Outwear</a>
                </li>
                <li>
                    <a href="" class="link-submenu">Bottom</a>
                </li>
                <li>
                    <a href="" class="link-submenu">Shoes</a>
                </li>
                <li>
                    <a href="" class="link-submenu">Shirt</a>
                </li>
                <li>
                    <a href="" class="link-submenu">T-shirt</a>
                </li>
                <li>
                    <a href="" class="link-submenu">Pants</a>
                </li> 
            </ul>
        </div>
    </div>

    <div class="product-section">
        <div class="recomend-title-wrapp">
                <h2 class="recomend-title">
                    Recomendation for you
                </h2>
            </div>
        <div class="recomend-cloth" id="recomend-cloth">
              <div class="prevBtn" id="prevBtn">
                  <i class="bi bi-caret-left-fill"></i>
             </div>

              <div class="nextBtn" id="nextBtn">
                <i class="bi bi-caret-right-fill"></i>
            </div>

            <div class="recomnend-product-wrapp">
                <?php foreach($box as $row) :?>

                    <div class="card-product" data-id="<?= $row['id']?>"
                                              data-title="<?= $row['product'] ?>"
                                              data-desc="<?= $row['Description'] ?>"  
                                              data-img="<?= $row['image'] ?>" 
                                              data-img1="<?= $row['image1'] ?>"
                                              data-img2="<?= $row['image2'] ?>"
                                              data-img3="<?= $row['image3'] ?>"
                                              data-qty="<?= $row['quantity'] ?>"
                                              data-price="<?= $row['price'] ?>"
                                              onclick="showModal(this)">
                        <img src="<?= $row['image'] ?>" width="200px" height="200px" class="card-product-img">
                    </div>

                    <?php endforeach ;?>
            </div>
        </div>

        <!-- <div class="summer">

        </div>

        <div class="cristmas">

        </div>

        <div class="cosplay">

        </div> -->
    </div>

    <!-- modal card -->
        <div class="modal-wrapper" id="modal-wrapper">
            <div class="modal" id="modal" style="display:flex;">
                
                <table class="modal-table">
                    <tr class="modal-row">
                        <td class="modal-td" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                            <img class="modal-img" id="modal-img" src="" alt="product-img"  >
                            <img src="" alt="">
                            <img src="" alt="">
                            <img src="" alt="">
                        </td>
                        <td class="modal-td">
                                <h1 class="modal-title" id="modal-title" style="color:var(--tosca);"></h1>
                               <strong>Description:</strong> <br> <p class="modal-desc" id="modal-desc"> </p> <br>
                                <strong>Quantity:</strong> <br> <p class="modal-qty" id="modal-qty"></p> <br>
                                <strong>Price:</strong> <br>  <p class="modal-price" id="modal-price"></p>
                               <div style="text-align:right; padding-right:20px;">
                                 <button class="modal-btn" id="modal-btn">
                                    <a href="shoppage.php" style="color:white; text-decoration:none;">Buy</a>
                                </button>
                               </div>
                        </td>
                    </tr>
                </table>

                <div class="modal-close" id="modal-close">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>  
        </div>
     <!-- modal card  -->
    <?php
        include 'layout/footer.html';
    ?>
    <script src="./script/main.js"></script>
</body>
</html>