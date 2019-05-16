<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ElementController extends Controller
{
    public static function menu() 
    {
        $var = [1,2];
        switch(3){
            case 1:
                return [];
                break;
            case 2:
                return [];
                break;
            default:
                return [
                    [
                        'link' => '/dashboard',
                        'icon' => '<i class="icon-home4"></i>',
                        'label' => 'Dashboard',
                    ],
                    [
                        'link' => '#',
                        'icon' => '<i class="icon-calculator"></i>',
                        'label' => 'Something',
                        'submenu' => [
                            [
                                'link' => '#',
                                'icon' => '<i class="icon-list"></i>',
                                'label' => 'Sub1',
                            ],
                            [
                                'link' => '/admin/transaction/history',
                                'icon' => '<i class="icon-history"></i>',
                                'label' => 'Sub2',
                            ],
                        ]
                    ]
                ];
                break;
        }
    }

    public static function breadcrumb()
    {
        return [
            ['title' => 'Registrar', 'link' => '/#'],
        ];
    }
}
