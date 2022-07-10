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
                'menuItems' => [
                    ['name' => 'Dashboard', 'icon' => 'fe-home', 'url' => url('dashboard')]
                ]
            ],
            // user and security
            [
                'title' => 'Users & Security',
                'menuItems' => [
                    ['name' => 'Users', 'icon' => 'fe-users', 'url' => url('users/manager'), 'badge' => 1],
                    ['name' => 'Access control', 'icon' => 'fe-lock', 'url' => url('access_control/manager')]
                ]
            ],
            // Services
            [
                'title' => 'Services',
                'menuItems' => [
                    ['name' => 'Services', 'icon' => 'fe-briefcase', 'url' => url('services/manager')]
                ]
            ],

            // Staff
            [
                'title' => 'Staff',
                'menuItems' => [
                    ['name' => 'Staff', 'icon' => 'fe-users', 'url' => url('staff/manager')]
                ]
            ],

            // Expenses
            [
                'title' => 'Expenses',
                'menuItems' => [
                    ['name' => 'Expenses', 'icon' => 'fe-briefcase', 'url' => url('expenses/manager')]
                ]
            ],
            // Customers
            [
                'title' => 'Customers',
                'menuItems' => [
                    ['name' => 'Customers', 'icon' => 'fe-users', 'url' => url('customers/manager')]
                ]
            ],
            // Documents
            [
                'title' => 'Reports',
                'menuItems' => [
                    ['name' => 'Reports', 'icon' => 'fe-briefcase', 'url' => url('documents/manager')]
                ]
            ]
        ];
    }
}
