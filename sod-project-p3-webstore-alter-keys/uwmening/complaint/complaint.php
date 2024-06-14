<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klachten</title>
  <link rel="stylesheet" href="../../style.css">
</head>

<body>
  <header>
    <img src="../../img/Alter_Keyslogo.png" alt="LOGO">
    <nav>
      <ul>
        <div class="dropdown">
          <a href="../index.php" class="active">Home</a>
        </div>
        <div class="dropdown" class="active">
          <a href="../index.php">Bedrijf</a>
          <div class="dropdown-content">
            <a href="./eco.php">Eco vriendelijk</a>
            <a href="./LER.php">Levering en retour</a>
            <a href="./medewerkers.php">Medewerkers</a>
            <a href="./doelstelling.php">Doelstelling</a>
            <a href="./geschiedenis.php">Geschiedenis</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="../index.php">Overzichten</a>
          <div class="dropdown-content">
            <a href="#">Enkelvoudig</a>
            <div>
              <a href="">Categorieën</a>
              <a href="">Klanten</a>
              <a href="">Leveranciers</a>
              <a href="">Producten</a>
              <a href="">Aankopen</a>
              <a href="">Landen</a>
              <a href="">Product</a>
            </div>
            <a href="../index.php">Sublink 2</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="../index.php">Informatie</a>
          <div class="dropdown-content">
            <a href="./index.php">Sublink 1</a>
            <a href="./index.php">Sublink 2</a>
            <a href="./index.php">Sublink 3</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="../index.php">Toevoegen</a>
          <div class="dropdown-content">
            <a href="./index.php">Klant</a>
            <a href="./index.php">Leverancier</a>
            <a href="./index.php">Land</a>
            <a href="./index.php">Product</a>
            <a href="./index.php">Categorie</a>
            <a href="./index.php">Deel product</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="../index.php">Uw Mening</a>
          <div class="dropdown-content">
            <a href="../complaint/complaint.php">Klacht product</a>
            <a href="./index.php">Compliment site</a>
            <a href="../complaint.php">Klacht site</a>
            <a href="./index.php">Klacht medewerker</a>
            <a href="./uw mening/klachtmedewerker.php">Compliment keuzes</a>
          </div>
        </div>
      </ul>
    </nav>
  </header>

  <section class="bg-asset">
    <img src="../../assets/mount2.png" class="mount2">
    <img src="../../assets/mount1.png" class="mount1">
    <img src="../../assets/bush2.png" class="bush2">

    <h1 class="title">Klachten site</h1>

    <img src="../../assets/bush1.png" class="bush1">
    <img src="../../assets/leaf2.png" class="leaf2">
    <img src="../../assets/leaf1.png" class="leaf1">
  </section>

  <section class="about">
  <?php
    session_start();
    ?>
    <div class="mainbig">
      <div class="forum2">
        <form action="./feedback.php" method="post">
          <div class="name">
            <input type="text" name="firstname" placeholder="Voornaam" required>
          </div>
          <div class="name">
            <input type="text" name="lastname" placeholder="Achternaam" required>
          </div>
          <div class="name">
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div>
<<<<<<< Updated upstream
            <input type='text' name="complaint" placeholder="plaats hier uw klacht over de website"
              required></input>
=======
            <textarea name="complaint" form="complaintform" placeholder="plaats hier uw klacht over website"
              required></textarea>
>>>>>>> Stashed changes
          </div>
          <input type="submit" value="submit" name="submit">
        </form>
      </div>
    </div>
  </section>

  <div class="footer">
    &copy; Copyright 2024 AlterKeys
  </div>
</body>
<script src="../../script.js"></script>

</html>