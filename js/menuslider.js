var currentIndex = 0,
    items = $(".menu-container div"),
    itemAmt = items.length;

function cycleItems(){
  var item = $(".menu-container div").eq(currentIndex);
  items.hide();
  item.css("display","inline-block");
}

var autoSlide = setInterval(function(){
  currentIndex += 1;
  if(currentIndex > itemAmt -1){
    currentIndex = 0;
  }
  cycleItems();
}, 9000);

$(".menu-next").on("click", function(){
  clearInterval(autoSlide)
  currentIndex += 1;
  if(currentIndex > itemAmt -1){
    currentIndex = 0;
  }
  cycleItems();
})


$(".menu-prev").on("click", function(){
  clearInterval(autoSlide)
  currentIndex += 1;
  if(currentIndex > itemAmt -1){
    currentIndex = 0;
  }
  cycleItems();
})