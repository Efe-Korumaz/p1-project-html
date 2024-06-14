<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keyboards selectie</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <img src="../img/Alter_Keyslogo.png" alt="LOGO">
        <nav>
            <ul>
                <div class="dropdown">
                    <a href="./index.php" class="active">Home</a>
                </div>
                <div class="dropdown">
                    <a href="./index.php">Bedrijf</a>
                    <div class="dropdown-content">
                        <a href="../Bedrijf/eco.php">Eco vriendelijk</a>
                        <a href="../Bedrijf/LER.php">Levering en retour</a>
                        <a href="../Bedrijf/medewerkers.php">Medewerkers</a>
                        <a href="../Bedrijf/doelstelling.php">Doelstelling</a>
                        <a href="../Bedrijf/geschiedenis.php">Geschiedenis</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="./index.php">Overzichten</a>
                    <div class="dropdown-content">
                        <a href="#">Enkelvoudig</a>
                        <a href="./klanten.php">klanten</a>
                        <a href="./Landen.php">Landen</a>
                        <a href="./category.php">Category</a>
                        <a href="./Leverancier.php">Leveranciers</a>
                        <a href="">Aankopen</a>
                        <a href="">Product</a>
                    </div>
                </div>
                </div>
                <div class="dropdown">
                    <a href="./index.php">Informatie</a>
                    <div class="dropdown-content">
                        <a href="./index.php">Levering per land</a>
                        <a href="./index.php">Product per catergorie</a>
                        <a href="./index.php">Aankoop per klant</a>
                        <a href="./index.php">Regels per aankoop</a>
                        <a href="./index.php">Aantal per product</a>
                        <a href="./index.php">Deel per product</a>
                        <a href="./index.php">Deel per catergorie</a>
                        <a href="./index.php">Product prijs -Levering</a>
                        <a href="./index.php">Product prijs -Catergorie</a>
                        <a href="./index.php">Totaal prijs -Aankoop</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="../index.php">Toevoegen</a>
                    <div class="dropdown-content">
                        <a href="../index/formulieren.php">Klant</a>
                        <a href="../index.php">Leverancier</a>
                        <a href="../index.php">Land</a>
                        <a href="">Product</a>
                        <a href="./category.php">Category</a>
                        <a href="../index.php">Deel product</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="./index.php">Uw Mening</a>
                    <div class="dropdown-content">
                        <a href="./index.php">Klacht product</a>
                        <a href="./index.php">Compliment site</a>
                        <a href="./uwmening/complaint/complaint.php">Klacht site</a>
                        <a href="./index.php">Klacht medewerker</a>
                        <a href="./uw mening/klachtmedewerker.php">Compliment keuzes</a>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <section class="bg-asset">
        <img src="../assets/mount2.png" class="mount2">
        <img src="../assets/mount1.png" class="mount1">
        <img src="../assets/bush2.png" class="bush2">

        <h1 class="title">Categorieën</h1>

        <img src="../assets/bush1.png" class="bush1">
        <img src="../assets/leaf2.png" class="leaf2">
        <img src="../assets/leaf1.png" class="leaf1">
    </section>
    <section class="about">
        <form action="#" method="post">
            <label for="modelType">categorynaam</label>
            <input type="text" name="categoryName">
            <input type="submit" value="Selecteren" name="modelType">
        </form>
        <?php
        // Neem selectiecriterim over uit het formulier
        if (isset($_POST["modelType"])) {
            $selector = "%" . $_POST["categoryName"] . "%";
        } else { //Of vul het selectiecriterium met wildcards
            $selector = "%%";
        }
        ;

        // verbinding maken met database REIZEN
        require_once ("../dbconn.php");

        // Met selector de gegevens in de tabel kroeg selecteren
        $qrySelectcategory = $dbconn->prepare("SELECT * from category INNER JOIN model ON model.categoryid = category.id WHERE modeltype LIKE :selector;");
        $qrySelectcategory->bindValue("selector", $selector);
        $qrySelectcategory->execute();
        $qrySelectcategory = $qrySelectcategory->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <thead>
                <th>id</th>
                <th>name</th>
                <th>modelType</th>
            </thead>
            <tbody>

                <?php
                foreach ($qrySelectcategory as $categoryData) {
                    echo "<tr>";
                    echo "<td>" . $categoryData['id'] . "</td>";
                    echo "<td>" . $categoryData['modelname'] . "</td>";
                    echo "<td>" . $categoryData['modeltype'] . "</td>";
                    echo "</tr>";
                }


                ?>
            </tbody>
        </table>
    </section>
    <script src="../script.js"></script>
</body>

</html>