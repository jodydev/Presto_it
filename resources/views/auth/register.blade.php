<x-layout>



@if ($errors->any())
    <div class="alert alert-danger my-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/register" method="post" class="form-control m-auto w-50">
        @csrf
        <label for="name">Il tuo nome</label> 
        <br>
        <input type="text" name="name" id="nameRegister" class="form-control" >
        <br>
        <label for="email" class="form-control">la tua email</label> 
        <br>
        <input type="email" name="email" id="emailRegister" class="form-control">
        <br>
        <label for="password" >la tua password</label> 
        <br>
        <input type="password" name="password" id="passwordRegister" class="form-control">
        <br>
        <label for="password_confirmation" >conferma password</label>
        <br> 
        <input type="password" name="password_confirmation" id="password_confirmationRegister" class="form-control">
        <input type="submit" class="btn btn-primary"value="registrati">
    </form>
</x-layout>