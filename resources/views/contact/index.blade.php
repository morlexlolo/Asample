  @extends('layouts.app')
  @section('content')
  @include('partials.topNav')
  @include('layouts.mainNav')

 <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Contact</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('contact.index')}}">Contact</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

    @if($errors->all())
        <div class="alert alert-warning" role="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div><br>
    @endif



    <!-- Content section -->
    <div class="content-section module">
    	<div class="row">

            <!-- Map Area -->
            <div class="map-wrapper module">
            	<div id="s5_pos_custom_5">
					<div class="moduletable">

<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg "></script><script type="text/javascript">
//<![CDATA[
 var geocoder;
 var map;
 var address ="LRC Road, Nairobi NAIROBI KENYA 254";
 function JM_GMstartup() {
   geocoder = new google.maps.Geocoder();
   var latlng = new google.maps.LatLng(-34.397, 150.644);
   var myOptions = {
      zoom: 16,




     center: latlng,
  mapTypeControl:  false,mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
	scrollwheel:false,     mapTypeId: google.maps.MapTypeId.ROADMAP







   };

    map = new google.maps.Map(document.getElementById("s5_map_canvas"), myOptions);
    if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
         if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
            map.setCenter(results[0].geometry.location);
            var infowindow = new google.maps.InfoWindow(
                { content: '<span class="s5_googlemapaddress" style="font-family:arial;font-size:11px;">'+address+' <br/><br/><a href="//maps.google.com/maps?saddr=&daddr='+address+'" target ="_blank" style="padding:2px 5px 2px 5px;" class="button">Search Directions to CUEA</a></span>',
                  size: new google.maps.Size(150,50) }
				  );

			var image = new google.maps.MarkerImage(' http://www.cuea.edu//modules/mod_s5mapit/images/marker.png',
			  // This marker is 20 pixels wide by 32 pixels tall.
			  new google.maps.Size(48, 48),
			  // The origin for this image is 0,0.
			  new google.maps.Point(0,0),
			  // The anchor for this image is the base of the flagpole at 0,32.
			  new google.maps.Point(10, 40));


            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
				icon: image,
                map: map,
                title:address });

				google.maps.event.addListener(marker, 'click', function() {

                infowindow.open(map,marker);


				});
          } else { alert("No results found"); }
        } else { alert("Geocode was not successful for the following reason: " + status);}  });   }  }

	function jm_mapload() {JM_GMstartup();}
	window.setTimeout(jm_mapload,100);
//]]>
</script>


