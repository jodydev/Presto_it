<x-layout>
    <br><br><br><br><br> 
    <form action="/login" method="post" class="form-control m-auto w-50">
        @csrf
        
        <label for="email">la tua email</label> 
        <br>
        <input type="email" name="email" id="emailLogin "class="form-control">
        <br>
        <label for="password">la tua password</label> 
        <input type="password" name="password" id="passwordLogin"class="form-control">
        <br>
        
        <input type="submit" class="button-register" value="Accedi"/>
    </form>
</x-layout>