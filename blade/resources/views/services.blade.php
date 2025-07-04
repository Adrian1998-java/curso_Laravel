@extends('layouts.landing')

@section('title', 'Services')

@section('content')
<main>
    <h1>Services</h1>
    <div class="cards">
        @component('components.card')
            @slot('title', 'Service1')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card2')
            @slot('title', 'Service2')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card')
            @slot('title', 'Service3')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card2')
            @slot('title', 'Service4')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card')
            @slot('title', 'Service1')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card2')
            @slot('title', 'Service2')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card')
            @slot('title', 'Service3')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card2')
            @slot('title', 'Service4')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card')
            @slot('title', 'Service1')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card2')
            @slot('title', 'Service2')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card')
            @slot('title', 'Service3')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
        @component('components.card2')
            @slot('title', 'Service4')
            @slot('content', 'Lorem ipsum dolor sit amet.')
        @endcomponent
    </div>
</main>

@endsection()