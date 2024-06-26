<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory;

    use SoftDeletes;

    // possiamo specificare quali sono i campi del model che permettiamo vengano riempiti in automatico dai form
    protected $fillable = [ 'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];
}
