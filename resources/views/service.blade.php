<x-main>

            <!-- Header-->
            <section class="py-5 bgimage">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder text-white">I nostri servizi</h1>
                        <p class="lead fw-normal text-white mb-0">Dai uno sguardo alle opportunita'</p>
                    </div>
                    <div class="row gx-5">
                        @foreach ($servizi as $element)
                        <div class="col-lg-6">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-3 mb-3" src="{{$element['img']}}" alt="...">
                                <a class="h3 fw-bolder text-decoration-none stretched-link text-white"
                                href="{{ route('detail', ['service' => $element['uri']]) }}">
                                {{ $element['name'] }}
                            </a>  
                            </div>
                        </div>
                            
                        @endforeach
                       
                    </div>
                </div>
            </section>

</x-main>