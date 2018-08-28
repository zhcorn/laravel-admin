<div {!! $attributes !!}>
    <div class="card-header with-border">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-tools pull-right">
            @foreach($tools as $tool)
                {!! $tool !!}
                @endforeach
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="card-body" style="display: block;">
        {!! $content !!}
    </div><!-- /.box-body -->
</div>