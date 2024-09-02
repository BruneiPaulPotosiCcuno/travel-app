@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')

    @if (session('info'))
        
        <div class="alert alert-succes">
            <strong>{{session('info')}}</strong>
        </div>
        
    @endif
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Set the name of the category" value="{{ old('name', $category->name) }}">

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" placeholder="Set the SLUG of the category" value="{{ old('slug', $category->slug) }}" readonly>
                
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        function slugify(text) {
            return text
                .toString()
                .toLowerCase()
                .replace(/\s+/g, '-') // Reemplazar espacios con guiones
                .replace(/[^\w\-]+/g, '') // Remover caracteres no alfanuméricos
                .replace(/\-\-+/g, '-') // Reemplazar múltiples guiones con uno solo
                .replace(/^-+/, '') // Remover guiones al principio
                .replace(/-+$/, ''); // Remover guiones al final
        }

        $("#name").on('input', function() {
            var slug = slugify($(this).val());
            $("#slug").val(slug);
        });
    });
</script>
@endsection
