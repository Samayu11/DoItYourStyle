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

    <main class="main-hero">
        <table  class="hero-table">
                <tr>
                    <td class="sec1" style="display:flex; justify-content:center; align-items:center; ">
                        <div class="title-hero" id="title-hero">
                            <h1 class="title">Do It Your <span>Style</span></h1>
                            <p class="motto">90's Vibe, Timeless Style</p>
                        </div>
                    </td>
                    <td class="sec1" >
                        <img src="./assets/hero.png" alt="hero" class="hero-model">
                    </td>
                </tr>
            </table>

        <div class="hero-mobile">
            <div class="sec1" style="display:flex; justify-content:center; align-items:center; ">
                        <div class="title-hero" id="title-hero">
                            <h1 class="title">Do It Your <span>Style</span></h1>
                            <p class="motto">90's Vibe, Timeless Style</p>
                        </div>

                         <div class="sec1" >
                            <img src="./assets/hero.png" alt="hero" class="hero-model">
                          </div>
            </div>

            
        </div>
    </main>

    <?php
        include 'layout/footer.html';
    ?>
    <script src="./script/main.js"></script>
</body>
</html>