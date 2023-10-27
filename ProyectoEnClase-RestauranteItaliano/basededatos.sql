CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `principal` int(11) NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
ALTER TABLE `menu`
ADD PRIMARY KEY (`id`);
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
INSERT INTO `menu` (
    `id`,
    `name`,
    `description`,
    `image`,
    `principal`
  )
VALUES (
    1,
    'Pizza Margherita',
    'Mozzarella, tomate y albahaca fresca.',
    'images/pizza.png',
    1
  ),
  (
    2,
    'Pasta Carbonara',
    'Spaghetti con salsa de huevo, queso parmesano y panceta.',
    'images/pasta.png',
    1
  ),
  (
    3,
    'Lasagna Clásica',
    'Capas de pasta, carne y salsa bechamel',
    'images/lasagna.png',
    1
  );
CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
INSERT INTO `chef` (`id`, `name`, `description`, `image`)
VALUES (
    1,
    'Juan Lopez',
    'Nuestro chef principal',
    'images/juan.png',
    1
  ),
  (
    2,
    'Maria Chavarria',
    'Excelente chef',
    'images/maria.png',
    1
  );
ALTER TABLE `chef`
ADD PRIMARY KEY (`id`);
ALTER TABLE `chef`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
COMMIT;