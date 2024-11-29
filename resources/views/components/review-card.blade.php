<div class="card">
    <div class="card-body review-card">
      <h5 class="card-title">
        @switch($review->rating)
            @case($review->rating == 1)
            <i class="bi bi-star-fill"></i>
                @break
            @case($review->rating == 2)
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>    
                @break
            @default
            @case($review->rating == 3)
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                @break
            @case($review->rating == 4)
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                @break
            @case($review->rating == 5)
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                @break
                
        @endswitch
      </h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">
        
                <a href="{{route('user.show', ['user' => $review->user])}}">{{$review->author}}</a>
        
      </h6>
      <p class="card-text">{{$review->comment}}</p>
      {{-- <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a> --}}
    </div>
  </div>