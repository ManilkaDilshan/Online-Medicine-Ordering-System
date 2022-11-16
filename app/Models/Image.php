<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestQuotation;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'request_quotation_id',
    ];

    public function request_quotations() {
        return $this->belongsTo(RequestQuotation::class);
    }
}
