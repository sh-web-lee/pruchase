<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'ptiujunexp0709_p' . $date;
    $c_name_t = 'ptiujunexp0709_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(41, 59);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adquira o novo IObit Uninstaller PRO por R$ 0  </title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner" data-name="animation">
    <div class="wrapper">
        <div class="top">
            <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
                IObit
            </a>
            <div class="icon">
                <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
                IObit Uninstaller 10
            </div>
        </div>
        <div class="clearfix">
            <div class="left-img">
                <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
                <img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
                     data-name="default">
                <img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
                     data-name="default">
            </div>
            <div class="right fr">
                <h1 data-name="default">A Pré-Venda Começou</h1>
                <h2 data-name="default">Tenha de Volta a Versão PRO por R$0</h2>
                <h3 data-name="default">Limitado a 500 usuários por dia antes de 25 de Agosto</h3>
                <div class="number" data-name="default">
                    <div id="reduce" class="reduceNum">
                        <div class="listbox"><span class="list"><b>5</b></span></div>
                        <div class="listbox"><span class="list"><b>0</b></span></div>
                    </div>
                    pacotes restantes
                    <div class="bar">
                        <span></span>
                    </div>
                </div>
                <div class="price" data-name="default">
                    <strong>R$ 0 <sup>*</sup></strong>
                    <a class="buybtn"
                       href="https://www.iobit.com/buy.php?product=pt-iu10preorder&ref=pt-iu10preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_iu"
                       onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexppt');">
                       Adquirir Agora
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
    <div class="wrapper ">
        <h2>IObit Uninstaller PRO Já Te Ajudou a</h2>
        <div class="clearfix">
            <dl class="one" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
                <dd>
                    Desinstalou <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?>
                      programas, incluindo  <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?>
                     programas em bundle e 
                     <?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b>'; ?>
                       programas teimosos
                </dd>
            </dl>
            <dl class="right" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
                <dd>
                    Desinstalou <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?>
                    plugins e barras de ferramentas <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? '' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?>
                    maliciosos e de anúncios
                </dd>
            </dl>
            <dl class="two" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
                <?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd> Deletou arquivos e entradas de registro inúteis  </dd>' : '<dd> Deletou <b class="files">' . $data_arr['file'] . '</b> arquivos e <b class="registries">' . $data_arr['reg'] . '</b>   entradas de registro     </dd>'; ?>
                <!-- <dd>Delete files and registry entries</dd> -->
            </dl>
            <dl class="right two" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
                <?php
                $filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
                $size = explode('.', $filesize);
                if (empty($size[0])&&empty($size[1])) : ?>
                    <dd> Limpou rastros e economizou espaço em disco</dd>
                <?php else :?>
                    <dd>Economizou  <b class="disk"><em class="integer"><?php echo $size[0];?></em>.<em class="decimal"><?php echo $size[1];?></em></b> GB de espaço em disco no total
                    </dd>
                <?php endif; ?>
                <!-- <dd>Clean traces and save disk space</dd> -->
            </dl>
        </div>
    </div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
    <div class="wrapper">
        <h2>Sem a versão PRO, você perde  <span>as seguintes funções:</span></h2>
        <div class="feature-img">
            <img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
            <dl class="one" data-name="default">
                <dt>Desinstalação Poderosa</dt>
                <dd>1-clique para desinstalar programas indesejados, especialmente programas teimosos ou antivírus que se recusam a serem desinstalados..  
                </dd>
            </dl>
            <dl class="two" data-name="default">
                <dt>Navegador Rápido e Seguro</dt>
                <dd>Identifica plugins maliciosos e de anúncios para garantir uma experiência segura de navegação.</dd>
            </dl>
            <dl class="three" data-name="default">
                <dt>Limpeza Automática</dt>
                <dd>Detecta e limpa sobras de programas automaticamente, incluindo as deixadas por outros desinstaladores.</dd>
            </dl>
            <dl class="four" data-name="default">
                <dt>Limpeza Profunda</dt>
                <dd>Monitora e deleta completamente todos os arquivos e entradas de registro criados na instalação e deixados após a desinstalação padrão. 
                </dd>
            </dl>
            <dl class="five" data-name="default">
                <dt>Atualizador de Programas</dt>
                <dd>1-clique para atualizar todos os programas importantes automaticamente.</dd>
            </dl>
            <span class="circle one" data-name="default"></span>
            <span class="circle two" data-name="default"></span>
            <span class="circle three" data-name="default"></span>
        </div>
    </div>
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
    <div class="wrapper">
        <h2>O Novo IObit Uninstaller 10 Tem o Melhor Desempenho:</h2>
        <dl data-name="default" class="one">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
            <dd>
                <h3>  Desinstalação <b>50 % Mais Rápida  </b> </h3>
            </dd>
        </dl>
        <dl class="center" data-name="default">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
            <dd>
                <h3>Verifica <b>30% mais</b> sobras de desinstação </h3>
            </dd>
        </dl>
        <dl data-name="default" class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
            <dd>
                <h3><b>Bloqueia</b>    notificação de sites</h3>
            </dd>
        </dl>
    </div>
