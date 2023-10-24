<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>innerHTML</h1>
    <p>GET : param</p>
    <p id=inner>
    </p>
    <script>
    text = document.getElementById("inner");
    
    //part1
    text.innerHTML = "<?php echo $_GET['param'] ?>";
    //<img src=0 onerror=alert()>

    //part2
    //text.innerHTML = location.hash.substring(1);
    //escape
    </script>
  </body>
</html>
