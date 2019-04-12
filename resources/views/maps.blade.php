@extends('layouts.jersey')
@section('laracontent')
<div class="content">
            <div class="container-fluid">
                <div class="card card-map">
					<div class="header">
                        <br><h4 class="title">Google Maps</h4><br>
                        <div class="mapouter"><div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=malang&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="http://www.maps-erstellen.de">www.maps-erstellen.de</a>
                        </div>
                        <style>.mapouter{overflow:hidden;height:500px;width:100%;}.gmap_canvas 
                        {background:none!important;height:500px;width:100%;}</style></div>

                    </div>
					
				</div>
			</div>
		</div>

        @endsection