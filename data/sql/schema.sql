CREATE TABLE BINARIOS (bi_id INT AUTO_INCREMENT, bi_nombre VARCHAR(100), bi_tamanio DECIMAL(10, 2), bi_bin LONGBLOB, bi_ext VARCHAR(100), pagos_pa_id INT NOT NULL, INDEX pagos_pa_id_idx (pagos_pa_id), PRIMARY KEY(bi_id)) ENGINE = INNODB;
CREATE TABLE CONTRATAR_SB (csb_id INT AUTO_INCREMENT, csb_identificacion VARCHAR(50), csb_fecha DATE, persona_pe_id INT NOT NULL, servicios_basicos_sb_id INT NOT NULL, INDEX persona_pe_id_idx (persona_pe_id), INDEX servicios_basicos_sb_id_idx (servicios_basicos_sb_id), PRIMARY KEY(csb_id)) ENGINE = INNODB;
CREATE TABLE CONTRATO_IP (cip_id INT AUTO_INCREMENT, cip_fecha_ingreso DATE, cip_fecha_salida DATE, cip_motivos_salida TEXT, cip_actividad_desarrollada VARCHAR(100), cip_activo TINYINT, institucion_publica_ip_id INT NOT NULL, remuneracion_re_id INT NOT NULL, persona_pe_id INT NOT NULL, INDEX institucion_publica_ip_id_idx (institucion_publica_ip_id), INDEX remuneracion_re_id_idx (remuneracion_re_id), INDEX persona_pe_id_idx (persona_pe_id), PRIMARY KEY(cip_id)) ENGINE = INNODB;
CREATE TABLE INGRESO_MONETARIO (im_id INT AUTO_INCREMENT, im_fecha DATE, im_razon TEXT, im_valor DECIMAL(10, 2), persona_pe_id INT NOT NULL, INDEX persona_pe_id_idx (persona_pe_id), PRIMARY KEY(im_id)) ENGINE = INNODB;
CREATE TABLE INSTITUCION_PUBLICA (ip_id INT AUTO_INCREMENT, ip_nombre VARCHAR(100), ip_alias CHAR(7), ip_direccion TEXT, ip_tlf CHAR(9), ip_sitio_web VARCHAR(100), PRIMARY KEY(ip_id)) ENGINE = INNODB;
CREATE TABLE PAGOS (pa_id INT AUTO_INCREMENT, pa_numero_factura CHAR(17), pa_fecha DATETIME, pa_detalle TEXT, pa_iva DECIMAL(10, 2), pa_ice DECIMAL(10, 2), pa_comision DECIMAL(10, 2), pa_valor_total DECIMAL(10, 2), persona_pe_id INT NOT NULL, tipo_consumo_tc_id INT NOT NULL, INDEX persona_pe_id_idx (persona_pe_id), INDEX tipo_consumo_tc_id_idx (tipo_consumo_tc_id), PRIMARY KEY(pa_id)) ENGINE = INNODB;
CREATE TABLE PERSONA (pe_id INT AUTO_INCREMENT, pe_cedula VARCHAR(100), pe_nombres VARCHAR(100), pe_apellidos VARCHAR(100), pe_fecha_nacimiento DATE, pe_imagen LONGBLOB, pe_email VARCHAR(100), pe_usr VARCHAR(100), pe_pwd VARCHAR(50), PRIMARY KEY(pe_id)) ENGINE = INNODB;
CREATE TABLE REMUNERACION (re_id INT AUTO_INCREMENT, re_nombre VARCHAR(100), re_alias CHAR(7), re_valor DECIMAL(10, 2), PRIMARY KEY(re_id)) ENGINE = INNODB;
CREATE TABLE RESPALDO_CONTRATOS (rc_id INT AUTO_INCREMENT, rc_pdf LONGBLOB, contrato_ip_cip_id INT NOT NULL, INDEX contrato_ip_cip_id_idx (contrato_ip_cip_id), PRIMARY KEY(rc_id)) ENGINE = INNODB;
CREATE TABLE SERVICIOS_BASICOS (sb_id INT AUTO_INCREMENT, sb_entidad VARCHAR(100), sb_entidad_alias VARCHAR(50), sb_direccion TEXT, sb_sitio_web VARCHAR(100), PRIMARY KEY(sb_id)) ENGINE = INNODB;
CREATE TABLE TELEFONOS (te_id INT AUTO_INCREMENT, te_numero CHAR(9), te_ext CHAR(5), servicios_basicos_sb_id INT NOT NULL, INDEX servicios_basicos_sb_id_idx (servicios_basicos_sb_id), PRIMARY KEY(te_id)) ENGINE = INNODB;
CREATE TABLE TIPO_CONSUMO (tc_id INT AUTO_INCREMENT, tc_nombre VARCHAR(100), tc_alias CHAR(2), PRIMARY KEY(tc_id)) ENGINE = INNODB;
ALTER TABLE BINARIOS ADD CONSTRAINT BINARIOS_pagos_pa_id_PAGOS_pa_id FOREIGN KEY (pagos_pa_id) REFERENCES PAGOS(pa_id);
ALTER TABLE CONTRATAR_SB ADD CONSTRAINT CONTRATAR_SB_servicios_basicos_sb_id_SERVICIOS_BASICOS_sb_id FOREIGN KEY (servicios_basicos_sb_id) REFERENCES SERVICIOS_BASICOS(sb_id);
ALTER TABLE CONTRATAR_SB ADD CONSTRAINT CONTRATAR_SB_persona_pe_id_PERSONA_pe_id FOREIGN KEY (persona_pe_id) REFERENCES PERSONA(pe_id);
ALTER TABLE CONTRATO_IP ADD CONSTRAINT CONTRATO_IP_remuneracion_re_id_REMUNERACION_re_id FOREIGN KEY (remuneracion_re_id) REFERENCES REMUNERACION(re_id);
ALTER TABLE CONTRATO_IP ADD CONSTRAINT CONTRATO_IP_persona_pe_id_PERSONA_pe_id FOREIGN KEY (persona_pe_id) REFERENCES PERSONA(pe_id);
ALTER TABLE CONTRATO_IP ADD CONSTRAINT CONTRATO_IP_institucion_publica_ip_id_INSTITUCION_PUBLICA_ip_id FOREIGN KEY (institucion_publica_ip_id) REFERENCES INSTITUCION_PUBLICA(ip_id);
ALTER TABLE INGRESO_MONETARIO ADD CONSTRAINT INGRESO_MONETARIO_persona_pe_id_PERSONA_pe_id FOREIGN KEY (persona_pe_id) REFERENCES PERSONA(pe_id);
ALTER TABLE PAGOS ADD CONSTRAINT PAGOS_tipo_consumo_tc_id_TIPO_CONSUMO_tc_id FOREIGN KEY (tipo_consumo_tc_id) REFERENCES TIPO_CONSUMO(tc_id);
ALTER TABLE PAGOS ADD CONSTRAINT PAGOS_persona_pe_id_PERSONA_pe_id FOREIGN KEY (persona_pe_id) REFERENCES PERSONA(pe_id);
ALTER TABLE RESPALDO_CONTRATOS ADD CONSTRAINT RESPALDO_CONTRATOS_contrato_ip_cip_id_CONTRATO_IP_cip_id FOREIGN KEY (contrato_ip_cip_id) REFERENCES CONTRATO_IP(cip_id);
ALTER TABLE TELEFONOS ADD CONSTRAINT TELEFONOS_servicios_basicos_sb_id_SERVICIOS_BASICOS_sb_id FOREIGN KEY (servicios_basicos_sb_id) REFERENCES SERVICIOS_BASICOS(sb_id);
