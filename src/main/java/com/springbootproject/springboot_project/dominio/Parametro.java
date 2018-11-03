package com.springbootproject.springboot_project.dominio;

import javax.persistence.Entity;
import javax.persistence.Id;

@Entity
public class Parametro {
	@Id
	private String nombre;
	
	private String valor;
	
	public Parametro() {
		super();
	}
	
	public Parametro(String nombre, String valor) {
		this.nombre = nombre;
		this.valor = valor;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getValor() {
		return valor;
	}

	public void setValor(String valor) {
		this.valor = valor;
	}
}
