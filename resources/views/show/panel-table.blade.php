<div class="card card-{{ $style }} card-outline">
    <div class="card-header with-border">
        <h3 class="card-title">{{ $title }}</h3>

        <div class="card-tools">
            {!! $tools !!}
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-horizontal">

        <div class="card-body">

            <div class="fields-group">
                <table class="table table-hover table-bordered table-striped dataTable">
                    @foreach($fields as $field)
                        {!! $field->render() !!}
                    @endforeach
                </table>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
</div>