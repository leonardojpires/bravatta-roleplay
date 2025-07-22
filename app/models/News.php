<?php

class News {
    private int $id;
    private string $title;
    private string $description;
    private string $image_path;
    private string $published_at;
    private string $created_at;

    public function __construct(int $id, string $title, string $description, string $image_path, string $published_at, string $created_at) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image_path = $image_path;
        $this->published_at = $published_at;
        $this->created_at = $created_at;
    }

    /* GETTERS */
    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getImagePath(): string {
        return $this->image_path;
    }

    public function getPublishedAt(): string {
        return $this->published_at;
    }

    public function getCreatedAt(): string {
        return $this->created_at;
    }
    
    /* SETTERS */
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setImagePath(string $image_path): void {
        $this->image_path = $image_path;
    }
}