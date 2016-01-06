<?php
include("config.php");
include("banco.php");
if (isset($_GET['p'])) { $page = stripcslashes($_GET['p']); }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/foxicon.png">
    <title>
      <?php
       if ((isset($page)) && (file_exists("page/$page.php"))) {
        if ($page == "minhaconta") { echo "Minha conta"; }
        else {
          echo ucfirst($page)." | ";
        }
       }

      ?>
      Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário
    </title>
    <meta name="description" content="">
    <meta name="author" content="Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário">
    <META NAME="Keywords" CONTENT="Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário">
    <META NAME="Description" CONTENT="Cachoeira do Sul Empregos - Cacho">

    <META NAME="Subject" CONTENT="Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário">
    <META NAME="Classification" CONTENT="Computers/Internet">
    <META NAME="Abstract" CONTENT="Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário">
    <META NAME="Copyright" CONTENT="Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário">
    <META NAME="Contact" CONTENT="contato@scripting.com.br">
    <META NAME="Publisher" CONTENT="Cachoeira do Sul - Empregos / Gratuíto / Projeto Livre / Comunitário">
    <META NAME="Robots" CONTENT="ALL">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <META NAME="Revisit-After" CONTENT="5 Days">
    <META NAME="Distribution" CONTENT="Global">
    <META NAME="Rating" CONTENT="General">

    <link rel="canonical" href="http://www.scripting.com.br/" >
    <meta name="geo.region" content="BR-RS" >
    <meta name="geo.placename" content="Cachoeira do Sul, Rio Grande do Sul, Brasil" >
    <meta name="geo.position" content="-30.0483822;-52.8872863,17" >
    <meta name="dcterms.title" content="Cachoeira do Sul Empregos - Cacho" >
    <meta name="dcterms.type" content="text" >
    <meta name="dcterms.format" content="text/html" >
    <meta name="dc.language" content="pt-BR" >
    <meta name="dcterms.subject" content="Cachoeira do Sul Empregos - Cacho" >
    <meta name="dcterms.creator.address" content="contato@scripting.com.br" >
    <meta name="dcterms.identifier" content="http://www.scripting.com.br/" >
    <meta property="og:title" content="Cachoeira do Sul Empregos - Cacho" >
    <meta property="og:url" content="http://www.scripting.com.br/" >
    <meta property="og:image" content="images/foxicon.png" >
    <meta property="og:site_name" content="Cachoeira do Sul Empregos - Cacho" >
    <meta property="fb:admins" content="scriptingstudiosart">
    <meta property="og:description" content="Cachoeira do Sul Empregos - Cacho" >
    <meta property="og:latitude" content="-30.0483822" >
    <meta property="og:longitude" content="-52.8872863,17" >
    <meta property="og:street-address" content="Rua Riachuelo 517" >
    <meta property="og:locality" content="Cachoeira do Sul" >
    <meta property="og:region" content="RS" >
    <meta property="og:country-name" content="BR" >
    <meta property="og:email" content="contato@scripting.com.br" >
    <meta property="og:phone_number" content="(51) 9684-6630" >
    <meta itemprop="name" content="Cachoeira do Sul Empregos - Cacho" >
    <meta itemprop="image" content="images/foxicon.png" >
    <meta name="alexaVerifyID" content="gaBEFg-Vtlufz8aLpC_7r7_EwPA"/>
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"gH9Cf1a8Md00aq", domain:"scripting.com.br",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>


    <link rel="alternate" hreflang="pt-BR" href="http://scripting.com.br/" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?php echo $caminho; ?>css/andremachado.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo $caminho; ?>css/lightbox.css">
    <link rel="stylesheet" href="<?php echo $caminho; ?>foundation/css/foundation.css" />
    <script src="<?php echo $caminho; ?>foundation/js/vendor/modernizr.js"></script>

