<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script
      type="module"
      src="https://kit.fontawesome.com/d0b4d9ccc9.js"
      crossorigin="anonymous"
      defer
    ></script>
    <title>Animaux marins</title>
</head>
<body>
    <?php
    include "db_conn.php";
    $conn = ouvreConnexion();
    ?>
<header class="header_title">
    <h1>Les animaux marins</h1>
    <h2>Les fonds marins comme vous ne les avez jamais vus!</h2>
    </header>
    <main>
        <?php
        $query = "SELECT * FROM `informations`;";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                    "<section class=\"card\">
                        <header class=\"card__header\">
                            <div>
                                <fig class=\"card__image\">
                                    <div>
                                    <img src=\"" . $row["image_url"] . "\" alt=\" " . $row["nom_commun"] . "  \" />
                                        <div class=\"card__categorie\">
                                                <p>" . "Phylum : "  . $row["phylum"] . "</p>
                                                <p>" . "Groupe : " . $row["groupe"] . "</p>
                                                <p>" . "Classe : " . $row["classe"] . "</p>
                                        </div> 
                                    </div>
                                </fig>
                                <figcaption>" . $row["nom_commun"] . "</figcaption>
                                <div class=\"card__animal\">
                                <p>" . $row["nom_latin"] . "</p>
                            </div>
                            </div>
                        </header>
                        <div class=\"card__main\">
                            <div class=\"card__lieu\">
                                <p>" . "Habitat : " . $row["habitat"] . "</p>
                                <p>" . "Répartition : " . $row["repartition"] . "</p>
                            </div>
                            <div class=\"card__description\">
                                <p>" . "Description : " . $row["description"] . "</p>
                            </div>
                            <div class=\"card__btn\">
                                <a href=\"" . $row["wikipedia_url"] . "\" target=\"_blank\">
                                    <button>Wikipédia</button>
                                </a>
                            </div>
                        </div>
                    </section>";
            }
        }
        ?>
    </main>
    <footer>
    <div>
        <div>
        <h3>Eve Cloutier • PMI</h3>
        <i class="fa-solid fa-water"></i>
        <h4><time datetime="2024-11-19">19 novembre 2024</time></h4>
        </div>
    </div>
    </footer>
</body>
</html>