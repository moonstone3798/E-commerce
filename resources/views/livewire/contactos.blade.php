<div>
@section('contenido')
<section class="w-full ">
<div class="flex items-center justify-center h-screen " >
<div class="w-1/2 flex-col  rounded-lg  bg-opacity-20 bg-[#9D5B68E6] items-center flex items-center justify-center h-auto shadow-lg   border-gray-200">
<div class="w-4/5">
@section('js')
            @if (session()->has('enviado'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Mensaje Enviado',
    text: 'Ya hemos recibido su mensaje, en breve estaremos respondiendo su consulta al mail proporcionado'
}
);
    </script>
@endif
                    @endsection
                               
<form method="POST" wire:submit.prevent="enviarMail" action="/contactos"  >
            @csrf
            <h2 class="text-2xl text-center	text-white font-extrabold pt-8">Contactenos</h2>
            <br>
            <div>
                <x-label for="nombre" value="{{ __('Nombre') }}" />
                <x-input id="nombre" class="block mt-1 w-full" type="text" placeholder="nombre" wire:model.defer="nombre"  autofocus autocomplete="nombre" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full " type="email" placeholder="correo electrónico" name="email" wire:model.defer="email"  autocomplete="email" />
            </div>
 
            <div class="mt-4">
                <x-label for="mensaje" value="{{ __('Mensaje') }}" />
        <textarea name="mensaje" id="mensaje" cols="30" rows="8" wire:model.defer="mensaje" class="w-full focus:border-none focus:outline-none resize-none" ></textarea>
            </div>

           
                <x-button class="ms-4 mb-10 mt-2"  >
                {{ __('Enviar') }}
                </x-button>
        </form>
        </div>
        </div>
 
    
</section>
<section class="flex h-screen bg-[#cb9a96e6] sm:flex-row flex-col  justify-evenly">
<div class="sm:justify-evenly w-1/2 flex items-center ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.0750151495367!2d-58.47783592514521!3d-34.62754455875551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9926f90b67b%3A0x9baabe7bb0186bc!2sAv.%20Avellaneda%203200%2C%20C1406FZQ%20CABA!5e0!3m2!1ses-419!2sar!4v1706805250505!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy" async  referrerpolicy="no-referrer-when-downgrade" class="h-2/3 w-5/6 border-none justify-center"></iframe>
            </div>
                <div class=" flex w-1/2  justify-evenly items-center ">
                    <div>
        <h4 class="font-bold">¿Dónde estamos?</h4>
        <p>Av. Avellaneda 3200</p>
        <h4>Horario de atención</h4>
        <p>de lunes a viernes <br> de 8 a 17hs <br>sábados de 8-13 hs </p>
        <br>
        <div class="w-5/6 ">
        <x-social>

        </x-social> </div>
    <br>
        <h4>Nuestro Mail:</h4>
        <p>avellaneda@gmail.com</p>
        <h4>Nuestro Teléfono:</h4>
        <p>4611-3222</p>
        </div></div>
    </section>
</div>

@endsection
            </div>