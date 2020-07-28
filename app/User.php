<?php

namespace App;

use App\Classes\DTO\UserDTO;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'updated';

    /**
     * @var string
     */
    protected $table = 'user';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     *
     * @return User
     */
    public static function create(
        string $username,
        string $email,
        string $password
    ): self
    {
        return new self([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
    }

    /**
     * @param UserDTO $userDTO
     *
     * @return User
     */
    public static function createFromDTO(UserDTO $userDTO): self
    {
        return self::create(
            $userDTO->getUsername(),
            $userDTO->getEmail(),
            $userDTO->getPassword()
        );
    }
}
