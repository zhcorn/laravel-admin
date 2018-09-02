<div class="{{$viewClass['form-group']}} row {!! ($errors->has($errorKey['key'].'key') || $errors->has($errorKey['value'].'value')) ? 'has-error' : ''  !!}">

    <label for="{{$id['key']}}" class="{{$viewClass['label']}} text-right control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        <div class="row">
            <div class="col-lg-8">
                <div class="input-group" style="width: 480px">
                    <input type="text" name="{{$name['key']}}" value="{{ old($column['key'], $value['key']) }}" class="form-control {{$class['key']}}" style="width: 150px" {!! $attributes !!} />
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-arrow-right"></i></span>
                    </div>
                    <input type="text" name="{{$name['value']}}" value="{{ old($column['value'], $value['value']) }}" class="form-control {{$class['value']}}" style="width: 150px" {!! $attributes !!} />
                </div>
            </div>
        </div>
        @include('admin::form.error')

        @include('admin::form.help-block')

    </div>
</div>
