<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Employee;
use Closure;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class UpdateEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateEmployee',
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a employee'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of a employee',
                'rules' => ['email']
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $employee = Employee::findOrFail($args['id']);
        $employee->update($args);
        return $employee->refresh();
    }
}
