@extends('layout')
@section('title', 'Addition')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="text" name="lname">
    <input type="text" name="email">
    <input type="file" name="pic">
    <input type="submit" name="send">
</form>