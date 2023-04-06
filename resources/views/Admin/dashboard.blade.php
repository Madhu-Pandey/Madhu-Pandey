@include('Admin.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Default</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card-body">
        <div class="widget-content">
            <div class="widget-round secondary">
                <div class="bg-round">
                    <svg class="svg-fill">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#cart') }}"> </use>
                    </svg>
                    <svg class="half-circle svg-fill">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                    </svg>
                </div>
            </div>
            <div>
                <h4>10,000</h4><span class="f-light">Purchase</span>
            </div>
        </div>
        <div class="font-secondary f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+50%</span></div>
    </div>
</div>
@endsection

