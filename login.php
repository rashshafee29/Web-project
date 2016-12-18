<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./material.min.css">
    <script src="./material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <title>ভাড়াটিয়া.কম </title>
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">লগ-ইন</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">ভাড়াটিয়া.কম</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="home.php">হোম</a>
      <a class="mdl-navigation__link" href="login.php">লগ-ইন</a>
      <a class="mdl-navigation__link" href="signup.php">একাউন্ট খুলুন</a>
      <a class="mdl-navigation__link" href="">সম্পর্ক</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
      <form action="index.php">
        <div class="mdl-textfield mdl-js-textfield">
          <p class="sign">
            ইমেইল আইডি <br>
          </p>
          <input class="mdl-textfield__input" type="text" id="sample2">
          <label class="mdl-textfield__label" for="sample2"></label>
</div>
<br>
<div class="mdl-textfield mdl-js-textfield">
          <p class="sign">
            পাসওয়ার্ড <br>
          </p>
          <input class="mdl-textfield__input" type="password" id="sample3">
          <label class="mdl-textfield__label" for="sample3"></label>
        </div>
        <br>
        <!-- Flat button with ripple -->
        <!-- Colored raised button -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
          লগ-ইন
        </button>
      </form>
    </div>
  </main>
</div>
  </body>
  </html>
