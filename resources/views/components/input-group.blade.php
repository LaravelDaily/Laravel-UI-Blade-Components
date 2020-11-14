<div class="form-group row">
    <label for="{{ $fieldName }}" class="col-md-4 col-form-label text-md-right">{{ __($fieldLabel) }}</label>

    <div class="col-md-6">
        <input id="{{ $fieldName }}" type="{{ $fieldType }}" class="form-control @error($fieldName) is-invalid @enderror" name="{{ $fieldName }}"
               value="{{ $fieldValue ?? old($fieldName) }}" required autocomplete="{{ $fieldName }}" autofocus>

        <x-input-validation-error fieldName="{{ $fieldName }}"></x-input-validation-error>
    </div>
</div>
