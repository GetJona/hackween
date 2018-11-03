package com.springbootproject.springboot_project.repositorio;

import org.springframework.data.repository.CrudRepository;

import com.springbootproject.springboot_project.dominio.Parametro;

public interface ParametrosDAO extends CrudRepository<Parametro, String> {

}
