<x-layout title="adicionar serie">
    <form action={{route('series.store')}} method="post">
        @csrf
        <label for="">
            Nome:
        </label>
        <input type="text" name="nome" id="nome" />
        <button type="submit">Enviar</button>
    </form>
</x-layout>
