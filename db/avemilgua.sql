-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2018 at 06:50 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `avemilgua`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap_bitacora`
--

CREATE TABLE `ap_bitacora` (
  `fecha` datetime NOT NULL,
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `pagina` varchar(100) COLLATE utf8_bin NOT NULL,
  `tabla` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `accion` varchar(20) COLLATE utf8_bin NOT NULL,
  `antes` mediumtext COLLATE utf8_bin,
  `despues` mediumtext COLLATE utf8_bin,
  `institucion` int(4) DEFAULT NULL,
  `ip_cliente` varchar(20) COLLATE utf8_bin NOT NULL,
  `ip_proxy` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `ip_remoto` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `estatus` varchar(10) COLLATE utf8_bin DEFAULT 'OK',
  `so` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `navegador` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `versionnav` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ap_bitacora`
--

INSERT INTO `ap_bitacora` (`fecha`, `usuario`, `pagina`, `tabla`, `accion`, `antes`, `despues`, `institucion`, `ip_cliente`, `ip_proxy`, `ip_remoto`, `estatus`, `so`, `navegador`, `versionnav`) VALUES
('2015-05-25 10:04:40', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:04:56', 'william.cuc@insayd.c', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:14:44', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:15:51', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:18:30', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:22:46', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:26:03', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', NULL, NULL, NULL),
('2015-05-25 10:38:33', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-25 10:39:11', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'MAC', 'SAFARI', '600.1.4'),
('2015-05-25 10:39:46', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'CHROME', '42.0.2311.111'),
('2015-05-25 10:39:48', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.65'),
('2015-05-25 10:47:03', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.65'),
('2015-05-25 10:55:47', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'CHROME', '43.0.2357.81'),
('2015-05-25 14:36:13', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.65'),
('2015-05-25 18:36:19', 'juanmini@gmail.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.106.211.110', 'OK', 'MAC', 'SAFARI', '600.1.4'),
('2015-05-25 18:37:48', 'juanmini@gmail.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.106.211.110', 'OK', 'MAC', 'SAFARI', '600.1.4'),
('2015-05-26 08:38:36', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-05-26 10:44:22', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-26 11:37:03', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-05-26 15:31:51', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-05-26 16:23:13', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-05-27 11:14:45', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-27 12:37:10', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-05-27 16:55:15', 'apacheco@apolo.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-05-28 08:53:37', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-28 10:48:42', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'CHROME', '42.0.2311.111'),
('2015-05-28 11:10:47', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-28 15:52:41', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-28 16:21:51', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-05-29 08:12:31', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-06-01 08:16:16', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '186.151.60.233', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 09:34:44', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-06-01 10:47:11', 'rmedina@apolo.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 10:48:39', 'rmedina@apolo.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 10:48:58', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '186.151.60.233', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 10:58:00', 'rmedina@apolo.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 13:16:09', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 14:25:43', 'rmedina@apolo.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'FIREFOX', '38.0'),
('2015-06-01 14:28:55', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 14:46:52', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-01 23:03:02', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.143.148.199', 'OK', 'MAC', 'SAFARI', '600.1.4'),
('2015-06-02 09:33:34', 'william.cuc@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-02 09:58:10', 'vivian@tec.com.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'CHROME', '43.0.2357.81'),
('2015-06-03 14:39:06', 'perry@insayd.com', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2015-06-03 14:40:26', 'rmedina@apolo.gt', '/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '190.99.117.202', 'OK', 'WIN', 'FIREFOX', '38.0'),
('2015-06-03 16:22:57', 'perry@insayd.com', '/prototipo/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '127.0.0.1', 'OK', 'LINUX', 'FIREFOX', '38.0'),
('2018-06-19 21:33:16', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 09:57:40', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 10:31:31', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 10:52:07', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 10:53:00', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:04:03', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:04:46', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:05:19', 'vivian@tec.com.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:05:58', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:06:36', 'juanmini@gmail.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:08:54', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:25:16', 'juanmini@gmail.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:29:08', 'juanmini@gmail.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:29:48', 'juanmini@gmail.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:30:10', 'juanmini@gmail.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 11:30:42', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 12:08:00', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 12:12:23', 'rmedina@apolo.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 12:13:46', 'apacheco@apolo.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 12:14:53', 'claudia@tec.com.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 12:16:30', 'vivian@tec.com.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 12:23:52', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:23:52', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:25:00', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:26:31', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:27:37', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:28:43', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:29:18', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:33:47', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:40:38', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:41:04', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:42:09', 'claudia@tec.com.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:43:34', 'claudia@tec.com.gt', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:44:48', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:46:37', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:47:49', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 14:51:01', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:22:25', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:23:16', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:23:48', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:24:08', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:25:36', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:26:54', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:27:59', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:29:22', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:30:02', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:31:22', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:32:20', 'perry@insayd.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:38:26', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-20 16:45:43', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 09:57:34', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:36:30', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:38:11', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:41:15', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:42:17', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:42:38', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:43:24', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:45:17', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:53:45', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:54:26', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:54:46', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:55:18', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:56:00', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:56:29', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:57:01', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 10:59:06', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:15:23', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:15:56', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:16:57', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:17:20', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:18:40', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:24:19', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:26:30', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:27:32', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:32:36', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:46:26', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 11:47:18', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:05:48', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:06:22', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:06:45', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:07:33', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:14:00', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:15:41', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:16:39', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:20:28', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:23:59', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:25:31', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:29:42', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:40:30', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:49:09', 'rgomez@gatech.edu', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 12:51:10', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 13:09:31', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:13:22', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:22:05', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:22:28', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:23:05', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:56:14', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:57:05', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 14:57:24', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 15:19:51', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 15:20:17', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 15:30:44', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-21 15:31:56', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 09:50:02', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 11:07:08', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 11:22:09', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 11:23:16', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 11:56:41', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 12:21:02', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 12:21:45', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 12:39:04', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 12:59:46', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 13:44:06', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 13:46:05', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 13:51:39', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 13:58:10', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:06:17', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:07:27', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:12:23', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:17:55', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:38:06', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:41:17', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 14:42:54', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 15:02:37', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 15:03:09', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-22 15:11:14', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-24 21:33:38', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-24 21:38:31', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 09:47:47', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 09:53:10', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 12:08:32', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 12:22:37', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 14:21:02', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 14:21:16', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 16:18:52', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'SAFARI', '605.1.15'),
('2018-06-25 16:45:36', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'CHROME', '67.0.3396.87'),
('2018-06-25 16:55:48', 'test@dev.com', '/webappbase/pages/valida.php', NULL, 'Login', NULL, NULL, NULL, '', '', '::1', 'OK', 'MAC', 'SAFARI', '605.1.15');

-- --------------------------------------------------------

--
-- Table structure for table `ap_catalogos`
--

CREATE TABLE `ap_catalogos` (
  `id` int(11) NOT NULL,
  `tipo_catalogo` int(4) NOT NULL,
  `institucion` int(4) NOT NULL DEFAULT '1',
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `comodin` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Catalogos varios de la aplicación';

--
-- Dumping data for table `ap_catalogos`
--

INSERT INTO `ap_catalogos` (`id`, `tipo_catalogo`, `institucion`, `nombre`, `comodin`) VALUES
(1, 1, 1, 'enero', 'ene'),
(1, 2, 1, 'Super Usuario', 'SU'),
(1, 3, 1, 'Activo', 'Si'),
(1, 4, 1, 'Miembro del Grupo', 'MG'),
(1, 5, 1, 'Guatemala', 'GT'),
(1, 6, 1, 'Masculino', 'M'),
(1, 7, 1, 'Disponible', 'Disp'),
(1, 8, 1, 'Notificado', 'INI'),
(1, 9, 1, 'Familiar', 'F'),
(1, 10, 1, 'Asociación Tec GT', 'AsoTecGT'),
(1, 11, 1, 'Nicho', 'Nich'),
(1, 12, 1, 'Padre o Madre', 'P'),
(2, 1, 1, 'febrero', 'feb'),
(2, 2, 1, 'Administrador del Sistema', 'ADS'),
(2, 3, 1, 'No Activo', 'No'),
(2, 4, 1, 'Proveedor', 'PR'),
(2, 5, 1, 'Honduras', 'HN'),
(2, 6, 1, 'Femenino', 'F'),
(2, 7, 1, 'Regularizada', 'Reg'),
(2, 8, 1, 'En Proceso', 'PRO'),
(2, 9, 1, 'Comercial', 'C'),
(2, 10, 1, 'Arrendamiento', 'Alquiler'),
(2, 11, 1, 'Jardin', 'Jardi'),
(2, 12, 1, 'Esposo(a)', 'E'),
(3, 1, 1, 'marzo', 'mar'),
(3, 2, 1, 'Gerencia', 'Ger'),
(3, 4, 1, 'Cliente', 'CL'),
(3, 5, 1, 'El Salvador', 'SV'),
(3, 7, 1, 'Vendida', 'Ven'),
(3, 8, 1, 'Problema Identificado', 'IDE'),
(3, 9, 1, 'Personal', 'P'),
(3, 10, 1, 'Reservación Área de Eventos', 'Eventos'),
(3, 11, 1, 'Mausoleo', 'Mau'),
(3, 12, 1, 'Hijo(a)', 'H'),
(4, 1, 1, 'abril', 'abr'),
(4, 2, 1, 'Administrador Condominio', 'ADC'),
(4, 4, 1, 'Socio de Negocios', 'SN'),
(4, 5, 1, 'Nicaragua', 'NI'),
(4, 8, 1, 'Suspendido', 'SUS'),
(7, 12, 1, 'Tio(a)', 'T'),
(5, 1, 1, 'mayo', 'may'),
(5, 2, 1, 'Operador', 'OPE'),
(5, 5, 1, 'Costa Rica', 'CR'),
(5, 8, 1, 'Trasladado', 'TRA'),
(5, 12, 1, 'Primo(a)', 'Pr'),
(6, 1, 1, 'junio', 'jun'),
(6, 5, 1, 'Panamá', 'PA'),
(6, 8, 1, 'Cerrado', 'CER'),
(7, 1, 1, 'julio', 'jul'),
(7, 5, 1, 'Estados Unidos', 'EU'),
(8, 1, 1, 'agosto', 'ago'),
(8, 5, 1, 'México', 'MX'),
(9, 1, 1, 'septiembre', 'sep'),
(9, 5, 1, 'Canada', 'CA'),
(10, 1, 1, 'octubre', 'oct'),
(10, 5, 1, 'Perú', 'PE'),
(11, 1, 1, 'noviembre', 'nov'),
(12, 1, 1, 'diciembre', 'dic'),
(1, 13, 1, 'Dirección', 'Dir'),
(2, 13, 1, 'Ejecutivo', 'Eje'),
(3, 13, 1, 'Asesor', 'Ase'),
(4, 13, 1, 'Administrativo', 'Adm'),
(5, 13, 1, 'Operativo', 'Ope'),
(6, 13, 1, 'Conserjería', 'Con'),
(7, 13, 1, 'Externo', 'Ext'),
(1, 14, 1, 'Jardinero', 'Jar'),
(2, 14, 1, 'Fontanero', 'Fon'),
(3, 14, 1, 'Electricista', 'Ele'),
(4, 14, 1, 'Mecánico', 'Mec'),
(1, 15, 1, 'Soltero', 'Sol'),
(2, 15, 1, 'Casado', 'Cas'),
(3, 15, 1, 'Unido', 'Uni'),
(4, 7, 1, 'Ocupada Regularizada', 'O Reg'),
(5, 7, 1, 'Ocupada Vendida', 'O Ven'),
(6, 7, 1, 'Ocupada Sin Regularizar', 'O Sin'),
(4, 11, 1, 'Sepulcro', 'Sepul'),
(6, 12, 1, 'Sobrino(a)', 'Sob'),
(4, 12, 1, 'Hermano(a)', 'Her'),
(8, 12, 1, 'Abuelo(a)', 'Ab'),
(9, 12, 1, 'Amigo(a)', 'Am'),
(1, 18, 1, 'Persona Individual', 'Indiv'),
(2, 18, 1, 'Persona JuriÂ­dica', 'Empre'),
(1, 19, 1, 'Compra', 'Debe'),
(2, 19, 1, 'Pago', 'Haber'),
(1, 20, 1, 'Efectivo', 'Ef'),
(2, 20, 1, 'Cheque', 'Chequ'),
(3, 20, 1, 'Tarjeta de Credito', 'TC'),
(1, 21, 1, 'Banco de Guatemala', 'BGuat'),
(2, 21, 1, 'Banrural', 'BRur'),
(3, 21, 1, 'Banco Industrial', 'Indus'),
(4, 21, 1, 'Banco de America Central', 'BAC'),
(5, 21, 1, 'Banco G&T Continental', 'GYT'),
(91, 21, 1, 'VISA', 'VISA'),
(92, 21, 1, 'Master Card', 'Maste'),
(93, 21, 1, 'American Expres', 'Am Ex'),
(6, 21, 1, 'Banco Promerica', 'Prom'),
(7, 21, 1, 'Banco Agromercantil', 'Agro'),
(8, 21, 1, 'Credito Hipotecario Nacional', 'CHN'),
(1, 16, 1, 'La Esperanza', 'Esp'),
(1, 17, 1, 'Uno', 'Uno'),
(2, 16, 1, 'Las Cumbres', 'Cumbr'),
(3, 16, 1, 'Los Angeles', 'Angel'),
(1, 22, 1, 'Cobro por Cuenta Ajena', 'CC Aj'),
(2, 22, 1, 'Monetaria', 'Monet'),
(3, 22, 1, 'Ahorros', 'Ahorr'),
(7, 8, 1, 'Borrador', 'Borra'),
(4, 16, 1, 'Las Fuentes', 'Fuent'),
(5, 16, 1, 'Las Nuves', 'Nuves'),
(2, 17, 1, 'Dos', 'Dos'),
(3, 17, 1, 'Tres', 'Tres'),
(4, 17, 1, 'Cuatro', 'Cuatr'),
(7, 7, 1, 'Lista Negra', 'L Neg'),
(1, 23, 1, '1', '1'),
(2, 23, 1, '2', '2'),
(3, 23, 1, '3', '3'),
(4, 23, 1, '4', '4'),
(1, 24, 1, '5', '5'),
(2, 24, 1, '10', '10'),
(3, 24, 1, '15', '15'),
(4, 24, 1, '20', '20'),
(5, 24, 1, '25', '25'),
(6, 24, 1, '30', '30'),
(7, 24, 1, '35', '35'),
(8, 24, 1, '40', '40'),
(9, 24, 1, '45', '45'),
(10, 24, 1, '50', '50'),
(11, 24, 1, '55', '55'),
(12, 24, 1, '60', '60'),
(6, 16, 1, 'Pendiente de Ubicacion', 'QAP'),
(5, 11, 1, 'Terreno', 'Terre'),
(7, 16, 1, 'Lado Norte', 'Norte'),
(5, 17, 1, 'Cinco', 'Cinco'),
(6, 17, 1, 'Seis', 'Seis'),
(7, 17, 1, 'Siete', 'Siete'),
(8, 17, 1, 'Ocho', 'Ocho'),
(8, 16, 1, 'Sector Premier', 'S Pre'),
(9, 16, 1, 'Calzada La Eternidad', 'La Et'),
(4, 10, 1, 'Mantenimiento', 'Mantenimiento'),
(5, 10, 1, 'Servicios Varios', 'Servicios'),
(1, 25, 1, 'Reporte de Falla', 'Falla'),
(2, 25, 1, 'Solicitud de Capacitacion', 'Capac'),
(3, 25, 1, 'Corregir Informacion', 'Corre'),
(4, 25, 1, 'Solicitudes Varias', 'Varia'),
(5, 25, 1, 'Nueva Funcionalidad', 'Funci'),
(1, 26, 1, 'Vivienda', 'Vivienda'),
(2, 26, 1, 'Comercio', 'Comercio'),
(1, 27, 1, 'Quetzales', 'Q'),
(2, 27, 1, 'US Dollar', 'US$'),
(1, 28, 1, 'Requerimiento de Cobro', 'RC'),
(2, 28, 1, 'Cotizacion', 'C'),
(3, 28, 1, 'Orden de Trabajo', 'OT'),
(4, 28, 1, 'Factura', 'F'),
(5, 28, 1, 'Recibo', 'R'),
(6, 28, 1, 'Recibo Provicional', 'RP'),
(1, 29, 1, 'Informativo', 'event-info'),
(2, 29, 1, 'Ejecutado', 'event-success'),
(3, 29, 1, 'Inverso', 'event-inverse'),
(4, 29, 1, 'Importante', 'event-important'),
(5, 29, 1, 'Precaución', 'event-warning'),
(6, 29, 1, 'Especial', 'event-special'),
(1, 30, 1, 'Sala de Brainstorming', 'event-rojo'),
(2, 30, 1, 'E-Garage', 'event-azul'),
(3, 30, 1, 'Amarillo', 'event-amarillo'),
(4, 30, 1, 'Naranja', 'event-naranja'),
(5, 30, 1, 'Morado', 'event-morado'),
(6, 30, 1, 'Rosado', 'event-rosado'),
(7, 30, 1, 'Verde claro', 'event-verdeclaro'),
(8, 30, 1, 'Administración', 'event-verdemedio'),
(9, 30, 1, 'Verde obscuro', 'event-verdeobscuro'),
(10, 30, 1, 'Sala de Conferencias', 'event-canario'),
(11, 30, 1, 'Azul celeste', 'event-celeste'),
(12, 30, 1, 'Azul nacional', 'event-azulnacio'),
(13, 30, 1, 'Aqua', 'event-acua'),
(14, 30, 1, 'Area de Coworking', 'event-fucsia'),
(15, 30, 1, 'Gris claro', 'event-grisclaro'),
(16, 30, 1, 'Gris medio', 'event-grismedio'),
(3, 26, 1, 'DesarrolloTecnológico', 'Tecnología'),
(4, 26, 1, 'Cafetería', 'cafeteria'),
(5, 26, 1, 'Agencia de Publicidad', 'Publicidad'),
(6, 26, 1, 'Organización', 'Organización'),
(7, 26, 1, 'Gestion de Datos', 'Datos'),
(8, 26, 1, 'Capacitación', 'Capacitación'),
(4, 20, 1, 'Transacción Electrónica', 'Transacción Electrónica'),
(1, 31, 1, 'General', 'General'),
(2, 31, 1, 'Oficinas Tec I', 'Oficinas'),
(3, 31, 1, 'Asceleradora de Negocios', 'ADN'),
(4, 31, 1, 'Incubadora de Negocios', 'IDN'),
(5, 31, 1, 'Oficinas Virtuales', 'Oficinas Virtuales'),
(6, 31, 1, 'Areas de Eventos', 'Areas de Eventos'),
(1, 32, 1, 'Mantenimiento', 'Mantenimiento'),
(2, 32, 1, 'Energía Eléctrica', 'Electricidad'),
(3, 32, 1, 'Seguridad', 'Seguridad'),
(4, 32, 1, 'Suministros de Oficina', 'Suministros'),
(1, 33, 1, 'Inversiones Tzaguacal', 'Tzaguacal'),
(2, 33, 1, 'Grupo Apolo', 'Apolo'),
(1, 34, 1, 'Campus Tec 1', '004.A.02.00.000.00'),
(2, 34, 1, 'Campus Tec 2', 'Tec 2'),
(1, 35, 1, 'Solicitado', 'Solicitado'),
(2, 35, 1, 'Cheque Emitido', 'Cheque Emitido'),
(3, 35, 1, 'Pagado', 'Pagado'),
(4, 35, 1, 'Anulado', 'Anulado'),
(5, 32, 1, 'Agua', 'Agua'),
(6, 32, 1, 'Internet', 'Internet'),
(7, 32, 1, 'Teléfono', 'Teléfono'),
(1, 36, 1, 'Pendiente de Confirmación', 'Sin Confirmación'),
(2, 36, 1, 'Evento Confirmado', 'Confirmado'),
(3, 36, 1, 'Evento Realizado', 'Realizado'),
(4, 36, 1, 'Evento Cancelado', 'Cancelado'),
(94, 21, 1, 'City Bank', 'City Bank'),
(95, 21, 1, 'Banco Inmobiliario', 'Banco Inmobiliario'),
(96, 21, 1, 'Inter Banco', 'Inter Banco');

-- --------------------------------------------------------

--
-- Table structure for table `ap_eventcal`
--

CREATE TABLE `ap_eventcal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `condominio` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `allday` int(4) NOT NULL DEFAULT '0',
  `startday` date DEFAULT NULL,
  `starthour` time DEFAULT NULL,
  `endday` date DEFAULT NULL,
  `endhour` time DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `color` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `textcolor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `pedidoid` bigint(20) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `usuarioact` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fechaact` datetime DEFAULT NULL,
  `personas` int(11) DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `estatus` int(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Eventos de Calendario';

-- --------------------------------------------------------

--
-- Table structure for table `ap_instituciones`
--

CREATE TABLE `ap_instituciones` (
  `id` int(4) NOT NULL COMMENT 'ID de entidad',
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'Nombre de la entidad',
  `pais` int(4) NOT NULL COMMENT 'Pais',
  `logo` varchar(200) COLLATE utf8_bin NOT NULL COMMENT 'Logo de la entidad',
  `logo_aplicacion` varchar(200) COLLATE utf8_bin DEFAULT NULL COMMENT 'Logo de Aplicacion',
  `logo_impresion` varchar(200) COLLATE utf8_bin DEFAULT NULL COMMENT 'Logo para impresiones B/N',
  `tipo` int(4) NOT NULL COMMENT 'tipo de entidad',
  `url` varchar(200) COLLATE utf8_bin DEFAULT NULL COMMENT 'Dirección en la Web',
  `email` varchar(200) COLLATE utf8_bin NOT NULL COMMENT 'Correo institucional',
  `direccion` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `estatus` int(4) NOT NULL COMMENT 'estatus',
  `nit` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `contacto` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `patrono_igss` varchar(15) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Distintas instituciones que interactuan con el sisitema';

--
-- Dumping data for table `ap_instituciones`
--

INSERT INTO `ap_instituciones` (`id`, `nombre`, `pais`, `logo`, `logo_aplicacion`, `logo_impresion`, `tipo`, `url`, `email`, `direccion`, `telefono`, `estatus`, `nit`, `contacto`, `patrono_igss`) VALUES
(1, 'INSAYD S. A.', 1, 'inmobiges_int.png', 'inmobiges_int_bl.png', 'logo-alt.png', 2, 'http://insayd.com', 'info@insayd.com', 'Via 2 1-30, Edificio Campus Tec, Of. 102, 4°Norte, Guatemala, Guatemala', '25018500', 1, '716623-0', 'Perry Daniels', '121213'),
(2, 'Campus Tec I', 1, '', '', '', 1, 'tec.gt', '', '', '', 1, '', 'Rosa', '');

-- --------------------------------------------------------

--
-- Table structure for table `ap_municipios`
--

CREATE TABLE `ap_municipios` (
  `id` int(6) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `departamento_id` int(3) NOT NULL,
  `departamento` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ap_municipios`
--

INSERT INTO `ap_municipios` (`id`, `nombre`, `departamento_id`, `departamento`) VALUES
(101, 'GUATEMALA', 1, 'GUATEMALA'),
(102, 'SANTA CATARINA PINULA', 1, 'GUATEMALA'),
(103, 'SAN JOSE PINULA', 1, 'GUATEMALA'),
(104, 'SAN JOSE DEL GOLFO', 1, 'GUATEMALA'),
(105, 'PALENCIA', 1, 'GUATEMALA'),
(106, 'CHINAUTLA', 1, 'GUATEMALA'),
(107, 'SAN PEDRO AYAMPUC', 1, 'GUATEMALA'),
(108, 'MIXCO', 1, 'GUATEMALA'),
(109, 'SAN PEDRO SACATEPEQUEZ', 1, 'GUATEMALA'),
(110, 'SAN JUAN SACATEPEQUEZ', 1, 'GUATEMALA'),
(111, 'SAN RAYMUNDO', 1, 'GUATEMALA'),
(112, 'CHUARRANCHO', 1, 'GUATEMALA'),
(113, 'FRAIJANES', 1, 'GUATEMALA'),
(114, 'AMATITLAN', 1, 'GUATEMALA'),
(115, 'VILLA NUEVA', 1, 'GUATEMALA'),
(116, 'VILLA CANALES', 1, 'GUATEMALA'),
(117, 'PETAPA', 1, 'GUATEMALA'),
(201, 'GUASTATOYA', 2, 'EL PROGRESO'),
(202, 'MORAZAN', 2, 'EL PROGRESO'),
(203, 'SAN AGUSTIN ACASAGUASTLAN', 2, 'EL PROGRESO'),
(204, 'SAN CRISTOBAL ACASAGUASTLAN', 2, 'EL PROGRESO'),
(205, 'EL JICARO', 2, 'EL PROGRESO'),
(206, 'SANSARE', 2, 'EL PROGRESO'),
(207, 'SANARATE', 2, 'EL PROGRESO'),
(208, 'SAN ANTONIO LA PAZ', 2, 'EL PROGRESO'),
(301, 'ANTIGUA GUATEMALA', 3, 'SACATEPEQUEZ'),
(302, 'JOCOTENANGO', 3, 'SACATEPEQUEZ'),
(303, 'PASTORES', 3, 'SACATEPEQUEZ'),
(304, 'SUMPANGO', 3, 'SACATEPEQUEZ'),
(305, 'SANTO DOMINGO XENACOJ', 3, 'SACATEPEQUEZ'),
(306, 'SANTIAGO SACATEPEQUEZ', 3, 'SACATEPEQUEZ'),
(307, 'SAN BARTOLOME MILPAS ALTAS', 3, 'SACATEPEQUEZ'),
(308, 'SAN LUCAS SACATEPEQUEZ', 3, 'SACATEPEQUEZ'),
(309, 'SANTA LUCIA MILPAS ALTAS', 3, 'SACATEPEQUEZ'),
(310, 'MAGDALENA MILPAS ALTAS', 3, 'SACATEPEQUEZ'),
(311, 'SANTA MARIA DE JESUS', 3, 'SACATEPEQUEZ'),
(312, 'CIUDAD VIEJA', 3, 'SACATEPEQUEZ'),
(313, 'SAN MIGUEL DUE', 3, 'SACATEPEQUEZ'),
(314, 'ALOTENANGO', 3, 'SACATEPEQUEZ'),
(315, 'SAN ANTONIO AGUAS CALIENTES', 3, 'SACATEPEQUEZ'),
(316, 'SANTA CATARINA BARAHONA', 3, 'SACATEPEQUEZ'),
(401, 'CHIMALTENANGO', 4, 'CHIMALTENANGO'),
(402, 'SAN JOSE POAQUIL', 4, 'CHIMALTENANGO'),
(403, 'SAN MARTIN JILOTEPEQUE', 4, 'CHIMALTENANGO'),
(404, 'SAN JUAN COMALAPA', 4, 'CHIMALTENANGO'),
(405, 'SANTA APOLONIA', 4, 'CHIMALTENANGO'),
(406, 'TECPAN GUATEMALA', 4, 'CHIMALTENANGO'),
(407, 'PATZUN', 4, 'CHIMALTENANGO'),
(408, 'POCHUTA', 4, 'CHIMALTENANGO'),
(409, 'PATZICIA', 4, 'CHIMALTENANGO'),
(410, 'SANTA CRUZ BALANYA', 4, 'CHIMALTENANGO'),
(411, 'ACATENANGO', 4, 'CHIMALTENANGO'),
(412, 'YEPOCAPA', 4, 'CHIMALTENANGO'),
(413, 'SAN ANDRES ITZAPA', 4, 'CHIMALTENANGO'),
(414, 'PARRAMOS', 4, 'CHIMALTENANGO'),
(415, 'ZARAGOZA', 4, 'CHIMALTENANGO'),
(416, 'EL TEJAR', 4, 'CHIMALTENANGO'),
(501, 'ESCUINTLA', 5, 'ESCUINTLA'),
(502, 'SANTA LUCIA COTZULMALGUAPA', 5, 'ESCUINTLA'),
(503, 'LA DEMOCRACIA', 5, 'ESCUINTLA'),
(504, 'SIQUINALA', 5, 'ESCUINTLA'),
(505, 'MASAGUA', 5, 'ESCUINTLA'),
(506, 'TIQUISATE', 5, 'ESCUINTLA'),
(507, 'LA GOMERA', 5, 'ESCUINTLA'),
(508, 'GUANAGAZAPA', 5, 'ESCUINTLA'),
(509, 'SAN JOSE', 5, 'ESCUINTLA'),
(510, 'IZTAPA', 5, 'ESCUINTLA'),
(511, 'PALIN', 5, 'ESCUINTLA'),
(512, 'SAN VICENTE PACAYA', 5, 'ESCUINTLA'),
(513, 'NUEVA CONCEPCION', 5, 'ESCUINTLA'),
(601, 'CUILAPA', 6, 'SANTA ROSA'),
(602, 'BARBERENA', 6, 'SANTA ROSA'),
(603, 'SANTA ROSA DE LIMA', 6, 'SANTA ROSA'),
(604, 'CASILLAS', 6, 'SANTA ROSA'),
(605, 'SAN RAFAEL LAS FLORES', 6, 'SANTA ROSA'),
(606, 'ORATORIO', 6, 'SANTA ROSA'),
(607, 'SAN JUAN TECUACO', 6, 'SANTA ROSA'),
(608, 'CHIQUIMULILLA', 6, 'SANTA ROSA'),
(609, 'TAXISCO', 6, 'SANTA ROSA'),
(610, 'SANTA MARIA IXHUATAN', 6, 'SANTA ROSA'),
(611, 'GUAZACAPAN', 6, 'SANTA ROSA'),
(612, 'SANTA CRUZ NARANJO', 6, 'SANTA ROSA'),
(613, 'PUEBLO NUEVO VI', 6, 'SANTA ROSA'),
(614, 'NUEVA SANTA ROSA', 6, 'SANTA ROSA'),
(701, 'SOLOLA', 7, 'SOLOLA'),
(702, 'SAN JOSE CHACAYA', 7, 'SOLOLA'),
(703, 'SANTA MARIA VISITACION', 7, 'SOLOLA'),
(704, 'SANTA LUCIA UTATLAN', 7, 'SOLOLA'),
(705, 'NAHUALA', 7, 'SOLOLA'),
(706, 'SANTA CATARINA IXTAHUACAN', 7, 'SOLOLA'),
(707, 'SANTA CLARA LA LAGUNA', 7, 'SOLOLA'),
(708, 'CONCEPCION', 7, 'SOLOLA'),
(709, 'SAN ANDRES SEMETABAJ', 7, 'SOLOLA'),
(710, 'PANAJACHEL', 7, 'SOLOLA'),
(711, 'SANTA CATARINA PALAPO', 7, 'SOLOLA'),
(712, 'SAN ANTONIO PALAPO', 7, 'SOLOLA'),
(713, 'SAN LUCAS TOLIMAN', 7, 'SOLOLA'),
(714, 'SANTA CRUZ LA LAGUNA', 7, 'SOLOLA'),
(715, 'SAN PABLO LA LAGUNA', 7, 'SOLOLA'),
(716, 'SAN MARCOS LA LAGUNA', 7, 'SOLOLA'),
(717, 'SAN JUAN LA LAGUNA', 7, 'SOLOLA'),
(718, 'SAN PEDRO LA LAGUNA', 7, 'SOLOLA'),
(719, 'SANTIAGO ATITLAN', 7, 'SOLOLA'),
(801, 'TOTONICAPAN', 8, 'TOTONICAPAN'),
(802, 'SAN CRISTOBAL TOTONICAPAN', 8, 'TOTONICAPAN'),
(803, 'SAN FRANCISCO EL ALTO', 8, 'TOTONICAPAN'),
(804, 'SAN ANDRES XECUL', 8, 'TOTONICAPAN'),
(805, 'MOMOSTENANGO', 8, 'TOTONICAPAN'),
(806, 'SANTA MARIA CHIQUIMILA', 8, 'TOTONICAPAN'),
(807, 'SANTA LUCIA LA REFORMA', 8, 'TOTONICAPAN'),
(808, 'SAN BARTOLO AGUAS CALIENTES', 8, 'TOTONICAPAN'),
(901, 'QUETZALTENANGO', 9, 'QUETZALTENANGO'),
(902, 'SALCAJA', 9, 'QUETZALTENANGO'),
(903, 'OLINTEPEQUE', 9, 'QUETZALTENANGO'),
(904, 'SAN CARLOS SIJA', 9, 'QUETZALTENANGO'),
(905, 'SIBILIA', 9, 'QUETZALTENANGO'),
(906, 'CABRICAN', 9, 'QUETZALTENANGO'),
(907, 'CAJOLA', 9, 'QUETZALTENANGO'),
(908, 'SAN MIGUEL SIG', 9, 'QUETZALTENANGO'),
(909, 'SAN JUAN OSTUNCALCO', 9, 'QUETZALTENANGO'),
(910, 'SAN MATEO', 9, 'QUETZALTENANGO'),
(911, 'CONCEPCION CHIQUIRICHAPA', 9, 'QUETZALTENANGO'),
(912, 'SAN MARTIN SACATEPEQUEZ', 9, 'QUETZALTENANGO'),
(913, 'ALMOLONGA', 9, 'QUETZALTENANGO'),
(914, 'CANTEL', 9, 'QUETZALTENANGO'),
(915, 'HUITAN', 9, 'QUETZALTENANGO'),
(916, 'ZUNIL', 9, 'QUETZALTENANGO'),
(917, 'COLOMBA', 9, 'QUETZALTENANGO'),
(918, 'SAN FRANCISCO LA UNION', 9, 'QUETZALTENANGO'),
(919, 'EL PALMAR', 9, 'QUETZALTENANGO'),
(920, 'COATEPEQUE', 9, 'QUETZALTENANGO'),
(921, 'GENOVA', 9, 'QUETZALTENANGO'),
(922, 'FLORES COSTA CUCA', 9, 'QUETZALTENANGO'),
(923, 'LA ESPERANZA', 9, 'QUETZALTENANGO'),
(924, 'PALESTINA DE LOS ALTOS', 9, 'QUETZALTENANGO'),
(1001, 'MAZATENANGO', 10, 'SUCHITEPEQUEZ'),
(1002, 'CUYOTENANGO', 10, 'SUCHITEPEQUEZ'),
(1003, 'SAN FRANCISCO ZAPOTITLAN', 10, 'SUCHITEPEQUEZ'),
(1004, 'SAN BERNANDINO', 10, 'SUCHITEPEQUEZ'),
(1005, 'SAN JOSE EL IDOLO', 10, 'SUCHITEPEQUEZ'),
(1006, 'SANTO DOMINGO SUCHITEPEQUEZ', 10, 'SUCHITEPEQUEZ'),
(1007, 'SAN LORENZO', 10, 'SUCHITEPEQUEZ'),
(1008, 'SAMAYAC', 10, 'SUCHITEPEQUEZ'),
(1009, 'SAN PABLO JOCOPILAS', 10, 'SUCHITEPEQUEZ'),
(1010, 'SAN ANTONIO SUCHITEPEQUEZ', 10, 'SUCHITEPEQUEZ'),
(1011, 'SAN MIGUEL PANAN', 10, 'SUCHITEPEQUEZ'),
(1012, 'SAN GABRIEL', 10, 'SUCHITEPEQUEZ'),
(1013, 'CHICACAO', 10, 'SUCHITEPEQUEZ'),
(1014, 'PATULUL', 10, 'SUCHITEPEQUEZ'),
(1015, 'SANTA BARBARA', 10, 'SUCHITEPEQUEZ'),
(1016, 'SAN JUAN BAUTISTA', 10, 'SUCHITEPEQUEZ'),
(1017, 'SANTO TOMAS LA UNION', 10, 'SUCHITEPEQUEZ'),
(1018, 'ZUNILITO', 10, 'SUCHITEPEQUEZ'),
(1019, 'PUEBLO NUEVO', 10, 'SUCHITEPEQUEZ'),
(1020, 'RIO BRAVO', 10, 'SUCHITEPEQUEZ'),
(1101, 'RETALHULEU', 11, 'RETHALULEU'),
(1102, 'SAN SEBASTIAN', 11, 'RETHALULEU'),
(1103, 'SANTA CRUZ MULUA', 11, 'RETHALULEU'),
(1104, 'SAN MARTIN ZAPOTITLAN', 11, 'RETHALULEU'),
(1105, 'SAN FELIPE RETALHULEU', 11, 'RETHALULEU'),
(1106, 'SAN ANDRES VILLA SECA', 11, 'RETHALULEU'),
(1107, 'CHAMPERICO', 11, 'RETHALULEU'),
(1108, 'NUEVO SAN CARLOS', 11, 'RETHALULEU'),
(1109, 'EL ASINTAL', 11, 'RETHALULEU'),
(1201, 'SAN MARCOS', 12, 'SAN MARCOS'),
(1202, 'SAN PEDRO SACATEPEQUEZ', 12, 'SAN MARCOS'),
(1203, 'SAN ANTONIO SACATEPEQUEZ', 12, 'SAN MARCOS'),
(1204, 'COMITANCILLO', 12, 'SAN MARCOS'),
(1205, 'SAN MIGUEL IXTAHUACAN', 12, 'SAN MARCOS'),
(1206, 'CONCEPCION TUTUAPA', 12, 'SAN MARCOS'),
(1207, 'TACANA', 12, 'SAN MARCOS'),
(1208, 'SIBINAL', 12, 'SAN MARCOS'),
(1209, 'TAJUMULCO', 12, 'SAN MARCOS'),
(1210, 'TEJUTLA', 12, 'SAN MARCOS'),
(1211, 'SAN RAFAEL PIE DE LA CUESTA', 12, 'SAN MARCOS'),
(1212, 'NUEVO PROGRESO', 12, 'SAN MARCOS'),
(1213, 'EL TUMBADOR', 12, 'SAN MARCOS'),
(1214, 'EL RODEO', 12, 'SAN MARCOS'),
(1215, 'MALACATAN', 12, 'SAN MARCOS'),
(1216, 'CATARINA', 12, 'SAN MARCOS'),
(1217, 'AYUTLA', 12, 'SAN MARCOS'),
(1218, 'OCOS', 12, 'SAN MARCOS'),
(1219, 'SAN PABLO', 12, 'SAN MARCOS'),
(1220, 'EL QUETZAL', 12, 'SAN MARCOS'),
(1221, 'LA REFORMA', 12, 'SAN MARCOS'),
(1222, 'PAJAPITA', 12, 'SAN MARCOS'),
(1223, 'IXCHIGUAN', 12, 'SAN MARCOS'),
(1224, 'SAN JOSE OJETENAM', 12, 'SAN MARCOS'),
(1225, 'SAN CRISTOBAL CUCHO', 12, 'SAN MARCOS'),
(1226, 'SIPACAPA', 12, 'SAN MARCOS'),
(1227, 'ESQUIPULAS PALO GORDO', 12, 'SAN MARCOS'),
(1228, 'RIO BLANCO', 12, 'SAN MARCOS'),
(1229, 'SAN LORENZO', 12, 'SAN MARCOS'),
(1301, 'HUEHUETENANGO', 13, 'HUEHUETENANGO'),
(1302, 'CHIANTLA', 13, 'HUEHUETENANGO'),
(1303, 'MALACATANCITO', 13, 'HUEHUETENANGO'),
(1304, 'CUILCO', 13, 'HUEHUETENANGO'),
(1305, 'NENTON', 13, 'HUEHUETENANGO'),
(1306, 'SAN PEDRO NECTA', 13, 'HUEHUETENANGO'),
(1307, 'JACALTENANGO', 13, 'HUEHUETENANGO'),
(1308, 'SOLOMA', 13, 'HUEHUETENANGO'),
(1309, 'SAN IDELFONSO IXTAHUACAN', 13, 'HUEHUETENANGO'),
(1310, 'SANTA BARBARA', 13, 'HUEHUETENANGO'),
(1311, 'LA LIBERTAD', 13, 'HUEHUETENANGO'),
(1312, 'LA DEMOCRACIA', 13, 'HUEHUETENANGO'),
(1313, 'SAN MIGUEL ACATAN', 13, 'HUEHUETENANGO'),
(1314, 'SAN RAFAEL INDEPENDENCIA', 13, 'HUEHUETENANGO'),
(1315, 'TODOS SANTOS CUCHUMATAN', 13, 'HUEHUETENANGO'),
(1316, 'SAN JUAN ATITAN', 13, 'HUEHUETENANGO'),
(1317, 'SANTA EULALIA', 13, 'HUEHUETENANGO'),
(1318, 'SAN MATEO IXTATAN', 13, 'HUEHUETENANGO'),
(1319, 'COLOTENANGO', 13, 'HUEHUETENANGO'),
(1320, 'SAN SEBASTIAN HUEHUETENANGO', 13, 'HUEHUETENANGO'),
(1321, 'TECTITAN', 13, 'HUEHUETENANGO'),
(1322, 'CONCEPCION HUISTA', 13, 'HUEHUETENANGO'),
(1323, 'SAN JUAN IXCOY', 13, 'HUEHUETENANGO'),
(1324, 'SAN ANTONIO HUISTA', 13, 'HUEHUETENANGO'),
(1325, 'SAN SEBASTIAN COATAN', 13, 'HUEHUETENANGO'),
(1326, 'BARILLAS', 13, 'HUEHUETENANGO'),
(1327, 'AGUACATAN', 13, 'HUEHUETENANGO'),
(1328, 'SAN RAFAEL PETZAL', 13, 'HUEHUETENANGO'),
(1329, 'SAN GASPAR IXCHIL', 13, 'HUEHUETENANGO'),
(1330, 'SANTIAGO CHIMALTENANGO', 13, 'HUEHUETENANGO'),
(1331, 'SANTA ANA HUISTA', 13, 'HUEHUETENANGO'),
(1332, 'UNION CANTINIL', 13, 'HUEHUETENANGO'),
(1401, 'SANTA CRUZ DEL QUICHE', 14, 'QUICHE'),
(1402, 'CHICHE', 14, 'QUICHE'),
(1403, 'CHINIQUE', 14, 'QUICHE'),
(1404, 'ZACUALPA', 14, 'QUICHE'),
(1405, 'CHAJUL', 14, 'QUICHE'),
(1406, 'CHICHICASTENANGO', 14, 'QUICHE'),
(1407, 'PATZITE', 14, 'QUICHE'),
(1408, 'SAN ANTONIO ILOTENANGO', 14, 'QUICHE'),
(1409, 'SAN PEDRO JOCOPILAS', 14, 'QUICHE'),
(1410, 'CUNEN', 14, 'QUICHE'),
(1411, 'SAN JUAN COTZAL', 14, 'QUICHE'),
(1412, 'JOYABAJ', 14, 'QUICHE'),
(1413, 'NEBAJ', 14, 'QUICHE'),
(1414, 'SAN ANDRES SAJCABAJA', 14, 'QUICHE'),
(1415, 'USPANTAN', 14, 'QUICHE'),
(1416, 'SACAPULAS', 14, 'QUICHE'),
(1417, 'SAN BARTOLOME JOCOTENANGO', 14, 'QUICHE'),
(1418, 'CANILLA', 14, 'QUICHE'),
(1419, 'CHICAMAN', 14, 'QUICHE'),
(1420, 'PLAYA GRANDE-IXCAN', 14, 'QUICHE'),
(1421, 'PACHALUM', 14, 'QUICHE'),
(1501, 'SALAMA', 15, 'BAJA VERAPAZ'),
(1502, 'SAN MIGUEL CHICAJ', 15, 'BAJA VERAPAZ'),
(1503, 'RABINAL', 15, 'BAJA VERAPAZ'),
(1504, 'CUBULCO', 15, 'BAJA VERAPAZ'),
(1505, 'GRANADOS', 15, 'BAJA VERAPAZ'),
(1506, 'EL CHOL', 15, 'BAJA VERAPAZ'),
(1507, 'SAN JERONIMO', 15, 'BAJA VERAPAZ'),
(1508, 'PURULHA', 15, 'BAJA VERAPAZ'),
(1601, 'COBAN', 16, 'ALTA VERAPAZ'),
(1602, 'SANTA CRUZ VERAPAZ', 16, 'ALTA VERAPAZ'),
(1603, 'SAN CRISTOBAL VERAPAZ', 16, 'ALTA VERAPAZ'),
(1604, 'TACTIC', 16, 'ALTA VERAPAZ'),
(1605, 'TAMAHU', 16, 'ALTA VERAPAZ'),
(1606, 'TUCURU', 16, 'ALTA VERAPAZ'),
(1607, 'PANZOS', 16, 'ALTA VERAPAZ'),
(1608, 'SENAHU', 16, 'ALTA VERAPAZ'),
(1609, 'SAN PEDRO CARCHA', 16, 'ALTA VERAPAZ'),
(1610, 'SAN JUAN CHAMELCO', 16, 'ALTA VERAPAZ'),
(1611, 'LANQUIN', 16, 'ALTA VERAPAZ'),
(1612, 'CAHABON', 16, 'ALTA VERAPAZ'),
(1613, 'CHISEC', 16, 'ALTA VERAPAZ'),
(1614, 'CHAHAL', 16, 'ALTA VERAPAZ'),
(1615, 'FRAY BARTOLOME DE LAS CASA', 16, 'ALTA VERAPAZ'),
(1616, 'SANTA CATARINA LA TINTA', 16, 'ALTA VERAPAZ'),
(1617, 'RAXRUHA', 16, 'ALTA VERAPAZ'),
(1701, 'FLORES', 17, 'PETEN'),
(1702, 'SAN JOSE', 17, 'PETEN'),
(1703, 'SAN BENITO', 17, 'PETEN'),
(1704, 'SAN ANDRES', 17, 'PETEN'),
(1705, 'LA LIBERTAD', 17, 'PETEN'),
(1706, 'SAN FRANCISCO', 17, 'PETEN'),
(1707, 'SANTA ANA', 17, 'PETEN'),
(1708, 'DOLORES', 17, 'PETEN'),
(1709, 'SAN LUIS', 17, 'PETEN'),
(1710, 'SAYAXCHE', 17, 'PETEN'),
(1711, 'MELCHOR DE MENCOS', 17, 'PETEN'),
(1712, 'POPTUN', 17, 'PETEN'),
(1713, 'LAS CRUCES', 17, 'PETEN'),
(1801, 'PUERTO BARRIOS', 18, 'IZABAL'),
(1802, 'LIVINGSTON', 18, 'IZABAL'),
(1803, 'EL ESTOR', 18, 'IZABAL'),
(1804, 'MORALES', 18, 'IZABAL'),
(1805, 'LOS AMATES', 18, 'IZABAL'),
(1901, 'ZACAPA', 19, 'ZACAPA'),
(1902, 'ESTANZUELA', 19, 'ZACAPA'),
(1903, 'RIO HONDO', 19, 'ZACAPA'),
(1904, 'GUALAN', 19, 'ZACAPA'),
(1905, 'TECULUTAN', 19, 'ZACAPA'),
(1906, 'USUMATLAN', 19, 'ZACAPA'),
(1907, 'CABA', 19, 'ZACAPA'),
(1908, 'SAN DIEGO', 19, 'ZACAPA'),
(1909, 'LA UNION', 19, 'ZACAPA'),
(1910, 'HUITE', 19, 'ZACAPA'),
(2001, 'CHIQUIMULA', 20, 'CHIQUIMULA'),
(2002, 'SAN JOSE LA ARADA', 20, 'CHIQUIMULA'),
(2003, 'SAN JUAN ERMITA', 20, 'CHIQUIMULA'),
(2004, 'JOCOTAN', 20, 'CHIQUIMULA'),
(2005, 'CAMOTAN', 20, 'CHIQUIMULA'),
(2006, 'OLOPA', 20, 'CHIQUIMULA'),
(2007, 'ESQUIPULAS', 20, 'CHIQUIMULA'),
(2008, 'CONCEPCION LAS MINAS', 20, 'CHIQUIMULA'),
(2009, 'QUETZALTEPEQUE', 20, 'CHIQUIMULA'),
(2010, 'SAN JACINTO', 20, 'CHIQUIMULA'),
(2011, 'IPALA', 20, 'CHIQUIMULA'),
(2101, 'JALAPA', 21, 'JALAPA'),
(2102, 'SAN PEDRO PINULA', 21, 'JALAPA'),
(2103, 'SAN LUIS JILOTEPEQUE', 21, 'JALAPA'),
(2104, 'SAN MANUEL CHAPARRON', 21, 'JALAPA'),
(2105, 'SAN CARLOS ALZATATE', 21, 'JALAPA'),
(2106, 'MONJAS', 21, 'JALAPA'),
(2107, 'MATAQUESCUINTLA', 21, 'JALAPA'),
(2201, 'JUTIAPA', 22, 'JUTIAPA'),
(2202, 'EL PROGRESO', 22, 'JUTIAPA'),
(2203, 'SANTA CATARINA MITA', 22, 'JUTIAPA'),
(2204, 'AGUA BLANCA', 22, 'JUTIAPA'),
(2205, 'ASUNCION MITA', 22, 'JUTIAPA'),
(2206, 'YUPILTEPEQUE', 22, 'JUTIAPA'),
(2207, 'ATESCATEMPA', 22, 'JUTIAPA'),
(2208, 'JEREZ', 22, 'JUTIAPA'),
(2209, 'EL ADELANTO', 22, 'JUTIAPA'),
(2210, 'ZAPOTITLAN', 22, 'JUTIAPA'),
(2211, 'COMAPA', 22, 'JUTIAPA'),
(2212, 'JALPATAGUA', 22, 'JUTIAPA'),
(2213, 'CONGUACO', 22, 'JUTIAPA'),
(2214, 'MOYUTA', 22, 'JUTIAPA'),
(2215, 'PASACO', 22, 'JUTIAPA'),
(2216, 'SAN JOSE ACATEMPA', 22, 'JUTIAPA'),
(2217, 'QUEZADA', 22, 'JUTIAPA');

-- --------------------------------------------------------

--
-- Table structure for table `ap_perfil`
--

CREATE TABLE `ap_perfil` (
  `id` int(4) NOT NULL,
  `fecha_cierre` date DEFAULT NULL,
  `fecha_vence` date DEFAULT NULL,
  `fecha_upago` date DEFAULT NULL,
  `ultima_ncobra` bigint(20) DEFAULT NULL,
  `ultimo_recibo_prov` bigint(20) DEFAULT NULL,
  `ultimo_recibo_cont` bigint(20) DEFAULT NULL,
  `ultima_factura` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `convenio_bi` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `mensaje1` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `mensaje2` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `autorizacion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `institucion` int(4) DEFAULT NULL,
  `nombre` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `logo_cond` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `sitio` varchar(150) COLLATE utf8_bin NOT NULL,
  `moneda` int(4) NOT NULL DEFAULT '1',
  `saldo_minimo` decimal(11,2) NOT NULL,
  `dia_corte` int(2) NOT NULL,
  `estatus` int(4) NOT NULL,
  `cambio_usd` decimal(11,2) NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_bin NOT NULL,
  `direccion_docs` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono_docs` varchar(25) COLLATE utf8_bin NOT NULL,
  `nit_docs` varchar(15) COLLATE utf8_bin NOT NULL,
  `logo_print` varchar(150) COLLATE utf8_bin NOT NULL,
  `tamanio_reqcobro` varchar(25) COLLATE utf8_bin NOT NULL,
  `tamanio_cotizacion` varchar(25) COLLATE utf8_bin NOT NULL,
  `ultima_cotizacion` bigint(20) NOT NULL,
  `autorizacion_fiscal` varchar(255) COLLATE utf8_bin NOT NULL,
  `mensaje3` varchar(255) COLLATE utf8_bin NOT NULL,
  `mensaje4` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_cambio_usd` datetime NOT NULL,
  `imp_qrcod` varchar(1) COLLATE utf8_bin NOT NULL,
  `imp_barcod` varchar(1) COLLATE utf8_bin NOT NULL,
  `imp_recsup` varchar(1) COLLATE utf8_bin NOT NULL,
  `imp_recinf` varchar(1) COLLATE utf8_bin NOT NULL,
  `imp_estatus` varchar(1) COLLATE utf8_bin NOT NULL,
  `ultima_ot` bigint(20) NOT NULL,
  `imp_ot_doble` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Información para el cierre mensual de condominio';

--
-- Dumping data for table `ap_perfil`
--

INSERT INTO `ap_perfil` (`id`, `fecha_cierre`, `fecha_vence`, `fecha_upago`, `ultima_ncobra`, `ultimo_recibo_prov`, `ultimo_recibo_cont`, `ultima_factura`, `convenio_bi`, `mensaje1`, `mensaje2`, `autorizacion`, `institucion`, `nombre`, `logo_cond`, `sitio`, `moneda`, `saldo_minimo`, `dia_corte`, `estatus`, `cambio_usd`, `razon_social`, `direccion_docs`, `telefono_docs`, `nit_docs`, `logo_print`, `tamanio_reqcobro`, `tamanio_cotizacion`, `ultima_cotizacion`, `autorizacion_fiscal`, `mensaje3`, `mensaje4`, `fecha_cambio_usd`, `imp_qrcod`, `imp_barcod`, `imp_recsup`, `imp_recinf`, `imp_estatus`, `ultima_ot`, `imp_ot_doble`) VALUES
(1, '2015-04-30', '2015-05-10', '2015-05-10', 0, 0, 0, '0', '1410', 'Gracias por su pago puntual', 'Cheque rechazado tendra un recargo de Q100.00', '189', 2, 'Oficinas Tec I', 'inmobiges_int_bl.png', 'inmobiges.e.gt', 1, '2500.00', 10, 1, '7.82', 'INVERSIONES TZAGUACAL, SOCIEDAD ANÓNIMA', 'Via 2, 1-34 zona 4, Guatemala', '25018500', '169639-4', 'inmobiges_logo_cl.png', '', '', 0, 'NO RETENER, Autorizado Pago Directo ISR, Resolución SAT No. 5794120620141', '', '', '0000-00-00 00:00:00', '1', '1', '1', '1', '', 0, ''),
(2, '2015-04-30', '2015-05-10', '2015-05-10', 0, 0, 0, '0', '12345', 'Gracias por estar al dia en sus cuotas', 'Cheque rechazado tendra un recargo de Q100.00', '189', 2, 'Aceleradora de Negocios', 'inmobiges_int_bl.png', 'inmobiges.e.gt', 1, '1000.00', 10, 1, '7.82', 'INVERSIONES TZAGUACAL, SOCIEDAD ANÓNIMA', 'Via 2, 1-34 zona 4, Guatemala', '25018500', '169639-4', 'inmobiges_logo_cl.png', '', '', 0, 'NO RETENER, Autorizado Pago Directo ISR, Resolución SAT No. 5794120620141', '', '', '0000-00-00 00:00:00', '1', '1', '1', '1', '', 0, ''),
(3, '2015-04-30', '0000-00-00', '2015-05-10', 0, 0, 0, '0', '12345', 'Gracias por estar al dia en sus cuotas', 'Cheque rechazado tendra un recargo de Q100.00', '189', 2, 'Incubadora de Negocios', 'inmobiges_int_bl.png', 'inmobiges.e.gt', 1, '600.00', 10, 1, '7.82', 'INVERSIONES TZAGUACAL, SOCIEDAD ANÓNIMA', 'Via 2, 1-34 zona 4, Guatemala', '25018500', '169639-4', 'inmobiges_logo_cl.png', '', '', 0, 'NO RETENER, Autorizado Pago Directo ISR, Resolución SAT No. 5794120620141', '', '', '0000-00-00 00:00:00', '1', '2', '2', '2', '', 0, ''),
(4, '2015-04-30', '2015-05-10', '2015-05-10', 0, 0, 0, '0', '12345', 'Gracias por estar al dia en sus cuotas', 'Cheque rechazado tendra un recargo de Q100.00', '189', 2, 'Area de Coworking', 'inmobiges_int_bl.png', 'inmobiges.e.gt', 1, '500.00', 10, 1, '7.82', 'INVERSIONES TZAGUACAL, SOCIEDAD ANÓNIMA', 'Via 2, 1-34 zona 4, Guatemala', '25018500', '169639-4', 'inmobiges_logo_cl.png', '', '', 0, 'NO RETENER, Autorizado Pago Directo ISR, Resolución SAT No. 5794120620141', '', '', '0000-00-00 00:00:00', '1', '1', '1', '1', '', 0, ''),
(5, '2015-04-30', '2015-05-10', '2015-05-10', 0, 0, 0, '0', '12345', 'Gracias por estar al dia en sus cuotas', 'Cheque rechazado tendra un recargo de Q100.00', '189', 2, 'Oficinas Virtuales', 'inmobiges_int_bl.png', 'inmobiges.e.gt', 1, '290.00', 10, 1, '7.82', 'INVERSIONES TZAGUACAL, SOCIEDAD ANÓNIMA', 'Via 2, 1-34 zona 4, Guatemala', '25018500', '169639-4', 'inmobiges_logo_cl.png', '', '', 0, 'NO RETENER, Autorizado Pago Directo ISR, Resolución SAT No. 5794120620141', '', '', '0000-00-00 00:00:00', '1', '1', '1', '1', '', 0, ''),
(6, '2015-04-30', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', '', '', 2, 'Data Center Tec I', '', '', 2, '500.00', 10, 1, '7.86', '', '', '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', 0, ''),
(7, '2015-04-30', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', '', '', 2, 'Clientes Transitorios', '', '', 1, '500.00', 10, 2, '7.86', '', '', '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ap_seccion`
--

CREATE TABLE `ap_seccion` (
  `id` int(4) NOT NULL,
  `unidad` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `nombre_corto` varchar(15) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ap_seccion`
--

INSERT INTO `ap_seccion` (`id`, `unidad`, `institucion`, `nombre`, `nombre_corto`) VALUES
(1, 1, 1, 'Gerencia General', 'G General'),
(2, 1, 1, 'Gerencia de RR HH', 'G RRHH'),
(3, 1, 1, 'Gerencia Financiera', 'G Finan'),
(4, 2, 1, 'Ventas', 'Ventas'),
(5, 2, 1, 'Cobros', 'Cobros'),
(6, 2, 1, 'Segimiento de Contratos', 'Contratos');

-- --------------------------------------------------------

--
-- Table structure for table `ap_tipo_catalogos`
--

CREATE TABLE `ap_tipo_catalogos` (
  `idtipo` tinyint(4) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `institucion` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ap_tipo_catalogos`
--

INSERT INTO `ap_tipo_catalogos` (`idtipo`, `nombre`, `institucion`) VALUES
(1, 'Meses del Año', 1),
(2, 'Nivel de Usuario', 1),
(3, 'Estatus de Aplicacion', 1),
(4, 'Tipo de Institución', 1),
(5, 'Paises', 1),
(6, 'Genero', 1),
(7, 'Estatus de Inmueble', 1),
(8, 'Estatus de Expediente', 1),
(9, 'Tipos de Referencia', 1),
(10, 'Tipo de Producto', 1),
(11, 'Tipos de Propiedad', 1),
(12, 'Parentesco', 1),
(13, 'Tipo de Personal', 1),
(14, 'Actividad', 1),
(15, 'Estado Civil', 1),
(16, 'Jardin', 1),
(17, 'Edificio', 1),
(18, 'Tipo de Cliente', 1),
(19, 'Tipo de Operacion', 1),
(20, 'Forma de Pago', 1),
(21, 'Banco o Emisor', 1),
(22, 'Tipo de Cuenta en Banco', 1),
(23, 'Cuotas de Enganche', 1),
(24, 'Cuotas de Pago', 1),
(25, 'Tipo de Soporte', 1),
(26, 'Tipo de Destino', 1),
(27, 'Moneda', 1),
(28, 'Tipos de Documentos Administrativos', 1),
(29, 'Categoria de Calendario', 1),
(30, 'Colores en Calendario', 1),
(31, 'Area de Gasto', 1),
(32, 'Destino de Gasto', 1),
(33, 'Empresas / Gastos', 1),
(34, 'Proyectos / Gastos', 1),
(35, 'Estatus de Solicitud de Gastos', 1),
(36, 'Estatus de Evento', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ap_unidad`
--

CREATE TABLE `ap_unidad` (
  `id` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre_corto` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `condominio` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ap_unidad`
--

INSERT INTO `ap_unidad` (`id`, `institucion`, `nombre`, `nombre_corto`, `condominio`) VALUES
(1, 1, 'Administración', 'Admon', 0),
(2, 1, 'Unidad de Operaciones', 'Operaciones', 0),
(3, 1, 'Dirección Comercial', 'Comercial', 0),
(4, 1, 'Administracion del Condominio', 'Administracion', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ap_usuarios`
--

CREATE TABLE `ap_usuarios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `contrato` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `nick` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `nombre2` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `apellido2` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `apellido3` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `igss` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `irtra` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `licencia` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `licencia_tipo` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `permiso` int(4) NOT NULL DEFAULT '1',
  `institucion` int(4) DEFAULT NULL,
  `condominios` varchar(15) COLLATE utf8_bin NOT NULL,
  `foto` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `genero` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `dpi` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `nit` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tipoper` int(4) DEFAULT NULL,
  `calendario1` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `calendario2` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` mediumtext COLLATE utf8_bin,
  `actividad` int(4) DEFAULT '0',
  `estatus` int(4) NOT NULL DEFAULT '1',
  `estado_civil` int(4) DEFAULT NULL,
  `conyugue` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `unidad` int(4) DEFAULT NULL,
  `seccion` int(4) DEFAULT NULL,
  `salario_base` decimal(11,2) DEFAULT NULL,
  `bono_incentivo` decimal(11,2) DEFAULT NULL,
  `bono_14` decimal(11,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ap_usuarios`
--

INSERT INTO `ap_usuarios` (`id`, `codigo`, `contrato`, `nick`, `password`, `nombre`, `apellido`, `nombre2`, `apellido2`, `apellido3`, `igss`, `irtra`, `licencia`, `licencia_tipo`, `email`, `celular`, `cargo`, `permiso`, `institucion`, `condominios`, `foto`, `nacimiento`, `genero`, `dpi`, `nit`, `direccion`, `tipoper`, `calendario1`, `calendario2`, `observaciones`, `actividad`, `estatus`, `estado_civil`, `conyugue`, `unidad`, `seccion`, `salario_base`, `bono_incentivo`, `bono_14`) VALUES
(1, '', '', 'perry@insayd.com', 'javirala', 'Perry', 'Daniels', 'Lee', 'Herrera', '', '', '', '', '', 'perrydaniels@insayd.com', '41786953', 'Administrador de Sistemas', 1, 1, '1', 'cuadro.png', '1970-01-14', 'M', '199973641409', '716623-0', '', 7, 'https://www.google.com/calendar/feeds/insayd.com_b56qperuus01ou49cikatotv58%40group.calendar.google.com/public/basic', 'https://www.google.com/calendar/feeds/insayd.com_3angjru7jii1e692vav2bb5e0g%40group.calendar.google.com/public/basic', '', 0, 1, 2, 'Claudia Emilia Celada de Daniels', 0, 0, '0.00', '0.00', '0.00'),
(2, '', '', 'william.cuc@insayd.com', 'javirala', 'William', 'Cuc', 'Osbelí', 'García', '', '', '', '', '', '', '', 'Soporte Técnico Insayd', 1, 1, '1', '', '0000-00-00', 'M', '', '', '', 7, '', '', '', 0, 1, 1, '', 0, 0, '0.00', '0.00', '0.00'),
(3, '', '', 'rmedina@apolo.gt', '123456', 'Rossy', 'Medina', '', '', '', '', '', '', '', '', '', 'Administrador del Sistema', 2, 2, '1', '', '0000-00-00', 'F', '', '', '', 4, '', '', '', 0, 1, 2, '', 0, 1, '0.00', '0.00', '0.00'),
(4, '', '', 'claudia@tec.com.gt', '123456', 'Claudia', 'Celada', 'Emilia', '', 'de Daniels', '', '', '', '', 'claudia@insayd.com', '', 'Social Media Manager', 4, 2, '2', '', '0000-00-00', 'F', '', '', '', 4, '', '', '', 0, 1, 2, '', 0, 1, '0.00', '0.00', '0.00'),
(5, '', '', 'apacheco@apolo.gt', '123456', 'Anaité', 'Pacheco', '', '', '', '', '', '', '', '', '', 'Ventas', 3, 2, '1', '', '0000-00-00', 'F', '', '', '', 4, '', '', '', 0, 1, 1, '', 0, 4, '0.00', '0.00', '0.00'),
(6, '', '', 'silvia.polanco.k@gmail.com', '123456', 'Silvia', 'Polanco', '', '', '', '', '', '', '', '', '', 'Administración', 3, 2, '1', '', '0000-00-00', 'F', '', '', '', 1, '', '', '', 0, 1, 2, '', 0, 1, '0.00', '0.00', '0.00'),
(7, '', '', 'juanmini@gmail.com', '123456', 'Juan', 'Mini', '', '', '', '', '', '', '', '', '', 'Gerente General', 3, 2, '1', '', '0000-00-00', 'M', '', '', '', 1, '', '', '', 0, 1, 2, '', 0, 1, '0.00', '0.00', '0.00'),
(8, '', '', 'vivian@tec.com.gt', '123456', 'Vivian', '', '', '', '', '', '', '', '', '', '', 'Asistente de Ventas', 5, 2, '5', '', '0000-00-00', 'F', '', '', '', 4, '', '', '', 0, 1, 1, '', 0, 4, '0.00', '0.00', '0.00'),
(9, '', '', 'test@dev.com', 'test', '', '', '', '', '', '', '', '', '', '', '', '', 1, 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '', 0, 1, 0, '', 0, 0, '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `av_datos_personales`
--

CREATE TABLE `av_datos_personales` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nombre2` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `apellido2` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `apellido3` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dpi` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nacionalidad` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `genero` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `vecindad` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estado_civil` int(4) DEFAULT NULL,
  `profesion` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `av_datos_servicios`
--

CREATE TABLE `av_datos_servicios` (
  `id` int(11) NOT NULL,
  `grado_militar` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `compañia` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `puesto` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `motivo_baja` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `computo_servicios` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sueldo_mensual` decimal(11,2) DEFAULT NULL,
  `zona_militar` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ig_agua`
--

CREATE TABLE `ig_agua` (
  `id` bigint(20) NOT NULL,
  `codigo` varchar(11) COLLATE utf8_bin NOT NULL,
  `lectura` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `estatus` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `obs` mediumtext COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ig_areas`
--

CREATE TABLE `ig_areas` (
  `id` int(11) NOT NULL,
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `lugar` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `capacidad` int(11) DEFAULT '0',
  `caracteristicas` text COLLATE utf8_bin,
  `valor` decimal(11,2) NOT NULL,
  `esfijo` int(11) NOT NULL,
  `observaciones` text COLLATE utf8_bin,
  `color` varchar(10) COLLATE utf8_bin DEFAULT '#00BCFF',
  `colortexto` varchar(10) COLLATE utf8_bin DEFAULT '#ffffff',
  `productoid` int(11) DEFAULT NULL,
  `estatus` int(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_areas`
--

INSERT INTO `ig_areas` (`id`, `institucion`, `condominio`, `nombre`, `lugar`, `capacidad`, `caracteristicas`, `valor`, `esfijo`, `observaciones`, `color`, `colortexto`, `productoid`, `estatus`) VALUES
(1, 2, 1, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '50.00', 1, '', 'event-rojo', '#ffffff', 3, 1),
(2, 2, 1, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '35.00', 1, '', 'event-azul', '#ffffff', 3, 1),
(3, 2, 1, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '100.00', 1, '', 'event-verd', '#ffffff', 3, 1),
(4, 2, 1, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '20.00', 1, '', 'event-cana', '#ffffff', 3, 1),
(5, 2, 2, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '50.00', 1, '', 'event-rojo', '#ffffff', 20, 1),
(6, 2, 2, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '35.00', 1, '', 'event-azul', '#ffffff', 20, 1),
(7, 2, 2, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '100.00', 1, '', 'event-verd', '#ffffff', 20, 1),
(8, 2, 2, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '20.00', 1, '', 'event-cana', '#ffffff', 20, 1),
(9, 2, 3, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '50.00', 1, '', 'event-rojo', '#ffffff', 37, 1),
(10, 2, 3, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '35.00', 1, '', 'event-azul', '#ffffff', 37, 1),
(11, 2, 3, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '100.00', 1, '', 'event-verd', '#ffffff', 37, 1),
(12, 2, 3, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '20.00', 1, '', 'event-cana', '#ffffff', 37, 1),
(13, 2, 4, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '50.00', 1, '', 'event-rojo', '#ffffff', 54, 1),
(14, 2, 4, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '35.00', 1, '', 'event-azul', '#ffffff', 54, 1),
(15, 2, 4, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '100.00', 1, '', 'event-verd', '#ffffff', 54, 1),
(16, 2, 4, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '20.00', 1, '', 'event-cana', '#ffffff', 54, 1),
(17, 2, 5, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '50.00', 1, '', 'event-rojo', '#ffffff', 71, 1),
(18, 2, 5, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '35.00', 1, '', 'event-azul', '#ffffff', 71, 1),
(19, 2, 5, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '100.00', 1, '', 'event-verd', '#ffffff', 71, 1),
(20, 2, 5, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '20.00', 1, '', 'event-cana', '#ffffff', 71, 1),
(21, 2, 6, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '50.00', 1, '', 'event-rojo', '#ffffff', 87, 1),
(22, 2, 6, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '35.00', 1, '', 'event-azul', '#ffffff', 87, 1),
(23, 2, 6, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '100.00', 1, '', 'event-verd', '#ffffff', 87, 1),
(24, 2, 6, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '20.00', 1, '', 'event-cana', '#ffffff', 87, 1),
(25, 2, 7, 'Sala de Conferencias', 'Aceleradora de Negocios', 15, 'Con Proyector y Pantalla blanca', '150.00', 1, '', 'event-rojo', '#ffffff', 103, 1),
(26, 2, 7, 'Sala de Brainstorming / Hora', 'Aceleradora de Negocios', 6, 'Área pequeña mesa redonda, pizarra para yeso, proyector', '80.00', 1, '', 'event-azul', '#ffffff', 103, 1),
(27, 2, 7, 'E-Garage', 'Nivel 2', 50, 'Sillas, Mesas y Proyector', '300.00', 1, '', 'event-verd', '#ffffff', 103, 1),
(28, 2, 7, 'Area de Coworking / hora / persona', 'Incubadora de Negocios', 15, 'Area de Coworking / hora / persona', '50.00', 1, '', 'event-cana', '#ffffff', 103, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ig_bancos`
--

CREATE TABLE `ig_bancos` (
  `id` int(4) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL,
  `siglas` varchar(15) COLLATE utf8_bin NOT NULL,
  `cuenta` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `tipo_cuenta` int(4) DEFAULT NULL,
  `contacto` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `codigo` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `email` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `estatus` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_bancos`
--

INSERT INTO `ig_bancos` (`id`, `nombre`, `siglas`, `cuenta`, `tipo_cuenta`, `contacto`, `codigo`, `telefono`, `institucion`, `condominio`, `email`, `estatus`) VALUES
(1, 'Banco G&T Continental', 'G&T', '23232332-2', 2, '', '123', '', 2, 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ig_casas`
--

CREATE TABLE `ig_casas` (
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `contador` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `condominio` int(4) NOT NULL DEFAULT '0',
  `codsec` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codcasa` int(11) DEFAULT NULL,
  `cliente` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `telcasa` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nit` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cobrador` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `obs1` mediumtext COLLATE utf8_bin,
  `status` int(4) DEFAULT '1',
  `stiker` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `fecha_socio` date DEFAULT NULL,
  `cantpaja` int(11) DEFAULT NULL,
  `preagua` decimal(11,2) DEFAULT NULL,
  `metros` decimal(11,5) DEFAULT NULL,
  `cargos` decimal(11,2) NOT NULL DEFAULT '0.00',
  `ultlectu` decimal(11,2) DEFAULT NULL,
  `fechulect` date DEFAULT NULL,
  `pagos` decimal(11,2) NOT NULL DEFAULT '0.00',
  `habitada` int(4) DEFAULT '1',
  `asociado` int(4) DEFAULT NULL,
  `convenio` int(4) DEFAULT NULL,
  `alquilada` int(4) NOT NULL DEFAULT '2',
  `basura` int(4) NOT NULL DEFAULT '2',
  `npropietario` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `nombrecomercial` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `celprop` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `correoe` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `u_cobro` bigint(20) DEFAULT NULL,
  `u_recibo` bigint(20) DEFAULT NULL,
  `institucion` int(4) NOT NULL,
  `moneda` int(4) NOT NULL DEFAULT '1',
  `dpi` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `tipoper` int(4) DEFAULT '3',
  `tipoalquiler` int(4) DEFAULT NULL,
  `precioventa` decimal(11,2) DEFAULT NULL,
  `precioalquiler` decimal(11,2) DEFAULT NULL,
  `metrosconstruc` decimal(11,2) DEFAULT NULL,
  `servicios` int(4) DEFAULT NULL,
  `br_autorizado` decimal(11,2) DEFAULT NULL,
  `ualta` varchar(25) COLLATE utf8_bin NOT NULL DEFAULT '',
  `falta` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Información general de casas';

--
-- Dumping data for table `ig_casas`
--

INSERT INTO `ig_casas` (`codigo`, `contador`, `condominio`, `codsec`, `codcasa`, `cliente`, `nombre`, `direccion`, `telcasa`, `nit`, `cobrador`, `obs1`, `status`, `stiker`, `fecha_socio`, `cantpaja`, `preagua`, `metros`, `cargos`, `ultlectu`, `fechulect`, `pagos`, `habitada`, `asociado`, `convenio`, `alquilada`, `basura`, `npropietario`, `nombrecomercial`, `celprop`, `correoe`, `u_cobro`, `u_recibo`, `institucion`, `moneda`, `dpi`, `tipoper`, `tipoalquiler`, `precioventa`, `precioalquiler`, `metrosconstruc`, `servicios`, `br_autorizado`, `ualta`, `falta`) VALUES
('TEC1304', '', 1, 'Nivel 3', 304, 'C000731', 'STARTRACK, S.A.', 'EDIF. CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4', '2312-4242', '3738300-0', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-24', '0.00', 1, 1, 2, 1, 2, 'JUAN PABLO LISKA', NULL, '', 'jp@stsa.info', 0, 0, 2, 1, '', 0, 3, '0.00', '10755.31', '0.00', 0, '2016.63', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1205', '', 1, 'Nivel 2', 205, 'C000733', 'INTERNACIONAL BUSINESS ACADEMY, S.A.', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '2381-0800', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '19653.89', '0.00', '2015-05-23', '6539.99', 1, 1, 2, 1, 2, 'TREVOR CLAYTON', NULL, '', 'trevor@ibagua.biz', 0, 0, 2, 1, '', 0, 8, '0.00', '3500.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1503', '', 1, 'Nivel 5', 503, 'C001306', 'Generando Soluciones Analíticas, S. A.', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '2328-7900', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 3, '0.00', '3500.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1602', '', 1, 'Nivel 6', 602, NULL, 'HBND.TV', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 5, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1109', '', 1, 'Nivel 1', 109, 'C000738', 'ACTUALIZA, S.A.', '5ta. Avenida 15-45 zona 10', '2381-0860', '5944175-5', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '6377.93', '0.00', '2015-05-23', '3259.93', 1, 1, 2, 1, 2, 'RUDY ACEVEDO', '', '', 'racevedo@actualizaweb.com', 0, 0, 2, 2, '', 0, 3, '0.00', '359.56', '0.00', 0, '63.45', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1202', '', 1, 'Nivel 2', 202, 'C000765', 'CYBER SEGURIDAD, S.A.', 'EDIF. CAMPUS TECNOLOGICO 1 VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4', '2360-2700', '', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '19602.76', '0.00', '2015-06-03', '9744.65', 1, 1, 1, 1, 2, 'OSCAR ACEVEDO', '', '', 'oacevedo@cyberseg.com', 0, 0, 2, 2, '', 0, 2, '0.00', '1059.03', '0.00', 0, '201.60', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1703', '', 1, 'Nivel 7', 703, 'C000830', 'TECH4MOBILE, S.A.', 'EDIF. CAMPUS TEC 1, OFIC. 703-704 VIA 4 1-30 Y RUTA 2 3-63 ESQ Z.4', '2360-1923', '6247051-5', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '34877.15', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, 'VLADIMIR GONZALEZ', '', '', 'vladimir@tech4mobile.net', 0, 0, 2, 2, '', 0, 3, '0.00', '284.67', '0.00', 0, '108.44', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1108', '', 1, 'Nivel 1', 108, 'C000888', 'LOLIPOP, S.A.', '4A. AVE 23-55 ZONA 14, EDIFICIO REAL DE LA AMERICAS APOTO 20', '2381-0860', '7824758-6', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '2966.73', '0.00', '2015-06-01', '2966.73', 1, 1, 2, 1, 2, 'CLAUDIA GOYZUETA', '', '', 'lolita@lolipop.com.gt', 0, 0, 2, 2, '', 0, 5, '0.00', '307.11', '0.00', 0, '72.26', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1401', '', 1, 'Nivel 4', 401, 'C000868', 'BROADCOM GROUP, S.A.', 'OFIC.401 NIVEL 4, EDIF. CAMPUS TEC 1 VIA 4 1-30 Y R.2 3-63 ESQ. Z.4', '2375-2100', '7465006-8', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '24714.78', '0.00', '2015-05-23', '12285.87', 1, 1, 2, 1, 2, 'JUAN CARLOS MENDEZ', '', '', 'jcmendez@broadcomguatemala.com', 0, 0, 2, 2, '', 0, 3, '0.00', '1335.07', '0.00', 0, '240.30', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1106', '', 1, 'Nivel 1', 106, 'C000884', 'MIRNA FERNANDA PINEDA ALDANA', 'CIUDAD', '2331-2525', '', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '5743.66', '0.00', '2015-05-22', '0.00', 1, 1, 2, 1, 2, 'MIRNA FERNANDA PINEDA ALDANA', '', '', 'equipo@dgraphicgt.com', 0, 0, 2, 2, '', 0, 5, '0.00', '308.09', '0.00', 0, '58.68', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN007', '', 2, 'ADN', 7, 'C001230', 'PERRY LEE DANIELS H.', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '23810869', '716623-0', '', '', 1, '', NULL, 0, '0.00', '0.00000', '6735.00', '0.00', '2015-05-22', '0.00', 1, 2, 2, 1, 2, 'PERRY LEE DANIELS', NULL, '41786953', 'perry@insayd.com', 0, 0, 2, 1, '', 0, 3, '0.00', '1354.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('IDN001', '', 3, 'IDN', 1, 'C002345', 'JAMES GERALD LEON', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, 'JAMES GERALD LEON', NULL, '', '', 0, 0, 2, 1, '', 0, 3, '0.00', '550.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1105', '', 1, 'Nivel 1', 105, 'C000831', 'LA CORRIDA DE INSURGENTES', 'EDIF. CAQMPUS TEC 1, LOCAL 105, VIA 4 1-30 Y RUTA 2 3-63 ESQ ZONA 4', '', '1212488-5', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '2969.93', '0.00', '2015-05-22', '0.00', 1, 2, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 4, '0.00', '319.02', '0.00', 0, '60.76', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1601', '', 1, 'Nivel 6', 601, 'C000314', 'INSIGHTS, S.A.', 'VIA 4 3-63 CENTRO COMERCIAL VIA ZANETTO NIVEL 1, ZONA 4', '', '5082040-0', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '27631.87', '0.00', '2015-06-03', '27631.80', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 5, '0.00', '2826.79', '0.00', 0, '706.70', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1107', '', 1, 'Nivel 1', 107, 'C000888', 'LOLIPOP, S.A.', '4A. AVE 23-55 ZONA 14, EDIFICIO REAL DE LA AMERICAS APOTO 20', '2381-0860', '7824758-6', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '3527.06', '0.00', '2015-06-01', '3527.06', 1, 1, 2, 1, 2, 'CLAUDIA GOYZUETA', '', '', 'lolita@lolipop.com.gt', 0, 0, 2, 2, '', 0, 5, '0.00', '383.38', '0.00', 0, '67.65', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1104', '', 1, 'Nivel 1', 104, 'C000773', 'MARY CRUZ RAMIREZ GRAJEDA', 'VIA 4 1-30 ZONA 4, OFICINA 104, EDIFICIO CAMPUS TECNOLOGICO, GUATEMALA, GUATEMALA', '', '1250678-8', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '6240.63', '0.00', '2015-06-01', '3010.29', 1, 2, 2, 1, 2, 'Bocetos', '', '', '', 0, 0, 2, 2, '', 0, 5, '0.00', '331.02', '0.00', 0, '58.41', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1702', '', 1, 'Nivel 7', 702, 'C001210', 'POSMOVIL, S.A.', 'VIA 4 1-30 ZONA 4, OFICINA 104, EDIFICIO CAMPUS TEC, NIV 7, OFIC. 802, GUATEMALA', '', '7899479-9', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '6793.94', '0.00', '2015-06-03', '6793.94', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '738.47', '0.00', 0, '130.32', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1502', '', 1, 'Nivel 5', 502, 'C001097', 'ASOCIACION CIUDADES SEGURAS', 'EDIFICIO CAMPUS TEC, VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4', '', '7700761-1', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '3090.19', '0.00', '2015-05-22', '0.00', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '0.00', '0.00', 0, '132.85', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1301', '', 1, 'Nivel 3', 301, 'C001284', 'GOMOBIL CORP, SOCIEDAD ANONIMA. ', '8A. AVE OF. 3A, LA RAMBLA, 3-90 ZONA 14, GUATEMALA, GUATEMALA', '', '8192722-3', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '8887.29', '0.00', '2015-06-01', '8907.29', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '1012.48', '0.00', 0, '124.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1207', '', 1, 'Nivel 2', 207, 'C001199', 'ROGELIO JOSE DAVILA VALENCIA', 'EDIF. CAMPUS TEC 1, VIA 4 1-30 Y RUTA 2 3-63 ESQ. Z.4, 2DO NIV OFIC. 207', '', '6882821-7', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '3079.45', '0.00', '2015-05-23', '3079.45', 1, 1, 2, 1, 2, 'ROGELIO JOSE DAVILA VALENCIA', '', '', '', 0, 0, 2, 2, '', 0, 4, '0.00', '315.03', '0.00', 0, '78.76', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1305', '', 1, 'Nivel 3', 305, 'C001254', 'MERCADOWEB, S.A.', '3A. AVENIDA 8-36 ZONA 10, GUATEMALA, GUATEMALA', '', '8635029-3', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '1955.32', '0.00', '2015-05-23', '1955.32', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 2, '0.00', '210.56', '0.00', 0, '39.48', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1501', '', 1, 'Nivel 5', 501, 'C000736', 'SOLUCIONWEB, S.A.', 'EDIF. CAMPUS TECNOLOGICO 1 VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4', '', '2374019-1', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '61679.65', '0.00', '2015-06-01', '20378.68', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '2186.10', '0.00', 0, '457.04', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1204', '', 1, 'Nivel 2', 204, 'C001314', 'JORGE DANIEL LOPEZ MEDRANO ', 'EDIF CAMPUS TEC 1 OFIC. 204. 2DO NIVEL. VIA 4 1-30 ZONA 4.', '', 'CF', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '10909.79', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '234.04', '0.00', 0, '43.88', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1603', '', 1, 'Nivel 6', 603, 'C001339', 'SEGA, SOCIEDAD ANONIMA.', '10A AVENIDA 30-57 ZONA 5 GUATEMALA, GUATEMALA', '', '', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '13078.91', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '1338.00', '0.00', 0, '334.50', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1105A', '', 1, 'Nivel 1', 105, 'C000872', 'SERGIO ALEJANDRO HEER GONZALEZ', 'CIUDAD', '', '959491-4', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '32080.89', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, 'SERGIO ALEJANDRO HEER GONZALEZ', '', '', '', 0, 0, 2, 2, '', 0, 5, '0.00', '577.38', '0.00', 0, '136.13', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1701', '', 1, 'Nivel 7', 701, 'C001330', 'ZONA WIFI, SOCIEDAD ANONIMA', '5A AVE 15-45 ZONA 10 EDIF EMPRESARIAL TORRE 1 OFICINA 603 GUATEMALA, GUATEMALA', '', '7928531-7', '', '', 1, '', NULL, 0, '0.00', '0.00000', '6068.70', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '620.84', '0.00', 0, '155.21', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1302', '', 1, 'Nivel 3', 302, 'C000237', 'ET PUBLICIDAD, S.A.', 'VIA 4 1-61 ZONA 4 PASAJE GABRIELA 3ER NIVEL 4 GRADOS NORTE', '', '4085754-9', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '1545.01', '0.00', '2015-06-01', '1545.01', 1, 1, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 5, '0.00', '0.00', '0.00', 0, '1545.01', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1402', '', 1, 'Nivel 4', 402, 'C000729', 'COMUNICACION INTERACTIVA, S.A.', 'EDIF. CAMPUS TECNOLOGICO 1 VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4 OFICINA 403', '', '4542676-7', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '12100.46', '0.00', '2015-05-23', '1212.50', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 1, '', 0, 5, '0.00', '1187.21', '0.00', 0, '205.11', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1403', '', 1, 'Nivel 4', 403, 'C000729', 'COMUNICACION INTERACTIVA, S.A.', 'EDIF. CAMPUS TECNOLOGICO 1 VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4 OFICINA 403', '', '4542676-7', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '16570.54', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 1, '', 0, 5, '0.00', '1806.83', '0.00', 0, '312.16', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1704', '', 1, 'Nivel 7', 704, 'C000830', 'TECH4MOBILE, S.A.', 'EDIFICIO CAMPUS TEC 1 OFICINA 704 VIA 4 1-30 Y RUTA 2 3-63 ESQUINA ZONA 4', '', '6247051-5', '', 'EDIFICIO CAMPUS TECNOLOGICO 1, VIA 4 1-30 Y RUTA 2 3-63  ESQUINA ZONA 4', 1, '', NULL, 0, '0.00', '0.00000', '11032.74', '0.00', '2015-05-23', '0.00', 1, 1, 2, 1, 2, '', '', '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '1194.20', '0.00', 0, '216.64', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN004', '', 2, 'ADN', 1, '', 'SALUD Y EDUCACION S. A.', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '', '76730-1', '', '', 1, '', NULL, 0, '0.00', '0.00000', '300.00', '0.00', '2015-06-01', '0.00', 1, 2, 2, 1, 2, 'Actualización Médica', NULL, '', '', 0, 0, 2, 1, '', 0, 8, '0.00', '1750.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN001', '', 2, 'ADN', 2, '', 'ASOCIACIÓN TEC GT', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '800.00', '0.00', '2015-06-01', '0.00', 1, 1, 2, 2, 2, 'ASOCIACIÓN TEC', 'AsoTecGt', '', '', 0, 0, 2, 1, '', 0, 6, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN003', '', 2, 'ADN', 3, 'C000732', 'OFFICIENT S. A.', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '2228.77', '0.00', '2015-05-24', '0.00', 1, 2, 2, 1, 2, 'OFFICIENT S. A.', '', '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN002', '', 2, 'ADN', 4, 'C000082', 'SOLTECORP, S. A.', '', '', '7416540-2', '', '', 1, '', NULL, 0, '0.00', '0.00000', '4602.74', '0.00', '2015-05-24', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 3, '0.00', '4602.74', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN005', '', 2, 'ADN', 5, 'C000082', 'SOLTECORP, S. A.', '', '', '7416540-2', '', 'Se paga junto con la oficina 2 de Aceleradora', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 3, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN008', '', 2, 'ADN', 8, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN006', NULL, 2, 'ADN', 6, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN009', '', 2, 'ADN', 9, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN010', '', 2, 'ADN', 10, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN011', '', 2, 'ADN', 11, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN012', '', 2, 'ADN', 12, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN013', '', 2, 'ADN', 13, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('ADN014', '', 2, 'ADN', 14, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1103', '', 1, 'Nivel 1', 103, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1110', '', 1, 'Nivel 1', 6, 'C000313', 'JULIA PATRICIA LAPARRA GALINDO', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, 'Optica Miro', '', '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '5255.04', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1206', '', 1, 'Nivel 2', 206, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('TEC1303', '', 1, 'Nivel 3', 303, NULL, '', '', '', '', '', '', 2, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 2, '0.00', '0.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('DCT1001', '', 6, 'DCT', 1, 'C001208', 'BLUE FUSION S. A.', '', '', '8378659-7', '', '', 1, '', NULL, 0, '0.00', '0.00000', '2314.50', '0.00', '2015-05-22', '0.00', 1, 2, 2, 1, 2, 'BLUE FUSION S. A.', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '225.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('DCT1002', '', 6, 'DCT', 2, 'C000765', 'CYBER SEGURIDAD, S.A.', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, 'OSCAR ACEVEDO', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '75.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('DCT1003', '', 6, 'DCT', 3, 'C000732', 'OFFICIENT S. A.', '', '', '4779516-6', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-01', '0.00', 1, 2, 2, 1, 2, 'OFFICIENT S. A.', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '75.00', '0.00', 0, '0.00', 'perry@insayd.com', '2015-05-19 16:21:18'),
('555fa7823da93', '0', 7, 'externo', 0, 'C001309', 'HECTOR DURAN', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '100.00', '0.00', '2015-05-22', '0.00', 2, 2, 2, 2, 2, 'HECTOR DURAN', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('555fa6d4a3459', '0', 7, 'externo', 0, 'C001300', 'BPO TELECOM, S.A.', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '150.00', '0.00', '2015-05-22', '0.00', 2, 2, 2, 2, 2, 'BPO TELECOM, S.A.', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('555fa65a314d1', '0', 7, 'externo', 0, 'C001297', 'MARIA MERCEDES HERRERA', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '150.00', '0.00', '2015-05-22', '0.00', 2, 2, 2, 2, 2, 'MARIA MERCEDES HERRERA', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('555fa5aa5c316', '0', 7, 'externo', 0, 'C001296', 'RADIO INTELIGENTE, S.A.', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '300.00', '0.00', '2015-05-22', '0.00', 2, 2, 2, 2, 2, 'RADIO INTELIGENTE, S.A.', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('555fa4e677482', '0', 7, 'externo', 0, 'C001273', 'SERTERIN, S.A.', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '245.00', '0.00', '2015-05-22', '0.00', 2, 2, 2, 2, 2, 'SERTERIN, S.A.', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('555f9f7ee71af', '0', 7, 'externo', 0, 'C000889', 'PEDRO JAVIER MENDEZ FLOREZ', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-23', '0.00', 2, 2, 2, 2, 2, 'PEDRO JAVIER MENDEZ FLOREZ', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('555fb98015301', '0', 7, 'externo', 0, 'C001234', 'MERCADEO DIGITAL', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '3800.00', '0.00', '2015-05-22', '0.00', 2, 2, 2, 2, 2, 'WILLIAM CASTILLO', NULL, '30085070', 'castillogw@gmail.com', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('DCT1004', '0', 6, 'DCT', 4, 'C000910', 'Columbus Networks Servicios de Guatemala', '', '', '2529319-2', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-22', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '225.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('DCT1005', '0', 6, 'DCT', 5, 'C001336', 'Inversiones Tecnológicas y Telecomunicaciones Avanzadas de Guatemala', '', '', '8942070-5', '', '', 1, '', NULL, 0, '0.00', '0.00000', '1739.25', '0.00', '2015-05-22', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '225.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('DCT1006', '0', 6, 'DCT', 6, 'C001306', 'Generando Soluciones Analíticas, S. A.', '', '', '8764560-2', '', '', 1, '', NULL, 0, '0.00', '0.00000', '3452.52', '0.00', '2015-06-03', '1352.75', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '175.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('DCT1007', '0', 6, 'externo', 0, '', 'Inmobiliaria San Antonio', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-22', '0.00', 1, 2, 2, 1, 2, '', NULL, '', '', 0, 0, 2, 2, '', 0, 3, '0.00', '75.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5560a463a8434', '0', 7, 'externo', 0, 'C001290', 'SOLUCIONES Y SERVICIOS MULTIMEDIA, S.A.', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '1000.00', '0.00', '2015-05-23', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556241dbc52f4', '0', 7, 'externo', 0, '', 'Javier Gramajo', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'Javier Gramajo', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5562426b4bd0b', '0', 7, 'externo', 0, '', 'Diego Rios', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '1800.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'Diego Rios', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5562453f952df', '0', 7, 'externo', 0, '', 'Harold Búcaro', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'Harold Búcaro', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556246d936d6d', '0', 7, 'externo', 0, '', 'Salomón Herrera', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '450.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'Salomón Herrera', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5562489480049', '0', 7, 'externo', 0, '', 'Social Meet', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '600.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55624ad6a8803', '0', 7, 'externo', 0, '', 'Oscar Leche', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '600.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'Oscar Leche', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55624e0ba16cc', '0', 7, 'externo', 0, '', 'Joel Isidro', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '2400.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'Joel Isidro', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556252ccc1ac2', '0', 7, 'externo', 0, '', 'María Canahui', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '1200.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, 'María Canahui', NULL, '', 'mariacanahui@gmail.com', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5562558a4ef88', '0', 7, 'externo', 0, '', 'Intedya', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '300.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, '', NULL, '', 'ymaita@intedya.com', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556256a1b2411', '0', 7, 'externo', 0, '', 'Orange Talent Group', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '600.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, '', NULL, '', 'lotte.zoontjens@orangetalentgroup.com', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55625b035366b', '0', 7, 'externo', 0, '', 'Telecomunicaciones Guate', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '1575.00', '0.00', '2015-05-24', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('TEC1201', '0', 1, 'Nivel 2', 201, '', 'Administración Campus Tec 1', 'Vía 4 1-30 zona 4, edificio Campus Tecnológico I', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '50.00', '0.00', '2015-05-24', '0.00', 1, 2, 2, 2, 2, 'Administración Campus Tec 1', NULL, '', '', 0, 0, 2, 1, '', 0, 3, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55633eadb25ed', '0', 7, 'externo', 0, '', '', '', '', '', '', '', 1, '', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-25', '0.00', 2, 2, 2, 2, 2, '', NULL, '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5564ec6b2f969', '0', 7, 'externo', 0, '', 'Eddy Castro', '', '', '', '', 'recibo 241 por Q400', 1, '350', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-26', '0.00', 2, 1, 2, 2, 2, '', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5564a00ce230d', '', 7, 'externo', 0, '', 'Alejandro Pérez', '', '', '', '', '242 - Inscripcion', 1, '351', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '0000-00-00', '0.00', 2, 1, 0, 2, 2, '', '', '', '', 0, 0, 2, 0, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556886171b971', '0', 7, 'externo', 0, '', '', '', '', '', '', 'Recibo  299 por 400', 1, '198', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Baltazar Quiej', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556886f5c7de2', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 178', 1, '167', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Gustavo González', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568871ef083e', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 185', 1, '171', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Maya World Tours', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556887ad9f191', '0', 7, 'externo', 0, '', '', '', '', '', '', 'con recibo 281 por 800', 1, '181', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Sistemas de Administración Virtual S.A', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688807040a9', '0', 7, 'externo', 0, '', '', '', '', '', '', 'Recibo  291 por 400', 1, '194', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Lidia Guerra', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556888db86ece', '0', 7, 'externo', 0, '', '', '', '', '', '', 'Recibo no 03 por 400', 1, '209', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Mercadeos Especializados S.A.', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688954a34c4', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 06 por 400', 1, '213', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Jonathan Chavez', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568898f57ac7', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 05 por 400', 1, '214', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Leonel Morales', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556889f23437d', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 08 por 800', 1, '220', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Web And Mobile Solutions S.A.', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688a4fa218b', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 35 por 800', 1, '229', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Juan Carlos Prieto Jiménez', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688aa75f85b', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 40 por 400', 1, '235', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Brian Kanell', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688af869ebd', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 43 por 800', 1, '236', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Jackeline Beltran', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688b41be293', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 51 por 800', 1, '237', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Lotte 200ntjens ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688beb54f8e', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 57 por 800', 1, '239', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Geosistemas y Tecnológia Avanzada, S.A.', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688c3bd2229', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 59', 1, '240', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Marco Antonio Castellanos ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55688f108fc98', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 59 por 800', 1, '240', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Marco Antonio Castellanos ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568903ec9634', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 61 por 400', 1, '242', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Publicity Lovers, S.A.', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689157e795f', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 62 por 400', 1, '243', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Centrikal S.A.', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('556891bd98c29', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 113 por 400', 1, '253', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Víctor Hérnandez ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568943353093', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo por 114', 1, '267', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Jorge Daniel Lopéz ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689c5ebaea8', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 127 por 800', 1, '271', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Juan Lemus', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689caa892ec', '0', 7, 'externo', 0, '', '', '', '', '', '', 'Recibo 132 por 800', 1, '274', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Julio Fernández ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689ce9a7fe8', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 140 por 800', 1, '280', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'José Quan', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689d1ceb573', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 142 por 400', 1, '281', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Roberto Valdez ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689d52dc49e', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 149 por 400', 1, '286', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Kurt Keller ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689da9d3da6', '0', 7, 'externo', 0, '', '', '', '', '', '', 'Recibo 155 por 800', 1, '289', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Sonia Altan', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689e35a1828', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 157 por 800', 1, '290', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Alan Coyote', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('55689fbcc750f', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 161 por 800', 1, '292', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Pablo Lujan ', 'Comunication Consultivo ', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568aedbd2e11', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 164 por 800', 1, '294', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Jorge López ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568af29b8fb0', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 165 por 800', 1, '295', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Pablo Fernandez ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568afd090d6e', '0', 7, 'externo', 0, '', '', '', '', '', '', 'Recibo 174 por 400', 1, '297', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'José Contreras ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b04b58e6e', '0', 7, 'externo', 0, '', 'Servicios en Calidad', '', '', '', '', 'recibo 175 por 400', 1, '298', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'SErgio Leonel Carnona', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b30a83847', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 233 por 800', 1, '343', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'María Girón ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b4a5cf67b', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 232 por 800', 1, '342', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Joel Melgar', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b5061b54b', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo  231 por 400', 1, '341', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'María Lorena Castellanos ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b53bcaa1f', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 229 por 400', 1, '339', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Diego de León ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b56888427', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 228 por 400', 1, '338', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Boris Lemús ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b5e6080eb', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 227 por 800', 1, '337', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Juan Carlos Rodíguez ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b61891847', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 179 por 400', 1, '300', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Javier Estrada', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00'),
('5568b645001b6', '0', 7, 'externo', 0, '', '', '', '', '', '', 'recibo 182 por 400', 1, '303', NULL, 0, '0.00', '0.00000', '0.00', '0.00', '2015-05-29', '0.00', 2, 1, 2, 2, 2, 'Julia Elizabeth ', '', '', '', 0, 0, 2, 1, '', 0, 0, '0.00', '0.00', '0.00', 0, '0.00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ig_conveniospago`
--

CREATE TABLE `ig_conveniospago` (
  `id` bigint(20) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `moneda` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `vcuota` decimal(11,2) NOT NULL,
  `ncuotas` int(4) NOT NULL,
  `fechaini` date NOT NULL,
  `estatus` int(4) NOT NULL,
  `aprobo` varchar(255) COLLATE utf8_bin NOT NULL,
  `documento` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ig_eventcal`
--

CREATE TABLE `ig_eventcal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `condominio` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `allday` int(4) NOT NULL DEFAULT '0',
  `startday` date DEFAULT NULL,
  `starthour` time DEFAULT NULL,
  `endday` date DEFAULT NULL,
  `endhour` time DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `color` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `textcolor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `pedidoid` bigint(20) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `usuarioact` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fechaact` datetime NOT NULL,
  `personas` int(11) DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `estatus` int(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Eventos de Calendario';

--
-- Dumping data for table `ig_eventcal`
--

INSERT INTO `ig_eventcal` (`id`, `codigo`, `condominio`, `institucion`, `title`, `allday`, `startday`, `starthour`, `endday`, `endhour`, `url`, `color`, `textcolor`, `pedidoid`, `area`, `usuarioact`, `fechaact`, `personas`, `observaciones`, `estatus`) VALUES
(1, 'ADN002', 2, 2, 'TecInar', 0, '2015-05-05', '08:00:00', '2015-05-05', '09:00:00', '', 'event-canario', '', 0, 5, 'perry@insayd.com', '2015-05-24 15:08:16', 5, '', 1),
(2, 'ADN003', 2, 2, 'Reunión de Cliente', 0, '2015-05-07', '08:00:00', '2015-05-07', '09:00:00', '', 'event-rojo', '', 0, 6, 'perry@insayd.com', '2015-05-24 15:11:35', 3, '', 1),
(3, 'ADN004', 2, 2, 'Entrevista Médica', 0, '2015-05-07', '10:00:00', '2015-05-07', '12:00:00', '', 'event-canario', '', 0, 5, 'perry@insayd.com', '2015-05-24 15:18:19', 3, '', 1),
(4, 'TEC1304', 1, 2, 'Reunion Administrativa', 0, '2015-05-07', '03:30:00', '2015-05-07', '05:00:00', '', 'event-canario', '', 0, 1, 'perry@insayd.com', '2015-05-24 15:21:40', 5, '', 1),
(5, 'TEC1104', 1, 2, 'Reunión con Clientes', 0, '2015-05-08', '03:00:00', '2015-05-08', '04:00:00', '', 'event-canario', '', 0, 1, 'perry@insayd.com', '2015-05-24 15:24:01', 5, '', 1),
(6, '556241dbc52f4', 7, 2, 'Start-up Chile', 0, '2015-05-08', '06:00:00', '2015-05-08', '08:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 15:27:37', 30, '', 1),
(7, '5562426b4bd0b', 7, 2, 'Splash', 0, '2015-05-09', '09:00:00', '2015-05-09', '12:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 15:29:49', 15, '', 1),
(8, 'ADN001', 2, 2, 'Reunióm María M. Saghi', 0, '2015-05-11', '11:00:00', '2015-05-11', '01:00:00', '', 'event-canario', '', 0, 5, 'perry@insayd.com', '2015-05-24 15:36:00', 5, '', 1),
(9, 'TEC1104', 1, 2, 'Reunion Administrativa - Bocetos', 0, '2015-05-12', '11:00:00', '2015-05-12', '12:00:00', '', 'event-rojo', '', 0, 2, 'perry@insayd.com', '2015-05-24 15:38:42', 3, '', 1),
(10, '5562453f952df', 7, 2, 'Taller de Video - Harold Búcaro', 0, '2015-05-12', '02:30:00', '2015-05-12', '03:30:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 15:41:42', 10, '', 1),
(11, 'TEC1501', 1, 2, 'Actividad con Personal - Solución Web', 0, '2015-05-14', '07:30:00', '2015-05-14', '09:30:00', '', 'event-azul', '', 0, 3, 'perry@insayd.com', '2015-05-24 15:44:28', 15, '', 1),
(12, '556246d936d6d', 7, 2, 'Carta de venta en el Tec - Salomón Herrera', 0, '2015-05-15', '11:30:00', '2015-05-15', '12:30:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 15:49:15', 5, 'Evento organizado en el Tec-Carta de venta en el Tec', 1),
(13, '5562426b4bd0b', 7, 2, 'Splash - Diego Rios', 0, '2015-05-16', '09:00:00', '2015-05-16', '12:00:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 15:52:38', 8, '', 1),
(14, '5562489480049', 7, 2, 'Actividad Especial - Social Meet', 0, '2015-05-20', '06:00:00', '2015-05-20', '08:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 15:57:39', 10, '', 1),
(15, '55624ad6a8803', 7, 2, 'Oscar Leche', 0, '2015-05-23', '03:00:00', '2015-05-23', '05:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 16:06:01', 10, '', 1),
(16, '5562426b4bd0b', 7, 2, 'Splash - Diego Rios', 0, '2015-05-23', '09:00:00', '2015-05-23', '12:00:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 16:15:58', 8, '', 1),
(17, '55624e0ba16cc', 7, 2, 'Presentación - Joel Isidro', 0, '2015-05-25', '08:00:00', '2015-05-25', '12:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 16:19:27', 15, '', 1),
(18, 'TEC1104', 1, 2, 'Reunion Administrativa - Bocetos', 0, '2015-05-25', '12:30:00', '2015-05-25', '01:30:00', '', 'event-canario', '', 0, 1, 'perry@insayd.com', '2015-05-24 16:28:18', 0, '', 1),
(19, 'ADN004', 2, 2, 'Actividad - Actualización Médica', 0, '2015-05-26', '10:00:00', '2015-05-26', '12:00:00', '', 'event-canario', '', 0, 5, 'perry@insayd.com', '2015-05-24 16:33:22', 5, '', 1),
(20, '556246d936d6d', 7, 2, 'Actividad - Salomón Herrera', 0, '2015-05-27', '06:00:00', '2015-05-27', '08:00:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 16:36:08', 5, '', 1),
(21, '556252ccc1ac2', 7, 2, 'Taller hablar en público', 0, '2015-05-30', '09:00:00', '2015-05-30', '01:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 16:47:49', 0, '', 1),
(22, '5562558a4ef88', 7, 2, 'Actividad - Intedya', 0, '2015-06-08', '08:00:00', '2015-06-08', '09:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 16:51:52', 0, '', 1),
(23, '556256a1b2411', 7, 2, 'Actividad - Orangetalent', 0, '2015-06-10', '06:00:00', '2015-06-10', '08:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 16:56:51', 0, '', 1),
(24, '55624e0ba16cc', 7, 2, 'Presentación - Joel Isidro', 0, '2015-07-25', '08:00:00', '2015-07-25', '12:00:00', '', 'event-azul', '', 0, 27, 'perry@insayd.com', '2015-05-24 16:59:16', 0, '', 1),
(25, '55625b035366b', 7, 2, 'Reunión de Trabajo - Telecomunicaciones Guate', 0, '2015-05-21', '11:30:00', '2015-05-21', '02:30:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 17:15:45', 5, '', 1),
(26, '55625b035366b', 7, 2, 'Reunión de Trabajo - Telecomunicaciones Guate', 0, '2015-05-21', '02:00:00', '2015-05-21', '09:30:00', '', 'event-canario', '', 0, 25, 'perry@insayd.com', '2015-05-24 17:17:52', 5, '', 1),
(27, 'TEC1201', 1, 2, 'Taller de Introducción a la Administración de Proyectos', 0, '2015-05-21', '05:30:00', '2015-05-21', '06:30:00', '', 'event-verdemedio', '', 0, 1, 'perry@insayd.com', '2015-05-24 17:26:27', 5, '', 1),
(28, 'ADN001', 2, 2, 'Reunion de Trabajo', 0, '2015-06-05', '01:00:00', '2015-06-05', '03:00:00', '', 'event-canario', '', 0, 5, 'william.cuc@insayd.com', '2015-05-27 16:48:14', 5, '', 1),
(29, 'ADN001', 2, 2, 'Reunión con Asociados', 0, '2015-06-01', '11:00:00', '2015-06-01', '01:00:00', '', 'event-azul', '', 0, 7, 'perry@insayd.com', '2015-06-01 09:33:11', 0, '', 1),
(30, 'ADN001', 2, 2, 'Reunion de trabajo', 0, '2015-06-05', '01:00:00', '2015-06-05', '03:00:00', '', 'event-azul', '', 0, 7, 'perry@insayd.com', '2015-06-01 09:35:07', 0, '', 1),
(31, 'ADN001', 2, 2, 'Reunión con Asociados', 0, '2015-06-17', '07:30:00', '2015-06-17', '09:30:00', '', 'event-azul', '', 0, 7, 'perry@insayd.com', '2015-06-01 09:36:25', 0, '', 1),
(32, 'TEC1104', 1, 2, 'Reunion de trabajo', 0, '2015-06-01', '12:30:00', '2015-06-01', '01:30:00', '', 'event-canario', '', 0, 1, 'perry@insayd.com', '2015-06-01 09:38:53', 0, '', 1),
(33, 'ADN004', 2, 2, 'Reunion de trabajo', 0, '2015-06-03', '09:00:00', '2015-06-03', '11:00:00', '', 'event-canario', '', 0, 5, 'perry@insayd.com', '2015-06-01 09:41:02', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ig_gasto`
--

CREATE TABLE `ig_gasto` (
  `id` int(11) NOT NULL,
  `provnit` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `idproveedor` int(11) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `diascredito` int(11) NOT NULL DEFAULT '0',
  `ordencompra` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `fecha_documento` date DEFAULT NULL,
  `numero_doc` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `formapago` int(11) NOT NULL,
  `cheque` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `banco` int(11) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `area` varchar(100) COLLATE utf8_bin NOT NULL,
  `destino` varchar(100) COLLATE utf8_bin NOT NULL,
  `estatus` int(11) NOT NULL,
  `estatus_fecha` datetime DEFAULT NULL,
  `proyecto` varchar(25) COLLATE utf8_bin NOT NULL,
  `empresa` int(11) NOT NULL,
  `solicitante` int(11) NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_gasto`
--

INSERT INTO `ig_gasto` (`id`, `provnit`, `idproveedor`, `fecha_pago`, `diascredito`, `ordencompra`, `fecha_documento`, `numero_doc`, `descripcion`, `formapago`, `cheque`, `banco`, `valor`, `area`, `destino`, `estatus`, `estatus_fecha`, `proyecto`, `empresa`, `solicitante`, `observaciones`, `usuario`) VALUES
(1, '', 4, '0000-00-00', 0, '', '2015-05-18', 'Varias', 'Energía Electrica TEC 1', 2, '6524', 1, '13636.41', '1', '2', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 6, '', ''),
(2, '', 5, '0000-00-00', 30, '683', '2015-05-04', '2560', 'Internet ADN', 2, '', 0, '28496.47', '3', '6', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(3, '', 6, '0000-00-00', 0, '714', '2015-05-12', '', '60% Anticipo uniformes personal TEC', 2, '', 0, '3669.00', '1', '4', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(4, '', 7, '0000-00-00', 30, '719', '2015-05-01', '51308', 'Monitoreo de Seguridad', 2, '', 0, '484.00', '1', '3', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(5, '', 8, '0000-00-00', 30, '718', '2015-05-04', '92856', 'Aromatizante de Baños', 2, '', 0, '813.38', '1', '1', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 3, '', ''),
(6, '', 9, '0000-00-00', 30, '717', '2015-05-07', '13116', 'Mantenimiento de Elevador', 2, '', 0, '2010.53', '2', '1', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(7, '', 10, '0000-00-00', 30, '682', '2015-05-09', '513', 'Personal de Limpieza TEC', 2, '', 0, '11250.00', '1', '1', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(8, '', 11, '0000-00-00', 30, '734', '2015-05-11', '25352', 'Material Baños Nivel 5 y 7', 2, '', 0, '408.45', '2', '1', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(9, '', 12, '0000-00-00', 30, '771', '2015-05-31', '2241', 'Extracción de Basura', 2, '', 0, '300.00', '1', '1', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', ''),
(10, '', 13, '0000-00-00', 30, '772', '2015-05-18', '14610', 'Jabon, toallas y papel para baños', 2, '', 0, '5870.00', '1', '1', 1, '0000-00-00 00:00:00', '004.A.02.00.000.00', 1, 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ig_movimientos`
--

CREATE TABLE `ig_movimientos` (
  `id` bigint(20) NOT NULL,
  `pedido` bigint(20) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `recibo` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `abono` decimal(11,2) DEFAULT NULL,
  `cargo` decimal(11,2) DEFAULT NULL,
  `saldo` decimal(11,2) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `cobrador` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `banco` int(4) DEFAULT NULL,
  `boleta` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `moneda` int(4) NOT NULL,
  `estatus` int(4) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `tipo` int(4) DEFAULT NULL COMMENT 'Cargo o Abono',
  `forma_pago` int(4) DEFAULT NULL,
  `cheque` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `emisor` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `factura` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `reciboprov` bigint(20) DEFAULT NULL,
  `estatus_recibo` int(4) DEFAULT NULL,
  `estatus_factura` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_movimientos`
--

INSERT INTO `ig_movimientos` (`id`, `pedido`, `descripcion`, `recibo`, `abono`, `cargo`, `saldo`, `fecha`, `cobrador`, `banco`, `boleta`, `institucion`, `condominio`, `codigo`, `moneda`, `estatus`, `usuario`, `observaciones`, `tipo`, `forma_pago`, `cheque`, `emisor`, `factura`, `reciboprov`, `estatus_recibo`, `estatus_factura`) VALUES
(1, 0, 'Cuota Mensual', '17475', '3010.29', '0.00', '0.00', '2015-05-05 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1104', 0, 0, 'perry@insayd.com', 'Inv. Tzaguacal S. A.', 2, 2, '755', '3', 'T-1492', 0, 0, 0),
(2, 0, 'Cuota Mensual', '17652', '3079.45', '0.00', '0.00', '2015-05-15 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1207', 0, 0, 'perry@insayd.com', '', 2, 2, '102', '4', 'T-1561', 0, 0, 0),
(3, 0, 'Reservación', '17479', '200.00', '0.00', '0.00', '2015-05-05 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1402', 0, 0, 'perry@insayd.com', '', 2, 1, '', '', 'T-1408', 0, 0, 0),
(4, 0, 'Cuota Mensual', '17478', '1012.50', '0.00', '0.00', '2015-05-05 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1402', 0, 0, 'perry@insayd.com', '', 2, 2, '47', '3', 'T-1527', 0, 0, 0),
(5, 0, 'Cuota Mensual', '17583', '12285.87', '0.00', '0.00', '2015-05-12 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1401', 0, 0, 'perry@insayd.com', '', 2, 2, '61401812', '7', 'T-1488', 0, 0, 0),
(6, 0, 'Cuota Mensual', '17654', '1955.32', '0.00', '0.00', '2015-05-13 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1305', 0, 0, 'perry@insayd.com', '', 2, 2, '117', '4', 'T-1563', 0, 0, 0),
(7, 0, 'Cuota Mensual', '17651', '3259.93', '0.00', '0.00', '2015-05-15 00:00:00', 'perry@insayd.com', 0, '', 2, 1, 'TEC1109', 0, 0, 'perry@insayd.com', '', 2, 2, '923', '4', 'T-1493', 0, 0, 0),
(8, 0, 'Cuota Mensual', '17713', '6539.99', '0.00', '0.00', '2015-05-23 00:00:00', 'perry@insayd.com', 1, '9013170', 2, 1, 'TEC1205', 0, 0, 'perry@insayd.com', 'marzo', 2, 2, '57801555', '7', 'T-1436', 0, 0, 0),
(9, 0, 'Cuota Mensual', '17782', '1545.01', '0.00', '0.00', '2015-05-26 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1302', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '24031', '3', 'T-1535', 0, 0, 0),
(10, 0, 'Cuota Mensual', '17755', '8907.29', '0.00', '0.00', '2015-05-22 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1301', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '701', '', 'T-1564', 0, 0, 0),
(11, 0, 'Cuota Mensual', '17754', '20378.68', '0.00', '0.00', '2015-06-22 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1501', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '7252', '3', 'T-1435', 0, 0, 0),
(12, 0, 'Cuota Mensual', '17780', '2966.73', '0.00', '0.00', '2015-06-26 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1108', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '2025', '3', 'T-1557', 0, 0, 0),
(13, 0, 'Cuota Mensual', '17780', '3527.06', '0.00', '0.00', '2015-06-26 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1107', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '2025', '3', 'T-1556', 0, 0, 0),
(14, 0, 'Cuota Mensual', '17779', '5255.04', '0.00', '0.00', '2015-05-26 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1110', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '72', '7', 'T-1543', 0, 0, 0),
(15, 0, 'Cuota Mensual', '17840', '6793.94', '0.00', '0.00', '2015-05-29 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1702', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '123-0', '96', 'T-1562', 0, 0, 0),
(16, 0, 'Cuota Mensual', '17862', '1352.75', '0.00', '0.00', '2015-06-01 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 6, 'DCT1006', 0, 0, 'rmedina@apolo.gt', '', 2, 4, '', '', 'T-1522', 0, 0, 0),
(17, 0, 'Cuota Mensual', '17815', '9744.65', '0.00', '0.00', '2015-05-28 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1202', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '566', '2', 'T-1509', 0, 0, 0),
(18, 0, 'Cuota Mensual', '17834', '27631.80', '0.00', '0.00', '2015-05-29 00:00:00', 'rmedina@apolo.gt', 0, '', 2, 1, 'TEC1601', 0, 0, 'rmedina@apolo.gt', '', 2, 2, '615', '3', 'T-1536', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ig_ordenes_trabajo`
--

CREATE TABLE `ig_ordenes_trabajo` (
  `id` bigint(20) NOT NULL,
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `cargo` bigint(20) DEFAULT NULL,
  `resultado_cte` text COLLATE utf8_bin,
  `estatus` int(4) NOT NULL,
  `fecha_trabajo` date NOT NULL,
  `hora_trabajo` time NOT NULL,
  `fecha_estatus` datetime NOT NULL,
  `usuario_estatus` varchar(20) COLLATE utf8_bin NOT NULL,
  `responsable` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `obs_trabajo` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ig_pagos_banco`
--

CREATE TABLE `ig_pagos_banco` (
  `correlativo` bigint(20) NOT NULL,
  `codigo_vecino` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre_vecino` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cuota` decimal(11,2) DEFAULT NULL,
  `mora` decimal(11,2) DEFAULT NULL,
  `fecha` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre_agencia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `efectivo` decimal(11,2) DEFAULT NULL,
  `chbi` decimal(11,2) DEFAULT NULL,
  `chob` decimal(11,2) DEFAULT NULL,
  `chbe` decimal(11,2) DEFAULT NULL,
  `no_chob` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `boleta` varchar(20) COLLATE utf8_bin NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `procesado` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `institucion` int(4) NOT NULL,
  `moneda` int(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Informacion temporal de carga de bancos';

-- --------------------------------------------------------

--
-- Table structure for table `ig_pedido`
--

CREATE TABLE `ig_pedido` (
  `id` bigint(20) NOT NULL,
  `movimiento` bigint(20) DEFAULT NULL COMMENT 'Pago',
  `referencia` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `tipo` int(4) DEFAULT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `cantidad` decimal(11,2) DEFAULT NULL,
  `precio` decimal(11,2) DEFAULT NULL,
  `observaciones` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `institucion` int(4) DEFAULT NULL,
  `condominio` int(4) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `moneda` int(4) NOT NULL,
  `reqcobro` bigint(20) NOT NULL,
  `estatus_rc` int(4) NOT NULL,
  `estatus` int(4) DEFAULT NULL,
  `fecha_estatus` datetime DEFAULT NULL,
  `usuario_estatus` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `fecha_asigna` datetime DEFAULT NULL,
  `usuario_asigna` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_pedido`
--

INSERT INTO `ig_pedido` (`id`, `movimiento`, `referencia`, `tipo`, `descripcion`, `cantidad`, `precio`, `observaciones`, `institucion`, `condominio`, `codigo`, `moneda`, `reqcobro`, `estatus_rc`, `estatus`, `fecha_estatus`, `usuario_estatus`, `fecha_asigna`, `usuario_asigna`) VALUES
(1, 0, 'T-1515', 21, '', '1.00', '4602.74', '', 2, 2, 'ADN002', 1, 0, 0, 1, '2015-04-09 00:00:00', 'perry@insayd.com', '2015-04-09 00:00:00', 'perry@insayd.com'),
(43, 0, 'T-1549', 115, '', '1.00', '496.21', '', 2, 1, 'TEC1109', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(3, 0, 'T-1408', 3, 'e-Garage', '2.00', '100.00', '', 2, 1, 'TEC1402', 1, 0, 0, 1, '2015-04-24 00:00:00', 'perry@insayd.com', '2015-04-24 00:00:00', 'perry@insayd.com'),
(4, 0, 'T-1527', 4, '', '1.00', '1012.50', '', 2, 1, 'TEC1402', 1, 0, 0, 1, '2015-04-24 00:00:00', 'perry@insayd.com', '2015-04-24 00:00:00', 'perry@insayd.com'),
(5, 0, 'T-1243', 4, '', '1.00', '6556.95', '', 2, 1, 'TEC1205', 1, 0, 0, 1, '2014-12-01 00:00:00', 'william.cuc@insayd.com', '2014-12-01 00:00:00', 'william.cuc@insayd.com'),
(6, 0, 'T-1436', 4, '', '1.00', '6539.99', '', 2, 1, 'TEC1205', 1, 0, 0, 1, '2014-12-01 00:00:00', 'william.cuc@insayd.com', '2014-12-01 00:00:00', 'william.cuc@insayd.com'),
(7, 0, 'T-1495', 4, '', '1.00', '6556.95', '', 2, 1, 'TEC1205', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(8, 0, 'T-1435', 4, '', '1.00', '20378.68', '', 2, 1, 'TEC1501', 1, 0, 0, 1, '2015-03-02 00:00:00', 'william.cuc@insayd.com', '2015-03-02 00:00:00', 'william.cuc@insayd.com'),
(9, 0, 'T-1494', 4, '', '1.00', '20431.54', '', 2, 1, 'TEC1501', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(10, 0, 'T-1493', 4, '', '1.00', '3269.93', '', 2, 1, 'TEC1109', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(11, 0, 'T-1509', 4, '', '1.00', '9744.65', '', 2, 1, 'TEC1202', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(12, 0, 'T-1492', 4, '', '1.00', '3010.29', '', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(13, 0, 'T-1431', 4, '', '1.00', '13908.46', '', 2, 1, 'TEC1703', 1, 0, 0, 1, '2015-03-02 00:00:00', 'william.cuc@insayd.com', '2015-03-02 00:00:00', 'william.cuc@insayd.com'),
(14, 0, 'T-1490', 4, '', '1.00', '13944.54', '', 2, 1, 'TEC1703', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(15, 0, 'T-1488', 4, '', '1.00', '12285.87', '', 2, 1, 'TEC1401', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(16, 0, 'T-1252', 4, '', '1.00', '4482.23', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2014-12-01 00:00:00', 'william.cuc@insayd.com', '2014-12-01 00:00:00', 'william.cuc@insayd.com'),
(17, 0, 'T-1307', 4, '', '1.00', '5472.64', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2015-01-05 00:00:00', 'william.cuc@insayd.com', '2015-01-05 00:00:00', 'william.cuc@insayd.com'),
(18, 0, 'T-1363', 4, '', '1.00', '5529.72', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2015-02-02 00:00:00', 'william.cuc@insayd.com', '2015-02-02 00:00:00', 'william.cuc@insayd.com'),
(19, 0, 'T-1428', 4, '', '1.00', '5501.18', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2015-03-02 00:00:00', 'william.cuc@insayd.com', '2015-03-02 00:00:00', 'william.cuc@insayd.com'),
(20, 0, 'T-1487', 4, '', '1.00', '5515.45', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(21, 0, 'T-1069', 4, '', '1.00', '2875.50', '', 2, 1, 'TEC1106', 1, 0, 0, 1, '2014-09-01 00:00:00', 'william.cuc@insayd.com', '2014-09-01 00:00:00', 'william.cuc@insayd.com'),
(22, 0, 'T-1422', 4, '', '1.00', '1024.31', '', 2, 1, 'TEC1502', 1, 0, 0, 1, '2015-03-02 00:00:00', 'william.cuc@insayd.com', '2015-03-02 00:00:00', 'william.cuc@insayd.com'),
(23, 0, 'T-1482', 4, '', '1.00', '1026.96', '', 2, 1, 'TEC1502', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(24, 0, 'T-1279', 21, '', '1.00', '1347.00', '', 2, 2, 'ADN007', 1, 0, 0, 1, '2014-12-10 00:00:00', 'william.cuc@insayd.com', '2014-12-10 00:00:00', 'william.cuc@insayd.com'),
(25, 0, 'TZ-48', 21, '', '1.00', '1347.00', '', 2, 2, 'ADN007', 1, 0, 0, 1, '2015-01-14 00:00:00', 'william.cuc@insayd.com', '2015-01-14 00:00:00', 'william.cuc@insayd.com'),
(26, 0, 'T-1393', 21, '', '1.00', '1347.00', '', 2, 2, 'ADN007', 1, 0, 0, 1, '2015-02-05 00:00:00', 'william.cuc@insayd.com', '2015-02-05 00:00:00', 'william.cuc@insayd.com'),
(27, 0, 'T-1455', 21, '', '1.00', '1347.00', '', 2, 2, 'ADN007', 1, 0, 0, 1, '2015-03-04 00:00:00', 'william.cuc@insayd.com', '2015-03-04 00:00:00', 'william.cuc@insayd.com'),
(28, 0, 'T-1516', 21, '', '1.00', '1347.00', '', 2, 2, 'ADN007', 1, 0, 0, 1, '2015-04-09 00:00:00', 'william.cuc@insayd.com', '2015-04-09 00:00:00', 'william.cuc@insayd.com'),
(29, 0, 'T-1517', 21, '', '1.00', '1269.02', '', 2, 2, 'ADN003', 1, 0, 0, 1, '2015-04-09 00:00:00', 'william.cuc@insayd.com', '2015-04-09 00:00:00', 'william.cuc@insayd.com'),
(30, 0, 'T-1523', 21, '', '1.00', '579.75', '', 2, 2, 'ADN003', 1, 0, 0, 1, '2015-04-09 00:00:00', 'william.cuc@insayd.com', '2015-04-09 00:00:00', 'william.cuc@insayd.com'),
(31, 0, 'T-1531', 21, '', '1.00', '345.00', '', 2, 2, 'ADN003', 1, 0, 0, 1, '2015-04-30 00:00:00', 'william.cuc@insayd.com', '2015-04-30 00:00:00', 'william.cuc@insayd.com'),
(32, 0, 'T-1411', 103, 'SALA DE REUNIONES', '1.00', '245.00', '', 2, 7, '555fa4e677482', 1, 0, 0, 1, '2015-02-20 00:00:00', 'william.cuc@insayd.com', '2015-02-20 00:00:00', 'william.cuc@insayd.com'),
(33, 0, 'TZ-6', 103, 'SALA DE REUNIONES', '1.00', '300.00', '', 2, 7, '555fa5aa5c316', 1, 0, 0, 1, '2014-10-14 00:00:00', 'william.cuc@insayd.com', '2014-10-14 00:00:00', 'william.cuc@insayd.com'),
(34, 0, 'TZ-13', 103, 'SALA DE REUNIONES', '1.00', '150.00', '', 2, 7, '555fa65a314d1', 1, 0, 0, 1, '2014-11-07 00:00:00', 'william.cuc@insayd.com', '2014-11-07 00:00:00', 'william.cuc@insayd.com'),
(35, 0, 'TZ-31', 103, 'SALA DE REUNIONES', '1.00', '150.00', '', 2, 7, '555fa6d4a3459', 1, 0, 0, 1, '2014-11-28 00:00:00', 'william.cuc@insayd.com', '2014-11-28 00:00:00', 'william.cuc@insayd.com'),
(36, 0, 'T-1350', 103, 'SALA DE REUNIONES', '1.00', '100.00', '', 2, 7, '555fa7823da93', 1, 0, 0, 1, '2015-01-30 00:00:00', 'william.cuc@insayd.com', '2015-01-30 00:00:00', 'william.cuc@insayd.com'),
(37, 0, 'T-1330', 3, 'SALA DE REUNIONES', '1.00', '137.72', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-01-09 00:00:00', 'william.cuc@insayd.com', '2015-01-09 00:00:00', 'william.cuc@insayd.com'),
(38, 0, 'T-1331', 4, '', '1.00', '2153.86', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-01-09 00:00:00', 'william.cuc@insayd.com', '2015-01-09 00:00:00', 'william.cuc@insayd.com'),
(39, 0, 'T-1380', 4, '', '1.00', '2153.86', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-02-02 00:00:00', 'william.cuc@insayd.com', '2015-02-02 00:00:00', 'william.cuc@insayd.com'),
(40, 0, 'T-1444', 4, '', '1.00', '2142.74', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-03-02 00:00:00', 'william.cuc@insayd.com', '2015-03-02 00:00:00', 'william.cuc@insayd.com'),
(41, 0, 'T-1503', 4, '', '1.00', '2148.29', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-04-06 00:00:00', 'william.cuc@insayd.com', '2015-04-06 00:00:00', 'william.cuc@insayd.com'),
(42, 0, 'T-1549', 4, '', '1.00', '2611.79', '', 2, 1, 'TEC1109', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(44, 0, 'T-1558', 4, '', '1.00', '2998.01', '', 2, 1, 'TEC1107', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(45, 0, 'T-1558', 115, '', '1.00', '529.05', '', 2, 1, 'TEC1107', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(46, 0, 'T-1557', 4, '', '1.00', '2401.63', '', 2, 1, 'TEC1108', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(47, 0, 'T-1557', 115, '', '1.00', '565.10', '', 2, 1, 'TEC1108', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(48, 0, 'T-1536', 4, '', '1.00', '22105.50', '', 2, 1, 'TEC1601', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(49, 0, 'T-1536', 115, '', '1.00', '5526.37', '', 2, 1, 'TEC1601', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(50, 0, 'T-1555', 4, '', '1.00', '2409.26', '', 2, 1, 'TEC1106', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(51, 0, 'T-1555', 115, '', '1.00', '458.90', '', 2, 1, 'TEC1106', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(52, 0, 'T-1552', 4, '', '1.00', '2494.75', '', 2, 1, 'TEC1105', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(53, 0, 'T-1552', 115, '', '1.00', '475.18', '', 2, 1, 'TEC1105', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(54, 0, 'T-1550', 4, '', '1.00', '2588.55', '', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(55, 0, 'T-1550', 115, '', '1.00', '456.79', '', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(56, 0, 'ST-6976', 15, 'SERVICIO DE PARQUEO PARA CLIENTES', '1.00', '3950.00', '', 2, 1, 'TEC1703', 1, 0, 0, 1, '2015-05-04 00:00:00', 'william.cuc@insayd.com', '2015-05-04 00:00:00', 'william.cuc@insayd.com'),
(57, 0, 'T-1562', 4, '', '1.00', '5774.85', '', 2, 1, 'TEC1702', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(58, 0, 'T-1562', 115, '', '1.00', '1019.09', '', 2, 1, 'TEC1702', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(59, 0, 'T-1553', 4, '', '1.00', '10440.27', '', 2, 1, 'TEC1401', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(60, 0, 'T-1553', 115, '', '1.00', '1988.64', '', 2, 1, 'TEC1401', 1, 0, 0, 1, '2015-05-05 00:00:00', 'william.cuc@insayd.com', '2015-05-05 00:00:00', 'william.cuc@insayd.com'),
(61, 0, 'T-1227', 88, 'Espacio en Rack', '1.00', '1155.00', '', 2, 6, 'DCT1001', 1, 0, 0, 1, '2014-11-17 00:00:00', 'perry@insayd.com', '2014-11-17 00:00:00', 'perry@insayd.com'),
(62, 0, 'T-1276', 88, 'Espacio en Rack', '1.00', '1159.50', '', 2, 6, 'DCT1001', 1, 0, 0, 1, '2014-12-01 00:00:00', 'perry@insayd.com', '2014-12-01 00:00:00', 'perry@insayd.com'),
(63, 0, 'T-649', 102, 'Alquiler Aceleradora', '1.00', '1900.00', 'Ya no esta en el Tec', 2, 7, '555fb98015301', 1, 0, 0, 1, '2014-05-14 00:00:00', 'perry@insayd.com', '2014-05-14 00:00:00', 'perry@insayd.com'),
(64, 0, 'T-735', 102, 'Alquiler Aceleradora', '1.00', '1900.00', 'Ya no esta en el Tec', 2, 7, '555fb98015301', 1, 0, 0, 1, '2014-06-24 00:00:00', 'perry@insayd.com', '2014-06-24 00:00:00', 'perry@insayd.com'),
(65, 0, 'T-777', 102, 'Alquiler Aceleradora', '1.00', '0.00', 'Ya no está en el Tec', 2, 7, '555fb98015301', 1, 0, 0, 1, '2014-07-07 00:00:00', 'perry@insayd.com', '2014-07-07 00:00:00', 'perry@insayd.com'),
(66, 0, 'T-1521', 88, 'Espacio en Rack', '1.00', '1739.25', '', 2, 6, 'DCT1005', 1, 0, 0, 1, '2015-04-09 00:00:00', 'perry@insayd.com', '2015-04-09 00:00:00', 'perry@insayd.com'),
(67, 0, 'T-1522', 88, 'Espacio en Rack', '1.00', '1352.75', '', 2, 6, 'DCT1006', 1, 0, 0, 1, '2015-04-09 00:00:00', 'perry@insayd.com', '2015-04-09 00:00:00', 'perry@insayd.com'),
(68, 0, 'T-1270', 88, 'Espacio en Jaula', '1.00', '279.00', '', 2, 6, 'DCT1006', 1, 0, 0, 1, '2014-12-01 00:00:00', 'perry@insayd.com', '2014-12-01 00:00:00', 'perry@insayd.com'),
(69, 0, 'T-1413', 88, 'Espacio en Jaula', '1.00', '625.00', '', 2, 6, 'DCT1006', 1, 0, 0, 1, '2015-02-25 00:00:00', 'perry@insayd.com', '2015-02-25 00:00:00', 'perry@insayd.com'),
(70, 0, 'T-1271', 86, 'Espacio en Aceleradora', '1.00', '1195.77', 'Se trasladaron a la of. 503', 2, 6, 'DCT1006', 1, 0, 0, 1, '2014-12-01 00:00:00', 'perry@insayd.com', '2014-12-01 00:00:00', 'perry@insayd.com'),
(71, 0, 'T-1560', 4, '', '1.00', '1038.92', '', 2, 1, 'TEC1502', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(72, 0, 'T-1564', 4, '', '1.00', '7917.59', '', 2, 1, 'TEC1301', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(73, 0, 'T-1564', 115, '', '1.00', '969.70', '', 2, 1, 'TEC1301', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(74, 0, 'T-1561', 4, 'Alquiler Mes 5/2015', '1.00', '2463.56', '', 2, 1, 'TEC1207', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(75, 0, 'T-1561', 115, 'Servicio de Mantenimiento Mes 5/2015', '1.00', '615.89', '', 2, 1, 'TEC1207', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(76, 0, 'ST-6908', 111, 'SERVICIO DE PARQUEO', '1.00', '1000.00', '', 2, 7, '5560a463a8434', 1, 0, 0, 1, '2015-05-04 00:00:00', 'perry@insayd.com', '2015-05-04 00:00:00', 'perry@insayd.com'),
(77, 0, 'T-1563', 4, 'Alquiler 5/2015', '1.00', '1646.58', '', 2, 1, 'TEC1305', 1, 0, 0, 1, '2015-05-04 00:00:00', 'perry@insayd.com', '2015-05-04 00:00:00', 'perry@insayd.com'),
(78, 0, 'T-1563', 115, 'Mantenimiento 5/2015', '1.00', '308.74', '', 2, 1, 'TEC1305', 1, 0, 0, 1, '2015-05-04 00:00:00', 'perry@insayd.com', '2015-05-04 00:00:00', 'perry@insayd.com'),
(79, 0, 'T-1548', 4, 'Alquiler 5/2015', '1.00', '17095.34', '', 2, 1, 'TEC1501', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(80, 0, 'T-1548', 115, 'Mantenimiento 5/2015', '1.00', '3574.09', '', 2, 1, 'TEC1501', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(81, 0, 'T-1540', 4, 'Alquiler 5/2015', '1.00', '8281.60', '', 2, 1, 'TEC1202', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(82, 0, 'T-1540', 115, 'Mantenimiento 5/2015', '1.00', '1576.51', '', 2, 1, 'TEC1202', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(83, 0, 'T-1567', 4, 'Alquiler 5/2015', '1.00', '1830.16', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(84, 0, 'T-1567', 115, 'Mantenimiento 5/2015', '1.00', '343.16', '', 2, 1, 'TEC1204', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(85, 0, 'T-1569', 4, 'Alquiler 5/2015', '1.00', '10463.13', '', 2, 1, 'TEC1603', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(86, 0, 'T-1569', 115, 'Mantenimiento 5/2015', '1.00', '2615.78', '', 2, 1, 'TEC1603', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(87, 0, 'T-1554', 4, 'Alquiler 5/2015', '1.00', '4515.13', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(88, 0, 'T-1554', 115, 'Mantenimiento', '1.00', '1064.54', '', 2, 1, 'TEC1105A', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(89, 0, 'T-1568', 4, 'Alquiler 5/2015', '1.00', '4854.96', '', 2, 1, 'TEC1701', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(90, 0, 'T-1568', 115, 'Mantenimiento 5/2015', '1.00', '1213.74', '', 2, 1, 'TEC1701', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(91, 0, 'T-1545', 4, 'Alquiler 5/2015', '1.00', '9283.99', '', 2, 1, 'TEC1402', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(92, 0, 'T-1545', 115, 'Mantenimiento 5/2015', '1.00', '1603.97', '', 2, 1, 'TEC1402', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(93, 0, 'T-1545', 4, 'Alquiler 5/2015', '1.00', '14129.44', '', 2, 1, 'TEC1403', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(94, 0, 'T-1545', 115, 'Mantenimiento 5/2015', '1.00', '2441.10', '', 2, 1, 'TEC1403', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(95, 0, 'T-1551', 4, 'Alquiler 5/2015', '1.00', '2226.12', '', 2, 1, 'TEC1703', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(96, 0, 'T-1551', 115, 'Mantenimiento 5/2015', '1.00', '848.03', '', 2, 1, 'TEC1703', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(97, 0, 'T-1551', 4, 'Alquiler 5/2015', '1.00', '9338.65', '', 2, 1, 'TEC1704', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(98, 0, 'T-1551', 115, 'Mantenimiento 5/2015', '1.00', '1694.09', '', 2, 1, 'TEC1704', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(99, 0, 'T-1535', 117, 'REENVOLSO VALOR FACTURA DE AGUA', '1.00', '1545.01', '', 2, 1, 'TEC1302', 1, 0, 0, 1, '2015-05-05 00:00:00', 'perry@insayd.com', '2015-05-05 00:00:00', 'perry@insayd.com'),
(100, 0, '', 3, 'Reservación - TecInar', '1.00', '50.00', 'TecInar', 2, 2, 'ADN002', 1, 0, 0, 1, '2015-05-24 15:08:16', 'perry@insayd.com', '2015-05-24 15:08:16', 'perry@insayd.com'),
(101, 0, '', 3, 'Reservación - Reunión de Cliente', '1.00', '35.00', 'Reunión de Cliente', 2, 2, 'ADN003', 1, 0, 0, 1, '2015-05-24 15:11:35', 'perry@insayd.com', '2015-05-24 15:11:35', 'perry@insayd.com'),
(102, 0, '', 3, 'Reservación - Entrevista Médica', '2.00', '50.00', 'Entrevista Médica', 2, 2, 'ADN004', 1, 0, 0, 1, '2015-05-24 15:18:19', 'perry@insayd.com', '2015-05-24 15:18:19', 'perry@insayd.com'),
(103, 0, '', 3, 'Reservación - Reunion Administrativa', '1.50', '50.00', 'Reunion Administrativa', 2, 1, 'TEC1304', 1, 0, 0, 1, '2015-05-24 15:21:40', 'perry@insayd.com', '2015-05-24 15:21:40', 'perry@insayd.com'),
(104, 0, '', 3, 'Reservación - Reunión con Clientes', '1.00', '50.00', 'Reunión con Clientes', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-05-24 15:24:01', 'perry@insayd.com', '2015-05-24 15:24:01', 'perry@insayd.com'),
(105, 0, '', 3, 'Reservación - Start-up Chile', '2.00', '300.00', 'Start-up Chile', 2, 7, '556241dbc52f4', 1, 0, 0, 1, '2015-05-24 15:27:37', 'perry@insayd.com', '2015-05-24 15:27:37', 'perry@insayd.com'),
(106, 0, '', 3, 'Reservación - ', '3.00', '300.00', '', 2, 7, '5562426b4bd0b', 1, 0, 0, 1, '2015-05-24 15:29:49', 'perry@insayd.com', '2015-05-24 15:29:49', 'perry@insayd.com'),
(107, 0, '', 3, 'Reservación - Reunióm María M. Saghi', '2.00', '50.00', 'Reunióm María M. Saghi', 2, 2, 'ADN001', 1, 0, 0, 1, '2015-05-24 15:36:00', 'perry@insayd.com', '2015-05-24 15:36:00', 'perry@insayd.com'),
(108, 0, '', 3, 'Reservación - Reunion Administrativa - Boceto', '1.00', '35.00', 'Reunion Administrativa - Bocetos', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-05-24 15:38:42', 'perry@insayd.com', '2015-05-24 15:38:42', 'perry@insayd.com'),
(109, 0, '', 3, 'Reservación - Taller de Video - Harold Búcaro', '1.00', '150.00', 'Taller de Video - Harold Búcaro', 2, 7, '5562453f952df', 1, 0, 0, 1, '2015-05-24 15:41:42', 'perry@insayd.com', '2015-05-24 15:41:42', 'perry@insayd.com'),
(110, 0, '', 3, 'Reservación - Actividad con Personal - Soluci', '2.00', '100.00', 'Actividad con Personal - Solución Web', 2, 1, 'TEC1501', 1, 0, 0, 1, '2015-05-24 15:44:28', 'perry@insayd.com', '2015-05-24 15:44:28', 'perry@insayd.com'),
(111, 0, '', 3, 'Reservación - Carta de venta en el Tec - Salo', '1.00', '150.00', 'Carta de venta en el Tec - Salomón Herrera', 2, 7, '556246d936d6d', 1, 0, 0, 1, '2015-05-24 15:49:15', 'perry@insayd.com', '2015-05-24 15:49:15', 'perry@insayd.com'),
(112, 0, '', 3, 'Reservación - Splash - Diego Rios', '3.00', '150.00', 'Splash - Diego Rios', 2, 7, '5562426b4bd0b', 1, 0, 0, 1, '2015-05-24 15:52:38', 'perry@insayd.com', '2015-05-24 15:52:38', 'perry@insayd.com'),
(113, 0, '', 3, 'Reservación - Actividad Especial - Social Mee', '2.00', '300.00', 'Actividad Especial - Social Meet', 2, 7, '5562489480049', 1, 0, 0, 1, '2015-05-24 15:57:39', 'perry@insayd.com', '2015-05-24 15:57:39', 'perry@insayd.com'),
(114, 0, '', 3, 'Reservación - Oscar Leche', '2.00', '300.00', 'Oscar Leche', 2, 7, '55624ad6a8803', 1, 0, 0, 1, '2015-05-24 16:06:01', 'perry@insayd.com', '2015-05-24 16:06:01', 'perry@insayd.com'),
(115, 0, '', 3, 'Reservación - Splash - Diego Rios', '3.00', '150.00', 'Splash - Diego Rios', 2, 7, '5562426b4bd0b', 1, 0, 0, 1, '2015-05-24 16:15:58', 'perry@insayd.com', '2015-05-24 16:15:58', 'perry@insayd.com'),
(116, 0, '', 3, 'Reservación - Presentación - Joel Isidro', '4.00', '300.00', 'Presentación - Joel Isidro', 2, 7, '55624e0ba16cc', 1, 0, 0, 1, '2015-05-24 16:19:27', 'perry@insayd.com', '2015-05-24 16:19:27', 'perry@insayd.com'),
(117, 0, '', 3, 'Reservación - Reunion Administrativa - Boceto', '1.00', '50.00', 'Reunion Administrativa - Bocetos', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-05-24 16:28:18', 'perry@insayd.com', '2015-05-24 16:28:18', 'perry@insayd.com'),
(118, 0, '', 3, 'Reservación - Actividad - Actualización Médic', '2.00', '50.00', 'Actividad - Actualización Médica', 2, 2, 'ADN004', 1, 0, 0, 1, '2015-05-24 16:33:22', 'perry@insayd.com', '2015-05-24 16:33:22', 'perry@insayd.com'),
(119, 0, '', 3, 'Reservación - Actividad - Salomón Herrera', '2.00', '150.00', 'Actividad - Salomón Herrera', 2, 7, '556246d936d6d', 1, 0, 0, 1, '2015-05-24 16:36:08', 'perry@insayd.com', '2015-05-24 16:36:08', 'perry@insayd.com'),
(120, 0, '', 3, 'Reservación - Taller hablar en público', '4.00', '300.00', 'Taller hablar en público', 2, 7, '556252ccc1ac2', 1, 0, 0, 1, '2015-05-24 16:47:49', 'perry@insayd.com', '2015-05-24 16:47:49', 'perry@insayd.com'),
(121, 0, '', 3, 'Reservación - Actividad - Intedya', '1.00', '300.00', 'Actividad - Intedya', 2, 7, '5562558a4ef88', 1, 0, 0, 1, '2015-05-24 16:51:52', 'perry@insayd.com', '2015-05-24 16:51:52', 'perry@insayd.com'),
(122, 0, '', 3, 'Reservación - Actividad - Orangetalent', '2.00', '300.00', 'Actividad - Orangetalent', 2, 7, '556256a1b2411', 1, 0, 0, 1, '2015-05-24 16:56:51', 'perry@insayd.com', '2015-05-24 16:56:51', 'perry@insayd.com'),
(123, 0, '', 3, 'Reservación - Presentación - Joel Isidro', '4.00', '300.00', 'Presentación - Joel Isidro', 2, 7, '55624e0ba16cc', 1, 0, 0, 1, '2015-05-24 16:59:16', 'perry@insayd.com', '2015-05-24 16:59:16', 'perry@insayd.com'),
(124, 0, '', 3, 'Reservación - Reunión de Trabajo - Telecomuni', '3.00', '150.00', 'Reunión de Trabajo - Telecomunicaciones Guate', 2, 7, '55625b035366b', 1, 0, 0, 1, '2015-05-24 17:15:45', 'perry@insayd.com', '2015-05-24 17:15:45', 'perry@insayd.com'),
(125, 0, '', 3, 'Reservación - Reunión de Trabajo - Telecomuni', '7.50', '150.00', 'Reunión de Trabajo - Telecomunicaciones Guate', 2, 7, '55625b035366b', 1, 0, 0, 1, '2015-05-24 17:17:52', 'perry@insayd.com', '2015-05-24 17:17:52', 'perry@insayd.com'),
(126, 0, '', 3, 'Reservación - Taller de Introducción a la Adm', '1.00', '50.00', 'Taller de Introducción a la Administración de Proyectos', 2, 1, 'TEC1201', 1, 0, 0, 1, '2015-05-24 17:26:27', 'perry@insayd.com', '2015-05-24 17:26:27', 'perry@insayd.com'),
(127, 0, '', 3, 'Reservación - Reunion de Trabajo', '2.00', '50.00', 'Reunion de Trabajo', 2, 2, 'ADN001', 1, 0, 0, 1, '2015-05-27 16:48:14', 'william.cuc@insayd.com', '2015-05-27 16:48:14', 'william.cuc@insayd.com'),
(128, 0, '', 3, 'Reservación - Reunión con Asociados', '2.00', '100.00', 'Reunión con Asociados', 2, 2, 'ADN001', 1, 0, 0, 1, '2015-06-01 09:33:11', 'perry@insayd.com', '2015-06-01 09:33:11', 'perry@insayd.com'),
(129, 0, '', 3, 'Reservación - Reunion de trabajo', '2.00', '100.00', 'Reunion de trabajo', 2, 2, 'ADN001', 1, 0, 0, 1, '2015-06-01 09:35:07', 'perry@insayd.com', '2015-06-01 09:35:07', 'perry@insayd.com'),
(130, 0, '', 3, 'Reservación - Reunión con Asociados', '2.00', '100.00', 'Reunión con Asociados', 2, 2, 'ADN001', 1, 0, 0, 1, '2015-06-01 09:36:25', 'perry@insayd.com', '2015-06-01 09:36:25', 'perry@insayd.com'),
(131, 0, '', 3, 'Reservación - Reunion de trabajo', '1.00', '50.00', 'Reunion de trabajo', 2, 1, 'TEC1104', 1, 0, 0, 1, '2015-06-01 09:38:53', 'perry@insayd.com', '2015-06-01 09:38:53', 'perry@insayd.com'),
(132, 0, '', 3, 'Reservación - Reunion de trabajo', '2.00', '50.00', 'Reunion de trabajo', 2, 2, 'ADN004', 1, 0, 0, 1, '2015-06-01 09:41:02', 'perry@insayd.com', '2015-06-01 09:41:02', 'perry@insayd.com'),
(133, 0, 'T-1543', 4, 'Alquiler Mayo', '1.00', '5255.04', '', 2, 1, 'TEC1110', 1, 0, 0, 1, '2015-05-05 00:00:00', 'rmedina@apolo.gt', '2015-05-05 00:00:00', 'rmedina@apolo.gt');

-- --------------------------------------------------------

--
-- Table structure for table `ig_perservicio`
--

CREATE TABLE `ig_perservicio` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `dpi` varchar(16) COLLATE utf8_bin NOT NULL,
  `nit` varchar(12) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(25) COLLATE utf8_bin NOT NULL,
  `estatus` tinyint(4) NOT NULL,
  `tipoper` tinyint(4) NOT NULL,
  `observaciones` tinytext COLLATE utf8_bin NOT NULL,
  `correo` varchar(200) COLLATE utf8_bin NOT NULL,
  `carne` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ig_productos`
--

CREATE TABLE `ig_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_bin NOT NULL,
  `nombre_corto` varchar(60) COLLATE utf8_bin NOT NULL,
  `tipo` int(4) NOT NULL,
  `precio` decimal(11,2) NOT NULL DEFAULT '0.00',
  `estatus` int(4) NOT NULL DEFAULT '1',
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `moneda` int(4) NOT NULL,
  `fecha_precio` datetime DEFAULT NULL,
  `usuario_precio` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `precio_fijo` int(4) DEFAULT '0',
  `requiereot` int(4) NOT NULL DEFAULT '2',
  `incluyecorte` int(1) DEFAULT NULL,
  `descripcion_lg` text COLLATE utf8_bin,
  `comision` decimal(11,2) NOT NULL,
  `responsable` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `comodin` varchar(15) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_productos`
--

INSERT INTO `ig_productos` (`id`, `nombre`, `nombre_corto`, `tipo`, `precio`, `estatus`, `institucion`, `condominio`, `moneda`, `fecha_precio`, `usuario_precio`, `precio_fijo`, `requiereot`, `incluyecorte`, `descripcion_lg`, `comision`, `responsable`, `comodin`) VALUES
(1, 'Cuota de Convenio de Pago', 'Cuota de Convenio', 2, '0.00', 1, 2, 1, 1, '2015-05-23 17:15:58', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(2, 'Saldo Anterior', 'Saldo Anterior', 2, '0.00', 1, 2, 1, 1, '2015-05-23 17:16:14', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(3, 'Reservacion de Area', 'Reservacion', 3, '100.00', 1, 2, 1, 1, '2015-05-23 17:16:32', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(4, 'Servicio de Alquiler', 'Alquiler', 2, '1200.00', 1, 2, 1, 1, '2015-05-18 17:20:11', 'perry@insayd.com', 1, 2, 1, 'Oficinas Privadas - *Desde $150 mensuales, sujeto a cotización (tamaño y disponibilidad) ', '0.00', NULL, NULL),
(5, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 5, '100.00', 1, 2, 1, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(6, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 5, '0.00', 1, 2, 1, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(7, 'Daños al Edificio', 'Daños', 4, '0.00', 1, 2, 1, 1, '2015-05-23 17:16:51', 'perry@insayd.com', 2, 2, 2, 'DaÃ±os ocacionados al edificio', '0.00', NULL, NULL),
(8, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 1, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(9, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 1, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(10, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 1, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(11, 'Mandados Ciudad / Unidad', 'Mandados', 5, '35.00', 1, 2, 1, 1, '2015-05-18 17:27:05', 'perry@insayd.com', 1, 2, 2, 'Mandados Perí­metro de la Ciudad (ir al banco, tramitar algún doc., etc.)', '0.00', NULL, NULL),
(12, 'Mensajería Ciudad / Unidad', 'Mensajería', 5, '35.00', 1, 2, 1, 1, '2015-05-18 17:27:42', 'perry@insayd.com', 1, 2, 2, 'Mensajerí­a Perí­metro de la Ciudad', '0.00', NULL, NULL),
(13, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 1, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(14, 'Servicios Adicionales Of. Virt / Mes', 'Of. Virtual / Telefono', 5, '234.00', 1, 2, 1, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Recepción de Correspondencia - Recepción de llamadas personalizadas, Redireccionamiento de llamadas, Buzón de Voz, Lí­nea telefónica exclusiva, Dirección Fiscal', '0.00', NULL, NULL),
(15, 'Cuota Especial de Parqueo', 'Parqueo Especial', 2, '50.00', 1, 2, 1, 1, '2015-05-23 17:17:26', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(16, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 1, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(17, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 1, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(18, 'Cuota de Convenio de Pago', 'Cuota de Convenio', 2, '0.00', 1, 2, 2, 1, '2015-05-23 17:18:07', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(19, 'Saldo Anterior', 'Saldo Anterior', 2, '0.00', 1, 2, 2, 1, '2015-05-23 17:18:45', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(20, 'Reservacion de Area', 'Reservacion', 3, '100.00', 1, 2, 2, 1, '2015-05-23 17:19:12', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(21, 'Servicio de Alquiler', 'Alquiler', 2, '1200.00', 1, 2, 2, 1, '2015-05-18 17:20:11', 'perry@insayd.com', 1, 2, 1, 'Oficinas Privadas - *Desde $150 mensuales, sujeto a cotización (tamaño y disponibilidad) ', '0.00', NULL, NULL),
(22, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 2, '100.00', 1, 2, 2, 1, '2015-05-23 17:20:22', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(23, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 2, '0.00', 1, 2, 2, 1, '2015-05-23 17:21:02', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(24, 'Daños al Edificio', 'Daños', 4, '0.00', 1, 2, 2, 1, '2015-05-23 17:21:54', 'perry@insayd.com', 2, 2, 2, 'DaÃ±os ocacionados al edificio', '0.00', NULL, NULL),
(25, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 2, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(26, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 2, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(27, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 2, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(28, 'Mandados Ciudad / Unidad', 'Mandados', 5, '35.00', 1, 2, 2, 1, '2015-05-18 17:27:05', 'perry@insayd.com', 1, 2, 2, 'Mandados Perí­metro de la Ciudad (ir al banco, tramitar algún doc., etc.)', '0.00', NULL, NULL),
(29, 'Mensajería Ciudad / Unidad', 'Mensajería', 5, '35.00', 1, 2, 2, 1, '2015-05-18 17:27:42', 'perry@insayd.com', 1, 2, 2, 'Mensajerí­a Perí­metro de la Ciudad', '0.00', NULL, NULL),
(30, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 2, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(31, 'Servicios Adicionales Of. Virt / Mes', 'Of. Virtual / Telefono', 5, '234.00', 1, 2, 2, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Recepción de Correspondencia - Recepción de llamadas personalizadas, Redireccionamiento de llamadas, Buzón de Voz, Lí­nea telefónica exclusiva, Dirección Fiscal', '0.00', NULL, NULL),
(32, 'Cuota Especial de Parqueo', 'Parqueo Especial', 5, '50.00', 1, 2, 2, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(33, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 2, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(34, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 2, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(35, 'Cuota de Convenio de Pago', 'Cuota de Convenio', 1, '0.00', 1, 2, 3, 1, '2015-05-18 17:11:50', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(36, 'Saldo Anterior', 'Saldo Anterior', 1, '0.00', 1, 2, 3, 1, '2015-04-20 12:06:57', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(37, 'Reservacion de Area', 'Reservacion', 3, '100.00', 1, 2, 3, 1, '2015-05-24 14:39:13', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(38, 'Servicio de Alquiler', 'Alquiler', 2, '1200.00', 1, 2, 3, 1, '2015-05-18 17:20:11', 'perry@insayd.com', 1, 2, 1, 'Oficinas Privadas - *Desde $150 mensuales, sujeto a cotización (tamaño y disponibilidad) ', '0.00', NULL, NULL),
(39, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 5, '100.00', 1, 2, 3, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(40, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 5, '0.00', 1, 2, 3, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(41, 'Daños al Edificio', 'Daños', 5, '0.00', 1, 2, 3, 1, '2015-04-20 12:05:55', 'perry@insayd.com', 2, 2, 2, 'Daños ocacionados al edificio', '0.00', NULL, NULL),
(42, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 3, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(43, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 3, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(44, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 3, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(45, 'Mandados Ciudad / Unidad', 'Mandados', 5, '35.00', 1, 2, 3, 1, '2015-05-18 17:27:05', 'perry@insayd.com', 1, 2, 2, 'Mandados Perí­metro de la Ciudad (ir al banco, tramitar algún doc., etc.)', '0.00', NULL, NULL),
(46, 'Mensajería Ciudad / Unidad', 'Mensajería', 5, '35.00', 1, 2, 3, 1, '2015-05-18 17:27:42', 'perry@insayd.com', 1, 2, 2, 'Mensajerí­a Perí­metro de la Ciudad', '0.00', NULL, NULL),
(47, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 3, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(48, 'Servicios Adicionales Of. Virt / Mes', 'Of. Virtual / Telefono', 5, '234.00', 1, 2, 3, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Recepción de Correspondencia - Recepción de llamadas personalizadas, Redireccionamiento de llamadas, Buzón de Voz, Lí­nea telefónica exclusiva, Dirección Fiscal', '0.00', NULL, NULL),
(49, 'Cuota Especial de Parqueo', 'Parqueo Especial', 5, '50.00', 1, 2, 3, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(50, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 3, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(51, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 3, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(52, 'Cuota de Convenio de Pago', 'Cuota de Convenio', 1, '0.00', 1, 2, 4, 1, '2015-05-18 17:11:50', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(53, 'Saldo Anterior', 'Saldo Anterior', 1, '0.00', 1, 2, 4, 1, '2015-04-20 12:06:57', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(54, 'Reservacion de Area', 'Reservacion', 3, '100.00', 1, 2, 4, 1, '2015-05-24 14:39:35', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(55, 'Servicio de Alquiler', 'Alquiler', 2, '1200.00', 1, 2, 4, 1, '2015-05-18 17:20:11', 'perry@insayd.com', 1, 2, 1, 'Oficinas Privadas - *Desde $150 mensuales, sujeto a cotización (tamaño y disponibilidad) ', '0.00', NULL, NULL),
(56, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 5, '100.00', 1, 2, 4, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(57, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 5, '0.00', 1, 2, 4, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(58, 'Daños al Edificio', 'Daños', 5, '0.00', 1, 2, 4, 1, '2015-04-20 12:05:55', 'perry@insayd.com', 2, 2, 2, 'Daños ocacionados al edificio', '0.00', NULL, NULL),
(59, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 4, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(60, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 4, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(61, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 4, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(62, 'Mandados Ciudad / Unidad', 'Mandados', 5, '35.00', 1, 2, 4, 1, '2015-05-18 17:27:05', 'perry@insayd.com', 1, 2, 2, 'Mandados Perí­metro de la Ciudad (ir al banco, tramitar algún doc., etc.)', '0.00', NULL, NULL),
(63, 'Mensajería Ciudad / Unidad', 'Mensajería', 5, '35.00', 1, 2, 4, 1, '2015-05-18 17:27:42', 'perry@insayd.com', 1, 2, 2, 'Mensajerí­a Perí­metro de la Ciudad', '0.00', NULL, NULL),
(64, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 4, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(65, 'Servicios Adicionales Of. Virt / Mes', 'Of. Virtual / Telefono', 5, '234.00', 1, 2, 4, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Recepción de Correspondencia - Recepción de llamadas personalizadas, Redireccionamiento de llamadas, Buzón de Voz, Lí­nea telefónica exclusiva, Dirección Fiscal', '0.00', NULL, NULL),
(66, 'Cuota Especial de Parqueo', 'Parqueo Especial', 5, '50.00', 1, 2, 4, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(67, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 4, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(68, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 4, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(69, 'Cuota de Convenio de Pago', 'Cuota de Convenio', 1, '0.00', 1, 2, 5, 1, '2015-05-18 17:11:50', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(70, 'Saldo Anterior', 'Saldo Anterior', 1, '0.00', 1, 2, 5, 1, '2015-04-20 12:06:57', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(71, 'Reservacion de Area', 'Reservacion', 3, '100.00', 1, 2, 5, 1, '2015-05-24 14:40:24', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(72, 'Servicio de Oficina Virtual / Mes', 'Alquiler', 2, '1200.00', 1, 2, 5, 1, '2015-05-18 17:20:11', 'perry@insayd.com', 1, 2, 1, 'Oficinas Privadas - *Desde $150 mensuales, sujeto a cotización (tamaño y disponibilidad) ', '0.00', NULL, NULL),
(73, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 5, '100.00', 1, 2, 5, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(74, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 5, '0.00', 1, 2, 5, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(75, 'Daños al Edificio', 'Daños', 5, '0.00', 1, 2, 5, 1, '2015-04-20 12:05:55', 'perry@insayd.com', 2, 2, 2, 'Daños ocacionados al edificio', '0.00', NULL, NULL),
(76, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 5, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(77, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 5, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(78, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 5, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(79, 'Mandados Ciudad / Unidad', 'Mandados', 5, '35.00', 1, 2, 5, 1, '2015-05-18 17:27:05', 'perry@insayd.com', 1, 2, 2, 'Mandados Perí­metro de la Ciudad (ir al banco, tramitar algún doc., etc.)', '0.00', NULL, NULL),
(80, 'Mensajería Ciudad / Unidad', 'Mensajería', 5, '35.00', 1, 2, 5, 1, '2015-05-18 17:27:42', 'perry@insayd.com', 1, 2, 2, 'Mensajerí­a Perí­metro de la Ciudad', '0.00', NULL, NULL),
(81, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 5, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(82, 'Cuota Especial de Parqueo', 'Parqueo Especial', 5, '50.00', 1, 2, 5, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(83, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 5, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(84, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 5, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(85, 'Cuota de Convenio de Pago', 'Cuota de Convenio', 1, '0.00', 1, 2, 6, 1, '2015-05-18 17:11:50', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(86, 'Saldo Anterior', 'Saldo Anterior', 1, '0.00', 1, 2, 6, 1, '2015-04-20 12:06:57', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(87, 'Reservacion de Area', 'Reservacion', 3, '100.00', 1, 2, 6, 1, '2015-05-24 14:40:53', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(88, 'Servicio de Alquiler', 'Alquiler', 2, '1200.00', 1, 2, 6, 1, '2015-05-18 17:20:11', 'perry@insayd.com', 1, 2, 1, 'Oficinas Privadas - *Desde $150 mensuales, sujeto a cotización (tamaño y disponibilidad) ', '0.00', NULL, NULL),
(89, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 5, '100.00', 1, 2, 6, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(90, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 5, '0.00', 1, 2, 6, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(91, 'Daños al Edificio', 'Daños', 5, '0.00', 1, 2, 6, 1, '2015-04-20 12:05:55', 'perry@insayd.com', 2, 2, 2, 'Daños ocacionados al edificio', '0.00', NULL, NULL),
(92, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 6, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(93, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 6, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(94, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 6, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(95, 'Mandados Ciudad / Unidad', 'Mandados', 5, '35.00', 1, 2, 6, 1, '2015-05-18 17:27:05', 'perry@insayd.com', 1, 2, 2, 'Mandados Perí­metro de la Ciudad (ir al banco, tramitar algún doc., etc.)', '0.00', NULL, NULL),
(96, 'Mensajería Ciudad / Unidad', 'Mensajería', 5, '35.00', 1, 2, 6, 1, '2015-05-18 17:27:42', 'perry@insayd.com', 1, 2, 2, 'Mensajerí­a Perí­metro de la Ciudad', '0.00', NULL, NULL),
(97, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 6, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(98, 'Servicios Adicionales Of. Virt / Mes', 'Of. Virtual / Telefono', 5, '234.00', 1, 2, 6, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Recepción de Correspondencia - Recepción de llamadas personalizadas, Redireccionamiento de llamadas, Buzón de Voz, Lí­nea telefónica exclusiva, Dirección Fiscal', '0.00', NULL, NULL),
(99, 'Cuota Especial de Parqueo', 'Parqueo Especial', 5, '50.00', 1, 2, 6, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(100, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 6, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(101, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 6, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(102, 'Saldo Anterior', 'Saldo Anterior', 1, '0.00', 1, 2, 7, 1, '2015-04-20 12:06:57', 'perry@insayd.com', 2, 2, 2, 'Saldo anterior', '0.00', NULL, NULL),
(103, 'Reservacion de Area', 'Reservacion', 3, '200.00', 1, 2, 7, 1, '2015-05-24 14:41:58', 'perry@insayd.com', 2, 2, 2, 'Derecho a uso de e-garage (conferencias, capacitaciones, capacidad 50 personas), Alquiler Sala de Conferencias, Alquiler reuniones Brainstorming', '0.00', NULL, NULL),
(104, 'Cargo por Cheque Rechazado', 'Cheque rechazado', 5, '100.00', 1, 2, 7, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 1, 2, 2, '', '0.00', NULL, NULL),
(105, 'Valor Cheque Rechazado', 'Valor Cheque Rechazado', 5, '0.00', 1, 2, 7, 1, '2015-04-21 14:24:21', 'perry@insayd.com', 2, 2, 2, '', '0.00', NULL, NULL),
(106, 'Daños al Edificio', 'Daños', 5, '0.00', 1, 2, 7, 1, '2015-04-20 12:05:55', 'perry@insayd.com', 2, 2, 2, 'Daños ocacionados al edificio', '0.00', NULL, NULL),
(107, 'Fotocopia / Unidad', 'Fotocopia', 5, '1.00', 1, 2, 7, 1, '2015-05-18 17:33:14', 'perry@insayd.com', 1, 2, 2, 'Fotocopia', '0.00', NULL, NULL),
(108, 'Impresión Blanco y Negro', 'Impresión Blanco y Negro', 5, '1.00', 1, 2, 7, 1, '2015-05-18 17:35:35', 'perry@insayd.com', 1, 2, 2, 'Impresión Blanco y Negro', '0.00', NULL, NULL),
(109, 'Impresión Color', 'Impresión Color', 5, '5.00', 1, 2, 7, 1, '2015-05-18 17:35:12', 'perry@insayd.com', 1, 2, 2, 'Impresión Color', '0.00', NULL, NULL),
(110, 'Mentoria / Hora', 'Mentoria / Hora', 5, '50.00', 1, 2, 7, 1, '2015-05-18 17:25:25', 'perry@insayd.com', 1, 2, 2, 'Mentoria / Hora', '0.00', NULL, NULL),
(111, 'Cuota Especial de Parqueo', 'Parqueo Especial', 5, '50.00', 1, 2, 7, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, 'Cuota Especial de Parqueo para Eventos Especiales', '0.00', NULL, NULL),
(112, 'Convocatoria Redes Sociales', 'Conv Redes', 5, '50.00', 1, 2, 7, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(113, 'Diseño Flyer para Redes Sociales', 'Diseño Flyer RS', 5, '150.00', 1, 2, 7, 1, '2015-05-18 17:26:06', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(114, 'Volanteo', 'Volanteo', 5, '50.00', 1, 2, 7, 1, '2015-05-20 15:00:14', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL),
(115, 'Mantenimiento', 'Mantenimiento', 4, '0.00', 1, 2, 1, 1, '2015-05-23 17:22:27', 'perry@insayd.com', 2, 2, 1, 'Servicio mensual de mantenimiento', '0.00', NULL, NULL),
(117, 'Servicios / Productos Varios', 'Varios', 5, '0.00', 1, 2, 1, 1, '2015-05-23 12:46:34', 'perry@insayd.com', 2, 2, 2, 'Servicios o productos no listados en el catÃ¡logo de productos', '0.00', NULL, NULL),
(118, 'Servicio de Alquiler', '', 2, '1200.00', 1, 2, 5, 0, '2015-06-01 14:56:52', 'perry@insayd.com', 1, 2, 1, '', '0.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ig_prorroga_corte`
--

CREATE TABLE `ig_prorroga_corte` (
  `id` bigint(20) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `razon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `estatus` int(4) NOT NULL DEFAULT '1',
  `condominio` int(4) NOT NULL,
  `institucion` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ig_proveedor`
--

CREATE TABLE `ig_proveedor` (
  `id` int(11) NOT NULL,
  `nit` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `contacto` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `diascredito` int(11) NOT NULL DEFAULT '0',
  `estatus` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `obs` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `institucion` int(11) DEFAULT NULL,
  `condominio` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ig_proveedor`
--

INSERT INTO `ig_proveedor` (`id`, `nit`, `nombre`, `telefono`, `correo`, `contacto`, `diascredito`, `estatus`, `fecha`, `usuario`, `obs`, `institucion`, `condominio`) VALUES
(5, '', 'BROADCOM GROUP, S.A.', '', '', '', 30, 1, '0000-00-00 00:00:00', '', '', NULL, NULL),
(2, '716623-0', 'Perry Lee Daniels', '41786953', 'perry@insayd.com', 'Perry Daniels', 0, 1, '0000-00-00 00:00:00', '', '', NULL, NULL),
(4, '32644-5', 'Empresa Eléctrica de Guatemala, S. A.', '22777000', '', '', 0, 1, '0000-00-00 00:00:00', '', '', NULL, NULL),
(6, '', 'Guillermo Eduardo Olmos Quiej', '', '', '', 0, 1, '0000-00-00 00:00:00', '', 'Uniformes', NULL, NULL),
(7, '', 'Seguridad y Vigilancia El Eano S.A.', '', '', '', 30, 1, '0000-00-00 00:00:00', '', 'Seguridad', NULL, NULL),
(8, '', 'ProHygiene', '', '', '', 30, 1, '0000-00-00 00:00:00', '', 'Suministros de limpieza', NULL, NULL),
(9, '', 'Elevadores Otis, S.A. de C.V.', '', '', '', 0, 1, '0000-00-00 00:00:00', '', 'Mantenimiento de Elevadores', NULL, NULL),
(10, '', 'Aprocelan', '', '', '', 30, 1, '0000-00-00 00:00:00', '', '', NULL, NULL),
(11, '', 'Suministro, Instalación y Construcción S. A.', '', '', '', 30, 1, '0000-00-00 00:00:00', '', 'Material de Construcción', NULL, NULL),
(12, '', 'Transportes Fernando', '', '', '', 30, 1, '0000-00-00 00:00:00', '', 'Extracción de Basura', NULL, NULL),
(13, '', 'CorpoMed', '', '', '', 30, 1, '0000-00-00 00:00:00', '', 'Suministros de Limpieza', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ig_tarjetas_vehiculo`
--

CREATE TABLE `ig_tarjetas_vehiculo` (
  `id` bigint(20) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `institucion` int(4) NOT NULL,
  `condominio` int(4) NOT NULL,
  `numero` varchar(100) COLLATE utf8_bin NOT NULL,
  `placa` varchar(10) COLLATE utf8_bin NOT NULL,
  `marca` varchar(150) COLLATE utf8_bin NOT NULL,
  `color` varchar(100) COLLATE utf8_bin NOT NULL,
  `estatus` int(4) NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_bin NOT NULL,
  `verificada` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap_bitacora`
--
ALTER TABLE `ap_bitacora`
  ADD PRIMARY KEY (`fecha`),
  ADD KEY `fk_bitacora_institucion1_idx` (`institucion`);

--
-- Indexes for table `ap_catalogos`
--
ALTER TABLE `ap_catalogos`
  ADD PRIMARY KEY (`id`,`tipo_catalogo`,`institucion`),
  ADD KEY `fk_ins_catalogos_tipo_catalogos1_idx` (`tipo_catalogo`),
  ADD KEY `fk_ins_catalogos_institucion1_idx` (`institucion`);

--
-- Indexes for table `ap_eventcal`
--
ALTER TABLE `ap_eventcal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_instituciones`
--
ALTER TABLE `ap_instituciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_municipios`
--
ALTER TABLE `ap_municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_perfil`
--
ALTER TABLE `ap_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_seccion`
--
ALTER TABLE `ap_seccion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_tipo_catalogos`
--
ALTER TABLE `ap_tipo_catalogos`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indexes for table `ap_unidad`
--
ALTER TABLE `ap_unidad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_usuarios`
--
ALTER TABLE `ap_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- Indexes for table `av_datos_personales`
--
ALTER TABLE `av_datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `av_datos_servicios`
--
ALTER TABLE `av_datos_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_agua`
--
ALTER TABLE `ig_agua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_areas`
--
ALTER TABLE `ig_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_bancos`
--
ALTER TABLE `ig_bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_casas`
--
ALTER TABLE `ig_casas`
  ADD PRIMARY KEY (`codigo`,`condominio`,`institucion`);

--
-- Indexes for table `ig_conveniospago`
--
ALTER TABLE `ig_conveniospago`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_eventcal`
--
ALTER TABLE `ig_eventcal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_gasto`
--
ALTER TABLE `ig_gasto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_movimientos`
--
ALTER TABLE `ig_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_ordenes_trabajo`
--
ALTER TABLE `ig_ordenes_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_pagos_banco`
--
ALTER TABLE `ig_pagos_banco`
  ADD PRIMARY KEY (`correlativo`);

--
-- Indexes for table `ig_pedido`
--
ALTER TABLE `ig_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_perservicio`
--
ALTER TABLE `ig_perservicio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_productos`
--
ALTER TABLE `ig_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_prorroga_corte`
--
ALTER TABLE `ig_prorroga_corte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_proveedor`
--
ALTER TABLE `ig_proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ig_tarjetas_vehiculo`
--
ALTER TABLE `ig_tarjetas_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap_eventcal`
--
ALTER TABLE `ap_eventcal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ap_instituciones`
--
ALTER TABLE `ap_instituciones`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID de entidad', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ap_municipios`
--
ALTER TABLE `ap_municipios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2218;

--
-- AUTO_INCREMENT for table `ap_perfil`
--
ALTER TABLE `ap_perfil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ap_seccion`
--
ALTER TABLE `ap_seccion`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ap_tipo_catalogos`
--
ALTER TABLE `ap_tipo_catalogos`
  MODIFY `idtipo` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ap_unidad`
--
ALTER TABLE `ap_unidad`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ap_usuarios`
--
ALTER TABLE `ap_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `av_datos_personales`
--
ALTER TABLE `av_datos_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `av_datos_servicios`
--
ALTER TABLE `av_datos_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_agua`
--
ALTER TABLE `ig_agua`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_areas`
--
ALTER TABLE `ig_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ig_bancos`
--
ALTER TABLE `ig_bancos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ig_conveniospago`
--
ALTER TABLE `ig_conveniospago`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_eventcal`
--
ALTER TABLE `ig_eventcal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ig_gasto`
--
ALTER TABLE `ig_gasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ig_movimientos`
--
ALTER TABLE `ig_movimientos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ig_ordenes_trabajo`
--
ALTER TABLE `ig_ordenes_trabajo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_pagos_banco`
--
ALTER TABLE `ig_pagos_banco`
  MODIFY `correlativo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_pedido`
--
ALTER TABLE `ig_pedido`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `ig_perservicio`
--
ALTER TABLE `ig_perservicio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_productos`
--
ALTER TABLE `ig_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `ig_prorroga_corte`
--
ALTER TABLE `ig_prorroga_corte`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ig_proveedor`
--
ALTER TABLE `ig_proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ig_tarjetas_vehiculo`
--
ALTER TABLE `ig_tarjetas_vehiculo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
