<div>
    <input type="text" placeholder="Plain Input" name="{{$name}}"
           class="lwc-input {{$error_style}}{{$warn_style}}{{$success_style}} {{$configured_style}} {{$border_style}} {{$focus_ring}} {{$shadow_style}} ">
    @if($error && $error != 'empty')<p class="lwc-input-error-message">{{$error}}</p>@endif
    @if($warn && $warn != 'empty')<p class="lwc-input-warn-message">{{$warn}}</p>@endif
    @if($success && $success != 'empty')<p class="lwc-input-success-message">{{$success}}</p>@endif
</div>
