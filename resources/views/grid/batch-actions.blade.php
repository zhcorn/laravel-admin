<input type="checkbox" class="{{ $selectAllName }}" />&nbsp;

<div class="btn-group">
    <a href="#" class="btn btn-sm btn-default">  {{ trans('admin.action') }}</a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu" role="menu">
        @foreach($actions as $action)
            <a href="#" class="dropdown-item {{ $action->getElementClass(false) }}">{{ $action->getTitle() }}</a>
        @endforeach
    </div>
</div>