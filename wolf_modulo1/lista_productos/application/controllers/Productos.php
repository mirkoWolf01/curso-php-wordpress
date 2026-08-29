<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public Productos_model $Productos_model;
    public CI_Form_validation $form_validation;
    public CI_Input $input;

    #[Override]
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Productos_model");
        $this->load->library("form_validation");
    }

	public function index()
	{
		$datos['productos'] = $this->Productos_model->obtenerTodos();
        $this->load->view('productos_listado', $datos);

	}

    public function ver_detalles(int $id){
        $producto = $this->Productos_model->obtenerPorId($id);

        $datos['producto'] = $producto;
        $this->load->view('productos_detalle', $datos);
    }

    public function ingresar_nuevo(){
        $this->_set_validation_rules();

        if($this->form_validation->run() == FALSE){
            $datos['titulo'] = 'Nuevo Producto';

            $this->load->view('productos_new', $datos);
        }
        else{
            $producto = array(
                'nombre' => $this->input->post('nombre'),
                'precio' => $this->input->post('precio'),
                'stock'  => $this->input->post('stock')
            );

            $new_id = $this->Productos_model->create($producto);

            $datos['titulo'] = 'Producto guardado';

            $datos['nombre'] = $producto["nombre"];
            $datos['id_insertado'] = $new_id;

            $this->load->view('productos_exito', $datos);

        }   
    }


    public function modificar_producto(int $id){
        $producto = $this->Productos_model->obtenerPorId($id);
        $this->_set_validation_rules();

        if($this->form_validation->run() == FALSE){
            $datos['titulo'] = 'Modificar Producto';
            $datos['producto'] = $producto;

            $this->load->view('productos_modificar', $datos);
        }
        else{
            $producto = array(
                'nombre' => $this->input->post('nombre'),
                'precio' => $this->input->post('precio'),
                'stock'  => $this->input->post('stock')
            );

            $this->Productos_model->actualizar($id, $producto);

            $datos['titulo'] = 'Producto guardado';
            $datos['nombre'] = $producto["nombre"];
            $datos['id_modificado'] = $id;

            $this->load->view('productos_modificado_exito', $datos);
        }   
    }

    public function _set_validation_rules(){
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[40]', array(
            'required' => 'El campo %s es obligatorio.',
            'min_length' => 'El campo %s necesita al menos 3 caracteres.',
            'max_length' => 'Exceso de caracteres en el campo %s.'
        ));

        $this->form_validation->set_rules('precio', 'Precio', 'required|numeric|is_natural_no_zero', array(
            'required' => 'El campo %s es obligatorio.',
            'numeric' => 'El campo %s necesita que ser numerico.',
            'is_natural_no_zero' => 'El campo %s necesita que el valor sea mayor a cero.'
        ));

        $this->form_validation->set_rules('stock', 'Stock', 'required|numeric|is_natural', array(
            'required' => 'El campo %s es obligatorio.',
            'numeric' => ' El campo %s necesita que ser numerico.',
            'is_natural' => 'El campo %s necesita que el valor sea mayor o igual a cero.'
        ));
    }
}
