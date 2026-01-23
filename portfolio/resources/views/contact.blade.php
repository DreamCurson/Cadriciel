@extends('master')
@section('title', 'DreamCurson - Contact')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p class="mb-0">Envoyez moi un message</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @isset($data)
            <p><strong>Nom:</strong> {{ $data?->name }}</p>
            <p><strong>Email:</strong> {{ $data?->email }}</p>
            <p><strong>Sujet:</strong> {{ $data?->subject }}</p>
            <p><strong>Message:</strong> {{ $data?->message }}</p>
            <a href="/contact">Retour</a>
        @else
          <form method="post" action="/contact" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Votre Nom" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet du message" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <button type="submit">Envoyer</button>
              </div>

            </div>
          </form><!-- End Contact Form -->
        @endisset
      </div>

    </section><!-- /Contact Section -->

  </main>
@endsection