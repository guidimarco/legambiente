<nav id="welcome-nav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul id="menu-wrapper">
                    <!-- Logo and menu -->
                    <li>
                        <ul id="main-menu">
                            <!-- Logo -->
                            <li>
                            <img id="brand-logo" src="img/logo.png" alt="logo legambiente">
                            </li>

                            <li>
                            <ul id="menu-items">
                                @if ($nextEvents->count() > 0)
                                <li class="btn-menu"><a href="{{ route('next') }}"><span class="btn-menu-text tooltip-ref">
                                    Next
                                    <span class="tooltip-text">Prossimi eventi</span>
                                </span></a></li>
                                @endif
                                <!-- <li class="btn-menu"><a href="{{ route('posts') }}"><span class="btn-menu-text tooltip-ref">
                                    Posts
                                    <span class="tooltip-text">Articoli</span>
                                </span></a></li> -->
                                <li class="btn-menu"><a href="{{ route('social-posts') }}"><span class="btn-menu-text tooltip-ref">
                                    Posts
                                    <span class="tooltip-text">I post dai nostri social</span>
                                </span></a></li>
                                <li class="btn-menu"><a href="{{ route('contact-us') }}"><span class="btn-menu-text tooltip-ref">
                                    Contact us
                                    <span class="tooltip-text">Contattaci!</span>
                                </span></a></li>
                            </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Social -->
                    <li>
                        <ul id="social">
                            <li><a target="_blank" href="https://www.facebook.com/legambientecapannoriepianadilucca/"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/legambiente.capannori/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
