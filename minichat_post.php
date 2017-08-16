
<?php
include __DIR__.'/core/connection.php';
$pseudo = htmlspecialchars($_POST['pseudo']);
$content = htmlspecialchars($_POST['content']);
$date = date('Y-m-d H:i:s');

if(isset($_POST['action']) && $pseudo != "" && $content != ""){
  $insertQ = $db->prepare('INSERT INTO chat (pseudo, message, date) VALUES ( :pseudo , :content, :date)');
  $insertQ->execute(['pseudo' => $pseudo, 'content' => $content, 'date' => $date]);

   header('Location:minichat.php');
}else{
   header('Location:minichat.php');
}
