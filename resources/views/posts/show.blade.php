@extends('layouts.app')

@section('title','Post')
@section('content')
<!-- Page content-->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8">
      <!-- Post content-->
      <article>
        <!-- Post header-->
        <header class="mb-4">
          <!-- Post title-->
          <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
          <!-- Post meta content-->
          <div class="text-muted fst-italic mb-2">Posted on
            {{ $post->created_at->format('l jS \\of F Y h:i: A') }} by
            <span>{{ $post->user->name }}</span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <!-- Post categories-->
              <a class="badge bg-secondary text-decoration-none text-white" href="#!">Web Design</a>
              <a class="badge bg-secondary text-decoration-none text-white" href="#!">Freebies</a>
            </div>
            <div>
              @if(Auth::check() && auth()->user()->id===$post->user_id)
              <!-- Post Action-->
              <a href="{{ route('posts.edit',$post) }}">
                <button class="btn btn-primary rounded ml-3 btn-sm">
                  Edit
                </button></a>
              {{-- DELETE ACTION --}}
              <a href="javascript:void(0)" class="btn btn-danger btn-sm"
                onclick="if (confirm('{{ __('Frontend/frontend.r_u_sure') }}')){document.getElementById('delete-{{ $post->id }}').submit();} else{return false}">
                Delete
              </a>
              <form action="{{ route('posts.destroy', $post) }}" method="POST"
                id="delete-{{ $post ->id }}">
                @csrf
                @method('DELETE')
              </form>
              @endif
            </div>
        </header>
        <!-- Preview image figure-->
        <figure class="mb-4"><img class="img-fluid rounded"
            src="{{ asset('uploads/post_cover/'.$post->cover) }}" alt="..." /></figure>
        <!-- Post content-->
        <section class="mb-5">
          <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of
            the free human mind. Because it transforms who we are, how we live, and it gives us an
            understanding of our place in the universe.</p>
          <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we
            know it are everywhere, so there's no reason to think that Earth would be unique in that
            regard. Whether of not the life became intelligent is a different question, and we'll
            see if we find that.</p>
          <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large
            enough and carry enough energy into our system to disrupt transportation, communication,
            the food chains, and that can be a really bad day on Earth.</p>
          <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
          <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic
            thoughts every day and I realized I could hold them to myself or share them with people
            who might be interested.</p>
          <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what
            happened there because we're twirling knobs here on Earth without knowing the
            consequences of it. Mars once had running water. It's bone dry today. Something bad
            happened there as well.</p>
        </section>
      </article>
      <!-- Comments section-->
      <section class="mb-5">
        <div class="card bg-light">
          <div class="card-body">
            <!-- Comment form-->
            <form class="mb-4"><textarea class="form-control" rows="3"
                placeholder="Join the discussion and leave a comment!"></textarea></form>
            <!-- Comment with nested comments-->
            <div class="d-flex mb-4">
              <!-- Parent comment-->
              <div class="flex-shrink-0"><img class="rounded-circle"
                  src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
              <div class="ms-3">
                <div class="fw-bold">Commenter Name</div>
                If you're going to lead a space frontier, it has to be government; it'll never be
                private enterprise. Because the space frontier is dangerous, and it's expensive, and
                it has unquantified risks.
                <!-- Child comment 1-->
                <div class="d-flex mt-4">
                  <div class="flex-shrink-0"><img class="rounded-circle"
                      src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                  <div class="ms-3">
                    <div class="fw-bold">Commenter Name</div>
                    And under those conditions, you cannot establish a capital-market evaluation of
                    that enterprise. You can't get investors.
                  </div>
                </div>
                <!-- Child comment 2-->
                <div class="d-flex mt-4">
                  <div class="flex-shrink-0"><img class="rounded-circle"
                      src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                  <div class="ms-3">
                    <div class="fw-bold">Commenter Name</div>
                    When you put money directly to a problem, it makes a good headline.
                  </div>
                </div>
              </div>
            </div>
            <!-- Single comment-->
            <div class="d-flex">
              <div class="flex-shrink-0"><img class="rounded-circle"
                  src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
              <div class="ms-3">
                <div class="fw-bold">Commenter Name</div>
                When I look at the universe and all the ways the universe wants to kill us, I find
                it hard to reconcile that with statements of beneficence.
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Side widgets-->
    <div class="col-lg-4">
      <!-- Search widget-->
      <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Enter search term..."
              aria-label="Enter search term..." aria-describedby="button-search" />
            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
          </div>
        </div>
      </div>
      <!-- Categories widget-->
      <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-unstyled mb-0">
                <li><a href="#!">Web Design</a></li>
                <li><a href="#!">HTML</a></li>
                <li><a href="#!">Freebies</a></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="list-unstyled mb-0">
                <li><a href="#!">JavaScript</a></li>
                <li><a href="#!">CSS</a></li>
                <li><a href="#!">Tutorials</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Side widget-->
      <div class="card mb-4">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are
          easy to use, and feature the Bootstrap 5 card component!</div>
      </div>
    </div>
  </div>
</div>
@endsection