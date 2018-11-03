package com.springbootproject.springboot_project.servicio;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.springbootproject.springboot_project.dominio.tipo.EnumParametros;
import com.springbootproject.springboot_project.util.FilesManagerUtil;
import com.springbootproject.springboot_project.web.api.InputDTO;


@Service
public class Servicio {
	
	@Autowired
	private ParametrosServicio propiedadesServicio;
	
	public Servicio() {
		super();
	}

	public boolean decodeBytes(InputDTO dto) {
		try {
			FilesManagerUtil.guardarArchivoItex(dto.getData(), dto.getName(), propiedadesServicio.obtenerValor(EnumParametros.FILES_PATH).getValor());
			return true;
		}catch (Exception e) {
			return false;
		}
	}
	
	
	
}
