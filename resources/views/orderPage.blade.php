<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  Номер: {{ $order->id }} <br>
                  Дата: {{ $order->date }} <br>
                  Статус: {{ $order->status }} <br>
                  Время создания: {{ $order->time_create }} <br>
                  Время завершения: {{ $order->time_complete }} <br>
                  ID пользователя: {{ $order->user_id }} <br>
                </div>
                <a href="/orders">Назад</a>
            </div>
        </div>
    </div>
</x-app-layout>