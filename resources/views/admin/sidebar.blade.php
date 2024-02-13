<div class="admin-sidebar">
    <nav class="admin-sidebar-content">

        <div class="admin-sidebar-header">
            <a href="{{ route('homepage')}}">
                <img src="/storage/images/final_logo.png" alt="" srcset="">
                <span>CallControl</span>
            </a>
        </div>

        <ul>
            <li>
                <a class="ad-sb-home" href="{{ route('admin-home')}}">
                    <iconify-icon icon="iconamoon:home-light" with="1.5em" height="1.5em"></iconify-icon>
                    Home
                </a>
            </li>
            <li>
                <a class="ad-sb-user" href="#"> 
                    <iconify-icon icon="ph:user-light" with="1.5em" height="1.5em"></iconify-icon>                
                    Users
                    <iconify-icon icon="ic:baseline-expand-more" with="1.5em" height="1.5em"></iconify-icon> 
                </a>

            </li>
            <ul>
                <li>
                    <a class="ad-sb-article" href="{{ route('user-comments')}}">Commentaire</a>
                </li>
            </ul>
            <li>
                <a class="ad-sb-article" href="#">
                    <iconify-icon icon="raphael:page" with="1.5em" height="1.5em"></iconify-icon> 
                    Pages
                    <iconify-icon icon="ic:baseline-expand-more" with="1.5em" height="1.5em"></iconify-icon> 
                </a>
                
                <ul>
                    <li>
                        <a class="ad-sb-pages" href="{{ route('view-article') }}"> 
                            <iconify-icon icon="material-symbols-light:article-outline" with="1.5em" height="1.5em"></iconify-icon> 
                            Article
                        </a>
                    </li>
                    {{-- <li>
                        <a class="ad-sb-article" href="#">Add more</a>
                    </li> --}}
                    <li>
                        <a class="ad-sb-cand" href="{{ route('admin-candidate')}}">
                            <iconify-icon icon="solar:users-group-rounded-line-duotone" with="1.5em" height="1.5em"></iconify-icon>
                            Candidates
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="ad-sb-cand" href="{{ route('admin-social-net')}}">
                    <iconify-icon icon="ion:share-social-outline" with="1.5em" height="1.5em"></iconify-icon>
                    Sociale Network
                </a>
            </li>
            
            <li>
                <a class="ad-sb-cand " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <iconify-icon icon="solar:logout-2-line-duotone" with="1.5em" height="1.5em"></iconify-icon>
                        {{ Auth::user()->name }}
                    {{ __('Logout') }}
                 </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </nav>
</div>