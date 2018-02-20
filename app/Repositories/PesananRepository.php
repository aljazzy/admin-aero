<?php

namespace App\Repositories;

use App\Models\Pesanan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PesananRepository
 * @package App\Repositories
 * @version January 15, 2018, 8:06 am UTC
 *
 * @method Pesanan findWithoutFail($id, $columns = ['*'])
 * @method Pesanan find($id, $columns = ['*'])
 * @method Pesanan first($columns = ['*'])
*/
class PesananRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_booking',
        'lama_sewa',
        'start_date',
        'end_date',
        'id_user',
        'id_unit',
        'status',
        'bukti_bayar',
        'title',
        'nama',
        'alamat',
        'hp',
        'jml_tamu'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pesanan::class;
    }
}
