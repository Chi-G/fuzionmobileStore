<x-form-section submit="updateProfileInformation">
    <x-slot name="title">{{ __('Profile Information') }}</x-slot>
    <x-slot name="description">{{ __('Update your account\'s profile information and email address.') }}</x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-input-label for="name" value="{{ __('Name') }}" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-input-label for="email" value="{{ __('Email') }}" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">{{ __('Saved.') }}</x-action-message>
        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </x-slot>
</x-form-section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            axios.patch('{{ route('admin.profile.update') }}', new FormData(e.target))
                .then(() => document.dispatchEvent(new Event('saved')));
        });
    });
</script>
