
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $unit['id'] }}</p>
</div>

<!-- Id Unit Field -->
<div class="form-group">
    {!! Form::label('id_unit', 'Id Unit:') !!}
    <p>{!! $unit['id_unit'] !!}</p>
</div>

<!-- Nama Unit Field -->
<div class="form-group">
    {!! Form::label('nama_unit', 'Nama Unit:') !!}
    <p>{{ $unit['nama_unit'] }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $unit['type'] }}</p>
</div>

<!-- Gambar Field -->
<div class="form-group">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p><img src="https://depeloper.com/api/public/uploads/{{ $unit['gambar'] }}" alt=""></p>
</div>

<!-- Capacity Field -->
<div class="form-group">
    {!! Form::label('capacity', 'Capacity:') !!}
    <p>{{ $unit['capacity'] }}</p>
</div>

<!-- Info Field -->
<div class="form-group">
    {!! Form::label('info', 'Info:') !!}
    <p>{{ $unit['info'] }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $unit['alamat'] }}</p>
</div>

<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', 'Area:') !!}
    <p>{{ $unit['area'] }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $unit['status'] }}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{{ $unit['created_at'] }}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{{ $unit['updated_at'] }}</p>--}}
{{--</div>--}}
