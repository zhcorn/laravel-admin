<div class="{{$viewClass['form-group']}} row {!! !$errors->has($column) ?'': 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} text-right control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @php
            $width = "auto";
            if(preg_match("/width:(?<width>.*)px/",$attributes,$attribute)){
                $width = intval($attribute["width"])+100;
                $width.="px";
            }
        @endphp
        <div class="input-group" style="width: {{$width}};">

            @if ($prepend)
                <div class="input-group-prepend">
                    <span class="input-group-text">{!! $prepend !!}</span>
                </div>
            @endif

            <input {!! $attributes !!}/>
            @if ($append)
                <div class="input-group-append">
                    <span class="input-group-text">{!! $append !!}</span>
                </div>
            @endif
                <datalist id="{{$id}}s">
                    @foreach($options as $select => $option)
                        <option value="{{$select}}" {{ $select == old($column, $value) ?'selected':'' }}>{{$option}}</option>
                    @endforeach
                </datalist>
        </div>
        @include('admin::form.error')

        @include('admin::form.help-block')

    </div>
</div>