<div id="s5_map_canvas" class="s5_mapdisplay" style="height: 375px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -163, -236);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -163, -236);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div></div></div><div style="width: 48px; height: 48px; overflow: hidden; position: absolute; left: -10px; top: -40px; z-index: 0;"><img alt="" src=" http://www.cuea.edu//modules/mod_s5mapit/images/marker.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 46px; height: 38px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -163, -236);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39458!3i33014!4i256!2m3!1e0!2sm!3i466174968!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=99711" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39456!3i33014!4i256!2m3!1e0!2sm!3i466174968!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=25406" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39456!3i33013!4i256!2m3!1e0!2sm!3i466174968!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=7065" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39460!3i33013!4i256!2m3!1e0!2sm!3i466174632!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=32105" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39460!3i33014!4i256!2m3!1e0!2sm!3i466174728!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=27687" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39457!3i33014!4i256!2m3!1e0!2sm!3i466174968!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=128094" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39457!3i33013!4i256!2m3!1e0!2sm!3i466174968!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=109753" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39458!3i33013!4i256!2m3!1e0!2sm!3i466174968!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=81370" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39459!3i33013!4i256!2m3!1e0!2sm!3i466174632!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=92453" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i39459!3i33014!4i256!2m3!1e0!2sm!3i466174728!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyAc-XpV5OmcfGW8-IfUXXRdMylP-jfv2xg&amp;token=88035" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div title="LRC Road, Nairobi NAIROBI KENYA 254" style="width: 48px; height: 48px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; touch-action: none; left: -10px; top: -40px; z-index: 0;"><img alt="" src=" http://www.cuea.edu//modules/mod_s5mapit/images/marker.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 46px; height: 38px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=-1.350768,36.752776&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 204px; top: 98px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2019 Google</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 72px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2019 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2019 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@-1.3507677,36.7527758,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="153" style="margin: 10px; user-select: none; position: absolute; bottom: 167px; right: 40px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 72px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div></div><div class="gm-svpc" dir="ltr" title="Drag Pegman onto the map to open Street View" controlwidth="40" controlheight="40" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 50%; top: 50%;"></div><div style="position: absolute; left: 50%; top: 50%;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2223%22%20height%3D%2238%22%20viewBox%3D%220%200%2023%2038%22%3E%0A%3Cpath%20d%3D%22M16.6%2C38.1h-5.5l-0.2-2.9-0.2%2C2.9h-5.5L5%2C25.3l-0.8%2C2a1.53%2C1.53%2C0%2C0%2C1-1.9.9l-1.2-.4a1.58%2C1.58%2C0%2C0%2C1-1-1.9v-0.1c0.3-.9%2C3.1-11.2%2C3.1-11.2a2.66%2C2.66%2C0%2C0%2C1%2C2.3-2l0.6-.5a6.93%2C6.93%2C0%2C0%2C1%2C4.7-12%2C6.8%2C6.8%2C0%2C0%2C1%2C4.9%2C2%2C7%2C7%2C0%2C0%2C1%2C2%2C4.9%2C6.65%2C6.65%2C0%2C0%2C1-2.2%2C5l0.7%2C0.5a2.78%2C2.78%2C0%2C0%2C1%2C2.4%2C2s2.9%2C11.2%2C2.9%2C11.3a1.53%2C1.53%2C0%2C0%2C1-.9%2C1.9l-1.3.4a1.63%2C1.63%2C0%2C0%2C1-1.9-.9l-0.7-1.8-0.1%2C12.7h0Zm-3.6-2h1.7L14.9%2C20.3l1.9-.3%2C2.4%2C6.3%2C0.3-.1c-0.2-.8-0.8-3.2-2.8-10.9a0.63%2C0.63%2C0%2C0%2C0-.6-0.5h-0.6l-1.1-.9h-1.9l-0.3-2a4.83%2C4.83%2C0%2C0%2C0%2C3.5-4.7A4.78%2C4.78%200%200%2C0%2011%202.3H10.8a4.9%2C4.9%2C0%2C0%2C0-1.4%2C9.6l-0.3%2C2h-1.9l-1%2C.9h-0.6a0.74%2C0.74%2C0%2C0%2C0-.6.5c-2%2C7.5-2.7%2C10-3%2C10.9l0.3%2C0.1%2C2.5-6.3%2C1.9%2C0.3%2C0.2%2C15.8h1.6l0.6-8.4a1.52%2C1.52%2C0%2C0%2C1%2C1.5-1.4%2C1.5%2C1.5%2C0%2C0%2C1%2C1.5%2C1.4l0.9%2C8.4h0Zm-10.9-9.6h0Zm17.5-.1h0Z%22%20style%3D%22fill%3A%23333%3Bopacity%3A0.7%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M5.9%2C13.6l1.1-.9h7.8l1.2%2C0.9%22%20style%3D%22fill%3A%23ce592c%22%2F%3E%0A%3Cellipse%20cx%3D%2210.9%22%20cy%3D%2213.1%22%20rx%3D%222.7%22%20ry%3D%220.3%22%20style%3D%22fill%3A%23ce592c%3Bopacity%3A0.5%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M20.6%2C26.1l-2.9-11.3a1.71%2C1.71%2C0%2C0%2C0-1.6-1.2H5.7a1.69%2C1.69%2C0%2C0%2C0-1.5%2C1.3l-3.1%2C11.3a0.61%2C0.61%2C0%2C0%2C0%2C.3.7l1.1%2C0.4a0.61%2C0.61%2C0%2C0%2C0%2C.7-0.3l2.7-6.7%2C0.2%2C16.8h3.6l0.6-9.3a0.47%2C0.47%2C0%2C0%2C1%2C.44-0.5h0.06c0.4%2C0%2C.4.2%2C0.5%2C0.5l0.6%2C9.3h3.6L15.7%2C20.3l2.5%2C6.6a0.52%2C0.52%2C0%2C0%2C0%2C.66.31h0l1.2-.4a0.57%2C0.57%2C0%2C0%2C0%2C.5-0.7h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3Cpath%20d%3D%22M7%2C13.6l3.9%2C6.7%2C3.9-6.7%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%2F%3E%0A%3Ccircle%20cx%3D%2210.9%22%20cy%3D%227%22%20r%3D%225.9%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3C%2Fsvg%3E%0A" aria-label="Street View Pegman Control" style="height: 30px; width: 30px; position: absolute; transform: translate(-50%, -50%); pointer-events: none;"><img src="data:image/svg+xml,%3Csvg%20width%3D%2224px%22%20height%3D%2238px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2024%2038%22%3E%0A%3Cpath%20d%3D%22M22%2C26.6l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L6.6%2C21l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%2F%3E%22%0A%3C%2Fsvg%3E%0A%0A" aria-label="Pegman is on top of the Map" style="display: none; height: 30px; width: 30px; position: absolute; transform: translate(-50%, -50%); pointer-events: none;"><img src="data:image/svg+xml,%3Csvg%20width%3D%2240px%22%20height%3D%2250px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2040%2050%22%3E%0A%3Cpath%20d%3D%22M34.00%2C-30.40l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C-36.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Zm1.2%2C59.1-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C24.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C38.80h-4a1.64%2C1.64%2C0%2C0%2C1-1.4-1.1l-3.1-8a0.9%2C0.9%2C0%2C0%2C1-.5.1l-1.4.1a1.62%2C1.62%2C0%2C0%2C1-1.6-1.4l-1.1-13.1%2C1.6-1.3a6.87%2C6.87%2C0%2C0%2C1-3-4.6A7.14%2C7.14%200%200%2C1%202%204a7.6%2C7.6%2C0%2C0%2C1%2C4.7-3.1%2C7.14%2C7.14%2C0%2C0%2C1%2C5.5%2C1.1%2C7.28%2C7.28%2C0%2C0%2C1%2C2.3%2C9.6l2.1-.1%2C0.1%2C1c0%2C0.2.1%2C0.5%2C0.1%2C0.8a2.41%2C2.41%2C0%2C0%2C1%2C1%2C1s1.9%2C3.2%2C2.8%2C4.9c0.7%2C1.2%2C2.1%2C4.2%2C2.8%2C5.9a2.1%2C2.1%2C0%2C0%2C1-.8%2C2.6l-0.6.4a1.63%2C1.63%2C0%2C0%2C1-1.5.2l-0.6-.3a8.93%2C8.93%2C0%2C0%2C0%2C.5%2C1.3%2C7.91%2C7.91%2C0%2C0%2C0%2C1.8%2C2.6l0.6%2C0.3v4.6l-4.5-.1a7.32%2C7.32%2C0%2C0%2C1-2.5-1.5l-0.4%2C3.6h0Zm-10-19.2%2C3.5%2C9.8%2C2.9%2C7.5h1.6V35l-1.9-9.4%2C3.1%2C5.4a8.24%2C8.24%2C0%2C0%2C0%2C3.8%2C3.8h2.1v-1.4a14%2C14%2C0%2C0%2C1-2.2-3.1%2C44.55%2C44.55%2C0%2C0%2C1-2.2-8l-1.3-6.3%2C3.2%2C5.6c0.6%2C1.1%2C2.1%2C3.6%2C2.8%2C4.9l0.6-.4c-0.8-1.6-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a0.54%2C0.54%2C0%2C0%2C0-.4-0.3l-0.7-.1-0.1-.7a4.33%2C4.33%2C0%2C0%2C0-.1-0.5l-5.3.3%2C2.2-1.9a4.3%2C4.3%2C0%2C0%2C0%2C.9-1%2C5.17%2C5.17%2C0%2C0%2C0%2C.8-4%2C5.67%2C5.67%2C0%2C0%2C0-2.2-3.4%2C5.09%2C5.09%2C0%2C0%2C0-4-.8%2C5.67%2C5.67%2C0%2C0%2C0-3.4%2C2.2%2C5.17%2C5.17%2C0%2C0%2C0-.8%2C4%2C5.67%2C5.67%2C0%2C0%2C0%2C2.2%2C3.4%2C3.13%2C3.13%2C0%2C0%2C0%2C1%2C.5l1.6%2C0.6-3.2%2C2.6%2C1%2C11.5h0.4l-0.3-8.2h0Z%22%20style%3D%22fill%3A%23333%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M3.35%2C15.90l1.1%2C12.5a0.39%2C0.39%2C0%2C0%2C0%2C.36.42l0.14%2C0%2C1.4-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-3.3-8.6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M5.20%2C28.80l1.1-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-1.2-3.1Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.40%2C35.70l-3.8-1.2-2.7-7.8L12.00%2C15.5l3.4-2.9c0.2%2C2.4%2C2.2%2C14.1%2C3.7%2C17.1%2C0%2C0%2C1.3%2C2.6%2C2.3%2C3.1v2.9m-8.4-8.1-2-.3%2C2.5%2C10.1%2C0.9%2C0.4v-2.9%22%20style%3D%22fill%3A%23e5892b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M17.80%2C25.40c-0.4-1.5-.7-3.1-1.1-4.8-0.1-.4-0.1-0.7-0.2-1.1l-1.1-2-1.7-1.6s0.9%2C5%2C2.4%2C7.1a19.12%2C19.12%2C0%2C0%2C0%2C1.7%2C2.4h0Z%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M14.40%2C37.80h-3a0.43%2C0.43%2C0%2C0%2C1-.4-0.4l-3-7.8-1.7-4.8-3-9%2C8.9-.4s2.9%2C11.3%2C4.3%2C14.4c1.9%2C4.1%2C3.1%2C4.7%2C5%2C5.8h-3.2s-4.1-1.2-5.9-7.7a0.59%2C0.59%2C0%2C0%2C0-.6-0.4%2C0.62%2C0.62%2C0%2C0%2C0-.3.7s0.5%2C2.4.9%2C3.6a34.87%2C34.87%2C0%2C0%2C0%2C2%2C6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C12.70l-3.3%2C2.9-8.9.4%2C3.3-2.7%22%20style%3D%22fill%3A%23ce592b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M9.10%2C21.10l1.4-6.2-5.9.5%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M12.00%2C13.5a4.75%2C4.75%2C0%2C0%2C1-2.6%2C1.1c-1.5.3-2.9%2C0.2-2.9%2C0s1.1-.6%2C2.7-1%22%20style%3D%22fill%3A%23bb3d19%22%3E%3C%2Fpath%3E%0A%3Ccircle%20cx%3D%227.92%22%20cy%3D%228.19%22%20r%3D%226.3%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fcircle%3E%0A%3Cpath%20d%3D%22M4.70%2C13.60a6.21%2C6.21%2C0%2C0%2C0%2C8.4-1.9v-0.1a8.89%2C8.89%2C0%2C0%2C1-8.4%2C2h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.20%2C27.20l0.6-.4a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3c-0.7-1.5-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15a1.68%2C1.68%2C0%2C0%2C0-.4%2C2.1s2.3%2C3.9%2C3.1%2C5.3c0.6%2C1%2C2.1%2C3.7%2C2.9%2C5.1a0.94%2C0.94%2C0%2C0%2C0%2C1.24.49l0.16-.09h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M19.40%2C19.80c-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15-0.3.3c1.1%2C1.5%2C2.9%2C3.8%2C3.9%2C5.4%2C1.1%2C1.8%2C2.9%2C5%2C3.8%2C6.7l0.1-.1a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3%2C57.67%2C57.67%2C0%2C0%2C0-2.7-5.6h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3C%2Fsvg%3E%0A" aria-label="Street View Pegman Control" style="display: none; height: 40px; width: 40px; position: absolute; transform: translate(-60%, -45%); pointer-events: none;"></div></div><div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;"><div style="width: 40px; height: 40px;"><button draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"></button></div></div></div></div></div></div>


		</div>

		</div>
            </div>
            <!-- Map Ends /-->

            <!-- Contact content area -->
            <div class="content-wrapper">

            	<div class="medium-3 small-12 columns">
