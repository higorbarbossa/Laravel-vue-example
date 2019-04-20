<!-- /resources/views/vue/index.blade.php -->
@extends('layouts.app')

@section('content')

<h1>This is a vue component</h1>
 <div id="app">
  <router-view></router-view>
 </div>
 <script src="/js/vue-app.js"></script>

@endsection
