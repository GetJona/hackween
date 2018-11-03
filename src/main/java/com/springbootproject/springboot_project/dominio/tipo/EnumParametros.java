package com.springbootproject.springboot_project.dominio.tipo;

public enum EnumParametros {

	FILES_PATH ("files.path");

	private String codigo;
	
	private EnumParametros (String codigo) {
		this.codigo = codigo;
	}
	
	public String getCodigo() {
		return this.codigo;
	}
}
