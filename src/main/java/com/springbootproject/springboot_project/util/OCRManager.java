package com.springbootproject.springboot_project.util;

import java.io.File;

import net.sourceforge.tess4j.Tesseract;
import net.sourceforge.tess4j.TesseractException;

public class OCRManager {
	
	public static String makeMagic(String path, String imageName) { 
		 Tesseract tesseract = new Tesseract();
		 String text=null;
		 try {
			tesseract.setDatapath(path +"tessdata");
			text = tesseract.doOCR(new File(path+imageName));		
			System.out.print(text);
		 } catch (TesseractException e) {		
			e.printStackTrace();
		}
		 return text;
	}

}
