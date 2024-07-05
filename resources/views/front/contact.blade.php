@extends('layouts.front')
@section('content')

				
<section class="image-head-wrapper" style="background-image: url('http://127.0.0.1:8000/utilisateur/./img/banner4.jpg');">
                <div class="inner-wrapper">
                    <h1 style="color:white;">Contactez Nous</h1>
                </div>
            </section>
			<div class="clearfix"></div>
			<section class="contact-block">
                <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <h3><span>Contactez </span>Nous</h3>
                        <p class="text-left">Nous sommes a votre service pour tous vos difficultes</p>
                        <p class="text-right">akwa nord <i class="fa fa-map-marker fa-lg"></i></p>
                        <p class="text-right"><a href="tel:+1-202-555-0100"> +237-676-636-786 <i class="fa fa-phone fa-lg"></i></a></p>
                        <p class="text-right"><a href="mailto:demo@info.com"> electro@info.com <i class="fa fa-envelope"></i></a></p>
                    </div>
                    <div class="col-md-6 contact-form">
                        <h3>envoyer un <span>Message</span></h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required="">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            <textarea class="form-control" name="Message" placeholder="Message Here...." required=""></textarea>
                            <input type="submit" class="submit-btn" value="envoyer">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>


@endsection