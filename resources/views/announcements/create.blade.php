<x-layout>

    <form action="#" method="post">
        @csrf
        <label for="title" >titolo</label>
        <br>
        <input type="text" name="title">
        <br>
        <label for="price">prezzo</label>
        <br>
        <input type="text"name="price">
        <br>
        <label for="description">descrizione</label>
        <br>
        <textarea name="description" id="" cols="30" rows="30"></textarea>
    </form>

</x-layout>