<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{

    private $addresses;

    public function __construct()
    {
        $this->addresses = [
            0 => [
                'name' => 'John Smith',
                'phone_number' => '07795533256',
                'first_line' => '62 High Street',
                'town_city' => 'Hereford',
                'postcode' => 'HR20 9UQ'
            ],
            1 => [
                'name' => 'Bill Blay',
                'phone_number' => '07865445367',
                'first_line' => '311 London Road',
                'town_city' => 'Chelmsford',
                'postcode' => 'CM32 7IR'
            ],
            2 => [
                'name' => 'Alex Hughes',
                'phone_number' => '07546179541',
                'first_line' => '905 South Stree',
                'town_city' => 'Derby',
                'postcode' => 'DE94 4ME'
            ]
        ];
    }

    /*
    * Fetch the list of addresses
    */
    public function index()
    {
        return view('addressdisplay', compact($this->addresses));
    }

    /*
    * Remove address details based on id
    */
    public function delete($id)
    {
        unset($this->addresses[$id]);
        return redirect()->to('/')->send();
    }
}