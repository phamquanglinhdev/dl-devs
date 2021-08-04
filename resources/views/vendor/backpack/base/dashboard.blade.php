@extends(backpack_view('blank'))

@php
    $user =  new \App\Models\User();
@endphp



@section('content')
    <div class="row container-fluid animated fadeIn">
        <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card text-white bg-primary mb-2">
                <div class="card-body">
                    <div class="text-value">{{$user->countUser()}}</div>
                    <div>Người dùng</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card text-white bg-error mb-2">
                <div class="card-body">
                    <div class="text-value">{{$user->countUser()}}</div>
                    <div>Khóa học</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card text-white bg-success mb-2">
                <div class="card-body">
                    <div class="text-value">{{$user->countUser()}}</div>
                    <div>Video dạy học</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="card text-white bg-warning mb-2">
                <div class="card-body">
                    <div class="text-value">{{$user->countUser()}}</div>
                    <div>Đăng ký học thành công</div>
                </div>
            </div>
        </div>
    </div>
@endsection
