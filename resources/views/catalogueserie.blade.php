<x-main>
    <section class="main-container ">
        <div class="location" id="home">
            <h1 id="home">Informazioni su {{$fiction['name']}}</h1>
        </div>

        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="{{$fiction['cover']}}" class="card-img-top" alt="...">
                <div class="card-body">
                        <h1 class="card-title text-dark">{{$fiction['name']}}</h1>
                        <p class="text-dark">{{$fiction['episodi']}}</p>
                </div>
              </div>               
        </div>

    </section>
</x-main>