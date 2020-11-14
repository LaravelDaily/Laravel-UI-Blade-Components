<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="{{ $fieldName }}"
                   id="{{ $fieldName }}" {{ old($fieldName) ? 'checked' : '' }}>

            <label class="form-check-label" for="{{ $fieldName }}">
                {{ __($fieldLabel) }}
            </label>
        </div>
    </div>
</div>
