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
        <a href="index.php"><h1>Hello1</h1></a>
      </div>
      <div class="body">
        <span class="test"><a href="second.php">to the second</a></span>
        <div class="left-side">
          <img src="http://www.web3d.org/x3d/content/examples/HelloWorld.tall.png" />
        </div>
        <div class="right-side">
          <form action="test3.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="test" />
            <label for="textarea">Comment:</label>
            <textarea id="textarea" name="textarea"></textarea>
            <button type="submit">Send</button>
          </form>
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
