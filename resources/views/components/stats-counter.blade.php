<section class="py-5 bg-white">
  <div class="container text-center">
    @if($title)
      <h2 class="mb-4 ms process-title">{{ $title }}</h2>
    @endif

    <div class="row text-center">
      @foreach ($items as $index => $item)
        <div class="col-12 col-md-4 mb-4">
          <div class="p-4 border rounded shadow-sm h-100">
            <div class="mb-3" style="font-size: 2rem;">
              <i class="{{ $item['icon'] }}"></i>
            </div>
            <div class="d-flex align-items-center justify-content-center">
            <h3 class="fw-bold counter" data-target="{{ preg_replace('/[^0-9]/', '', $item['number']) }}" id="counter-{{ $index }}">0</h3><div class="plus-icon">+</div></div>
            <p class="card-title mb-0">{{ $item['label'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<style>
    .plus-icon {
    font-size: 24px;
    font-weight: 500;
    margin: 0 0px 10px 5px;
}
@media (max-width: 768px) {
    .process-title.ms{
        margin-bottom: 20px !important;
    }
}
</style>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');

    const animateCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const duration = 1500;
      const startTime = performance.now();

      const updateCount = (timestamp) => {
        const elapsed = timestamp - startTime;
        const progress = Math.min(elapsed / duration, 1);
        counter.innerText = Math.floor(progress * target).toLocaleString();

        if (progress < 1) {
          requestAnimationFrame(updateCount);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };

      requestAnimationFrame(updateCount);
    };

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          animateCounter(counter);
          obs.unobserve(counter);
        }
      });
    }, {
      threshold: 0.6
    });

    counters.forEach(counter => observer.observe(counter));
  });
</script>
