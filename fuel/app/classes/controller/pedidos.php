<?php
class Controller_Pedidos extends Controller_Template{
    public function action_index(){
        $data = array();
        $this->template->title = "Pedidos";
        $this->template->content = View::forge('pedidos/index', $data);
        // return Response::forge(View::forge('pedidos/index'));
    }

    public function action_about(){
        $data = array();
        $this->template->title = "Agregar Pedidos";
        $this->template->content = View::forge('pedidos/about', $data);
        // return Response::forge(View::forge('pedidos/about'));
    }

}
?>