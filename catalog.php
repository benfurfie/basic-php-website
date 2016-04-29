<?php

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); ?>

<div class="section catalog page">

  <div class="wrapper">
    <h1><?php echo $pageTitle; ?></h1>
    <ul>
      <?php foreach ($catalog as $item): ?>
        <li><?php print $item; ?></li>
      <?php endforeach; ?>
    </ul>

    <div class="panel">
      <?php print $catalog[101]; ?>
    </div>
  </div>

</div>

<?php include("inc/footer.php"); ?>
