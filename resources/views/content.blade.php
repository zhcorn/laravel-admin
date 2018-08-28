@extends('admin::index')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $header or trans('admin.title') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @if(count($breadcrumb)>0)
                            <li class="breadcrumb-item"><a href="{{ admin_url('/') }}">Home</a></li>
                            @foreach($breadcrumb as $item)
                                @if($loop->last)
                                    <li class="breadcrumb-item active">
                                        @if (array_has($item, 'icon'))
                                            <i class="fa fa-{{ $item['icon'] }}"></i>
                                        @endif
                                        {{ $item['text'] }}
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ admin_url(array_get($item, 'url')) }}">
                                            @if (array_has($item, 'icon'))
                                                <i class="fa fa-{{ $item['icon'] }}"></i>
                                            @endif
                                            {{ $item['text'] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('admin::partials.alerts')
                    @include('admin::partials.exception')
                    @include('admin::partials.toastr')
                    {!! $content !!}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection