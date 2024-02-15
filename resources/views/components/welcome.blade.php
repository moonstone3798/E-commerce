<div class="p-6 lg:p-8 bg-[#cb9a96e6] shadow-gray-700	 shadow-lg ">
    <h1 class="mt-8 text-2xl font-medium text-white">
        Bienvenido/a  {{ Auth::user()->name }}
    </h1>
</div>
<div class="text-white">
<div class=" bg-[#cb9a96e6] bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div >
        <div class="flex items-center">
         <i class="fa-solid fa-book-open "></i><a href="/./historiales-de-compras">
            <h2 class="ms-3 text-xl font-semibold t"> Ver historial de compras </h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed">
        En esta sección puedes visualizar las compras realizadas con esta cuenta, su número de orden, la fecha realizada, el valor abonado y si lo desea podra descargar su factura.    
        </p></a>
    </div>
    <div >
        <div class="flex items-center">
        <i class="fa-solid fa-truck-arrow-right"></i> <a href="">
            <h2 class="ms-3 text-xl font-semibold ">Realizar seguimiento de pedido</h2>
        </div>
         <p class="mt-4  text-sm leading-relaxed">
        En esta sección con su número de orden, usted podrá visualizar en que estado se encuentra su pedido
        </p> </a>
    </div>

    <div>
        <div class="flex items-center">
        <i class="fa-regular fa-file-lines"></i><a href="">
            <h2 class="ms-3 text-xl font-semibold ">Agregar datos de facturación</h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed">
        En esta sección usted podrá aclarar que tipo de factura necesita que se realice al finalizar su compra. 
        </p></a>
    </div>

    <div>
        <div class="flex items-center">
        <i class="fa-solid fa-map-location-dot"></i><a href="">  
            <h2 class="ms-3 text-xl font-semibold "> Agregar direcciones de envío </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed">
        En esta sección usted pondrá las direcciones donde planea recibir el envío
        </p></a>
    </div>
    
    <div>
        <div class="flex items-center">
            <i class="fa-solid fa-heart "></i><a href="">
            <h2 class="ms-3 text-xl font-semibold ">Sus productos favoritos</h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed">
        En esta sección, podrá ver todos los productos a los que les ha puesto un "Me gusta" que aún se encuentran con stock disponible. Aprovecha y ponlos en tu carrito.
        </p></a>
    </div>
    <div>
        <div class="flex items-center">
        <i class="fa-solid fa-user-pen"></i> <a href="">
            <h2 class="ms-3 text-xl font-semibold ">Editar datos personales</h2>
        </div>
         <p class="mt-4 text-sm leading-relaxed">
        Si tuvo algún error de tipeo al registrarse, aquí podra corregir sus datos personales. Su nombre, su mail y su contraseña
        </p> </a>
    </div>
    </div>
</div>
