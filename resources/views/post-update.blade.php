@extends('common.main')
@section('title', 'Update Post')
@section('content')

<div class="row justify-content-center mt-2">
    <div class="col-lg-8">
        <div class="minimal-card p-4">
            <div class="text-center mb-5">
                <h1 class="fw-bold mb-2">Update Post <span class="text-primary-custom">#{{ $post->id }}</span></h1>
                <p class="text-muted small">Edit parameters, text details, and change the publishing state of this post.</p>
            </div>

            <form action="{{ route('post.updateSubmit', $post->id) }}" method="POST" class="d-grid gap-3">
                @csrf
                @method('put')
                <input type="hidden" value="{{ $post->id }}">

                <div>
                    <label class="form-label small fw-semibold text-muted">Post Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                </div>

                <div>
                    <label class="form-label small fw-semibold text-muted">Content / Description</label>
                    <textarea name="description" rows="6" class="form-control" required>{{ old('description', $post->description) }}</textarea>
                </div>

                <div>
                    <label class="form-label small fw-semibold text-muted">Publishing Status</label>
                    <select class="form-select" name="status" required>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" @selected(old('status', $post->status) == $status->id)>
                                {{ $status->display_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4 d-flex justify-content-between align-items-center">
                    <a href="{{ route('post') }}" class="btn btn-outline-custom"><i class="bi bi-arrow-left me-2"></i>Cancel</a>
                    <button type="submit" class="btn btn-primary-custom px-5"><i class="bi bi-check2-circle me-2"></i>Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection