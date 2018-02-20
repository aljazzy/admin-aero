<?php

namespace App\Repositories;

use App\Models\Unit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UnitRepository
 * @package App\Repositories
 * @version January 13, 2018, 6:40 pm UTC
 *
 * @method Unit findWithoutFail($id, $columns = ['*'])
 * @method Unit find($id, $columns = ['*'])
 * @method Unit first($columns = ['*'])
*/
class UnitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_unit',
        'nama_unit',
        'type',
        'harga',
        'gambar',
        'capacity',
        'info',
        'alamat',
        'area',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unit::class;
    }
}
