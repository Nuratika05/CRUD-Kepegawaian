<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departemen extends Model
{
    use HasFactory;
    public $table = "departemen";
    public $timestamp = "false";
    protected $primaryKey = "kode_dept";
    public $keyType = "string";


}
