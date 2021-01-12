<?php
class Controller_Pedidos extends Controller_Template{
    public function action_index(){
        $pedidos = Model_Pedido::find('all');

        $data = array('pedidos' => $pedidos );
        $this->template->title = "Pedidos";
        $this->template->content = View::forge('pedidos/index', $data, false);
    }


    public function action_about(){
        $data = array();
        $this->template->title = "Agregar Pedidos";
        $this->template->content = View::forge('pedidos/about', $data);
    }

}

?>

