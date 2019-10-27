@extends('page.layout.main')



@section('title')
User HomePage
@endsection

@section('nav_bar')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
@endsection


@section('script')
<script type="text/javascript" src="abc.js"></script>
<script type="text/javascript" src="xyz.js"></script>
@endsection




