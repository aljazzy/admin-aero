<!-- Kode Booking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_booking', 'Kode Booking:') !!}
    {!! Form::text('kode_booking', null, ['class' => 'form-control']) !!}
</div>

<!-- Lama Sewa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lama_sewa', 'Lama Sewa:') !!}
    {!! Form::text('lama_sewa', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::text('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::text('id_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_unit', 'Id Unit:') !!}
    {!! Form::text('id_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Bukti Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bukti_bayar', 'Bukti Bayar:') !!}
    {!! Form::text('bukti_bayar', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Hp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hp', 'Hp:') !!}
    {!! Form::text('hp', null, ['class' => 'form-control']) !!}
</div>

<!-- Jml Tamu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jml_tamu', 'Jml Tamu:') !!}
    {!! Form::text('jml_tamu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pesanans.index') !!}" class="btn btn-default">Cancel</a>
</div>
