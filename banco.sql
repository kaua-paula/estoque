USE estoque;
    USE estoque;

    CREATE TABLE produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR
        descricao TEXT,
        quantidade INT NOT NULL,
        preco DECIMAL()
    )