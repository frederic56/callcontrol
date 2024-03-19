<header>
    <div class="header-container">
        <div class="logo">
            <a href="/">
              @if ($fav == null)
                  <h4>CallControl</h4>
              @else
                  @foreach ($fav as $img)
                      <img src="{{$img->logo}}" alt="" srcset="">
                  @endforeach
              @endif
            </a>
        </div>
        <nav class="h-nav">
            <ul class="h-ul">
                <li class="h-li">
                    <a class="h-link" href="/">Home</a>
                </li>
               
                <li class="h-li">
                    <a class="h-link" href="{{ route('services')}}">Service</a>
                </li>
               
                <li class="h-li">
                    <a class="h-link" href="{{ route('blog')}}">Blog</a>
                </li>
               
                <li class="h-li">
                    <a class="h-link" href="{{ route('show_offre')}}">Recrutement</a>
                </li>
            </ul>
            <div class="h-slah"></div>
            <ul class="i-ul">
                <li class="i-li">
                    <a class="i-link" href="www.facebook.com">
                        <iconify-icon icon="ri:facebook-fill" with="1.5em" height="1.5em"></iconify-icon>               
                    </a>
                </li>
                <li class="i-li">
                    <a class="i-link" href="#">
                        <iconify-icon icon="circum:instagram" with="1.5em" height="1.5em"></iconify-icon>             
                    </a>
                </li>
                <li class="i-li">
                    <a class="i-link" href="#">
                    <iconify-icon icon="ic:round-phone" with="1.5em" height="1.5em"></iconify-icon>                
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
