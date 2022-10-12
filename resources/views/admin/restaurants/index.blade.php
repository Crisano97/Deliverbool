@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                @if (session('result-message'))
                    <div class="alert alert-{{ session('result-class-message') }}">
                        {{ session('result-message') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <th>Nome Attivita</th>
                        <th>P.IVA</th>
                        <th>Indirizzo</th>
                        <th>Immagine</th>
                        <th>
                            <a class="btn btn-primary" href="{{ route('admin.restaurants.create') }}">
                                Create new post
                            </a>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->name }}</td>
                                <td>{{ $restaurant->p_iva}}</td>
                                <td>{{ $restaurant->address }}</td>
                                <td>{{ $restaurant->image }}</td>

                                {{-- <td>
                                    <span class="badge text-white" 
                                        @if (isset($post->category))
                                            style="background-color: {{ $post->category->color }}">
                                            {{ $post->category->name }}
                                        @else
                                            style="background-color: red">
                                            -
                                        @endif
                                    </span>
                                </td> --}}
                                {{-- <td>
                                    <span>  
                                        @if (isset($post->tags))
                                            @foreach ($post->tags as $tag)
                                                #{{ $tag->name }}
                                            @endforeach
                                        @else
                                            no tag
                                        @endif
                                    </span>
                                </td> --}}
                                {{-- <td>
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline delete-comics">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td> --}}
                                
                                    
                            </tr>
                        @empty
                            <tr>
                                <td colspan=7>non sono disponibili restaurant</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection