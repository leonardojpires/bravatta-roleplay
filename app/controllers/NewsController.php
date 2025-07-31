<?php

class NewsController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function createNew() {
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $image = $_FILES['image_path'] ?? null;

        /* BASIC VALIDATION */
        if (!$title || !$description || !$image) {
            echo "Todos os campos devem estar preenchidos corretamente.";
            return;
        }

        /* UPLOAD ERROR HANDLING */
        if ($image['error'] !== UPLOAD_ERR_OK) {
            echo "Erro ao fazer upload da imagem.";
            return;
        }

        $targetDir = __DIR__ . '/../../public/uploads/';
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $imageName = uniqid() . '-' . basename($image['name']);
        $targetFile = $targetDir . $imageName;
        
        if (!move_uploaded_file($image['tmp_name'], $targetFile)) {
            echo "Erro ao guardar imagem";
            return;
        }
        
        $imagePath = '/uploads/' . $imageName;
        $published_at = date('Y-m-d');

        $sql = "INSERT INTO news (title, description, image_path, published_at) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $description, $imagePath, $published_at]);

        header('Location: /noticias');
        exit;
     }
}