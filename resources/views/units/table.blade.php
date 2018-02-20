<table class="table table-responsive" id="units-table">
    <thead>
        <tr>
        <th>Id Unit</th>
        <th>Nama Unit</th>
        <th>Type</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Capacity</th>
        <th>Info</th>
        <th>Alamat</th>
        <th>Area</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach( $units as $unit)
        <tr>
            <td>{!! $unit['id_unit'] !!}</td>
            <td>{{ $unit['nama_unit'] }}</td>
            <td>{{ $unit['type'] }}</td>
            <td><img src="https://depeloper.com/api/public/uploads/{{ $unit['gambar'] }}" alt=""  width="80px" height="60px"></td>
            <td>{{ $unit['harga'] }}</td>
            <td>{{ $unit['capacity'] }}</td>
            <td>{{ $unit['info'] }}</td>
            <td>{{ $unit['alamat'] }}</td>
            <td>{{ $unit['area'] }}</td>
            <td>{{ $unit['status'] }}</td>
            <td>
                {!! Form::open(['route' => ['units.destroy', $unit['id'] ], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('units.show', $unit['id']) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{ route('units.destroy', $unit['id']) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    {{--@foreach($units as $unit)--}}
        {{--<tr>--}}
            {{--<td>{!! $unit->id_unit !!}</td>--}}
            {{--<td>{!! $unit->nama_unit !!}</td>--}}
            {{--<td>{!! $unit->type !!}</td>--}}
            {{--<td>{!! $unit->gambar !!}</td>--}}
            {{--<td>{!! $unit->capacity !!}</td>--}}
            {{--<td>{!! $unit->info !!}</td>--}}
            {{--<td>{!! $unit->alamat !!}</td>--}}
            {{--<td>{!! $unit->area !!}</td>--}}
            {{--<td>{!! $unit->status !!}</td>--}}
            {{--<td>--}}
                {{--{!! Form::open(['route' => ['units.destroy', $unit->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    {{--<a href="{!! route('units.show', [$unit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('units.edit', [$unit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--@endforeach--}}
    </tbody>
</table>