package com.springbootproject.springboot_project.web.api;

public class InputDTO {
	
	private String name;
	
	private String data;

	public InputDTO() {
		super();
	}

	public InputDTO(String name, String data) {
		super();
		this.name = name;
		this.data = data;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getData() {
		return data;
	}

	public void setData(String data) {
		this.data = data;
	}
	
	
	

}
