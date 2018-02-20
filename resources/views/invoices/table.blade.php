<table class="table table-bordered text-center " id="invoices-table">
    <thead >
        <tr  >
        <th>Kode Booking</th>
        <th>Tanggal Pesan</th>
        <th>Nama Pemesan</th>
        <th>Email</th>
        <th>Tgl Bayar</th>
        <th>Type Bayar</th>
        <th>Total Bayar</th>
        <th>Status</th>
        <th>Jumlah</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
    @foreach($invoices as $invoice)
        <tr>

            <td>{!! $invoice['kode_booking'] !!}</td>
            <td>{!! Carbon\Carbon::parse($invoice['tanggal_pesan'])->format('d M Y') !!}</td>
            <td>{!! $invoice['nama_pemesan'] !!}</td>
            <td>{!! $invoice['email'] !!}</td>
            <td>{!! Carbon\Carbon::parse($invoice['tgl_bayar'])->format('d M Y') !!}</td>
            <td>{!! $invoice['type_bayar'] !!}</td>
            <td>{!! $invoice['total_bayar'] !!}</td>
            <td>{!! $invoice['status'] !!}</td>
            <td>{!! $invoice['jumlah'] !!}</td>
            <td>
                {!! Form::open(['route' => ['invoices.destroy', $invoice['id']], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('invoices.show', $invoice['id']) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('invoices.edit', $invoice['id']) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>