
$(window).scroll(function () {
  var scrollTop = $(this).scrollTop();
  if (scrollTop > 1) {

    $('#navbar').css('padding', '5px 10px')
    $('#navbar').addClass("navbar-normal");
    $('#navbar').removeClass("navbar-transparent");

  } else {
    $('#navbar').addClass("navbar-transparent");
    $('#navbar').removeClass("navbar-normal");

  }
})


AOS.init({
  easing: 'ease-in-out-sine'
});

setInterval(addItem, 300);

var itemsCounter = 1;
var container = document.getElementById('aos-demo');

function addItem() {
  if (itemsCounter > 42) return;
  var item = document.createElement('div');
  item.classList.add('aos-item');
  item.setAttribute('data-aos', 'fade-up');
  item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
  itemsCounter++;
}
