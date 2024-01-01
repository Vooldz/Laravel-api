<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{

    //  Parameters And Allowed Operators
    protected $safeParms = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'paidDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],

    ];

    // postalCode != The Column Name in The DB So We Change It
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
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



