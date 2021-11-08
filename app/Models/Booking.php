<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'table_id',
        'user_id',
        'start_time',
        'end_time',
        'start_date',
        'end_date',
        'status',
    ];
public function table(){
    return $this->belongsTo(Table::class);
 }
}
