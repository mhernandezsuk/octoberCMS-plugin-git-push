<?php namespace Msuk\Git;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'GIT PUSH',
                'description' => 'Push from server to master',
                'category'    => 'GIT',
                'icon'        => 'icon-file',
                'class'       => 'msuk\Git\Models\Settings',
                'order'       => 500,
                'keywords'    => 'git'
            ]
        ];
    }
}
