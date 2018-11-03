package com.springbootproject.springboot_project.web.rest;

import java.util.HashMap;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.springbootproject.springboot_project.servicio.Servicio;
import com.springbootproject.springboot_project.web.api.InputDTO;

@RestController
public class Controlador {
	
	@Autowired
	private Servicio service;
	
	@CrossOrigin
	@RequestMapping(method=RequestMethod.POST, path="/inputData")
	public Map<String, Integer> controladorPost(@RequestBody InputDTO dto) {	
		Map<String, Integer> map = new HashMap<>();
		boolean x = service.decodeBytes(dto);
		if(x) {
			map.put("HTTP", 200);
		}else {
			map.put("HTTP", 406);
		}
		return map;
	}
	
	@CrossOrigin
	@RequestMapping(method=RequestMethod.GET, path="/getData")
	public Map<String, Integer> controladorGet(@RequestBody InputDTO dto) {	
		Map<String, Integer> map = new HashMap<>();
		boolean x = service.decodeBytes(dto);
		if(x) {
			map.put("HTTP", 200);
		}else {
			map.put("HTTP", 406);
		}
		return map;
	}
	
}
