@extends('layouts.app')

@section('content')


   
                    
                   
<form id="myform" method="post" action="/testing">
 @csrf
                   
    <input type="text" name="name" />
</form>

<input type="submit" form="myform" />
