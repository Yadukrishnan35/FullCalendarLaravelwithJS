<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudEvents extends Model
{
    use HasFactory;
    protected $table = 'crud_events';
    protected $fillable = [
        'event_name', 
        'event_start', 
        'event_end'
    ]; 
}
