<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unit
 * @package App\Models
 * @version January 13, 2018, 6:40 pm UTC
 *
 * @property string id_unit
 * @property string nama_unit
 * @property string type
 * @property string harga
 * @property string gambar
 * @property integer capacity
 * @property string info
 * @property string alamat
 * @property string area
 * @property string status
 */
class Unit extends Model
{
    use SoftDeletes;

    public $table = 'units';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_unit' => 'integer',
        'nama_unit' => 'string',
        'type' => 'string',
        'harga' => 'integer',
        'gambar' => 'string',
        'capacity' => 'integer',
        'info' => 'string',
        'alamat' => 'string',
        'area' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_unit' => 'required',
        'nama_unit' => 'required'
    ];

    
}
