<x-main>
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

</x-main>     