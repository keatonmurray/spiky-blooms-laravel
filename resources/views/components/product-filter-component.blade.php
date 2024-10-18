<h5 class="card-title my-4 fw-500">{{ $heading }}</h5>

@foreach ($checkboxValues as $checkbox)
    <div class="{{ $formCheckWrapper }}">
        <input 
            class="form-check-input" 
            type="checkbox" 
            id="{{ $checkbox['id'] }}" 
            value="{{ $checkbox['value'] }}"
        >
        <label class="form-check-label" for="{{ $checkbox['id'] }}">
            {{ $checkbox['label'] }}
        </label>
    </div>
@endforeach
