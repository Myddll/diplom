<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'programs';

    protected $fillable = [
        'title',
        'date',
    ];

    public function getDateAttribute($date)
    {
        return $date ? Carbon::parse($date)->format('d.m.Y') : null;
    }

    public function setDateAttribute($date)
    {
        $this->attributes['date'] = Carbon::parse($date)->format('Y-m-d');
    }
}
