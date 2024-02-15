<div>
@section('contenido')
<div class="text-white ">
<h2 class="text-2xl text-center	font-extrabold pt-8 pb-10">Preguntas frecuentes</h2>

<x-card-pregunta>
 <x-slot name="pregunta">
            {{'¿Cómo hago mi compra?'}}
        </x-slot>
        <x-slot name="texto">
          <ol class="list-decimal w-11/12 mb-5">
        <li >Navegue libremente por la tienda hasta encontrar algún producto de su interés</li>
        <li>registrese o inicie sesión en nuestra tienda</li>
        <li>cargue sus datos de envío y de facturación</li>
        <li>Vaya a la tienda y agregue los productos que le interesan al carrito</li>
        <li>Cuando tenga todos los productos que quiere seleccionados toque el carrito de compras que se encuentra en el margen superior derecho, allí podrá ver los productos que selecciono, las cantidades y el monto que debera abonar</li>
        <li>Haga click en finalizar compra</li>
        <li>Seleccione el medio de pago</li>
        <li>Seleccione si retirará en sucursal o solicitará el envío por OCA a sucursal o domicilio</li>
        <li>Disfrute su producto</li>
      </ol> 
        </x-slot>
</x-card-pregunta>
 <x-card-pregunta>
 <x-slot name="pregunta">
            {{'¿Cúanto tardan en entregar mi pedido?'}}
        </x-slot>
        <x-slot name="texto">
        <p  class=" w-11/12 mb-5">  {{ __('Los tiempos de demora, dependerán de OCA. Una vez que ingrese su dirección podrá ver en cuantos días recibirá su compra') }}
        </p>   </x-slot>
</x-card-pregunta>
<x-card-pregunta>
 <x-slot name="pregunta">
            {{'¿Hacen envíos o donde puedo retirarlo?'}}
        </x-slot>
        <x-slot name="texto">
        <p  class=" w-11/12 mb-5">  {{ __('Puede recibir su envío en su domicilio o sucursal de OCA más cercana, la opción para seleccionarla le aparecera una vez que ya halla seleccionado en el carrito de compras finalizar compra. En cuanto a retiros en sucursal puede venir a retirarlo a nuestra sucursal Av. Avellaneda 2000') }}
        </p> </x-slot>
</x-card-pregunta>
<x-card-pregunta>
 <x-slot name="pregunta">
            {{'¿Cuáles son los metodos de pago?'}}
        </x-slot>
        <x-slot name="texto">
        <p  class=" w-11/12 mb-5">    {{ __('Puede abonar atraves de Mercado Pago. Allí podrá seleccionar si abonará por transferencia o con tarjeta de crédito o débito') }}
        </p>  </x-slot>
</x-card-pregunta></div>
@endsection
</div>
