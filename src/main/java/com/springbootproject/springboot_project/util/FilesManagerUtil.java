package com.springbootproject.springboot_project.util;



import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import com.itextpdf.text.pdf.codec.Base64;

public class FilesManagerUtil {

	private static final Logger LOG = LoggerFactory.getLogger(FilesManagerUtil.class);

	private FilesManagerUtil() {
		throw new IllegalStateException("Utility class");
	}
	
	public static boolean existeArchivo(String filePath){
		
		LOG.info("Verificando si existe el archivo");
		try {
			FileReader f = new FileReader(filePath);
			f.close();
			return true;
		} catch (FileNotFoundException e) {
			LOG.warn("No se encontro el archivo: \n"+e.getMessage());
			return false;
		} catch (IOException e) {
			LOG.warn("Error cargando el archivo: \n"+e.getMessage());
			return false;
		}
		
	}

	public static void guardarArchivo(String encodedBytes, String invoice, String path) {	
		LOG.info("Guardando archivo");
		byte[] decodedBytes;
		File file = new File(path + invoice);
		try (FileOutputStream fop = new FileOutputStream(file)){
			decodedBytes = Base64.decode(encodedBytes);
			
			fop.write(decodedBytes);
			fop.flush();
		} catch (IOException e) {
			LOG.warn("Error guardando archivo");
		}
		LOG.info("Archivo guardado");
	}

	public static void guardarArchivoItex(String encodedBytes, String invoice, String path) {
		LOG.info("Guardando archivo con Itex");
		byte[] decodedBytes;
		File file = new File(path + invoice);
		try (FileOutputStream fop = new FileOutputStream(file)){
			decodedBytes = Base64.decode(encodedBytes);
			
			fop.write(decodedBytes);
			fop.flush();
		} catch (IOException e) {
			LOG.warn("Error guardando archivo con Itex");
		}
	}

}

