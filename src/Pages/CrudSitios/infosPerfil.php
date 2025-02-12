<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '../../../middleware/middleware-utilizador.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = 'Atualizar info';
//include_once __DIR__ . '/templates/cabecalho.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '../../../auxiliadores/auxiliador.php';
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<div class="container bg-light">
  <div class="pt-1 ">
    <div class="p-5 mb-2 bg-info text-white">
      <h1><?php echo $titulo ?></h1>
      <p>CRUD | Front-end Bootstrap | Back-end PHP</p>
    </div>
    <main class="bg-light">
      <section class="py-4">
        <div class="d-flex justify-content">
          <a href="index.php"><button type="button" class="btn btn-secondary px-5 me-2">Voltar</button></a>
        </div>
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
        <form enctype="multipart/form-data" action="../../Controladores/controlar-infos.php" method="post">
          <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input type="text" class="form-control" name="nome" placeholder="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : $info['nome'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Texto</span>
            <input type="text" class="form-control" name="texto" maxlength="700" size="700" value="<?= isset($_REQUEST['texto']) ? $_REQUEST['texto'] : $info['texto'] ?>" required>
          </div>
          <div class='input-group mb-2'>
            <label class="input-group-text" for="TipoDeRegisto">Tipo de registo</label>
            <select id="TipoDeRegisto" class="form-control" name='tipo'>
              <option value='Estadia'>Estadia</option>
              <option value='Programa Turistico'>Programa Turistico</option>
              <option value='Monumento'>Monumento</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Foto</label>
            <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="foto" />
          </div>
          <div class="d-grid col-4 mx-auto">
          <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : null ?>">
            <input type="hidden" name="foto" value="<?= isset($_REQUEST['foto']) ? $_REQUEST['foto'] : null ?>">
          <button type="submit" class="w-100 btn btn-success" name="info" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Alterar</button>
          </div>
        </form>
      </section>
    </main>
    <script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </div>
</div>
<?php
include_once __DIR__ . '../../nf/footer.php';
?>