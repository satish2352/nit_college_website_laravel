<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesRegulatingAuthority extends Model
{
    use HasFactory;
    protected $table = 'fees';
    protected $primaryKey = 'id';
    protected $fillable=[];
}