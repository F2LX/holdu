<div class="container py-5">
    <div class="alert alert-info">
        <p>You need to answer this question, the answer will be used to determine your mood and stress level.</p>
    </div>
    <div class="row justify-content-center text-dark">
      <div class="col-lg-8">
        <form class="step-form" id="multi-step-form" wire:submit="save">
          <!-- Step 1 -->
          <div class="form-step form-active text-dark" id="step-1">
            <h3>Step 1</h3>
            <p>1. I feel calm and peaceful today.
            </p>
            <div class="mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <p>Strongly Disagree</p>
                    <p>Strongly Agree</p>
                </div>
              <input type="range" class="form-range" min="1" max="5" id="question-1" wire:model="q1">
            </div>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
          <!-- Step 2 -->
          <div class="form-step text-dark" id="step-2">
            <h3>Step 2</h3>
            <p>2. I feel tense or anxious.</p>
            <div class="mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <p>Strongly Disagree</p>
                    <p>Strongly Agree</p>
                </div>
              <input type="range" class="form-range" min="1" max="5" id="question-2" wire:model="q2">
            </div>
            <button type="button" class="btn btn-secondary prev-step">Previous</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
          <!-- Step 3 -->
          <div class="form-step text-dark" id="step-3">
            <h3>Step 3</h3>
            <p>3. I feel sad or gloomy.</p>
            <div class="mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <p>Strongly Disagree</p>
                    <p>Strongly Agree</p>
                </div>
              <input type="range" class="form-range" min="1" max="5" id="question-3" wire:model="q3">
            </div>
            <button type="button" class="btn btn-secondary prev-step">Previous</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
          <!-- Step 4 -->
          <div class="form-step text-dark" id="step-4">
            <h3>Step 4</h3>
            <p>4. I am satisfied with the quality of my sleep last night.</p>
            <div class="mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <p>Strongly Disagree</p>
                    <p>Strongly Agree</p>
                </div>
              <input type="range" class="form-range" min="1" max="5" id="question-4" wire:model="q4">
            </div>
            <button type="button" class="btn btn-secondary prev-step">Previous</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
          <!-- Step 5 -->
          <div class="form-step text-dark" id="step-5">
            <h3>Step 5</h3>
            <p>5. I am satisfied with my day.</p>
            <div class="mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <p>Strongly Disagree</p>
                    <p>Strongly Agree</p>
                </div>
              <input type="range" class="form-range" min="1" max="5" id="question-5" wire:model="q5">
            </div>
            <button type="button" class="btn btn-secondary prev-step">Previous</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

@script
<script>
  $(document).ready(function() {
    // Next Step Button
    $('.next-step').click(function() {
      $(this).closest('.form-step').removeClass('form-active').next().addClass('form-active');
    });

    // Previous Step Button
    $('.prev-step').click(function() {
      $(this).closest('.form-step').removeClass('form-active').prev().addClass('form-active');
    });

    // Form Submission
    $('#multi-step-form').submit(function(e) {
      e.preventDefault();
      // You can handle form submission here
      console.log('Form submitted!');
    });
  });
</script>
@endscript
