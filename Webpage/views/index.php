<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <?php
    include_once "parts/head.php";
  ?>
</head>

<header>
  <?php
    include_once "parts/header.php";
  ?>
</header>

<body>
<div id="container">

    <div id="wrapper">
        <div id="content" class="background-image">
            <h2>Hello, My name is Mário Belánsky</h2>
            <p>and this is my web page</p>
            <div class="center-container-profile">
              <div id="profile-image">
                <img src="../image/profile.jpg" alt="Profile Picture">
              </div>
            </div>
        </div>
    </div>
    <div id="navigation">
        <p><strong>2. Navigation Menu</strong></p>
        <h3>Styling Flex Container</h3>
        <ul>
            <li>flex-direction</li>
            <li>flex-wrap</li>
            <li>justify-content</li>
            <li>align-content</li>
            <li>align-items</li>
        </ul>
        <h3>Designing Flex Items </h3>
        <ul>
            <li>order</li>
            <li>align-self</li>
            <li>flex-grow</li>
            <li>flex-shrink</li>
            <li>flex-basis</li>
        </ul>
    </div>

    <div id="extra">
        <p><strong>3. Additional Stuff</strong></p>
        <h3>In this guide you will learn:</h3>
        <ul>
            <li>How to use CSS Flexbox to build modern layouts</li>
            <li>How to align items both vertically and horizontally</li>
            <li>How to order items within container</li>
            <li>And more</li>
        </ul>

</div>
<script type="text/javascript">AddFillerLink("content", "navigation", "extra")</script>
</body>

<footer>
</div>
<?php
  include_once "parts/footer.php";
?>
</div>
</footer>
</html>
