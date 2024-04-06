<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/contact.css">
    <title>csh Studio</title>
</head>
<body>

<section class="contact_container" >
        <h1 id="contact">Entrons en contact</h1>

        <section class="contact">
            <form action="../configuration/mailer.php" method="post" class="formulaireDeContact" id="contactForm">
                <div class="formulaireDeContactHead">
                    <div class="feurouge"></div>
                    <div class="feuorange"></div>
                    <div class="feuvert"></div>
                    <h1>Nouveau message</h1>
                </div>
                <div class="formulaireDeContactInfo">
                    <div class="formulaireDeContactInfoContainer">
                        <div class="formulaireDeContactInfoEmail">
                            <label for="email"><h1>Email :</h1></label>
                            <input type="email" name="email" id="email" placeholder="Entrez votre email" required>
                        </div>
                        <span class="ligne"></span>
                        <div class="formulaireDeContactInfoNom">
                            <label for="nom"><h1>Nom :</h1></label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
                        </div>
                        <span class="ligne"></span>
                        <div class="formulaireDeContactInfoSujet">
                            <label for="sujet"><h1>Sujet :</h1></label>
                            <input type="text" name="sujet" id="sujet" placeholder="Entrez votre sujet">
                        </div>
                    </div>
                </div>
                <div class="formulaireDeContactMessage">
                    <div class="formulaireDeContactMessageBox">
                        <label for="message"></label>
                        <textarea name="message" id="message" placeholder="Entrez votre message..." required></textarea>
                    </div>
                </div>
                <button type="submit" class="boutonEnvoyer">send</button>
            </form>
            <div class="resauxSociaux">
                <a href="https://www.threads.net/@clement.sainthilaire" target="_blank">
                    <svg width="87" height="100" viewBox="0 0 87 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M67.6143 46.3481C67.1836 46.1416 66.7461 45.9429 66.3029 45.7527C65.531 31.5303 57.7596 23.388 44.7106 23.3047C44.6515 23.3043 44.5927 23.3043 44.5336 23.3043C36.7286 23.3043 30.2373 26.6359 26.2419 32.6983L33.4185 37.6213C36.4032 33.0929 41.0874 32.1275 44.537 32.1275C44.5769 32.1275 44.6169 32.1275 44.6563 32.1279C48.9529 32.1553 52.1951 33.4045 54.2935 35.8406C55.8206 37.6142 56.8419 40.0651 57.3477 43.1582C53.5383 42.5108 49.4185 42.3117 45.0143 42.5642C32.6079 43.2789 24.6321 50.5145 25.1678 60.5687C25.4396 65.6687 27.9803 70.0562 32.3216 72.9224C35.9921 75.3453 40.7195 76.5302 45.6327 76.262C52.1211 75.9062 57.2112 73.4307 60.7622 68.9042C63.4591 65.4667 65.1649 61.012 65.918 55.399C69.0102 57.2651 71.3018 59.7208 72.5675 62.6729C74.7195 67.6911 74.8451 75.9375 68.1164 82.6604C62.2211 88.55 55.1346 91.0979 44.425 91.1766C32.5452 91.0885 23.5606 87.2786 17.7191 79.8526C12.249 72.899 9.42198 62.8552 9.31651 50C9.42198 37.1447 12.249 27.1008 17.7191 20.1472C23.5606 12.7213 32.545 8.91146 44.4248 8.82318C56.3909 8.91214 65.532 12.7403 71.5971 20.2021C74.5711 23.8612 76.8133 28.4629 78.2914 33.8283L86.7013 31.5845C84.9097 24.9803 82.0904 19.2894 78.2539 14.5698C70.4784 5.00348 59.1065 0.10164 44.4542 0H44.3955C29.773 0.101286 18.5284 5.02177 10.9744 14.6246C4.25229 23.17 0.784844 35.0603 0.668333 49.9648L0.667969 50L0.668333 50.0352C0.784844 64.9396 4.25229 76.8302 10.9744 85.3755C18.5284 94.9781 29.773 99.899 44.3955 100H44.4542C57.4544 99.9099 66.618 96.5062 74.1669 88.9641C84.0435 79.0969 83.7461 66.7286 80.4909 59.1359C78.1555 53.6911 73.7029 49.2688 67.6143 46.3481ZM45.1682 67.4516C39.7307 67.7578 34.0817 65.3172 33.8032 60.0896C33.5967 56.2135 36.5616 51.8885 45.5019 51.3733C46.5258 51.3143 47.5305 51.2854 48.5175 51.2854C51.7649 51.2854 54.8029 51.6009 57.5649 52.2047C56.5346 65.0703 50.4919 67.1594 45.1682 67.4516Z" fill="#75757A"/>
                    </svg>
                </a>
                <a href="https://www.figma.com/@cshd" target="_blank">
                    <svg width="67" height="100" viewBox="0 0 67 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.3342 50.0019C33.3342 40.797 40.7963 33.335 50.0012 33.335C59.2061 33.335 66.6681 40.797 66.6681 50.0019C66.6681 59.2068 59.2061 66.6688 50.0012 66.6688C40.7963 66.6688 33.3342 59.2068 33.3342 50.0019Z" fill="#1ABCFE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 83.333C0 74.1281 7.46204 66.666 16.6669 66.666H33.3339V83.333C33.3339 92.5379 25.8718 99.9999 16.6669 99.9999C7.46204 99.9999 0 92.5379 0 83.333Z" fill="#0ACF83"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.3342 0V33.3339H50.0012C59.2061 33.3339 66.6681 25.8718 66.6681 16.6669C66.6681 7.46204 59.2061 0 50.0012 0H33.3342Z" fill="#FF7262"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16.6669C0 25.8718 7.46204 33.3339 16.6669 33.3339H33.3339V0H16.6669C7.46204 0 0 7.46204 0 16.6669Z" fill="#F24E1E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 50.0019C0 59.2068 7.46204 66.6688 16.6669 66.6688H33.3339V33.335H16.6669C7.46204 33.335 0 40.797 0 50.0019Z" fill="#A259FF"/>
                    </svg>
                </a>
                <a href="https://github.com/ClementSaint-Hilaire" target="_blank">
                    <svg width="101" height="100" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.7014 0C23.081 0 0.701416 22.9449 0.701416 51.263C0.701416 73.9076 15.0243 93.1312 34.8974 99.9062C37.4039 100.373 38.3153 98.8049 38.3153 97.4365C38.3153 96.2183 38.2665 92.9977 38.2502 88.7258C24.3342 91.8129 21.4045 81.8507 21.4045 81.8507C19.1259 75.9267 15.8544 74.3414 15.8544 74.3414C11.3134 71.1709 16.1962 71.2376 16.1962 71.2376C21.2092 71.6047 23.846 76.5108 23.846 76.5108C28.3056 84.3537 35.5484 82.0843 38.3967 80.7827C38.8525 77.4619 40.1545 75.2092 41.5706 73.9243C30.4703 72.6393 18.8004 68.2339 18.8004 48.5931C18.8004 42.9862 20.7535 38.4139 23.9436 34.8262C23.439 33.5413 21.7138 28.3182 24.4319 21.2595C24.4319 21.2595 28.6311 19.8911 38.1851 26.5159C42.1728 25.3812 46.4534 24.8139 50.7014 24.7972C54.9495 24.8139 59.2301 25.3812 63.2177 26.5159C72.7717 19.8911 76.9547 21.2595 76.9547 21.2595C79.689 28.3182 77.9801 33.5413 77.4592 34.8262C80.6656 38.4139 82.5862 42.9862 82.5862 48.5931C82.5862 68.284 70.9 72.606 59.7672 73.8909C61.5575 75.4595 63.1526 78.5967 63.1526 83.3692C63.1526 90.2276 63.1038 95.7511 63.1038 97.4365C63.1038 98.8049 63.9989 100.407 66.538 99.9062C86.3948 93.1145 100.701 73.9076 100.701 51.263C100.701 22.9449 78.3219 0 50.7014 0Z" fill="#75757A"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/clément-saint-hilaire-01412a282" target="_blank">
                    <svg width="101" height="100" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M86.3514 95.8242H15.0678C9.44365 95.8242 4.8844 91.265 4.8844 85.6408V14.3572C4.8844 8.73308 9.44365 4.17383 15.0678 4.17383H86.3514C91.9755 4.17383 96.5348 8.73308 96.5348 14.3572V85.6408C96.5348 91.265 91.9755 95.8242 86.3514 95.8242ZM70.2002 82.0952C70.2002 82.6474 70.6479 83.0952 71.2002 83.0952H82.8006C83.3529 83.0952 83.8006 82.6474 83.8006 82.0952V55.1561C83.8006 43.3348 77.0995 37.619 67.7396 37.619C62.5515 37.619 59.0281 39.8573 56.9173 41.8538C56.1632 42.5671 54.4344 41.9956 54.4344 40.9575V39.9672C54.4344 39.4149 53.9867 38.9672 53.4344 38.9672H42.3274C41.7751 38.9672 41.3274 39.4149 41.3274 39.9672V82.0952C41.3274 82.6474 41.7751 83.0952 42.3274 83.0952H53.4344C53.9867 83.0952 54.4344 82.6474 54.4344 82.0952V59.9307C54.4344 53.7239 57.2915 50.0304 62.7601 50.0304C67.787 50.0304 70.2002 53.5796 70.2002 59.9307V82.0952ZM17.6086 25.0461C17.6086 29.5429 21.2264 33.189 25.6909 33.189C30.1554 33.189 33.7709 29.5429 33.7709 25.0461C33.7709 20.5493 30.1554 16.9032 25.6909 16.9032C21.2264 16.9032 17.6086 20.5493 17.6086 25.0461ZM32.5902 82.0952C32.5902 82.6474 32.1425 83.0952 31.5902 83.0952H19.923C19.3707 83.0952 18.923 82.6474 18.923 82.0952V39.9672C18.923 39.4149 19.3707 38.9672 19.923 38.9672H31.5902C32.1425 38.9672 32.5902 39.4149 32.5902 39.9672V82.0952Z" fill="#75757A"/>
                    </svg>
                </a> 
            </div> 
        </section>
        <section class="message_send">
            <img src="../img/message envoyé.png" alt="message send">
        </section>
    </section>


</body>
<script src="../js/mail.js"></script>
</html>