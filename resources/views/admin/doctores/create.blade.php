@extends('layouts.app')

@section('titulo')
    Crear nuevo doctor
@endsection

@section('contenido')
    <a class="font-bold uppercase text-white bg-yellow-500 text-sm p-2 rounded-lg hover:bg-yellow-600"
       href="{{ route('admin.appointments') }}">
        Volver
    </a>
    <div class="flex justify-center p-4">
      
        <div class="w-4/12 p-4 bg-gray-200">
            <!-- Formulario para crear una nueva cita -->
            <h2 class="text-2xl font-bold mb-4">Crear Nueva Cita</h2>
            <form action="{{ route('admin.store.appointment') }}" method="post" novalidate>
                @csrf

                <div class="mb-4">
                    <label for="date_time" class="block text-sm font-semibold text-gray-600">Fecha y Hora de la Cita:</label>
                    <input type="datetime-local" id="date_time" name="date_time" required
                           min="{{ now()->format('Y-m-d\TH:i') }}"
                           class="w-full p-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                </div>

                <div class="mb-4">
                    <label for="doctor_id" class="block text-sm font-semibold text-gray-600">Médico Asociado:</label>
                    <select id="doctor_id" name="doctor_id" required
                            class="w-full p-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                        <!-- Puedes agregar opciones dinámicamente desde la base de datos -->
                    </select>
                </div>

                <div class="mb-4">
                    <label for="patient_id" class="block text-sm font-semibold text-gray-600">Paciente:</label>
                    <select id="patient_id" name="patient_id"
                            class="w-full p-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                        <!-- Puedes agregar opciones dinámicamente desde la base de datos -->
                    </select>
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-semibold text-gray-600">Estado de la Cita:</label>
                    <select id="status" name="status" required
                            class="w-full p-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                        <option value="available">Disponible</option>
                        <option value="reserved">Reservada</option>
                        <option value="completed">Completada</option>
                    </select>
                </div>

                <button type="submit"
                        class="w-full p-2 font-bold bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                    Crear Cita Médica
                </button>
            </form>
        </div>
    </div>
@endsection
