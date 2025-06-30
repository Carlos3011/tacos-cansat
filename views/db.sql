CREATE TABLE tacos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(5,2) NOT NULL,
    disponibilidad BOOLEAN DEFAULT 1,
    imagen VARCHAR(255)
);