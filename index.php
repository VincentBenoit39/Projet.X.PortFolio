<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Vincent BENOIT · Développeur Web & Mobile · 22 Ans · Lons-le-saunier Jura 39">
  <link href="./assets/img/LogoVB.png" rel="icon">
  <meta name="google-site-verification" content="_G7JbvVepU0r8qh4c516W_g7KpfEpFhm6CCdPK_SJtM" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Vincent BENOIT</title>
</head>

<body>
  <!-- navbar -->
  <header>
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container">
        <a href="#" class="navbar-brand">
          <h1 class="text-white fw-bold fs-3">Vincent BENOIT</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <i class="fa-solid fa-ellipsis text-white"></i>
        </button>
        <div class="collapse navbar-collapse order-md-1 justify-content-end" id=" navbarSupportedContent">
          <ul class="navbar-nav my-5 my-md-0">
            <li class="nav-item text-md-star text-center">
              <a class="nav-link fs-5 text-white hov" href="#">Accueil</a>
            </li>
            <li class="nav-item text-md-star text-center">
              <a class="nav-link fs-5 text-white hov" href="#apropos">A Propos</a>
            </li>
            <li class="nav-item text-md-star text-center">
              <a class="nav-link fs-5 text-white hov" href="#competences">Compétence</a>
            </li>
            <li class="nav-item text-md-star text-center">
              <a class="nav-link fs-5 text-white hov" href="#portfolio">PortFolio</a>
            </li>
            <li class="nav-item text-md-star text-center">
              <a class="nav-link fs-5 text-white hov" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="pad container vh-100">
      <div class="align-items-center">
        <h1 class="fw-bold">Vincent BENOIT</h1>
        <h2 class="devh2">Développeur Web</h2>
        <h3 class="color passion">Passionné</h3>
      </div>
    </section>
  </header>
  <section id="apropos" class="bg-dark vh-75 py-5">
    <div class="container">
      <div class="row">
        <h2 class="section-heading text-white my-5">A Propos de moi</h2>
        <div class="col-12 col-lg-6 ">
          <img src="./assets/img/moi.png" class="w-100 h-100" alt="image de Vincent BENOIT">
        </div>
        <div class="col-12 col-lg-6">
          <p class="text-faded mb-4 text-white textap pt-5">Je me présente. J'ai 22 ans et je suis actuellement en formation Développeur web & Web Mobile à Lons Le Saunier. Je vous présente mon portfolio qui retrace mon parcour de formation avec plus de précisions.<br><br>Au cours de cette formation j'ai su apprendre de nombreux langages ainsi que la Cohésion d'équipe et plus encore <br> <br>C'est pourquoi je vous invite à consulter mes compétences acquises durant cette formation.</p>
          <div class="social-links p-5 fs-2 d-flex align-items-center justify-content-center">
            <a href="https://twitter.com/BenoitVincent39" target="_blank" class="twitter colorbis px-2"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/vincent_benoit_39/" target="_blank" class="instagram colorbis px-2"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://github.com/VincentBenoit39" target="_blank" class="github colorbis px-2"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/vincent-benoit-/" target="_blank" class="linkedin colorbis px-2"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://discord.gg/KRAzzC2s" target="_blank" class="discord colorbis px-2"><i class="fa-brands fa-discord"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="competences" class="py-5 bg-light bg-dark">
    <div class="container">
      <h2 class="mb-0 fs-1">Mes compétences</h2>
      <h3 class="fw-light fs-6">Développement web / Designe</h3>
      <!-- Developpement -->
      <div class="row gy-4 mt-4">
        <div class="col-12 col-lg-6">
          <!-- Progress bar -->
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fab fa-html5 fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">HTML5</p>
                </div>
              </div>
              <div class="col">
                <div class="progress color" data-bs-toggle="tooltip" title="90%">
                  <div class="progress-bar colorprogress" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fab fa-css3-alt fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">CSS3</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="90%">
                  <div class="progress-bar colorprogress" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fab fa-js fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">JS</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="40%">
                  <div class="progress-bar colorprogress" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 p-3 bg-dark ">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fab fa-php fa-2x me-2 color php"></i>
                  <p class="fw-bold m-0 text-white ">PHP</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="5%">
                  <div class="progress-bar colorprogress" style="width: 5%" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 align-items-center">
          <img src="./assets/img/designe.png" alt="image de mes compétences web" width="100%">
        </div>
      </div>
      <!-- Design -->
      <div class="row gy-4 mt-4">
        <div class="col-12 col-lg-4 align-items-center">
          <img src="./assets/img/skills.png" alt="image de mes compétences designs" width="100%">
        </div>
        <div class="col-12 order-first offset-md-1 col-md-7 order-md-last">
          <!-- Progress bar -->
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fab fa-figma fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">Figma</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="75%">
                  <div class="progress-bar colorprogress" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fas fa-palette fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">Design UI</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="40%">
                  <div class="progress-bar colorprogress" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fas fa-vial fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">Design UX</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="40%">
                  <div class="progress-bar colorprogress" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 p-3 bg-dark">
            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                <div class="d-flex align-items-center">
                  <i class="fas fa-video fa-2x me-3 color"></i>
                  <p class="fw-bold m-0 text-white">Vidéo</p>
                </div>
              </div>
              <div class="col">
                <div class="progress" data-bs-toggle="tooltip" title="50%">
                  <div class="progress-bar colorprogress" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="portfolio bg-dark">
    <div class="container py-5" data-aos="fade-up">
      <div class="section-title">
        <h2>Portfolio</h2>
        <p class="text-white my-3">Bienvenue dans l'endroit ou se cache mes creations faite durent la formation developpeur Web & Web Mobile. <br> Bonne visite </p>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="creatives">
              <div class="carousel-caption d-none d-md-block">
                <h5>Creatives</h5>
                <p>Un projet réaliser en binomes qui consitais a reproduire une maquette...</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="capgemen">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-light">Capgement</h5>
                <p>Un projet de reproduction d'une maquete avec Bootstrap...</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="popcode">
              <div class="carousel-caption d-none d-md-block">
                <a class="colorbis" href="https://vincent-benoit39.fr/PopCode/">PopCode</a>
                <p>Un projet d'un jeu de recherche de language de développement</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <section id="contact" class="contact bg-dark text-white">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2 class="py-5">Contact</h2>
      </div>
      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <h4>Adresse</h4>
              <p>2 Rte de Montaigu, 39000 Lons-le-Saunier, France</p>
            </div>
            <div class="email">
              <h4>Email</h4>
              <p>vincent-benoit@outlook.fr</p>
            </div>
            <div class="phone">
              <h4>Télephone</h4>
              <p>06.74.70.84.44</p>
            </div>
            <iframe src="https://www.arcgis.com/apps/instant/basic/index.html?appid=aea46d2603a64dd9969d96896616f5fb" frameborder="0" style="width:100%; height:350px; border:0;" allowfullscreen>Les iFrames ne sont pas pris en charge sur cette page.</iframe>
          </div>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-center justify-content-center">
          <form method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Votre Prenom-Nom</label>
                <input type="text" name="name" class="form-control bg-light" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Votre Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group my-3">
              <label for="name">Votre demande</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control p-2" name="message" rows="10" required></textarea>
              <?php
              if (isset($_POST['message'])) {
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $entete .= 'From: contact@vincentb.fr' . "\r\n";
                $entete .= 'Reply-to: ' . $_POST['email'];

                $message = '<h1>Message envoyé depuis la page Contact</h1>
                    <p><b>Prenom -Nom : </b>' . $_POST['name'] . '<br>
                    <p><b>Email : </b>' . $_POST['email'] . '<br>
                    <p><b>Sujet : </b>' . $_POST['subject'] . '<br>
                    <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

                $retour = mail('twentytwoosw@gmail.com', 'Envoi depuis page Contact', $message, $entete);
                if ($retour)
                  echo '<p class="success">Votre message a bien été envoyé.</p>';
              }
              ?>
            </div>
            <div id="send" type="submit" value="Envoyer !" name="mailform" class="text-center"><button type="submit" name="mailform" href="./button">Envoyer</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-dark">
    <div class="container fs-md-2">
      <div class="d-flex align-items-center justify-content-between">
        <div class="copyright text-white fs-md-6 ">
          &copy; Copyright <strong><span>TwentytwooCrop</span></strong>. tous droits réservés
        </div>
        <div class="credits text-white fs-md-6">
          Designed by Vincent BENOIT
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="./assets/js/app.js"></script>
</body>

</html>