<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{$fav->logo}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Homepage</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js" defer></script>


</head>
<body>
    <header class="header" id="headerId">
        <div class="navbar" id="navbar">
            <div class="brand">
            <a href="#">
                <img src="{{$items->logo}}" alt="" srcset="">
            </a>    
                <a class="" href="#">CallControll</a>
            </div>
            <span class="vue"></span>
            <ul class="nav-items">
                <li class="nav-item">
                    <a class="nav-link" id="menu1" href="#">Accueil</a>
                </li>
                <li>
                    <a class="nav-link" id="menu2" href="#">Nos service</a>
                </li>
                <li>
                    <a class="nav-link" id="menu3" href="#">A propos</a>
                </li>
                <li>
                    <a class="nav-link" id="menu4" href="#">Contact</a>
                </li>
                <li>
                    <a class= "post" href="#">
                        <iconify-icon icon="ep:message" width ="18"></iconify-icon>
                        Postulez
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
        </div>
    </header>
{{-- <div class="form ml-2">
    <form action="/article" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Titre de l'article</label> <br>
        <input type="text" name="titre_article" id=""> <br>
        <label for="">Description</label> <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea> <br>
        <label for="">Image de l'Article</label> <br>
        <input type="file" name="image_article" id=""> <br>
        <button type="submit">upload</button>
    </form>
</div> --}}

    <div class="container-fluid">
        <div class="h1">
            <h1>La qualité de service est notre priorité, <br>
                SOLUTIONS FOR YOUR BUSINESS.</h1> <br> <br>
        </div>
        <div class="h4">
            <h4>Callcenter.com will help Reduce your Outsourcing budget and elevate <br> 
                your business Customer Experience so you can Grow, Launch and Scale 
                <br> new products and services Faster and Easier. Pour plus d’information </h4>
        </div>

        <div class="btn">
            <button class="btn-contact" type="button">
                Contactez-nous
                <iconify-icon icon="ep:message" width ="28"></iconify-icon>
            </button>
        </div>

    </div>

    <div class="container ">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <span>
            <hr>
        </span>
        <div class="card-section">
            <div class="card">
                @foreach ($articles as $article)
                <div class="card-body">
                    <div class="img-fluid">
                        <figure>
                            <img src="{{$article->image_article}}" alt="" sizes="" style="width:390px; height:270px;" srcset="">                  
                        </figure>
                    </div>
                    <div class="content-body">
                        <h3>{{ $article->titre_article}}</h3>
                        <p>{{$article->description}}</p>
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
    </div>
   
</body>
</html>