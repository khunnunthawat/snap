###
  Platform for Professional Photographers
  url : https://www.behance.net/gallery/95157433/Platform-for-Professional-Photographers
  video : https://www.youtube.com/watch?v=e11byhE2hIA
###

####
Create file config connect db name 'db_connect.php' :
  <?php
      $host = "localhost";
      $database = "<namedatabase>";
      $username = "<root>";
      $password = "<password>";

      $connect = mysqli_connect($host, $username, $password, $database);
      mysqli_set_charset($connect,"utf8");
  ?>
###
