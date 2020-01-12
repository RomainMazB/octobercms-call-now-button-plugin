<?php namespace RomainMazB\CallNow\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var string $settingsCode Unique code to namespace settings under
     */
    public $settingsCode = 'romainmazb_callnow_settings';

    /**
     * @var string $settingsFields Reference to field configuration
     */
    public $settingsFields = 'fields.yaml';

    public $rules = [
        'phone_number'   => 'required'
    ];
}
