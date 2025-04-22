<div {{ $attributes->merge(['class' => 'alert alert-success d-none']) }} x-data="{ show: false }" x-show="show" x-init="@this.on('{{ $on }}', () => { show = true; setTimeout(() => show = false, 3000); })">
    {{ $slot }}
</div>
