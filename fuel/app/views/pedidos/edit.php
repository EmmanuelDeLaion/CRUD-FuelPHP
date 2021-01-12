<h1 class="display-4">Editar información</h1>

<?= Form::open('/pedidos/edit/'.$pedido->id);  ?>


<div class="container">
<div class="row">
<div class="col-2"></div>
<div class="col-8">

<input type="hidden" name="pedido_id" value=" <?=$pedido->id;?> " >

<h5 class="text-info mt-5"> <span> <i class="fas fa-user"></i> </span> Información Personal</h5>


<div class="form-group  ">
     <?= Form::label("Nombre", "nombre");  ?>
     <?= Form::input('nombre',input::post('nombre',isset($pedido)?$pedido->nombre:''), array('class' => 'form-control')); ?>
</div>


<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <?= Form::label("ApellidoP", "apellido_paterno");  ?>
        <?= Form::input('apellido_paterno',input::post('apellido_paterno',isset($pedido)?$pedido->apellido_paterno:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <?= Form::label("ApellidoM", "apellido_materno");  ?>
        <?= Form::input('apellido_materno',input::post('apellido_materno',isset($pedido)?$pedido->apellido_materno:''), array('class' => 'form-control')); ?>
    </div>
</div>


    <div class="form-group ">
    <?= Form::label("Teléfono", "telefono");  ?>
     <?= Form::input('telefono',input::post('telefono',isset($pedido)?$pedido->telefono:''), array('class' => 'form-control')); ?>
    </div>


    <h5 class="text-info mt-5"> <span> <i class="fas fa-user"></i> </span> Información Del Producto</h5>
 
<div class="form-group  ">
<?= Form::label("Nombre Producto", "producto");  ?>
     <?= Form::input('producto',input::post('producto',isset($pedido)?$pedido->producto:''), array('class' => 'form-control')); ?>
</div>

<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Marca", "marca");  ?>
     <?= Form::input('marca',input::post('marca',isset($pedido)?$pedido->marca:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Categoria", "categoria");  ?>
     <?= Form::input('categoria',input::post('categoria',isset($pedido)?$pedido->categoria:''), array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Descripción", "descripcion");  ?>
     <?= Form::input('descripcion',input::post('descripcion',isset($pedido)?$pedido->descripcion:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Cantidad", "cantidad");  ?>
     <?= Form::input('cantidad',input::post('cantidad',isset($pedido)?$pedido->cantidad:''), array('class' => 'form-control')); ?>
    </div>
</div>


<h5 class="text-info mt-5"> <span> <i class="fas fa-user"></i> </span> Información Del Pedido</h5>
 
<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Paqueteria", "paqueteria");  ?>
     <?= Form::input('paqueteria',input::post('paqueteria',isset($pedido)?$pedido->paqueteria:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Fecha Pedido", "fecha_pedido");  ?>
     <?= Form::input('fecha_pedido',input::post('fecha_pedido',isset($pedido)?$pedido->fecha_pedido:''), array('class' => 'form-control')); ?>
    </div>
</div>



    <h5 class="text-info mt-5"> <span> <i class="fas fa-user"></i> </span> Información Del Domocilio</h5>
 
<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("País", "pais");  ?>
     <?= Form::input('pais',input::post('pais',isset($pedido)?$pedido->pais:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Estado", "estado");  ?>
     <?= Form::input('estado',input::post('estado',isset($pedido)?$pedido->estado:''), array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Ciudad", "ciudad");  ?>
     <?= Form::input('ciudad',input::post('ciudad',isset($pedido)?$pedido->ciudad:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Calle", "calle");  ?>
     <?= Form::input('calle',input::post('calle',isset($pedido)?$pedido->calle:''), array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Número interior", "numero_interior");  ?>
     <?= Form::input('numero_interior',input::post('numero_interior',isset($pedido)?$pedido->numero_interior:''), array('class' => 'form-control')); ?>
    </div>

    <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <?= Form::label("Número exterior", "numero_exterior");  ?>
     <?= Form::input('numero_exterior',input::post('numero_exterior',isset($pedido)?$pedido->numero_exterior:''), array('class' => 'form-control')); ?>
    </div>
</div>


<div class="form-group  ">
<?= Form::label("Referencias", "referencias");  ?>
     <?= Form::input('referencias',input::post('referencias',isset($pedido)?$pedido->referencias:''), array('class' => 'form-control')); ?>
    </div>


<div class="container">
<?= Form::submit('save'); ?>
</div>

</div>
<div class="col-2"></div>

</div>
</div>




<?= Form::close('/pedidos/edit/'.$pedido->id);  ?>