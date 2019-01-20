var list = $(".list");

for (var index = 0; index < movies.length; index++) {
  $(list)
    .append(`<div data-index="${index}" class="col-12 col-md-4 text-center mb-4 item">
    <div class="card">
      <img
        class="card-img-top"
        src=${movies[index].image}
        alt=${movies[index].title}
      />
      <div class="card-body">
        <h2 class="card-title">${movies[index].title}</h2>
        <p class="card-text">
        ${movies[index].director}
        ${movies[index].genre}
        </p>
      </div>
    </div>
  </div>`);
}

function showDetails() {
  var index = $(this).data("index");

  $("h1.title").text(movies[index].title);
  $("p.resume").text(movies[index].resume);
  $("img.imageDetails").attr("src", movies[index].image);
  $("p.actors").text(movies[index].actors);
  $("p.genre").text(movies[index].genre);
  $("p.director").text(movies[index].director);
  $("p.duration").text(movies[index].duration);
  $("p.date").text(movies[index].date);

  $(".details").slideDown();
}
$(".item").on("click", showDetails);
