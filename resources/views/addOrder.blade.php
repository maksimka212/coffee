<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Создание заказа
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form method="POST" action="/createOrder">
                    @csrf
                    <input name="table" type="text" placeholder="Номер стола"/>
                    <button type="submit">Создать</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>