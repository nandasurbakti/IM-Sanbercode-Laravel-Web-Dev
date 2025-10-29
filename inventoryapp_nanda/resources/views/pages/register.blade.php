@extends('layouts.master')

@section('titleHead', 'Sign Up')

@section('title', 'Register')

@section('content')
    <form action="/welcome" method="POST">
        @csrf
      <label for="firstname">First name:</label><br /><br />
      <input type="text" name="firstname" id="firstname" required /><br /><br />
      <label for="lastname">Last name:</label><br /><br />
      <input type="text" name="lastname" id="lastname" required /><br /><br />
      <label for="gender">Gender:</label><br /><br />
      <input type="radio" name="gender" id="male" value="male" />
      <label for="male">Male</label><br />
      <input type="radio" name="gender" id="female" value="female" />
      <label for="female">Female</label><br />
      <input type="radio" name="gender" id="others" value="others" />
      <label for="others">Others</label><br /><br />
      <label for="nationality">Nationality:</label><br /><br />
      <select name="nationality" id="nationality">
        <option value="indonesia">Indonesian</option>
        <option value="malaysia">Malaysia</option>
        <option value="singapore">Singapore</option></select
      ><br /><br />
      <label for="language">Language Spoken:</label><br /><br />
      <input
        type="checkbox"
        name="language"
        id="lang-indonesia"
        value="bahasa-indonesia"
      />
      <label for="lang-indonesia">Bahasa Indonesia</label><br />
      <input
        type="checkbox"
        name="language"
        id="lang-english"
        value="english"
      />
      <label for="lang-english">English</label><br />
      <input type="checkbox" name="language" id="lang-other" value="other" />
      <label for="lang-other">Other</label><br /><br />

      <label for="bio">Bio:</label><br /><br />
      <textarea name="bio" id="bio" rows="10" cols="30"></textarea><br />
      <input type="submit" value="Sign Up" />
    </form>  
@endsection
