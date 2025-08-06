<?php

class NewsController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function createNew() {
        session_start();

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

        $_SESSION['success'] = 'Notícia publicada com sucesso!';

        header('Location: /publicar');
        exit;
    }

    function deleteNews() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['news_id'])) {
            $id = $_POST['news_id'];

            $sql = "DELETE FROM news WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            $_SESSION['message'] = 'Notícia eliminada com sucesso!';

            header('Location: /noticias');
            exit;
        } else {
            header('Location: /noticias');
            exit;
        }
    }
}