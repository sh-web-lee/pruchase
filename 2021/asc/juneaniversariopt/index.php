<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$entryIsPdts = false;

$entryIsPdts = preg_match("/^p_/", $_GET['ref']);

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['name']) ? '' : '-'.$_GET['name'];
$refStr .= empty($_GET['type']) ? '' : '-'.$_GET['type'];


?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Obtenha 86% de Desconto no Pacote de Aniversário – IObit</title>
    <meta name="description" content="É hora de festa da IObit. Venha e abra seu pacote de aniversário até 86% de desconto">
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/index.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>
    <div class="container">
      <div class="g-main">
        <!-- banner -->
        <div class="banner">
          <div class="banner-cont">
            <a href="https://www.iobit.com/pt/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">VENDA DE ANIVERSÁRIO</div>
              <div class="big">Abra seu pacote de aniversário com <i></i>DE DESCONTO</div>
            </div>
            <!-- <div class="date">May 19 - June 18</div> -->
            <div class="img">
              <img src="<?php echo getStaticUrl('images/banner-product.png')?>" alt="banner-product">
            </div>
            <div class="m-product">
              <h3 class="title">Pacote de <i>Aniversário</i></h3>
              <ul>
                <li>
                  <div class="name">Advanced SystemCare PRO <i>(1 Ano/ 3 PC)</i></div>
                  <div class="price">R$199,90</div>
                </li>
                <li>
                  <div class="name">IObit Uninstaller PRO <i>(1 Ano/ 3 PC)</i></div>
                  <div class="price">R$99,99<i>1</i></div>
                </li>
                <li>
                  <div class="name">IObit Malware Fighter PRO <i>(1 Ano/ 1 PC)</i></div>
                  <div class="price">R$159,90</div>
                </li>
                <li>
                  <div class="name">Smart Defrag PRO <i>(1 Ano/ 1 PC)</i></div>
                  <div class="price">R$199,90</div>
                </li>
                <li>
                  <div class="name">Protected Folder <i>(1 Ano/ 1 PC)</i></div>
                  <div class="price">R$99,99<i>1</i></div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                    <i>R$</i>109,99
                  </div>
                  <div class="old">R$759,68</div>
                  <div class="tag">-86<i>%</i></div>
                </div>
                <a class="btn" href="https://www.iobit.com/buy.php?product=pt-asc143pciuimfsdpf10999&ref=pt_ asc143pciuimfsdpf10999aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'bpackbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <!-- packs -->
          <div class="pack-cont">
            <h3><i>85</i>% DE DESCONTO - os pacotes de otimização do PC são para você também</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul class="pack01">
                      <li><i></i>Limpa, acelera e protege seu PC.</li>
                      <li><i></i>Desinstale programas e plug-ins para liberar espaço.</li>
                      <li><i></i>Maximize o desempenho do seu disco rígido.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>R$</i>85,99</div>
                    <div class="old">R$469,79</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=pt-asc143pciusd8599&ref=pt_asc143pciusd 8599aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'asciusdbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul class="pack02">
                      <li><i></i>Proteção completa contra 209 milhões de ameaças.</li>
                      <li><i></i>Desinstale programas e plug-ins para liberar espaço.</li>
                      <li><i></i>Proteja seus dados, pastas e arquivos importantes com apenas uma senha.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>R$</i>69,99</div>
                    <div class="old">R$359,88</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=pt-imf83pciupf6999&ref=pt_imf83pciupf6999aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'imfiupfbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul class="pack03">
                      <li><i></i>Sempre mantenha seus drivers atualizados.</li>
                      <li><i></i>Maximize o desempenho do seu disco rígido.</li>
                      <li><i></i>Proteja seus dados, pastas e arquivos importantes com apenas uma senha.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>R$</i>79,99</div>
                    <div class="old">R$599,79</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=pt-db83pcsdpf7999&ref=pt_db83pcsdpf7999aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'dbsdpfbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul class="pack04">
                      <li><i></i>Limpa, acelera e protege o seu PC.</li>
                      <li><i></i>Proteção abrangente contra 209 milhões de ameaças.</li>
                      <li><i></i>Atualize o software facilmente.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>R$</i>89,99</div>
                    <div class="old">R$429,79</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=pt-asc143pcimfisu8999&ref=pt_asc143pcimfisu8999aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'ascimfisubuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Ou até <i>73</i>% de descontos para produtos que atendam às suas necessidades diárias</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO</div>
                  <div class="desc">O melhor programa de otimização de PC que você pode usar. Faça seu PC antigo parecer novo. </div>
                  <div class="price">
                    <div class="new">R$76,99</div>
                    <div class="old">R$199,90</div>
                    <div class="tag">-62%</div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=pt-asc143pc7699&ref=pt_asc143pc7699aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'purchase-2021aniver-pt')" class="btn">Comprar Agora</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO</div>
                  <div class="desc">O melhor atualizador de driver para atualizar drivers e corrigir problemas de dispositivo com mais de 4.500.000 bancos de dados.</div>
                  <div class="price">
                    <div class="new">R$79,99</div>
                    <div class="old">R$299,90</div>
                    <div class="tag">-73%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=pt-db83pc7999&ref=pt_db83pc7999aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO</div>
                  <div class="desc">Um desinstalador poderoso é necessário para facilitar a desinstalação de programas e plug-ins.</div>
                  <div class="price">
                    <div class="new">R$69,99</div>
                    <div class="old">R$99,99</div>
                    <div class="tag">-30%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=pt-iu103pc6999&ref=pt_iu103pc6999aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO</div>
                  <div class="desc">Proteja seu PC contra vírus, malware e ransomware com mecanismos de proteção tripla. </div>
                  <div class="price">
                    <div class="new">R$63,99</div>
                    <div class="old">R$159,90</div>
                    <div class="tag">-60%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=pt-imf81pc6399&ref=pt_imf81pc6399aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">Protected Folder PRO</div>
                  <div class="desc">Protege seus arquivos e privacidade de ataques maliciosos com 1 senha</div>
                  <div class="price">
                    <div class="new">R$67,95</div>
                    <div class="old">R$99,99</div>
                    <div class="tag">-32%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=pt-protected-folder&ref=pt_pf1pc6795aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'pfbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO</div>
                  <div class="desc">Gerencie e desfragmente o espaço em disco para melhorar o desempenho do PC.</div>
                  <div class="price">
                    <div class="new">R$76,99</div>
                    <div class="old">R$99,99</div>
                    <div class="tag">-23%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=pt-sd63pc7699&ref=pt_sd63pc7699aniversario2106<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'purchase-2021aniver-pt')">Comprar Agora</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Recomendado também por</h3>
            <div class="award-list">
              <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="awards">
            </div>
          </div>
          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/Brasil.png')?>" alt="Brasil"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        Tenho usado o Advanced SystemCare por um bom tempo e já são mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa só tem ficado melhor a cada versão.
                      </p>
                      <h4>Brasil</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/Carlos-Alexandre-Versíssimo.png')?>" alt="Carlos Alexandre Versíssimo"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        Quando eu tentava atualizar meus drivers, o meu computador às vezes apresentava problemas e eu tinha que formatá-lo para restaurar suas funções e agora isto não acontece mais. Driver Booster 8 é a melhor ferramenta no mercado!
                      </p>
                      <h4>Carlos Alexandre Versíssimo</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/Estados-Unidos.png')?>" alt="Estados Unidos"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos e lentidão desapareceram!
                      </p>
                      <h4>Estados Unidos</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/David-Cassidy.png')?>" alt="David Cassidy"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        Aqueles que estão procurando por um bom antivírus e anti-malware a um preço acessível não precisam ir além do IObit Malware Fighter. Eu recomendo que eles esqueçam do resto e escolha o melhor, que é o IObit Malware Fighter.
                      </p>
                      <h4>David Cassidy</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/Hans.png')?>" alt="Hans"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        Sou um usuário do Smart Defrag por muitos anos. Desde que passei a usar esse software fantástico, meu desktop e meu laptop estão rápidos e seguros. Juntamente com o Advanced System Care Ultimate, você tem uma ferramenta completa para manter seu sistema atualizado, rápido e seguro. Estou usando ele todos os dias, sem a necessidade de esperar (o PC desliga automaticamente) e ele mantém o meu sistema nas melhores condições!
                      </p>
                      <h4>Hans</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/Fernando-Lourenço-Gomes.png')?>" alt="Fernando Lourenço Gomes"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        IObit Uninstaller é uma ótima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito útil para mim pois não apenas desinstala programas e aplicativos, mas também como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e não precisa entender de informática para usá-lo. Recomendo! 
                      </p>
                      <h4>Fernando Lourenço Gomes</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/user/Ronan-Levi.png')?>" alt="Ronan Levi"></dt>
                    <dd>
                      <h3>Opinião de Usuário</h3>
                      <p>
                        Além de remover programas, IObit Uninstaller conta com Verificação Profunda para encontrar as sobras deixadas e removê-las completamente do computador. Como alguém que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu só uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.
                      </p>
                      <h4>Ronan Levi</h4>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-footer">
        <div class="service">
          <div class="wrapper">
            <div class="clearfix">
              <dl class="first">
                <dt><h3>Experimente SEM RISCOS - com nossa Garantia de Devolução do Dinheiro em 60 dias</h3></dt>
                <dd class="pic"><img src="<?php echo getStaticUrl('images/moneyback.png')?>"></dd>
                <dd>
                  <p>Estamos confiantes de que a ativação da edição PRO irá maximizar seu <br />desempenho e segurança do PC por um preço acessível!</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Nós aceitamos</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Observe:</p>
            <p>* A data pode variar de acordo com o sistema ou computador diferente.</p>
            <p>* Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</p>
          </div>
          <div class="copyright">Copyright ©2005 - <?= date('Y'); ?> IObit. Todos os direitos reservados.</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div class="off-item active">
            <div class="num"><i></i>86% DE DESCONTO</div>
            <div class="name">Pacote de Aniversário</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>85% DE DESCONTO</div>
            <div class="name">Pacote de otimização</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>73% DE DESCONTO</div>
            <div class="name">Produto principal</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>
