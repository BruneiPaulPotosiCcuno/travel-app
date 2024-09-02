<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Set the name of the tag" value="{{ old('name') }}">

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" id="slug" name="slug" class="form-control" placeholder="Set the SLUG of the tag" value="{{ old('slug') }}" readonly>
    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="color">Color</label>
    <select name="color" id="color" class="form-control">
        @foreach($colors as $key => $color)
            <option value="{{ $key }}" {{ old('color') == $key ? 'selected' : '' }}>{{ $color }}</option>
        @endforeach
    </select>
</div>