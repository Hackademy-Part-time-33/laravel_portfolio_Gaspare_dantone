<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portfolio-Dettaglio</title>
        
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{route('homepage')}}">Homepage</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                           
                            <li class="nav-item"><a class="nav-link" href="{{route('aboutme')}}">Aboutme</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('service')}}">I miei servizi</a></li>
                            
                            
                           
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <section class="py-5 bgimage">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder text-white">{{$service['name']}}</h1>
                        <p class="lead fw-normal text-white mb-0">Dai uno sguardo alle opportunita'</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-3 mb-3" src="{{ $service['img'] }}" alt="...">
                                <a class="h3 fw-bolder text-decoration-none text-white stretched-link"
                                    href="{{ route('service', ['service' => $service['uri']]) }}">
                                    {{ $service['name'] }}
                                </a>
                                <p class="text-white">Tempo minimo per lavoro: {{ $service['tempo_di_realizzazione'] }}</p>
                                <p class="text-white">Prezzo senza IVA: {{ $service['costo'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2024</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>