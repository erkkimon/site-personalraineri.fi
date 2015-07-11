<!DOCTYPE html>

<html lang="fi">

  <head>
  
    <meta charset="utf-8">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0">
    <meta name="author"                 content="The Fellowship of Personal Travis">
    <meta name="description"            content="Taskukokoinen personal trainerisi. Julkaisuun asti ilmaiseksi.">
    
    <meta property="article:title"      content="Personal Travis – treeniohjelma 2.0" /> 
    <meta property="article:publisher"  content="https://www.facebook.com/personaltravis" /> 
    <meta property="og:image"           content="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/cover-fi.jpg" /> 
    <meta property="og:type"            content="sport" />
    <meta property="og:url"             content="http://personaltravis.com" />
    <meta property="og:description"     content="Taskukokoinen personal trainerisi. Julkaisuun asti ilmaiseksi." />
    
    <meta name="twitter:title"          content="Personal Travis – treeniohjelma 2.0" />
    <meta name="twitter:card"           content="summary" />
    <meta name="twitter:url"            content="http://personaltravis.com" />
    <meta name="twitter:image"          content="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/cover-fi.jpg" />
    <meta name="twitter:description"    content="Taskukokoinen personal trainerisi. Julkaisuun asti ilmaiseksi." />
    
    <link rel="shortcut icon" href="img/favicon.png">
    
    <title>Personal Travis &ndash; treeniohjelma 2.0</title>

    <!-- Bootstrap core CSS -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>
    <div id="bg"></div>
  
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <a class="navmenu-brand" href="#">Personal Travis</a>
      <ul class="nav navmenu-nav">
        <li><a onclick="scrollToAnchor('who');">Kuka on Travis?</a></li>
        <li><a onclick="scrollToAnchor('usage');">Miten se toimii?</a></li>
        <li><a onclick="scrollToAnchor('install');">Haluan asentaa sen!</a></li>
      </ul>
    </div>

    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="likebutton-placeholder">
        <iframe></iframe>
      </div> 
    </div>


    <!-- Welcomer -->
    <div id="home" class="home">
      <div class="text-vcenter">
        <!-- Centered text could be addded here -->
      </div>
    </div>
    
    <!-- Desktop navi -->
    <div id="desktop-nav" class="pad-section shadow">
      <div class="container">
		<p id="in-english"><strong><a onclick="scrollToAnchor('who_en');"">In English</a></strong></p>
        <div class="likebutton-placeholder">
          <iframe></iframe>
        </div> 
        <ul class="desktop-nav">
          <li><a onclick="scrollToAnchor('who');">Kuka on Travis?</a> |</li>
          <li><a onclick="scrollToAnchor('usage');">Miten se toimii?</a> |</li>
          <li><a onclick="scrollToAnchor('install');">Haluan asentaa sen!</a></li>
        </ul>
      </div>
    </div>

	<div id="services" class="pad-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12 visible-xs visible-sm">
					<br /><br /><p><strong>Click <a onclick="scrollToAnchor('who_en');"">here</a> for English version</strong></p>
				</div>
			</div>
		</div>
	</div>
    
    <!-- Description -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="who">Kuka on Travis?</h2>
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <p>Personal Travis on mobiilisovellus, joka kertoo treenaajalle, mitä liikkeitä 
            ja millä painoilla hänen tulisi tehdä. Se kertoo, mitä lihaksia treenata seuraavaksi. 
            Se muistaa tuloksesi ja haastaa sinut ylittämään itsesti antamalla uusia tulostavoitteita.</p>

            <p>Unohda paperinen treeniohjelma sekä tulosten kirjaaminen muistiin kynällä tai 
            kännykkää näpyttelemällä. Riittää, että kosket näyttöön yhden kerran. 
            Siis tietysti ainoastaan silloin, kun olet tehnyt ennätyksen Personal Travisin 
            suosittamassa liikkeessä.</p>

            <p>Nyt, kun Personal Travis on beta-vaiheessa, sinulla on mahdollisuus 
            kokeilla Personal Travisin käyttämistä ilmaiseksi. Personal 
            Travisiin on tulossa vielä runsaasti uusia ominaisuuksia ja bugikorjauksia, 
            mutta voit huoletta ottaa Personal Travisin salille mukaasi. 
            Se on jo sisäsiisti.</p>

            <p>Oletko valmis heittämään hyvästit paperiselle treeniohjelmallesi 
            sekä tulospäiväkirjallesi?</p>
          </div>
        </div>
        <hr />
      </div>
    </div>
    
    <!-- Usage -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="usage">Miten se toimii?</h2>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <h2>Travis ehdottaa</h2>
			<p>Personal Travis muistaa, mitä lihaksia treenasit viimeksi. Sen perusteella hän näyttää,
		    mitä lihaksia olisi viisasta treenata seuraavaksi. Travisin ehdottamassa treenissä kehittyvät lihakset
			näkyvät kortissa korostettuina. Avaa treeni täppäämällä korttia.</p>	
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/mockup-fi-1.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
          <div class="col-sm-3 col-xs-12">
            <h2>Sinä päätät</h2>
			<p>Jos et jostain syystä halua toimia Travisin ehdotuksen mukaisesti, saat uuden ehdotuksen sipaisemalla
			korttia alaspäin. Jos taas esimerkiksi poistuit aiemmin treenistä vahingossa, pääset siihen takaisin
			täppäämällä "Edelliseen treeniin" -nappulaa.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/mockup-fi-2.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <h2>Raportoi Travisille</h2>
			<p>Travis muistaa, millaisia sarjoja olet tehnyt missäkin liikkeessä. Jos saavutat tavoitteen,
			saat seuraavan kerran liikettä treenatessasi haastavamman tavoitteen. Travisille on tietysti raportoitava.
			Riittää, että täppäät suoritetuksi tavoitteet, jotka olet saavuttanut. Muut voi jättää merkkaamatta.</p>	
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/mockup-fi-3.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
          <div class="col-sm-3 col-xs-12">
            <h2>Muistaa ja laskee</h2>
			<p>Kiinnitä huomiosi kohtaan "vasarakääntö". Kun tavoite on viimeksi merkitty saavutetuksi, seuraavalla 
			kerralla tarjolla on haastavampi tavoite. Tässä tapauksessa liike tehdään edelleen 3 kilogrammalla, mutta
			kolme sarjaa ovatkin pituudeltaan 8 toistoa aiemman 6 toiston sijaan.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/mockup-fi-4.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <h2>Säädä itse</h2>
			<p>Jos tavoitteet tuntuvat liian vaikeilta tai helpoilta, voit säätää niitä tasoasi vastaavalle tasolle
			käsin. Esimerkiksi kokeneemmilla harjoittelijoilla on mitä luultavimmin tarve nostaa tavoitteita heti
			aluksi. Tulevaisuudessa julkaistaan ominaisuus, jonka avulla Travis kalibroi tavoitteet sopiviksi automaattisesti.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/mockup-fi-5.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
          <div class="col-sm-3 col-xs-12">
            <h2>Ja vielä</h2>
			<p>Oikeasta kulmasta painamalla pääset tietysti valikkoon. Sieltä pääsee myös asetuksiin, ja siellä 
		    voi toistaiseksi vaihtaa kielen. Valikkoon on tulossa paljon uutta ja jännää sitä mukaa kuin uusia 
			ominaisuuksia kehitetään. Ja niitä kehitetään kaikella sillä ajalla, mikä ei pala bugien korjaamiseen.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-fi/mockup-fi-6.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
        </div>
        <hr />
      </div>
    </div>
    
    <!-- Install -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="install">Haluan asentaa sen!</h1>
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <p id="english">Voit pestata Personal Travisin nyt ilmaiseksi Android-puhelimeesi 
            <a href="https://play.google.com/store/apps/details?id=fi.personalraineri&hl=fi">Androidin Play-kaupasta.</a>
            Oletko valmis heittämään hyvästit paperiselle treeniohjelmallesi sekä 
            tulospäiväkirjallesi?</p>
          </div>
        </div>
        <hr />
      </div>
    </div>
    
    <!-- Description -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="who_en">What is Personal Travis?</h2>
        <div class="row">
          <div class="col-sm-12 col-xs-12">

            <p>Personal Travis is a mobile application, which tells the user what exercises to do, and
                    how big weights to use in each exercise at the gym. It also does the planning for the coachee
                        and tells, what muscles to train next based on what the coachee has done lately. Personal Travis
                        remembers your latest results and challenges the user to exceed oneself by giving new goals.</p>

                        <p>Traditionally workout progams are ink on a paper. Also conventional workout diaries require
                        having a paper with you at the gym, plus a pen. Forget about paper and pen. Also forget about
                        writing down your results in a notes app on your phone. Just install Personal Travis, and you will
                        never need to remember anything anymore, because apps are not as stupid as paper.</p>

                        <p>The user needs to touch the application only, when a new record is made. Based on that information,
                        Personal Travis does the workout planning for you. How cool is that?</p>

                        <p>Now that Personal Travis is at beta stage, you have an opportunity to use all existing features
                        of Personal Travis for free. There will be tons of features in Personal Travis, but right now
                        the main focus is on fixing bugs in the core features.</p>

                        <p>So, just take Personal Travis with you at the gym. Don't worry, it's already housetrained and
                        doesn't pee around. Are you ready to say good bye to your papers and pens?</p>

          </div>
        </div>
        <hr />
      </div>
    </div>

    <!-- Usage -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="usage_en">How does it work?</h2>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <h2>Travis suggests</h2>
                        <p>Personal Travis remembers, what muscles you trained during your last workout. Based on that information,
                        it shows, what muscles it would be wise to trein next. The muscles that will be trained in the suggested workout,
                        are highlighted in the workout card. Open the workout by tapping the card.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-en/mockup-en-1.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
          <div class="col-sm-3 col-xs-12">
            <h2>You decide</h2>
                        <p>If you don't want to act according to Personal Travis' suggestion, you can get another suggestion
                        by swiping down the card. Also to be added, if you happened to exit the workout accidentally, you
                        get back to the training you lately had open by tapping "To previous workout" button.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-en/mockup-en-2.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <h2>Report to Travis</h2>
                        <p>Personal Travis remembers, what you have done lately, and how much weight you have had in each exercise.
                        If you reach the goal, next time you have the same exerceise in your workout, your goal will be more difficult.
                        To make it possible for Personal Travis to remember, you naturally need to report to Travis. It's enough to just
                        check the goals you have reached. The others should be left unchecked.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-en/mockup-en-3.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
          <div class="col-sm-3 col-xs-12">
            <h2>Remembers and plans</h2>
                        <p>Pay attention to the goal for benchpress. After marking the goal for benchpress as reached, the next time
                        you have benchpress in your workout, the goal will swapped into more difficult one. In this particular case the
                        exercise consists of three, six repetitions long exercises using 65 kilograms as weight. So the weight is 5 kilograms
                        more than the last time, but the length of series has dropped, but the series will be longer in the future as you develop.
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-en/mockup-en-4.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <h2>Adjust yourself</h2>
                        <p>If the goals feel too hard or easy, you can adjust the goals manually to match your current level.
                        For example, if you have gone to the gym for years, you will probably need to adjust the goals right away.
                        In the future there will be a feature, which allows the user to calibrate the goals automatically
                        based on an algorithm.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-en/mockup-en-5.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
          <div class="col-sm-3 col-xs-12">
            <h2>Yet another thing</h2>
                        <p>By pressing the hamburger menu icon in the upper right corner you can reveal the menu, of course.
                        There you can go to menu, and at the moment the only thing you can change is to switch the language to
                        Finnish. There will be lots of new stuff in the menu as soon as we have time to create new nice features.</p>
          </div>
          <div class="col-sm-3 col-xs-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mockups-en/mockup-en-6.png" class="img-responsive tutor-img" alt="Responsive image" />
          </div>
        </div>
        <hr />
      </div>
    </div>

    <!-- Install -->
    <div id="services" class="pad-section">
      <div class="container">
        <h1 name="install_en">I want to install it!</h1>
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <p>If you have an Android Phone, you can hire
                        <a href="https://play.google.com/store/apps/details?id=fi.personalraineri&hl=fi">Personal Travis for free.</a>
                        Are you ready to say good bye to paper?
          </div>
        </div>
        <hr />
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    
    <!-- Additional JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/iframetracker/jquery.iframetracker-1.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/dynamic-like-button-switcher/dynamic-like-button-switcher.js"></script>
    
    <!-- Google Analytics tracking code -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-44992450-1', 'auto');
      ga('send', 'pageview');
    </script>
    
  </body>
</html>
