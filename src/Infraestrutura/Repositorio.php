<?php
# INSERE DADOS DA CONEXÃO COM O PDO.
require_once __DIR__ . '../../Infraestrutura/conexao.php';
/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UM NOVO UTILIZADOR.
 */
function criarUtilizador($utilizador)
{
    # CRIPTOGRAFA PALAVRA PASSE
    $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

    # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION.
    $sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        apelido, 
        nif, 
        telemovel, 
        email, 
        foto, 
        administrador, 
        dono, 
        palavra_passe) 
    VALUES (
        :nome, 
        :apelido, 
        :nif, 
        :telemovel, 
        :email, 
        :foto, 
        :administrador, 
        :dono,
        :palavra_passe
    )";

    # PREPARA A QUERY..
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
    $sucesso = $PDOStatement->execute([
        ':nome' => $utilizador['nome'],
        ':apelido' => $utilizador['apelido'],
        ':nif' => $utilizador['nif'],
        ':telemovel' => $utilizador['telemovel'],
        ':email' => $utilizador['email'],
        ':foto' => $utilizador['foto'],
        ':administrador' => $utilizador['administrador'],
        ':dono' => $utilizador['dono'],
        ':palavra_passe' => $utilizador['palavra_passe']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO.
    if ($sucesso) {
        $utilizador['id'] = $GLOBALS['pdo']->lastInsertId();
    }
    # RETORNO RESULTADO DA INSERSÃO.
    return $sucesso;
}




/**
 * FUNÇÃO RESPONSÁVEL POR LER UM UTILIZADOR.
 */
function lerUtilizador($id)
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM utilizadores WHERE id = ?;');

    # FAZ O BIND.
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA.
    $PDOStatement->execute();

    # RETORNA OS DADOS.
    return $PDOStatement->fetch();
}
/**
 * FUNÇÃO RESPONSÁVEL POR LER UM UTILIZADOR.
 */
function lerinfo($id)
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM info WHERE id = ?;');

    # FAZ O BIND.
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA.
    $PDOStatement->execute();

    # RETORNA OS DADOS.
    return $PDOStatement->fetch();
}


/**
 * FUNÇÃO RESPONSÁVEL POR LER UM UTILIZADOR PELO EMAIL.
 */
function lerUtilizadorPorEmail($email)
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM utilizadores WHERE email = ? LIMIT 1;');

    # FAZ O BIND.
    $PDOStatement->bindValue(1, $email);

    # EXECUTA A CONSULTA.
    $PDOStatement->execute();

    # RETORNA OS DADOS.
    return $PDOStatement->fetch();
}

/**
 * FUNÇÃO RESPONSÁVEL POR RETORNAR TODOS OS UTILIZADORES.
 */
function lerTodosUtilizadores()
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM utilizadores;');

    # ININIA ARRAY DE UTILIZADORES.
    $utilizadores = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS.
    while ($listaDeUtilizadores = $PDOStatement->fetch()) {
        $utilizadores[] = $listaDeUtilizadores;
    }

    # RETORNA UTLIZADORES.
    return $utilizadores;
}
function lerTodasinfos()
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM info;');

    # INICIA ARRAY DE UTILIZADORES.
    $info = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS.
    while ($listaDeInfos = $PDOStatement->fetch()) {
        $info[] = $listaDeInfos;
    }
    # RETORNA UTLIZADORES.
    return $info;
}
function lerinfosProgramasTuristicos()
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM info WHERE tipo = "Programa Turistico";');

    # ININIA ARRAY DE UTILIZADORES.
    $infos = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS.
    while ($infoslista = $PDOStatement->fetch()) {
        $infos[] = $infoslista;
    }

    # RETORNA UTLIZADORES.
    return $infos;
}
function lerinfosMonumentos()
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM info WHERE tipo = "Monumento";');

    # ININIA ARRAY DE UTILIZADORES.
    $infos = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS.
    while ($infoslista = $PDOStatement->fetch()) {
        $infos[] = $infoslista;
    }

    # RETORNA UTLIZADORES.
    return $infos;
}
function lerinfosEstadias()
{
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM info WHERE tipo = "Estadia";');

    # ININIA ARRAY DE UTILIZADORES.
    $infos = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS.
    while ($infoslista = $PDOStatement->fetch()) {
        $infos[] = $infoslista;
    }

    # RETORNA UTLIZADORES.
    return $infos;
}


/**
 * FUNÇÃO RESPONSAVEL POR ATUALIZAR OS DADOS DE UM UTILIZADOR NO SISTEMA.
 */
function atualizarUtilizador($utilizador)
{
    # CRIPTOGRAFAR PALAVRA PASSE E ALTERAR DADOS DO UTILIZDOR MAIS A PALAVRA PASSE, SE FOR INFORMADA.
    if (isset($utilizador['palavra_passe']) && !empty($utilizador['palavra_passe'])) {
        $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

        # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
        $sqlUpdate = "UPDATE  
        utilizadores SET
            nome = :nome, 
            apelido = :apelido, 
            nif = :nif, 
            telemovel = :telemovel, 
            email = :email, 
            foto = :foto, 
            administrador = :administrador, 
            palavra_passe = :palavra_passe
        WHERE id = :id;";

        $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

        # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
        return $PDOStatement->execute([
            ':id' => $utilizador['id'],
            ':nome' => $utilizador['nome'],
            ':apelido' => $utilizador['apelido'],
            ':nif' => $utilizador['nif'],
            ':telemovel' => $utilizador['telemovel'],
            ':email' => $utilizador['email'],
            ':foto' => $utilizador['foto'],
            ':administrador' => $utilizador['administrador'],
            ':palavra_passe' => $utilizador['palavra_passe']
        ]);
    }

    # SE NÃO HOUVER PALAVRA PASSE ALTERADA, INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION SEM A PALAVRA PASSE.
    $sqlUpdate = "UPDATE  
    utilizadores SET
        nome = :nome, 
        apelido = :apelido, 
        nif = :nif, 
        telemovel = :telemovel, 
        email = :email, 
        foto = :foto, 
        administrador = :administrador
    WHERE id = :id;";

    # PREPARA A CONSULTA.
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
    return $PDOStatement->execute([
        ':id' => $utilizador['id'],
        ':nome' => $utilizador['nome'],
        ':apelido' => $utilizador['apelido'],
        ':nif' => $utilizador['nif'],
        ':telemovel' => $utilizador['telemovel'],
        ':email' => $utilizador['email'],
        ':foto' => $utilizador['foto'],
        ':administrador' => $utilizador['administrador']
    ]);
}
function AtualizarInfo($info)
{

    # INSERE info COM PROTEÇÃO CONTRA SQLINJECTION.
    $sqlUpdate = "UPDATE  
    info SET
    nome = :nome,
    texto = :texto,
    tipo = :tipo,
    foto = :foto 
    WHERE id = :id;";

    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
    return $PDOStatement->execute([
        ':id' => $info['id'],
        ':nome' => $info['nome'],
        ':texto' => $info['texto'],
        ':tipo' => $info['tipo'],
        ':foto' => $info['foto'],
    ]);
}

/**
 * FUNÇÃO RESPONSÁVEL POR ATUALIZAR A PALAVRA PASSE DO UTILIZADOR NO SISTEMA.
 */
function atualizarPalavraPasse($utilizador)
{
    # CRIPTOGRAFAR PALAVRA PASSE E ALTERAR DADOS DO UTILIZDOR MAIS A PALAVRA PASSA, SE FOR INFORMADA.
    if (isset($utilizador['palavra_passe']) && !empty($utilizador['palavra_passe'])) {
        $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

        # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
        $sqlUpdate = "UPDATE  
        utilizadores SET
            nome = :nome, 
            palavra_passe = :palavra_passe
        WHERE id = :id;";

        $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

        # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
        return $PDOStatement->execute([
            ':id' => $utilizador['id'],
            ':nome' => $utilizador['nome'],
            ':palavra_passe' => $utilizador['palavra_passe']
        ]);
    }
}

/**
 * FUNÇÃO RESPONSÁVEL POR DELETAR UM UTILIZADOR DO SISTEMA.
 */
function deletarUtilizador($id)
{
    # PREPARA A CONSULTA.
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM utilizadores WHERE id = ?;');

    # REALIZA O BIND.
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS.
    return $PDOStatement->execute();
}

function deletarinfo($id)
{
    # PREPARA A CONSULTA.
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM info WHERE id = ?;');
    # REALIZA O BIND.
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS.
    return $PDOStatement->execute();
}
/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UM NOVO UTILIZADOR.
 */
function registarUtilizador($utilizador)
{
    # CRIPTOGRAFA PALAVRA PASSE.
    $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

    # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION.
    $sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        email, 
        palavra_passe) 
    VALUES (
        :nome, 
        :email, 
        :palavra_passe
    )";

    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
    $sucesso = $PDOStatement->execute([
        ':nome' => $utilizador['nome'],
        ':email' => $utilizador['email'],
        ':palavra_passe' => $utilizador['palavra_passe']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO.
    if ($sucesso) {
        $utilizador['id'] = $GLOBALS['pdo']->lastInsertId();

        # RETORNO RESULTADO DA INSERSÃO.
        return $utilizador;
    }
    return false;
}
function registarinfo($info)
{
    # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION.
    $sqlCreate = "INSERT INTO 
    info (
        nome, 
        texto, 
        tipo,
        foto
        ) 
    VALUES (
        :nome, 
        :texto, 
        :tipo, 
        :foto
    )";
    # PREPARA A QUERY.
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA.
    $sucesso = $PDOStatement->execute([
        ':nome' => $info['nome'],
        ':texto' => $info['texto'],
        ':tipo' => $info['tipo'],
        ':foto' => $info['foto']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO.
    if ($sucesso) {
        $info['id'] = $GLOBALS['pdo']->lastInsertId();

        # RETORNO RESULTADO DA INSERSÃO.
        return $info;
    }
    return false;
}
