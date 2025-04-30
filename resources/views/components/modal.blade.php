<div class="br-scrim-util foco" id="{{ $id }}" data-scrim="true" style="display: none;">
    <div class="br-modal {{ $size ?? '' }}" aria-labelledby="{{ $labelledby }}">
        <div class="br-modal-header" id="{{ $labelledby }}">{{ $title }}</div>
        <div class="br-modal-body">
            {{ $slot }}
        </div>
        <div class="br-modal-footer justify-content-between">
            {{ $footer ?? '' }}
        </div>
    </div>
</div>