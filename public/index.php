

      <?php

require '../core/bootstrap.php';
// 1. Connect to the database
require '../core/db_connect.php';




//Build the page metadata
$meta = [];
$meta['description'] = "Users MicroTrain2105 User List Php bootcamp project";
$meta['keywords'] = "Front End Developer, Artist, PHP";





      $content = <<<EOT
   
      
        <main>
            <h2>Evan Loiterman</h2>
            <p> <a href="https://www.instagram.com/loitermanart/"> My art on instagram</a></p>

        
          <img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="My Avatar">
          <p>Random Qoute:</p>
            <p id ="randomQoute">
              <!--Waste no more time arguing about what a good man should be. Be one.
              <br><i>-Marcus Aurelius</i> random quote here-->
            </p>
          <br>
          <h3>Interests..and things</h3>
        



          <p>
          <ul>
              <li>My passion is drawing painting and Art history -feed the soul </li>
              <li>I am a Krav maga enthusiast -I like to hit stuff -dicipline the body and mind</li>
              <li>I code too  </li>
              
              <!--<li>Amor Fati -Gam Zu Litova goes hand in hand -words to live by</li>-->
              <li>Most recent book read: Thrawn Aliances -Timothy Zahn</li>
          </ul>
          </p>

      
      </main>


 

      EOT;
      include '../core/layout.php';