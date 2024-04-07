<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Project;
use App\Models\Timezone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'company_name',
        'company_website',
        'company_email',
        'company_address',
        'telephone1',
        'employee_national_number',
        'company_currencysymbol',
        'date_format',
        'country',
        'state',
        'city',
        'timezone',
        'zip',
        'y-m-d h:i:s',
        'REMOTE_ADDR',
        'currently_allowed_employee',
        'daily_report',
        'weekly_report',
        'monthly_report',
        'is_valid',
        'status',
        'updated_at'
    ];


    public function myCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country');
        // return $this->belongsTo(Country::class, 'country', 'id');


    }

    public function myState(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state');

    }

    public function myCity(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city');

    }

    public function myTimezone(): BelongsTo
    {
        return $this->belongsTo(Timezone::class, 'timezone');

    }

    public function projects(): HasMany
    {
        return $this->belongsTo(Project::class, 'company_id');

    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'company_id');

    }
}
