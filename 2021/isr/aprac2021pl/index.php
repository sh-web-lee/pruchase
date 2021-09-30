<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Nagrywania ekranu - 70% zniżki na iFun Screen Recorder PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="70% zniżki na najlepszy w pełni ​funkcjonalny rejestrator ekranu, darmowy i łatwy w użyciu. 100% jakości, 0 opóźnień">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="Nagrywania ekranu - 70% zniżki na iFun Screen Recorder PRO">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/pl/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Nagrywaj wszystko na swoim ekranie bez znaku wodnego i ograniczeń</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>70%</b> <span>zniżki</span></h2>
          <p>Wyłącznie dla klientów IObit</p>
        </div>
      </div>
      <div class="price">
        <p>Tylko: <strong>59,90 zł </strong><del>199,90 zł</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=pl-isr11pc59&ref=pl_isr11pc59-ac<?= $refStr; ?>&refs=pl_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcac74-pl')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktywuj teraz</span>
              </div>
        </a>
        <span>1 rok / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">W jaki sposób iFun Screen Recorder PRO może Ci pomóc?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>NAGRYWAJ KAŻDĄ CZĘŚĆ SWOJEGO EKRANU</h3>
          <p>Wybierz dowolne okno lub region niestandardowy na ekranie i nagraj je dokładnie tak, jak chcesz.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>PRZECHWYĆ KAMERĘ INTERNETOWĄ I MIKROFON</h3>
          <p>Jednocześnie nagrywaj ekran, kamerę internetową i mikrofon, aby opowiedzieć o tym, co widzą Twoi odbiorcy. Idealny do samouczków, wideo z rozgrywki i zajęć online.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>USUŃ ZNAK WODNY</h3>
          <p>Dzięki iFun Screen Recorder PRO nie ma obowiązkowego znaku wodnego na Twoim filmie. <strong style="color: #b80000; font-weight: 500;">Jeszcze lepiej, jeśli chcesz możesz dodać własny znak wodny!</strong></p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>NAGRYWAJ TAK DŁUGO, JAK CHCESZ</h3>
          <p>Darmowe rejestratory ekranu zwykle nagrywają tylko kilka minut, ale dzięki iFun Screen Recorder PRO możesz nagrywać tak długo, jak chcesz. Nagrywaj całe filmy, wykłady i godziny rozgrywki.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>TWÓRZ WIDEO NAJWYŻSZEJ JAKOŚCI</h3>
          <p>Dzięki naszej akceleracji GPU gwarantujemy najwyższą jakość. Rozdzielczość do 4K i 60 FPS dla doskonałych filmów bez opóźnień.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>EDYTUJ SWOJE WIDEO</h3>
          <p>Po nagraniu natychmiast edytuj swój film bez potrzeby korzystania z innego oprogramowania. Stwórz swój idealny film bezpośrednio!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Nagradzany na całym świecie</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Zawsze słuchamy opinii naszych użytkowników</span></h2></dt>
          <dd>
            <p>
              "Jak dotąd świetnie. iFun Screen Recorder to naprawdę kompletne narzędzie, które jest łatwe w użyciu. Nie wiedziałam, jak nagrywać ekran w systemie Windows, ale dzięki temu oprogramowaniu jest to łatwe. Dzięki iFun Screen Recorder mogę robić zrzuty ekranu podczas nagrywania HD i dodawać podpisy do filmu po nagraniu. Następnie przesyłam to na mój Instagram i przyciągam ogromną uwagę. Ten potężny rejestrator ekranu pomógł mi w rozwoju mojej firmy. Przy okazji, jest on całkowicie bezpłatny."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Zawsze słuchamy opinii naszych użytkowników</span></h2></dt>
          <dd> 
            <p>
              "Natknąłem się na ten darmowy rejestrator ekranu i stałem się jego fanem ze względu na jego proste funkcje edycji. Ponieważ lubię nagrywać proces obsługi, aby pomóc ludziom w rozwiązywaniu problemów z komputerem, a to oprogramowanie do nagrywania pozwala mi nagrywać wideo z dźwiękiem, więc mogę bezpośrednio po nagraniu przesłać zmontowany film do YouTube. Łączy nagrywanie i edycję, co jest bardzo wygodne dla youtuberów takich jak ja, którzy chcą udostępniać filmy instruktażowe!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Zawsze słuchamy opinii naszych użytkowników</span></h2></dt>
          <dd>
            <p>
              "Jako sekretarka muszę często korzystać z oprogramowania do nagrywania ekranu. Trudno było znaleźć dla mnie idealny darmowy rejestrator ekranu, ale iFun Screen Recorder jest doskonałym narzędziem do nagrywania wideo-telekonferencji i bardzo mi pomaga! Pozwolił mi nagrać ekran HD i przekonwertować wideo na różne formaty. Bardzo polecam iFun Screen Recorder!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Zawsze słuchamy opinii naszych użytkowników</span></h2></dt>
          <dd>
            <p>
              "Cześć! Wasz fantastyczny darmowy rejestrator ekranu zaskakuje mnie. Mogę nagrywać wszystkie cenne i wspaniałe chwile za pomocą iFun Screen Recorder, szczególnie w przypadku filmów na żywo. Filmy, które nagrywam za pomocą iFun Screen Recorder, są niezwykle wysokiej jakości. Mogę je zapisywać i udostępniać znajomym. Na początku nie byłem pewien tego oprogramowania, jednak rezultaty są niesamowite. Jest ono znakomite!"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Twórz najwyższej jakości wideo bez znaku wodnego i ograniczeń</h2>
      <div class="price">
        <p>Tylko: <strong>59,90 zł </strong><del>199,90 zł</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=pl-isr11pc59&ref=pl_isr11pc59-ac<?= $refStr; ?>&refs=pl_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcac74-pl')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktywuj teraz</span>
              </div>
        </a>
        <span>1 rok / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>WYJĄTKOWA OFERTA</h2>
        <p><strong>70% zniżki</strong> dla nagrywania ekranu bez ograniczeń</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Tylko: <strong>59,90 zł </strong><del>199,90 zł</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=pl-isr11pc59&ref=pl_isr11pc59-ac<?= $refStr; ?>&refs=pl_purchase_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcac74-pl')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktywuj teraz</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>