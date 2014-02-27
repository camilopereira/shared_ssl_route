<<<<<<< HEAD
<?php $ssl_server = "https://www70.secrel.com.br/eao/"; $has_parameters = (strlen($_SERVER['QUERY_STRING']) > 0) ? "?" : "";  if(isset($_SERVER) && $_SERVER['HTTPS']): echo 1; else: header("Location: " . $ssl_server . substr( $_SERVER["SCRIPT_NAME"],5) . $has_parameters . $_SERVER["QUERY_STRING"] ); endif; ?>
=======
<?php $ssl_server = "the ssl server with pathinfo"; if(isset($_SERVER) && $_SERVER['HTTPS']): echo 1; else: header("Location: " . $ssl_server . substr( $_SERVER["SCRIPT_NAME"],5)  . "?". $_SERVER["QUERY_STRING"] ); endif; ?>
>>>>>>> 094199a642b9b596b0aac767317038866fee93fd
