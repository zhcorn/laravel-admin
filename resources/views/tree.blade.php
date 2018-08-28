<div class="card">

    <div class="card-header">

        <div class="btn-group">
            <a href="#" class="btn btn-primary btn-sm {{ $id }}-tree-tools" data-action="expand">
                <i class="fa fa-plus-square-o"></i>&nbsp;{{ trans('admin.expand') }}
            </a>
            <a href="#" class="btn btn-primary btn-sm {{ $id }}-tree-tools" data-action="collapse">
                <i class="fa fa-minus-square-o"></i>&nbsp;{{ trans('admin.collapse') }}
            </a>
        </div>

        @if($useSave)
        <div class="btn-group">
            <a href="#" class="btn btn-info btn-sm  {{ $id }}-save"><i class="fa fa-save"></i>&nbsp;{{ trans('admin.save') }}</a>
        </div>
        @endif

        @if($useRefresh)
        <div class="btn-group">
            <a href="#" class="btn btn-warning btn-sm {{ $id }}-refresh"><i class="fa fa-refresh"></i>&nbsp;{{ trans('admin.refresh') }}</a>
        </div>
        @endif

        <div class="btn-group">
            {!! $tools !!}
        </div>

        @if($useCreate)
        <div class="btn-group pull-right">
            <a href="#" class="btn btn-success btn-sm" href="{{ $path }}/create"><i class="fa fa-save"></i>&nbsp;{{ trans('admin.new') }}</a>
        </div>
        @endif

    </div>
    <!-- /.box-header -->
    <div class="card-body table-responsive p-0">
        <div class="dd" id="{{ $id }}">
            <ol class="dd-list">
                @each($branchView, $items, 'branch')
            </ol>
        </div>
    </div>
    <!-- /.box-body -->
</div>
