<x-form-section submit="updatePassword">
    <x-slot name="title">{{ __('Update Password') }}</x-slot>
    <x-slot name="description">{{ __('Ensure your account is using a long, random password to stay secure.') }}</x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-input-label for="current_password" value="{{ __('Current Password') }}" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-input-label for="password" value="{{ __('New Password') }}" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-input-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">{{ __('Saved.') }}</x-action-message>
        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </x-slot>
</x-form-section>
