<div class="form-group">
    <label for="nome">{{ __('Nome') }}</label>
    <input type="text" id="nome" name="nome" value="{{ old('nome', $feedback->nome ?? '') }}"
        class="form-control @error('nome') is-invalid @enderror" maxlength="255" required>
    @error('nome')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="localidade">{{ __('Localidade') }}</label>
    <input type="text" id="localidade" name="localidade" value="{{ old('localidade', $feedback->localidade ?? '') }}"
        class="form-control @error('localidade') is-invalid @enderror" maxlength="255" required>
    @error('localidade')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="nota">{{ __('Nota (0 a 5)') }}</label>
    <input type="number" id="nota" name="nota" value="{{ old('nota', $feedback->nota ?? '') }}"
        class="form-control @error('nota') is-invalid @enderror" min="0" max="5" step="0.1" required>
    @error('nota')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="comentario">{{ __('Comentário') }}</label>
    <textarea id="comentario" name="comentario" rows="4"
        class="form-control @error('comentario') is-invalid @enderror" maxlength="2000" required>{{ old('comentario', $feedback->comentario ?? '') }}</textarea>
    @error('comentario')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>
