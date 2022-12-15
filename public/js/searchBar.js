function searchBar(value){
  value = value.toLowerCase();
  let cardAnimes = document.querySelectorAll(".card");
  cardAnimes.forEach(card => {
    let animeName = card.querySelector("h5").textContent.toLowerCase();
    if(!animeName.includes(value)){
      card.classList.add('d-none');
    }else{
      card.classList.remove('d-none');
    }
  });
}