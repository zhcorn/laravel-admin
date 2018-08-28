<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="fa fa-{{ $icon }}"></i>
        </span>
    </div>
    <input type="{{ $type }}" class="form-control {{ $id }}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{ request($name, $value) }}">
</div>