function getOneAnime(id){
  $.ajax({
    type: "GET",
    url: `/api/anime/${id}`,
    success: function(resp){
      let result = resp.data;
      console.log(result);
    }
  });
}