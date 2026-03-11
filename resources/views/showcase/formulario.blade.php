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

{{-- Subtitle Showcase --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Subtitulo') }}</label>
    <div>
        <input type="string" id="subtitle_showcase" name="subtitle_showcase" value="{{ isset($showcase) ? $showcase->subtitle_showcase : old('subtitle_showcase') }}"
            class="form-control @error('subtitle_showcase') is-invalid @enderror" placeholder="Subtitle Showcase" required>
        @error('subtitle_showcase')
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

{{-- Subdescription Showcase --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Subdescrição') }}</label>
    <div>
        <textarea id="subdescription_showcase" name="subdescription_showcase" class="form-control @error('subdescription_showcase') is-invalid @enderror"
            placeholder="Escreva uma subdescrição curta sobre o showcase"
            required>{{ isset($showcase) ? $showcase->subdescription_showcase : old('subdescription_showcase') }}</textarea>
        @error('subdescription_showcase')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Tags Showcase --}}

<div class="row">
    <label class="col-sm-2 col-form-label">Tags</label>
    <div>

        @for ($i = 0; $i < 6; $i++)
            <input type="text"
                name="tag_showcase[]"
                class="form-control mb-2"
                placeholder="Tag {{ $i + 1 }}"
                value="{{ isset($showcase) && isset($showcase->tag_showcase[$i]) 
                        ? $showcase->tag_showcase[$i] 
                        : (old('tag_showcase')[$i] ?? '') }}">
        @endfor

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

