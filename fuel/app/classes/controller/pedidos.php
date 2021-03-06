<?php
class Controller_Pedidos extends Controller_Template{


    public function action_index(){
        $pedidos = Model_Pedido::find('all');

        $data = array('pedidos' => $pedidos );
        $this->template->title = "Pedidos";
        $this->template->content = View::forge('pedidos/index', $data, false);
    }


    public function action_add(){
        if(Input::post('send')){
            $pedido = new Model_Pedido();
            $pedido->nombre = Input::post('nombre');
            $pedido->apellido_paterno = Input::post('apellido_paterno');
            $pedido->apellido_materno = Input::post('apellido_materno');
            $pedido->producto = Input::post('producto');
            $pedido->marca = Input::post('marca');
            $pedido->categoria = Input::post('categoria');
            $pedido->descripcion = Input::post('descripcion');
            $pedido->fecha_pedido = Input::post('fecha_pedido');
            $pedido->cantidad = Input::post('cantidad');
            $pedido->paqueteria = Input::post('paqueteria');
            $pedido->pais = Input::post('pais');
            $pedido->estado = Input::post('estado');
            $pedido->ciudad = Input::post('ciudad');
            $pedido->calle = Input::post('calle');
            $pedido->numero_interior = Input::post('numero_interior');
            $pedido->numero_exterior = Input::post('numero_exterior');
            $pedido->referencias = Input::post('referencias');
            $pedido->telefono = Input::post('telefono');

            $pedido->save();
            Response::redirect('/pedidos/index');
        }
        $data = array();
        $this->template->title = "Registrar";
        $this->template->content = View::forge('pedidos/add', $data);
    }




    public function action_edit($id){

        if(Input::post('save')){
            $pedido =  Model_Pedido::find(Input::post('pedido_id'));
            $pedido->nombre = Input::post('nombre');
            $pedido->apellido_paterno = Input::post('apellido_paterno');
            $pedido->apellido_materno = Input::post('apellido_materno');
            $pedido->producto = Input::post('producto');
            $pedido->marca = Input::post('marca');
            $pedido->categoria = Input::post('categoria');
            $pedido->descripcion = Input::post('descripcion');
            $pedido->fecha_pedido = Input::post('fecha_pedido');
            $pedido->cantidad = Input::post('cantidad');
            $pedido->paqueteria = Input::post('paqueteria');
            $pedido->pais = Input::post('pais');
            $pedido->estado = Input::post('estado');
            $pedido->ciudad = Input::post('ciudad');
            $pedido->calle = Input::post('calle');
            $pedido->numero_interior = Input::post('numero_interior');
            $pedido->numero_exterior = Input::post('numero_exterior');
            $pedido->referencias = Input::post('referencias');
            $pedido->telefono = Input::post('telefono');

            $pedido->save();
            Response::redirect('/pedidos/index');
        }


        $pedido = Model_Pedido::find('first',array(
            'where' => array(
                'id' => $id
            )
        ));

        $data = array('pedido' => $pedido);
        $this->template->title = "Editar pedido";
        $this->template->content = View::forge('pedidos/edit', $data);
    }


    public function action_delete($id){
        $pedido = Model_Pedido::find($id);
        $pedido->delete();
        Response::redirect('/pedidos/index');
    }




    public function action_about(){
        $data = array();
        $this->template->title = "Agregar Pedidos";
        $this->template->content = View::forge('pedidos/about', $data);
    }

}

?>

