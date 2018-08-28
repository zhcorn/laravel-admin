<div class="{{$viewClass['form-group']}} row {!! !$errors->has($column) ?'': 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} text-right control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}" id="{{$id}}">

        @foreach($options as $option => $label)
            @if(!$inline)<div class="checkbox">@endif
            <label @if($inline)class="checkbox-inline"@endif>
                <input type="checkbox" name="{{$name}}[]" value="{{$option}}" class="{{$class}}" {{ in_array($option, (array)old($column, $value))?'checked':'' }} {!! $attributes !!} />&nbsp;{{$label}}&nbsp;&nbsp;
            </label>
            @if(!$inline)</div>@endif
        @endforeach

        @include('admin::form.error')

        <input type="hidden" name="{{$name}}[]">

        @include('admin::form.help-block')

    </div>
</div>
