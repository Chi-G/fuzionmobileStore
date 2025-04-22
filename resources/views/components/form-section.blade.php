<div {{ $attributes->merge(['class' => 'card p-4 mb-4']) }}>
    <div class="row">
        <div class="col-lg-12">
            @if (isset($title) || isset($description))
                <div class="mb-4">
                    @if (isset($title))
                        <h4 class="title">{{ $title }}</h4>
                    @endif
                    @if (isset($description))
                        <p class="text-muted">{{ $description }}</p>
                    @endif
                </div>
            @endif
            <form wire:submit.prevent="{{ $submit }}" class="row g-3">
                <div class="col-12">
                    {{ $form }}
                </div>
                @if (isset($actions))
                    <div class="col-12 text-end">
                        {{ $actions }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
