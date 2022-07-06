<?php

namespace App\Http\Livewire\Navigation;

use Livewire\Component;

class SideNav extends Component
{
    public $sections;

    public function render()
    {
        $this->sections = $this->getSections();
        return view('livewire.navigation.side-nav');
    }

    /**
     * Menu sections array
     */
    public function getSections()
    {
        return [
            // dashboard
            [
                'title' => null,
                'menuItems' =>[
                    ['name' => 'Dashboard', 'icon' => 'fe-home', 'url' => url('dashboard')]   
                ]
            ],
            // user and security
            [
                'title' => 'Users & Security',
                'menuItems' =>[
                    ['name' => 'Users', 'icon' => 'fe-users', 'url' => url('users/manager'), 'badge' => 1],
                    ['name' => 'Access control', 'icon' => 'fe-lock', 'url' => url('access_control/manager')] 
                ]
            ],
            // Services
            [
                'title' => 'Services',
                'menuItems' =>[
                    ['name' => 'Services', 'icon' => 'fe-briefcase', 'url' => url('services/manager')]   
                ]
            ]
        ];
    }
}
