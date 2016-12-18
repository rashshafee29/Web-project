<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./material.min.css">
    <script src="./material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <title>ভাড়াটিয়া.কম</title>
  </head>
  <body>
    <!-- Simple header with fixed tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
                mdl-layout--fixed-tabs">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">ভাড়াটিয়া.কম</span>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <a href="#fixed-tab-1" class="mdl-layout__tab is-active">প্রোফাইল</a>
          <a href="#fixed-tab-2" class="mdl-layout__tab">প্রোফাইল আপডেট করুন</a>
          <a href="#fixed-tab-3" class="mdl-layout__tab">নতুন ভাড়াটিয়ার তথ্য যুক্ত করুন</a>
          <a href="#fixed-tab-4" class="mdl-layout__tab">ভাড়াটিয়াদের তথ্য দেখুন</a>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">ভাড়াটিয়া.কম</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="home.php">হোম</a>
          <a class="mdl-navigation__link" href="">লগ-আউট</a>
          <a class="mdl-navigation__link" href="">সম্পর্ক</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
          <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content">
            <form action="home.php">
              <div class="mdl-textfield mdl-js-textfield">
                <p class="sign">
                  আপনার নাম <br>
                </p>
                <input class="mdl-textfield__input" type="text" id="sample1">
                <label class="mdl-textfield__label" for="sample1"></label>
              </div>
              <br>
              <div class="mdl-textfield mdl-js-textfield">
                <p class="sign">
                  মোবাইল নাম্বার<br>
                </p>
                <input class="mdl-textfield__input" type="text" id="sample2">
                <label class="mdl-textfield__label" for="sample2"></label>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield">
                <p class="sign">
                  বাড়ির ঠিকানা<br>
                </p>
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3"></label>
              </div>
              <br>
              <div class="mdl-textfield mdl-js-textfield">
                        <p class="sign">
                          জাতীয়তা<br>
                        </p>
                        <input class="mdl-textfield__input" type="text" id="sample4">
                        <label class="mdl-textfield__label" for="sample3"></label>
                      </div>
                      <br>
                      <div class="mdl-textfield mdl-js-textfield">
                                <p class="sign">
                                  ভাড়া দেওয়ার যোগ্য বাড়ির সংখ্যা<br>
                                </p>
                                <input class="mdl-textfield__input" type="number" id="sample5">
                                <label class="mdl-textfield__label" for="sample3"></label>
                              </div>
                          <br>    <div class="mdl-textfield mdl-js-textfield">
                                        <p class="sign">
                                        নিকটস্থ পুলিশ স্টেশন<br>
                                        </p>
                                        <input class="mdl-textfield__input" type="text" id="sample6">
                                        <label class="mdl-textfield__label" for="sample3"></label>
                                      </div>
                                      <br>
                                      Select image to upload: <br>
                                      <input type="file" name="fileToUpload" id="fileToUpload">
              <!-- Flat button with ripple -->
              <!-- Colored raised button -->
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
                আপডেট করুন
              </button>
            </form>
          </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="page-content">
            <form action="home.php">
              <div class="mdl-textfield mdl-js-textfield">
                <p class="sign">
                ভাড়াটিয়ার নাম <br>
                </p>
                <input class="mdl-textfield__input" type="text" id="sample1">
                <label class="mdl-textfield__label" for="sample1"></label>
              </div>
              <br>
              <div class="mdl-textfield mdl-js-textfield">
                <p class="sign">
                  মোবাইল নাম্বার<br>
                </p>
                <input class="mdl-textfield__input" type="text" id="sample2">
                <label class="mdl-textfield__label" for="sample2"></label>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield">
                <p class="sign">
                  স্থায়ী ঠিকানা<br>
                </p>
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3"></label>
              </div>
              <br>
              <div class="mdl-textfield mdl-js-textfield">
                        <p class="sign">
                          জাতীয়তা<br>
                        </p>
                        <input class="mdl-textfield__input" type="text" id="sample4">
                        <label class="mdl-textfield__label" for="sample3"></label>
                      </div>
                      <br>
                      <div class="mdl-textfield mdl-js-textfield">
                                <p class="sign">
                                আগে কোথায় ছিল<br>
                                </p>
                                <input class="mdl-textfield__input" type="number" id="sample5">
                                <label class="mdl-textfield__label" for="sample3"></label>
                              </div>
                          <br>    <div class="mdl-textfield mdl-js-textfield">
                                        <p class="sign">
                                        পরিবারের সদস্য সংখ্যা<br>
                                        </p>
                                        <input class="mdl-textfield__input" type="text" id="sample6">
                                        <label class="mdl-textfield__label" for="sample3"></label>
                                      </div>
                                      <br>
                                      <div class="mdl-textfield mdl-js-textfield">
                                                    <p class="sign">
                                                    NID নাম্বার<br>
                                                    </p>
                                                    <input class="mdl-textfield__input" type="text" id="sample7">
                                                    <label class="mdl-textfield__label" for="sample3"></label>
                                                  </div>
                                              <br>
              <!-- Flat button with ripple -->
              <!-- Colored raised button -->
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
              যুক্ত করুন
              </button>
            </form>
          </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-4">
          <div class="page-content"><!-- Your content goes here --></div>
        </section>
      </main>
    </div>
  </body>
  </html>
