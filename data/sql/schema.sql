CREATE TABLE dml_ahorros (id INT AUTO_INCREMENT, contratos_bancarios INT NOT NULL, tipos_cuentas INT NOT NULL, ah_fecha_creacion DATE, ah_numero_cuenta CHAR(11), ah_fecha_cancelacion DATE, ah_estado TINYINT, ah_fecha_crea DATETIME, ah_quien_crea INT, ah_fecha_modifica DATETIME, ah_quien_modifica INT, ah_fecha_borra DATETIME, ah_quien_borra INT, ah_borrado_logico TINYINT, INDEX contratos_bancarios_idx (contratos_bancarios), INDEX tipos_cuentas_idx (tipos_cuentas), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_beneficiarios (id INT AUTO_INCREMENT, be_orden INT, be_nombres_identificativos VARCHAR(100), be_fecha_crea DATETIME, be_quien_crea INT, be_fecha_modifica DATETIME, be_quien_modifica INT, be_fecha_borra DATETIME, be_quien_borra INT, be_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_binarios (id INT AUTO_INCREMENT, personas INT, hijos INT, tarjetas_credito_debito INT, facturas INT, bi_nombre_original VARCHAR(100), bi_tamanio_bytes DECIMAL(10, 2), bi_binario LONGBLOB, bi_mime_type VARCHAR(50), bi_fecha_crea DATETIME, bi_quien_crea INT, bi_fecha_modifica DATETIME, bi_quien_modifica INT, bi_fecha_borra DATETIME, bi_quien_borra INT, bi_borrado_logico TINYINT, INDEX facturas_idx (facturas), INDEX hijos_idx (hijos), INDEX personas_idx (personas), INDEX tarjetas_credito_debito_idx (tarjetas_credito_debito), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_consumo_tarjetas (id INT AUTO_INCREMENT, tarjetas_credito_debito INT NOT NULL, ct_fecha DATETIME, ct_detalle TEXT, ct_valor DECIMAL(10, 2), ct_fecha_crea DATETIME, ct_quien_crea INT, ct_fecha_modifica DATETIME, ct_quien_modifica INT, ct_fecha_borra DATETIME, ct_quien_borra INT, ct_borrado_logico TINYINT, INDEX tarjetas_credito_debito_idx (tarjetas_credito_debito), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_contratos_bancarios (id INT AUTO_INCREMENT, personas INT NOT NULL, entidades INT NOT NULL, cb_fecha_contrato DATE, cb_fecha_crea DATETIME, cb_quien_crea INT, cb_fecha_modifica DATETIME, cb_quien_modifica INT, cb_fecha_borra DATETIME, cb_quien_borra INT, cb_borrado_logico TINYINT, INDEX entidades_idx (entidades), INDEX personas_idx (personas), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_contratos_laborales (id INT AUTO_INCREMENT, personas INT NOT NULL, entidades INT NOT NULL, remuneraciones INT NOT NULL, cl_fecha_ingreso DATE, cl_fecha_salida DATE, cl_motivo_salida TEXT, cl_actividad_desarrollada VARCHAR(100), cl_activo TINYINT, cl_fecha_crea DATETIME, cl_quien_crea INT, cl_fecha_modifica DATETIME, cl_quien_modifica INT, cl_fecha_borra DATETIME, cl_quien_borra INT, cl_borrado_logico TINYINT, INDEX entidades_idx (entidades), INDEX personas_idx (personas), INDEX remuneraciones_idx (remuneraciones), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_detalle_pagos (id INT AUTO_INCREMENT, prestamos INT NOT NULL, dp_fecha DATE, dp_valor DECIMAL(10, 2), dp_fecha_crea DATETIME, dp_quien_crea INT, dp_fecha_modifica DATETIME, dp_quien_modifica INT, dp_fecha_borra DATETIME, dp_quien_borra INT, dp_borrado_logico TINYINT, INDEX prestamos_idx (prestamos), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_enfermedades (id INT AUTO_INCREMENT, hijos INT NOT NULL, ef_fecha DATE, ef_nombre VARCHAR(100), ef_fecha_crea DATETIME, ef_quien_crea INT, ef_fecha_modifica DATETIME, ef_quien_modifica INT, ef_fecha_borra DATETIME, ef_quien_borra INT, ef_borrado_logico TINYINT, INDEX hijos_idx (hijos), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_entidades (id INT AUTO_INCREMENT, en_nombre_entidad VARCHAR(100), en_alias VARCHAR(50), en_direccion TEXT, en_contacto_json TEXT, en_fecha_crea DATETIME, en_quien_crea INT, en_fecha_modifica DATETIME, en_quien_modifica INT, en_fecha_borra DATETIME, en_quien_borra INT, en_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_facturas (id INT AUTO_INCREMENT, tipos_gastos INT NOT NULL, fa_con_sin_factura TINYINT, fa_numero_factura VARCHAR(17), fa_fecha DATETIME, fa_detalle TEXT, fa_beneficiarios_json TEXT, fa_valor_total DECIMAL(10, 2), fa_fecha_crea DATETIME, fa_quien_crea INT, fa_fecha_modifica DATETIME, fa_quien_modifica INT, fa_fecha_borra DATETIME, fa_quien_borra INT, fa_borrado_logico TINYINT, INDEX tipos_gastos_idx (tipos_gastos), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_hijos (id INT AUTO_INCREMENT, personas INT NOT NULL, hi_fecha_nacimiento DATE, hi_nombres VARCHAR(100), hi_apellidos VARCHAR(100), hi_fecha_crea DATETIME, hi_quien_crea INT, hi_fecha_modifica DATETIME, hi_quien_modifica INT, hi_fecha_borra DATETIME, hi_quien_borra INT, hi_borrado_logico TINYINT, INDEX personas_idx (personas), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_ingresos (id INT AUTO_INCREMENT, personas INT NOT NULL, in_fecha DATE, in_razon TEXT, in_valor DECIMAL(10, 2), in_fecha_crea DATETIME, in_quien_crea INT, in_fecha_modifica DATETIME, in_quien_modifica INT, in_fecha_borra DATETIME, in_quien_borra INT, in_borrado_logico TINYINT, INDEX personas_idx (personas), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_movimientos (id INT AUTO_INCREMENT, ahorros INT NOT NULL, mo_fecha DATE, mo_concepto VARCHAR(100), mo_tipo CHAR(1), mo_documento CHAR(15), mo_oficina VARCHAR(100), mo_monto DECIMAL(10, 2), mo_saldo DECIMAL(10, 2), mo_mini_detalle_json TEXT, mo_fecha_crea DATETIME, mo_quien_crea INT, mo_fecha_modifica DATETIME, mo_quien_modifica INT, mo_fecha_borra DATETIME, mo_quien_borra INT, mo_borrado_logico TINYINT, INDEX ahorros_idx (ahorros), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_pagos (id INT AUTO_INCREMENT, personas INT NOT NULL, facturas INT NOT NULL, pa_iva DECIMAL(10, 2), pa_ice DECIMAL(10, 2), pa_comision DECIMAL(10, 2), pa_valor_parcial DECIMAL(10, 2), pa_fecha_crea DATETIME, pa_quien_crea INT, pa_fecha_modifica DATETIME, pa_quien_modifica INT, pa_fecha_borra DATETIME, pa_quien_borra INT, pa_borrado_logico TINYINT, INDEX facturas_idx (facturas), INDEX personas_idx (personas), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_personas (id INT AUTO_INCREMENT, pe_cedula CHAR(10), pe_nombres VARCHAR(100), pe_apellidos VARCHAR(100), pe_fecha_nacimiento DATE, pe_email VARCHAR(255), pe_salt VARCHAR(255), pe_password VARCHAR(255), pe_online TINYINT, pe_inicio_sesion DATETIME, pe_fin_sesion DATETIME, pe_duracion_sesion VARCHAR(50), pe_fecha_crea DATETIME, pe_quien_crea INT, pe_fecha_modifica DATETIME, pe_quien_modifica INT, pe_fecha_borra DATETIME, pe_quien_borra INT, pe_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_prestamos (id INT AUTO_INCREMENT, contratos_bancarios INT NOT NULL, pr_fecha_concesion DATE, pr_nombre_prestamo VARCHAR(100), pr_detalle TEXT, pr_fecha_crea DATETIME, pr_quien_crea INT, pr_fecha_modifica DATETIME, pr_quien_modifica INT, pr_fecha_borra DATETIME, pr_quien_borra INT, pr_borrado_logico TINYINT, INDEX contratos_bancarios_idx (contratos_bancarios), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_remuneraciones (id INT AUTO_INCREMENT, re_nombre VARCHAR(100), re_alias CHAR(7), re_valor DECIMAL(10, 2), re_fecha_crea DATETIME, re_quien_crea INT, re_fecha_modifica DATETIME, re_quien_modifica INT, re_fecha_borra DATETIME, re_quien_borra INT, re_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_respaldos (id INT AUTO_INCREMENT, pagos INT, binarios INT, rs_fecha_crea DATETIME, rs_quien_crea INT, rs_fecha_modifica DATETIME, rs_quien_modifica INT, rs_fecha_borra DATETIME, rs_quien_borra INT, rs_borrado_logico TINYINT, INDEX binarios_idx (binarios), INDEX pagos_idx (pagos), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_tarjetas_credito_debito (id INT AUTO_INCREMENT, contratos_bancarios INT NOT NULL, tipos_tarjetas_credito_debito INT NOT NULL, tcd_fecha_emision DATE, tcd_fecha_expiracion DATE, tcd_numero VARCHAR(16), tcd_cvv CHAR(3), tcd_estado TINYINT, tcd_fecha_crea DATETIME, tcd_quien_crea INT, tcd_fecha_modifica DATETIME, tcd_quien_modifica INT, tcd_fecha_borra DATETIME, tcd_quien_borra INT, tcd_borrado_logico TINYINT, INDEX contratos_bancarios_idx (contratos_bancarios), INDEX tipos_tarjetas_credito_debito_idx (tipos_tarjetas_credito_debito), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_tipos_cuentas (id INT AUTO_INCREMENT, tc_nombre VARCHAR(100), tc_fecha_crea DATETIME, tc_quien_crea INT, tc_fecha_modifica DATETIME, tc_quien_modifica INT, tc_fecha_borra DATETIME, tc_quien_borra INT, tc_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_tipos_gastos (id INT AUTO_INCREMENT, tg_orden INT, tg_nombre VARCHAR(100), tg_alias CHAR(5), tg_fecha_crea DATETIME, tg_quien_crea INT, tg_fecha_modifica DATETIME, tg_quien_modifica INT, tg_fecha_borra DATETIME, tg_quien_borra INT, tg_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE dml_tipos_tarjetas_credito_debito (id INT AUTO_INCREMENT, ttcd_nombre VARCHAR(100), ttcd_fecha_crea DATETIME, ttcd_quien_crea INT, ttcd_fecha_modifica DATETIME, ttcd_quien_modifica INT, ttcd_fecha_borra DATETIME, ttcd_quien_borra INT, ttcd_borrado_logico TINYINT, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE dml_ahorros ADD CONSTRAINT dml_ahorros_tipos_cuentas_dml_tipos_cuentas_id FOREIGN KEY (tipos_cuentas) REFERENCES dml_tipos_cuentas(id);
ALTER TABLE dml_ahorros ADD CONSTRAINT dml_ahorros_contratos_bancarios_dml_contratos_bancarios_id FOREIGN KEY (contratos_bancarios) REFERENCES dml_contratos_bancarios(id);
ALTER TABLE dml_binarios ADD CONSTRAINT dtdi FOREIGN KEY (tarjetas_credito_debito) REFERENCES dml_tarjetas_credito_debito(id);
ALTER TABLE dml_binarios ADD CONSTRAINT dml_binarios_personas_dml_personas_id FOREIGN KEY (personas) REFERENCES dml_personas(id);
ALTER TABLE dml_binarios ADD CONSTRAINT dml_binarios_hijos_dml_hijos_id FOREIGN KEY (hijos) REFERENCES dml_hijos(id);
ALTER TABLE dml_binarios ADD CONSTRAINT dml_binarios_facturas_dml_facturas_id FOREIGN KEY (facturas) REFERENCES dml_facturas(id);
ALTER TABLE dml_consumo_tarjetas ADD CONSTRAINT dtdi_1 FOREIGN KEY (tarjetas_credito_debito) REFERENCES dml_tarjetas_credito_debito(id);
ALTER TABLE dml_contratos_bancarios ADD CONSTRAINT dml_contratos_bancarios_personas_dml_personas_id FOREIGN KEY (personas) REFERENCES dml_personas(id);
ALTER TABLE dml_contratos_bancarios ADD CONSTRAINT dml_contratos_bancarios_entidades_dml_entidades_id FOREIGN KEY (entidades) REFERENCES dml_entidades(id);
ALTER TABLE dml_contratos_laborales ADD CONSTRAINT dml_contratos_laborales_remuneraciones_dml_remuneraciones_id FOREIGN KEY (remuneraciones) REFERENCES dml_remuneraciones(id);
ALTER TABLE dml_contratos_laborales ADD CONSTRAINT dml_contratos_laborales_personas_dml_personas_id FOREIGN KEY (personas) REFERENCES dml_personas(id);
ALTER TABLE dml_contratos_laborales ADD CONSTRAINT dml_contratos_laborales_entidades_dml_entidades_id FOREIGN KEY (entidades) REFERENCES dml_entidades(id);
ALTER TABLE dml_detalle_pagos ADD CONSTRAINT dml_detalle_pagos_prestamos_dml_prestamos_id FOREIGN KEY (prestamos) REFERENCES dml_prestamos(id);
ALTER TABLE dml_enfermedades ADD CONSTRAINT dml_enfermedades_hijos_dml_hijos_id FOREIGN KEY (hijos) REFERENCES dml_hijos(id);
ALTER TABLE dml_facturas ADD CONSTRAINT dml_facturas_tipos_gastos_dml_tipos_gastos_id FOREIGN KEY (tipos_gastos) REFERENCES dml_tipos_gastos(id);
ALTER TABLE dml_hijos ADD CONSTRAINT dml_hijos_personas_dml_personas_id FOREIGN KEY (personas) REFERENCES dml_personas(id);
ALTER TABLE dml_ingresos ADD CONSTRAINT dml_ingresos_personas_dml_personas_id FOREIGN KEY (personas) REFERENCES dml_personas(id);
ALTER TABLE dml_movimientos ADD CONSTRAINT dml_movimientos_ahorros_dml_ahorros_id FOREIGN KEY (ahorros) REFERENCES dml_ahorros(id);
ALTER TABLE dml_pagos ADD CONSTRAINT dml_pagos_personas_dml_personas_id FOREIGN KEY (personas) REFERENCES dml_personas(id);
ALTER TABLE dml_pagos ADD CONSTRAINT dml_pagos_facturas_dml_facturas_id FOREIGN KEY (facturas) REFERENCES dml_facturas(id);
ALTER TABLE dml_prestamos ADD CONSTRAINT dml_prestamos_contratos_bancarios_dml_contratos_bancarios_id FOREIGN KEY (contratos_bancarios) REFERENCES dml_contratos_bancarios(id);
ALTER TABLE dml_respaldos ADD CONSTRAINT dml_respaldos_pagos_dml_pagos_id FOREIGN KEY (pagos) REFERENCES dml_pagos(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE dml_respaldos ADD CONSTRAINT dml_respaldos_binarios_dml_binarios_id FOREIGN KEY (binarios) REFERENCES dml_binarios(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE dml_tarjetas_credito_debito ADD CONSTRAINT dtdi_2 FOREIGN KEY (tipos_tarjetas_credito_debito) REFERENCES dml_tipos_tarjetas_credito_debito(id);
ALTER TABLE dml_tarjetas_credito_debito ADD CONSTRAINT dcdi FOREIGN KEY (contratos_bancarios) REFERENCES dml_contratos_bancarios(id);
