@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pesanan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pesanan, ['route' => ['pesanans.update', $pesanan->id], 'method' => 'patch']) !!}

                        @include('pesanans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection