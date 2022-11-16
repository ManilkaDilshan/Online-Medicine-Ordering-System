<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestQuotation;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable=[
        'drug_name',
        'price',
        'quantity',
        'request_quotation_id',
    ];


    public function request_quotations() {
        return $this->belongsTo(RequestQuotation::class);
    }
}
