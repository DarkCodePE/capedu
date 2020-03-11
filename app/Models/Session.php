<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class Session extends Model {

    protected $table = 'sessions';

    protected $fillable = ['id','name','description','url_video','lesson_id'];
 
    static public function get_sessions(){
        return DB::table('sessions')
        ->get();
    }
    static public function get_sessions_by_lesson($lesson_id){
        return DB::table('sessions')
        ->where('lesson_id', '=', $lesson_id)
        ->get();
    }
}
