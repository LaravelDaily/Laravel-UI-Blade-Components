<div class="form-group row mb-0">
    <div {{ $attributes->merge(['class' => 'col-md-6 offset-md-4']) }}>
        <button type="submit" class="btn btn-primary">
            {{ __($buttonLabel) }}
        </button>

        {{ $link ?? '' }}
    </div>
</div>
