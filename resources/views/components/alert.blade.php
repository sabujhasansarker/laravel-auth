<div class="alert alert-{{ $class }}">
    <h4 class="alert-title">{{ $title === "Success Message" ? green :"red" }}</h4>
    <p>{{ $slot }}</p>
</div>