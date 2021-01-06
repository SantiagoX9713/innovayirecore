create table if not exists `usuarios` (`id` int not null comment 'Clave primaria',
`nombre` varchar(15) not null,
`password` varchar(15) not null);


create table if not exists `pedidos` (
`id` int not null AUTO_INCREMENT comment 'Clave primaria',
`descripcion` text not null,
`fechaDeRecepcion` date,
`fechaDeEntrega` date not null,
`estado` text not null comment 'dondeSeEncuentraElPedido',
primary key (`id`));