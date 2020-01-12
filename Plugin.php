<?php namespace RomainMazB\CallNow;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    
    public function registerComponents()
    {
        return [
            'RomainMazB\CallNow\Components\Button' => 'callNowButton'
        ];
    }

    /**
     * Registers the settings used by this plugin
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'romainmazb.callnow::lang.plugin.name',
                'description' => 'romainmazb.callnow::lang.callnow.settings_description',
                'icon'        => 'icon-phone',
                'class'       => 'RomainMazB\CallNow\Models\Settings',
                'keywords'    => 'call now',
                'permissions' => ['romainmazb.callnow.settings'],
            ],
        ];
    }
}
