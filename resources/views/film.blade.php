<x-main>
    <div class="row">
        @foreach ($films as $film)
        <div class="card" style="width: 18rem;">
            <img src="{{$film['cover']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('cataloguefilm', ['id'=>$film['id']])}}" class="text-decoration-none text-dark">
                    <h5 class="card-title">{{$film['name']}}</h5>
                </a>
            </div>
          </div>               
        @endforeach
    </div>
</x-main>