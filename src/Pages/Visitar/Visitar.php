<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../../middleware/middleware-utilizador.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="Visitar.css">

    <title>O Que Visitar</title>
</head>

<body>
    <?php

    include_once __DIR__ . '../../nf/nav.php';

    ?>

    <div class="container">
        <div class="title_box_visitar">
            <h1>Monumentos</h1>
        </div>
        <div class="container_visitar">
            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/capela.jpg" alt=""></div>
                    <h3></h3>
                    <h5>Monsanto</h5>
                    <p>

                    </p>

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ANTIGA CAPELA DA SENHORA DO SOCORRO</h5>
                    <p class="card-text">Capela barroca construída em 1692 por iniciativa particular e com administração privada. É de nave única com portal axial de lintel reto, onde se encontra extensa inscrição referente a sua instituição, encimado por cornija que serve de apoio a uma janela em capialço. Após prolongado abandono e encontrando-se em estado de ruína foi reconstruída na década de 1940, acrescentada de um piso para habitação; no rés-do-chão instalou-se uma loja de comércio. Estas obras profundamente alteradoras da volumetria e organização espacial do templo, deixam, ainda assim, reconhecer a antiga tipologia pela permanência dos elegantes cunhais em forma de pilastras toscanas; no interior conserva-se apenas a pia de água benta.</p>
                </div>
            </div>

            <!-- <div class="box_visitar">
                <div class="info_visitar">
                        <div class="imgs"><img src="../../Assets/img/baluarte-1.jpg" alt=""></div>
                        <h3>BALUARTE</h3>
                        <h5>Monsanto</h5>
                        <p>
                            O atual parque e miradouro de estacionamento à entrada da vila recebe a designação local de largo do Baluarte, ou Baluarto, na sua forma popular. Esta plataforma não parece corresponder, de facto, a um baluarte elemento poligonal e saliente destinado a defender de forma flanqueadora os ângulos das fortificações com artilharia e que as peças hoje presentes encenariam, pois a sua forma em arco apenas apresenta as extremidades angulares. Parece uma solução inspirada nesta arquitetura militar, mas vazia de veracidade histórica que a toponímia teimosamente procura. Pode, ainda assim, ser recordação duma plataforma de fogo usada durante algum episódio tardio das Guerras Peninsulares (século XIX).
                        </p>

                    </div>
            </div>
                
            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/capela-de-sao-joao-1.jpg" alt=""></div>
                    <h3>CAPELA DE S. JOÃO</h3>
                    <h5>Monsanto</h5>
                    <p>
                        Neste recanto rochoso aplanado na aba nascente do castelo encontram-se as ruínas da capela de S. João. Desta pouco ou nada se sabe. Restos de azulejaria do século XVI que se encontram nos seus escombros indicam que existiria nessa época e que em meados do século XVIII, por estar incluída num rol dos edifícios religiosos de Monsanto, supõe-se que estaria ainda aberta ao culto. Os restos das paredes mostram um pequeno templo constituído por nave e capela-mor e uma só porta axial, o arco triunfal é reconstrução recente pouco rigorosa e desproporcionada. Por hoje, é um magnífico miradouro para leitura da paisagem, nomeadamente sobre a Superfície de Castelo Branco e a sua envolvente, ou apenas para a apreensão sensitiva do espaço.
                    </p>

                </div>
            </div>
           
        
            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/capela-santa-maria-do-castelo.jpg" alt=""></div>
                    <h3>CAPELA DE SANTA MARIA DO CASTELO</h3>
                        <h5>Monsanto</h5>
                            <p>Templo singelo, datável do século XVIII, composto por nave e capela-mor, com coberturas diferenciadas. A fachada principal é limitada por cunhais em forma de pilastras, rematada em empena com cruz latina no vértice; é rasgada por portal em arco abatido; possui, no lado direito, pequena janela gradeada. No interior, o arco triunfal de volta perfeita, é ladeado no lado da Epístola, por interessante imagem polícroma, ainda que recente. Após ruína prolongada, foi recentemente reconduzida à sua suposta forma original. Nas imediações, um muro retilíneo, a que se acede por duas rampas, fez parte de uma bateria para quatro canhoneiras, integrada num recinto interior de proteção interna à porta principal, construído no início do século XIX.</p>
                
                        </div>
            </div>
           
            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/rascunho-automatico-316.jpg" alt=""></div> 
                    <h3>CAPELA DE SANTO ANTÓNIO</h3>
                        <h5>Monsanto</h5>
                            <p>De estilo manuelino exibe um portal com quatro arquivoltas. A capela-mor possui uma abobada de estilo gótico. Destaca-se o tratamento artístico da fachada, onde um portal manuelino com arco de quatro arquivoltas é ladeado por dois bastões encimados por duas flor-de-lis. Sobreposto à cornija está um campanário. Na fachada lateral Norte um portal simples. Ao seu lado o cemitério está datado de 1836.</p>
             
                </div>
            </div>

            <div class="box_visitar">
                <div class="info_visitar"><div class="imgs"><img src="../../Assets/img/Capela-sao-miguel-3.jpg" alt=""></div></div>
                    <h3>CAPELA DE SÃO MIGUEL</h3>
                        <h5>Monsanto</h5>
                            <p>Na aba nordeste do castelo, está hoje isolada esta capela. Em seu redor nasceu o núcleo de colonização medieval de Monsanto. O templo é de uma só nave e capela-mor. Na fachada rasga-se um portal de arco de volta perfeita. A poupada decoração apenas se mostra viva no zoomorfismo das impostas e só volta a ver-se nos modilhões, mas restos de argamassa pintada indiciam ornamentos suprimidos. Sobre um sobranceiro afloramento rochoso foi erigido o campanário. A construção data dos finais do século XII ou dos inícios do seguinte. Porém, achados mais antigos sugerem um templo anterior. Obras de restauro em meados do século XX trouxeram-no bem à forma atual: um edifício simples e despojado de arquitetura arcaizante, justificada pela sua localização periférica e raiana, então ainda não totalmente pacificada.</p>
                </div>
            

            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/Capela-de-sao-pedro-de-vir-a-corca-1.jpg" alt=""></div>
                    <h3>CAPELA DE SÃO PEDRO DE VIR-A-CORÇA</h3>
                        <h5>Monsanto</h5>
                            <p>Templo de nave e cabeceira tripartida, formada por ousia ladeada por estreitos absidíolos. O portal é em arco pleno, encimado por rosácea; os blocos salientes que possui abaixo desta talvez suportassem um alpendre, mas os que exibe na fachada sul não têm função definida. No interior, em naves separadas por colunas com capitéis jónicos, conserva escavadas duas sepulturas, parte de uma necrópole anterior que se estende por colina anexa. Sobre um penedo, em frente da Capela, ergue-se singelo campanário. Data de inícios do século XIII, com uma reforma no século XV. Encontrando-se em adiantada ruína foi reconstruída à forma atual entre 1979 e 1983. O local foi desde cedo local de importante romaria, que terá nascido de um eremitério, que o imaginário popular liga a um mítico anacoreta de nome Amador, constituiu-se também lugar de feira, a que o rei Dinis atribuiu carta em 1308. Juntamente com a capela de S. Miguel junto ao castelo, constituem dois dos últimos testemunhos do Românico nacional.</p>
                </div>
            </div>

            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/capela-do-espirito-santo.jpg" alt=""></div>
                    <h3>CAPELA DO ESPÍRITO SANTO</h3>
                        <h5>Monsanto</h5>
                                <p>Esta capela foi edificada no perímetro de delimitação simbólica do aglomerado urbano, hoje designado por Vila, criado após a consolidação da Reconquista, levando a primitiva povoação junto ao castelo a um arrastado abandono. Marca também o fim da velha estrada que permitia o acesso pelo lado nascente. Trata-se de um templo seiscentista de planta simples com nave e capela-mor. A fachada é rasgada por portal de arco pleno; no lado direito tem um singelo campanário. Realce para o notável trabalho de cantaria das suas paredes. No lado norte, foi adossada uma porta de arco pleno, que parece reaproveitada de outro edifício. Pelo lado interno, um lanço de escadas acede ao baixo adarve protegido por parapeito onde está uma guarita. Esta estrutura está integrada na denominada “muralha do conde de Lippe”, erigida no rescaldo da Guerra dos Sete Anos (post 1763), um muro que vindo do castelo envolvia a vila.</p>
                </div>
            </div>

            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/original-1461398063-cmfn_1.jpg" alt=""></div>
                    <h3>CASA DE FERNANDO NAMORA</h3>
                        <h5>Monsanto</h5>
                            <p>Edifício datado de 1931. O escritor exerceu atividade como médico municipal em Monsanto entre Outubro de 1944 e Outubro de 1946. Na fachada uma placa cita Fernando Namora na sua obra A Nave de Pedra, editada em 1975: Os meus últimos livros na sua montagem e redação finais foram escritos na aldeia.</p>
                </div>
            </div>

            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/casa-de-zeca-afonso.jpg" alt=""></div>
                    <h3>CASA DE ZECA AFONSO</h3>
                        <h5>Monsanto</h5>
                                <p>O cantor José Afonso (1929-1987), conhecido pelo diminutivo familiar de Zeca Afonso figura central do movimento de renovação da música popular portuguesa na década de 1960, com trabalho e reconhecimento prolongados nas décadas de 70 e 80 e notável reportório de canções de intervenção – adquiriu esta casa, nunca reabilitada. É agora um projeto da Associação José Afonso e do Município de Idanha-a-Nova transformar o espaço numa casa-museu dedicada ao cantor que aqui procurou encontrar um local de inspiração e repouso. O despertar do seu gosto por Monsanto talvez não seja alheio ao conhecimento do cancioneiro popular da Beira Baixa, tendo gravado várias e notáveis versões da famosa canção local da Srª do Almortão, com destaque para a primeira versão incluída no disco "Cantares do Andarilho" (1968).</p>
                </div>
            </div>
            
            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/casa-do-carrasco-3.jpg" alt=""></div>
                    <h3>CASA DO CARRASCO</h3>
                        <h5>Monsanto</h5>
                            <p>A tradição oral local designa o nº 14 da rua de Stº António, por “Casa do Carrasco”. É convicção popular que aqui teriam vivido os carrascos, ou algozes, do julgado de Monsanto. Isto é, aqueles que executavam os condenados à pena de morte ou aplicavam outras sentenças corporais e os atos de tortura para extração das confissões aos réus. Por se tratar de um cargo vil, era comum o recrutamento ser feito entre os condenados à morte ou ao desterro por comutação da pena. A existência de um lintel datado de 1601 (?) onde está gravada uma caveira sobre duas tíbias cruzadas, ladeada pelas palavras em latim “cogita mortem” (que se pode traduzir por pensa na morte), terá dado origem a esta interpretação. Assim, a iconografia macabra assinalava depreciativamente a casa no anonimato da paisagem urbana. Porém, esta singular e, por ora, enigmática peça, claramente fora do seu lugar original, reaproveitada portanto, remete antes para um âmbito religioso (litúrgico ou funerário), sem que, por isso veja diminuído o seu interesse histórico e cultural.</p>
                </div>
            </div>
            
            <div class="box_visitar">
                <div class="info_visitar">
                    <div class="imgs"><img src="../../Assets/img/monsanto-8.jpg" alt=""></div>
                    <h3>CASTELO</h3>
                    <h5>Monsanto</h5>
                        <p>Após a Reconquista da linha do Tejo em 1149, parte do esforço da sua defesa coube à ordem do Templo. Para tal sobem o Tejo e, chegando à atual Beira Baixa, fletem para nordeste seguindo o rio Ponsul, onde pela construção de vários castelos formam uma barreira às incursões muçulmanas. Monsanto, doado em 1165, foi um dos primeiros lugares fortificados – sobre anterior castelo muçulmano – no âmbito desta operação, ainda que em 1172 regresse à Coroa. A esta fase românica, hoje vagamente reconhecível na cidadela, sucedeu uma grande e reformadora campanha gótica, entre os finais do século XIII e inícios do seguinte, encastelando totalmente o cume. Foi poupado a obras durante a Guerra da Restauração, mas foi durante remodelado no século XIX. Um vasto restauro nas décadas de 1940/50 trouxeram, por vezes de forma discutível, o castelo à forma atual.</p>
                </div>
            </div>
            <br>
            <br> 
        </div>
        <div id="ultima_frase">
            <h3>ENTRE MUITOS OUTROS...</h3>
        </div>
    </div>
    <?php
    require_once __DIR__ . '/../nf/footer.php';
    ?>
<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>-->

</html>