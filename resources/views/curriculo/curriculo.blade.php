@extends('layouts.app')

@section('content')
<link href="{{ asset('css/curriculo.css') }}" rel="stylesheet">
<div class="container">
    <div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="{{ asset('img/headshot.jpg') }}" alt="Arthur Vinicius" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo">Arthur Vinicius</h1>
			<h2 class="quickFade delayThree">Developer</h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="mailto:arthurvsn@gmail.com" target="_blank">arthurvsn@gmail.com</a></li>
				<li>w: <a href="http://www.arthurvsn.com.br" target="_blank">www.arthurvsn.com.br</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
    
				<div class="sectionContent">
					<p>I'm Arthur Vinicius, WEB Developer, with a focus to back-end but what are you trying to be a full-stack dev.</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>Expresso Gardenia</h2>
					<p class="subDetails">July 2017 - January 2018</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
				
				<article>
					<h2>PRODEMGE</h2>
					<p class="subDetails">March 2016 - July 2017</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
				
				<article>
					<h2>Expresso Gardenia</h2>
					<p class="subDetails">August 2011 - February 2016</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<li>PHP</li>
					<li>JavaScript</li>
					<li>C# (sharp)</li>
					<li>Java</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>MySql</li>
					<li>Sql Server</li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>PUC MINAS</h2>
					<p class="subDetails">Qualification</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
@endsection