
-----------------------------------------------------------------------------
-- autor
-----------------------------------------------------------------------------

DROP TABLE "autor" CASCADE;


CREATE TABLE "autor"
(
	"id" bigserial  NOT NULL,
	"ficha_autor" VARCHAR(255),
	"inedito" BOOLEAN,
	"sexo" BOOLEAN,
	"nacionalidad" VARCHAR(255),
	"fecha_nacimiento" INTEGER,
	"nombre" VARCHAR(255),
	"apellido" VARCHAR(255),
	"vive" BOOLEAN,
	"tipoautor" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "autor" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- clientesatendidos
-----------------------------------------------------------------------------

DROP TABLE "clientesatendidos" CASCADE;


CREATE TABLE "clientesatendidos"
(
	"id" bigserial  NOT NULL,
	"cantidad" VARCHAR(255),
	"fache" VARCHAR(255),
	"id_libreria" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "clientesatendidos" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- distribucion
-----------------------------------------------------------------------------

DROP TABLE "distribucion" CASCADE;


CREATE TABLE "distribucion"
(
	"id" bigserial  NOT NULL,
	"id_edicion" INTEGER,
	"cantidad_ejemplar" INTEGER,
	"fecha" VARCHAR(255),
	"id_tipodestino" INT8,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "distribucion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- edicion
-----------------------------------------------------------------------------

DROP TABLE "edicion" CASCADE;


CREATE TABLE "edicion"
(
	"id" bigserial  NOT NULL,
	"traduccion" VARCHAR(255),
	"lengua_origen" VARCHAR(255),
	"lengua_traducir" VARCHAR(255),
	"traductor" VARCHAR(255),
	"numero_reimpresion" BOOLEAN,
	"coedicion" INTEGER,
	"id_libro" INTEGER,
	"corrector" VARCHAR(255),
	"coleccion" VARCHAR(255),
	"isbn" VARCHAR(255),
	"deposito_legal" VARCHAR(255),
	"diagramador" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "edicion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- estado
-----------------------------------------------------------------------------

DROP TABLE "estado" CASCADE;


CREATE TABLE "estado"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "estado" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- feria
-----------------------------------------------------------------------------

DROP TABLE "feria" CASCADE;


CREATE TABLE "feria"
(
	"id" serial  NOT NULL,
	"precio" VARCHAR(255),
	"cantidad_ejemplares" VARCHAR(255),
	"nacionalidad" BOOLEAN,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "feria" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- genero
-----------------------------------------------------------------------------

DROP TABLE "genero" CASCADE;


CREATE TABLE "genero"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "genero" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- historico
-----------------------------------------------------------------------------

DROP TABLE "historico" CASCADE;


CREATE TABLE "historico"
(
	"id" bigserial  NOT NULL,
	"id_edicion" INTEGER,
	"id_status" INTEGER,
	"id_institucion" INTEGER,
	"fecha_inicio" VARCHAR(255),
	"fecha_fin" VARCHAR(255),
	"status_actual" BOOLEAN,
	"id_impresion" INTEGER,
	"id_distribucion" INTEGER,
	"id_venta" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "historico" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- impresion
-----------------------------------------------------------------------------

DROP TABLE "impresion" CASCADE;


CREATE TABLE "impresion"
(
	"id" bigserial  NOT NULL,
	"volumen" INTEGER,
	"id_edicion" INTEGER,
	"id_tipocaratula" INTEGER,
	"id_tipoimpresion" INTEGER,
	"id_tipoencuadernacion" INTEGER,
	"costo" VARCHAR(255),
	"id_tipotripa" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "impresion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- institucion
-----------------------------------------------------------------------------

DROP TABLE "institucion" CASCADE;


CREATE TABLE "institucion"
(
	"id" bigserial  NOT NULL,
	"nombre" VARCHAR(255),
	"correo" VARCHAR(255),
	"rif" VARCHAR(255),
	"ubicacion" VARCHAR(255),
	"id_tipoinstitucion" INTEGER,
	"sector" VARCHAR(255),
	"responsable" VARCHAR(255),
	"publica" BOOLEAN,
	"id_pais" INTEGER,
	"id_municipio" INTEGER,
	"id_parroquia" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "institucion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- libreria
-----------------------------------------------------------------------------

DROP TABLE "libreria" CASCADE;


CREATE TABLE "libreria"
(
	"id" bigserial  NOT NULL,
	"descripcion" VARCHAR(255),
	"id_tipolibreria" INTEGER,
	"id_municipio" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "libreria" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- libro
-----------------------------------------------------------------------------

DROP TABLE "libro" CASCADE;


CREATE TABLE "libro"
(
	"titulo" VARCHAR(255),
	"subtitulo" VARCHAR(255),
	"id_genero" INTEGER,
	"id_tematica" INTEGER,
	"id_autor" INTEGER,
	"id_materia" INTEGER,
	"id_tipopublicacion" INTEGER,
	"sinopsis" VARCHAR(255),
	"cantidad_libro" VARCHAR(255),
	"compilador" VARCHAR(255),
	"id" bigserial  NOT NULL,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "libro" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- materia
-----------------------------------------------------------------------------

DROP TABLE "materia" CASCADE;


CREATE TABLE "materia"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "materia" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- municipio
-----------------------------------------------------------------------------

DROP TABLE "municipio" CASCADE;


CREATE TABLE "municipio"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	"id_estado" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "municipio" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- pais
-----------------------------------------------------------------------------

DROP TABLE "pais" CASCADE;


CREATE TABLE "pais"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	"nacionalidad" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "pais" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- parroquia
-----------------------------------------------------------------------------

DROP TABLE "parroquia" CASCADE;


CREATE TABLE "parroquia"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	"id_municipio" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "parroquia" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- status
-----------------------------------------------------------------------------

DROP TABLE "status" CASCADE;


CREATE TABLE "status"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	"aprobacion" BOOLEAN,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "status" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tematica
-----------------------------------------------------------------------------

DROP TABLE "tematica" CASCADE;


CREATE TABLE "tematica"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tematica" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipoautor
-----------------------------------------------------------------------------

DROP TABLE "tipoautor" CASCADE;


CREATE TABLE "tipoautor"
(
	"id" bigserial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipoautor" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipocaratula
-----------------------------------------------------------------------------

DROP TABLE "tipocaratula" CASCADE;


CREATE TABLE "tipocaratula"
(
	"id" bigserial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipocaratula" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipodestino
-----------------------------------------------------------------------------

DROP TABLE "tipodestino" CASCADE;


CREATE TABLE "tipodestino"
(
	"id" bigserial  NOT NULL,
	"ente_publico" BOOLEAN,
	"donacion" BOOLEAN,
	"gratuita" BOOLEAN,
	"importacion" BOOLEAN,
	"exportacion" BOOLEAN,
	"otro" VARCHAR(255),
	"id_feria" INTEGER,
	"id_pais" INTEGER,
	"id_estado" INTEGER,
	"id_libreria" INTEGER,
	"id_municipio" INTEGER,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipodestino" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipoencuadernacion
-----------------------------------------------------------------------------

DROP TABLE "tipoencuadernacion" CASCADE;


CREATE TABLE "tipoencuadernacion"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipoencuadernacion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipoimpresion
-----------------------------------------------------------------------------

DROP TABLE "tipoimpresion" CASCADE;


CREATE TABLE "tipoimpresion"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipoimpresion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipoinstitucion
-----------------------------------------------------------------------------

DROP TABLE "tipoinstitucion" CASCADE;


CREATE TABLE "tipoinstitucion"
(
	"id" bigserial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipoinstitucion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipolibreria
-----------------------------------------------------------------------------

DROP TABLE "tipolibreria" CASCADE;


CREATE TABLE "tipolibreria"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipolibreria" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipopublicacion
-----------------------------------------------------------------------------

DROP TABLE "tipopublicacion" CASCADE;


CREATE TABLE "tipopublicacion"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipopublicacion" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- tipotripa
-----------------------------------------------------------------------------

DROP TABLE "tipotripa" CASCADE;


CREATE TABLE "tipotripa"
(
	"id" serial  NOT NULL,
	"descripcion" VARCHAR(255),
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "tipotripa" IS '';


SET search_path TO public;
-----------------------------------------------------------------------------
-- venta
-----------------------------------------------------------------------------

DROP TABLE "venta" CASCADE;


CREATE TABLE "venta"
(
	"id" bigserial  NOT NULL,
	"cantidad_ejemplares" INTEGER,
	"fecha" VARCHAR(255),
	"id_libreria" INTEGER,
	"id_edicion" INTEGER,
	"id_tipodestino" INT8,
	PRIMARY KEY ("id")
);

COMMENT ON TABLE "venta" IS '';


SET search_path TO public;
ALTER TABLE "autor" ADD CONSTRAINT "autor_FK_1" FOREIGN KEY ("tipoautor") REFERENCES "autor" ("id") ON UPDATE CASCADE;

ALTER TABLE "clientesatendidos" ADD CONSTRAINT "clientesatendidos_FK_1" FOREIGN KEY ("id_libreria") REFERENCES "libreria" ("id") ON UPDATE CASCADE;

ALTER TABLE "distribucion" ADD CONSTRAINT "distribucion_FK_1" FOREIGN KEY ("id_edicion") REFERENCES "edicion" ("id") ON UPDATE CASCADE;

ALTER TABLE "distribucion" ADD CONSTRAINT "distribucion_FK_2" FOREIGN KEY ("id_tipodestino") REFERENCES "tipodestino" ("id") ON UPDATE CASCADE;

ALTER TABLE "historico" ADD CONSTRAINT "historico_FK_1" FOREIGN KEY ("id_edicion") REFERENCES "edicion" ("id") ON UPDATE CASCADE;

ALTER TABLE "historico" ADD CONSTRAINT "historico_FK_2" FOREIGN KEY ("id_status") REFERENCES "status" ("id") ON UPDATE CASCADE;

ALTER TABLE "historico" ADD CONSTRAINT "historico_FK_3" FOREIGN KEY ("id_institucion") REFERENCES "institucion" ("id") ON UPDATE CASCADE;

ALTER TABLE "historico" ADD CONSTRAINT "historico_FK_4" FOREIGN KEY ("id_impresion") REFERENCES "impresion" ("id") ON UPDATE CASCADE;

ALTER TABLE "historico" ADD CONSTRAINT "historico_FK_5" FOREIGN KEY ("id_distribucion") REFERENCES "distribucion" ("id") ON UPDATE CASCADE;

ALTER TABLE "historico" ADD CONSTRAINT "historico_FK_6" FOREIGN KEY ("id_venta") REFERENCES "venta" ("id") ON UPDATE CASCADE;

ALTER TABLE "impresion" ADD CONSTRAINT "impresion_FK_1" FOREIGN KEY ("id_edicion") REFERENCES "edicion" ("id") ON UPDATE CASCADE;

ALTER TABLE "impresion" ADD CONSTRAINT "impresion_FK_2" FOREIGN KEY ("id_tipocaratula") REFERENCES "tipocaratula" ("id") ON UPDATE CASCADE;

ALTER TABLE "impresion" ADD CONSTRAINT "impresion_FK_3" FOREIGN KEY ("id_tipoimpresion") REFERENCES "tipoimpresion" ("id") ON UPDATE CASCADE;

ALTER TABLE "impresion" ADD CONSTRAINT "impresion_FK_4" FOREIGN KEY ("id_tipoencuadernacion") REFERENCES "tipoencuadernacion" ("id") ON UPDATE CASCADE;

ALTER TABLE "impresion" ADD CONSTRAINT "impresion_FK_5" FOREIGN KEY ("id_tipotripa") REFERENCES "tipotripa" ("id") ON UPDATE CASCADE;

ALTER TABLE "institucion" ADD CONSTRAINT "institucion_FK_1" FOREIGN KEY ("id_tipoinstitucion") REFERENCES "tipoinstitucion" ("id") ON UPDATE CASCADE;

ALTER TABLE "institucion" ADD CONSTRAINT "institucion_FK_2" FOREIGN KEY ("id_pais") REFERENCES "pais" ("id") ON UPDATE CASCADE;

ALTER TABLE "institucion" ADD CONSTRAINT "institucion_FK_3" FOREIGN KEY ("id_municipio") REFERENCES "municipio" ("id") ON UPDATE CASCADE;

ALTER TABLE "institucion" ADD CONSTRAINT "institucion_FK_4" FOREIGN KEY ("id_parroquia") REFERENCES "parroquia" ("id") ON UPDATE CASCADE;

ALTER TABLE "libreria" ADD CONSTRAINT "libreria_FK_1" FOREIGN KEY ("id_tipolibreria") REFERENCES "tipolibreria" ("id") ON UPDATE CASCADE;

ALTER TABLE "libreria" ADD CONSTRAINT "libreria_FK_2" FOREIGN KEY ("id_municipio") REFERENCES "municipio" ("id") ON UPDATE CASCADE;

ALTER TABLE "libro" ADD CONSTRAINT "libro_FK_1" FOREIGN KEY ("id_genero") REFERENCES "genero" ("id") ON UPDATE CASCADE;

ALTER TABLE "libro" ADD CONSTRAINT "libro_FK_2" FOREIGN KEY ("id_tematica") REFERENCES "tematica" ("id") ON UPDATE CASCADE;

ALTER TABLE "libro" ADD CONSTRAINT "libro_FK_3" FOREIGN KEY ("id_autor") REFERENCES "autor" ("id") ON UPDATE CASCADE;

ALTER TABLE "libro" ADD CONSTRAINT "libro_FK_4" FOREIGN KEY ("id_materia") REFERENCES "materia" ("id") ON UPDATE CASCADE;

ALTER TABLE "libro" ADD CONSTRAINT "libro_FK_5" FOREIGN KEY ("id_tipopublicacion") REFERENCES "tipopublicacion" ("id") ON UPDATE CASCADE;

ALTER TABLE "municipio" ADD CONSTRAINT "municipio_FK_1" FOREIGN KEY ("id_estado") REFERENCES "estado" ("id") ON UPDATE CASCADE;

ALTER TABLE "tipodestino" ADD CONSTRAINT "tipodestino_FK_1" FOREIGN KEY ("id_feria") REFERENCES "feria" ("id") ON UPDATE CASCADE;

ALTER TABLE "tipodestino" ADD CONSTRAINT "tipodestino_FK_2" FOREIGN KEY ("id_pais") REFERENCES "pais" ("id") ON UPDATE CASCADE;

ALTER TABLE "tipodestino" ADD CONSTRAINT "tipodestino_FK_3" FOREIGN KEY ("id_estado") REFERENCES "estado" ("id") ON UPDATE CASCADE;

ALTER TABLE "tipodestino" ADD CONSTRAINT "tipodestino_FK_4" FOREIGN KEY ("id_libreria") REFERENCES "libreria" ("id") ON UPDATE CASCADE;

ALTER TABLE "tipodestino" ADD CONSTRAINT "tipodestino_FK_5" FOREIGN KEY ("id_municipio") REFERENCES "municipio" ("id") ON UPDATE CASCADE;

ALTER TABLE "venta" ADD CONSTRAINT "venta_FK_1" FOREIGN KEY ("id_libreria") REFERENCES "libreria" ("id") ON UPDATE CASCADE;

ALTER TABLE "venta" ADD CONSTRAINT "venta_FK_2" FOREIGN KEY ("id_edicion") REFERENCES "edicion" ("id") ON UPDATE CASCADE;

ALTER TABLE "venta" ADD CONSTRAINT "venta_FK_3" FOREIGN KEY ("id_tipodestino") REFERENCES "tipodestino" ("id") ON UPDATE CASCADE;
