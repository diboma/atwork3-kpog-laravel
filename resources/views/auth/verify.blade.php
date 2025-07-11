<x-layout.main>
  <div class="container my-5">

    <div class="card border border-light-subtle shadow mx-auto" style="width: 320px">
      <div class="card-header text-center text-primary fs-5 fw-semibold bg-body border-0">
        {{ __('Verify Your Email Address') }}
      </div>

      <div class="card-body">
        @if (session('resent'))
          <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
          </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
          @csrf
          <button type="submit"
                  class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
        </form>
      </div>
    </div>
  </div>
</x-layout.main>
