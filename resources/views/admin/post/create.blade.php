@extends('layouts.admin')

@section('content')
    <div class="content">
        <x-previous-page-button/>
        <div class="flex justify-center">
            <div class="form-container w-1/2">
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="title">
                                Post title
                            </label>
                            <input class="form-input__input"
                                   name="title"
                                   id="title"
                                   type="text"
                                   value="{{ old('title') }}"
                                   placeholder="Post title">
                            @error('title')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="preview_image">
                                Preview image
                            </label>
                            <input class="form__file-input w-full"
                                   name="preview_image"
                                   id="preview_image"
                                   type="file">
                            @error('preview_image')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="images">
                                Images
                            </label>
                            <input class="form__file-input w-full"
                                   name="images[]"
                                   id="images"
                                   type="file"
                                   multiple>
                            @error('images')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <input class="button button-primary cursor-pointer" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
