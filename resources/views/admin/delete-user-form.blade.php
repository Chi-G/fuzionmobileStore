<x-form-section submit="deleteUser">
    <x-slot name="title">{{ __('Delete Account') }}</x-slot>
    <x-slot name="description">{{ __('Permanently delete your account.') }}</x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-input-label for="password" value="{{ __('Password') }}" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-danger-button>{{ __('Delete Account') }}</x-danger-button>
    </x-slot>
</x-form-section>
