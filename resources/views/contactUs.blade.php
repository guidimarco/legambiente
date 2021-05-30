@extends('layouts.guest.app')

@section('content')
<div id="contact-us" class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>--> Dove ci trovi <--</h1>
        </div>
        <div class="col-12">
            <ul id="contacts">
                <li>
                    <a href="https://goo.gl/maps/Sxz9aurDSAZ3aAf36" target="_blank" class="social"><i class="fas fa-map-marker-alt"></i></a>
                    <span class="contact-info text-uppercase"><-- Sede //</span> <span class="d-none d-sm-block font-italic">&nbsp;via Lombarda 193, Capannori (Lammari)</span>
                </li>
                <li>
                    <a href="mailto:social.legambientecapannori@gmail.com" class="social"><i class="far fa-envelope"></i></a>
                    <span class="contact-info text-uppercase"><-- Mail //</span> <span class="d-none d-sm-block font-italic">&nbsp;social.legambientecapannori@gmail.com</span>
                </li>
                <li>
                    <a target="_blank" href="https://www.facebook.com/legambientecapannoriepianadilucca/" class="social"><i class="fab fa-facebook-square"></i></a>
                    <span class="contact-info text-uppercase"><-- Facebook //</span>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/legambientetoscana/" class="social"><i class="fab fa-instagram"></i></a>
                    <span class="contact-info text-uppercase"><-- Instagram //</span><span class="d-none d-sm-block font-italic">&nbsp;Legambiente Toscana</span>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/legambientetosc" class="social"><i class="fab fa-twitter"></i></a>
                    <span class="contact-info text-uppercase"><-- Twitter //</span><span class="d-none d-sm-block font-italic">&nbsp;Legambiente Toscana</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection