<div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch1" @if (session('dark-mode') == 'dark-mode') checked @endif
        wire:click='switch'>
    <label class="custom-control-label" for="customSwitch1"></label>
</div>
