create table if not exists `pedidos` (`id` int not null AUTO_INCREMENT comment 'Clave primaria',
`descripcion` text not null,
`fechaDeRecepcion` datetime,
`fechaDeEntrega` date,
`estado` text not null comment 'dondeSeEncuentraElPedido',
primary key (`id`));