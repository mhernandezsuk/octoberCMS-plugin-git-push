<?php namespace Msuk\Git\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'git_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /**
     * Validation rules
     */
    public $rules = [
        'path' => 'required'
    ];
}
