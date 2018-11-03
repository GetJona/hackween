package com.springbootproject.springboot_project.servicio;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.springbootproject.springboot_project.dominio.Parametro;
import com.springbootproject.springboot_project.dominio.tipo.EnumParametros;
import com.springbootproject.springboot_project.repositorio.ParametrosDAO;

@Service
public class ParametrosServicio {

	@Autowired
	private ParametrosDAO dao;
	
	public Parametro obtenerValor(EnumParametros parametro){
		Optional<Parametro> optional = dao.findById(parametro.getCodigo());
		if (optional.isPresent()) {
			return optional.get();
		}
		return null;
	}
}
