<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{

    //  Parameters And Allowed Operators
    protected $safeParms = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['gt', 'eq', 'lt'],

    ];

    // postalCode != The Column Name in The DB So We Change It
    protected $columnMap = [
        'postalCode' => 'postal_code',
    ];

        // Operators
        protected $operatorMap = [
            'eq' => '=',
            'gt' => '>',
            'gte' => '>=',
            'lt' => '<',
            'lte' => '<=',
            'ne' => '!=',
        ];
}



