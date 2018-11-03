package com.springbootproject.springboot_project;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
//import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
//import org.springframework.context.annotation.Bean;

//import com.springbootproject.springboot_project.configuracion.Configuracion;
//import com.springbootproject.springboot_project.dominio.tipo.EnumParametros;
//import com.springbootproject.springboot_project.servicio.ParametrosServicio;


@SpringBootApplication
public class App {

	private static final Logger LOG = LoggerFactory.getLogger(App.class);
	
//	@Autowired
//	private ParametrosServicio propiedadesServicio;
	
	public static void main(String[] args) {
		LOG.info("Iniciando App");
		SpringApplication.run(App.class, args);
	}
	
//	@Bean	
//	private Configuracion establecerBasicas(Configuracion config) {
//		config.setPath(propiedadesServicio.obtenerValor(EnumParametros.FILES_PATH).getValor());
//		return config;
//	}
//	

}