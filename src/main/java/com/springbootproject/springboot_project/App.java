package com.springbootproject.springboot_project;

//import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
//import org.springframework.context.annotation.Bean;

//import com.springbootproject.springboot_project.configuracion.Configuracion;
//import com.springbootproject.springboot_project.dominio.tipo.EnumParametros;
//import com.springbootproject.springboot_project.servicio.ParametrosServicio;


@SpringBootApplication
public class App {

//	@Autowired
//	private ParametrosServicio propiedadesServicio;
	
	public static void main(String[] args) {
		SpringApplication.run(App.class, args);
	}
	
//	@Bean	
//	private Configuracion establecerBasicas(Configuracion config) {
//		config.setPath(propiedadesServicio.obtenerValor(EnumParametros.FILES_PATH).getValor());
//		return config;
//	}
//	

}