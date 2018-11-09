@extends('layouts.main')

@section('title', 'FAQs')

@section('meta', '')

{{ Breadcrumbs::push('FAQs') }}

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">Frequently Asked Questions</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

      <h2>When is the next Coast-to-Coast College Fair?</h2>
      <p>The Fair will be held March 5, 2019.</p>

      <h2>What time is the fair?</h2>
      <p>There will be a dinner reception for the area High School Counselors and the Exhibitors starting at 5:00 p.m. until 6:30 p.m. The Fair is open to parents and students at 6:30 p.m. and will close at 8:30 p.m.</p>

      <h2>Where is the Fair held?</h2>
      <p>The Fair will be hosted at Chattanooga Convention and Trade Center located at 1150 Carter Street, downtown Chattanooga.</p>

      <h2>I am not sure how to get to Chattanooga Convention and Trade Center. Can you show me a map?</h2>
      <p>Use this LINK to get detailed driving instructions from anywhere! Make certain you use Carter Street and not Carter Drive when looking up directions! To use this web tool, merely enter your current address and you will be given detailed turn by turn directions to Chattanooga Convention and Trade Center. At the bottom of the map, you can even select the option to display a map of every turn along with detailed text to make the journey easier. These maps are suitable for printing.</p>

      <h2>My college is interested in sending a representative to the Coast-to-Coast College Fair. How should we proceed?</h2>
      <p>You may register online using the Exhibitor Registration option from our main menu. Once you have registered we will add you to our mailing list and contact you with additional details.</p>

      <h2>How can my college pay the registration fee?</h2>
      <p>Please fill out the Registration form on this site, print the completed form then submit the information online. If paying by check, send your printed registration form along with a check for the computed fees to: Coast-to-Coast College Fair ATTN: Anne Exum P.O. Box 4221 Chattanooga, TN 37405 This address will appear on the printed registration form for easy reference.</p>

      <h2>Where should College Representatives park?</h2>
      <p>Complimentary parking for college representatives will be available in the Chattanooga Convention and Trade Center parking garage. Pull up to the College Rep Drop-Off Area, located on Carter Street, where you will be met by student volunteers who will take your exhibit materials and direct you to the parking garage. Parking passes will be given to you upon registration.</p>

      <h2>Can you provide information about hotels in the area?</h2>
      <p>The Chattanooga Convention and Trade Center is adjacent to the Marriott Hotel and reservations can be made by contacting the hotel directly at 800-841-1674. There are also many hotels located downtown very near the Convention Center. Consult the Chattanooga Area Convention and Visitors Bureau for additional information about hotels, restaurants, and area attractions at: www.chattanoogacvb.com.</p>

<p>Every year we reserve a block of rooms. Please click here to check availability.</p>

    </div>
    <div class="col-sm-4">

      @include('partials.reps-list')

      @include('partials.contact')

    </div>
  </div>

</div>

@endsection