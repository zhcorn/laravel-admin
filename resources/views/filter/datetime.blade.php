<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="fa fa-calendar"></i>
        </span>
    </div>
    <input class="form-control" id="{{$id}}" placeholder="{{$label}}" name="{{$name}}" value="{{ request($name, $value) }}">
</div>