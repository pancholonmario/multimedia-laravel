@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($posts as $post)

            <div class="card mb-4">
                <div class="card-body">
                 <!-- Vamos a colocar nuestro contenido multimedia inicio-->
                 @if ($post->image && $post->iframe)
                    <img src="{{ $post->get_image }}" class="card-img-top">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- SE COLOCA !! !! PORQUEE USAMOS UN BLADE Y SE USARA HTML -->
                        {!! $post->iframe !!}
                    </div>
                    @elseif ($post->image)
                    <img src="{{ $post->get_image }}" class="card-img-top">
                    @elseif($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- SE COLOCA !! !! PORQUEE USAMOS UN BLADE Y SE USARA HTML -->
                        {!! $post->iframe !!}
                    </div>
                    @endif



                  <!-- Contenido Multimedia Fin -->
                    <h5 class="card-title"> {{ $post->title }}</h5>
                    <p class="card-text">
                        {{ $post->get_excerpt }}
                        <a href=" {{ route('post', $post) }} "> Leer mas </a>
                    </p>
                    <p class="text-muted mb-0">
                    
                    <em>
                            &ndash; {{ $post->user->name }}
                    
                    </em>

                    {{ $post->created_at->format('d M Y') }}

                    </p>

                    
                </div>
            </div>

            @endforeach

            {{ $posts->links() }}

        </div>

    </div>
</div>
@endsection