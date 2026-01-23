@extends('master')
@section('title', 'DreamCurson - Résumé')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Résumé</h1>
              <p class="mb-0">
                Présentation de mon parcours scolaire, de mes compétences et de mon expérience
                en soutien informatique, service à la clientèle et développement web.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current">Résumé</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Profil</h3>

            <div class="resume-item pb-0">
              <h4>DreamCurson</h4>
              <p>
                <em>
                  Étudiante en développement web actuellement en AEC, titulaire d’un DEP en soutien
                  informatique et possédant une expérience en service à la clientèle.
                  Détentrice d’un certificat en infographie 2D avec Photoshop et Illustrator.
                </em>
              </p>
              <ul>
                <li>Québec, Canada</li>
                <li>Disponible pour stage ou opportunités professionnelles</li>
              </ul>
            </div><!-- End Resume Item -->

            <h3 class="resume-title">Formation</h3>
            <div class="resume-item">
              <h4>AEC – Développement Web</h4>
              <p><em>En cours - Cégep de Maisonneuve</em></p>
              <p>
                <em>
                  Formation axée sur la création de sites web, l’intégration front-end
                  et les bases du développement back-end.
                </em>
              </p>
              <p>
                Apprentissage des technologies web modernes et des bonnes pratiques
                de développement.
              </p>
            </div><!-- End Resume Item -->

            <div class="resume-item">
              <h4>DEP – Soutien Informatique</h4>
              <p><em>2023 - Programme PISC</em></p>
              <p>
                Formation technique en installation, configuration et dépannage
                de systèmes informatiques ainsi qu’en support aux utilisateurs.
              </p>
            </div><!-- End Resume Item -->

            <div class="resume-item">
              <h4>Certification en Infographie 2D</h4>
              <p><em>Juin 2023 - Programme PISC</em></p>
            </div><!-- End Resume Item -->

            <div class="resume-item">
              <h4>Diplôme d’études secondaires</h4>
              <p><em>Juin 2023 - Programme PISC</em></p>
            </div><!-- End Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Compétences et expérience</h3>

            <div class="resume-item">
              <h4>Service à la clientèle</h4>
              <ul>
                <li>Accueil et assistance aux clients</li>
                <li>Gestion des demandes et résolution de problèmes</li>
                <li>Communication claire et professionnelle</li>
                <li>Travail en équipe et autonomie</li>
              </ul>
            </div><!-- End Resume Item -->

            <div class="resume-item">
              <h4>Compétences techniques</h4>
              <ul>
                <li>Soutien informatique (DEP)</li>
                <li>HTML, CSS et notions de PHP</li>
                <li>Notion WordPress et Node javascript</li>
                <li>Compétence avec la suite Adobe, Figma et la suite Microsoft 365</li>
              </ul>
            </div><!-- End Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>
@endsection
