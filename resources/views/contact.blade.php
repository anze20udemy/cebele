@extends('layout')
@section('title', 'Kje se nahajamo')
@section('content')
  
  <!-- Address start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contact-top">
            <div class="row">
              <div class="col-12 col-lg-5">
                <div class="address">
                  <h3>Kontaktne informacije</h3>
                  <div class="address-block">
                    <ul>
                      <li class="address-icon"><strong>Naslov:</strong><br>
                        Čebelarstvo Zupanek<br>
                        Trdinova 5<br>
                        1230 Domžale</li>
                      <li class="phone-icon"><strong>Telefon:</strong><br>
                        031 375 666</li>
                      <li class="email-icon"><strong>E-mail naslov:</strong><br>
                        <a href="mailto:zupanek@zupanek.si" title="">zupanek@zupanek.si</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-7">
                <div class="contact-form">
                  <h3 class="heading3-border text-uppercase">Vaše vprašanje</h3>
                  <form action="#">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                          <input type="text" class="form-control" placeholder="Ime in priimek">
                        </div>
                        {{--<div class="col-12 col-md-6 col-lg-6">
                          <input type="text" class="form-control" placeholder="Company">
                        </div>--}}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                          <input type="email" class="form-control" placeholder="E-mail naslov">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                          <input type="text" class="form-control" placeholder="Telefon (neobvezno)">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Sporočilo"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn bee-button">Oddaj</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Address End --> 
      
      <!-- Map Start -->
      <div class="row">
        <div class="col-12">
          <div class="map">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.074842152707!2d14.599435015855482!3d46.14925577911491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47653437e57e5ab5%3A0x4f102170646bbd6!2s%C4%8Cebelarstvo+Zupanek!5e0!3m2!1ssl!2ssi!4v1483353136792"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- Map End --> 
    </div>
  </div>

@endsection