@isset($breadcrumb)
    <div class="content-header" style="height: 70px;">
        <h1>{{$breadcrumb['title']}}<small>中心</small></h1>
        <ol class="breadcrumb" style="position: relative !important; float:left !important;top: 5px !important;">
            <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> <small>主页</small></a></li>
            @isset($breadcrumb['sub_bread'])
            @foreach($breadcrumb['sub_bread'] as $item)
                @if ($loop->last)
                        <li class="active">{{$item['title']}}</li>
                    @else
                    <li>
                        <a href="{{$item['url']}}">
                            {{$item['title']}}
                        </a>
                    </li>
                @endif
            @endforeach
            @endisset
        </ol>
    </div>
@endisset