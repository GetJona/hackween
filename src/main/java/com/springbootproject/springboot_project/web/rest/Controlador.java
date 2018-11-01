package com.springbootproject.springboot_project.web.rest;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.springbootproject.springboot_project.servicio.Servicio;
import com.springbootproject.springboot_project.web.api.JsonDTO;

@RestController
public class Controlador {
	
	@Autowired
	private Servicio service;
	
	@CrossOrigin
	@RequestMapping(method=RequestMethod.POST, path="/getData")
	public JsonDTO controladorGet() {
		JsonDTO json = new JsonDTO();
		json.setData(String.valueOf(service.publi()));
		return json;
	}
	
}
