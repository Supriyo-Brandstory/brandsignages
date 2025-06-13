<div class="testimonial-card card">
            <div class="yellow-circle">
                <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment" class="comment-img">
            </div>
            <div class="card-body px-0">
                <p class="card-text testimonial-card-text">{{ $text }}</p>
                <hr class="yellow-line">
                <div class="client-info">
                    <img src="{{ asset('frontend/Images/' . $img . '.webp') }}" alt="{{ $name }}" class="client-img">
                    <div>
                        <div class="client-name">{{ $name }}</div>
                        <div class="client-role">{{ $role }}</div>
                    </div>
                </div>
            </div>
        </div>