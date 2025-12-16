@props(['title' => '', 'subtitle' => ''])
<div class="card card-sm border-0" style="border-radius: 8px;">
    <div class="card-body d-flex align-items-center">
        <span {{ $attributes->merge(['class' => 'text-white avatar me-3', 'style' => 'border-radius: 8px;']) }}>
            {{ $slot }}
        </span>
        <div class="me-3 lh-sm ">
            <div class="strong mb-1">
                {{ $title }}
            </div>
            <div class="text-muted">{{ $subtitle }}</div>
        </div>
    </div>
</div>
