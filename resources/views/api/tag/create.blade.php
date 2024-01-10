@extends('layouts.app')

@section('content')
    <div class="content">
        <x-previous-page-button/>
        <div class="flex justify-center">
            <div class="form-container w-1/2">
                <form action="{{ route('tags.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="name">
                                Tag name
                            </label>
                            <input class="form-input__input"
                                   name="name"
                                   id="name"
                                   type="text"
                                   value="{{ old('name') }}"
                                   placeholder="Tag name">
                            @error('name')
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
