<?php

class Admin {
    private int $id;
    private string $token;
    private string $password;
    private string $role;
    private string $createdAt;

    public function __construct(int $id, string $token, string $password, string $role, string $createdAt) {
        $this->id = $id;
        $this->token = $token;
        $this->password = $password;
        $this->role = $role;
        $this->createdAt = $createdAt;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getToken(): string {
        return $this->token;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function verifyToken(string $token): bool {
        return hash_equals($this->token, $token);
    }

    public function verifyPassword(string $password): bool {
        return password_verify($password, $this->password);
    }
}