<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = "playlist";
    protected $primarykey = "id";
    protected $fillable = [
        'playlist_name',
        'user_id'];
}
