@extends('layout.index')

@section('css')
    <link rel="stylesheet" href="{{asset('css/web/home.css')}}">
@endsection

@section('js')
    <script src="{{asset('js/web/home.js')}}"></script>
@endsection

@section('title')
    AvCla! - Avisos Clasificados
@endsection

@section('header')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section id="banner" class="banner col-12">
        <aside class="banner-img"></aside>
        <div class="banner-body row">
            <header class="banner-title col-12 mb-3">
                <h2 class="mb-0">Lorem ipsum</h2>
            </header>
            <main class="col-12">
                <button class="banner-btn">
                    <i class="btn-icon fas fa-search"></i>
                    <span class="btn-text">Buscar</span>
                </button>
            </main>
        </div>
    </section>

    <section id="categories" class="categories col-12">
        <div class="row">
            <header class="col-12 my-3">
                <h2 class="h4 mb-0">Todo lo que buscas!</h2>
            </header>
            <main class="col-12 col-lg-8 m-auto">
                @component('components.categories.list')
                @endcomponent
            </main>
        </div>
    </section>

    <aside class="commertial col-12">
        <div class="row">
            <figure class="col-12">
                <img src="{{asset('')}}" alt="Nombre del Anuncio">
            </figure>
        </div>
    </aside>

    <section id="activities" class="activities col-12">
        <div class="row">
            <header class="col-12">
                <h2 class="mb-0">Recomendados!</h2>
            </header>
            <main class="col-12">
                @component('components.activities.list')
                @endcomponent
            </main>
        </div>
    </section>
@endsection

@section('footer')
    @component('components.footer.global')
    @endcomponent
@endsection