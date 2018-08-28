<div class="card card-info card-outline">
    <div class="card-header with-border">
        <h3 class="card-title">{{ $form->title() }}</h3>
        <div class="card-tools">
            {!! $form->renderTools() !!}
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @if($form->hasRows())
        {!! $form->open() !!}
    @else
        {!! $form->open(['class' => "form-horizontal"]) !!}
    @endif

        <div class="card-body">
            @if(!$tabObj->isEmpty())
                @include('admin::form.tab', compact('tabObj'))
            @else
                <div class="fields-group">
                    @if($form->hasRows())
                        @foreach($form->getRows() as $row)
                            {!! $row->render() !!}
                        @endforeach
                    @else
                        @foreach($form->fields() as $field)
                            {!! $field->render() !!}
                        @endforeach
                    @endif
                </div>
            @endif
        </div>
        <!-- /.box-body -->
        {!! $form->renderFooter() !!}
        @foreach($form->getHiddenFields() as $field)
            {!! $field !!}
        @endforeach
        <!-- /.box-footer -->
    {!! $form->close() !!}
</div>

