@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quiz">
 <div class="row"><div class="col-md-12">

<div class="inro">
    <p>This is an example of interactive questionnaire with questions from various areas.
    Start by clicking on "Play" button then, select a category and 
    answer the questions by clicking on one of four given answers.</p>
    <p>Quiz duration is limited to 5 mintues, If you answer on all questions earlier, quiz will end.</p>
    <div class="center"><div class="playBtn">Play</div></div>
</div>

<div class="quizstart">
    <h3>Choose a Question Category:</h3>
    <div class="quizcategories">
    @foreach($categories as $d)
            <a class="catitem" href="quizplay/{{ $d->id }}">{{ $d->categoryname }}</a>
    @endforeach

    </div>
</div>

</div>
 </div>
 </div>
 @endsection

