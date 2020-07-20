<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    /**
     * @param User $user
     *
     * @return User
     */
    public function get(User $user): User
    {
        return $user;
    }
}
