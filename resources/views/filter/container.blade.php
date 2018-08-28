<div class="card-header with-border {{ $expand?'':'hide' }}" id="{{ $filterID }}">
    <form action="{!! $action !!}" class="form-horizontal" pjax-container method="get">
        <div class="card-body">
            <div class="fields-group">
                @foreach($filters as $filter)
                    {!! $filter->render() !!}
                @endforeach
            </div>
        </div>
        <!-- /.box-body -->

        <div class="card-footer">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="btn-group pull-left ">
                        <a href="{!! $action !!}" class="btn btn-default"><i class="fa fa-undo"></i>&nbsp;&nbsp;{{ trans('admin.reset') }}</a>
                    </div>
                    <div class="btn-group pull-left" style="margin-left: 10px;">
                        <button class="btn btn-primary submit"><i class="fa fa-search"></i>&nbsp;&nbsp;{{ trans('admin.search') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>