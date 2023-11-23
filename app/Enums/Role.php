<?php

namespace App\Enums;

enum Role: int
{
    case USER = 1;
    case ADMIN = 2;

    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::USER => 'User',
            self::ADMIN => 'Admin',
        };
    }

    /**
     * @return array|array[]
     */
    public static function options(): array
    {
        return array_map(
            function (Role $role) {
                return [
                    'label' => $role->label(),
                    'value' => $role->value
                ];
            },
            Role::cases()
        );
    }
}
