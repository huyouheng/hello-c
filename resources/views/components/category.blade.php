<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content" style="padding: 1px 0px 0px 5px;">
                <h5 style="border-bottom: 1px solid #e0e0e0;padding-bottom: 18px;">{{$categories['title']}}</h5>
                <p>
                    @isset($categories['lists'])
                    @foreach($categories['lists'] as $cate)
                        <div class="chip category waves-effect waves-light btn btn-sm">
                            <span>{{$cate['name']}}</span> <small class="number">{{$cate['number']}}</small>
                        </div>
                    @endforeach
                    @endisset
                </p>
            </div>
        </div>
    </div>
</div>