package com.springbootproject.springboot_project.repositorio;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.springbootproject.springboot_project.dominio.Tabla;

@Repository
public interface TablaDAO  extends CrudRepository<Tabla, Long> {
	
}
