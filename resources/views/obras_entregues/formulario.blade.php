<div class="form-group">
    <label for="nome_obra">{{ __('Nome da obra') }}</label>
    <input type="text" id="nome_obra" name="nome_obra" value="{{ old('nome_obra', $obra->nome_obra ?? '') }}"
        class="form-control @error('nome_obra') is-invalid @enderror" maxlength="255" required>
    @error('nome_obra')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="localidade">{{ __('Localidade') }}</label>
    <input type="text" id="localidade" name="localidade" value="{{ old('localidade', $obra->localidade ?? '') }}"
        class="form-control @error('localidade') is-invalid @enderror" maxlength="255" required>
    @error('localidade')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="imagem">{{ __('Imagem') }}</label>
    @if (isset($obra))
        <div class="mb-2">
            <img src="{{ asset('storage/' . $obra->imagem) }}" alt="{{ $obra->nome_obra }}"
                style="max-width: 240px; max-height: 160px;">
        </div>
    @endif
    <input type="file" id="imagem" name="imagem"
        class="form-control-file @error('imagem') is-invalid @enderror" accept="image/jpeg,image/png,image/gif,image/webp"
        @if (!isset($obra)) required @endif>
    <small class="form-text text-muted">{{ __('Formatos JPG, PNG, GIF ou WEBP; até 10 MB.') }}</small>
    @error('imagem')
        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>
