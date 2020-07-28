<?php
declare(strict_types=1);

namespace App\Classes\DTO;

use Symfony\Component\HttpFoundation\Request;

class UserDTO
{
    /**
     * @var string|null
     */
    private $username;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @param string $username
     * @param string $email
     * @param string|null $password
     */
    private function __construct(
        string $username,
        string $email,
        ?string $password = null
    )
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @param string $username
     * @param string $email
     * @param string|null $password
     *
     * @return UserDTO
     */
    public static function create(
        string $username,
        string $email,
        ?string $password = null
    ): self
    {
        return new self($username, $email, $password);
    }

    /**
     * @param Request $request
     *
     * @return UserDTO
     */
    public static function createFromRequest(Request $request): self
    {
        $data = json_decode($request->getContent(), true);

        return self::create(
            $data['username'],
            $data['email'],
            $data['password']
        );
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
