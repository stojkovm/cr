<?php 
?>
<html>
    <head>
        <title>PentesterLab Code Review example</title>
        <link rel="stylesheet" media="screen" href="/css/bootstrap.css" />
        <link rel="stylesheet" media="screen" href="/css/pentesterlab.css" />
    </head>
    <body>
      <div class="container-narrow">
        <div class="header">
          <div class="navbar navbar-fixed-top">
            <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
                <?php if (!isset($user)) { ?>
                  <li><a href="/cr-master/login.php">Login</a></li>
                  <li><a href="/cr-master/register.php">Register</a></li>
                <?php } else { ?>
                  <li><a href="/cr-master/logout.php">Logout</a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="body-content">

