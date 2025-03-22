<!DOCTYPE html>
<!-- ICS2O-Assignment-2-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Calculate the volume of a Prism or Cylinder, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Calculate the volume of a Prism or Cylinder, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Calculate the volume of a Prism or Cylinder, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Volume_Prism_Cylinder.jpg" alt="Image: Orange rectangular prism on left, yellow cylinder on right, each with formula to find their volume on top of them." width="250" />
      </div>
      <div>
        <?php
        $baseAreaOfObject = $_GET["base-area-of-object"];
        $heightOfObject = $_GET["height-of-object"];

        // process
        $volume = $baseAreaOfObject * $heightOfObject;

        // output
        echo "<p class='page-content'>If the object has a base area of = " . $baseAreaOfObject . " cm² and the height of = " . $heightOfObject . " cm:</p>";
        //echo "<br />";
        echo "<p class='page-content'>then the volume of the triangle is " . $volume . " cm³.</p>";
        ?>
      </div>
    </main>
  </div>
</body>

</html>