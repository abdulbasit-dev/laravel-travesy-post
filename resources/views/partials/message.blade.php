<div class="container mt-4">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if (Session::has('message'))
  <div class="alert alert-{{ Session::get('type') }} alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ Session::get('message') }}</strong>
  </div>
  @endif
</div>