drop table usuarios;
create table if not exists `usuarios` (`id` int not null auto_increment comment 'Clave primaria',
`nombre` varchar(150) not null,
`password` varchar(200) not null,
primary key (`id`));

drop table pedidos;
create table if not exists `pedidos` (
`id` int not null AUTO_INCREMENT comment 'Clave primaria',
`descripcion` text not null,
`fechaDeRecepcion` date,
`fechaDeEntrega` date not null,
`estado` text not null comment 'dondeSeEncuentraElPedido',
`bordado` boolean not null default false,
`serigrafia` boolean not null default false,
primary key (`id`));