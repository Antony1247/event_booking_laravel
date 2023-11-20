<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public $timestamps = false;
=======

    public $timestamps = false;

>>>>>>> 71eaedf09402d5118ef1398e97848de5ab8e4bd4
    protected $fillable = [
        'event_id',
        'amount',
        'price',
<<<<<<< HEAD
=======
        'user_id',
>>>>>>> 71eaedf09402d5118ef1398e97848de5ab8e4bd4
    ];

    public function event()
    {
<<<<<<< HEAD
        return $this->belongsTo(Event::class);
=======
        return $this->belongsTo(Events::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(Users::class);
>>>>>>> 71eaedf09402d5118ef1398e97848de5ab8e4bd4
    }
}
