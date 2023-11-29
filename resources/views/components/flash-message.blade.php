@if(session()->has('message'))
<div class="six columns centered">
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert">
        <p class="label">Thank You!</p>
        <p class="centered">
            {{session('message')}}
        </p>
    </div>
</div>
@endif
