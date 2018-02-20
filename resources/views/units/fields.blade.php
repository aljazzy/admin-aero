<!-- Id Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_unit', 'Id Unit:') !!}
    {!! Form::number('id_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_unit', 'Nama Unit:') !!}
    {!! Form::text('nama_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', array('Studio' => 'Studio', '2BR' => '2BR',
     '3BR' => '3BR', 'President' => 'President'), '2BR',['class' => 'form-control']); !!}

</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga Sewa:') !!}
    {!! Form::select('harga', array('350000' => 'Rp.350.000 /Malam', '300000' => 'Rp.300.000 /Malam',
     '450000' => 'Rp.450.000 /Malam'), '350000',['class' => 'form-control']); !!}
    {{--{!! Form::text('harga', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Gambar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gambar', 'Gambar:') !!}
    <input type ="file" name ="gambar" >
    {{--{!! Form::file('gambar',['class' => 'form-control','files'=>true ]) !!}--}}
</div>

<!-- Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::select('area', array('Jakarta Selatan' => 'Jakarta Selatan',
     'Jakarta Pusat' => 'Jakarta Pusat', 'Jakarta Timur' => 'Jakarta Timur',
      'Jakarta Utara' => 'Jakarta Utara','Jakarta Barat' => 'Jakarta Barat'),
       'Jakarta Selatan',['class' => 'form-control']); !!}
    {{--{!! Form::text('area', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('Available' => 'Available',
     'Booked' => 'Booked', 'Full' => 'Full'), 'Available',['class' => 'form-control']); !!}

</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::select('capacity', array('2' => '2 Dewasa',
     '3' => '3 Dewasa', '5' => '5 Dewasa', '6' => '6 Dewasa'),
      '2 Dewasa',['class' => 'form-control']); !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('units.index') !!}" class="btn btn-default">Cancel</a>
</div>
