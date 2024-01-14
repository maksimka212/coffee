<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Заказы
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <a href="/addOrder"><span>+</span> Создать заказ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">№</th><th scope="col">Статус</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                          <tr>
                            <th scope="row">{{ $order->id }}</th><td>{{ $order->status }}</td><td><a href="/orders/{{$order->id}}">Открыть</a></td>
                          </tr>
                      @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>