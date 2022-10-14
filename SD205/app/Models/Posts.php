<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    function create_account($account){
        DB::table('POST')->insert([
            'pin_title' => $account->Title,
            'pin_description' => $account->Description,
            'pin_destination' => $account->Destination
        ]);
    }
}