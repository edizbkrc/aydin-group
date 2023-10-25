(function ($) {
    $.fn.photoMarker = function (markerData) {
        var $photoContainer = this;
        var $photo = $photoContainer.find('img');
        var markers = [];
        var zoomFactor = 1.0;
        var translateX = 0;
        var translateY = 0;

        function placeMarkers() {
            $photoContainer.find(".marker").remove();
            markerData.forEach(function (data, index) {
                var markerLeft = (data.left * $photo.width() * zoomFactor) + translateX;
                var markerTop = (data.top * $photo.height() * zoomFactor) + translateY;


                var $marker = $("<div>")
                    .addClass("marker")
                    .css({left: markerLeft + "px", top: markerTop + "px"});

                $marker.data("markerData", data);
                $marker.data("markerIndex", index);

                $photoContainer.append($marker);
                markers.push($marker);
                $marker.on("click", function () {
                    var clickedMarkerData = $(this).data("markerData");
                    var clickedMarkerIndex = $(this).data("markerIndex");
                    var markerLeft = clickedMarkerData.left * $photo.width();
                    var markerTop = clickedMarkerData.top * $photo.height() - 20;

                    var infoWindow = $('<a>').addClass('mapInfoWindows')
                        .html(' <div class="windowImage"> <img src="' + clickedMarkerData.photo + '" alt="">  </div> <div' +
                            ' class="windowText">' + clickedMarkerData.text + '</div>');
                    infoWindow.attr("href", clickedMarkerData.link);
                    setTimeout(function () {
                        $marker.after(infoWindow);

                    }, 100);

                    infoWindow.css({
                        top: (markerTop - 20) + "px",
                        left: (markerLeft - 20) + "px",
                    });
                    infoWindow.click(function () {
                        $(this).remove();
                    });

                });
            });
        }

        function updateMarkers() {
            markers.forEach(function ($marker, index) {
                var data = markerData[index];
                var markerLeft = data.left * $photo.width();
                var markerTop = data.top * $photo.height();

                $marker.css({left: markerLeft + "px", top: markerTop + "px"});
            });
        }

        placeMarkers();
        $(window).on("resize", function () {
            updateMarkers();
        });


        return this;
    };
})(jQuery);
