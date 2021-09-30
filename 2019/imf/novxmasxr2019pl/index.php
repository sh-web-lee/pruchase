<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
function microtime_float() {
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}
$reTime=10;
$reduceNum=151832715;
$buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum,0,'',' ');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Nadszedł wielki dzień! Cieszmy się i wspólnie świętujmy Boże Narodzenie... Wesołych Świąt!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Zostało tylko <b class="packsNum"><?php echo $packsNum?></b> !</p>
      <a class="spree-buy"
         href="http://www.iobit.com/buy.php?product=pl-imf73pcsdpf79&ref=pl_imf73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas1911xr-pl');">
      </a>
    </div>
  </div>
  <!-- end spree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Magiczna promocja specjalnie na święta</h1>
    <!-- subtitle -->
    <p>Najlepsze oferty już są! Aż do <span>-85%,</span> po co czekać?</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-30.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 rok / 1 komputer</p>
        <dl>
          <dd class="clearfix">
            Taniej o:     <span class="fr">50,00 zł</span>
          </dd>
          <dd class="two">
            <p class="price"><b>69</b> <del>119,90 zł </del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-imf71pc69&ref=pl_imf71pc69purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas1911xr-pl');"
               data-num="2">
              <i class="all-icons"></i> KUP TERAZ
            </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-80.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 rok / 3 komputery</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>g
            <strong>00</strong>m
            <strong>00</strong>s 
            <strong>30</strong>ms
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Taniej o:      <span class="fr">389,80 zł</span>
          </dd>
          <dd class="one">
            Prezenty świąteczne<i class="all-icons"></i>
            <p class="point">
              Prezenty świąteczne obejmują Protected Folder i Smart Defrag PRO.
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>79</b> <del>469,70 zł </del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="http://www.iobit.com/buy.php?product=pl-imf73pcsdpf79&ref=pl_imf73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas1911xr-pl');"
               data-num="0">
              <i class="all-icons"></i> KUP TERAZ
            </a>
            <p class="note"><i class="all-icons"></i><b class="buyNum"><?php echo $buyNum;?></b> osób już to kupiło</p>
          </dd><!-- <b>5 414 943</b> -->
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 rok / 3 komputery</p>
        <dl>
          <dd class="clearfix">
            Taniej o:     <span class="fr">120,00 zł</span>
          </dd>
          <dd class="two">
            <p class="price"><b>79</b> <del>199,90 zł </del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-imf73pc79&ref=pl_imf73pc79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas1911xr-pl');"
               data-num="1">
              <i class="all-icons"></i> KUP TERAZ
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <!-- ball -->
    <div class="ball">
      <span>1</span>
    </div>
    <!-- title -->
    <h2>Skorzystaj z ochrony Bitdefender, aby uzyskać najwyższe <br> bezpieczeństwo w cyberprzestrzeni!</h2>
    <p>
      Dzięki wiodącemu na świecie silnikowi antywirusowemu Bitdefender, <span>ponad 203 miliony nowych</span> zagrożeń online, <br> takich jak adware, wirusy, złośliwe oprogramowanie, oprogramowanie szpiegujące itp., można łatwo usunąć z komputera.
    </p>
    <img src="<?php echo getStaticUrl('images/feature-icons.png')?>" alt="">
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- ball -->
    <div class="ball">
      <span>2</span>
    </div>
    <!-- title -->
    <h2>Możesz także cieszyć się:</h2>
    <img src="<?php echo getStaticUrl('images/intro-adorn.png')?>" alt="">
    <!-- 01 -->
    <dl class="one clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Silnikiem zwalczającym <br> oprogramowanie szantażujące (ransomware)</h3>
        <p>
         Nigdy nie martw się, że hakerzy <br> wejdą na Twój komputer i zaszyfrują <br> ważne pliki i dane osobowe.
        </p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Bezpieczniejszym surfowaniem  <br> po internecie</h3>
        <p>
          Automatycznie usuwaj pliki cookie i <br>
          niebezpieczne ślady po zamknięciu <br>
          przeglądarki internetowej, aby uniemożliwić <br>
          hakerom wyszukiwanie treści, które czytasz, <br> przeglądasz i kupujesz online.
        </p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Ochroną kamery internetowej</h3>
        <p>
          Każda próba dostępu do kamery <br> internetowej może być wykonana <br> wyłącznie za Twoją zgodą, aby <br> uniknąć wścibskich oczu.
        </p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Ochroną plików za pomocą haseł</h3>
        <p>
          Zablokuj swoje prywatne pliki i zdjęcia za <br> pomocą bezpiecznego hasła. Nikt nie <br> będzie mógł uzyskać dostępu do twoich <br> wrażliwych danych bez twojego hasła.
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2 class="on">Wyjątkowe prezenty, które umilą Twoje święta!</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- iu -->
      <dl class="sd">
        <dt></dt>
        <dd>
          <p class="cost"><del>119,90 zł</del> <span><big>0</big> zł</span></p>
          <p class="detail">
            Maksymalizacja wydajności dysku twardego.
          </p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt></dt>
        <dd>
          <p class="cost"><del>149,90 zł</del> <span><big>0</big> zł</span></p>
          <p class="detail">
            Potężne narzędzie do ochrony plików, <br> które gwarantuje bezpieczeństwo plików i danych.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2 class="on"> Bez pełnej ochrony Twój komputer jest podatny na ataki!</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>Twoja aktualna wersja</p></th>
          <th class="item-b"></th>
          <th class="item-c"><p>IObit Malware Fighter 7 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">3 miliony</td>
          <td class="item-b">Baza danych złośliwego oprogramowania</td>
          <td class="item-c"> Ponad 203 miliony</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Silniki antywirusowe Bitdefender</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Silnik anty-Ransomware</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Ochrona kamery internetowej</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Ochrona przed śledzeniem</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Ochrona klucza USB</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Wrażliwe dane chronione hasłem</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Ochrona w czasie rzeczywistym</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Niedostępne</td>
          <td class="item-b">Automatyczna aktualizacja</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
    <!-- subtitle -->
    <h3>Ciesz się pełną prywatnością i swobodą w Internecie!</h3>
    <!-- imf-85 buybtn -->
    <a class="buybtn red"
       href="http://www.iobit.com/buy.php?product=pl-imf73pcsdpf79&ref=pl_imf73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas1911xr-pl');">
      <i class="all-icons"></i> KUP TERAZ
    </a>

  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2 class="on">
      Robimy co w naszej mocy, aby zadowolić naszych klientów,  <br>
      gdziekolwiek się znajdują! 
    </h2>
    <div class="content">
      <h3>Co oni myślą?</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Bati"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Peter Stoffers</h4>
          <p>„Kilka lat temu ktoś zwrócił moją uwagę na IObit Malware Fighter. Najpierw byłem sceptycznie nastawiony. Jednak po zainstalowaniu stał się on moim ulubionym programem przeciwko złośliwemu oprogramowaniu. Jest bardzo łatwy w użyciu. Przez lata udało mu się wykryć i usunąć wiele zagrożeń. We współpracy z innymi programami IObit, takimi jak na przykład ASC, mam zapewnioną dobrą ochronę komputera. Teraz polecam te programy wszystkim moim znajomym i rodzinie”.</p>
        </div>
        <div class="active">
          <h4>Software Informer</h4>
          <p>„Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów”.</p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>„Chciałbym bardzo podziękować wszystkim pracownikom IObit za ciężką pracę nad dostarczeniem nam najlepszych programów. Rozwijacie się dla użytkowników. Ostatnia aktualizacja jest znacznie szybsza w skanerze i łatwa w obsłudze. Ci, którzy szukają naprawdę dobrego programu antywirusowego, który jest również wart swojej ceny, nie muszą szukać dalej niż IObit Malware Fighter”.</p>
        </div>
        <div>
          <h4>Gelu Bati</h4>
          <p>„Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Przed zakupieniem tego produktu, miałem wiele problemów ze złośliwymi zakłóceniami, nie byłem w stanie obejrzeć całego filmu lub koncertu, co bardzo lubię robić. Dzięki waszemu programowi, teraz każda operacja jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje mój laptop bez wpływu na jego wydajność. Poleciłem ten produkt dwóm moim znajomym”.</p>
        </div>
        <div>
          <h4>Bob Bassett</h4>
          <p>„Używaliśmy do kilkunastu różnych programów, aby nasze komputery działały bezproblemowo i trzymały hakerów z dala. Utrzymanie bezpieczeństwa i wydajności każdego tygodnia zajmowało dużo czasu. Teraz, dzięki Advanced SystemCare Pro, wszystko jest w jednym miejscu i zajmuje tylko kilka minut co kilka dni, aby wykonywać te same zadania za to z lepszymi efektami. Od kiedy używamy waszych programów, nie mamy już problemów”.</p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">Nie pozwól, aby zagrożenia zepsuły Ci święta!</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-imf-bundle.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 rok / 3 PC + prezenty świąteczne</li>
      <li class="mid">1 rok / 3  komputery</li>
      <li class="bot">1 rok / 1 komputer</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>79</b> <del>469,70 zł </del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="http://www.iobit.com/buy.php?product=pl-imf73pcsdpf79&ref=pl_imf73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas1911xr-pl');">
          <i class="all-icons"></i> KUP TERAZ
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Gwarancja satysfakcji</h3>
          <p>60-dniowa gwarancja zwrotu pieniędzy.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Całkowicie bezpieczna płatność</h3>
          <p>IObit oferuje osiem bezpiecznych metod płatności za Twoje zakupy.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
        <dd>
          <h3>Uzyskaj licencję</h3>
          <p>Kod licencyjny otrzymasz w ciągu kilku minut po zakupie.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Uwaga:</dt>
        <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
        <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>