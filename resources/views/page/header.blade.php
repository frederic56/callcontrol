<header>
    <div class="header-container">
        <div class="logo">
            <a href="#">
              @if ($fav == null)
                  <h4>CallCenter</h4>
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
                    <a class="h-link" href="#">Home</a>
                </li>
               
                <li class="h-li">
                    <a class="h-link" href="#">Service</a>
                </li>
               
                <li class="h-li">
                    <a class="h-link" href="#">Blog</a>
                </li>
               
                <li class="h-li">
                    <a class="h-link" href="#">Postule</a>
                </li>
            </ul>
            <div class="h-slah"></div>
            <ul class="i-ul">
                <li class="i-li">
                    <a class="i-link" href="#">
                        <iconify-icon icon="ph:user-light" with="1.5em" height="1.5em"></iconify-icon>               
                    </a>
                </li>
                <li class="i-li">
                    <a class="i-link" href="#">
                        <iconify-icon icon="ph:user-light" with="1.5em" height="1.5em"></iconify-icon>             
                    </a>
                </li>
                <li class="i-li">
                    <a class="i-link" href="#">
                    <iconify-icon icon="ph:user-light" with="1.5em" height="1.5em"></iconify-icon>                
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>