<?php

$titleProduct= $_GET['title'];
$prodactIMG= $_GET['img'];
$prodactIMG1= $_GET['img1'];
$prodactIMG2= $_GET['img2'];
$prodactIMG3= $_GET['img3'];
$prodactPrice= $_GET['price'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do it your style</title>
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

    

    <div class="shop-section" id="shop-section">
         <div class="shopProduct">
             <div class="shop-productIMG" id="shop-productIMG">
                        <div class="prevbutton" id="prevbutton" style="cursor:pointer;">
                            <i class="bi bi-caret-left-fill"></i>
                        </div>
                        <div class="nexbutton" id="nexbutton" style="cursor:pointer;">
                             <i class="bi bi-caret-right-fill"></i>
                        </div>
                    <img class="shop-img" id="shop-img1" src="<?= $prodactIMG ?>" width="400px" height="400px" style="display:none;">
                    <img class="shop-img" id="shop-img2" src="<?= $prodactIMG1 ?>" width="400px" height="400px" style="display:none;">
                    <img class="shop-img" id="shop-img3" src="<?= $prodactIMG2 ?>" width="400px" height="400px" style="display:none;">
                    <img class="shop-img" id="shop-img4" src="<?= $prodactIMG3 ?>" width="400px" height="400px" style="display:none;">
                </div>

             <div class="shop-productDesc">
                <h2 class="productTitle">
                    <?= $titleProduct ?>
                </h2>

                <h1 class="productPrice">
                    <?= $prodactPrice ?>
                </h1>

             </div>
         </div>
    </div>

    <div class="shopSection2">

    </div>

    <script src="./script/main.js?v=<?= time(); ?>"></script>
     <script>
        
        // sliderPreview-shoppage
        const shopImg1 = document.getElementById('shop-img1');
        const shopImg2 = document.getElementById('shop-img2');
        const shopImg3 = document.getElementById('shop-img3');
        const shopImg4 = document.getElementById('shop-img4');

        let imagesPreview = [shopImg1, shopImg2, shopImg3, shopImg4];
        let imgIndex = 0;

        console.log(shopImg1, shopImg2, shopImg3, shopImg4);

        function showImagesPreview(indexImg){
            imagesPreview.forEach(img => img.style.display = "none");
            imagesPreview[indexImg].style.display = "block";
        }

        showImagesPreview(imgIndex);
        // sliderPreview-shoppage

        //prev&next button
        const prevButton = document.getElementById('prevbutton');
        const nexButton = document.getElementById('nexbutton');

        prevButton.addEventListener('click', ()=>{
                if(imgIndex > 0){
                imgIndex -= 1;
                showImagesPreview(imgIndex);
            }
        })

        nexButton.addEventListener('click', ()=>{
                if(imgIndex < imagesPreview.length - 1){
                imgIndex += 1;
                showImagesPreview(imgIndex);
            }else{
                imgIndex = 0;
                showImagesPreview(imgIndex);
            }
        })
        //prev&next button
     </script>
     <?php
        include 'layout/footer.html';
    ?>
</body>
</html>