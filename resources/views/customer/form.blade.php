@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<div>
    <label for="name">Name</label>
    <input id="name" type="text" name='name' autocomplete="off" value="{{old('name') ?? $customer->name }}">
    @error('name')
    <p style="color:red;">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="email">Email</label>
    <input id="email" type="text" name='email' autocomplete="off" value="{{old('email') ?? $customer->email }}">
    @error('email')
    <p style="color:red;">{{ $message }}</p>
    @enderror
</div>

@csrf