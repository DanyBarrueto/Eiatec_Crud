-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2024 a las 21:12:50
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
-- Base de datos: `eiatec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `ID` int(8) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Cedula` int(20) NOT NULL,
  `Cuenta` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Cargo` varchar(100) NOT NULL,
  `Codigo` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Oficina` varchar(100) NOT NULL,
  `Tipo de computador` varchar(150) NOT NULL,
  `Marca` varchar(150) NOT NULL,
  `Modelo` varchar(150) NOT NULL,
  `Numero de serie` varchar(150) NOT NULL,
  `Id producto` varchar(150) NOT NULL,
  `Procesador` varchar(150) NOT NULL,
  `Ram` varchar(150) NOT NULL,
  `Disco duro` varchar(150) NOT NULL,
  `Gpu` varchar(150) NOT NULL,
  `Tipo de sistema` varchar(150) NOT NULL,
  `Display` varchar(150) NOT NULL,
  `Historial asignacion` varchar(500) NOT NULL,
  `Procesos a ejecutar` varchar(500) NOT NULL,
  `Observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`ID`, `Nombre`, `Cedula`, `Cuenta`, `Ubicacion`, `Area`, `Cargo`, `Codigo`, `Region`, `Oficina`, `Tipo de computador`, `Marca`, `Modelo`, `Numero de serie`, `Id producto`, `Procesador`, `Ram`, `Disco duro`, `Gpu`, `Tipo de sistema`, `Display`, `Historial asignacion`, `Procesos a ejecutar`, `Observaciones`) VALUES
(5, 'Juanchos', 15268, 'sgsgd', 'Puente Nacional', 'Contabilidad', 'Auxiliar HSEQ', 'publico', 'Norte', 'N_Uri', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Juancho', 15269, 'sgsgd', 'Ibague', 'area1', 'Coordinador de Proyectos', 'publico', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Juancho', 1526, 'sgsgd', 'Ibague', 'area5', 'Profesional Ambiental', 'publico', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'dsfsdfsdf', 56454, '4545', 'Neiva', 'area3', 'Profesional Ambiental', 'publico', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Dan', 666, 'dddd', 'Riohacha', 'area3', 'Profesional Social', 'sdfsdf', 'Norte', 'C_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'pollo', 664, 'sdfkjfd@gmail.com', 'Ibague', 'Gerencia', 'Gestor Predial', 'dddd', 'Sur', 'C_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'peptobismol', 101497, '946xdgfchgvhbj', 'Ibague', 'Geb_Centro', 'Coordinador de Proyectos', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'juanchipa', 165465, 'sfsdf', 'Uribia', 'Tecnica', 'Profesional Ambiental', 'fafsdfsdf', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Danilo', 213123, 'dfdfdf', 'Cartagena', 'Contabilidad', 'Profesional Forestal', 'adasd', 'Sur', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'efsdfsdf', 16523, 'sdfkjfd@gmail.com', 'Neiva', 'Contabilidad', 'Gestor Predial', 'publico', 'Sur', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'Juancho', 656565665, 'dddd', 'Cartagena', 'Contabilidad', 'Gestor Social', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'Flipipipi', 12321321, 'sdfkjfd@gmail.com', 'Ibague', 'Tecnica', 'Profesional Ambiental', 'publico', 'Norte', 'N_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'linadasdadsad', 166666, 'asdfghj', 'Valledupar ', 'Geb_Centro', 'Profesional Forestal', 'dddd', 'Sur', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'popopopoppo', 16000, 'zsdsdadasdsd', 'Puente Nacional', 'Geb_Norte', 'Contador Junior', 'sdfsdf891', 'Sur', 'S_Nei', '', '', '', '', '', '', '32Gb', '250Gb', '', 'Windows10 home single language', '', 'juanes y juanita', 'asdasd', '556'),
(31, 'pipipi', 232300, 'zsdsdadasdsd', 'Neiva', 'Geb_Norte', 'Profesional Forestal', 'asdsadasdsadytey', 'Centro', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'sfsdf', 222, 'sfsdfsdfsdf', 'Puente Nacional', 'Geb_Centro', 'Coordinador de Proyectos', 'publico', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'andrea', 694856, 'peipipi@gmi.com', 'Cartagena', 'Administracion', 'Gestor Predial', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'andreasssss', 694856, 'peipipi@gmi.com', 'Bogotá', 'Contabilidad', 'Auxiliar HSEQ', 'publico', 'Sur', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'linassss', 694856, 'peipipi@gmi.com', 'Cartagena', 'Tecnica', 'Profesional Forestal', 'publico', 'Centro', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'linasssseses', 694856, 'peipipi@gmi.com', 'Valledupar ', 'Contabilidad', 'Profesional Civil', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Danilo', 356566, 'peipipi@gmi.com', 'Ibague', 'Administracion', 'Coordinador de Proyectos', 'publico', 'Centro', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'Danilo656', 356566, 'peipipi@gmi.com', 'Ibague', 'Geb_Norte', 'Profesional Forestal', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Danilo6565', 356566, 'peipipi@gmi.com', 'Neiva', 'Administracion', 'Profesional Forestal', 'publico', 'Centro', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'pipote', 356567, 'peipipi@gmi.com', 'Bogotá', 'Tecnica', 'Coordinador De Arqueología', 'publico', 'Norte', 'S_Hof', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'pipote56565', 356566, 'peipipi@gmi.com', 'Bogotá', 'Administracion', 'Profesional Forestal', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '54', 356566, 'peipipi@gmi.com', 'Cartagena', 'Gerencia', 'Gerente', 'publico', 'Centro', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '54jh', 356566, 'peipipi@gmi.com', 'Cartagena', 'Tecnica', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '54jhfrdsgtrg', 356566, 'peipipi@gmi.com', 'Ibague', 'Geb_Centro', 'Gestor Predial', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '54jhfrdsgtrg56565', 356566, 'peipipi@gmi.com', 'Bogotá', 'Contabilidad', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '54jhfrdsgtrg56565', 356566, 'peipipi@gmi.com', 'Cartagena', 'Contabilidad', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'pilijkj', 356566, 'peipipi@gmi.com', 'Ibague', 'Contabilidad', 'Profesional Ambiental', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'linsol', 356566, 'peipipi@gmi.com', 'Bogotá', 'Administracion', 'Gestor Predial', 'publico', 'Centro', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'fififi', 1526, 'sgsgd', 'Cartagena', 'Geb_Norte', 'Auxiliar HSEQ', 'publico', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'fgddfgfgd', 28, 'dfdfgdf', 'Cartagena', 'Administracion', 'Profesional Sig / Profesional De Aseguramiento De Información - Sig', 'sdfsdf', 'Norte', 'N_Uri', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'firolonm', 5656565, 'dfdfgdf', 'Neiva', 'Administracion', 'Profesional Civil', 'sdfsdf', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'purtirur', 454545, 'sdfkjfd@gmail.com', 'Cartagena', 'Contabilidad', 'Coordinador de Proyectos', 'hotmla', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'lianrtes ', 123, 'peipipi@gmi.com', 'Ibague', 'Geb_Norte', 'Coordinador de Proyectos', 'hotmla', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'vivi', 35656655, 'peipipi@gmi.com', 'Puente Nacional', 'Geb_Centro', 'Profesional Social', 'hotmla', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 'viviana', 35656655, 'peipipi@gmi.com', 'Cartagena', 'Administracion', 'Coordinador de Proyectos', 'hotmla', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'liz', 3565, 'sdfkjfd@gmail.com', 'Ibague', 'Administracion', 'Gerente Tecnico', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 'Danisss', 7777, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Profesional Social', 'dddd', 'Norte', 'N_Rio', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 'Danissseee', 7777, 'sdfkjfd@gmail.com', 'Ibague', 'Administracion', 'Profesional Forestal', 'dddd', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 'filipinas ortiz', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Contabilidad', 'Gerente', 'dddd', 'Norte', 'C_Adm', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 'popri', 7778, 'sdfkjfd@gmail.com', 'Cartagena', 'Administracion', 'Profesional Civil', 'dddd', 'Norte', 'S_Nei', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 'poprisss', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Contabilidad', 'Auxiliar HSEQ', 'dddd', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 'poprisssttttrr', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'dddd', 'Norte', 'C_Téc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'juanes', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'dddd', 'Norte', 'C_Adm', 'Portatil', 'Lenovo', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '2050', 'Windows10 pro', '15,6  FHD', '', 'ggggg', 'jhhou'),
(67, 'juanes', 7779, 'sdfkjfd@gmail.com', 'Neiva', 'Geb_Centro', 'Coordinador de Proyectos', 'dddd', 'Norte', 'C_Adm', 'Portatil', 'Lenovo', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '2050', 'Windows10 pro', '15,6  FHD', '', 'ggggg', 'jhhou'),
(68, 'tito perez', 7779, 'sdfkjfd@gmail.com', 'Cartagena', 'Tecnica', 'Profesional Ambiental', 'dddd', 'Norte', 'S_Nei', 'Mesa', 'Asus', '232', '35', '6455', 'Rizen_5', '12Gb', '250Gb', '2050', 'Windows10 home single language', '15  Full HD', 'juanes y juanita', 'ggggg', 'fifafssss'),
(69, 'titotina perez', 7777, 'sdfkjfd@gmail.com', 'Ibague', 'Tecnica', 'Profesional Ambiental', 'dddd', 'Norte', 'N_Hof', 'Mesa', 'Asus', '232', '35', '6455', 'Intel_i5', '12Gb', '250Gb', '3050', 'Windows10 home', '14  FHD', 'juanes y juanita', 'ggggg', 'nnnnn'),
(70, 'titotina perez albelaes', 77779, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Administracion', 'Profesional Forestal', 'dddd', 'Norte', 'C_Adm', 'Mesa', 'Lenovo', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '2050', 'windows11 home single', '15,6  FHD', 'juanes y juanita', 'ggggg', '63+36'),
(71, 'titotina perez albelaes 45', 777788, 'sdfkjfd@gmail.com', 'Puente Nacional', 'Administracion', 'Profesional Forestal', 'dddd', 'Norte', 'C_Téc', 'Todo_en_uno', 'Asus', '232', '35', '6455', 'Intel_i5', '8Gb', '500Gb', '1650', 'Windows10 home single', '14  FHD', 'juanes y juanita', 'gggg8', '6+56+5+6'),
(72, 'viviana gri', 35656655, 'peipipi@gmi.com', 'Ibague', 'Administracion', 'Profesional Ambiental', 'hotmla', 'Norte', 'C_Adm', 'Portatil', 'Hp', '232', '35', '6455', 'i5', '12Gb', '1TB', '3050', 'windows11 home single', '15  Full HD', 'juanes y juanita', 'asdasd', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
