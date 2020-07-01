<label>{{ $label }}</label>
<select class="custom-select" name="{{ $inputName }}">
    <option></option>
    
    @isset($dataCollection)
        @foreach ($dataCollection as $data)
            <option value="{{ $data->value }}" 
                @if ($collection->uf_id == $data->value)
                    selected
                @endif
            >{{ $data->description }}</option>
        @endforeach
    @endisset
</select>