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
                <!-- <div class="hat1" data-title="Bowl Hat"
                                  data-desc="Bowl Hat like mafia"
                                  data-img="productIMG/hat1/ha1-front.png"
                                   data-img1="productIMG/hat1/ha1-top.png"
                                    data-img2="productIMG/hat1/ha1-bottom.png"
                                     data-img3="productIMG/hat1/ha1-side.png"
                                  data-qty="10"
                                  data-price="$4"
                                  onclick="showModal(this)"> 
                    <img src="productIMG/hat1/ha1-front.png" alt="hat-front" width="200px" height="200px" class="hat1-img">
                </div>

                <div class="flannel"data-title="Flannel"
                                    data-desc="female Flannel"
                                    data-img="productIMG/flannel/flannel-front.png"
                                      data-img1="productIMG/flannel/flannel-side.png"
                                         data-img2="productIMG/flannel/flannel-bck.png"
                                    data-qty="4"
                                    data-price="$20"
                                    onclick="showModal(this)"> 
                    <img src="productIMG/flannel/flannel-front.png" alt="flannel" width="200px" height="200px" class="flannel-img" id="flannel-front">
                </div>

                <div class="pants"data-title="Boxer Pants"
                                  data-desc="Short Pants (not stink) "
                                  data-img="productIMG/pants/pants-front.jpg"
                                   data-img1="productIMG/pants/pants-back.jpg"
                                  data-qty="50"
                                  data-price="$10"
                                  onclick="showModal(this)"> 
                     <img src="productIMG/pants/pants-front.jpg" alt="pants" width="200px" height="200px" class="pants-img" id="pants-front">
                </div>

                <div class="jacket"data-title="Buble Jacket"
                                  data-desc="Rich Dripp for Rich dude"
                                  data-img="productIMG/jacket/jacket-front.png"
                                     data-img1="productIMG/jacket/jacket-side.png"
                                        data-img2="productIMG/jacket/jacket-back.png"
                                  data-qty="12"
                                  data-price="$20"
                                  onclick="showModal(this)"> 
                     <img src="productIMG/jacket/jacket-front.png" alt="jacket" width="200px" height="200px" class="jacket-img" id="jacket-front">
                </div>

                <div class="jeans"data-title="New JeanZ"
                                  data-desc="OMG OMG NJZ songs"
                                  data-img="productIMG/jeans/jeans-front.jpg"
                                     data-img1="productIMG/jeans/jeans-side.jpg"
                                      data-img2="productIMG/jeans/jeans-backk.jpg"
                                  data-qty="10"
                                  data-price="$30"
                                  onclick="showModal(this)"> 
                      <img src="productIMG/jeans/jeans-front.jpg" alt="jeans" width="200px" height="200px" class="jeans-img" id="jeans-front">
                </div>

                <div class="shoes" data-title="Sneaker" 
                                  data-desc="Clean senaker for you"
                                  data-img="productIMG/shoes/shoes-front.png"
                                   data-img1="productIMG/shoes/shoes-side.png"
                                    data-img2="productIMG/shoes/shoes-up.png"
                                     data-img3="productIMG/shoes/shoes-bottom.png"
                                  data-qty="45"
                                  data-price="$15"
                                  onclick="showModal(this)"> 
                     <img src="productIMG/shoes/shoes-front.png" alt="shoes" width="200px" height="200px" class="shoes-img" id="shoes-front">
                </div> -->
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