@php
$roles = App\Models\Role::all();
@endphp

<div class="form-group">
    <label for="role">Role</label>
    <select id="role" name="role" class="form-control">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
    </select>
</div>
