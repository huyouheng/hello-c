<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/iziModal.min.css')}}">

    <title>{{config('app.name')}}</title>

    <style>
        html {
            font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }

        body {
            padding: 0px;
            margin: 0px;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .indigo {
            background-color: #3f51b5;
            background-image: linear-gradient(120deg, #155799, #b0c4e8) !important;
        }
        .slider .indicators .active {
            background-color: #155799 !important;
        }
        .slider .indicators {
            bottom: 60px !important;
            z-index: 10;
        }
        .card {
            color: #000;
        }
        .read-article {
            margin-right: 10px;
            bottom: 25px;
        }
        .card-footer {
            margin-left: 5px;
        }
        .iziModal-header .iziModal-header-title {
            text-align: center;
            font-size: 24px;
        }
        .iziModal-header .iziModal-header-subtitle {
            font-size: 14px;
        }
        .button-collapse .fa-navicon {
            font-size: 25px;
        }
    </style>
</head>
<body>
@include('components.menu')
<main>
    @include('components.slide')
    <div class="container main-container">
        <div class="row">
            <div class="col s12 m7 l7" id="article-panel">

                @include('components.article',['id'=>1])
                @include('components.article',['id'=>2])
                @include('components.article',['id'=>3])

            </div>
            <div class="col offset-m1 m4 offset-l1 l4 hide-on-small-only" style="background: #b0c4e8;height: 200px;">
                120
            </div>
        </div>
    </div>
    @include('components.foat')
</main>
@include('components.modal')
@include('components.footer')
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script src="{{asset('js/iziModal.min.js')}}"></script>
<script>


    $(function () {
        $('.slider').slider({
            full_width: true,
            interval: 4000, // 轮播间隔
            transition: 1000, // 效果转换时长
            height: 400, // 轮播高度
            indicators: true // 是否显示小圆点
        });
        $(".button-collapse").sideNav();

        //滚动监听
        $('.scrollspy').scrollSpy();

        // var options = [
        //     {selector: '#article-panel', offset: 50, callback: function(el) {
        //         Materialize.toast("This is our ScrollFire Demo!", 1500 );
        //     } },
        //     {selector: '#article-panel', offset: 400, callback: function(el) {
        //         Materialize.toast("400 Demo!", 1500 );
        //         Materialize.showStaggeredList($(el));
        //     } },
        // ];
        //
        // Materialize.scrollFire(options);

        $("#modal").iziModal({
            title: 'aaaaaaaaa',
            subtitle: 'abc',
            headerColor: '#88A0B9',
            background: null,
            theme: '',  // light
            icon: null,
            iconText: null,
            iconColor: '',
            rtl: false,
            top: null,
            bottom: null,
            borderBottom: true,
            padding: 0,
            radius: 3,
            zindex: 999,
            group: '',
            loop: false,
            arrowKeys: true,
            navigateCaption: true,
            navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
            history: false,
            restoreDefaultContent: false,
            autoOpen: 0, // Boolean, Number
            bodyOverflow: false,
            openFullscreen: true,
            closeOnEscape: false,
            closeButton: true,
            appendTo: 'body', // or false
            appendToOverlay: 'body', // or false
            overlay: true,
            overlayClose: true,
            overlayColor: 'rgba(0, 0, 0, 0.4)',
            timeout: false,
            timeoutProgressbar: false,
            pauseOnHover: false,
            timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
            transitionIn: 'comingIn',
            transitionOut: 'comingOut',
            transitionInOverlay: 'fadeIn',
            transitionOutOverlay: 'fadeOut',

            onOpening: function(modal){
                modal.startLoading();


                setTimeout(()=>{
                    modal.stopLoading();
                    $('.iziModal-header .iziModal-header-title').html('ssssssssss');
                    var subtitle = '作者: 小胡  时间: 2018-12-02';
                    $('.iziModal-header .iziModal-header-subtitle').html(subtitle);

                },2000)
            },
            onClosed: function (){
                $('.iziModal-header .iziModal-header-title').html('玩命加载中...');
                $('.iziModal-header .iziModal-header-subtitle').html('玩命加载中...');
            }
        });

        //返回到顶部
        $('.btn-return-top').click(function() {
            $('body, html').animate({
                scrollTop: 0
            }, 500);
        });

        $('.iziModal .iziModal-header ').addClass('indigo')

    })
</script>
</body>
</html>
