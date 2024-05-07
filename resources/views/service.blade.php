<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HomePage</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="{{route('homepage')}}">HomePage</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('aboutme')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Servizi</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="header text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">I nostri servizi</h1>
                <div class="row ">
                    <div class="col-12 col-md-6">
                        <div>
                            @foreach ($servizi as $element )
                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-body bgcard">
                                  
                                
                                  <a href="{{route('detail',['service'=> $element['uri']])}}" class="card-link">{{$element['name']}}</a>
                                 
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                
            </div>
        </header>
        <!-- About section-->
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>