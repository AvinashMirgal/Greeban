
<!--- Script Source Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
            AOS.init();
        </script> 
<!--- End of Script Source Files -->
<script>
   $(window).scroll(function(){
   $('nav').toggleClass('scrolled',$(this).scrollTop() > 620);    
   });
</script>
<script>
$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
</script>
<script>
$(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this).delay($(this).data('delay')).queue(function(){
      $(this).addClass('animate-in');
    });
  });
});

</script>

<script>
    // http://www.appelsiini.net/projects/viewport
// http://remysharp.com/2009/01/26/element-in-view-event-plugin/
// https://github.com/cobbweb/jquery.scrollwatch
var WINDOW_WIDTH = window.innerWidth || document.documentElement.clientWidth;
var WINDOW_HEIGHT = window.innerHeight || document.documentElement.clientHeight;

var ScrollMonitor = function (options) {
    this.items = [];
    this.options = {};

    for (var key in options) {
        this.options[key] = options[key];
    }
};

ScrollMonitor.prototype.add = function (node, options) {
    var gap = options.gap || 0;
    this.items.push({
        node: node,
        gap: +gap === gap ? [gap, gap, gap, gap] : gap,
        callbacks: {
            step: options.step || function (node, distance) {},
            enter: options.enter || function (node, distance) {},
            leave: options.leave || function (node, distance) {}
        }
    });
    
    this.resize();
};

ScrollMonitor.prototype.resize = function () {
    WINDOW_WIDTH = window.innerWidth || document.documentElement.clientWidth;
    WINDOW_HEIGHT = window.innerHeight || document.documentElement.clientHeight;

    for (var i = 0; i < this.items.length; i++) {
        var node = this.items[i].node;
        this.items[i].rect = {
            top: node.offsetTop,
            left: node.offsetLeft,
            width: node.clientWidth,
            height: node.clientHeight
        };
    }
};

ScrollMonitor.prototype.scroll = function (scrollX, scrollY) {

    for (var i = 0; i < this.items.length; i++) {
        var item = this.items[i];
        var rect = item.rect;
        var gap = item.gap;

        var distance = {
            top: (rect.top + rect.height) - scrollY,
            left: (rect.left + rect.width) - scrollX,
            right: rect.left - (WINDOW_WIDTH + scrollX),
            bottom: rect.top - (WINDOW_HEIGHT + scrollY),
        };

        var inView = (distance.right < -gap[1] && distance.left > gap[3] && distance.bottom < -gap[2] && distance.top > gap[0]);

        if (inView && !item.callbacks.once) {
            item.callbacks.once = true;
            item.callbacks.enter.call(this, item.node, distance);
        }

        if (!inView && item.callbacks.once) {
            item.callbacks.once = false;
            item.callbacks.leave.call(this, item.node, distance);
        }
        
        item.callbacks.step.call(this, item.node, distance);
    }
};

var monitor = new ScrollMonitor();
var nodeList = document.querySelectorAll('.item');

for (var i = 0; i < nodeList.length; i++) {
    monitor.add(nodeList[i], {
        gap: 0,
        enter: function (node, distance) {
            node.classList.add('in-view');
        },
        leave: function (node, distance) {
            node.classList.remove('in-view');
        }
    });
}

window.onscroll = function () { monitor.scroll(window.pageXOffset, window.pageYOffset); };
window.onresize = function () { monitor.resize(); window.onscroll(); };

window.onresize();
</script>
<script>
    Array.prototype.forEach.call(document.querySelectorAll('.pd-parallax'), function(elem){
        elem.style.backgroundImage = 'url('+elem.getAttribute('data-parallax-image')+')';
    })
</script>