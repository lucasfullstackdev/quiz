{{-- <div class="col-12"> --}}
    <label>{{ $label }}</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="{{ $icon }}"></i>
            </div>
        </div>
        <input type="{{ $type }}"
               class="form-control @error($inputName) is-invalid @enderror"
               name="{{ $inputName }}"
               value="{{ old($inputName) ?? $collection[$inputName] }}"
               maxlength="255"
               placeholder="{{ $placeholder }}"
        >
        @error($inputName)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
{{-- </div> --}}