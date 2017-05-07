<?php
// *** Logout the current user.
$logoutGoTo = "";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['MM_Username'] = NULL;
$_SESSION['MM_UserGroup'] = NULL;
unset($_SESSION['MM_Username']);
unset($_SESSION['MM_UserGroup']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Loguin - Trancoso Imóveis</title>
<link rel="stylesheet" type="text/css" href="login-style.css">
</head>
    
<body>
    
    <div id="login">
        <img src="images/logo.png" alt="" />
        <span class="restrito">
            <strong>Você deslogou com sucesso!</strong>
        </span>
        
        <div class="link">
            <a href="index.php">Logar</a>
            <a href="../">Voltar ao site</a>
        </div>
        
    </div>
      
</body>
</html>