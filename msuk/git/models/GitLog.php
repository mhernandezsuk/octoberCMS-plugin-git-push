<?php namespace Msuk\Git\Models;

use Model;

/**
 * Model
 */
class GitLog extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'git_log';
}