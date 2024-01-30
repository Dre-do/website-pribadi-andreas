<h1>Tambah Post </h1>

<form action ="{{ route ('posts.store') }}" method="POST" >
    @csrf
    <div>
        <label for="name">Judul:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="price">Author:</label>
        <input type="number" name="price" id="price" step="any">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url">
    </div>

    <div>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
    </div>
    <button type="submit">Tambah Post</button>
</form>
