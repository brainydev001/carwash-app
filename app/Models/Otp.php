<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get OTP's user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get OTP's user who sent the OTP
     */
    public function sentBy()
    {
        return $this->belongsTo(User::class, 'sent_by');
    }

    /**
     * OTP approval
     */
    public function approval()
    {
        return $this->hasOne(OtpApproval::class);
    }
}
