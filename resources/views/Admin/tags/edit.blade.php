@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Tag</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.tags.update', $tag) }}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.tags.partials.form')
                <button type="submit" class="btn btn-primary">Update Tag</button>
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
