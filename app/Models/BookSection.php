<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSection extends Model
{
    use HasFactory;
    protected $table = 'books_section';
    protected $primaryKey = 'id';
    protected $fillable=[];
}