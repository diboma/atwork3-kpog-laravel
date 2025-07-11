<x-layout.main>

  <div class="container my-4">

    {{-- Header --}}
    <h1 class="mb-4 text-center position-relative">
      <x-common.btnGoBack url="{{ route('users.index') }}"
                          class="d-block position-absolute start-0"
                          style="margin-top: -20px"
                          title="{{ __('Back to users') }}" />
      {{ __('Edit user') }}
    </h1>

    {{-- Form --}}
    <x-users.form action="{{ route('users.update', $user->id) }}"
                  :user="$user" />
  </div>

</x-layout.main>
