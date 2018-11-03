package com.springbootproject.springboot_project.web.rest;

import java.util.HashMap;
import java.util.Map;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
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
	
	private static final Logger LOG = LoggerFactory.getLogger(Controlador.class);
	
	@CrossOrigin
	@RequestMapping(method=RequestMethod.POST, path="/covertInvoice")
	public Map<String, Integer> controladorPost(@RequestBody InputDTO dto) {	
		LOG.info("Ejecutantdo proceso con la imagen");
		Map<String, Integer> map = new HashMap<>();
		boolean x = service.procesarImagen(dto);
		if(x) {
			LOG.info("Respondiendo ok");
			map.put("HTTP", 200);
		}else {
			LOG.warn("Respondiendo error");
			map.put("HTTP", 406);
		}
		return map;
	}
	
}
