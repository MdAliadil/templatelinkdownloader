<?php 



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitingCard extends Model
{
    protected $fillable = [
         'user_id','slogan', 'name', 'company', 'email', 'mobile',
        'address', 'website', 'linkedin', 'twitter', 'instagram', 'facebook',
    ];
}
