@props(['id', 'value' => 'Select User Type'])

<div class="dropdown open">
    <button id="{{ $id }}" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                {{$value ?? $trigger }}
            </button>
    <div class="dropdown-menu" aria-labelledby="{{ $id }}">
        {{ $content }}
    </div>
</div>
