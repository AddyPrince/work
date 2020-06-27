
$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '5px 25px')
    } else {
        $('#navbar').css('padding', '25px')
    }
})


AOS.init({
    easing: 'ease-in-out-sine'
  });

setInterval(addItem, 300);

var itemsCounter = 1;
var container = document.getElementById('aos-demo');

function addItem () {
  if (itemsCounter > 42) return;
  var item = document.createElement('div');
  item.classList.add('aos-item');
  item.setAttribute('data-aos', 'fade-up');
  item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
  itemsCounter++;
}
