<?php

namespace App\Models;

class Address extends RModel
{
        protected $table = 'addresses';
    
        protected $fillable = ['public_place', 'number', 'complement', 'city', 'cep'];
}
