@extends('adm.masteradmin')
@section('title', 'Laravel Questionaire')
@section('contentadmin')


            <div class="row">
                <div class="col-md-6"><h3>Categories:</h3></div>
                <div class="col-md-6 text-right"><a href="admin-quizz/create-category" class="newcatBtn">Create New Category</a></div>
            </div>
            
            @foreach($categories as $d)
            <div class="categoryItem">
            <div class="row">
            <div class="col-md-8"><a href="admin-quizz/category/{{ $d->id }}">{{ $d->categoryname }}</a></div>
            <div class="col-md-2 text-center"><a href="admin-quizz/edit-category/{{ $d->id }}">Edit</a></div>
            <div class="col-md-2 text-center">
                <div class="deletecat" catvar="{{ $d->id }}" catname="{{ $d->categoryname }}">Delete</div>
            </div>
            </div>
            </div>
            @endforeach

    <script>
        $(document).ready(function(e){
        $('.leftMenu .quiz').addClass('selected');
        });
    </script>

@endsection
