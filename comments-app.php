<DOCTYPE HTML!>
  <html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo "Some random text"?></title>
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="script.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="header">
      <a href="index.php"><h1>Comment App</h1></a>
    </div>
    <div class="body">
      <span class="test"><a href="second.php">to the second</a></span>
      <div class="left-side">

      </div>
      <div class="right-side">
        <form action="saveComment.php" method="post">
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" value="<?php if (isset($_COOKIE['NameCookie'])){ echo $_COOKIE['NameCookie'];} ?>"/><br>
          <label for="comment">Comment:</label><br>
          <textarea id="comment" class="form-control" name="comment" placeholder="Your Comment" rows="5"></textarea><br><br>
          <button type="submit">Send</button>
        </form>

<br><h2>These are comments from MySQL database</h2><br>

        <?php


        $link = mysqli_connect("localhost", "homestead", "secret", "bootcamp");

        $query = "SELECT * FROM Comments";

        $result = mysqli_query($link, $query);

        while($row = mysqli_fetch_array($result)) {
          echo $row["author"] . "<br>";
          echo $row["comment"] . "<br><br>";

        }


        ?>

        <br><h2>These are comments from Document storage</h2><br>

        <?php
          $jsonFile = file_get_contents('file.json');
          $comments = json_decode($jsonFile, true);

          foreach($comments as $key => $value){

            echo "Name:  {$value['author']}";
            echo "<br>";
            echo "Comment: {$value['content']}";
            echo "<br><br>";
          }
          ?>
      </div>
    </div>
    <div class="footer">
      <table>
        <tr>
          <td>1</td>
          <td>2</td>
        </td>
        <tr>
          <td>3</td>
          <td>4</td>
        </tr>
      </table>
    </div>
  </body>
  </html>
