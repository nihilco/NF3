@extends('layouts.main')

@section('title', 'Attorneys')

@section('meta', '')

{{ Breadcrumbs::push('Attorneys') }}

@section('content')

<div class="container page-top">

        <div class="row pt-3">
	            <div class="col-sm-12">

                <h1>Attorneys</h1>

			<p class="lead justify"></p>

			   <div class="row mb-3">
			   	    <div class="col-sm-4 col-md-3">
				    	     <img class="img-fluid" src="{{ url('/img/chandler-maze.jpg') }}">
					     	      </div>
							    <div class="col-sm-8 col-md-9">
							    	     <h2>Chandler Maze</h2>
								     <p class="justify">Chandler was born and raised in Eastern Kentucky.  Over the last decade, Chandler has lived in Western, Northern, and Central Kentucky, making invaluable connections to advance his education and career.  At his prior firm, Chandler was exposed to a variety of legal cases, scenarios, and experiences and was trained by some of the top lawyers in the area.  While focusing on personal injury, Chandler has also been immersed in many different areas of law. He has worked for the Montgomery County Attorney’s office and the Rowan County Attorney’s office, as well as the Public Defender’s office. As such, he has experience with criminal cases on both sides of the court. In addition, Chandler worked inside jails in Eastern Kentucky as a Pretrial Officer alongside Judges and arresting officers, helping to determine bonds for those incarcerated at the beginning stages of their proceedings. Having spent the last number of years working as an attorney for a large personal injury firm, Chandler has learned important tactics and strategies, crucial for maximizing the recovery value in every one of his client’s cases. After living in the Cincinnati and Lexington areas, Chandler feels very fortunate to be able to practice law in the area in which he grew up, and use his knowledge and experience to help those in need.</p>
								     	    </div>
										    </div>

<div class="row mb-3">
<div class="col-sm-4 col-md-3">
<img class="img-fluid" src="{{ url('/img/clayton-stone.jpg') }}">
</div>
<div class="col-sm-8 col-md-9">
<h2>Clayton Stone</h2>
<p class="justify">Clayton is a native of Central Kentucky and has a passion for serving his community. He
completed his undergraduate studies at the University of Kentucky, with a degree in Political
Science. After college, Clayton attended the Salmon P. Chase College of Law, where he would
eventually graduate with honors. While in law school, Clayton interned for the Boone County
Attorney’s office, as well as worked for one of the most successful criminal defense firms in the
tristate area. Following law school, Clayton spent his first years of practice working for an
insurance defense firm in Lexington, KY, focusing on civil litigation. These work experiences
provide Clayton a broad base of knowledge in many areas of law.</p>
</div>
</div>

            </div>
	            </div>

    </div>

@endsection