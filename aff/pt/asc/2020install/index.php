<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'ptaff_asc13_2020install';
  
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Obrigado por instalar Advanced SystemCare 13 - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Atualize para Advanced SystemCare Pro e Acelere seu PC e sua Internet em até 300%!">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto|Titillium+Web" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://www.iobit.com/tpl/styles/global.css" rel="stylesheet" media="screen">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<style>
  .comparetab .itempro { width: 288px; }
  .btmarea .price-zone { width: 300px; }
  .footer {
    text-align: center;
    line-height: 42px;
  }
  .footer p { padding: 0; margin: 0; }
</style>
</head>

<body class="compare" id="compare">
  <div class="header">
    <div class="container">
      <div class="header-logo">
        <a href="https://www.iobit.com/" title="IObit" target="_blank"></a>
      </div>
    </div>    
  </div>

  <div class="pagebanner">
    <div class="container comp-heading clearfix">
      <div class="heading-img">
        <img src="<?php echo getStaticUrl('images/banner-heading-asc.png')?>" />
      </div>
      <div class="heading-info">
        <i class="tags discount">50% OFF</i>
        <h3>Obrigado por Instalar Advanced SystemCare Pro! Obtenha a versão PRO para um PC mais Limpo, Rápido e Seguro</h3>
        <p>
          Com todas as funções destravadas, Advanced SystemCare PRO aumenta poderosamente o desempenho de seu computador. A limpeza profunda de registro e limpeza automática de RAM libera espaço em disco e garante um PC estável. Além disso, as funções anti-rastreamento do navegador e escudo de privacidade garantem sua privacidade online. A aceleração de internet otimizada acelera sua conexão de internet em até 300%. Para mais informações sobre a edição PRO, veja a tabela abaixo.
        </p>
        <div class="price-zone clearfix">
          <div class="price">Apenas <strong>R$ 54,99</strong> <del>R$ 109,98</del></div>
          <a class="button btn-orange large"
             href="https://www.iobit.com/buy.php?product=ptaff-asc131pc5499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" 
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc132020install');">
            Comprar Agora
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- compare -->
  <div class="compare-zone">
    <div class="container">
      <div class="compare">
        <table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
          <thead>
            <tr>
              <td colspan="2" class="title">
                <h3>Veja por que seu PC precisa de Advanced SystemCare PRO</h3>
              </td>
              <td class="itempro">
                <h5>Advanced SystemCare<span>PRO</span></h5>
                <a class="button btn-orange small" 
                   href="https://www.iobit.com/buy.php?product=ptaff-asc131pc5499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" 
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc132020install');">
                  COMPRAR AGORA  <small>(Apenas R$ 54,99)</small>
                </a>
                <small>1 Ano de Assinatura / 1 PC</small>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr><td colspan="4" class="mid-header">Limpa e Otimiza o Desempenho do PC</td></tr>
            <tr>
              <td class="icon"><img src="https://www.iobit.com/tpl/images/comparison/clean/cl_basic.png" alt=""></td>
              <td class="describe">Limpeza e otimização básica do PC</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon"><img src="https://www.iobit.com/tpl/images/comparison/clean/cl_deep.png" alt=""></td>
              <td class="describe">Limpeza e otimização total do PC <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon"><img src="https://www.iobit.com/tpl/images/comparison/clean/cl_registry.png" alt=""></td>
              <td class="describe">Limpeza profunda do registro para prevenir erros e travamentos <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/defrag/defrag_pc.png" alt="">
              </td>
              <td class="describe">Desfragmenta dados do disco rígido para otimizar o desempenho do disco</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/clean/cl_ram.png" alt="">
              </td>
              <td class="describe">Sistema mais Rápido com Limpeza Automática de RAM</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/clean/cl_care.png" alt="">
              </td>
              <td class="describe">Otimização Agendada ou em Tempo Real com Manutenção Automática do PC</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/clean/cl_monitor.png" alt="">
              </td>
              <td class="describe">Monitora a condição do sistema em tempo real</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/update/upd_software.png" alt="">
              </td>
              <td class="describe">1-clique para manter programas importantes atualizados <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr><td colspan="4" class="mid-header">Acelera a Velocidade do PC</td></tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/speedup/sp_startup.png" alt="">
              </td>
              <td class="describe">Inicialização do PC até <strong>200%</strong> mais Rápida <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/speedup/sp_internet.png" alt="">
              </td>
              <td class="describe">Navegação na Internet até <strong>300%</strong> mais Rápida com "Acelerar Internet"</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr><td colspan="4" class="mid-header">Garante a Segurança do PC</td></tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_b_spy.png" alt="">
              </td>
              <td class="describe">Proteção Básica do PC com remoção de spyware <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_infect.png" alt="">
              </td>
              <td class="describe">Proteção Total do PC para detectar e remover as infecções mais profundas <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_faceid.png" alt="">
              </td>
              <td class="describe">Captura intrusos automaticamente com FaceID</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_email.png" alt="">
              </td>
              <td class="describe">Bloqueia links maliciosos e remetentes suspeitos em e-mails <i class="tags new"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_track.png" alt="">
              </td>
              <td class="describe">Proteção de navegação premium com limpeza automática de rastros de navegação</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_fingerprint.png" alt="">
              </td>
              <td class="describe">Esconde a assinatura digital para manter sua vida online privada</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_personal.png" alt="">
              </td>
              <td class="describe">Mantém seus dados pessoais livres de programas não-confiáveis <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/protect/pr_realtime.png" alt="">
              </td>
              <td class="describe">Detecta e bloqueia falhas de segurança ativamente <i class="tags improved"></i></td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr><td colspan="4" class="mid-header">Serviço VIP da Iobit</td></tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/service/serv_update.png" alt="">
              </td>
              <td class="describe">Atualização Automática para a Última Versão</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
            <tr>
              <td class="icon">
                <img src="https://www.iobit.com/tpl/images/comparison/service/serv_support.png" alt="">
              </td>
              <td class="describe">Assistência Técnica Grátis 24 horas por dia</td>
              <td class="itempro"><i class="fa fa-check"></i></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2" class="title"></td>
              <td class="itempro">
                <a class="button btn-orange small" 
                   href="https://www.iobit.com/buy.php?product=ptaff-asc131pc5499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" 
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc132020install');">
                  COMPRAR AGORA  <small>(Apenas R$ 54,99)</small>
                </a>
                <small>1 Ano de Assinatura / 1 PC</small>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>    
  </div>
  <!-- end compare -->

  <!-- review -->
  <div class="review">
    <div class="container">
      <div id="dg-container" class="dg-container">
        <div class="nav"> 
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="https://www.iobit.com/tpl/images/media/CNET.png" alt=""></dt>
            <dd>
              <h2>Opinião da Mídia</h2>
              <p>"Não há nada pior que um computador travado que impede você de trabalhar ou jogar. Advanced Systemcare irá reparar todos os problemas independente de quais sejam, não somente limpando os arquivos inúteis, malware, e entrada de registros inválidos, mas também irá dar um boost ao seu computador para otimizar sua experiência de PC."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="https://www.iobit.com/tpl/images/users/Bruce-Ramsay.png" alt=""></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Eu, como muitos outros, comecei com a Versão Grátis e eventualmente comprei a Versão PRO. Ele tem operado, por anos, para manter o meu computador limpo e livre de "bugs" e até agora ainda não me deixou na mão vez alguma. Eu, recentemente, contactei a equipe do Advanced System Care e recebi a resposta dentro de um ou dois dias com tudo que eu precisava saber. Na minha opinião, o Suporte ao Cliente é essencial na minha decisão de continuar usando o produto e o ASC ganha de qualquer outro produto quando se trata de Suporte ao Cliente e Produto."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="https://www.iobit.com/tpl/images/users/Hank-Ewert.png" alt=""></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Como a maioria das pessoas, eu não sou um expert em computadores. Eu perdi a conta de quantos programas eu tentei em anos e nenhum chegou perto do Advanced SystemCare Pro. Desde que eu tenho este programa eu não precisei chamar um técnico para reparar meu computador sequer uma vez. Definitivamente ultrapassou as minhas expectativas, sempre atualizado e o visual é bem legal também. Obrigado a vocês por fazerem minha vida tão mais fácil."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="https://www.iobit.com/tpl/images/users/Charles-R-Widick.png" alt=""></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Na opinião de um técnico de reparo de computadores, eu acho que a maioria dos problemas são resolvidos escaneando o PC com o ASC Free. Quando termino com o reparo eu geralmente sugiro que o cliente compre o pacote PRO. Quem precisa de um técnico quando você tem o poder do Advanced System Care Pro trabalhando no seu sistema 24hx7dias? Este é o melhor produto que um usuário pode comprar. Obrigado por facilitar o meu trabalho!"</p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="https://www.iobit.com/tpl/images/users/Loretta-Harnarine.png" alt=""></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Esse programa é o melhor que já usei. Meu computador está rodando muito mais rápido e muito melhor em geral desde que adquiri Advanced SystemCare Pro. O programa limpou arquivos desnecessários e duplicados, pastas vazias e eu o usei para destruir arquivos. Também limpou e desfragmentou o registro e todos os arquivos no meu PC. Eu recomendo que você compre este programa. Não é caro e o que fará pelo seu computador é totalmente incrível. Você vai amar, eu prometo."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
        </div>               
      </div>
    </div>
  </div>
  <!-- end review --> 

  <!-- btmarea -->
  <div class="btmarea compare clearfix">
    <div class="container">
      <h2>Uaktualnij, aby Twój komputer znowu działał jak nowy</h2>
      <div class="price-zone clearfix">
        <dl>
          <dt><span>Apenas <strong>R$ 54,99</strong> <del>R$ 109,98</del></span></dt>
          <dd>
            <a class="button btn-orange large"
               href="https://www.iobit.com/buy.php?product=ptaff-asc131pc5499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" 
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc132020install');">
              Comprar Agora
            </a>
          </dd>
          <dd>1 Ano de Assinatura / 1 PC</dd>
        </dl>
        <div class="money-back"></div>
      </div>
    </div>
  </div>
  <!-- end btmarea -->

  <div class="footer">
    <div class="container">
      <p>© 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
  </div>

  <script src="https://www.iobit.com/tpl/js/modernizr.min.js"></script>
  <script src="https://www.iobit.com/tpl/js/review-3d-carousel.min.js"></script>
<script>
  $(function() {    
    $('#dg-container').gallery(); 
  });
</script>
</body>
</html>