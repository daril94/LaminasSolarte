CREATE DATABASE LaminasSolarte ;
USE LaminasSolarte ;
#drop database LaminasSolarte;

CREATE TABLE IF NOT EXISTS Administrador (
  userAdmin varchar(30) NOT NULL,
  passAdmin text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

INSERT INTO Administrador (userAdmin, passAdmin) VALUES
('daril_1994@hotmail.com', '12345678');


Create Table Pedido (
pedidoID int not null auto_increment,
constraint pk_pedido Primary Key (pedidoID),
fechaPedido timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
nombreUsuario VARCHAR(50) NOT NULL,
emailUsuario VARCHAR(50) NOT NULL,
direccionUsuario VARCHAR(50) NOT NULL,
telefonoUsuario int  NOT NULL,
ccRucUsuario int  NOT NULL,
entregaUsuario VARCHAR(50) NOT NULL,
vendedorUsuario VARCHAR(50) NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


Create Table laminasPedido (
pedidoID int not null,
CONSTRAINT fk_la FOREIGN KEY (pedidoID)
REFERENCES Pedido (pedidoID)
ON DELETE CASCADE ON UPDATE CASCADE,
codigo VARCHAR(50) NOT NULL,
cantidad int  NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

Create Table sumatorioPedido (
pedidoID int not null,
CONSTRAINT fk_su FOREIGN KEY (pedidoID)
REFERENCES Pedido (pedidoID)
ON DELETE CASCADE ON UPDATE CASCADE,
nombre VARCHAR(50) NOT NULL,
cantidad int  NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;


insert into Pedido (nombreUsuario,emailUsuario,direccionUsuario,telefonoUsuario,ccRucUsuario,entregaUsuario,vendedorUsuario)
		values ('Daril Avila', 'daril_1994@hotmail.com', 'Quicentro Sur',0987091756, 0804403004, 'Domicilio','Carlos Naranjo');        
insert into laminasPedido(pedidoId, codigo, cantidad) values (1, 'Sp1',25); 
insert into sumatorioPedido(pedidoId, nombre, cantidad) values (1, 'Laminas',25); 

SELECT * FROM Pedido;

Create Table datosLaminas (
laminaID int not null auto_increment,
constraint pk_dl Primary Key (laminaID),
codigoLamina varchar(50) not null,
nombreLamina varchar(50) not null,
paginaLamina int not null,
seccionLamina varchar(128) not null
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
 
 insert into datosLaminas(codigoLamina,nombreLamina,paginaLamina,seccionLamina)
 values
 ('C1','PLATOS T??PICOS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
 ('41','LOS ALIMENTOS Y LAS VITAMINAS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
  ('98','PIR??MIDE ALIMENTICIA',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
   ('214','LOS ALIMENTOS (clasificaci??n)',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
    ('266','FOOD PIRAMID',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
	 ('326','CADENAS ALIMENTICIAS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
     ('327',' LA DESNUTRICI??N',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
      ('328','LOS CARBOHIDRATOS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
       ('329','LOS L??PIDOS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
        ('330','LAS PROTE??NAS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
         ('331','CANAL DE PANAM??',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
          ('332','LAS VITAMINAS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
           ('333','TIPOS DE VITAMINAS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
            ('334','LA NUTRICI??N',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
             ('352','LAS TRES COMIDAS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
              ('448','COMIDA CHATARRA',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
               ('490','SABORES Y OLORES',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                ('512','ALIMENTOS ENERG??TICOS',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                 ('513','ALIMENTOS REGULADORES',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                  ('514','ALIMENTOS CONSTRUCTORES',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                   ('515','ALIM.ORIGEN ANIM-VEGET-MINER.',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                    ('516','HIGIENE DE LA ALIMENTACI??N',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                     ('E31','COMIDA T??PICA DE LA COSTA',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                      ('E32','COMIDA T??PICA DE LA SIERRA',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                       ('E33','COMIDAT??PICA ORIENTE Y GAL??.',1,'1.-ALIMENTOS-NUTRICI??N-VITAMINAS'),
                       
                       ('aaa','aaa.',2,'2 ANIMALES - FAUNA'),
                       
                       
                       
                       
                       ('aaa','aaa.',2,'2 ANIMALES - FAUNA');
 
 