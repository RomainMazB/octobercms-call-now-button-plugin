<?php namespace RomainMazB\CallNow\Components;

use RomainMazB\CallNow\Models\Settings;

class Button extends \Cms\Classes\ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'romainmazb.callnow::lang.callnow.component_name',
            'description' => 'romainmazb.callnow::lang.callnow.component_description'
        ];
    }

    public function onRun()
    {
        $this->page['callnow_button_settings'] = $this->settings();
    }

    public function settings() {
        return [
            'activated'   => Settings::get('activated'),
            'phone_number' => Settings::get('phone_number'),
            'button_text' => Settings::get('button_text'),
            'button_bg_color' => Settings::get('button_bg_color'),
            'button_text_color' => Settings::get('button_text_color'),
            'position' => Settings::get('position')
        ];
    }
}