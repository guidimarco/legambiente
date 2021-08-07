@extends('layouts.guest.appWelcome')

@section('title', 'Legambiente Capannori | Contact us')

@section('content')
<div id="contact-us-container">
    <div id="contact-us" class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>--> Dove ci trovi <--</h1>
            </div>
            <div class="col-12">
                <ul id="contacts">
                    <li>
                        <a href="https://goo.gl/maps/Sxz9aurDSAZ3aAf36" target="_blank" class="social"><i class="fas fa-map-marker-alt"></i></a>
                        <span class="contact-info text-uppercase"><-- /1 &#129442;</span> <span class="d-none d-sm-block font-italic">&nbsp; via Lombarda 193, Capannori (Lammari)</span>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/place/43%C2%B050'20.6%22N+10%C2%B036'59.3%22E" target="_blank" class="social"><i class="fas fa-map-marker-alt"></i></a>
                        <span class="contact-info text-uppercase"><-- /2 &#129442;</span> <span class="d-none d-sm-block font-italic">&nbsp; piazza Unità d'Italia, Porcari</span> &#128690;&#128268;
                    </li>
                    <li>
                        <a href="mailto:social.legambientecapannori@gmail.com" class="social"><i class="far fa-envelope"></i></a>
                        <span class="contact-info text-uppercase"><-- </span> <span class="d-none d-sm-block font-italic">&nbsp; scrivici una mail</span>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/legambientecapannoriepianadilucca/" class="social"><i class="fab fa-facebook-square"></i></a>
                        <span class="contact-info text-uppercase"><-- &#128077;</span> <span class="d-none d-sm-block font-italic">&nbsp; un like su facebook? </span>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/legambiente.capannori/" class="social"><i class="fab fa-instagram"></i></a>
                        <span class="contact-info text-uppercase"><-- &#x2764;</span><span class="d-none d-sm-block font-italic"></span> <span class="d-none d-sm-block font-italic">&nbsp; seguici su Insta! </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection