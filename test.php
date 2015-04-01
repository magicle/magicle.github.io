



<script>
  if(window.location.hash) {
      var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
      var phash = window.location.href.split('#')[0] + '?' + hash;
      window.location.replace(phash);
//      alert (phash);

      // hash found
  } else {
      // No hash found
  }
</script>






<?php
#$my_variable = $_GET['access_token'];
$my_variable = $_GET;
$file = 'output.txt';
echo $my_variable;
print_r($my_variable);
$content = serialize($my_variable);
$token = $my_variable['access_token'];
$state = $my_variable['state'];
$expire = $my_variable['expires_in'];
file_put_contents($file, "\n", FILE_APPEND);
file_put_contents($file, $content, FILE_APPEND);
?>
