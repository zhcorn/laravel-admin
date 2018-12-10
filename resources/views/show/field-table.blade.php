<tr>
    <th style="width:20%;text-align: right">{{ $label }}</th>
    <td>
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
    </td>
</tr>