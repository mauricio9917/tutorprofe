<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TutorProfe</title>

        {{-- Styles --}}
        @vite('resources/css/app.css')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap');
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    </head>
    <body class="font-['Fuzzy_Bubbles']">

        <header class="fixed h-12 z-40 container mx-auto px-15 bg-[#2e294e] place-items-center">
            <nav class="">
                <ul class="px-14 grid grid-cols-7">
                    <li class="text-3xl text-white text-center mt-2">TutorProfe<a href="./home.html"></a></li>
                    <li></li>
                    <li></li>
                    <li class="text-white text-right mt-3"></li>
                    <li class="px-6 text-white text-center mt-3 grid grid-cols-3 ">
                        <i class="bi bi-facebook hover:text-[#1977f3]"></i>
                        <i class="bi bi-instagram hover:text-[#ff5b6d]"></i>
                        <i class="bi bi-twitter hover:text-[#1d9bf0]"></i>
                    </li>
                    <li class="modal-teacher-register">
                        <button id="open-modal" class="text-white p-3 hover:text-[#7fefbd]">¿Quieres asesorar?</button>
                        <div id="modal-component-container" class="hidden fixed overflow-y-auto inset-0 ">
                            <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center h-modal rounded-xl sm:block sm:p-0">
                                <div class="modal-bg-container fixed inset-0 bg-gray-600 bg-opacity-75"></div>
                                <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
                                <div id="modal-container" class="modal-container inline-block align-bottom bg-white rounded-lg text-left shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg">
                                    <div class="modal-wrapper bg-[#1B998B] px-4 pt-2 pb-0 sm:p-6 sm:pb-2">
                                        <div class="modal-wrapper-flex sm:flex sm:items-start">
                                            <div class="modal-content text-center mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                                                <i class="bi bi-x-lg absolute right-5"></i>
                                                <i class="bi bi-pencil-square relative flex justify-center text-[#004346]" style="font-size: 3rem"></i>
                                                <h3 class="text-3xl font-bold text-[#004346] text-center">Regístrate</h3>
                                                <h2 class="text xl text-[#004346] pb-4 text-center">con TutorProfe para conectarse con estudiantes que necesiten de vuestra asesoría</h2>
                                                <form>
                                                    <div class="grid md:grid-cols-2 md:gap-6 pt-2">
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="text" name="floating-name" id="floating-name" class="block py-2 px-0 w-full text- text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-name" class="text-bold peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombres</label>
                                                        </div>
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="text" name="floating-last-name" id="floating-last-name" class="block py-2 px-0 w-full text-base text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-last-name" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2 grid md:grid-cols-2 md:gap-6">
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="number" name="floating-age" id="floating-age" class="block py-2 px-0 w-full text-base text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-age" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Edad</label>
                                                        </div>
                                                        <div class="relative z-0 mb-6 pt-0 w-full group">
                                                            <label for="floating-sex" class="inline pb-0 text-base font-medium object-center text-gray-50 dark:text-white">Sexo</label>
                                                            <select id="floating-sex" class="bg-[#1b998b] border border-gray-300 text-[#004346] text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option>Masculino</option>
                                                                <option>Femenino</option>
                                                                <option>Otro</option>
                                                                <option>Prefiero no Contestar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="grid md:grid-cols-2 md:gap-6 pt-2">
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="text" name="floating-professional-career" id="floating-professional-career" class="block py-2 px-0 w-full text-base text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-professional-career" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Carrera Profesional</label>
                                                        </div>
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="text" name="floating-asignatures" id="floating-asignatures" class="block py-2 px-0 w-full text-base text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-asignatures" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Teléfono</label>
                                                        </div>
                                                    </div>
                                                    <div class="grid md:grid-cols-2 md:gap-6 pt-2">
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="text" name="floating-username" id="floating-username" class="block py-2 px-0 w-full text-base text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-username" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre de Usuario</label>
                                                        </div>
                                                        <div class="relative z-0 mb-6 w-full group">
                                                            <input type="email" name="floating-email" id="floating-email" class="block py-2 px-0 w-full text-base text-[#004346] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-email" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo Electrónico</label>
                                                        </div>
                                                    </div>
                                                    <div class="grid md:grid-cols-2 md:gap-6 pt-2">
                                                        <div class="relative z-0 mb-2 w-full group">
                                                            <input type="text" name="floating-password" id="floating-password" class="block py-2 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-password" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña</label>
                                                        </div>
                                                        <div class="relative z-0 mb-2| w-full group">
                                                            <input type="text" name="floating-confirm-password" id="floating-confirm-password" class="block py-2 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-50 peer" placeholder=" " required />
                                                            <label for="floating-confirm-password" class="peer-focus:font-medium absolute text-base text-gray-50 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-50 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirmar Contraseña</label>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="modal-text mt-2 place-content-center">
                                                    <input type="checkbox" name="floating-checkbox" class="text-gray-50 text-base" required />
                                                    <label for="floating-checkbox" class="text-gray-50 text-base">¿Aceptas nuestros términos y condiciones?</label>
                                                    <div class="h-captcha flex justify-center pt-3" data-sitekey="your_site_key"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-actions bg-[#1B998B] pt-none px-3 py-3 sm:px-6 sm:flex sm:flex-row flex justify-center">
                                        <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-[#d00000] font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Registrarse</button>
                                        <button id="close-modal" class="w-full inline-flex justify-center rounded-md border border-gray-200 shadow-md px-4 py-2 mt-3 bg-white font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="modal-login">
                        <button id="open-modal-login" class="inline-block px-6 py-2.5 bg-[#C5D86D] text-black text-bold text-s leading-tight uppercase rounded shadow-md hover:bg-[#ffeddf] hover:shadow-lg focus:bg-[#ffeddf] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#C5D86D] active:shadow-lg transition duration-150 ease-in-out mt-1">INICIAR SESIÓN</button>
                        <div id="modal-component-container-login" class="hidden fixed inset-0">
                            <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="modal-bg-container fixed inset-0 bg-gray-600 bg-opacity-75"></div>
                                <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
                                <div id="modal-container-login" class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
                                    <div class="modal-wrapper bg-[#C5D86D] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="modal-wrapper-flex">
                                            <div class="modal-content relative text-center mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                                                <div class="relative text-2xl text-[#25616d] flex justify-center mb-5">Iniciar sesión</div>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="text" name="floating-professional-career" id="floating-professional-career" class="block py-2 px-0 w-full text-base text-[#2e294e] bg-transparent border-0 border-b-2 border-[#2e294e] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#25616d] peer" placeholder=" " required />
                                                    <label for="floating-professional-career" class="peer-focus:font-medium absolute text-base text-[#2e294e] dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#25616d] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre de Usuario</label>
                                                </div>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="text" name="floating-asignatures" id="floating-asignatures" class="block py-2 px-0 w-full text-base text-[#2e294e] bg-transparent border-0 border-b-2 border-[#2e294e] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#25616d] peer" placeholder=" " required />
                                                    <label for="floating-asignatures" class="peer-focus:font-medium absolute text-base text-[#2e294e] dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#25616d] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña</label>
                                                </div>
                                                <div class="h-captcha flex justify-center pt-3" data-sitekey="your_site_key"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-actions bg-[#C5D86D] px-4 py-3 flex justify-center sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button id="close-modal-login" class="w-full inline-flex justify-center rounded-md border border-gray-200 shadow-md px-4 py-2 mt-3 bg-white font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancelar</button>
                                        <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-[#ff8427] font-medium text-white hover:bg-[#fca311] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Iniciar Sesión</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- bg-[#C5D86D] hover:bg-[#ffeddf] -->
                </ul>
            </nav>
        </header>
    
        <main>
    
            <section class='part-one bg-[#1B998B]'>
                <div class="mx-auto h-[28rem] pl-[4.5rem] grid grid-cols-5 gap-3">
                    <div class="text-4xl mt-[10rem] ml-[12rem] text-white col-span-3">
                        Aprende temas o recibe asesorías en diversas áreas del conocimiento con TutorProfe
                        <div class="relative">
                            <input type="text" id="first_name" class="bg-[#166b79] border mt-5 border-[#264653] text-white text-lg rounded-lg focus:border-[#264653] block w-full p-2  dark:placeholder-black" placeholder="¿En qué tema necesitas asesoría?">
                            <button type="submit" class="text-white absolute right-2.5 bottom-1.5 bg-[#264653] hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Buscar</button> 
                        </div>
                    </div>
                    <div class="col-span-2 mt-[8rem] columns-3xs m-0">
                        <img class="w-[20rem] ml-20" src="{{asset("storage/img/tutorprofe.PNG")}}" alt="conocimiento"/>
                    </div>
                </div>
            </section>
    
            <section class='part-two bg-[#1B998B] h-[20rem] grid grid-cols-6'>
                <div class="relative col-start-2 col-span-4 grid grid-cols-6 mt-6 mb-12 items-center rounded-lg bg-[#f46036]">
                    <img class="relative col-start-1 col-span-2 rounded-lg" src="{{asset("storage/img/estudio.jpg")}}" alt="learn">
                    <div class="aboslute flex-col col-start-3 col-span-4 grid-rows-3 grid-flow-col p-10 leading-normal">
                        <h1 class="text-center mb-2 text-3xl font-bold  tracking-tight text-white dark:text-white">¿DESEAS APRENDER?</h1>
                        <p class="text-center mb-3 text-xl font-normal text-black dark:text-gray-400">Haz parte de la comunidad educativa donde adquieres conocimientos efectivos de nuestros profesores.</p>
                        <button type="submit" class="mx-auto w-30 grid place-items-center text-white  bg-[#e71d36] hover:bg-[#680814] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">REGÍSTRATE AQUÍ</button> 
                    </div>
                </div>  
            </section>
    
            <section class="part-three bg-[#c5d86d] h-[32rem]">
                <div class="relative pt-10 pr-10 pl-10 pb-1 text-4xl text-black text-center">Una plataforma especialmente diseñada para incentivar el aprendizaje y la enseñanza</div>
                <div class="px-[10rem] static grid grid-cols-3 gap-[8rem] pt-5 place-items-center pb-0">
                    <i class="bi bi-search" style="font-size: 10rem"></i>
                    <i class="bi bi-chat-left-dots" style="font-size: 10rem"></i>
                    <i class="bi bi-hand-thumbs-up" style="font-size: 10rem"></i>
                </div>
                <div class="px-[10rem] static grid grid-cols-3 gap-[8rem] pt-0 place-items-center">
                    <p class="text-center text-xl pt-0">Busca y encuentra docentes interesados en tus requerimientos.</p>
                    <p class="text-center text-xl pt-0">Proponga y acuerde un encuentro educativo ya sea virtual o presencial.</p>
                    <p class="text-center text-xl pt-0">Aprende temas nuevos o resuelve dudas con nuestros profesores.</p>
                </div>
            </section>
    
            <section class="part-four bg-[#F46036]  h-[32rem]">
                <div class="relative pt-10 pr-10 pl-10 pb-10 text-4xl text-yellow-200 text-center">Aquí tenemos más de un centenar de temas distribuídos en diferentes ramas del conocimiento</div>
                <div class="relative grid grid-cols-5 gap-[2rem] place-items-center pt-5 pb-0 pr-[3rem] pl-[3rem]">
                    <div class="max-w-sm bg-[#EBB446] border border-orange-400 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg" src="{{asset("storage/img/EcDif.jpg")}}" alt="matematicas" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Matemáticas</h5>
                        </div>
                    </div>
                    <div class="max-w-sm bg-[#EBB446] border border-orange-400 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg" src="{{asset("storage/img/quimica.jpg")}}" alt="Química" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Química</h5>
                        </div>
                    </div>
                    <div class="max-w-sm bg-[#EBB446] border border-orange-400 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg" src="{{asset("storage/img/fisica.jpg")}}" alt="física" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Física</h5>
                        </div>
                    </div>
                    <div class="max-w-sm bg-[#EBB446] border border-orange-400 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg" src="{{asset("storage/img/biologia.jpg")}}" alt="biologia" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Biología</h5>
                        </div>
                    </div>
                    <div class="max-w-sm bg-[#EBB446] border border-orange-400 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg" src="{{asset("storage/img/ingles.jpg")}}" alt="inglés" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Inglés</h5>
                        </div>
                    </div>
                </div>
                <div class="pt-10">
                    <button type="submit" class="mx-auto w-30 grid place-items-center text-white  bg-[#e71d36] hover:bg-[#680814] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Ver mas</button> 
                </div>
            </section>
    
            <section class="bg-[#1B998B] h-[28rem]">
                <div class="relative text-center text-white text-4xl text-bold pt-10">¿DESEAS ENSEÑAR?</div>
                <div class="relative grid grid-cols-7 gap-none place-items-center pt-6">
                    <div class="relative col-start-2 col-span-3 text-3xl text-yellow-100">
                        Haz parte de la comunidad donde encuentras alumnos dispuestos a obtener tus conocimientos. No te cobramos por comisión.
                    </div>
                    <div class="relative col-start-5 col-span-2">
                        <img class="rounded-2xl" src="{{asset("storage/img/profesor.png")}}" alt="profesor">
                    </div>
                </div>
                <div class="pt-10">
                    <button type="submit" class="mx-auto w-30 grid place-items-center text-white  bg-[#e71d36] hover:bg-[#680814] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2">REGÍSTRATE AQUÍ</button>
                </div>
            </section>
        </main>
    
        <footer class="bg-[#2E294E] h-[16rem]">
            <div class="text-center text-white text-3xl pt-8">TutorProfe.com</div>
            <div class="relative grid grid-cols-10 gap-0 place-items-center pt-8 text-white">
                <div class="relative col-start-2 col-span-2 place-items-center">Acerca de nosotros</div>
                <div class="relative col-start-5 col-span-2 place-items-center">
                    <i class="bi bi-facebook" style="font-size: 1.5rem">      </i>
                    <i class="bi bi-instagram" style="font-size: 1.5rem">      </i>
                    <i class="bi bi-twitter" style="font-size: 1.5rem">      </i>
                </div>
                <div class="relative col-start-8 col-span-2 place-items-center">Ayuda</div>
                <div class="relative col-start-2 col-span-2 place-items-center pt-5">Nuestro Blog</div>
                <div class="relative col-start-5 col-span-2 place-items-center pt-5">Política de Privacidad</div>
                <div class="relative col-start-8 col-span-2 place-items-center pt-5">Opiniones</div>
                <div class="relative col-start-2 col-span-2 place-items-center pt-5">Misión y Visión</div>
                <div class="relative col-start-5 col-span-2 place-items-center pt-5">Contacto</div>
                <div class="relative col-start-8 col-span-2 place-items-center pt-5">Buzón de Sugerencias</div>
    
            </div>
        </footer>
        {{-- Scripts --}}
        <script src="{{asset('storage/scripts/modals.js')}}"></script>
        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    </body>
</html>
