<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=47683478;
$buyNum = ceil(microtime_float() * 1000 / 30000)-$reduceNum;
$buyNum = number_format($buyNum);
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf'))){
    $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adquira IObit Malware Fighter 7 Pro para 1 PC com 40% de desconto. Oferta Limitada da IObit.</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900i" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
    <script type="text/javascript">
    function getBuyNum(){
        $.ajax({
          type: "GET",
          url: "<?php echo $pRootUrl;?>callback.php",
          data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random()+"&reTime=30",
          success: function(packs){
            $('.people-num').html(packs);
              $('.buy-num-bot').html(strFormat(packs));
            setTimeout('getBuyNum()', 30000);
          }
        });
      }
      setTimeout('getBuyNum()', 30000);
    </script>
</head>
<body>
<!--head-->
<div class="container header clearfix">
    <div class="wrapper">
        <div class="head">
            <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
            <h1>PROMOÇÂO COMEMORATIVA!</h1>
            <h2>Em Agradecimento aos 2.000.000 de usuários do IObit Malware Fighter Pro!</h2>
        </div>
        <div class="banner">
            <img class="sign" src="<?php echo $pResUrl; ?>images/sign.png" alt=""/>
            <div class="banner-left fl">
                <img class="box-imf" src="<?php echo $pResUrl; ?>images/boxsort-imf.png" alt=""/>
                <span>Oferta termina em</span>
                <ul class="time">
                    <li>5</li>
                    <li>30</li>
                    <li>60</li>
                    <li class="last">60</li>
                </ul>
            </div>
            <div class="banner-right fr">
                <h2>IObit Malware Fighter 7 Pro - 1 ano / 1 PC</h2>
                <p class="decri">Garante sua segurança sem afetar a velocidade do seu PC</p>
                <span class="banner-line"></span>
                <p class="de-price">De <del>R$ 99,99</del></p>
                <p class="main-price">6x de <b>R$ 9,99</b></p>
                <p class="small-price">ou <b>R$ 59,99</b> a vista</p>
                <span class="banner-line"></span>
                <a class="buy-btn" href="https://www.iobit.com/buy.php?product=pt-imf71pc5999&ref=pt_imf71pcpurchase1908<?php echo $refStr;?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7purchase1908-pt')">COMPRAR AGORA</a>
                <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num"><?php echo $buyNum;?></b> pessoas já compraram</p>
                <div class="payments">
                    <h4>Formas de Pagamento</h4>
                    <img src="<?php echo $pResUrl; ?>images/paymens.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>
<!--hightlight-->
<div class="imf-message wrapper clearfix">
    <h2>Entenda como IObit Malware Fighter Pro mantém seu PC livre de ataques</h2>
    <div class="wrapper">
        <ul class="message clearfix">
            <li class="one active">
                <h4>Motor Bitdefender</h4>
                <p>Previne que mais de 200 milhões ameaças de segurança danifiquem seu computador.</p>
            </li>
            <li class="two">
                <h4>Prevenção contra Ransomware</h4>
                <p>Impede que ransomware invada seu PC e criptografe seus arquivos.</p>
            </li>
            <li class="three">
                <h4>Dados Pessoais mais Seguros</h4>
                <p>A função Cofre agora utilize senha para proteger seus dados pessoais contra acesso não-autorizado.</p>
            </li>
            <li class="four">
                <h4>Segurança na Inicialização</h4>
                <p>Protege a inicialização do seu PC para impedir que malwares danifiquem seu sistema durante o boot.</p>
            </li>
        </ul>
        <div class="img-change">
            <a href="javascript: void(0);" class="dg-prev"><span></span></a>
            <a href="javascript: void(0);" class="dg-next"><span></span></a>
            <div class="continer">
                <div class="roll">
                    <div class="content" data-num="0">
                        <img src="<?php echo $pResUrl; ?>images/img-list01.png">
                        <span></span>
                    </div>
                    <div class="content" data-num="1">
                        <img src="<?php echo $pResUrl; ?>images/img-list02.png">
                        <span></span>
                    </div>
                    <div class="content" data-num="2">
                        <img src="<?php echo $pResUrl; ?>images/img-list02.png">
                        <span></span>
                    </div>
                    <div class="content" data-num="3">
                        <img src="<?php echo $pResUrl; ?>images/img-list04.png">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-change clearfix">
            <dl class="active">
                <dt><img src="<?php echo $pResUrl; ?>images/class1.png" alt=""></dt>
                <dd> Novo motor <br> Bitdefender </dd>
            </dl>
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/class2.png" alt=""></dt>
                <dd>Prevenção contra <br>Ransomware</dd>
            </dl>
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/class3.png" alt=""></dt>
                <dd>Proteção de Dados <br>Pessoais</dd>
            </dl>
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/class4.png" alt=""></dt>
                <dd>Segurança na<br>Inicialização</dd>
            </dl>
        </div>
        <ul class="list-content">
            <li class="list01 noaml">
                <span class="icons"></span>
                <span class="line"></span>
            </li>
            <li class="list02">
                <span class="icons"></span>
                <span class="line"></span>
            </li>
            <li class="list03">
                <span class="icons"></span>
                <span class="line"></span>
            </li>
            <li class="list04">
                <span class="icons"></span>
                <span class="line"></span>
            </li>
        </ul>
    </div>

