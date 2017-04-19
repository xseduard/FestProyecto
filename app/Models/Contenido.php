<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Contenido",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="proyecto_id",
 *          description="proyecto_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="a1",
 *          description="a1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a2",
 *          description="a2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a3",
 *          description="a3",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a4",
 *          description="a4",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a5",
 *          description="a5",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a6",
 *          description="a6",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a7",
 *          description="a7",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a8",
 *          description="a8",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a9",
 *          description="a9",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a10",
 *          description="a10",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a11",
 *          description="a11",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a12",
 *          description="a12",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a13",
 *          description="a13",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a14",
 *          description="a14",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a15",
 *          description="a15",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a16",
 *          description="a16",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a17",
 *          description="a17",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a18",
 *          description="a18",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a19",
 *          description="a19",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a20",
 *          description="a20",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a21",
 *          description="a21",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a22",
 *          description="a22",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a23",
 *          description="a23",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a24",
 *          description="a24",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a25",
 *          description="a25",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a26",
 *          description="a26",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a27",
 *          description="a27",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a28",
 *          description="a28",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a29",
 *          description="a29",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="a30",
 *          description="a30",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Contenido extends Model
{
    use SoftDeletes;

    public $table = "contenidos";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'proyecto_id',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
        'a9',
        'a10',
        'a11',
        'a12',
        'a13',
        'a14',
        'a15',
        'a16',
        'a17',
        'a18',
        'a19',
        'a20',
        'a21',
        'a22',
        'a23',
        'a24',
        'a25',
        'a26',
        'a27',
        'a28',
        'a29',
        'a30'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'proyecto_id' => 'integer',
        'a1' => 'string',
        'a2' => 'string',
        'a3' => 'string',
        'a4' => 'string',
        'a5' => 'string',
        'a6' => 'string',
        'a7' => 'string',
        'a8' => 'string',
        'a9' => 'string',
        'a10' => 'string',
        'a11' => 'string',
        'a12' => 'string',
        'a13' => 'string',
        'a14' => 'string',
        'a15' => 'string',
        'a16' => 'string',
        'a17' => 'string',
        'a18' => 'string',
        'a19' => 'string',
        'a20' => 'string',
        'a21' => 'string',
        'a22' => 'string',
        'a23' => 'string',
        'a24' => 'string',
        'a25' => 'string',
        'a26' => 'string',
        'a27' => 'string',
        'a28' => 'string',
        'a29' => 'string',
        'a30' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
