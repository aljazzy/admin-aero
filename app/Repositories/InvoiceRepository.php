<?php

namespace App\Repositories;

use App\Models\Invoice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version January 17, 2018, 3:59 am UTC
 *
 * @method Invoice findWithoutFail($id, $columns = ['*'])
 * @method Invoice find($id, $columns = ['*'])
 * @method Invoice first($columns = ['*'])
*/
class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_booking',
        'tanggal_pesan',
        'nama_pemesan',
        'email',
        'tgl_bayar',
        'type_bayar',
        'total_bayar',
        'status',
        'keterangan',
        'jumlah',
        'satuan',
        'diskon'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Invoice::class;
    }
}
