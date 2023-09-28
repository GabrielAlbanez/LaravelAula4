<x-layout title="Ver Series">
    <ul>
        @foreach($series as $serie)
            <li>{{$serie->nome}}</li>
            <form action={{route('series.destroy',$serie->id)}} method="POST">
                   @method('DELETE')
                   @csrf
                   <button>x</button>
            </form>

            <form action={{route('series.edit',$serie->id)}}>

                <button>atualizar</button>

            </form>
        @endforeach
    </ul>

    <button><a href={{route('series.create')}}>Ir para adicionar series</a></button>
</x-layout>
