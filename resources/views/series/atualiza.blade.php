<x-layout title="adicionar serie">
    <form action={{route('series.update',$series->id)}} method="post">
        @csrf
        @method('PATCH')
        <label for="">
            Nome:
        </label>
        <input type="text" name="nome" id="nome" value={{$series->nome}} />
        <button type="submit">Enviar</button>
    </form>
</x-layout>
