<x-layout>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 d-flex justify-content-center">
                <h2>Dettaglio <span class="text-danger text-center">{{$article->name}}</span></h2>
            </div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <div class="d-flex ">
                            <div class="swiper mySwiper mt-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/200/100" class="card-img-top img-fluid" id="app" id="home_img" alt="...">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/200/100" class="card-img-top" id="app" id="home_img" alt="...">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/200/100" class="card-img-top" id="app" id="home_img" alt="...">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/200/100" class="card-img-top" id="app" id="home_img" alt="...">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="col-12 col-md-6 margin-custom card-body d-flex align-items-center justify-content-center flex-column">
                                <h5 class="card-title">Nome:</h5><span><p>{{ $article->name }}</p></span>
                                <h5 class="card-text">Euro:</h5><span><p>{{ $article->price }}</p></span>
                                <h5>Categoria:</h5><span><p>{{ $article->category->name }}</p></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 justify-content-center">
                    <div class="col-3 d-flex justify-content-end ">
                        <a href="/" class="btn btn-dark">Torna indietro</a>
                    </div>
                    <div class="col-3">
                        @auth
                        @if(Auth::id() == $article->user_id)
                        <button type="button" class="btn btn-dark">
                            <a class="text-light recensione" href="{{ route('create_review', $article) }}">Lascia una recensione</a>
                        </button>
                        @endif
                        @endauth
                    </div> 
                    <div class="col-11 border border-dark rounded p-4  margin-description">
                        <h5>Descrizione:</h5><span><p>{{ $article->description }}</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- carosello RECENSIONI --}}
    <div class="container-fluid my-5">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <h3 class="text-start m-5">Recensioni</h3>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner text-center">
                        @if($article->reviews->isNotEmpty())
                        @foreach($article->reviews as $review)
                        <div class="carousel-item active bg-danger rounded bg-light-subtle">
                            <h5 class="p-3">Scritto da: {{$review->user->name}} </h5><br>
                            <p class="fs-5 p-3">Commento: {{$review->review}}</p>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <i class="fas fs-3 text-black fa-arrow-left" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <i class="fas fs-3 text-black fa-arrow-right" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @else
                    <p class="fs-2">Mi dispiace, non ci sono recensioni</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- fine carosello --}}
</x-layout>


