@component('components.alert')
    @slot('class')
        success
    @endslot
    @slot('title')
        Success Message
    @endslot
    <h1>This is a success message, just for testing purpose.</h1>
@endcomponent