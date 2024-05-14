<x-main>

    <div class="container py-4">

        <h1>Create Post</h1>
 
        @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
         </div>
        @endif


        <form action="{{route('send')}}"method="POST">
            @csrf
         <div class="mb-3">
          <label class="form-label">Nome</label>
          <input class="form-control" type="text" name="fullname" placeholder="Nome" />
         </div>
       
       
         <div class="mb-3">
          <label class="form-label">Telefono</label>
          <input class="form-control" type="number" name="telefono" placeholder="Telefono" />
         </div>
       
         <div class="mb-3">
          <label class="form-label">Email</label>
          <input class="form-control" type="email" name="email" placeholder="Email" />
         </div>
         
         <div class="mb-3">
          <label class="form-label" >Messaggio</label>
          <textarea class="form-control" type="text" name="message" placeholder="Messaggio" style="height: 10rem;"></textarea>
         </div>
       
        
         <div class="d-grid">
          <button class="btn btn-primary btn-lg" type="submit">Invia</button>
         </div>
       
        </form>
       
       </div>








</x-main>