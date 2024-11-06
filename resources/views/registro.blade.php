<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | EAT-ME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex"> 
    <div class="flex flex-row h-full w-full">
        <!-- Parte izquierda: formulario de registro -->
        <div class="flex flex-col bg-green-900 text-white w-1/2 items-center justify-center p-8">
            <h1 class="text-4xl font-bold mb-4">Registro de Usuario</h1>
            <form action="{{ route('registro') }}" method="POST" class="w-full max-w-sm">
                @csrf
                <!-- Campos en formato de columnas -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-2">
                        <label for="clave" class="block text-sm font-medium">Matricula</label>
                        <input type="text" id="clave" name="usu_clave" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Clave de Usuario" style="background-color: #fff; color: #000;">
                    </div>
                    <div class="mb-2">
                        <label for="nombre" class="block text-sm font-medium">Nombre</label>
                        <input type="text" id="nombre" name="usu_nombre" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Nombre" style="background-color: #fff; color: #000;">
                    </div>
                    <div class="mb-2">
                        <label for="paterno" class="block text-sm font-medium">Apellido Paterno</label>
                        <input type="text" id="paterno" name="usu_paterno" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Apellido Paterno" style="background-color: #fff; color: #000;">
                    </div>
                    <div class="mb-2">
                        <label for="materno" class="block text-sm font-medium">Apellido Materno</label>
                        <input type="text" id="materno" name="usu_materno" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Apellido Materno" style="background-color: #fff; color: #000;">
                    </div>
                    <div class="mb-2">
                        <label for="tiposangre" class="block text-sm font-medium">Tipo de Sangre</label>
                        <select id="tiposangre" name="usu_tiposangre" class="mt-1 block w-full p-2 border rounded-md" style="background-color: #fff; color: #000;">
                            <option value="">Seleccione...</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>  
                    </div>
                    <div class="mb-2">
                        <label for="telefono" class="block text-sm font-medium">Teléfono</label>
                        <input type="text" id="telefono" name="usu_telefono" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Teléfono" style="background-color: #fff; color: #000;">
                    </div>
                </div>
                <!-- Campos en una sola columna -->
                <div class="mb-2">
                    <label for="genero" class="block text-sm font-medium">Género</label>
                    <select id="genero" name="usu_genero" required class="mt-1 block w-full p-2 border rounded-md" style="background-color: #fff; color: #000;">
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="gmail" class="block text-sm font-medium">Correo Electrónico</label>
                    <input type="email" id="gmail" name="usu_gmail" required class="mt-1 block w-full p-2 border rounded-md" placeholder="tu-email@ejemplo.com" style="background-color: #fff; color: #000;">
                </div>
                <div class="mb-2">
                    <label for="password" class="block text-sm font-medium">Contraseña</label>
                    <input type="password" id="password" name="usu_password" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Contraseña" style="background-color: #fff; color: #000;">
                </div>
                
                <div class="mb-2">
                    <label for="rol" class="block text-sm font-medium">Rol</label>
                    <select id="rol" name="usu_rol" required class="mt-1 block w-full p-2 border rounded-md" style="background-color: #fff; color: #000;">
                        <option value="">Seleccione...</option>
                        <option value="administrador">Administrador</option>
                        <option value="cliente">Cliente</option>
                        <option value="medico">Médico</option>
                        <option value="proveedor">Proveedor</option>
                    </select>
                </div>
                <!-- Botón de crear usuario -->
                <div class="grid grid-cols-2 gap-4">
                    <button type="submit" class="w-full bg-yellow-200 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded mt-4">Crear registro</button>
                    <a href="{{ route('login') }}" class="w-full bg-yellow-200 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded mt-4 text-center">Volver al Inicio</a>
                </div>
            </form>
        </div>

        <!-- Parte derecha: imagen -->
        <div class="w-1/2 flex items-center justify-center">
            <img src="{{ asset('imagenes/itvh.jpeg') }}" alt="Imagen de registro" class="h-auto max-w-full object-cover">
        </div>
    </div>
</body>
</html>