</div>

<!-- review start -->
<div class="review">
        <div class="wrapper">
            <h2>Você Pode Confiar</h2>
            <dl>
                <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
                <dd>
                    <h3>50M+</h3>
                    <p>Downloads</p>
                </dd>
            </dl>
            <dl class="center">
                <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
                <dd>
                    <h3>4.8/5.0</h3>
                    <p>Avaliação dos Usuários</p>
                </dd>
            </dl>
            <dl>
                <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
                <dd>
                    <h3>1000+</h3>
                    <p>Recomendações da Mídia</p>
                </dd>
            </dl>
            <div class="review-box">
                <div class="box">
                    <h3>Opinião do Usuário</h3>
                    <p>
                        "IObit Uninstaller PRO é apenas um dos cinco produtos de "manutenção" da IObit que eu investi para meu PC. O programa é ótimo para achar as sobras de bits e bytes escondidos no seu PC, tomando espaço do disco e afetando o registro. Se eu usasse o desinstalador padrão do programa que eu queria desinstalar, funcionava, mas então o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso é clicar em "OK". Recomendo e inclusive adquiri uma licença para 3 PCs. O serviço de atendimento ao cliente é atencioso e eficiente."
                    </p>
                </div>
                <div class="box">
                    <h3>Opinião do Usuário</h3>
                    <p>
                        "IObit Uninstaller é provavelmente o melhor aplicativo para removar programas desnecessários do seu computador. Diferentemente do desinstalador padrão do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e rápido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
                    </p>
                </div>
                <div class="box active">
                    <h3>Opinião da Mídia</h3>
                    <p>
                        "Essa ferramenta informativa e de fácil uso limpa, configura e otimiza seu PC e usuários podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstalação e permite que usuários desinstalem em lote. Oferece aos usuários a opção de fazer uma "Verificação Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstalação. O desempenho por si só já faz essa ferramenta valiosa de se ter." -MakeUseOf
                    </p>
                </div>
                <div class="box">
                    <h3>Opinião do Usuário</h3>
                    <p>
                        "IObit Uninstaller é um dos melhores programas para se ter no seu computador, pois é fácil de operar e limpa profundamente com rapidez. A limpeza de plug-ins também é extremamente útil. Obrigado por cuidar do computador meu e da minha família."
                    </p>
                </div>
            </div>
            <ul>
                <li>
                    <span><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></span>
                    <p>Joseph Yu</p>
                </li>
                <li>
                    <span><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></span>
                    <p>Sergey Erlich</p>
                </li>
                <li class="active">
                    <span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
                    <p>MakeUseOf</p>
                </li>
                <li>
                    <span><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></span>
                    <p>Áda Görtler</p>
                </li>
            </ul>
        </div>
    </div>
<!-- review end -->

<!-- service start -->
<div class="service">
    <div class="wrapper">
        <h2>Prêmios</h2>
        <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt=""/>
    </div>
</div>
<!-- service end -->

<!-- bottom start -->
<div class="bottom">
    <div class="wrapper">
        <dl class="annotation">
            <dt>Nota:</dt>
            <dd>
               *.No fim do período de teste de 30 dias, o seu cartão de crédito ou conta do Paypal será cobrado R$55,99 automaticamente. Este desconto de 44% no preço original de R$ 99,99 é um bônus apenas para pré-venda!
            </dd>
            <dd>*.Se você não está satisfeito, você pode cancelar o pedido que você fez dentro de 30 dias sem qualquer custo.</dd>
        </dl>
        <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. All Rights Reserved</p>
    </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
        <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
            IObit Uninstaller 10
        </div>
        <div class="number fl">
            <div id="fReduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>5</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            restantes agora
        </div>
    </div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>