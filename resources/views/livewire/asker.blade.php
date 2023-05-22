<div>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($this->elements as $element)
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-2">{{ $element['title'] }}</h2>

                <ul  class="ml-4 text-gray-400">
                    @if (is_iterable($element['result']))
                        @foreach ($element['result'] as $result)
                            @foreach ($result as $key => $value)
                                <li class="text-xl font-semibold">
                                    {{ $value }}
                                </li>
                            @endforeach
                        @endforeach
                    @else
                        <li class="text-xl font-semibold">
                            {{ $element['result'] }}
                        </li>
                    @endif
                </ul>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center">
        <div class="mt-12 p-5 bg-gray-200 rounded-lg w-1/4">
            <h2 class="text-xl font-bold mb-5">Add element</h2>
            <div>
                <div class="flex items-center mb-4">
                    <label class="mr-5">Title:</label>
                    <input type="text" wire:model="title" class="border rounded p-2 w-full">
                </div>
                <div class="flex items-center w-full">
                    <label class="mr-2">Query:</label>
                    <textarea wire:model="query" class="border rounded p-2 w-full"></textarea>
                </div>
                <div class="flex justify-center items-center">
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-4 py-2"
                        wire:click="addToDashboard()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
