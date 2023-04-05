<h1>Include</h1>

{{-- O @components é bem mais limpo para imprimir codigo HTML comparado ao @include --}}

{{-- @include('componests.componest', ['html' => '<h1>Components</h1>']) --}}

@component('components.components')
    <h1> Componente 1 - HTML</h1>
    <p>Um texto qualquer</p>
@endcomponent


