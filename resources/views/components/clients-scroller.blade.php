@props(['logos'])
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4 process-title ms">Our Valuable Clients</h2>
    <div class="logo-scroller overflow-hidden">
      <div class="scroller-track d-flex align-items-center">
        @foreach ($logos as $logo)
          <img src="{{ asset('frontend/'.$logo['src']) }}" alt="{{ $logo['alt'] }}" class="client-logo mx-3">
        @endforeach

        <!-- Duplicate for smooth loop -->
        @foreach ($logos as $logo)
                    <img src="{{ asset('frontend/'.$logo['src']) }}" alt="{{ $logo['alt'] }}" class="client-logo mx-3">

        @endforeach
      </div>
    </div>
  </div>
</section>

<style>
    @media (max-width: 768px) {
    .process-title.ms{
        margin-bottom: 20px !important;
    }
}
  .logo-scroller {
    height: auto;
    position: relative;
    width: 100%;
  }

  .scroller-track {
    display: flex;
    width: max-content;
    animation: scrollLeft 25s linear infinite;
  }

  .client-logo {
    height: 50px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
    transition: transform 0.3s ease-in-out;
    border-radius: 10px;
    border: solid 1px #e43d125e;
  }

  .client-logo:hover {
    transform: scale(1.1);
  }

  @keyframes scrollLeft {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  @media (min-width: 768px) {
    .client-logo {
      height: 60px;
    }
  }

  @media (min-width: 992px) {
    .client-logo {
      height: 70px;
    }
  }
</style>
