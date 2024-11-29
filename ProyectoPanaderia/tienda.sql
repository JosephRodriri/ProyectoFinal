-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2024 a las 13:23:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id_nosotro` int(11) NOT NULL,
  `titulo_nosotros` varchar(50) NOT NULL,
  `resumen_nosotros` varchar(550) NOT NULL,
  `img_nosotros` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id_nosotro`, `titulo_nosotros`, `resumen_nosotros`, `img_nosotros`) VALUES
(1, 'Sobre Nosotros', 'En Cake♥Shop, cada día es una oportunidad para crear algo especial. Fundada en 2012 por Gustavo Petro Urrego, nuestra panadería nació del amor por las recetas tradicionales y la pasión por los sabores auténticos. Desde que abrimos nuestras puertas, nos hemos comprometido a ofrecer productos frescos, elaborados con los mejores ingredientes y una pizca de amor.\r\n\r\nNuestra misión es brindarte una experiencia única a través de nuestro pan recién horneado, pasteles exquisitos y postres irresistibles.', 'http://localhost/ProyectoFinal/ProyectoPanaderia/images/Nosotros.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Buñuelo', 3000.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Bunuelo-M-300x200.jpg'),
(2, 'Pan de bono', 2000.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pandebono-1-300x200.jpg'),
(3, 'Chicharrón', 5000.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/chicharron-1-300x200.jpg'),
(4, 'Pan de yuca', 2500.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pandeyuquitas-1-300x200.jpg'),
(5, 'Pastel de naranja', 30000.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Pasteleria/Cake-Naranja-300x200.jpg'),
(6, 'Pastel de fresa', 35000.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Pasteleria/Cheesecake-Fresa-300x200.jpg'),
(7, 'Pie de limón', 50000.00, 'Descripción', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Pasteleria/Pie-Limon-300x200.jpg'),
(8, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(9, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(10, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(11, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(12, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(13, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(14, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(15, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(16, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(17, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(18, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(19, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(20, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(21, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(22, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(23, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(24, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(25, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(26, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(27, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(28, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(29, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg'),
(30, 'Pastel de Pollo', 5000.00, 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL,
  `desc_servicio` varchar(255) NOT NULL,
  `img_servicio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `desc_servicio`, `img_servicio`) VALUES
(1, 'Tienda', '¡Visítanos! Contamos con tiendas físicas para atenderte personalmente.', 'http://localhost/ProyectoFinal/ProyectoPanaderia/images/panaderia.PNG'),
(2, 'Domicilios', '¡Disfruta de tus antojos sin salir de casa! Contamos con un servicio a domicilio rápido y confiable.', 'http://localhost/ProyectoFinal/ProyectoPanaderia/images/camion-de-comida.PNG'),
(3, 'Postres', '¡Endulza tus momentos especiales! Hacemos postres personalizados a tu gusto, ideales para cada ocasión.', 'http://localhost/ProyectoFinal/ProyectoPanaderia/images/pastel.PNG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id_nosotro`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id_nosotro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
