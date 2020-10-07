-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 07:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Desarrollo', '2020-06-18 22:09:42'),
(2, 'Marketing Digital', '2020-06-18 22:09:42'),
(3, 'Fotografia', '2020-06-18 22:10:02'),
(5, 'Diseño Gráfico', '2020-06-18 22:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `commits`
--

CREATE TABLE `commits` (
  `id` int(11) NOT NULL,
  `usermail_id` varchar(200) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `commit` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commits`
--

INSERT INTO `commits` (`id`, `usermail_id`, `curso_id`, `commit`, `created_at`) VALUES
(1, 'pedrito@gmail.com', 2, 'this is my fisrt commit, this course y really good... very good course, lorem ipsu two.', '2020-08-13 18:12:15'),
(2, 'testermakingtest@gmail.com', 2, 'way,way, far away ... this is my fisrt commit, this course y really good... very good course, lorem ipsu two.', '2020-08-13 18:12:15'),
(3, 'adilene@gmail.com', 2, 'This is my first commit in this platform, academy the best tutorials and courses here!!', '2020-08-13 18:38:19'),
(4, 'adilene@gmail.com', 1, 'This is my first commit in this platform, academy the best tutorials and courses here!!', '2020-08-13 18:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `direccion` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `cantidad` varchar(1000) NOT NULL,
  `origen_pago` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `id_user`, `direccion`, `status`, `cantidad`, `origen_pago`, `created_at`) VALUES
(1, 2, 'Turin 2926 ,Lomas Providencia Estado: Jalisco CP: 44630 - Tel: 3316054147', 0, '11400.98', 'DEVELOPER', '2020-06-19 23:20:38'),
(2, 2, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '12599.99', 'DEVELOPER', '2020-08-12 19:01:07'),
(3, 7, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '12599.99', 'DEVELOPER', '2020-08-12 20:38:34'),
(4, 7, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '199.99', 'DEVELOPER', '2020-08-12 20:43:14'),
(5, 7, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '209', 'DEVELOPER', '2020-08-12 20:44:00'),
(6, 8, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '13008.98', 'DEVELOPER', '2020-08-12 20:45:30'),
(7, 8, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '14500', 'DEVELOPER', '2020-08-12 21:37:15'),
(8, 8, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '1500.5', 'DEVELOPER', '2020-08-12 21:59:33'),
(9, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '1500.5', 'DEVELOPER', '2020-08-13 16:34:46'),
(10, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '408.99', 'DEVELOPER', '2020-08-13 16:39:41'),
(11, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '39566.9', 'DEVELOPER', '2020-09-09 19:48:45'),
(12, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '0', 'DEVELOPER', '2020-09-09 19:49:43'),
(13, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '0', 'DEVELOPER', '2020-09-09 19:50:44'),
(14, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '0', 'DEVELOPER', '2020-09-09 19:52:26'),
(15, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '0', 'DEVELOPER', '2020-09-09 21:13:59'),
(16, 9, 'undefined Estado: undefined CP: undefined - Tel: undefined', 0, '0', 'DEVELOPER', '2020-09-09 21:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `creator` varchar(200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `no_videos` int(11) NOT NULL,
  `price` varchar(300) NOT NULL,
  `category` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `creator`, `title`, `description`, `no_videos`, `price`, `category`, `created_at`) VALUES
(1, 'Lic. Armando Gonzales Rosales Fuentes', 'Spring Boot desde cero', 'Aprende a programar en spring boot desde cero con este master de programacion que te ayudara a iniciarte en tu camino de programador o tambien si tienes experiencia, aumenta tus habilidades con este lenguaje.', 45, '1459.99', 'Desarrollo Web', '2020-08-11 23:01:27'),
(2, 'Lic. Armando Gonzales Rosales Fuentes', 'Arquitectura', 'Desde lo mas basico hasta conocedor del tema en arquitectura, este curso te lleva de la mano para que el aprendisaje sea mas fluido, un experto es quien imparte y con un modelo de enseñanza nuevo.', 14, '1566.99', 'Arquitectura', '2020-08-11 23:54:36'),
(3, 'Lic. Miguel Angel de la torre romo', 'Como aprender a cantar como un profesional', 'En este curso aprenderas a dominar las tecnicas del canto, asi como recursos y herramientas que te ayudaran en tu camino musical proesional', 33, '1999.99', 'Música', '2020-08-12 18:47:52'),
(4, 'Ing. Samael Romero Puerto', 'Como Desarrollar una Super Memooria', 'Adquiere las habilidades para poder retener grandes ', 22, '1399.88', 'Desarrollo', '2020-08-12 21:23:32'),
(5, 'Roberto Angiano Rosales Franco', 'Enamorala!! Seduccioón Inteligente', 'En este curso aprenderas nuevas maneras de interactuar y desenvolverse frente a la persona de interes para asi lograr su atención y llegar a la conquista.', 18, '999.99', 'Desarrollo\r\n', '2020-08-12 21:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner_user_cursos`
--

CREATE TABLE `owner_user_cursos` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_user_cursos`
--

INSERT INTO `owner_user_cursos` (`id`, `id_user`, `id_curso`, `created_at`) VALUES
(1, 2, 1, '2020-08-11 23:23:26'),
(2, 2, 2, '2020-08-11 23:23:47'),
(3, 2, 3, '2020-08-12 19:01:07'),
(4, 7, 3, '2020-08-12 20:38:34'),
(5, 7, 1, '2020-08-12 20:43:14'),
(6, 7, 2, '2020-08-12 20:44:00'),
(7, 8, 1, '2020-08-12 20:45:30'),
(8, 8, 2, '2020-08-12 20:45:30'),
(9, 8, 3, '2020-08-12 20:45:30'),
(10, 8, 4, '2020-08-12 21:37:15'),
(11, 8, 5, '2020-08-12 21:59:33'),
(12, 9, 5, '2020-08-13 16:34:46'),
(13, 9, 1, '2020-08-13 16:39:41'),
(14, 9, 2, '2020-08-13 16:39:41'),
(15, 9, 0, '2020-09-09 19:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT 'Sin Descripcion proporcionada',
  `stock` int(11) NOT NULL DEFAULT 0,
  `id_category` int(11) NOT NULL,
  `img` varchar(3000) NOT NULL DEFAULT 'http://lorempixel.com/400/200',
  `curso_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `stock`, `id_category`, `img`, `curso_id`, `created_at`) VALUES
(4, 'Spring Boot desde cero', '199.99', 'testing description abetc dsdd dedede deddddddd', 0, 3, '1592528151.png', 1, '2020-06-19 00:55:51'),
(5, 'Arquitectura con Airkit 2020', '209.00', 'Camara camara lente lente,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod te', 0, 1, '1592584512.png', 2, '2020-06-19 16:35:12'),
(6, 'Como Aprender a cantar con Aud', '12599.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584627.png', 3, '2020-06-19 16:37:07'),
(7, 'Como Desarrolla Super memoria', '14500.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584716.png', 4, '2020-06-19 16:38:36'),
(8, 'Enamorala!! Seducción Intelige', '1500.50', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584867.png', 5, '2020-06-19 16:41:07'),
(9, 'Primeros Auxilios', '24599.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584916.png', 0, '2020-06-19 16:41:56'),
(10, 'Maquillaje Profesional', '7999.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584953.png', 0, '2020-06-19 16:42:33'),
(11, 'Matematicas Avanzadas', '8999.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 2, '1592584986.png', 0, '2020-06-19 16:43:06'),
(12, 'Meditacion y Yoga', '39566.90', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 2, '1592585016.png', 0, '2020-06-19 16:43:36'),
(13, 'Jardineria General', '780.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 5, '1592585201.png', 0, '2020-06-19 16:46:41'),
(14, 'Aprende Idiomas', '14000.90', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 2, '1592585236.png', 0, '2020-06-19 16:47:16'),
(15, 'Agricultura Moderna', '3000.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 3, '1592586052.png', 0, '2020-06-19 17:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `route` varchar(4000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `curso_id`, `route`, `created_at`) VALUES
(1, 1, '/cursos/Spring Boot desde cero/1. Introducción al curso/1. Introducción.mp4', '2020-08-11 23:04:14'),
(2, 1, '/cursos/Spring Boot desde cero/2. Preparación de un entorno profesional/1. Instalación del JDK.mp4', '2020-08-11 23:05:54'),
(3, 1, '/cursos/Spring Boot desde cero/2. Preparación de un entorno profesional/2. Instalación de Apache NetBeans IDE.mp4', '2020-08-11 23:05:54'),
(4, 1, '/cursos/Spring Boot desde cero/2. Preparación de un entorno profesional/3. Hola, mundo! con NetBeans.mp4', '2020-08-11 23:08:08'),
(5, 1, '/cursos/Spring Boot desde cero/3. La presentación primera página con Spring MVC/1. Creación del proyecto Spring Boot.mp4', '2020-08-11 23:08:08'),
(6, 1, '/cursos/Spring Boot desde cero/3. La presentación primera página con Spring MVC/2. El primer controlador con Spring MVC.mp4', '2020-08-11 23:11:55'),
(7, 1, '/cursos/Spring Boot desde cero/3. La presentación primera página con Spring MVC/3. Página de listado de videojuegos con Bootstrap.mp4', '2020-08-11 23:11:55'),
(8, 1, '/cursos/Spring Boot desde cero/3. La presentación primera página con Spring MVC/4. Adicional Mejoras con Bootstrap.mp4', '2020-08-11 23:13:59'),
(9, 1, '/cursos/Spring Boot desde cero/4. Clases de negocio @Service/1. La primer clase de negocio.mp4', '2020-08-11 23:13:59'),
(10, 1, '/cursos/Spring Boot desde cero/4. Clases de negocio @Service/2. Listado web de videojuegos con Thymeleaf.mp4', '2020-08-11 23:16:36'),
(11, 1, '/cursos/Spring Boot desde cero/5. Acceso a base de datos/1. Instalación de la base de datos MariaDB.mp4', '2020-08-11 23:16:36'),
(12, 1, '/cursos/Spring Boot desde cero/5. Acceso a base de datos/2. Creación de la tabla.mp4', '2020-08-11 23:17:21'),
(13, 1, '/cursos/Spring Boot desde cero/5. Acceso a base de datos/3. JPA para mapear al objeto de dominio.mp4', '2020-08-11 23:17:21'),
(14, 1, '/cursos/Spring Boot desde cero\\5. Acceso a base de datos/4. Consulta a la base con Spring Data JPA.mp4', '2020-08-11 23:18:46'),
(15, 1, '/cursos\\Spring Boot desde cero\\5. Acceso a base de datos/5. Adicional Integración de NetBeans con MariaDB.mp4', '2020-08-11 23:18:46'),
(16, 1, '/cursos/Spring Boot desde cero/6. Adicional Gestión del proyecto/1. Actualización de Spring Boot.mp4', '2020-08-11 23:20:26'),
(17, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/1.2.Configuración de un proyecto ARKit.mp4', '2020-08-12 17:53:05'),
(18, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/1.3.Configurar los permisos de cámara.mp4', '2020-08-12 17:53:05'),
(19, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/1.4.Feature Points y World Origin.mp4', '2020-08-12 17:53:42'),
(20, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/1_1.mp4', '2020-08-12 17:53:42'),
(21, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (1).mp4', '2020-08-12 17:55:40'),
(22, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (2).mp4', '2020-08-12 17:55:40'),
(23, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (3).mp4', '2020-08-12 17:56:12'),
(24, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (4).mp4', '2020-08-12 17:56:12'),
(25, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (5).mp4', '2020-08-12 17:57:44'),
(26, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (6).mp4', '2020-08-12 17:57:44'),
(27, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (7).mp4', '2020-08-12 17:58:00'),
(28, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (8).mp4', '2020-08-12 17:58:00'),
(29, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (9).mp4', '2020-08-12 18:01:39'),
(30, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (10).mp4', '2020-08-12 18:01:39'),
(31, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (11).mp4', '2020-08-12 18:01:56'),
(32, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (12).mp4', '2020-08-12 18:01:56'),
(33, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (13).mp4', '2020-08-12 18:02:13'),
(34, 2, '/cursos/arquitectura/primeros_pasos_con_airkit/testing_video_22 (14).mp4', '2020-08-12 18:02:13'),
(35, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/1.- Ser Locutora Conceptos.MP4', '2020-08-12 18:49:16'),
(36, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/2.- Introduccion  Educacion de la Voz.MP4', '2020-08-12 18:49:16'),
(37, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/3.- Fonemas X CC XC.MP4', '2020-08-12 18:49:53'),
(38, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/4.- Fonemas X CC y Vocales.MP4', '2020-08-12 18:49:53'),
(39, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/5.- Molde Articulatorio Letra D', '2020-08-12 18:50:45'),
(40, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/6.- Letras E NM MN NN.MP4', '2020-08-12 18:50:45'),
(41, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/7.- Combinacion GN.MP4', '2020-08-12 18:51:28'),
(42, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/8.- Sobre La Respiración.MP4', '2020-08-12 18:51:28'),
(43, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/9.- Errores Frecuentes Y Soluciones.MP4', '2020-08-12 18:52:09'),
(44, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/10.- Repaso.MP4', '2020-08-12 18:52:09'),
(45, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/11.- Como Tener la Voz Mas Grave o Gruesa.MP4', '2020-08-12 18:52:39'),
(46, 3, '/cursos/Como Aprender a Cantar/Seccion 1 - Educación De La Voz/12.- Aclaraciones.MP4', '2020-08-12 18:52:39'),
(47, 3, '/cursos/Como Aprender a Cantar/Seccion 2 - Aprender a Leer/13.- Introducción Y Consejos a la hora de leer.MP4', '2020-08-12 18:53:41'),
(48, 3, '/cursos/Como Aprender a Cantar/Seccion 2 - Aprender a Leer/14.- Práctica Con Destrabalenguas.MP4', '2020-08-12 18:53:41'),
(49, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/15.- Introduccion.MP4', '2020-08-12 18:54:42'),
(50, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/16.- Tipos de Texto.MP4', '2020-08-12 18:54:42'),
(51, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/17.- Primer Análisis.MP4', '2020-08-12 18:55:24'),
(52, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/18.- Segundo Análisis.MP4', '2020-08-12 18:55:24'),
(53, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/19.- Tercer Análisis.MP4', '2020-08-12 18:55:59'),
(54, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/20.- Cuarto Análisis.MP4', '2020-08-12 18:55:59'),
(55, 3, '/cursos/Como Aprender a Cantar/Seccion 3 - Lectura E Interpretacion/21.- Consejos Para el Locutor.MP4', '2020-08-12 18:57:02'),
(56, 3, '/cursos/Como Aprender a Cantar/Seccion 4 - Edicion de Adio Con Audacity/22.- Instalación De Herramientas.MP4', '2020-08-12 18:57:02'),
(57, 3, '/cursos/Como Aprender a Cantar/Seccion 4 - Edicion de Adio Con Audacity/23.- Limpieza De Un Audio.MP4', '2020-08-12 18:57:31'),
(58, 3, '/cursos/Como Aprender a Cantar/Seccion 4 - Edicion de Adio Con Audacity/24.- Musicalizando.MP4', '2020-08-12 18:57:31'),
(59, 4, '/cursos/Como Desarrollar una super Memoria/1. Introduccion/1. Introduccion y estructura del curso.mp4', '2020-08-12 21:26:18'),
(60, 4, '/cursos/Como Desarrollar una super Memoria/1. Introduccion/2. Bienvenida y consejos iniciales.mp4', '2020-08-12 21:26:18'),
(61, 4, '/cursos/Como Desarrollar una super Memoria/1. Introduccion/3. La Imaginación.mp4', '2020-08-12 21:26:50'),
(62, 4, '/cursos/Como Desarrollar una super Memoria/1. Introduccion/4. Actitud Mental.mp4', '2020-08-12 21:26:50'),
(63, 4, '/cursos/Como Desarrollar una super Memoria/2. Abre los secretos de tu mente/1. La relajación.mp4', '2020-08-12 21:27:59'),
(64, 4, '/cursos/Como Desarrollar una super Memoria/2. Abre los secretos de tu mente/2. Practica de visualizacion, La Vela.mp4', '2020-08-12 21:27:59'),
(65, 4, '/cursos/Como Desarrollar una super Memoria/2. Abre los secretos de tu mente/3. La técnica y la imaginación.mp4', '2020-08-12 21:29:09'),
(66, 4, '/cursos/Como Desarrollar una super Memoria/3. Tu propio Código Mental Secreto/1. Codigo Mental - Introducción.mp4', '2020-08-12 21:29:09'),
(67, 4, '/cursos/Como Desarrollar una super Memoria/3. Tu propio Código Mental Secreto/2. Codigo Mental Numérico.mp4', '2020-08-12 21:29:47'),
(68, 4, '/cursos/Como Desarrollar una super Memoria/3. Tu propio Código Mental Secreto/5. Los primeros 10 pasos del código mental.mp4', '2020-08-12 21:29:47'),
(69, 4, '/cursos/Como Desarrollar una super Memoria/3. Tu propio Código Mental Secreto/6. El segundo grupo del 11 al 20.mp4', '2020-08-12 21:30:57'),
(70, 4, '/cursos/Como Desarrollar una super Memoria/3. Tu propio Código Mental Secreto/7. El tercer grupo del 21 al 30.mp4', '2020-08-12 21:30:57'),
(71, 4, '/cursos/Como Desarrollar una super Memoria/3. Tu propio Código Mental Secreto/8. Grupo del 31 al 40.mp4', '2020-08-12 21:32:21'),
(72, 4, '/cursos/Como Desarrollar una super Memoria/4. Aprende a Memorizar listas. Primera a última o desde la última a la primera/1. Listas de Palabras.mp4', '2020-08-12 21:32:21'),
(73, 4, '/cursos/Como Desarrollar una super Memoria/4. Aprende a Memorizar listas. Primera a última o desde la última a la primera/3. Listas de Números.mp4', '2020-08-12 21:33:47'),
(74, 4, '/cursos/Como Desarrollar una super Memoria/5. Cómo memorizar Fórmulas/1. Como memorizar fórmulas simples y complejas.mp4', '2020-08-12 21:33:47'),
(75, 4, '/cursos/Como Desarrollar una super Memoria/6. Cómo Memorizar Fechas importantes/1. Cómo Memorizar Fechas importantes.mp4', '2020-08-12 21:35:20'),
(76, 4, '/cursos/Como Desarrollar una super Memoria/7. Técnicas de calculo mental Veloz y Super Veloz/1. Introducción.mp4', '2020-08-12 21:35:20'),
(77, 4, '/cursos/Como Desarrollar una super Memoria/7. Técnicas de calculo mental Veloz y Super Veloz/2. Calculo Mental 1.mp4', '2020-08-12 21:36:16'),
(78, 4, '/cursos/Como Desarrollar una super Memoria/7. Técnicas de calculo mental Veloz y Super Veloz/3. Calculo Mental 2.mp4', '2020-08-12 21:36:16'),
(79, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/1 Video Introductorio del Curso.mp4', '2020-08-12 21:53:46'),
(80, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/2 Felicidades por dar el Paso.mp4', '2020-08-12 21:53:46'),
(81, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/3 ¿Importa Si Soy Feo.mp4', '2020-08-12 21:54:20'),
(82, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/4 Bajandola del Pedestal.mp4', '2020-08-12 21:54:20'),
(83, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/5 Lee Su Cerebro!.mp4', '2020-08-12 21:54:59'),
(84, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/6 Apóyate Con Ejercicios.mp4', '2020-08-12 21:54:59'),
(85, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/7 Señales de que No le Gustas.mp4', '2020-08-12 21:55:30'),
(86, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/8 Acerca de Tu Vida.mp4', '2020-08-12 21:55:30'),
(87, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/9 Selecciona Adecuadamente.mp4', '2020-08-12 21:56:00'),
(88, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/10 ¿Cómo Debe Ser Ella.mp4', '2020-08-12 21:56:00'),
(89, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/01 Introducción/11 Realiza Estos Ser Ejercicios.mp4', '2020-08-12 21:57:19'),
(90, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/19 Felicidades Has Terminado.mp4', '2020-08-12 21:57:19'),
(91, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/18 Consejos Finales.mp4', '2020-08-12 21:57:51'),
(92, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/17 La Verdad Acerca de Ser Virgen.mp4', '2020-08-12 21:57:51'),
(93, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/16 La Técnica de la Geografía.mp4', '2020-08-12 21:58:25'),
(94, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/15 ¡Y Si Tiene Novio.mp4', '2020-08-12 21:58:25'),
(95, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/14 Disfruta Y Camina Despacio.mp4', '2020-08-12 21:58:56'),
(96, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/13 Esto es Un Juego .mp4', '2020-08-12 21:58:56'),
(97, 5, '/cursos/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/047 ¡ENAMÓRALA! Curso de Seducción Inteligente/02 Entendiendo más el juego/12 ¿Cómo Puedo Mejorarme Para Atraer Más Calidad.mp4', '2020-08-12 21:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `shoping_cart`
--

CREATE TABLE `shoping_cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoping_cart`
--

INSERT INTO `shoping_cart` (`id`, `id_product`, `id_user`, `created_at`) VALUES
(11, 4, 3, '2020-06-20 00:18:30'),
(12, 6, 5, '2020-07-13 23:26:09'),
(13, 4, 6, '2020-07-14 00:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'Super User Admin', 'christian.padilla.muniz@gmail.com', NULL, '$2y$10$aQsaGawWCsOajhmRfLOX0Og75s3EAtQF4t864w8e5tECUU0niTvVS', NULL, 1, '2020-06-16 00:08:58', '2020-06-16 00:08:58'),
(2, 'Tester Test01 TESTIGN', 'testing@goicoin.com', NULL, '$2y$10$RuvWyuoIiYIVo1st53SGTeo4eExzOFPQB.OJiia2HL7Vc2o5gCn4.', NULL, 0, '2020-06-18 21:10:46', '2020-06-18 21:10:46'),
(3, 'Eva Saray Salazar Saldaña', 'sarasa35@gmail.com', NULL, '$2y$10$hrKvVKFQARqjlWfUhHlQU.zIk3hfcC8UmIKvqTqtsVXTaogQ/Xlze', NULL, 0, '2020-06-20 00:18:23', '2020-06-20 00:18:23'),
(4, 'Alondra Rosales Franco', 'alondra@gmail.com', NULL, '$2y$10$r8UPzfh1huSc793y/p/hZuo6XN/PfHf7frtmIz1J9zz/9Fu3oJU/K', NULL, 0, '2020-06-22 17:30:10', '2020-06-22 17:30:10'),
(5, 'Tester Making Test', 'testermakingtest@gmail.com', NULL, '$2y$10$DaC9eNdZsdgs9a71j1ZfVuIChOcG0eqxHCuFU8zy2eiGHTGK4h9f6', NULL, 0, '2020-07-13 23:25:55', '2020-07-13 23:25:55'),
(6, 'Eva Saray Salazar Saldaña', 'eurodireccion@gmail.com', NULL, '$2y$10$9by82Aneg2yEPbxGAmkIYujputAQsO499KQQl05KLk0bDdZBhvdNO', NULL, 0, '2020-07-14 00:02:45', '2020-07-14 00:02:45'),
(7, 'Pedrito Fernadez Magdalena', 'pedrito@gmail.com', NULL, '$2y$10$k15OKLSiscjZSFfQnBlfWOlc.Idob1haR4VB5iVdG2ZgRh2/jYIae', NULL, 0, '2020-08-12 20:38:05', '2020-08-12 20:38:05'),
(8, 'Adilene Limon Gonzales', 'adilene@gmail.com', NULL, '$2y$10$6PaZHPhmnu.ZnKs3WeZi5eM/mpKs.DFMO9GUokYwuNfw18ig4XFrS', NULL, 0, '2020-08-12 20:44:59', '2020-08-12 20:44:59'),
(9, 'MIGUEL A DE LA TORRE', 'compensamarketing@gmail.com', NULL, '$2y$10$KlwUK08VXysqdkX.ZTao3uxzG.JGMSM80oHfLkosuB9JKwZ3SC8Pi', NULL, 0, '2020-08-13 16:30:54', '2020-08-13 16:30:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commits`
--
ALTER TABLE `commits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_user_cursos`
--
ALTER TABLE `owner_user_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commits`
--
ALTER TABLE `commits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner_user_cursos`
--
ALTER TABLE `owner_user_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
