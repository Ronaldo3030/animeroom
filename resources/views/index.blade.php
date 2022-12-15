<x-layout title="Home">
  <div class="d-flex position-relative justify-content-between py-3 align-items-center">
    <div><button onclick="getOneAnime('17')">Teste apí</button></div>
    <h1 class="text-center">AnimeRoom</h1>
    <a style="height:30px;" href="/animes/register" type="button" class="btn btn-success d-flex align-items-center">
      Add anime
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        class="bi bi-plus-circle-fill ms-1" viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
      </svg>
    </a>
  </div>
  <div class="content">
    <div class="content-animes d-grid" style="grid-template-columns: 1fr 1fr 1fr;gap:15px;">
      @foreach ($animes as $anime)
        <div class="card p-0">
          <div style="width: 100%;
          height: 150px;
          overflow: hidden;">
            <img class="card-img-top" src="/img/animes/{{ $anime->img }}" style="width:100%">
          </div>
          <div class="card-body position-relative">
            <h5 class="card-title">{{ $anime->name }}</h5>
            <p class="card-text">{{ $anime->comment }}</p>
            <span class="badge bg-primary rounded-pill position-absolute"
              style="top:10px;right:10px;">{{ $anime->score }}</span>
            <div class="dropdown position-absolute" style="bottom:5px;right:5px;">
              <button class="btn bg-transparent border-0 text-dark" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-gear-fill" viewBox="0 0 16 16">
                  <path
                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                </svg>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/animes/edit/{{ $anime->id }}">Edit</a></li>
                <li><a class="dropdown-item" href="/animes/delete/{{ $anime->id }}">Delete</a></li>
              </ul>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <script src="{{ asset('js/getOneAnime.js') }}"></script>
  <script src="{{ asset('js/searchBar.js') }}"></script>
</x-layout>
