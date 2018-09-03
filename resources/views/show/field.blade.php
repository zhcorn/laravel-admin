<div class="form-group row">
    <label class="col-sm-2 control-label text-right">{{ $label }}</label>
    <div class="col-sm-8">
        @if($wrapped)
        <div class="box box-solid box-default no-margin box-show">
            <!-- /.card-header -->
            <div class=box-body">
                {!! $content !!}&nbsp;
            </div><!-- /.card-body -->
        </div>
        @else
            {!! $content !!}
        @endif
    </div>
</div>