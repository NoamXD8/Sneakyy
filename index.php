<!-- BOULZE et GROSSMAN -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNEAKYY</title>
    <link rel="stylesheet" href="siteweb.css">
    <script src="https://kit.fontawesome.com/5d94f6b61f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Bare de naviguation -->
    <nav>
        <a  class="sneaky" href="index.php"><h1>SNEAKYY</h1></a>
        <!-- Pour différents trucs en haut -->
        <div class="onglet">
<!-- Ce code php va permettre de vérfier si l'utilisateur connecté est l'admin du site web si oui il accède à àjout de produit -->
    <?php
    // Connexion à la base de données
$host = 'localhost';
$user = 'root';
$mdp = 'root';
$bdd = 'Site';

$idcon = mysqli_connect($host, $user, $mdp, $bdd) ;
if(!$idcon){
    die("La connexion a échoué : " . mysqli_connect_error());
}
        // Démarrez la session
        session_start();

        // Vérifiez si l'e-mail du client est stocké dans la session
        if (isset($_SESSION['email'])) {
            // Récupérez l'e-mail du client depuis la session
            $email = $_SESSION['email'];

            // Effectuez une requête SQL pour récupérer l'ID du client correspondant à cet e-mail
            $sql = "SELECT id_client FROM Client WHERE email = '$email'";
            // Exécutez la requête SQL et récupérez l'ID du client
            $result = mysqli_query($idcon, $sql);
            $row = mysqli_fetch_assoc($result);
            $id_client = $row['id_client'];

    // Vérifiez si l'ID du client est égal à 1 (compte admin)
    if ($id_client == '19') {
        // Affichez le lien "ajout produit" uniquement si l'ID du client est égal à 1
        echo '<a href="ajout_produit.html" class="lien"><p class="link">Ajout Produit</p></a>';
    }
}
?>
            <a href="soon.html" class="lien"><p class="link">Bientôt Disponible</p></a>
            <a href="sneakers.html" class="lien"><p class="link">Sneakers</p></a>
            <a href="contact.html" class="lien"><p class="link">Nous contacter</p></a>

            <form method="GET" action="search_traitement.php">
               <input type="search" name="search" placeholder="Rechercher">
            </form>
            <a class="lien" href="favori.php"><p><i class="fa-sharp fa-solid fa-heart "></i></p></a>
            <a class="lien" href="panier.php"><p><i class="fa-sharp fa-solid fa-cart-shopping"></i></p></a>
            <a class="lien" href="connexion.php"><p><i class="fa-solid fa-user"></i></p></a>
        </div>
    </nav>
    <!-- End nav bar -->

    <!-- Header -->
    <header>
        <h1>Bienvenue sur SNEAKYY</h1>
    </header>
    <!-- end Header -->

    <!-- Section Principale -->
    <section class="principale">
        <!-- Articles -->
        <div class="carts">
            <!-- AJ1 -->
            <div class="cart">
                <a href="jordan1test.php"><img src="Images/aj1lostandfound.webp" alt="aj1chicago"></a>
                <div class="cart-header">
                    <h4 class="title">Air Jordan 1 Lost and Found</h4>
                    <h4 class="prix">180€</h4>
                </div>
            </div>
            <!-- Dunk Low -->
            <div class="cart">
                <a href="dunklowpanda.php"><img src="Images/dunklowpanda.webp" alt="dunklow"> </a>
                <div class="cart-header">
                    <h4 class="tittle">Dunk Low Panda</h4>
                    <h4 class="prix">110€</h4>
                </div>
            </div>
            <!-- Jordan 4 -->
            <div class="cart">
                <a href="j4oreo.php"><img src="Images/aj4oreo.webp" alt="aj4oreo"> </a>
                <div class="cart-header">
                    <h4 class="tittle">Air Jordan 4 Oreo</h4>
                    <h4 class="prix">200€</h4>
                </div>
            </div>
        </div>
        <!-- Fin des articles -->

        <!-- Vidéo Présentation -->
        <div class="video" align="center">
            <iframe src="https://www.youtube.com/embed/bPd8ChyVG9Y" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        </iframe>
        </div>

        <!-- Fin de vidéo -->
    </section>

    <!-- Footer -->
    <footer class="footer">
        <h4>About Us</h4>
        <p>Nous sommes deux étudiants en Licence MIASHS à Paris 1 Panthéon Sorbonne. Bonjour et bienvenue sur notre site nous espérons qu'il vous a plu.</p>
        <h4>Nous contacter</h4>
        <div class="contact">
            <p><i class="fa-brands fa-facebook fa-2x"></i></p>
            <p><i class="fa-brands fa-twitter fa-2x"></i></p>
            <p><i class="fa-solid fa-envelope fa-2x"></i></p>
            <p><i class="fa-brands fa-instagram fa-2x"></i></p>
        </div>
        <!-- En savoir plus -->
        <h4>En savoir plus</h4>
        <a href="#">CGV</a><br>
        <a href="#">CGU</a><br>
        <a href="#">Conditions d'échanges et de retours</a><br>
        <a href="#">Politique de confidentialité</a>
       <br>

       <h4>Paiement</h4>
       <div class="paiement">
       <p><i class="fa-brands fa-cc-visa fa-2x"></i></p>
       <p><i class="fa-brands fa-cc-mastercard fa-2x"></i></p>
       <p><i class="fa-brands fa-paypal fa-2x"></i></p>
       </div>
        <p>&copy; 2023 SNEAKYY</p>
    </footer>
</body>
</html>