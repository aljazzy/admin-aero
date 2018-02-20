@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pesanan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pesanans.show_fields')
                    <a href="{!! route('pesanans.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
