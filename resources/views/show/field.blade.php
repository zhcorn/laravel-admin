<div class="form-group row">
    <label class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-8">
        @if($wrapped)
        <div class="card card-solid card-default no-margin card-show">
            <!-- /.card-header -->
            <div class="card-body">
                {!! $content !!}&nbsp;
            </div><!-- /.card-body -->
        </div>
        @else
            {!! $content !!}
        @endif
    </div>
</div>