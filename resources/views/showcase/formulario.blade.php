{{-- Title Showcase --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Titulo') }}</label>
    <div>
        <input type="string" id="title_showcase" name="title_showcase" value="{{ isset($showcase) ? $showcase->title_showcase : old('title_showcase') }}"
            class="form-control @error('title_showcase') is-invalid @enderror" placeholder="Title Showcase" required>
        @error('title_showcase')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Description Showcase --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Descrição') }}</label>
    <div>
        <textarea id="description_showcase" name="description_showcase" class="form-control @error('description_showcase') is-invalid @enderror"
            placeholder="Escreva uma descrição curta sobre o showcase"
            required>{{ isset($showcase) ? $showcase->description_showcase : old('description_showcase') }}</textarea>
        @error('description_showcase')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Logo Showcase --}}

<div class="row">
    <div class="col-sm-2 col-form-label">
        <label class="@if (!isset($showcase)) required @endif" for="logo_showcase">Logo</label>
        <input type="file" name="logo_showcase" class="form-control" accept="image/*"
            @if (!isset($showcase)) required @endif>
    </div>
</div>

{{-- Image Showcase --}}

<div class="row">
    <div class="col-sm-2 col-form-label">
        <label class="@if (!isset($showcase)) required @endif" for="image_showcase">Foto</label>
        <input type="file" name="image_showcase" class="form-control" accept="image/*"
            @if (!isset($showcase)) required @endif>
    </div>
</div>

