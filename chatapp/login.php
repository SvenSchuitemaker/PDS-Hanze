<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Adres</label>
          <input type="text" name="email" placeholder="Vul uw email in" required>
        </div>
        <div class="field input">
          <label>Wachtwoord</label>
          <input type="password" name="password" placeholder="Vul uw wachtwoord in" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Verder gaan naar chats">
        </div>
      </form>
      <div class="link">Nog niet aangemeld? <a href="index.php">Schrijf u nu in</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>

</html>