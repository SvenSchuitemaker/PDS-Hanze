<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: ../chatapp/users.php");
}
?>

<?php include_once "../chatapp/header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>PDS Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Naam</label>
            <input type="text" name="fname" placeholder="Naam" required>
          </div>
          <div class="field input">
            <label>Achternaam</label>
            <input type="text" name="lname" placeholder="Achternaam" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Adres</label>
          <input type="text" name="email" placeholder="Vul uw email" required>
        </div>
        <div class="field input">
          <label>Wachtwoord</label>
          <input type="password" name="password" placeholder="Vul uw wachtwoord in" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Kies een profiel foto</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Verder gaan naar chats">
        </div>
      </form>
      <div class="link">Al aangemeld? <a href="../chatapp/login.php">Log nu in</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>