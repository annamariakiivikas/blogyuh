@extends('partials.layout')
@section('content')
<div class="card bg-base-200  shadow-xl mx-auto my-auto">
    <div class="card-body">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Title</span>
                </div>
                <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="input input-bordered w-full @error('title') input-error @enderror" />
                <div class="label">
                    @error('title')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Content</span>
                </div>
                <textarea name="body"
                          rows="12"
                          placeholder="Write something cool..."
                          class="textarea textarea-bordered w-full @error('body') textarea-error @enderror">{{ old('body') }}</textarea>
                <div class="label">
                    @error('body')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Image</span>
                </div>
                <input type="file" name="image" accept="image/*" placeholder="Image" class="file-input file-input-bordered w-full @error('image') file-input-error @enderror" />
                <div class="label">
                    @error('image')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
            <input type="submit" class="btn btn-primary" value="Create">
            <a href="{{url()->previous()}}" class="btn btn-error">Cancel</a>
        </form>
    </div>
</div>
@endsection