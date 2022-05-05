<html>
    <body>
        <h1>Hello, {{ $framework }}</h1>

        @if ($framework === 'Laravel')
            Cool ! 
        @else
            Bad ! 
        @endif

        @unless (Auth::check())
            Non connecté 
        @endunless

        @isset($framework)
        @endisset
 
        @empty($framework)
        @endempty

        @auth
        @endauth
        
        @guest
        @endguest

        @production
        @endproduction

        @env('local')
        @endenv

        @for ($i = 0; $i < 10; $i++)
            {{ $i }}
        @endfor


        @foreach (['a', 'b', 'c'] as $tmp)
            <li>{{ $tmp }} => {{ $loop->iteration }}</li>
        @endforeach

        {{-- Commentaire --}}

        @include('default.error', ['errors' => ['invalide']])
    </body>
</html>