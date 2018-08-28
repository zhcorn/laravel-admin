<div class="{{$viewClass['form-group']}} row {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} text-right control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        <select class="form-control {{$class}}" style="width: 100%;" name="{{$name}}[]" multiple="multiple" data-placeholder="{{ $placeholder }}" {!! $attributes !!} >

            @foreach($options as $option)
                <option value="{{$option}}" {{ in_array($option, $value) ? 'selected' : '' }}>{{$option}}</option>
            @endforeach

        </select>
        @include('admin::form.error')
        <input type="hidden" name="{{$name}}[]" />

        @include('admin::form.help-block')

    </div>
</div>
