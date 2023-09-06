<x-layout>
    <form action="/login" method="post" class="form-control">
        @csrf
        
        <label for="email">la tua email</label> 
        <br>
        <input type="email" name="email" id="emailLogin">
        <br>
        <label for="password">la tua password</label> 
        <input type="password" name="password" id="passwordLogin">
        <br>
        
        <input type="submit" class="btn btn-primary"value="accedi">
    </form>
</x-layout>