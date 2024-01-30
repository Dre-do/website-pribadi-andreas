<h1>Edit Post</h1>
<form action ="{{ route ('update', $post->id) }}" method="POST" >    
    @csrf
    @method('PUT')
    <div>
        <label for="name">Judul:</label>
        <input type="text" name="name" id="name" value="{{ $post->name }}">
    </div>
    <div>
        <label for="price">Author:</label>
        <input type="number" name="price" id="price" step="any" value="{{ $post->price }}">
    </div>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $post->description }}</textarea>
    </div>
    <div>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" value="{{ $post->image_url }}">
    </div>

    <div>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
    </div>
    <button type="submit">Update Post</button>
</form>
