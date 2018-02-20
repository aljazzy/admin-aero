<table class="table table-responsive text-center" id="pesanans-table">
    <thead>
        <tr>
        <th>Kode Booking</th>
        <th>Lama Sewa</th>
        <th>Start Date</th>
        <th>End Date</th>
        {{--<th>Id User</th>--}}
        {{--<th>Id Unit</th>--}}
        <th>Status</th>
        <th>Bukti Bayar</th>
        {{--<th>Title</th>--}}
        <th>Nama</th>
        {{--<th>Alamat</th>--}}
        <th>Hp</th>
        <th>Jml Tamu</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pesanans as $pesanan)

        <tr>
            <td>{!! $pesanan['kode_booking'] !!}</td>
            <td>{!! $pesanan['lama_sewa'] !!}</td>
            <td>{!! Carbon\Carbon::parse($pesanan['start_date'])->format('d M Y') !!}</td>
            <td>{!! Carbon\Carbon::parse($pesanan['end_date'])->format('d M Y') !!}</td>
            {{--<td>{!! $pesanan['id_user'] !!}</td>--}}
            {{--<td>{!! $pesanan['id_unit'] !!}</td>--}}
            <td>{!! $pesanan['status'] !!}</td>
            <td>{!! $pesanan['bukti_byr'] !!}</td>
            {{--<td>{!! $pesanan['title'] !!}</td>--}}
            <td>{!! $pesanan['nama'] !!}</td>
            {{--<td>{!! $pesanan['alamat'] !!}</td>--}}
            <td>{!! $pesanan['hp'] !!}</td>
            <td>{!! $pesanan['jml_tamu'] !!}</td>
            <td>
                {!! Form::open(['route' => ['pesanans.destroy', $pesanan['id']],'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pesanans.show', $pesanan['id']) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pesanans.edit', $pesanan['id']) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach


    </tbody>
</table>