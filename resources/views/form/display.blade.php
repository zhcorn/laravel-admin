<div class="{{$viewClass['form-group']}} row">
    <label class="{{$viewClass['label']}} text-right control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        <div class="form-control">
                {!! $value !!}&nbsp;
        </div>
        @include('admin::form.help-block')

    </div>
</div>