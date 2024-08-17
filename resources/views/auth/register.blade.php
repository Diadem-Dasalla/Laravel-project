<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Other form fields -->

    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control">
            @foreach($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
