CREATE TABLE IF NOT EXISTS news(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    published_at DATETIME NOT NULL,
    created_at TIMESTAMP default CURRENT_TIMESTAMP
);