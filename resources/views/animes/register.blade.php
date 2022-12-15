<x-layout title="Cadastrar">
  <div class="d-flex position-relative justify-content-center">
    <h1 class="text-center">Register anime</h1>
  </div>
  <div class="content d-flex justify-content-center">
    <form action="" method="post" class="w-50" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">Comment:</label>
        <input type="text" class="form-control" name="comment">
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" aria-describedby="image" aria-label="Upload" name="image">
      </div>
      <div class="mb-3 d-flex align-items-center">
        <label for="score" class="form-label me-3">Score:</label>
        <select class="form-select w-auto" aria-label="Select score" name="score">
          <option value="10" selected>10</option>
          <option value="9">9</option>
          <option value="8">8</option>
          <option value="7">7</option>
          <option value="6">6</option>
          <option value="5">5</option>
          <option value="4">4</option>
          <option value="3">3</option>
          <option value="2">2</option>
          <option value="1">1</option>
        </select>
      </div>
      <div class="mb-3">
        <a href="/" type="button" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    </form>
  </div>
</x-layout>
