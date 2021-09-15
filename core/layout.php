<!DOCTYPE html>
<html lang="en">
  <head>

<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
  <?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">

      <title>About Evan</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--<link rel="stylesheet" type="text/css" href="css/dist/main.css">-->

      <link rel="stylesheet" type="text/css" href="../public/dist/css/main.css">
      <link href=".../public/dist/css/main.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>

    <div id="Wrapper">
      <header>
        <nav class="top-nav">
           <!-- <a href="index.php" class="pull-left" href="/">Evan's site</a>-->
           
            <ul role="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="contact.php">Contact</a></li>

                
                <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li><a href="../public/posts/add.php">add</a></li>
                <li><a href="../public/posts/edit.php">edit</a></li>
                <li><a href="../public/posts/delete.php">delete</a></li>

                
                        
            </ul>

           <!-- <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout.php">Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/register.php">Register</a>
                        </li>

            </ul>-->
        </nav>
</header>
        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, I am Evan</div>
                <img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

        <div id="Footer" class="clearfix">
            <small>&copy; 2021- evanloiterman.com</small>
            <ul role="navigation">
                <li><a href="terms.php">Terms</a></li>
                <li><a href="privacy.php">Privacy</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>

