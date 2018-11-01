package com.springbootproject.springboot_project.dominio;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
public class Tabla {
	
	@Id
    @GeneratedValue(strategy=GenerationType.AUTO)
	public Long key;
	
	public String campo1;
	public String campo2;

	public Tabla(Long key, String campo1, String campo2) {
		super();
		this.key = key;
		this.campo1 = campo1;
		this.campo2 = campo2;
	}

	public Long getKey() {
		return key;
	}

	public void setKey(Long key) {
		this.key = key;
	}

	public String getCampo1() {
		return campo1;
	}

	public void setCampo1(String campo1) {
		this.campo1 = campo1;
	}

	public String getCampo2() {
		return campo2;
	}

	public void setCampo2(String campo2) {
		this.campo2 = campo2;
	} 

	
	
}
