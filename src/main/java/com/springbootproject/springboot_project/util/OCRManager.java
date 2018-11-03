package com.springbootproject.springboot_project.util;

import java.io.File;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import net.sourceforge.tess4j.Tesseract;

public class OCRManager {
	
	private static final Logger LOG = LoggerFactory.getLogger(OCRManager.class);

	
	public static String makeMagic(String path, String imageName) { 
		LOG.info("Iniciando la magia");
		Tesseract tesseract = new Tesseract();
		tesseract.setLanguage("esp");
		String text=null;
		try {
			tesseract.setDatapath(path +"C:\\Users\\jmosquec\\.m2\\repository\\net\\sourceforge\\tess4j\\tess4j\\3.2.1");
			text = tesseract.doOCR(new File(path+imageName));		
			LOG.info("Mira la magia: ", text);
		} catch (Exception e) {		
			LOG.warn("UPS!!! Sucede algo con la magia, mira: ", e.getMessage());
		}
		return text;
	}

}