</head>
<body >
    <!-- Inicio do Container -->
    <div class="container">
        <!-- Inicio do Conteúdo Header -->
        <header class="row">

            <h1 style="display:none;">Agencia comunitária de empregos - Cachoeira do Sul</h1>

            <ul class="nav nav-tabs">
                <li <?php if (!isset($page)) { ?> class="active" <?php } ?> >
                  <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>inicio" <?php } else { ?> href="#1" data-toggle="tab" <?php } ?> rel="Início">Início</a>
                </li>
                <li <?php if (isset($page) && ($page == "sobre")) { ?> class="active" <?php } ?>>
                  <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>sobre" <?php } else { ?> href="#2" data-toggle="tab" <?php } ?> rel="Sobre">Sobre</a>
                </li>
                <li <?php if (isset($page) && ($page == "vagas")) { ?> class="active" <?php } ?>>
                  <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>vagas" <?php } else { ?> href="#3" data-toggle="tab" <?php } ?> rel="Vagas CLT">Vagas</a>
                </li>
                <li <?php if (isset($page) && ($page == "estagios")) { ?> class="active" <?php } ?>>
                  <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>estagios" <?php } else { ?> href="#4" data-toggle="tab"<?php } ?> rel="Estágios">Estágios</a>
                </li>
                <li <?php if (isset($page) && ($page == "curriculos")) { ?> class="active" <?php } ?>>
                  <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>curriculos" <?php } else { ?> href="#5" data-toggle="tab"<?php } ?> rel="Curriculos">Currículos</a>
                </li>
                <li <?php if (isset($page) && ($page == "cursos")) { ?> class="active" <?php } ?> style="background-color:#2F62CF;">
                  <a class="social" <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>cursos" <?php } else { ?> href="#6" data-toggle="tab"<?php } ?> rel="Cursos">Cursos</a>
                </li>
                <li <?php if (isset($page) && ($page == "minhaconta")) { ?> class="active" <?php } ?> style="background-color:#2FCC73;">
                  <a class="social" <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>minhaconta" <?php } else { ?> href="#7" data-toggle="tab"<?php } ?> rel="minhaconta">Minha Conta</a>
                </li>
                <li <?php if (isset($page) && ($page == "contato")) { ?> class="active" <?php } ?> style="background-color:#DD4B39;">
                  <a class="social" <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>contato" <?php } else { ?> href="#8" data-toggle="tab"<?php } ?> rel="Contato">Contato</a>
                </li>
            </ul>
        <!-- Fim do Conteúdo Header -->
        </header>
        <!-- Inicio da Linha -->
        <div class="row" >
            <!-- Inicio da Tag Main com 12 C -->
            <div role="main" class="col-md-12" >
              <!-- Inicio do Tab Content -->
                <div class="tab-content">
            <?php
            if ((isset($page)) && (file_exists("page/$page.php"))){
                ?>
                    <!-- Página dinÃ¢mica -->
                    <?php @include("page/$page.php"); ?>
                <?php
            }
            else if ((isset($page)) && (!file_exists("page/$page.php"))) {
                include("page/404.php");
            }
            else if (!isset($page)) {
            ?>
                    <!-- Homepage -->
                    <div id="1" class="tab-pane fade in active">
                        <div style="background-color: rgba(246, 246, 246, 0);margin-bottom:0px;padding-bottom:0px;">
                            <?php include("inc/sliderfoundation.php"); ?>
                            <h3 class="sans" style="font-weight: 300 !important;">Cachoeira do Sul / RS</h3>
                            <p style="margin:0 auto;width:90%;text-align:center;padding:15px;" class="sans">
                              Projeto Comunitário
                            </p>
                        </div>
                        <div class="box-content">
                            <?php include("inc/frontpage.php"); ?>
                        </div>
                    </div>
                    <!-- Sobre -->
                    <div id="2" class="tab-pane fade">
                            <?php @include("page/sobre.php"); ?>
                    </div>
                    <!-- Vagas -->
                    <div id="3" class="tab-pane fade">
                            <?php @include("page/vagas.php"); ?>
                    </div>
                    <!-- Currículos -->
                    <div id="4" class="tab-pane fade">
                            <?php @include("page/estagios.php"); ?>
                    </div>
                    <!-- Blog -->
                    <div id="5" class="tab-pane fade">
                            <?php @include("page/curriculos.php"); ?>
                    </div>
                    <!-- Cadastre-se! -->
                    <div id="6" class="tab-pane fade">
                            <?php @include("page/cursos.php"); ?>
                    </div>
                    <!-- OrÃ§amento -->
                    <div id="7" class="tab-pane fade">
                            <?php @include("page/minhaconta.php"); ?>
                    </div>
                    <!-- Contato -->
                    <div id="8" class="tab-pane fade">
                            <?php @include("page/contato.php"); ?>
                    </div>
            <?php
            }
            ?>
                <!-- Fim do Tab Content -->
                </div>

            <!-- Fim da tag Main com 12 C -->
            </div>
        <!-- Fim da Linha -->
        </div>

        <!-- Inicio do Footer -->
        <footer class="row">
           <?php
           include("inc/lista.php");
           include("inc/footer.php");
           ?>
        <!-- Fim do Footer -->
        </footer>
        <!-- Inicio do Copyright -->
        <div class="copyright row">
            Proibido intermediações de empregos com qualquer fim lucrativo
            <p>Cachoeira do Sul / RS</p>
            <p style="font-size:12px;padding:10px;" class="fr">Project designed by Scripting Studios Art</p>
        <!-- Fim do Copyright -->
        </div>
    <!-- Fim do Conainer -->
    </div>

    <!-- Inicio do Google Analytics -->
    <div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-64994314-1', 'auto');
          ga('send', 'pageview');

        </script>
    <!-- Fim do Google Analytics -->
    </div>

    <!-- Google Tag Manager -->
    <div>
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5VQ92L"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5VQ92L');</script>
    <!-- End Google Tag Manager -->
    </div>
    <?php include("inc/seo.php"); ?>

    <script src="<?php echo $caminho; ?>js/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo $caminho; ?>js/lightbox.js"></script>
</body>
</html>