<!--                 	<div class="contact-info">
                    	<img src="{{ asset('images/3.jpg') }}" alt="Calling Girl" />
                    </div> -->
                    <div class="contact-info">
                    	<h4>LANG'ATA CAMPUS</h4>
                        <p>
                            <strong>P.O. </strong>Box 62157 - 00200<br>
                            Nairobi, Kenya<br>
                            <strong>Email: </strong>admissions@cuea.edu<br>
                            <strong>Mobile: </strong>+(254) 709-691111<br>
                            <strong>Mobile: </strong>+(254) 709-691000<br>
                            <strong>Mobile: </strong>+(254) 704-913318
                        </p>
                    </div>

                    <div class="contact-info">
                    	<h4>ELDORET - GABA CAMPUS</h4>
                        <p>
                            <strong>P.O. Box 908 - 30100<br>
                            Eldoret, Kenya<br>
                            <strong>Email: </strong>registrygaba@cuea.edu<br>
                            <strong>Mobile: </strong>+(254) - 728 458276<br>
                            <strong>Mobile: </strong>+(254) - 738 238352<br>
                            <strong>Sms: </strong>+(254) - 729 742791
                        </p>
                    </div>
                    <div class="contact-info">
                    	<h4>Follow Us</h4>
                         <div class="socialicons">
                            <a href="https://www.facebook.com/TheCatholicUniversityOfEasternAfricaCuea/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/cuea_official" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCkPi1mamzw2vcA97zWS76lw" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div><!-- Social Icons /-->
                    </div>
                </div><!-- Left column Ends /-->



                <div class="medium-9 small-12 columns">
                	<h2>Please fill the form below to contact us</h2>
                     @include('partials.message')
                    <div class="contact-form">
						<form action="{{ route('contact.store') }}" method="post">

                            @csrf
                        	<div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	First Name *
                                        <input type="text" value="{{ old('fullName') }}" required name="fullName" id="fullName" placeholder="Your first name here..." />
                                    </label>
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Phone Number *
                                        <input type="text" value="{{ old('phoneNumber') }}" name="phoneNumber" id="phoneNumber" required placeholder="Your phone number here..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->

                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Email *
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Enter your email ..." />
                                    </label>
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Subject *
                                        <input type="text" required name="subject" id="subject" value="{{ old('subject') }}" placeholder="Reason contacting us ..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->

                            <!-- <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Select a Course
                                        <select name="course">
                                        	<option value="1">Chose Course</option>
                                            <option value="2">Course One</option>
                                            <option value="3">Course Two</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Select Teacher
                                        <select name="teacher">
                                        	<option value="1">Chose Teacher</option>
                                            <option value="2">Teacher One</option>
                                            <option value="3">Teacher Two</option>
                                        </select>
                                    </label>
                                </div>
                            </div> -->
                            <!-- Row Ends /-->

                            <div class="row">
                            	<div class="medium-12 small-12 columns">
                                	<label>
                                    	Your Comments
                                        <textarea rows="10" required name="message" id="message" placeholder="Your message ...">{{ old('message') }}</textarea>
                                    </label>

                                	<input type="submit" class="button primary" value="Send your message" />
                                </div>
                            </div><!-- Row Ends /-->
						</form>
                    </div><!-- Contact form /-->
                </div><!-- Right Column Ends /-->
                <div class="clearfix"></div>
            </div>
            <!-- Contact Content Area /-->

        </div><!-- Row /-->
    </div>
    <!-- Content Section Ends /-->



    @include('partials.footer')
    @endsection
