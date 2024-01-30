<nav class="navbar" id="navbarId">
    <div class="brand">
        <a href="/">
           {{-- <img src="{{$items->logo}}" alt="" srcset=""> --}}
        </a>
        {{-- 
        <span class="TabView">
            <iconify-icon icon="majesticons:menu" id="menu_Tab" class="menu_Tab"></iconify-icon>
        </span> 
        --}}
    </div>
    <iconify-icon icon="majesticons:menu" id="menu" class="menu"></iconify-icon>
    <li class="postule">
        <a class= "btn-post" href="/postuler-user">
            Postulez
            <iconify-icon icon="ep:message"></iconify-icon>
        </a>
    </li>
    {{-- For tablette screen --}}
    <span class="menuTab">
        
        <ul class="navbar-items">
            <li class="nav-item">
                <a class="nav-link active" id="" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" href="/nos-services">Nos services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" href="accueil">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="" href="#">Contact</a>
            </li>
            {{--
                --}}
            <li class="link-post">
                <a class= "nav-link" href="/postuler-user">
                    Postulez
                    <iconify-icon icon="ep:message"></iconify-icon>
                </a>
            </li>
                
                <span class="bar"></span>
                <span class="icons">
                    <a href="#">
                        <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                    </a>
                    <a href="#">
                        <iconify-icon icon="gg:twitter"></iconify-icon>
                    </a>
                <a href="#">
                    <iconify-icon icon="ic:baseline-local-phone"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="ep:message" width =""></iconify-icon>
                </a>
            </span>
        </ul>
    </span>
    {{-- For mobile screen --}}
    {{-- <iconify-icon icon="mdi:arrow-up" id="cancel" class="cancel"></iconify-icon>       --}}
    {{-- <iconify-icon icon="fluent-mdl2:cancel" class="close" ></iconify-icon> --}}
    <span class="sidebar">
        <h1>Menu</h1>
        <ul class="navbar-items">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            {{-- <hr class="separation"> --}}
            <li class="nav-item">
                <a class="nav-link" href="#">Nos services</a>
            </li>
            {{-- <hr class="separation"> --}}
            <li class="nav-item">
                <a class="nav-link" href="#">A propos</a>
            </li>
            {{-- <hr class="separation"> --}}
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            {{-- <hr class="separation"> --}}
            <li class="nav-item">
                <a class= "post" href="#">
                    Postulez
                    <iconify-icon icon="ep:message"></iconify-icon>
                </a>
            </li>
            <span class="bar"></span>
            {{-- <hr class="separation"> --}}
            <span class="icons">
                <a class="nav-link-icon" href="#">
                    <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                </a>
                <a class="nav-link-icon" href="#">
                    <iconify-icon icon="gg:twitter"></iconify-icon>
                </a>
                <a class="nav-link-icon" href="#">
                    <iconify-icon icon="ic:baseline-local-phone" ></iconify-icon>
                </a>
                <a class="nav-link-icon" href="#">
                    <iconify-icon icon="ep:message" ></iconify-icon>
                </a>
            </span>
        </ul>
    </span>
</nav>

    