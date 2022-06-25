<?php
if (isset($_POST['treasure'])){
   $in = fopen("list.txt", "a");
   do {
   //$rand = "9000";
   $rand = rand(9000, 9999);
   } while(in_array($rand, $in));
   $command =  "HOME=/tmp/{$rand} PORT={$rand} peerflix-server" . " > /dev/null 2>&1 & echo $!; ";
   $pid = exec($command, $output);
   $url = "http://$_SERVER[HTTP_HOST]";
   $value = "Go to your server : <a target='blank' href='{$url}:{$rand}'>{$url}:{$rand}</a>";
   $fp = fopen("list.txt", "a");
   $savestring = "" . $pid . "," . $rand . "\n";
   fwrite($fp, $savestring);
   fclose($fp);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Peerflix Online</title>
    <script>
    function disableSubmit(){
    document.getElementById("submit").disabled = true; }
    function activateButton(element){ if(element.checked){document.getElementById("submit").disabled = false; } else { document.getElementById("submit").disabled = true; } }
    </script>
  </head>
  <body onload="disableSubmit()">
    <h1><a href="/">Peerflix Online</a></h1>
    <form method="post">
    <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"> <label for="terms">I Agree Terms & Conditions</label><br/>
    <input id="submit" type="submit" name="treasure" value="Launch Peerflix !">
    </form>
    <?php echo $value; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
