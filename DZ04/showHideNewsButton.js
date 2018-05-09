var shown = 1;
var newsBoard = document.getElementById("news_board");
var hideShowButton = document.getElementById("hide_show_news");

function hideShowNews(){
  if(shown == 1){
    newsBoard.style.display = "none";
    hideShowButton.value = "Show News";

    shown = 0;
  } else{
    newsBoard.style.display = "block";
    hideShowButton.value = "Hide News";

    shown = 1;
  }
}
