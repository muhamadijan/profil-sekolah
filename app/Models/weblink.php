<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weblink extends Model
{
    protected $table = 'weblink';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
