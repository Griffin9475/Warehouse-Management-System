<?php
declare(strict_types=1);
namespace App\Models;
use App\Models\Traits\SaveToUpper;
use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Service extends Model implements Auditable
{
    use HasFactory;
     use UuidTrait;
      use SaveToUpper;
      use \OwenIt\Auditing\Auditable;
    /**
        * The attributes that are mass assignable.
        *
        * @var array<int, string>
        */
        protected $fillable = [
            'arm_of_service',
            'created_by',
            'updated_by',
        ];

        /**
        * The attributes that should be cast.
        *
        * @var array<string, string>
        */
        protected $casts = [

        ];
}
