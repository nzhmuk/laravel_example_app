@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>This awesome blog has many articles, click the button below to see them</p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Show Blog</a>
        </div>
    </div>
</div>
<div id="app">
	<p>This part is made with Vue engine</p>
	<template>
		<count-click></count-click>	
	</template>
</div>

@endsection
