<div class="{{$viewClass['form-group']}} row {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} text-right control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">


        <textarea name="{{$name}}" class="form-control {{$class}}" rows="{{ $rows }}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>

        @include('admin::form.error')

        @include('admin::form.help-block')

    </div>
</div>
