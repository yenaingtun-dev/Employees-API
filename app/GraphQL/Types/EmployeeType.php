<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class EmployeeType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Employee',
        'description' => '',
        'model' => Employee::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The auto incremented ID of a employee'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a employee'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of a employee'
            ],
        ];
    }
}