</div>
<!--user-->
<div class="container user clearfix">
    <div class="wrapper">
        <h2>IObit Malware Fighter Pro já protegeu mais de <span class="buy-num buy-num-bot"><?php echo $buyNum;?></span> de PCs.<br>
            Chegou a hora de proteger o seu.</h2>
        <ul class="user-list">
            <li class="fl">
                <img src="<?php echo $pResUrl; ?>images/GeluBatir.png" alt=""/>
                <h4>Gelu Batir</h4>
                <p>Eu estou muito satisfeito com o produto de vocês, o IObit Malware Fighter. Toda operação é clara, segura e útil para proteger meu laptop. A verificação do programa também não afeta o desempenho da minha máquina e por isso recomendei este produto para dois amigos meus.</p>
            </li>
            <li class="fl">
                <img src="<?php echo $pResUrl; ?>images/DavidCassidy.png" alt=""/>
                <h4>David Cassidy</h4>
                <p>Aqueles que estão procurando por um bom antivírus e anti-malware a um preço acessível não precisam ir além do IObit Malware Fighter. Eu recomendo que eles esqueçam do resto e escolha o melhor, que é o IObit Malware Fighter.</p>
            </li>
        </ul>
    </div>
</div>
<!--awards-->
<div class="wrapper awards clearfix">
    <h2>Recomendado também por</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt=""/>
</div>
<!--table-->
<div class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
            <th class="text" colspan="2">Veja o que a versão PRO traz para você</th>
            <th class="itemb">IObit Malware Fighter<br>
                FREE</th>
            <th class="itemc">IObit Malware Fighter
                PRO
                <span>1 Ano / 3 PCs</span>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon1.png"></td>
            <td class="virtue">Função Básica Anti-Malware <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg"> <img src="<?php echo $pResUrl; ?>images/check1.png"></td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon2.png"></td>
            <td class="virtue">Verificação até 130% mais Rápida para Lidar Rapidamente com Ameaças <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/check1.png"></td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon3.png"></td>
            <td class="virtue">Novo Motor Anti-ransomware para Bloquear que seus Arquivos sejam Criptografados ou 
seu Sistema feito de Refém <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/check1.png"></td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon4.png"></td>
            <td class="virtue">Utiliza Senha para Proteger Arquivos Importantes contra Acesso Não-Autorizado com o Cofre <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup>
            </td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon5.png"></td>
            <td class="virtue">Verifica Arquivos de Download e Remove Anúncios para Melhor Proteção <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon6.png"></td>
            <td class="virtue">Capacidade Anti- Malware completa com Motor "Dual-Core" Único  <sup> <img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon7.png"></td>
            <td class="virtue">Proteção Avançada contra Ameaças com o Mecanismo de AntiVirus Bitdefender <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon8.png"></td>
            <td class="virtue">Proteção na Inicialização do Disco para Proteger contra Ataques Maliciosos 
com a Guarda do MBR</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon9.png"></td>
            <td class="virtue">Protege sua Webcam contra Acesso Não-Autorizado</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon10.png"></td>
            <td class="virtue">Proteção Completa em Tempo Real para Segurança Total do PC <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon11.png"></td>
            <td class="virtue">Evita Infecção de Vírus por meio do Disco USB</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon12.png"></td>
            <td class="virtue">Detecta Processos Maliciosos na Mémoria RAM</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon13.png"></td>
            <td class="virtue">Limpeza Automática de Dados Privados com Anti-Rastreamento do Browser <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon14.png"></td>
            <td class="virtue">Detecta Ameaças por Meio da Análise de Ações Maliciosas</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon15.png"></td>
            <td class="virtue">Funciona de forma Inteligente em Segundo Plano Sem Interrupções</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon16.png"></td>
            <td class="virtue">Atualiza Automaticamente para a Última Versão</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon17.png"></td>
            <td class="virtue">Suporte Técnico Gratuito 24/7</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        </tbody>
    </table>
