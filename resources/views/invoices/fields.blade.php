<!-- Kode Booking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_booking', 'Kode Booking:') !!}
    {!! Form::text('kode_booking', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Pesan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_pesan', 'Tanggal Pesan:') !!}
    {!! Form::date('tanggal_pesan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Pemesan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pemesan', 'Nama Pemesan:') !!}
    {!! Form::text('nama_pemesan', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_bayar', 'Tgl Bayar:') !!}
    {!! Form::date('tgl_bayar', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_bayar', 'Type Bayar:') !!}
    {!! Form::text('type_bayar', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_bayar', 'Total Bayar:') !!}
    {!! Form::text('total_bayar', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['paid' => 'paid', 'unpaid' => 'unpaid'], null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah', 'Jumlah:') !!}
    {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
</div>

<!-- Satuan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('satuan', 'Satuan:') !!}
    {!! Form::text('satuan', null, ['class' => 'form-control']) !!}
</div>

<!-- Diskon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diskon', 'Diskon:') !!}
    {!! Form::text('diskon', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invoices.index') !!}" class="btn btn-default">Cancel</a>
</div>
