<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order extends Model
{
    use HasUuids;
    protected $fillable = ['grand_total', 'status','user_id'];
    public $incrementing = false;
    protected $keyType = 'string';


    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

}


