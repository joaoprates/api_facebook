<?php
require 'fb.php';

$helper = $fb->getRedirectLoginHelper();

$permissions = array('email');

$loginurl = $helper->getLoginUrl('http://localhost/fb/callback.php', $permissions);
?>

<a href="<?php echo htmlspecialchars($loginurl); ?>">Fazer login com Facebook</a>