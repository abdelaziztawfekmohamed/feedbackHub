<?php

namespace App\Enum;

enum RolesEnum: string
{
        //
    case Admin = 'admin';
    case Commenter = 'commenter';
    case User = 'user';
    public static function labels(): array
    {
        return [
            self::Admin->value => 'Admin',
            self::Commenter->value => 'commenter',
            self::User->value => 'User',
        ];
    }
    public function label()
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Commenter => 'commenter',
            self::User => 'User',
        };
    }
}
