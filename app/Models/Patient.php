<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'gender', 'admission_date', 'discharge_date', 'bed_id', 'status'];

    public function bed()
    {
        return $this->belongsTo(Bed::class);
    }

    public function admissions(): HasMany
    {
        return $this->hasMany(AdmittedDetail::class);
    }

    // Boot method to handle events
    protected static function boot()
    {
        parent::boot();

        // Handle patient creation
        static::created(function ($patient) {
            $bed = Bed::find($patient->bed_id);
            if ($bed) {
                $bed->update([
                    'is_occupied' => true,
                    'patient_id' => $patient->id,
                ]);
            }
        });

        // Handle patient status update
        static::updated(function ($patient) {
            if ($patient->status === 'Discharged') {
                $bed = Bed::find($patient->bed_id);
                if ($bed) {
                    $bed->update([
                        'is_occupied' => false,
                        'patient_id' => null,
                    ]);
                }
            }
        });
    }
}
