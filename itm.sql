-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 05:23:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_05_30_204639_create_publications_table', 1),
(3, '2019_05_30_205317_create_roles_table', 1),
(4, '2019_05_30_214201_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) DEFAULT '0',
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `publications`
--

INSERT INTO `publications` (`id`, `text`, `img`, `state`, `titulo`, `categoria`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'Buses Esparza puntarenas pasan por el centro cada 15 min, paran 100 sur de la entrada de la Universidad.', '1561431608buses.jpg', 1, 'Buses', 'Others', 4, '2019-06-25 09:00:08', '2019-06-25 09:00:12'),
(17, 'San ramon por encomiendo en almacen alvarado', '1561431709dibujo.jpg', 1, 'Materiales para dibujo', 'Materials', 4, '2019-06-25 09:01:49', '2019-06-25 09:01:53'),
(18, 'Pizza express llamar al ##########', '1561447277pizza.jpg', 1, 'Pizzeria', 'Food', 4, '2019-06-25 13:21:17', '2019-06-25 13:21:21'),
(19, 'Descargar comincs en www.comics .com', '15614473248e584e96650a74f2bbb01c1a665f93dc.jpg', 1, 'Comics', 'Others', 4, '2019-06-25 13:22:04', '2019-06-25 13:23:08'),
(20, 'Ferre esparza jajaja', '1561447384imagen1.jpg', 1, 'Materiales', 'Materials', 4, '2019-06-25 13:23:04', '2019-06-25 13:23:12'),
(24, 'Cerca del parque de Esparza hay un local que se llama big burger, venden comidas rápidas de esas que te salvan en un apuro, es bastante barato y sirven bastante.\r\nDirección: 75mts oeste del costado suroeste del parque.', '1562168896big-mac.png', 1, 'Comida rápida', 'Food', 8, '2019-07-03 21:48:16', '2019-07-03 23:34:29'),
(25, 'Se alquila casa para 4 personas.\r\nTiene  2 cuartos, cocina, sala y cuarto de pilas.\r\nSin amueblar\r\n250000 colones al mes\r\nLlamar al 86951203', '15621708076947_3925_IMG_20160929_172634.jpg', 1, 'Se alquila casa en la riviera', 'Rent', 8, '2019-07-03 22:20:07', '2019-07-03 23:34:35'),
(26, 'Departamento para 2 personas, luz y agua incluido en el alquiler.\r\n150000 al mes.\r\nPara mas info al: 78963545', '156217096283850619.jpg', 1, 'Departamento en mojón de Esparza', 'Rent', 8, '2019-07-03 22:22:42', '2019-07-03 23:34:40'),
(27, 'El departamento está en Espíritu Santo, cerca del centro de Esparza y no muy lejos de la UCR en nances.\r\nSomos 2 y buscamos a alguien más.\r\n30000 por persona.', '1562171534casa-en-alquiler-de-vacaciones-playa-hermosa-costa_bae50f58a_3.jpg', 1, 'Se busca comparer@ de apartamento', 'Rent', 8, '2019-07-03 22:32:14', '2019-07-03 23:34:46'),
(28, 'La casa está ubicada en Ezparzol de Esparza, cerca de la sede de la UCR, ideal para estudiantes.\r\n125000 al mes, no incluye agua, luz ni muebles.', '1562171681casa-en-alquiler-puntarenas-2.jpg', 1, 'Casa para 2 personas', 'Rent', 8, '2019-07-03 22:34:41', '2019-07-03 23:34:50'),
(29, 'La casa está en San Juan chiquito de Esparza, en este momento somos 3 personas pero necesitamos a alguien más, la casa es bastante grande y contaría con cuarto propio para el nuevo inquilino.\r\nPD: tenemos perro xD\r\nInteresad@s al: 6272063 con Daniel', '1562171980original_casa_a_la_venta_014.jpg', 1, 'Se busca otra persona mas para alquilar', 'Rent', 8, '2019-07-03 22:39:40', '2019-07-03 23:34:55'),
(30, 'La casa está ubicada en el centro de Esparza, está totalmente amueblada y tres cuartos, en este momento somos 2 por eso buscamos a otro más.\r\nSolo hombres\r\nInteresados al 78142586 con Esteban', '1562172328venta-de-casa-en-carrizal-puntarenas_ea5cc8485_3.jpg', 0, 'Se busca compañero de casa', 'Rent', 9, '2019-07-03 22:45:28', '2019-07-03 22:45:28'),
(31, 'Aunque no lo crean van a usar esto mucho más de lo que se esperan en la U, como recomendación les puedo decir que hagan sus trabajos o documentos en google drive, tendrán un respaldo en linea siempre, así no perderán sus proyectos por errores de la pc o perdida de llaves maya.', '15621733881_QmYN-vDIlLqqyLcxRqd-FQ.png', 1, 'Herramientas para estudiantes de primer ingreso', 'Recomendations', 9, '2019-07-03 23:03:08', '2019-07-03 23:35:02'),
(32, 'Este programa se usa para diseños vectoriales, es muy útil en casi todos los cursos de diseño y la mejor opción de software gratuito para este fin.', '1562173553inkscape-logo.jpg', 1, 'Inkscape, tu mejor amigo', 'Recomendations', 9, '2019-07-03 23:05:53', '2019-07-03 23:35:08'),
(33, 'Si no puedes costearte el paquete de adobe te recomiendo que pruebes con este software, el cual cumplirá con todas las funciones que Photoshop ofrece y en algunas ocasiones con herramientas aun más potentes.', '156217391825_000.jpg', 1, 'Opción opensource para Photoshop', 'Recomendations', 9, '2019-07-03 23:11:58', '2019-07-03 23:35:14'),
(34, 'Para aprender a programar java es una de las herramientas a nuestro alcance, podemos investigar como funciona y si tenemos nociones básicas antes de ingresar nos ayudará a mejorar rápidamente.', '1562174273photo.jpg', 1, 'Java recomendaciones básicas', 'Recomendations', 10, '2019-07-03 23:17:53', '2019-07-03 23:35:23'),
(35, 'Para modelar en 3d se utiliza blender como principal herramienta es importante saber como funciona aunque no tengas nocion siempre se puede buscar tutoriales para aprender un poco antes y saber a que te vas a enfrentar', '15621744220_0VStldZujNzGMGc4_.png', 1, 'Modelado en 3d', 'Recomendations', 10, '2019-07-03 23:20:22', '2019-07-03 23:35:27'),
(36, 'mejor editor de toda la vida', '1562174643drjava_dock_icon_by_karazyjew.png', 1, 'Dr java herramienta para aprender', 'Materials', 10, '2019-07-03 23:24:03', '2019-07-04 02:08:10'),
(37, 'Un IDE como Geany te ayuda con funciones de auto completado en el código de java por lo cual al iniciar a programar con clases te puede ser de gran ayuda', '15621749061200px-Geany_logo.svg.png', 1, 'Geany editor', 'Materials', 10, '2019-07-03 23:28:26', '2019-07-03 23:35:37'),
(39, 'Al iniciar a utilizar editores de texto para programar en web o lo que necesites hacer sublime text es una herramienta básica que te provee de las características necesarias para aprender.', '1562175170Apps-Sublime-Text-icon.png', 1, 'Sublime text', 'Materials', 10, '2019-07-03 23:32:50', '2019-07-03 23:35:58'),
(40, 'Software de desarrollo', '1562184117245px-Apache_NetBeans_Logo.svg.png', 1, 'Neatbeans', 'Materials', 10, '2019-07-04 02:01:57', '2019-07-04 02:04:06'),
(45, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210079imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:39', '2019-07-04 09:14:39'),
(46, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210079imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:39', '2019-07-04 09:14:39'),
(47, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(48, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(49, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(50, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(51, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(52, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(53, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(54, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(55, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(56, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(57, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(58, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(59, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40'),
(60, 'Este texto representa la descripcion de una publicacion\n        texto solo de pruebas, texto solo de pruebas', '1562210080imagenPrueba.jpg', 1, 'titulo Prueba', 'Others', 1, '2019-07-04 09:14:40', '2019-07-04 09:14:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Super Admin b.....', '2019-06-14 04:39:09', '2019-06-14 04:39:09'),
(2, 'user', 'Normal guy', '2019-06-14 04:39:09', '2019-06-14 04:39:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 1, '2019-07-04 02:06:50', '2019-07-04 02:06:50'),
(7, 1, '2019-07-03 21:36:54', '2019-07-03 21:36:54'),
(8, 2, '2019-07-03 21:41:44', '2019-07-03 21:41:44'),
(9, 2, '2019-07-03 22:42:56', '2019-07-03 22:42:56'),
(10, 2, '2019-07-03 23:13:21', '2019-07-03 23:13:21'),
(11, 2, '2019-07-04 02:10:39', '2019-07-04 02:10:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '123123123', NULL, NULL, NULL),
(4, 'Esteban Gonzalez', 'esteban@gmail.com', NULL, '$2y$10$sC0QdMxu0anbXht65V2EHecu5DKpB.lDdjsyTjxHir8bRmwyG/eKO', NULL, '2019-06-21 22:03:34', '2019-06-21 22:03:34'),
(7, 'AdminIntegrateItm', 'admin@integrate.com', NULL, '$2y$10$nKvBMgEQDXgMFPVdj6XUXeJX.RR1MqtEtsZ.2CvTmMOZQYAssn1Mi', NULL, '2019-07-03 21:35:57', '2019-07-03 21:35:57'),
(8, 'AnthonyAlva', 'antonny.alvarado@ucr.ac.cr', NULL, '$2y$10$C9ELGfaDT7A4YsJnIs628OlkTNqg5c0aQ/0Csn3I2jfCF/ZhLoJ4G', NULL, '2019-07-03 21:41:44', '2019-07-03 21:41:44'),
(9, 'David045', 'david045@gmail.com', NULL, '$2y$10$24aVoh36BSRncKk/gjTJKuClBolKmCmNNb5RBzpkBqXScqrsPbo32', NULL, '2019-07-03 22:42:56', '2019-07-03 22:42:56'),
(10, 'Brandon Porras Suárez', 'brandon.porras.26@gmail.com', NULL, '$2y$10$qXShf/EaioLtIuTSrD7G9.eBqfmZHG2JCXzxKNh8t9q83HCm1P1DO', NULL, '2019-07-03 23:13:21', '2019-07-03 23:13:21'),
(11, 'Nickelodeon', 'nick@gmail.com', NULL, '$2y$10$vZ6yGquRmp./xq2oXE469.SmWQ/xBv3k.Xcxc6mYK4EuvGo2H5GvW', NULL, '2019-07-04 02:10:39', '2019-07-04 02:10:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publications_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
