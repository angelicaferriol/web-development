@extends('common.main')
@section('title', 'Posts Feed')
@section('content')

<div class="row g-4 mt-2">
    <!-- Left Column: Create Post Form -->
    <div class="col-12 col-lg-5">
        <div class="minimal-card p-4">
            <h3 class="fw-bold mb-4 text-primary-custom"><i class="bi bi-file-earmark-plus-fill me-2"></i>Create New Post</h3>
            <form action="{{ route('post') }}" method="POST" class="d-grid gap-3">
                @csrf

                <div>
                    <label class="form-label small fw-semibold text-muted">Post Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title..." required>
                </div>

                <div>
                    <label class="form-label small fw-semibold text-muted">Content / Description</label>
                    <textarea name="description" rows="5" class="form-control" placeholder="What's on your mind?..." required></textarea>
                </div>

                <div>
                    <label class="form-label small fw-semibold text-muted">Publishing Status</label>
                    <select class="form-select" name="status" required>
                        <option value="" disabled selected>Select Status</option>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->display_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary-custom w-100"><i class="bi bi-send-fill me-2"></i>Publish Post</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Column: Posts List -->
    <div class="col-12 col-lg-7">
        <div class="minimal-card p-4 h-100">
            <h3 class="fw-bold mb-4"><i class="bi bi-journal-text me-2 text-primary-custom"></i>Post Workspace</h3>
            <div class="table-responsive">
                <table class="table table-borderless table-custom align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td class="fw-bold text-dark">{{ $post->title }}</td>
                                <td class="text-secondary small">{{ Str::limit($post->description, 60) }}</td>
                                <td class="text-muted small">{{ date('M d, Y H:i', strtotime($post->created_at)) }}</td>
                                <td>
                                    @php
                                        $badgeClass = 'bg-secondary';
                                        if (strtolower($post->status_name) == 'publish') {
                                            $badgeClass = 'bg-success';
                                        } elseif (strtolower($post->status_name) == 'draft') {
                                            $badgeClass = 'bg-warning text-dark';
                                        }
                                    @endphp
                                    <span class="badge {{ $badgeClass }} badge-custom">{{ $post->status_name }}</span>
                                </td>
                                <td class="text-end">
                                    @if ($post->sname != 'publish')
                                        <a href="{{ route('post.showUpdate', $post->id) }}" class="btn btn-outline-custom btn-sm px-2 py-1" title="Edit Post">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    @else
                                        <span class="text-muted small"><i class="bi bi-lock-fill"></i> Locked</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="bi bi-journal-x fs-1 mb-2"></i>
                                    <p class="mb-0">No posts have been published yet.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection