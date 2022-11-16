<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Quotation;
use App\Models\User;

class RequestQuotation extends Model
{
    use HasFactory;
    protected $fillable=[
        'note',
        'address',
        'delivery_time',
        'user_id',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function quotations() {
        return $this->hasOne(Quotation::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
