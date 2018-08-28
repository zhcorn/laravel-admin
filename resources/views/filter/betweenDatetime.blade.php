<div class="form-group row">
    <label class="col-sm-2 text-right control-label">{{$label}}</label>
    <div class="col-sm-8" style="width: 390px">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>
            <input type="text" class="form-control" id="{{$id['start']}}" placeholder="{{$label}}" name="{{$name['start']}}" value="{{ request($name['start'], array_get($value, 'start')) }}">
            <div class="input-group-append">
                <span class="input-group-text" style="border-left: 0; border-right: 0;">-</span>
            </div>
            <input type="text" class="form-control" id="{{$id['end']}}" placeholder="{{$label}}" name="{{$name['end']}}" value="{{ request($name['end'], array_get($value, 'end')) }}">
        </div>
    </div>
</div>