<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/homepage.css">
    <title>csh Studio</title>
</head>
<body>
    <?php include_once './navbar.php'; ?>

    <section class="landingpage" id="landingpage">
        <div class="textEtImageContainer">
            <div class="textContainer">
                <h1>csh Studio</h1>
                <h2>Create. Together.</h2>
            </div>
            <img src="../img/studio display.png" id="studioImage">
        </div>
    </section>
    <div class="vide"></div>

    <ul id="overlayText" class="overlayText">
        <li>Web design</li>
        <li>Photography</li>
        <li>Code</li>
        <li>Writing</li>
        <li>Video & photo composition</li>
        <li>Music</li>
        <li>Digital art</li> 
    </ul>
    <div class="vide"></div>

        <script type="text/javascript">
            const img = document.getElementById('studioImage');
            const overlayText = document.getElementById('overlayText');
            const landingpage = document.getElementById('landingpage');

            window.addEventListener('scroll', function(){
                img.style.width = 40 + window.pageYOffset/4 + '%'; 
                if (parseInt(img.style.width) >= 150) {
                    landingpage.style.backgroundImage = 'url(../img/studio display.png)';
                    overlayText.style.display = 'flex';
                } else {
                    overlayText.style.display = 'none';
                }

                if (parseInt(img.style.width) >= 1170) {
                    landingpage.style.background = 'none';
                    img.style.width = 40 - + window.pageYOffset/4 + '%'; 
                }
            });
</script>

</body>

</html>