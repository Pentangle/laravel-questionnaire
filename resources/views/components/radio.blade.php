@props([
    'name' => '',
    'value' => '',
    'label' => '',
    'choices' => [],
])
<div>
    <label class="text-base font-medium text-gray-900">{{$label}}</label>
    <fieldset class="mt-4">
        <legend class="sr-only">Choices</legend>
        <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
            @foreach($choices as $choice)
                <div class="flex items-center">
                    <input id="choice_{{ $choice['id'] }}" name="notification-method" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="{{ $choice['id'] }}">
                    <label for="choice_{{ $choice['id'] }}" class="ml-3 block text-sm font-medium text-gray-700"> {{ $choice['name'] }} </label>
                </div>
            @endforeach
        </div>
    </fieldset>
</div>