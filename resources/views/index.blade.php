@include ('partials._header')

<div class="row">
    <div class="circular-icon">
        <img src="{{ asset('images/headshot.jpeg') }}" alt="Circular Icon">
    </div>
    <h2>Software Engineer | Missoula, MT</h2>
    <div class="content">
        <p>Results-driven software engineer with a keen ability to translate complex
            concepts into practical solutions. Proficient in a range of programming languages
            and technologies, with a deep commitment to continuous learning.</p>
        <div class="feedback-section">
            <div class="card -with-footer -stacked -rounded">
                <h3>Leave Feedback</h3>
                <p>
                    <form method="POST" action="/" enctype="multipart/form-data">
                        @csrf
                        @error('name')
                            <p class="-red-600 -margin-top">{{$message}}</p>
                        @enderror 
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" placeholder=" Enter your name">
                        
                        @error('email')
                            <p class="-red-600 -margin-top">{{$message}}</p>
                        @enderror 
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder=" Enter your email">
                        
                        @error('body')
                            <p class="-red-600 -margin-top">{{$message}}</p>
                        @enderror 
                        <label for="body" class="form-label">Feedback</label>
                        <textarea id="body" name="body" placeholder=" Enter your feedback" rows="4"></textarea>
                        <input type="submit" name="submit" value="Send" class="card-footer button -full-width -align-center -colored"> 
                   </form>
                </p>
            </div>
            <hr />
            <h3>Previous Feedback</h3>
            @foreach($feedback as $feedbacks)
                <div class="card -margin-top">
                    <h4>{{ $feedbacks['name'] }}</h4>
                    <p>{{ $feedbacks['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include ('partials._footer')