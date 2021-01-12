<?php
class Model_Pedido extends Orm\Model{
    protected static $_properties = array(
        'id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'producto',
        'marca',
        'categoria',
        'descripcion',
        'fecha_pedido',
        'cantidad',
        'paqueteria',
        'pais',
        'estado',
        'ciudad',
        'calle',
        'numero_interior',
        'numero_exterior',
        'referencias',
        'telefono'
    );
}