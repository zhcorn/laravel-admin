@if(Admin::user()->visible($item['roles']))
    @if(!isset($item['children']))
        <li class="nav-item">
            @if(url()->isValidUrl($item['uri']))
                <a class="nav-link" href="{{ $item['uri'] }}" target="_blank">
            @else
                 <a class="nav-link" href="{{ admin_base_path($item['uri']) }}">
            @endif
                <i class="fa {{$item['icon']}}"></i>
                <p>{{$item['title']}}</p>
            </a>
        </li>
    @else
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa {{$item['icon']}}"></i>
                <p>
                    {{$item['title']}}
                    <i class="fa fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @foreach($item['children'] as $item)
                    @include('admin::partials.menu', $item)
                @endforeach
            </ul>
        </li>
    @endif
@endif