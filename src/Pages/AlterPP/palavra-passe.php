<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '/../../middleware/middleware-autenticado.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Altarar Palavra Passe';
//include_once __DIR__ . '/../nf/nav.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@include_once __DIR__ . '/../../auxiliadores/auxiliador.php';

# CARREGA O UTILIZADOR ATUAL. PROVENIENTE DE FUNÇÕES AUXILIADORAS ACIMA
$utilizador = utilizador();
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="container bg-light">
  <div class="pt-1 ">
    <div class="p-5 mb-2 bg-info text-white">
      <h1>Alterar palavra passe</h1>
      <p>CRUD | Front-end Bootstrap | Back-end PHP</p>
    </div>
    <main class="bg-light">
      <section class="py-4">
        <a href="/aplicacao/perfil.php"><button type="button" class="btn btn-secondary px-5">Voltar</button></a>
      </section>
      <section>
        <?php
        # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-UTILIZADOR
        if (isset($_SESSION['sucesso'])) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
          echo $_SESSION['sucesso'] . '<br>';
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          unset($_SESSION['sucesso']);
        }
        if (isset($_SESSION['erros'])) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
          foreach ($_SESSION['erros'] as $erro) {
            echo $erro . '<br>';
          }
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
          unset($_SESSION['erros']);
        }
        ?>
      </section>
      <section>
        <form action="/src/Controladores/controlar-utilizador.php" method="post" class="form-control py-3">
          <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input type="text" readonly class="form-control" name="nome" placeholder="<?= $utilizador['nome'] ?>" value="<?= $utilizador['nome'] ?>">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Palavra Passe</span>
            <input type="password" class="form-control" name="palavra_passe" maxlength="255" size="255" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Confirme a Palavra Passe</span>
            <input type="password" class="form-control" name="confirmar_palavra_passe" maxlength="255" required>
          </div>
          <div class="d-grid col-4 mx-auto">
            <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="palavra_passe">Alterar</button>
          </div>
        </form>
      </section>
    </main>
    <script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <?php
    //include_once __DIR__ . '/templates/rodape.php';
    ?>