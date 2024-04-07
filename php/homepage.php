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

    <section class="landingpage">
        <div class="textEtImageContainer">
            <div class="textContainer">
                <h1>csh Studio</h1>
                <h2>Create. Together.</h2>
            </div>
            <img src="../img/studio display.png" id="studioImage">
        </div>
        
    </section>
    <div>
            <h1>La vidéo de non-responsabilité est uniquement destinée à des fins éducatives. Clause de non-responsabilité relative aux droits d'auteur En vertu de l'article 107 de la loi sur le droit d'auteur de 1976, une « utilisation équitable » est autorisée à des fins telles que la critique, les commentaires, les reportages d'actualité, l'enseignement, l'érudition et la recherche. L'utilisation équitable est une utilisation autorisée par la loi sur le droit d'auteur qui pourrait autrement constituer une violation. Une utilisation à but non lucratif, éducative ou personnelle fait pencher la balance en faveur d'une utilisation équitable.</h1>
            <h1>La vidéo de non-responsabilité est uniquement destinée à des fins éducatives. Clause de non-responsabilité relative aux droits d'auteur En vertu de l'article 107 de la loi sur le droit d'auteur de 1976, une « utilisation équitable » est autorisée à des fins telles que la critique, les commentaires, les reportages d'actualité, l'enseignement, l'érudition et la recherche. L'utilisation équitable est une utilisation autorisée par la loi sur le droit d'auteur qui pourrait autrement constituer une violation. Une utilisation à but non lucratif, éducative ou personnelle fait pencher la balance en faveur d'une utilisation équitable.</h1>
            <h1>La vidéo de non-responsabilité est uniquement destinée à des fins éducatives. Clause de non-responsabilité relative aux droits d'auteur En vertu de l'article 107 de la loi sur le droit d'auteur de 1976, une « utilisation équitable » est autorisée à des fins telles que la critique, les commentaires, les reportages d'actualité, l'enseignement, l'érudition et la recherche. L'utilisation équitable est une utilisation autorisée par la loi sur le droit d'auteur qui pourrait autrement constituer une violation. Une utilisation à but non lucratif, éducative ou personnelle fait pencher la balance en faveur d'une utilisation équitable.</h1>
            <h1>La vidéo de non-responsabilité est uniquement destinée à des fins éducatives. Clause de non-responsabilité relative aux droits d'auteur En vertu de l'article 107 de la loi sur le droit d'auteur de 1976, une « utilisation équitable » est autorisée à des fins telles que la critique, les commentaires, les reportages d'actualité, l'enseignement, l'érudition et la recherche. L'utilisation équitable est une utilisation autorisée par la loi sur le droit d'auteur qui pourrait autrement constituer une violation. Une utilisation à but non lucratif, éducative ou personnelle fait pencher la balance en faveur d'une utilisation équitable.</h1>

    </div>
    <div id="overlayText1" class="overlayText">
        <h1>Digital art</h1> 
    </div>
    <div id="overlayText2" class="overlayText">
        <h1>Code</h1> 
    </div>
        <script type="text/javascript">
            const img = document.getElementById('studioImage');
            const overlayText1 = document.getElementById('overlayText1');
            const overlayText2 = document.getElementById('overlayText2');

            window.addEventListener('scroll', function(){
                img.style.width = 40 + window.pageYOffset/4 + '%'; 
                // Affichez le texte lorsque l'image atteint 150% de sa largeur initiale
            if (parseInt(img.style.width) >= 150) {
                overlayText1.style.visibility = 'visible';
                overlayText1.style.position = 'absolute';
            } else {
                overlayText1.style.visibility = 'hidden';
            }

            const threshold = window.innerHeight * 0.8; // Ajustez ce seuil selon vos besoins
            if (imageTopPosition < threshold) {
                overlayText2.style.visibility = 'visible';
                overlayText2.style.position = 'absolute';
            } else {
                overlayText2.style.visibility = 'hidden';
            }
           
        });
</script>

</body>

</html>