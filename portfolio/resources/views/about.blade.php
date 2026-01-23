@extends('master')
@section('title', 'DreamCurson - À propos')
@section('content')
<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>À propos</h1>
            <p class="mb-0">
              Développeuse web et designeuse UI/UX freelance.
            </p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Accueil</a></li>
          <li class="current">À propos</li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <!-- Image optionnelle -->
        </div>

        <div class="col-lg-8 content">
          <h2>Designeuse UI/UX &amp; Développeuse Web Freelance</h2>

          <p class="fst-italic py-3">
            Créative, rigoureuse et passionnée par le web, je combine design et développement pour offrir des solutions efficaces et esthétiques.
          </p>

          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Anniversaire :</strong> <span>27 janvier 2006</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Âge :</strong> <span>19 ans</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Téléphone :</strong> <span>438 497 7853</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ville :</strong> <span>Terrebonne, Québec</span></li>
              </ul>
            </div>

            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Diplôme :</strong> <span>DEP en soutien informatique</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Certificat :</strong> <span>Infographie 2D</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Études :</strong> <span>Attestation collégiale en cours</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span>dreamcurson@outlook.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /About Section -->

  <!-- Skills Section -->
  <section id="skills" class="skills section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Compétences</h2>
      <div><span>Mes</span> <span class="description-title">compétences</span></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row skills-content skills-animation">

        <div class="col-lg-6">
          <div class="progress">
            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>CSS</span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>JavaScript</span> <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="progress">
            <span class="skill"><span>PHP</span> <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>WordPress</span> <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>Adobe Creative Cloud</span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /Skills Section -->

  <!-- Interests Section -->
  <section id="interests" class="interests section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Intérêts</h2>
      <div><span>Je suis</span> <span class="description-title">intéressée par</span></div>
    </div>

    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-3 col-md-4">
          <div class="features-item">
            <i class="bi bi-eye"></i>
            <h3>Design UI/UX</h3>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
            <div class="features-item">
                <i class="bi bi-filetype-php"></i>
                <h3>PHP / MVC</h3>
            </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="features-item">
            <i class="bi bi-wordpress"></i>
            <h3>WordPress</h3>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="features-item">
            <i class="bi bi-universal-access"></i>
            <h3>Accessibilité web</h3>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
            <div class="features-item">
            <i class="bi bi-braces"></i>
            <h3>JavaScript</h3>
            </div>
        </div>

        <div class="col-lg-3 col-md-4">
            <div class="features-item">
            <i class="bi bi-hdd-network"></i>
            <h3>Node.js</h3>
            </div>
        </div>

        <div class="col-lg-3 col-md-4">
            <div class="features-item">
            <i class="bi bi-diagram-3"></i>
            <h3>APIs & Backend</h3>
            </div>
        </div>

        <div class="col-lg-3 col-md-4">
            <div class="features-item">
            <i class="bi bi-window"></i>
            <h3>Applications Web</h3>
            </div>
        </div>

      </div>
    </div>

  </section>
  <!-- /Interests Section -->

</main>
@endsection
