package com.springbootproject.springboot_project.servicio;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Service;

import com.springbootproject.springboot_project.util.FilesManagerUtil;
import com.springbootproject.springboot_project.util.OCRManager;
import com.springbootproject.springboot_project.web.api.InputDTO;


@Service
public class Servicio {
	
//	@Autowired
//	private ParametrosServicio propiedadesServicio;
	
	private static final Logger LOG = LoggerFactory.getLogger(Servicio.class);
	
	public Servicio() {
		super();
	}

	public boolean procesarImagen(InputDTO dto) {
		LOG.info("Procesando imagen");
		String text=null;
		try {
//			FilesManagerUtil.guardarArchivoItex(dto.getData(), dto.getName(), propiedadesServicio.obtenerValor(EnumParametros.FILES_PATH).getValor());
//			text = OCRManager.makeMagic(propiedadesServicio.obtenerValor(EnumParametros.FILES_PATH).getValor(), dto.getName());
			FilesManagerUtil.guardarArchivoItex(dto.getData(), dto.getName(), "C:\\imgs\\");
			text = OCRManager.makeMagic("C:\\imgs\\", dto.getName());
			LOG.info("Imagen procesada con exito");
			return true;
		}catch (Exception e) {
			LOG.warn("Error procesando la imagen:", e.getMessage());
			return false;
		}
	}
	
	
	
}
