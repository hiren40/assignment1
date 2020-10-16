@extends('layout')

@section('content')
<h1>Create Your Blog</h1>

<div style="">
    <form action="{{url('/create')}}" method="POST">
        @csrf
        <div>
           <div>
            Name of the Author 
           </div>
           <div>
            <input type="text" name="name1">
           </div>
           
            
        </div>
        <div>
            <div>
            Title of blog
            </div>
            <div><input type="text" name="title1"> </div>
        </div>
        <div>
            <div>Date :</div>
            <div>
            <input type="text" name="date_1" id="datepicker" dateFormat='yyyy/mm/dd' > Enter in YYYY/MM/DD Formate
                
            </div>
         </div>
        <div>
            <div>Description
            </div>
            <div><textarea name="body1" cols="60" rows="5"> </textarea>
            </div>
        </div>
        <div>
            Upload Image  <input type="file" id="myFile" name="filename" accept="image/png, image/jpeg">
        </div>

        <div>
            <button name="submit">Submit </button>
        </div>        
    </form>
   </div>


@endsection