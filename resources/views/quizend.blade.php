@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quizend">

 <div class="row"><div class="col-md-12">

<h2 style="text-align:center;">Quiz Ended</h2><br>
<h4 class="res" style="text-align:center;">Your result is: {{ $res }} %</h4>

<div style="text-align:center; margin-top:50px;"><a href="/quiz" class="btnAgain">Play Again</a></div>

</div>
 </div>
 </div>
 @endsection