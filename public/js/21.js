/*

Digitpaint HTML5 Adventscalendar 2011.

 _  _  _  _                                                       _                                                 _  _  _       _                  _
(_)(_)(_)(_)                                                     (_)                                             _ (_)(_)(_) _ _ (_)                (_)
 (_)      (_)_  _  _  _  _     _  _  _ _  _  _  _    _  _   _  _ (_) _  _  _    _  _  _  _  _       _  _        (_)         (_(_)(_)   _  _  _  _ _ (_) _  _
 (_)        (_)(_)(_)(_)(_)_ _(_)(_)(_(_)(_)(_)(_)_ (_)(_)_(_)(_)(_)(_)(_)(_)_ (_)(_)(_)(_)(_)_  _ (_)(_)                 _ (_)  (_) _(_)(_)(_)(_(_)(_)(_)(_)
 (_)        (_(_) _  _  _ (_(_)      (_) _  _  _ (_(_)   (_)   (_(_)        (_(_) _  _  _ (_)(_)(_)                    _ (_)     (_)(_)_  _  _  _   (_)
 (_)       _(_(_)(_)(_)(_)(_(_)      (_)(_)(_)(_)(_(_)   (_)   (_(_)        (_(_)(_)(_)(_)(_)(_)                    _ (_)        (_)  (_)(_)(_)(_)_ (_)     _
 (_)_  _  (_) (_)_  _  _  _ (_)_  _  (_)_  _  _  _ (_)   (_)   (_(_) _  _  _(_(_)_  _  _  _  (_)                 _ (_) _  _  _ _ (_) _ _  _  _  _(_)(_)_  _(_)
(_)(_)(_)(_)    (_)(_)(_)(_)  (_)(_)(_)(_)(_)(_)(_)(_)   (_)   (_(_)(_)(_)(_)   (_)(_)(_)(_) (_)                (_)(_)(_)(_)(_(_)(_)(_(_)(_)(_)(_)    (_)(_)


Copyright 2011 by Digitpaint. This code is licensed under the MIT License.

*/
  
var initParallax = function(){
  
  // Setup variables
  var el = document.getElementById("parallax");
  var layerDistanceToHorizon = [50, 30, 10, 5];
  var horizonDistance = 200;
          
  // Simplified ways to get the background size (we should use all of them in our calculation)
  var style = window.getComputedStyle(el,null);
  var backgroundSize = style.getPropertyValue("background-size").split(",")[0].split(" ").map(function(x){ return parseInt(x)});
  var backgroundOffset = style.getPropertyValue("background-position").split(",")[0].split(" ").map(function(x){ return parseInt(x)});

  //  The original viewer offset (set to the center of the element here.)
  var viewerOffset = [el.offsetWidth/2, el.offsetHeight/2];
            
  // Determine the offsets of the element for the mouse-cursor 
  // coordinates
  elOffsets = Utility.getPosition(el);
  
  // Function : Calculate all new offsets according to the viewer x/y
  var calculateOffsets = function(x,y){
    var xTan = -1* x/horizonDistance;
    var yTan = -1* y/horizonDistance;
    return layerDistanceToHorizon.map(function(value){
      return [value * xTan, value * yTan];
    });
  };
          
  // Function : Actually move the viewer
  var moveViewer = function(x,y){
    var offsets = calculateOffsets(x,y);
          
    el.style.backgroundPosition = offsets.map(function(off){
      var x = backgroundOffset[0] - off[0];
      var y = backgroundOffset[1] - off[1];
      return x + "px " + y + "px" ;
    }).join(", ");
  };
          
  //  Add the mouse-move event
  document.addEventListener("mousemove", function(e){
    var mouse = getEventMousePosition(e);
    moveViewer(mouse[0] - (elOffsets[0] + viewerOffset[0]), mouse[1] - (elOffsets[1] +  viewerOffset[1]));            
  });            
};


// Get the mouse coordinates from an event
var getEventMousePosition = function(e){
  var x = 0;
  var y = 0;

  if (!e) var e = window.event;
  if (e.pageX || e.pageY) {
    x = e.pageX;
    y = e.pageY;
  } else if (e.clientX || e.clientY) {
    x = e.clientX + document.body.scrollLeft;
    y = e.clientY + document.body.scrollTop;
  }
  return [x,y];
}
