{{-- <div class="col-{{ $grid }}"> --}}
    <div class="form-group">
        <label>{{ $label }}</label>
        <input type="text"
               class="form-control @error($inputName) is-invalid @enderror"
               name="{{ $inputName }}"
               value="{{ old($inputName) ?? $collection[$inputName] }}"
               placeholder="{{ $placeholder }}"
        >

        @error($inputName)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
{{-- </div> --}}