-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 06-10-2015 a las 01:06:59
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `ctrl_estd`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `admin`
-- 

CREATE TABLE `admin` (
  `id_usu` varchar(15) character set utf8 collate utf8_bin NOT NULL,
  `pass` varchar(15) character set utf8 collate utf8_bin NOT NULL,
  `nombres` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `apellidos` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `admin`
-- 

INSERT INTO `admin` VALUES (0x3234333531313335, 0x3234333531313335, 0x416e7561722057616c6964, 0x416275746f6f6b2043686972696e6f);
INSERT INTO `admin` VALUES (0x3234353831303833, 0x3234353831303833, 0x416c65786973204a6f7365, 0x47756572652042617272657261);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `asignatura`
-- 

CREATE TABLE `asignatura` (
  `cod_asignatura` int(3) NOT NULL default '0',
  `nom_asignatura` varchar(30) default NULL,
  `nom_asig_cto` varchar(15) default NULL,
  PRIMARY KEY  (`cod_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `asignatura`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `configuracion`
-- 

CREATE TABLE `configuracion` (
  `nom_plantel` varchar(30) default NULL,
  `cod_plantel` varchar(3) default NULL,
  `ciudad` varchar(15) default NULL,
  `estado` varchar(20) default NULL,
  `director` varchar(40) default NULL,
  `ced_director` varchar(10) default NULL,
  `per_academico` date default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `configuracion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estudiante`
-- 

CREATE TABLE `estudiante` (
  `cod_est` varchar(10) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `fecha_nac` date default NULL,
  `lugar_nac` varchar(10) NOT NULL,
  `promedio` int(2) default NULL,
  `grado` enum('7','8','9') default NULL,
  `egreso` enum('0','1') default NULL,
  PRIMARY KEY  (`cod_est`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `estudiante`
-- 

INSERT INTO `estudiante` VALUES ('24581083', 'alexis Jose', 'Guere Barrera', '1994-12-15', 'falcon', NULL, NULL, NULL);
INSERT INTO `estudiante` VALUES ('44444', 'anuar abutook', 'asdasdasdasdas', '2012-12-12', 'falcon', NULL, NULL, NULL);
INSERT INTO `estudiante` VALUES ('666', 'alersis el landrox', 'yayayayahooo', '0000-00-00', 'lacalle', NULL, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `notas`
-- 

CREATE TABLE `notas` (
  `cod_estudiante` int(5) default NULL,
  `nota` int(2) default NULL,
  `lapso` date default NULL,
  `cod_plantel` int(3) default NULL,
  `cod_asignatura` int(3) default NULL,
  KEY `cod_estudiante` (`cod_estudiante`),
  KEY `cod_plantel` (`cod_plantel`),
  KEY `cod_asignatura` (`cod_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `notas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `plantel`
-- 

CREATE TABLE `plantel` (
  `cod_plantel` int(3) NOT NULL default '0',
  `nom_plantel` varchar(30) default NULL,
  PRIMARY KEY  (`cod_plantel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `plantel`
-- 

