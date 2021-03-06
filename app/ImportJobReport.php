<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Account $account
 * @property User $user
 */
class ImportJobReport extends Model
{
    protected $table = 'import_job_reports';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the account record associated with the gift.
     *
     * @return BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the user record associated with the gift.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the import job record associated with the gift.
     *
     * @return BelongsTo
     */
    public function importJob()
    {
        return $this->belongsTo(ImportJob::class);
    }
}
