<section class="hero is-primary">
  <div class="hero-body">
    <div class="container content">
      <i class="fas fa-7x fa-file-invoice-dollar"></i>
      <h1 class="title has-text-white has-text-weight-bold is-family-code"> An online invoice generator </h1>
      @if (Auth::check())
        <h3 class="title has-text-white is-italic"> Welcome back, {{ auth()->user()->name }} </h3>
      @endif
    </div>
  </div>
</section>