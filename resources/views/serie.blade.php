<x-main>
    <div class="row">
        @foreach ($fictions as $fiction)
        <div class="card" style="width: 18rem;">
            <img src="{{$fiction['cover']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{route('catalogueserie', ['id'=>$fiction['id']])}}" class="text-decoration-none text-dark">
                    <h5 class="card-title">{{$fiction['name']}}</h5>
                </a>
            </div>
          </div>               
        @endforeach
    </div>
</x-main>