</div>
<!-- bottom-buy -->
<div class="bottom-buy wrapper clearfix">
    <h2>Com apenas R$ 0,16 por dia, você mantém seu PC e seus dados seguros.</h2>
    <h3></h3>
    <div class="box-contain">
        <img src="<?php echo $pResUrl; ?>images/boxsort-imf-small.png" alt=""/>
        <div class="bottom-btn">
            <p class="bottom-price">6x de <b>R$ 9,99</b>(ou R$ 59,99 a vista)</p>
            <a class="buy-btn" href="https://www.iobit.com/buy.php?product=pt-imf71pc5999&ref=pt_imf71pcpurchase1908<?php echo $refStr;?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7purchase1908-pt')">COMPRAR AGORA</a>
            <span class="btn-prce">Economize <b>R$ 40,00</b></span>
        </div>
    </div>
</div>
<!--service-->
<ul class="wrapper service clearfix">
    <li>
        <h5>Garantia de Reembolso</h5>
        <img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt="" />
    </li>
    <li>
        <h5> Atendimento 24 Horas</h5>
        <img src="<?php echo $pResUrl; ?>images/service.png" alt="" />
    </li>
    <li>
        <h5>Pagamento 100% Seguro</h5>
        <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" />
    </li>
</ul>
<!--footer-->
<div class="wrapper footer clearfix">
    <span class="note">
        Observe:<br>
1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.
    </span>
    <p class="copyright">Copyright © 2005 - 2019 IObit. Todos os Direitos Reservados</p>
</div>



<script type="text/javascript">
    function cycleCountdown(){
        var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
        var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
        d = MApp(2.2).packages.zeroize(datetime[0], 2);
        h = MApp(2.2).packages.zeroize(datetime[1], 2);
        i = MApp(2.2).packages.zeroize(datetime[2], 2);
        s = MApp(2.2).packages.zeroize(datetime[3], 2);
        mi = MApp(2.2).packages.zeroize(datetime[4], 3);
        $(".time li").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
        setTimeout('cycleCountdown()', 1);
    }
    cycleCountdown();

//    checked
    function Checked(id,name){
        $(id).on('click',function (i) {
                var index = $(this).index();
                var arr=[
                    "https://www.iobit.com/buy.php?product=pt-imf51pc5999&ref=pt_imf51pcpurchase1704<?php echo $refStr;?>&refs=pt_purchase_imf",
                    "https://www.iobit.com/buy.php?product=pt-imf53pcpf6999&ref=pt_imf53pcpfpurchase1704<?php echo $refStr;?>&refs=pt_purchase_imf"
                ];
                $(this).addClass("active").siblings().removeClass("active");
                $(name).eq(index).addClass("active").siblings().removeClass('active');
                $(".buy-btn").attr("href",arr[index]);
                if(index!=$(this).index()){
                   $(this).addClass("active").siblings().removeClass("active");
                }
        });
    }
    Checked("#banner-li li","#float-li li");


//hightlight
    if ($('.img-change .roll').length != 0) {
        var count = $('.img-change .roll .content').length;
        $('.img-change .roll').css('width', 365 * count);
    };
    $('.img-change .dg-next').click(function(event) {
        $('.img-change .roll').stop(true, true).animate({marginLeft: -365}, '200',function(){
            $('.img-change .roll').css('marginLeft', '0');
            $('.img-change .roll').find('.content:first').appendTo($('.img-change .roll'));
        });
        num();
    });
    $('.img-change .dg-prev').click(function(event) {
        $('.img-change .roll').find('.content:last').prependTo($('.img-change .roll'));
        $('.img-change .roll').css('marginLeft', -365);
        $('.img-change .roll').stop(true, true).animate({marginLeft: 0}, '200');
        var num=$('.img-change .roll .content:first').attr("data-num");
        $('.imf-message .message li').eq(num).addClass("active").siblings().removeClass('active');
        $('.feature-change dl').eq(num).addClass("active").siblings().removeClass('active');
        $('.list-content li').eq(num).addClass("active").siblings().removeClass('active').removeClass("noaml");
    });
    function num() {
        var num=$('.img-change .roll .content:first').attr("data-num");
        if(num==3) {
            $('.imf-message .message li').eq(0).addClass("active").siblings().removeClass('active');
            $('.feature-change dl').eq(0).addClass("active").siblings().removeClass('active');
            $('.list-content li').eq(0).addClass("active").siblings().removeClass('active').removeClass("noaml");
        }
        else {
            num ++;
            $('.imf-message .message li').eq(num).addClass("active").siblings().removeClass('active');
            $('.feature-change dl').eq(num).addClass("active").siblings().removeClass('active');
            $('.list-content li').eq(num).addClass("active").siblings().removeClass('active').removeClass("noaml");
        }
    }
    $(function(){
        $('.buy-num-bot').html(strFormat($('.buy-num-bot').html()));
    });
    function strFormat(str){
        return str.replace(/,/g,'.');
    }
</script>
</body>
</html>