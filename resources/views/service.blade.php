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
                            <x-card  :element="$element"   />
                        @endforeach
                    </div>
                        
                            
                       
                </div>
            </section>

</x-main>