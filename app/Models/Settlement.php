<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model {
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'linked_case',
        'offered_amount',
        'marketplace ',
        'representatives',
        'status',
        'target',
        'settlement_agreement_file',
        'money_received'
    ];

    /**
     *
     * Get linked case
     */
    public function linked_case() {
        return $this->hasOne(ListedCase::class, 'id', 'linked_case');
    }

    /**
     *
     * Get linked marketplace
     */
    public function marketplace() {
        return $this->hasOne(Marketplace::class, 'id', 'marketplace');
    }

    /**
     *
     * Get linked representative
     */
    public function representative() {
        return $this->hasOne(Representative::class, 'id', 'representative');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settlements';
}
