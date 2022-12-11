<form wire:submit.prevent="authenticate" class="space-y-8">
    {{ $this->form }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>

    <span class="block text-sm leading-4 text-gray-700 dark:text-gray-300">
        Email address: <span class="text-sm italic">demouser@example.com</span>
    </span>

    <span class="text-sm leading-4 text-gray-700 dark:text-gray-300">
        Password: <span class="text-sm italic">password</span>
    </span>

</form>
