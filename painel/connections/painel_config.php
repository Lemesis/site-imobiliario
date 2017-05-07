<?php
$hostname_painel_config = "localhost";
$database_painel_config = "imobi";
$username_painel_config = "root";
$password_painel_config = "vertrigo";

$painel_config = mysql_pconnect($hostname_painel_config, $username_painel_config, $password_painel_config) or trigger_error(mysql_error(),E_USER_ERROR);


?>