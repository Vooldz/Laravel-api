<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag;

class ApiFilter
{

    //  Parametars And Allowed Operators
    protected $safeParms = [];

    // Parameter in CamelCase Doesn't Equal The Column Name in The DB So We Change It
    protected $columnMap = [];

    // Operators
    protected $operatorMap = [];

    // Transform The Recuest To [column, operator, value]
    public function transform(Request $request)
    {
        $eloQuery = [];
        foreach ($this->safeParms as $parm => $operators) {
            $query = $request->query($parm);
            if (!isset($query)) {
                continue;
            }
            $column = $this->columnMap[$parm] ?? $parm;
            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator /* Array Key */]];
                }
            }
        }
        return $eloQuery;
    }
}

