<?php namespace Travis\Quotes\Models;

use Model;

/**
 * Model
 */
class Quote extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'travis_quotes_collection';

    /**
     * @var array Attach Many relation
     */
    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];
}