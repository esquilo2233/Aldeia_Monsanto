<?php

/**
 * FICHEIRO RESPONSÁVEL PARA GARANTIR QUE UMA PÁGINA SEJA ACESSÍVEL
 * APENAS POR UM ADMINISTRADOR
 * 
 * PARA UTILIZAR, BASTA FAZER A REQUISIÇÃO DESTE FICHEIRO NA PÁGINA
 * QUE DEVERÁ SER PROTEGIDA
 */

# CARREGA AUXILIADOR
require_once __DIR__ . '/../auxiliadores/auxiliador.php';

# SE UTILIZADOR NÃO TIVER SESSÃO INICIADA, ENVIA PARA TELA DE LOGIN
if (!administrador()) {
    # REDIRECIONA UTILIZADOR PARA TELA INICIAL
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/src/Pages/Index/index.php';
    header('Location: ' . $home_url);
}
