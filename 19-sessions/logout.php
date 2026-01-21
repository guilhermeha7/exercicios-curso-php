<?php
session_start();
session_unset(); // Remove os dados da sessão da superglobal $_SESSION
session_destroy(); // Destroi a sessão
echo "Sessão encerrada com sucesso.";