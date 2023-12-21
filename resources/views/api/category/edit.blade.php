@extends('layouts.app')

@section('content')
    <div class="content">
        <x-previous-page-button/>
        <div class="flex justify-center">
            <div class="form-container w-1/2">
                <form action="{{ route('categories.update', compact('category')) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="name">
                                Name
                            </label>
                            <input class="form-input__input"
                                   name="name"
                                   id="name"
                                   type="text"
                                   value="{{ $category->name }}"
                                   placeholder="Name">
                            @error('name')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                        <input class="button button-primary cursor-pointer" type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
