
<?php
include __DIR__.'/core/connection.php';
$pseudo = $_POST['pseudo'];
$content = $_POST['content'];

if(isset($_POST['action']) && $pseudo != "" && $content != ""){
  $insertQ = $db->prepare('insert into chat (pseudo, message) values ( :pseudo , :content)');
  $insertQ->execute(['pseudo' => $pseudo, 'content' => $content]);

   header('Location:minichat.php');
}else{
   header('Location:minichat.php');
}
