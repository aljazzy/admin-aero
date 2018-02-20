@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Unit
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <form action="{{ route('units.store') }}" files=true enctype="multipart/form-data">
                        @include('units.fields')
                    </form>
                    {!! Form::open(['route' => 'units.store','method' => 'post','enctype'=>'multipart/form-data']) !!}

                        @include('units.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection