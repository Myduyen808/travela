<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;

    protected $table = 'tbl_tours';

    public function getHomeTours(){
        $getTours = DB::table($this->table)->get();

        return $getTours;
    }
}
