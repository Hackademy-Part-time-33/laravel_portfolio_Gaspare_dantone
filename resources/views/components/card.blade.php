
    <div class="col-lg-6">
        <div class="position-relative mb-5">
            <img class="img-fluid rounded-3 mb-3" src="{{$element['img']}}" alt="...">
            <a class="h3 fw-bolder text-decoration-none stretched-link text-white"
            href="{{ route('detail', ['service' => $element['uri']]) }}">
            {{ $element['name'] }}
        </a>
        </div>  
    </div>
