<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Classes\DTO\UserDTO;
use App\Classes\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        $userDTO = UserDTO::createFromRequest($request);

        $user = User::createFromDTO($userDTO);
        $user->save();

        return new JsonResponse($user);
    }
}
