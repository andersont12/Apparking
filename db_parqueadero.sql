-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2024 a las 00:33:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_parqueadero`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Registro_Vigilante` (IN `Vig_NumCed` INT, IN `Nombre_Vigilante` VARCHAR(255))   BEGIN
    UPDATE tbl_vigilante
    SET Vig_Nom = Nombre_Vigilante
    WHERE Vig_NumCed = Vig_NumCed;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_registro_Vehiculos` (IN `pc` VARCHAR(45))   BEGIN
    DELETE FROM tbl_vehiculos WHERE pc=placa;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_registro_residentes` (`c1_NumCed` INT(11), `c2_nom` VARCHAR(45), `c3_Apellido` VARCHAR(45), `c4_Tel` VARCHAR(45), `c5_Correo` VARCHAR(45), `c6_Torre` VARCHAR(45), `c7_Apto` VARCHAR(45))   BEGIN
    INSERT INTO tbl_residente (Resi_NumCed,Resi_Nom,Resi_Apellido,Rsei_Tel,Resi_Correo,Resi_Torre,Resi_Apto)
    VALUES (c1_NumCed, c2_nom, c3_Apellido, c4_Tel, c5_Correo, c6_Torre, c7_Apto);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vig_ingreso_vis` ()   begin 
select tbl_vigilante.Vig_NumCed,Vig_Apellido,Id_ingreso,Ing_Apto,Ing_Torre Vis_NumCed,Vis_Nombre
from ((tbl_ingreso
inner join tbl_vigilante on
tbl_ingreso.TBL_VIGILANTE_Vig_NumCed=tbl_vigilante.Vig_NumCed)
inner join tbl_visitante on
tbl_visitante.TBL_INGRESO_Id_ingreso=tbl_ingreso.Id_ingreso);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vis_ingreso_vehiculo` ()   BEGIN 
select tbl_visitante.Vis_NumCed,Vis_Nombre,Vis_Apellido,Id_ingreso,Ing_Apto,Ing_Torre,Placa,Vehi_Tipo
from ((tbl_visitante
inner join tbl_ingreso on
tbl_visitante.TBL_INGRESO_Id_ingreso=tbl_ingreso.Id_ingreso)
inner join tbl_vehiculos on
tbl_vehiculos.TBL_VISITANTE_Vis_NumCed=tbl_visitante.Vis_NumCed);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audi_vigilante`
--

CREATE TABLE `audi_vigilante` (
  `id_audi_Vig` int(10) NOT NULL,
  `Vig_NumCed_Audi` int(11) NOT NULL,
  `Vig_Nom_anterior` varchar(45) NOT NULL,
  `Vig_Apellido_anterior` varchar(45) NOT NULL,
  `Vig_TurnoInicio_anterior` int(11) NOT NULL,
  `Vig_TurnoFin_anterior` varchar(45) NOT NULL,
  `Vig_Nom_nuevo` varchar(45) NOT NULL,
  `Vig_Apellido_nuevo` varchar(45) NOT NULL,
  `Vig_TurnoInicio_nuevo` int(11) NOT NULL,
  `Vig_TurnoFin_nuevo` varchar(45) NOT NULL,
  `audi_fechaModificacion` datetime DEFAULT NULL,
  `audi_usuario` varchar(10) DEFAULT NULL,
  `audi_accion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audi_visitante`
--

CREATE TABLE `audi_visitante` (
  `id_audi` int(10) NOT NULL,
  `Vis_NumCed_Audi` int(11) NOT NULL,
  `Vis_Nombre_anterior` varchar(45) NOT NULL,
  `Vis_Apellido_anterior` varchar(45) NOT NULL,
  `Vis_Tel_anterior` int(11) NOT NULL,
  `Vis_Correo_anterior` varchar(45) NOT NULL,
  `Vis_Nombre_nuevo` varchar(45) NOT NULL,
  `Vis_Apellido_nuevo` varchar(45) NOT NULL,
  `Vis_Tel_nuevo` int(11) NOT NULL,
  `Vis_Correo_nuevo` varchar(45) NOT NULL,
  `audi_fechaModificacion` datetime DEFAULT NULL,
  `audi_usuario` varchar(10) DEFAULT NULL,
  `audi_accion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'Supervisor'),
(2, 'Residente'),
(3, 'Vigilante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingreso`
--

CREATE TABLE `tbl_ingreso` (
  `Id_ingreso` int(11) NOT NULL,
  `Ing_Apto` varchar(45) NOT NULL,
  `Ing_Torre` varchar(45) NOT NULL,
  `TBL_VIGILANTE_Vig_NumCed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_ingreso`
--

INSERT INTO `tbl_ingreso` (`Id_ingreso`, `Ing_Apto`, `Ing_Torre`, `TBL_VIGILANTE_Vig_NumCed`) VALUES
(1, '504', '9', 0),
(2, '505', '1', 0),
(3, '102', '5', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_isla`
--

CREATE TABLE `tbl_isla` (
  `Id_Isla` int(11) NOT NULL,
  `TBL_VEHICULOS_Placa` varchar(11) NOT NULL,
  `TBL_RESIDENTE_Resi_NumCed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_observacion`
--

CREATE TABLE `tbl_observacion` (
  `Id_Observacion` int(11) NOT NULL,
  `Obs_Fecha` varchar(45) NOT NULL,
  `Obs_Descrip` longtext NOT NULL,
  `TBL_VIGILANTE_Vig_NumCed` int(11) NOT NULL,
  `TBL_VEHICULOS_Placa` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `Id_Reserva` int(11) NOT NULL,
  `TBL_RESIDENTE_Resi_NumCed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_residente`
--

CREATE TABLE `tbl_residente` (
  `Resi_NumCed` int(11) NOT NULL,
  `Resi_nom` varchar(45) NOT NULL,
  `Resi_Apellido` varchar(45) NOT NULL,
  `Rsei_Tel` varchar(45) NOT NULL,
  `Resi_Correo` varchar(45) NOT NULL,
  `Resi_Torre` varchar(45) NOT NULL,
  `Resi_Apto` varchar(45) NOT NULL,
  `Copia_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_residente`
--

INSERT INTO `tbl_residente` (`Resi_NumCed`, `Resi_nom`, `Resi_Apellido`, `Rsei_Tel`, `Resi_Correo`, `Resi_Torre`, `Resi_Apto`, `Copia_Id`) VALUES
(10846353, 'LOURDES DEL ROCÍO', 'LARA VALENCIA ', '3139199050', 'lourdes.lara@gmail.com', '8', '504', NULL),
(18748147, '	ALEXANDRA ELIZABETH ', '	CARRION CÓRDOVA 	', '3242402258', 'n/a', '4', '402', NULL),
(30209867, '	GUSTAVO PATRICIO ', '	MENA ZAPATA', '3105979665', 'n/a', '5', '102', NULL),
(47405385, '	FANNY MARGOTH ', '	CAÑAR CAISALITIN ', '3250410192', 'n/a', '6', '503', NULL),
(51289652, '	ORGE XAVIER 	', 'PAREDES LUCAS ', '3261427822', 'n/a', '5', '501', NULL),
(68786791, '	JOSÉ ELIECER ', '	CHICAIZA RONQUILLO ', '3202568938', '9', 'n/a', '604', NULL),
(74342701, 'LILLI LUCIA', '	ROMERO PACHECO', '3113960536', 'n/a', '4', '105', NULL),
(75673419, '	SUSANA DEL ROCIO', '	ANDRADE SOTO', '3246371208', 'n/a', '6', '305', NULL),
(75798389, 'EDGAR GUILLERNO ', '	GUASCA TULMO', '3126324796', 'n/a', '7', '205', NULL),
(92003022, '	JORGE ALFONSO ', '	LLERENA VARGAS', '3168247897', 'n/a', '2', '301', NULL),
(1024569876, 'juan', 'perez', '3154789654', 'juanp1@gmail.com', '2', '504', NULL),
(2147483647, 'esteban', 'torres', '3147896459', 'estebant5@gmail.com', '6', '202', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_supervisor`
--

CREATE TABLE `tbl_supervisor` (
  `Supe_NumCed` int(11) NOT NULL,
  `Supe_nom` varchar(45) NOT NULL,
  `Supe_Apellido` varchar(45) NOT NULL,
  `Supe_Tel` varchar(45) NOT NULL,
  `Supe_Correo` varchar(45) NOT NULL,
  `Copia_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vehiculos`
--

CREATE TABLE `tbl_vehiculos` (
  `Placa` varchar(11) NOT NULL,
  `Vehi_Tipo` varchar(45) NOT NULL,
  `Vehi_Marca` varchar(45) NOT NULL,
  `TBL_VISITANTE_Vis_NumCed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_vehiculos`
--

INSERT INTO `tbl_vehiculos` (`Placa`, `Vehi_Tipo`, `Vehi_Marca`, `TBL_VISITANTE_Vis_NumCed`) VALUES
('CVB589', 'CARRO', 'SUBARU', 29792882),
('JHG37F', 'MOTO', 'BENELLI', 75094653),
('LJK83G', 'MOTO', 'HONDA', 74186794),
('QWE764', 'CARRO', 'RENAULT', 92729768),
('USH33G', 'moto', 'AKT', 0),
('WER49F', 'MOTO', 'AKT', 85899653),
('YGU13F', 'moto', 'benelli', 0),
('ZXC456', 'CARRO', 'TOYOTA', 93152134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vigilante`
--

CREATE TABLE `tbl_vigilante` (
  `Vig_NumCed` int(11) NOT NULL,
  `Vig_Nom` varchar(45) NOT NULL,
  `Vig_Apellido` varchar(45) NOT NULL,
  `Vig_TurnoInicio` varchar(45) NOT NULL,
  `Vig_TurnoFin` varchar(45) NOT NULL,
  `Copia_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_vigilante`
--

INSERT INTO `tbl_vigilante` (`Vig_NumCed`, `Vig_Nom`, `Vig_Apellido`, `Vig_TurnoInicio`, `Vig_TurnoFin`, `Copia_Id`) VALUES
(38386463, 'RAQUEL ALEJANDRA', 'ARCOS CABEZAS', '0.000768935024715768', '0.000823858955017301', NULL),
(56698683, 'LENIN EDUARDO', 'SAGUAY SANAGUANO', '0.000604163233811171', '0.000659087164112703', NULL),
(57888055, 'HERNÁN SEBASTIÁN', 'LÓPEZ MONTERO', '0.000659087164112703', '0.000714011094414236', NULL),
(64199602, 'PEDRO', 'GUARACA CUÑAS', '0.000714011094414236', '0.000768935024715768', NULL),
(80388101, 'KARINA MONSERRATH', 'MASACHE ALVARADO', '0.000878782885318833', '0.000933706815620365', NULL),
(81832572, 'DIEGO JAVIER', 'CAJAS LOGROÑO', '0.000933706815620365', '0.000988630746416213', NULL),
(85761837, 'GEORGINA PIEDAD', 'PANCHEZ HERNANDEZ', '0.000823858955017301', '0.000878782885318833', NULL);

--
-- Disparadores `tbl_vigilante`
--
DELIMITER $$
CREATE TRIGGER `vigilantes_before_update` BEFORE UPDATE ON `tbl_vigilante` FOR EACH ROW INSERT INTO audi_vigilante(
    Vig_Nom_anterior,
	Vig_Apellido_anterior, 
	Vig_TurnoInicio_anterior, 
	Vig_TurnoFin_anterior, 
	Vig_Nom_nuevo, 
	Vig_Apellido_nuevo, 
	Vig_TurnoInicio_nuevo, 
	Vig_TurnoFin_nuevo, 
	audi_fechaModificacion,
	audi_usuario,
	audi_accion)
VALUES(
	new.Vig_NumCed,
    old.Vig_Nom,
	old.Vig_Apellido, 
	old.Vig_TurnoInicio, 
	old.Vig_TurnoFin, 
	new.Vig_Nom, 
	new.Vig_Apellido, 
	new.Vig_TurnoInicio, 
	new.Vig_TurnoFin, 
	NOW(),
CURRENT_USER(),
	'Actualización')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_visitante`
--

CREATE TABLE `tbl_visitante` (
  `Vis_NumCed` int(11) NOT NULL,
  `Vis_Nombre` varchar(45) NOT NULL,
  `Vis_Apellido` varchar(45) NOT NULL,
  `Vis_Tel` int(11) NOT NULL,
  `Vis_Correo` varchar(45) NOT NULL,
  `TBL_INGRESO_Id_ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_visitante`
--

INSERT INTO `tbl_visitante` (`Vis_NumCed`, `Vis_Nombre`, `Vis_Apellido`, `Vis_Tel`, `Vis_Correo`, `TBL_INGRESO_Id_ingreso`) VALUES
(1021876567, 'liam', 'torres', 2147483647, 'liam@hotmail.com', 1),
(1023987608, 'lina', 'paez', 2147483647, 'andrea@hotmail.com', 2),
(1023789654, 'antony ', 'romero', 9874563, 'aromer@gmail.com', 3);

--
-- Disparadores `tbl_visitante`
--
DELIMITER $$
CREATE TRIGGER `visitantes_before_update` BEFORE UPDATE ON `tbl_visitante` FOR EACH ROW INSERT INTO audi_visitante(
    Vis_NumCed_Audi,
	Vis_Nombre_anterior,
	Vis_Apellido_anterior, 
	Vis_Tel_anterior, 
	Vis_Correo_anterior, 
	Vis_Nombre_nuevo, 
	Vis_Apellido_nuevo, 
	Vis_Tel_nuevo, 
	Vis_Correo_nuevo, 
	audi_fechaModificacion,
	audi_usuario,
	audi_accion)
VALUES(
	new.Vis_NumCed,
	new.Vis_Nombre,
	new.Vis_Apellido, 
	new.Vis_Tel, 
	new.Vis_Correo, 
	old.Vis_Nombre, 
	old.Vis_Apellido, 
	old.Vis_Tel, 
	old.Vis_Correo, 
	NOW(),
CURRENT_USER(),
	'Actualización')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasena` text NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contrasena`, `id_cargo`) VALUES
(0, 'jean carlos', 'jeank', '258', 2),
(1, 'gabriel hds', 'gabriel', '1234', 1),
(2, 'jorge valdes', 'jorge', '12345', 2),
(3, 'jean carlos', 'jeank', '258', 2),
(5, 'pato', 'patogay', '456', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `visitantes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `visitantes` (
`Vehi_Tipo` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `visitantes`
--
DROP TABLE IF EXISTS `visitantes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visitantes`  AS SELECT `tbl_vehiculos`.`Vehi_Tipo` AS `Vehi_Tipo` FROM `tbl_vehiculos` WHERE `tbl_vehiculos`.`Vehi_Tipo` = 'MOTO\'MOTO''MOTO\'MOTO'  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audi_vigilante`
--
ALTER TABLE `audi_vigilante`
  ADD PRIMARY KEY (`id_audi_Vig`);

--
-- Indices de la tabla `audi_visitante`
--
ALTER TABLE `audi_visitante`
  ADD PRIMARY KEY (`id_audi`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_ingreso`
--
ALTER TABLE `tbl_ingreso`
  ADD PRIMARY KEY (`Id_ingreso`),
  ADD KEY `fk_TBL_INGRESO_TBL_VIGILANTE` (`TBL_VIGILANTE_Vig_NumCed`),
  ADD KEY `idx_IdIngreso` (`Id_ingreso`);

--
-- Indices de la tabla `tbl_isla`
--
ALTER TABLE `tbl_isla`
  ADD PRIMARY KEY (`Id_Isla`),
  ADD KEY `TBL_VEHICULOS_Placa` (`TBL_VEHICULOS_Placa`),
  ADD KEY `TBL_RESIDENTE_Resi_NumCed` (`TBL_RESIDENTE_Resi_NumCed`),
  ADD KEY `idx_IdIsla` (`Id_Isla`);

--
-- Indices de la tabla `tbl_observacion`
--
ALTER TABLE `tbl_observacion`
  ADD PRIMARY KEY (`Id_Observacion`),
  ADD KEY `TBL_VIGILANTE_Vig_NumCed` (`TBL_VIGILANTE_Vig_NumCed`),
  ADD KEY `TBL_VEHICULOS_Placa` (`TBL_VEHICULOS_Placa`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`Id_Reserva`,`TBL_RESIDENTE_Resi_NumCed`),
  ADD KEY `fk_TBL_RESERVA_TBL_RESIDENTE1` (`TBL_RESIDENTE_Resi_NumCed`);

--
-- Indices de la tabla `tbl_residente`
--
ALTER TABLE `tbl_residente`
  ADD PRIMARY KEY (`Resi_NumCed`),
  ADD KEY `Copia_Id` (`Copia_Id`);

--
-- Indices de la tabla `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  ADD PRIMARY KEY (`Supe_NumCed`),
  ADD KEY `Copia_Id` (`Copia_Id`);

--
-- Indices de la tabla `tbl_vehiculos`
--
ALTER TABLE `tbl_vehiculos`
  ADD PRIMARY KEY (`Placa`),
  ADD KEY `fk_TBL_VEHICULOS_TBL_VISITANTE1` (`TBL_VISITANTE_Vis_NumCed`);

--
-- Indices de la tabla `tbl_vigilante`
--
ALTER TABLE `tbl_vigilante`
  ADD PRIMARY KEY (`Vig_NumCed`),
  ADD KEY `Copia_Id` (`Copia_Id`);

--
-- Indices de la tabla `tbl_visitante`
--
ALTER TABLE `tbl_visitante`
  ADD PRIMARY KEY (`TBL_INGRESO_Id_ingreso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ingreso`
--
ALTER TABLE `tbl_ingreso`
  MODIFY `Id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_visitante`
--
ALTER TABLE `tbl_visitante`
  MODIFY `TBL_INGRESO_Id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
