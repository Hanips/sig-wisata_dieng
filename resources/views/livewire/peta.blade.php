<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Peta Potensi') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Halo ditest </p>
                                {{-- map1 --}}
                                <div id="map" style="width: 1050px; height: 600px;" wire:ignore></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts1')
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

    <script type="text/javascript">
      function initialize() {
        
        var mapOptions = {   
            zoom: 8,
            center: new google.maps.LatLng(-7.9812985, 112.6319264), 
            disableDefaultUI: true
        };
    
        var mapElement = document.getElementById('map');
    
        var map = new google.maps.Map(mapElement, mapOptions);
    
        setMarkers(map, officeLocations);
    
    }
    
    function setMarkers(map, locations)
    {
        var globalPin = 'img/marker.png';
    
        for (var i = 0; i < locations.length; i++) {
           
            var office = locations[i];
            var myLatLng = new google.maps.LatLng(office[4], office[3]);
            var infowindow = new google.maps.InfoWindow({content: contentString});
             
            var contentString = 
                '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
                '<div id="bodyContent">'+ 
                '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
                '</div>'+
                '</div>';
    
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: office[1],
                icon:'img/marker.png'
            });
    
            google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
        }
    }
    
    function getInfoCallback(map, content) {
        var infowindow = new google.maps.InfoWindow({content: content});
        return function() {
                infowindow.setContent(content); 
                infowindow.open(map, this);
            };
    }
    
    initialize();
    </script>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
