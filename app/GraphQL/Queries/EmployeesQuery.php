<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Employee;
use Closure;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class EmployeesQuery extends Query
{
    protected $attributes = [
        'name' => 'employees',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Employee'));
    }


    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return Employee::all();
    }
}
