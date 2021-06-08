@extends('khach.Master')

@section('main')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $baiviet->tieu_de }}</h2>
                    <p style="text-align: center">
                        {!! $baiviet->noi_dung !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection